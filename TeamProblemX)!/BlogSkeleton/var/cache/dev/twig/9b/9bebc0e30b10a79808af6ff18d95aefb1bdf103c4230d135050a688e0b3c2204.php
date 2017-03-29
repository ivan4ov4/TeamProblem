<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4f1e49b35f4c9890684f09e0e12593d03a6537ca06cacebe8c013c4a6b1b6fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_858545b77e92d19aa5e84e8d78b0a0e3303961fa582ea616c22330d73e8e2b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858545b77e92d19aa5e84e8d78b0a0e3303961fa582ea616c22330d73e8e2b41->enter($__internal_858545b77e92d19aa5e84e8d78b0a0e3303961fa582ea616c22330d73e8e2b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_858545b77e92d19aa5e84e8d78b0a0e3303961fa582ea616c22330d73e8e2b41->leave($__internal_858545b77e92d19aa5e84e8d78b0a0e3303961fa582ea616c22330d73e8e2b41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4b44b3cacee97486190be8811ea9a11dc03ef4e06e7afa5700463ae6a6422d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b44b3cacee97486190be8811ea9a11dc03ef4e06e7afa5700463ae6a6422d7->enter($__internal_d4b44b3cacee97486190be8811ea9a11dc03ef4e06e7afa5700463ae6a6422d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4b44b3cacee97486190be8811ea9a11dc03ef4e06e7afa5700463ae6a6422d7->leave($__internal_d4b44b3cacee97486190be8811ea9a11dc03ef4e06e7afa5700463ae6a6422d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd19edfb391e201c5458ff221083864af70c9ea3a0accd637508b6bc098ed081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd19edfb391e201c5458ff221083864af70c9ea3a0accd637508b6bc098ed081->enter($__internal_cd19edfb391e201c5458ff221083864af70c9ea3a0accd637508b6bc098ed081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cd19edfb391e201c5458ff221083864af70c9ea3a0accd637508b6bc098ed081->leave($__internal_cd19edfb391e201c5458ff221083864af70c9ea3a0accd637508b6bc098ed081_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6524d8d8851b52dc89b952ec1bfcef60e36e9e3181cdce77042d9399b64af4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6524d8d8851b52dc89b952ec1bfcef60e36e9e3181cdce77042d9399b64af4bd->enter($__internal_6524d8d8851b52dc89b952ec1bfcef60e36e9e3181cdce77042d9399b64af4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6524d8d8851b52dc89b952ec1bfcef60e36e9e3181cdce77042d9399b64af4bd->leave($__internal_6524d8d8851b52dc89b952ec1bfcef60e36e9e3181cdce77042d9399b64af4bd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
