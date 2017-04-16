<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 12.4.2017 г.
 * Time: 10:03
 */

namespace SoftUniBlogBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Role;
use SoftUniBlogBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\UserEditType;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Validator\Constraints as Assert;
use \Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin")
 *
 * Class AdminUserController
 * @package SoftUniBlogBundle\Controller\Admin
 */
class AdminUserController extends Controller
{
    /**
     * @Route("/panel", name="admin_panel")
     */
    public function adminPanel(){
        return $this->render('admin/panel.html.twig');
    }

    /**
     * @Route("/list/users", name="admin_list_users")
     */
    public function listUsers(){
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('admin/users.html.twig', ['users' => $users]);
    }

    /**
     * @Route("/edit/{id}", name="admin_user_edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editUser($id, Request $request){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("admin_panel");
        }

        $origPass = $user->getPassword();

        $form = $this->createForm(UserEditType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && isValid()){

            //roles
            $rolesRequest = $user->getRoles();
            $rolesRepository =$this->getDoctrine()->getRepository(Role::class);
            $roles= [];

            foreach ($rolesRequest as $roleName){
                $roles[] = $rolesRepository->findOneBy(['name' => $roleName]);
            }

            $user->setRoles($roles);
            // end roles

            //password
            if ($user->getPassword()){
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPassword());
                $user->setPassword();
            }
            else{
                $user->setPassword($origPass);
            }
            //end password

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist();
            $em->flush();

            return $this->redirectToRoute('admin_list_users');
        }

        return $this->render('admin/editUser.html.twig', [
            'user' => $user,
            'form' => $form->createView()
            ]);

    }

    public function listArticles(){
        $articles = $this->getDoctrine()->getRepository(ArticleType::class)->findAll();

        return $this->render('admin/articles.html.twig', ['users' => $articles]);
    }

    /**
     * @Route("/delete/{id}", name="admin_user_delete")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function deleteUser($id, Request $request){
        $user =$this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute('admin_list_users');
        }

        $form = $this->createForm(UserEditType::class, $user);

        return $this->render('admin/deleteUser.html.twig', [
            'user' =>$user,
            'form' => $form->createView()
        ]);
    }

}