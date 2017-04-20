<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 18.4.2017 г.
 * Time: 17:11
 */

namespace SoftUniBlogBundle\Controller\Admin;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Category;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\UserEditType;
use SoftUniBlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/category")
 * Class CategoryController
 * @package SoftUniBlogBundle\Controller\Admin
 */
class CategoryController extends Controller
{

    /**
     * @Route("/", name="admin_category_all")
     */
    public function indexAction(){

        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render("admin/category/all.html.twig",
            [
                'categories' => $categories
            ]);
    }

    /**
     * @Route("/edit/{id}", name="admin_category_edit")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id, Request $request){

        $category =$this->getDoctrine()->getRepository(Category::class)->find($id);

        if($category === null){
            return $this->redirectToRoute("admin_users_all");
        }

        $form=$this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

         if($form->isValid()){
             $em =$this->getDoctrine()->getManager();
             $em->persist($category);
             $em->flush();

             return $this->redirectToRoute("admin_category_all");
         }

        return $this->render("admin/category/edit.html.twig",[
            'form' => $form->createView(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/delete/{id}", name="admin_category_delete")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id, Request $request){

        $user =$this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("admin_users_all");
        }

        $form = $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();

            foreach ($user->getArticles() as $article){
                $em->remove($article);
            }

            $em->remove($user);
            $em->flush();

            return $this->redirectToRoute("admin_users_all");
        }

        return $this->render("admin/user/delete.html.twig",[
            'form' =>$form->createView(),
            'user' => $user
        ]);

    }

}