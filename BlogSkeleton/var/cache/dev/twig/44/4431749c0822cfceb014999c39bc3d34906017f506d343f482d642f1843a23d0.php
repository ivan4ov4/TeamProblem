<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_36e82e8392b62e6f578dc82e3224a350cae21b717dd799d6acbdcb044499ed26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a23a7e45caf578e716fa954f1950c0e3971cd4f6fcefd6ff5263f66cc10d7fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23a7e45caf578e716fa954f1950c0e3971cd4f6fcefd6ff5263f66cc10d7fb4->enter($__internal_a23a7e45caf578e716fa954f1950c0e3971cd4f6fcefd6ff5263f66cc10d7fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a23a7e45caf578e716fa954f1950c0e3971cd4f6fcefd6ff5263f66cc10d7fb4->leave($__internal_a23a7e45caf578e716fa954f1950c0e3971cd4f6fcefd6ff5263f66cc10d7fb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
