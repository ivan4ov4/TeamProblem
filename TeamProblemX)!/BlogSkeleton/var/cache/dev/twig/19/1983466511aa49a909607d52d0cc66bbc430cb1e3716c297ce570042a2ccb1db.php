<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3d19d10af5e968a96c5e7b714949065d6a96ef8cc69083040fb90fbe793ef668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_7db2e82fa935184e3ff40f5a9a4186da09e3d0085e74e6a860f1baac2000be23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db2e82fa935184e3ff40f5a9a4186da09e3d0085e74e6a860f1baac2000be23->enter($__internal_7db2e82fa935184e3ff40f5a9a4186da09e3d0085e74e6a860f1baac2000be23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db2e82fa935184e3ff40f5a9a4186da09e3d0085e74e6a860f1baac2000be23->leave($__internal_7db2e82fa935184e3ff40f5a9a4186da09e3d0085e74e6a860f1baac2000be23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_355269c74cf491c39d883f8b1c3b86ed76aec8a0a004e33522de87e5dec043e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355269c74cf491c39d883f8b1c3b86ed76aec8a0a004e33522de87e5dec043e4->enter($__internal_355269c74cf491c39d883f8b1c3b86ed76aec8a0a004e33522de87e5dec043e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_355269c74cf491c39d883f8b1c3b86ed76aec8a0a004e33522de87e5dec043e4->leave($__internal_355269c74cf491c39d883f8b1c3b86ed76aec8a0a004e33522de87e5dec043e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d6a058843ea46f74b2eeea27bc280d2b49977451771d25cc9d70bac584d830d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6a058843ea46f74b2eeea27bc280d2b49977451771d25cc9d70bac584d830d->enter($__internal_0d6a058843ea46f74b2eeea27bc280d2b49977451771d25cc9d70bac584d830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d6a058843ea46f74b2eeea27bc280d2b49977451771d25cc9d70bac584d830d->leave($__internal_0d6a058843ea46f74b2eeea27bc280d2b49977451771d25cc9d70bac584d830d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4e6bb6bdf294bceccf64645e9083492227529cc96da553e7b6bb8407e5ec7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e6bb6bdf294bceccf64645e9083492227529cc96da553e7b6bb8407e5ec7db->enter($__internal_b4e6bb6bdf294bceccf64645e9083492227529cc96da553e7b6bb8407e5ec7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4e6bb6bdf294bceccf64645e9083492227529cc96da553e7b6bb8407e5ec7db->leave($__internal_b4e6bb6bdf294bceccf64645e9083492227529cc96da553e7b6bb8407e5ec7db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
