<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_94e5ee3ea025ec589953c81e27b5cbd3504b4543ceb4ffd3ce10d2c96a22ad85 extends Twig_Template
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
        $__internal_8753ffa4c38e3ca2ee0fc7787f2403002960025b2dd06496e92550b0e2d5525a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8753ffa4c38e3ca2ee0fc7787f2403002960025b2dd06496e92550b0e2d5525a->enter($__internal_8753ffa4c38e3ca2ee0fc7787f2403002960025b2dd06496e92550b0e2d5525a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8753ffa4c38e3ca2ee0fc7787f2403002960025b2dd06496e92550b0e2d5525a->leave($__internal_8753ffa4c38e3ca2ee0fc7787f2403002960025b2dd06496e92550b0e2d5525a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
