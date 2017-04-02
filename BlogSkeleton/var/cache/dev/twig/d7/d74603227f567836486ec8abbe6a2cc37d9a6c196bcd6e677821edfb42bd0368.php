<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d01277d77ebcefae082b04cc36eee54525f99fbc180b813d88db63064072a50d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_047a791c2256662df627b6f3d6860cfcd6e8a7bb164bd0d2153b208ea5625d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047a791c2256662df627b6f3d6860cfcd6e8a7bb164bd0d2153b208ea5625d88->enter($__internal_047a791c2256662df627b6f3d6860cfcd6e8a7bb164bd0d2153b208ea5625d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047a791c2256662df627b6f3d6860cfcd6e8a7bb164bd0d2153b208ea5625d88->leave($__internal_047a791c2256662df627b6f3d6860cfcd6e8a7bb164bd0d2153b208ea5625d88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbe7178b4ebd9b99bef0ba3e55ba2de338ba066f903aacb14231efbceb4427eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe7178b4ebd9b99bef0ba3e55ba2de338ba066f903aacb14231efbceb4427eb->enter($__internal_bbe7178b4ebd9b99bef0ba3e55ba2de338ba066f903aacb14231efbceb4427eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bbe7178b4ebd9b99bef0ba3e55ba2de338ba066f903aacb14231efbceb4427eb->leave($__internal_bbe7178b4ebd9b99bef0ba3e55ba2de338ba066f903aacb14231efbceb4427eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_079c1356142d011a9a71aefd4bf5b7760b2c77eb65513717f2ea932d5bd72299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079c1356142d011a9a71aefd4bf5b7760b2c77eb65513717f2ea932d5bd72299->enter($__internal_079c1356142d011a9a71aefd4bf5b7760b2c77eb65513717f2ea932d5bd72299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_079c1356142d011a9a71aefd4bf5b7760b2c77eb65513717f2ea932d5bd72299->leave($__internal_079c1356142d011a9a71aefd4bf5b7760b2c77eb65513717f2ea932d5bd72299_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21d270485468ef8a4281d61a44d74a2690bdba0a2f57d919d805e2ca9521a3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d270485468ef8a4281d61a44d74a2690bdba0a2f57d919d805e2ca9521a3e3->enter($__internal_21d270485468ef8a4281d61a44d74a2690bdba0a2f57d919d805e2ca9521a3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_21d270485468ef8a4281d61a44d74a2690bdba0a2f57d919d805e2ca9521a3e3->leave($__internal_21d270485468ef8a4281d61a44d74a2690bdba0a2f57d919d805e2ca9521a3e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
