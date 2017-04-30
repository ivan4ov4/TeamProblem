<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 18.4.2017 г.
 * Time: 23:04
 */

namespace SoftUniBlogBundle\Controller\Admin;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/article")
 * Class AdminUserEditController
 * @package SoftUniBlogBundle\Controller\Admin
 */
class AdminUserEditController extends Controller
{

    /**
     * @Route("/", name="admin_article_all")
     */
    public function indexArticleAction(){

        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('admin/edit/all.html.twig', [
            'articles' => $articles,
        ]);


    }
}