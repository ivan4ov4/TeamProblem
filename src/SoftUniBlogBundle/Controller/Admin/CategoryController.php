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
use SoftUniBlogBundle\Form\CategoryType;
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
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editArticle($id, Request $request){

        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
        //var_dump($category);exit;
        if($category === null){
            return $this->redirectToRoute("admin_category_all");
        }

        $form = $this->createForm(CategoryType::class, $category);

        //var_dump($request);exit;
        $form->handleRequest($request);

        if($form->isSubmitted() && $form -> isValid()){

            $data = $this->getDoctrine()->getManager();
            $data->persist($category);
            var_dump($category);exit;
            $data->flush();

            return $this->redirectToRoute('admin_category_all', [
                    'id' => $category->getId()]
            );
        }

        return $this->render('admin/category/edit.html.twig',[
            'category' => $category,
            'form' => $form->createView()]);
    }




    /**
     * @Route("/delete/{id}", name="admin_category_delete")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id, Request $request){

        $category =$this->getDoctrine()->getRepository(Category::class)->find($id);

        if($category === null){
            return $this->redirectToRoute("admin_category_all");
        }

        $form=$this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if($form->isValid()){
            $em =$this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();

            return $this->redirectToRoute("admin_category_all");
        }

        return $this->render("admin/category/delete.html.twig",[
            'form' => $form->createView(),
            'category' => $category
        ]);
    }




    /**
     * @Route("/create", name="admin_category_create")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request){

        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($category);
            //var_dump($category);exit;
            $em->flush();

            return $this->redirectToRoute('admin_category_all');
        }

        return $this->render('admin/category/create.html.twig',
            ['form' => $form->createView()]);

    }

}