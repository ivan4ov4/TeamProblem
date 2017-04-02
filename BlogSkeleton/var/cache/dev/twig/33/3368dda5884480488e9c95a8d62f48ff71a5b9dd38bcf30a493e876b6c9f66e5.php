<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6c782d9409c96d1fdb0d44da4f9862b044a2b932105fd5a0538106e5e33fcacf extends Twig_Template
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
        $__internal_b797016b9be537127392565c441c68dfff273d8450aefd544ee81aee263e6c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b797016b9be537127392565c441c68dfff273d8450aefd544ee81aee263e6c06->enter($__internal_b797016b9be537127392565c441c68dfff273d8450aefd544ee81aee263e6c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b797016b9be537127392565c441c68dfff273d8450aefd544ee81aee263e6c06->leave($__internal_b797016b9be537127392565c441c68dfff273d8450aefd544ee81aee263e6c06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
