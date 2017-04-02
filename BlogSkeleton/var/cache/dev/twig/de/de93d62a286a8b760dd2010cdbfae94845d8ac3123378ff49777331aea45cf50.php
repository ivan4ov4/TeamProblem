<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6acb451df815b924426155540e2205edd72a180d25ef364a7063c768b86cdae7 extends Twig_Template
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
        $__internal_aff0fce23051962e1d8bfb1dae45a190420b9941a72162405d6c9a4a606eab83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff0fce23051962e1d8bfb1dae45a190420b9941a72162405d6c9a4a606eab83->enter($__internal_aff0fce23051962e1d8bfb1dae45a190420b9941a72162405d6c9a4a606eab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff0fce23051962e1d8bfb1dae45a190420b9941a72162405d6c9a4a606eab83->leave($__internal_aff0fce23051962e1d8bfb1dae45a190420b9941a72162405d6c9a4a606eab83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba7c4a6501385dd61bff16585ca021129119a1010ae4d576dc8d8944a15e706b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7c4a6501385dd61bff16585ca021129119a1010ae4d576dc8d8944a15e706b->enter($__internal_ba7c4a6501385dd61bff16585ca021129119a1010ae4d576dc8d8944a15e706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba7c4a6501385dd61bff16585ca021129119a1010ae4d576dc8d8944a15e706b->leave($__internal_ba7c4a6501385dd61bff16585ca021129119a1010ae4d576dc8d8944a15e706b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e572dbece2b11e45d706502677b831cf8e1f30596fef9a785f3b4908236d506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e572dbece2b11e45d706502677b831cf8e1f30596fef9a785f3b4908236d506->enter($__internal_7e572dbece2b11e45d706502677b831cf8e1f30596fef9a785f3b4908236d506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e572dbece2b11e45d706502677b831cf8e1f30596fef9a785f3b4908236d506->leave($__internal_7e572dbece2b11e45d706502677b831cf8e1f30596fef9a785f3b4908236d506_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3274db554be3941838849ad2274a02554000f783f37547f14a16ca64e6742f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3274db554be3941838849ad2274a02554000f783f37547f14a16ca64e6742f5d->enter($__internal_3274db554be3941838849ad2274a02554000f783f37547f14a16ca64e6742f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3274db554be3941838849ad2274a02554000f783f37547f14a16ca64e6742f5d->leave($__internal_3274db554be3941838849ad2274a02554000f783f37547f14a16ca64e6742f5d_prof);

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
