<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c5e2444018dbb2122764783c67fa53fd2776a2ef1ee6b84bab5e763b0f0c9ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c5189aced19cdc5e483a1bc7f3e0db63a97d1995d85f6fc94f66b422f757a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c5189aced19cdc5e483a1bc7f3e0db63a97d1995d85f6fc94f66b422f757a1->enter($__internal_49c5189aced19cdc5e483a1bc7f3e0db63a97d1995d85f6fc94f66b422f757a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_49c5189aced19cdc5e483a1bc7f3e0db63a97d1995d85f6fc94f66b422f757a1->leave($__internal_49c5189aced19cdc5e483a1bc7f3e0db63a97d1995d85f6fc94f66b422f757a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
