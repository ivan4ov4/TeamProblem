<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0c0d13b4229fd366832b53cf90f36e2ff80cc31420bce3fdee78a7412e657943 extends Twig_Template
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
        $__internal_a5fe1d203ac806b26358d8b98871a31d4d5aaf31c1e17b5ac0972b01c47d1cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fe1d203ac806b26358d8b98871a31d4d5aaf31c1e17b5ac0972b01c47d1cbe->enter($__internal_a5fe1d203ac806b26358d8b98871a31d4d5aaf31c1e17b5ac0972b01c47d1cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a5fe1d203ac806b26358d8b98871a31d4d5aaf31c1e17b5ac0972b01c47d1cbe->leave($__internal_a5fe1d203ac806b26358d8b98871a31d4d5aaf31c1e17b5ac0972b01c47d1cbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
