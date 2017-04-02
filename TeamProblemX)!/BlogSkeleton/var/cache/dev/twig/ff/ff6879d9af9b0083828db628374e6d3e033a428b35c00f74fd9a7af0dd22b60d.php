<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6f9f7b73b08f8cf9cf94083503c1d34d7a3384a9bf19c95c272baf31c0178d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d5c6db501b3c3a977310ae35cade3deea6c67b4e55add6d7357deef7e02b682f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c6db501b3c3a977310ae35cade3deea6c67b4e55add6d7357deef7e02b682f->enter($__internal_d5c6db501b3c3a977310ae35cade3deea6c67b4e55add6d7357deef7e02b682f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c6db501b3c3a977310ae35cade3deea6c67b4e55add6d7357deef7e02b682f->leave($__internal_d5c6db501b3c3a977310ae35cade3deea6c67b4e55add6d7357deef7e02b682f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_908f55ebb06d66545ad0a2a092d66f17df20d010781b39d64911b7443d5781c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908f55ebb06d66545ad0a2a092d66f17df20d010781b39d64911b7443d5781c6->enter($__internal_908f55ebb06d66545ad0a2a092d66f17df20d010781b39d64911b7443d5781c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_908f55ebb06d66545ad0a2a092d66f17df20d010781b39d64911b7443d5781c6->leave($__internal_908f55ebb06d66545ad0a2a092d66f17df20d010781b39d64911b7443d5781c6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be36978ea7adfda0208f10bbb269ed198e3bb2db66cd3a7248c7dc763dbb066e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be36978ea7adfda0208f10bbb269ed198e3bb2db66cd3a7248c7dc763dbb066e->enter($__internal_be36978ea7adfda0208f10bbb269ed198e3bb2db66cd3a7248c7dc763dbb066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be36978ea7adfda0208f10bbb269ed198e3bb2db66cd3a7248c7dc763dbb066e->leave($__internal_be36978ea7adfda0208f10bbb269ed198e3bb2db66cd3a7248c7dc763dbb066e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6946807cd18debe5deda1d6f4d8bcb016c593ad760c605ff356914157fd9be2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6946807cd18debe5deda1d6f4d8bcb016c593ad760c605ff356914157fd9be2e->enter($__internal_6946807cd18debe5deda1d6f4d8bcb016c593ad760c605ff356914157fd9be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6946807cd18debe5deda1d6f4d8bcb016c593ad760c605ff356914157fd9be2e->leave($__internal_6946807cd18debe5deda1d6f4d8bcb016c593ad760c605ff356914157fd9be2e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
