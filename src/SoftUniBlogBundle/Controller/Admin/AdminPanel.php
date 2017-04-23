<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 23.4.2017 г.
 * Time: 10:05
 */

namespace SoftUniBlogBundle\Controller\Admin;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/panel")
 * Class AdminPanel
 * @package SoftUniBlogBundle\Controller\Admin
 */
class AdminPanel extends Controller
{

    /**
     * @Route("/", name="admin_panel_view")
     */
    public function adminPanelView(){
        return $this->render("admin/panel/view.html.twig");
    }
}