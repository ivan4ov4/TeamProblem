<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e5de6be087abbeeceaaaa3fa484cdf69aa79d17b697d72c3d5db7771a8c8275c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40ccc6e4a3eab2b1e1a13f56e6fdf0c7b9686c463ccf3f72a84748d5fd9e240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ccc6e4a3eab2b1e1a13f56e6fdf0c7b9686c463ccf3f72a84748d5fd9e240c->enter($__internal_40ccc6e4a3eab2b1e1a13f56e6fdf0c7b9686c463ccf3f72a84748d5fd9e240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_40ccc6e4a3eab2b1e1a13f56e6fdf0c7b9686c463ccf3f72a84748d5fd9e240c->leave($__internal_40ccc6e4a3eab2b1e1a13f56e6fdf0c7b9686c463ccf3f72a84748d5fd9e240c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ff8c3546953ab05d6a339284a56dd008305d8b88172674b8576ecad1d383d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff8c3546953ab05d6a339284a56dd008305d8b88172674b8576ecad1d383d9f->enter($__internal_8ff8c3546953ab05d6a339284a56dd008305d8b88172674b8576ecad1d383d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ff8c3546953ab05d6a339284a56dd008305d8b88172674b8576ecad1d383d9f->leave($__internal_8ff8c3546953ab05d6a339284a56dd008305d8b88172674b8576ecad1d383d9f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
