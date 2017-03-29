<?php

/* :user:profile.html.twig */
class __TwigTemplate_28d23398bbc5c687a2b12cae9e128e49136f34585d0826011daabbb68978371f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:profile.html.twig", 1);
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
        $__internal_35f521273a22e23ac1aed1a6b4764c1b9887e52d19db3f8e7e1b760dc5fee416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f521273a22e23ac1aed1a6b4764c1b9887e52d19db3f8e7e1b760dc5fee416->enter($__internal_35f521273a22e23ac1aed1a6b4764c1b9887e52d19db3f8e7e1b760dc5fee416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f521273a22e23ac1aed1a6b4764c1b9887e52d19db3f8e7e1b760dc5fee416->leave($__internal_35f521273a22e23ac1aed1a6b4764c1b9887e52d19db3f8e7e1b760dc5fee416_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a82d9c5ef865bb44fe6305eace7450ff6cef8e1dd69c157ff7bf4185c36c0524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82d9c5ef865bb44fe6305eace7450ff6cef8e1dd69c157ff7bf4185c36c0524->enter($__internal_a82d9c5ef865bb44fe6305eace7450ff6cef8e1dd69c157ff7bf4185c36c0524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_a82d9c5ef865bb44fe6305eace7450ff6cef8e1dd69c157ff7bf4185c36c0524->leave($__internal_a82d9c5ef865bb44fe6305eace7450ff6cef8e1dd69c157ff7bf4185c36c0524_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_020c240b89dde058e61eb9bfd4bbbfde0b0f49689228eeda103cf4d02bb0a0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020c240b89dde058e61eb9bfd4bbbfde0b0f49689228eeda103cf4d02bb0a0f6->enter($__internal_020c240b89dde058e61eb9bfd4bbbfde0b0f49689228eeda103cf4d02bb0a0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_020c240b89dde058e61eb9bfd4bbbfde0b0f49689228eeda103cf4d02bb0a0f6->leave($__internal_020c240b89dde058e61eb9bfd4bbbfde0b0f49689228eeda103cf4d02bb0a0f6_prof);

    }

    public function getTemplateName()
    {
        return ":user:profile.html.twig";
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
