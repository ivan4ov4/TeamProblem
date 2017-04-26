<?php
namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Entity\Role;
use SoftUniBlogBundle\Form\UserEditType;
use SoftUniBlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class UserController extends Controller
{


    /**
     * @Route("/register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            // 4) save the User!
            $role = $this->getDoctrine()->getRepository(Role::class)->findOneBy(['name' => 'ROLE_USER']);
            $user->addRole($role);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            return $this->redirectToRoute('security_login');
        }
        return $this->render(
            'user/register.html.twig',
            array('form' => $form->createView())
        );
    }


    /**
     * @Route("/profile", name="user_profile")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function profileAction()
    {
        $user = $this->getUser();
        $roles = [];
        $roleRepo = $this->getDoctrine()->getRepository(\SoftUniBlogBundle\Entity\Role::class);
        foreach ($user->getRoles() as $roleName) {
            $roles[] = $roleRepo->findOneBy(
                [
                    'name' => $roleName
                ]
            );
            $user->setRoles($roles);
        }


        return $this->render("user/profile.html.twig", [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * @Route("/profile/edit/{id}", name="user_profile_edit")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editProfile($id, Request $request){
        $user =$this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("admin_users_all");
        }

        $form=$this->createForm(UserEditType::class, $user);

        $oldPassword = $user->getPassword();

        $form->handleRequest($request);

        if($form->isValid()){
            if(empty($user->getPassword())){
                $user->setPassword($oldPassword);
            }else{
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
            }

            $roles = [];
            $roleRepo = $this->getDoctrine()->getRepository(\SoftUniBlogBundle\Entity\Role::class);
            foreach ($user->getRoles() as $roleName){
                $roles[] = $roleRepo->findOneBy(
                    [
                        'name'=> $roleName
                    ]
                );
                $user->setRoles($roles);
            }

            $em =$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("user_profile");
        }

        return $this->render("user/editProfile.html.twig",[
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

}
