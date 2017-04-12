<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 12.4.2017 г.
 * Time: 10:03
 */

namespace SoftUniBlogBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\UserEditType;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Validator\Constraints as Assert;

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
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editUser($id){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("admin_panel");
        }
        $form = $this->createForm(UserEditType::class, $user);

        return $this->render('admin/editUser.html.twig', [
            'user' => $user,
            'form' => $form->createView()
            ]);

    }

}