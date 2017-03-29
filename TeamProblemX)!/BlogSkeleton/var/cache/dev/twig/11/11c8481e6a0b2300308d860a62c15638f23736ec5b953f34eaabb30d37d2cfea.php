<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_4dd8e4a56ccc2f3e290140cff45e9ca9a95e9103cb66159fb4cd36448300627e extends Twig_Template
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
        $__internal_1efa1ed615641ccb2b4207b20f735fdbd2fcfab6183270eead30652751ca6536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efa1ed615641ccb2b4207b20f735fdbd2fcfab6183270eead30652751ca6536->enter($__internal_1efa1ed615641ccb2b4207b20f735fdbd2fcfab6183270eead30652751ca6536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1efa1ed615641ccb2b4207b20f735fdbd2fcfab6183270eead30652751ca6536->leave($__internal_1efa1ed615641ccb2b4207b20f735fdbd2fcfab6183270eead30652751ca6536_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
