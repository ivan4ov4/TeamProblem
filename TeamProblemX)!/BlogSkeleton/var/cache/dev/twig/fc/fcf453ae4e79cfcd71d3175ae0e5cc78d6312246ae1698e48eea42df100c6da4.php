<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08ef1902fba3b43dc558cd306dfed7dd8a6343bd5cf75bcab0c7c3de5356b056 extends Twig_Template
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
        $__internal_1466937e666bb975c9c3a3e85696448007ffc0141c158737ba77b19a822d3201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1466937e666bb975c9c3a3e85696448007ffc0141c158737ba77b19a822d3201->enter($__internal_1466937e666bb975c9c3a3e85696448007ffc0141c158737ba77b19a822d3201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1466937e666bb975c9c3a3e85696448007ffc0141c158737ba77b19a822d3201->leave($__internal_1466937e666bb975c9c3a3e85696448007ffc0141c158737ba77b19a822d3201_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65f585aa846dd34a39e813655e7c148e3e0a4bfd7555352e63b006820d00a600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f585aa846dd34a39e813655e7c148e3e0a4bfd7555352e63b006820d00a600->enter($__internal_65f585aa846dd34a39e813655e7c148e3e0a4bfd7555352e63b006820d00a600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_65f585aa846dd34a39e813655e7c148e3e0a4bfd7555352e63b006820d00a600->leave($__internal_65f585aa846dd34a39e813655e7c148e3e0a4bfd7555352e63b006820d00a600_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6699ec6cbbd427b3595ad3ea11905cb5a9518ba6820b1967b524eaad327f8453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6699ec6cbbd427b3595ad3ea11905cb5a9518ba6820b1967b524eaad327f8453->enter($__internal_6699ec6cbbd427b3595ad3ea11905cb5a9518ba6820b1967b524eaad327f8453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6699ec6cbbd427b3595ad3ea11905cb5a9518ba6820b1967b524eaad327f8453->leave($__internal_6699ec6cbbd427b3595ad3ea11905cb5a9518ba6820b1967b524eaad327f8453_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce668d3b4b7dca63dd9f8272cd04aede44e00a834473e4bc7089251900d14a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce668d3b4b7dca63dd9f8272cd04aede44e00a834473e4bc7089251900d14a8a->enter($__internal_ce668d3b4b7dca63dd9f8272cd04aede44e00a834473e4bc7089251900d14a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce668d3b4b7dca63dd9f8272cd04aede44e00a834473e4bc7089251900d14a8a->leave($__internal_ce668d3b4b7dca63dd9f8272cd04aede44e00a834473e4bc7089251900d14a8a_prof);

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
