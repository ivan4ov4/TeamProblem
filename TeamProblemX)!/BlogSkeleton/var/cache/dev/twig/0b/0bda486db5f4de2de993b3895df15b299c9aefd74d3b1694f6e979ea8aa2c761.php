<?php

/* user/profile.html.twig */
class __TwigTemplate_f2db0eedccd7efef0d1e361511d897f79e4fdb3bbe39dee51e38dfcd617bc3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47e95bb4ee3f5b5e9be480e55590bab1ae75e875bd10d7d65e1e219e03c748cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e95bb4ee3f5b5e9be480e55590bab1ae75e875bd10d7d65e1e219e03c748cc->enter($__internal_47e95bb4ee3f5b5e9be480e55590bab1ae75e875bd10d7d65e1e219e03c748cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e95bb4ee3f5b5e9be480e55590bab1ae75e875bd10d7d65e1e219e03c748cc->leave($__internal_47e95bb4ee3f5b5e9be480e55590bab1ae75e875bd10d7d65e1e219e03c748cc_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a02d62a0b75844ec5a0e1dc3a4fa14a3d6aae03efc7e554154f70f237bd7277b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02d62a0b75844ec5a0e1dc3a4fa14a3d6aae03efc7e554154f70f237bd7277b->enter($__internal_a02d62a0b75844ec5a0e1dc3a4fa14a3d6aae03efc7e554154f70f237bd7277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_a02d62a0b75844ec5a0e1dc3a4fa14a3d6aae03efc7e554154f70f237bd7277b->leave($__internal_a02d62a0b75844ec5a0e1dc3a4fa14a3d6aae03efc7e554154f70f237bd7277b_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_2313ea977d233f367a512e0cb134d71c83cb1541a09f93ea2804e7a8b2c21823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2313ea977d233f367a512e0cb134d71c83cb1541a09f93ea2804e7a8b2c21823->enter($__internal_2313ea977d233f367a512e0cb134d71c83cb1541a09f93ea2804e7a8b2c21823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_2313ea977d233f367a512e0cb134d71c83cb1541a09f93ea2804e7a8b2c21823->leave($__internal_2313ea977d233f367a512e0cb134d71c83cb1541a09f93ea2804e7a8b2c21823_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
