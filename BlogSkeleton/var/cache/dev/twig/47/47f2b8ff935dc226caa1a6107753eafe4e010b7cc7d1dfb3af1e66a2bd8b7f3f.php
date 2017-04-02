<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01ac2961c321bba8d6cef1d03eb7bc8306ae3b4e3dc2f393da6e7a0120fd8670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_09aecb0b7b95b0a162b390a41cc9cccaa04b6ac3620a8b3bf75c9697d7abd51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09aecb0b7b95b0a162b390a41cc9cccaa04b6ac3620a8b3bf75c9697d7abd51f->enter($__internal_09aecb0b7b95b0a162b390a41cc9cccaa04b6ac3620a8b3bf75c9697d7abd51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09aecb0b7b95b0a162b390a41cc9cccaa04b6ac3620a8b3bf75c9697d7abd51f->leave($__internal_09aecb0b7b95b0a162b390a41cc9cccaa04b6ac3620a8b3bf75c9697d7abd51f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1879fcb5472d7e69ba6ef77b0fcd572de0cbd726bbd67c221ccf66471907cdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1879fcb5472d7e69ba6ef77b0fcd572de0cbd726bbd67c221ccf66471907cdda->enter($__internal_1879fcb5472d7e69ba6ef77b0fcd572de0cbd726bbd67c221ccf66471907cdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1879fcb5472d7e69ba6ef77b0fcd572de0cbd726bbd67c221ccf66471907cdda->leave($__internal_1879fcb5472d7e69ba6ef77b0fcd572de0cbd726bbd67c221ccf66471907cdda_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9a2e15183e3ecb81f58b36cc897de92f9dd5521f834c9f97405f7a650dffebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a2e15183e3ecb81f58b36cc897de92f9dd5521f834c9f97405f7a650dffebc->enter($__internal_b9a2e15183e3ecb81f58b36cc897de92f9dd5521f834c9f97405f7a650dffebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9a2e15183e3ecb81f58b36cc897de92f9dd5521f834c9f97405f7a650dffebc->leave($__internal_b9a2e15183e3ecb81f58b36cc897de92f9dd5521f834c9f97405f7a650dffebc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
