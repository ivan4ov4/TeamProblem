<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_652c83c5ed2b584ab1ad49c214aa105274ddbba205ffd98afdaebfd51ba9c623 extends Twig_Template
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
        $__internal_a039adbff0c8d0b69427dd72c73d532e2e1ff188d8ebe596bf81d41859f96512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a039adbff0c8d0b69427dd72c73d532e2e1ff188d8ebe596bf81d41859f96512->enter($__internal_a039adbff0c8d0b69427dd72c73d532e2e1ff188d8ebe596bf81d41859f96512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a039adbff0c8d0b69427dd72c73d532e2e1ff188d8ebe596bf81d41859f96512->leave($__internal_a039adbff0c8d0b69427dd72c73d532e2e1ff188d8ebe596bf81d41859f96512_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71b6e4a6cd358825e32339372df1bffb5ea6d3c32eb50ce8010ac30cfd8cc7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b6e4a6cd358825e32339372df1bffb5ea6d3c32eb50ce8010ac30cfd8cc7e3->enter($__internal_71b6e4a6cd358825e32339372df1bffb5ea6d3c32eb50ce8010ac30cfd8cc7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71b6e4a6cd358825e32339372df1bffb5ea6d3c32eb50ce8010ac30cfd8cc7e3->leave($__internal_71b6e4a6cd358825e32339372df1bffb5ea6d3c32eb50ce8010ac30cfd8cc7e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49f2e336d1b5ee0fe530a20ed93ff1472ba443578c936f4baa51f986e85a2005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f2e336d1b5ee0fe530a20ed93ff1472ba443578c936f4baa51f986e85a2005->enter($__internal_49f2e336d1b5ee0fe530a20ed93ff1472ba443578c936f4baa51f986e85a2005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49f2e336d1b5ee0fe530a20ed93ff1472ba443578c936f4baa51f986e85a2005->leave($__internal_49f2e336d1b5ee0fe530a20ed93ff1472ba443578c936f4baa51f986e85a2005_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bd5dc3c4bccc2bee0f46fd8a9342daf0808be9896209d8eb4c5d2e2b9dc4279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd5dc3c4bccc2bee0f46fd8a9342daf0808be9896209d8eb4c5d2e2b9dc4279->enter($__internal_7bd5dc3c4bccc2bee0f46fd8a9342daf0808be9896209d8eb4c5d2e2b9dc4279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7bd5dc3c4bccc2bee0f46fd8a9342daf0808be9896209d8eb4c5d2e2b9dc4279->leave($__internal_7bd5dc3c4bccc2bee0f46fd8a9342daf0808be9896209d8eb4c5d2e2b9dc4279_prof);

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
