<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_49f85ad605623d1071654b47137ad9d9fd4bca68da0e7cd03f8cbbde0c034f9d extends Twig_Template
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
        $__internal_2bd6f1b76153d24ad950ab9ca47ce519f04e6954032d06ada7b429b2bcbf5fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd6f1b76153d24ad950ab9ca47ce519f04e6954032d06ada7b429b2bcbf5fa3->enter($__internal_2bd6f1b76153d24ad950ab9ca47ce519f04e6954032d06ada7b429b2bcbf5fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2bd6f1b76153d24ad950ab9ca47ce519f04e6954032d06ada7b429b2bcbf5fa3->leave($__internal_2bd6f1b76153d24ad950ab9ca47ce519f04e6954032d06ada7b429b2bcbf5fa3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
