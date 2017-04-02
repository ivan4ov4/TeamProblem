<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_30c97513f58f3c6c368bc45975233c15e3e0324e72dfc555b44b44c161b7d575 extends Twig_Template
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
        $__internal_977ed520a65bbd5815396d45989b8c654f79ff3fd6ac931da903689450bf3eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977ed520a65bbd5815396d45989b8c654f79ff3fd6ac931da903689450bf3eb9->enter($__internal_977ed520a65bbd5815396d45989b8c654f79ff3fd6ac931da903689450bf3eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977ed520a65bbd5815396d45989b8c654f79ff3fd6ac931da903689450bf3eb9->leave($__internal_977ed520a65bbd5815396d45989b8c654f79ff3fd6ac931da903689450bf3eb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8b39309334a73d600c244292db40d5a55e45a9db9bdbee6f4c7f702bb8e6800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b39309334a73d600c244292db40d5a55e45a9db9bdbee6f4c7f702bb8e6800->enter($__internal_c8b39309334a73d600c244292db40d5a55e45a9db9bdbee6f4c7f702bb8e6800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8b39309334a73d600c244292db40d5a55e45a9db9bdbee6f4c7f702bb8e6800->leave($__internal_c8b39309334a73d600c244292db40d5a55e45a9db9bdbee6f4c7f702bb8e6800_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b31ffb7acbdfd1041cd16c1dd6d7d0ab7301bb580627ec8dc074144699b4a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b31ffb7acbdfd1041cd16c1dd6d7d0ab7301bb580627ec8dc074144699b4a9d->enter($__internal_4b31ffb7acbdfd1041cd16c1dd6d7d0ab7301bb580627ec8dc074144699b4a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b31ffb7acbdfd1041cd16c1dd6d7d0ab7301bb580627ec8dc074144699b4a9d->leave($__internal_4b31ffb7acbdfd1041cd16c1dd6d7d0ab7301bb580627ec8dc074144699b4a9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69831b47d7543e4cc252a95c726d6550527f3474b35222a9f5e5c404b70d9aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69831b47d7543e4cc252a95c726d6550527f3474b35222a9f5e5c404b70d9aec->enter($__internal_69831b47d7543e4cc252a95c726d6550527f3474b35222a9f5e5c404b70d9aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_69831b47d7543e4cc252a95c726d6550527f3474b35222a9f5e5c404b70d9aec->leave($__internal_69831b47d7543e4cc252a95c726d6550527f3474b35222a9f5e5c404b70d9aec_prof);

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
