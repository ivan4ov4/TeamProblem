<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4d5d6d788674ee3ea1a5c55afd2268fa0e2f31591025478f2970efe1f2e1bb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35cff046f3afb95b20ae42bdde03c5a43a8c27d63caeaffedb98dff02a5d2da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cff046f3afb95b20ae42bdde03c5a43a8c27d63caeaffedb98dff02a5d2da8->enter($__internal_35cff046f3afb95b20ae42bdde03c5a43a8c27d63caeaffedb98dff02a5d2da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35cff046f3afb95b20ae42bdde03c5a43a8c27d63caeaffedb98dff02a5d2da8->leave($__internal_35cff046f3afb95b20ae42bdde03c5a43a8c27d63caeaffedb98dff02a5d2da8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e5be58251be8f3fe00652b4515a2ecb8bde43332102fad438b523ab6731b790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5be58251be8f3fe00652b4515a2ecb8bde43332102fad438b523ab6731b790->enter($__internal_1e5be58251be8f3fe00652b4515a2ecb8bde43332102fad438b523ab6731b790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e5be58251be8f3fe00652b4515a2ecb8bde43332102fad438b523ab6731b790->leave($__internal_1e5be58251be8f3fe00652b4515a2ecb8bde43332102fad438b523ab6731b790_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31e2bd392490c9adfcc3c69757989b654ec80e077934ae0e638b03452f735759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e2bd392490c9adfcc3c69757989b654ec80e077934ae0e638b03452f735759->enter($__internal_31e2bd392490c9adfcc3c69757989b654ec80e077934ae0e638b03452f735759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_31e2bd392490c9adfcc3c69757989b654ec80e077934ae0e638b03452f735759->leave($__internal_31e2bd392490c9adfcc3c69757989b654ec80e077934ae0e638b03452f735759_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
