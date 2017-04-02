<?php

/* article/delete.html.twig */
class __TwigTemplate_c1fe8f1693b5c4c0900d048c7620193b8bb1e995559f70a62fcd38b18dd12053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/delete.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_662907da837d80704c66e81f90daa281878e06a69885565ec8af1dc09d2bf0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662907da837d80704c66e81f90daa281878e06a69885565ec8af1dc09d2bf0d5->enter($__internal_662907da837d80704c66e81f90daa281878e06a69885565ec8af1dc09d2bf0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662907da837d80704c66e81f90daa281878e06a69885565ec8af1dc09d2bf0d5->leave($__internal_662907da837d80704c66e81f90daa281878e06a69885565ec8af1dc09d2bf0d5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_bfd8342b3abb23f02d7a572684234ce0321e6bfa4967131e1af22cdc4657dcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd8342b3abb23f02d7a572684234ce0321e6bfa4967131e1af22cdc4657dcd5->enter($__internal_bfd8342b3abb23f02d7a572684234ce0321e6bfa4967131e1af22cdc4657dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
   <h2 class = \"text-center\">
   Are you sure you want to delete this article?
   </h2>
    <div class=\"pull-right\">
        <a class=\"btn btn-default btn-xa\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">No</a>
        <a class=\"btn btn-danger btn-xa\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_confirm_delete", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Yes</a>
    </div>


";
        
        $__internal_bfd8342b3abb23f02d7a572684234ce0321e6bfa4967131e1af22cdc4657dcd5->leave($__internal_bfd8342b3abb23f02d7a572684234ce0321e6bfa4967131e1af22cdc4657dcd5_prof);

    }

    public function getTemplateName()
    {
        return "article/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

   <h2 class = \"text-center\">
   Are you sure you want to delete this article?
   </h2>
    <div class=\"pull-right\">
        <a class=\"btn btn-default btn-xa\" href=\"{{ path('blog_index') }}\">No</a>
        <a class=\"btn btn-danger btn-xa\" href=\"{{ path('article_confirm_delete', {id: id}) }}\">Yes</a>
    </div>


{% endblock %}

";
    }
}
