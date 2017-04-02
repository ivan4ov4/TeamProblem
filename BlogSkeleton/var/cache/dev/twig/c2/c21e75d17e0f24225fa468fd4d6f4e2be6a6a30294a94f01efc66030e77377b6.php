<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4f9576e0e2d22856cb77aaace0dec779d1f36349225e8bf1c0f013ba49e9502c extends Twig_Template
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
        $__internal_4fdfcf9b474ec82b465c9ad5000becf2ae6fc3a3426a1a44a40d7f8b664361db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdfcf9b474ec82b465c9ad5000becf2ae6fc3a3426a1a44a40d7f8b664361db->enter($__internal_4fdfcf9b474ec82b465c9ad5000becf2ae6fc3a3426a1a44a40d7f8b664361db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4fdfcf9b474ec82b465c9ad5000becf2ae6fc3a3426a1a44a40d7f8b664361db->leave($__internal_4fdfcf9b474ec82b465c9ad5000becf2ae6fc3a3426a1a44a40d7f8b664361db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
