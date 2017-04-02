<?php

/* user/profile.html.twig */
class __TwigTemplate_98ca2e1df610fe668c5d7029c7a0419448f151ffc05b4055226858c65b898430 extends Twig_Template
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
        $__internal_c4e001b93d42e9ec7a44df8886b68dbbd08863676a24a5b3f867f17797fc173c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e001b93d42e9ec7a44df8886b68dbbd08863676a24a5b3f867f17797fc173c->enter($__internal_c4e001b93d42e9ec7a44df8886b68dbbd08863676a24a5b3f867f17797fc173c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e001b93d42e9ec7a44df8886b68dbbd08863676a24a5b3f867f17797fc173c->leave($__internal_c4e001b93d42e9ec7a44df8886b68dbbd08863676a24a5b3f867f17797fc173c_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_922ae3d03bc486b443de0917977b850e922c84053fc9dafdeaf5cb1d2a52e715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922ae3d03bc486b443de0917977b850e922c84053fc9dafdeaf5cb1d2a52e715->enter($__internal_922ae3d03bc486b443de0917977b850e922c84053fc9dafdeaf5cb1d2a52e715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_922ae3d03bc486b443de0917977b850e922c84053fc9dafdeaf5cb1d2a52e715->leave($__internal_922ae3d03bc486b443de0917977b850e922c84053fc9dafdeaf5cb1d2a52e715_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c10070ec44186ae293e09b37b87bad919fd2cc9876b4b5ef7d4b2bb86a26b714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10070ec44186ae293e09b37b87bad919fd2cc9876b4b5ef7d4b2bb86a26b714->enter($__internal_c10070ec44186ae293e09b37b87bad919fd2cc9876b4b5ef7d4b2bb86a26b714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_c10070ec44186ae293e09b37b87bad919fd2cc9876b4b5ef7d4b2bb86a26b714->leave($__internal_c10070ec44186ae293e09b37b87bad919fd2cc9876b4b5ef7d4b2bb86a26b714_prof);

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
