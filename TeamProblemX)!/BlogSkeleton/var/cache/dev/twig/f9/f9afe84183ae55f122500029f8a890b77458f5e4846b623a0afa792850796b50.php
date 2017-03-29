<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_883039de8dd3b842a3d662aa2aa075a40003158e402617a5218f08b76961b387 extends Twig_Template
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
        $__internal_a76601b8cc2aab73c62c7b34d575fb2e2e2d71ba40ed56b6c0bd35d62d819e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76601b8cc2aab73c62c7b34d575fb2e2e2d71ba40ed56b6c0bd35d62d819e2a->enter($__internal_a76601b8cc2aab73c62c7b34d575fb2e2e2d71ba40ed56b6c0bd35d62d819e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a76601b8cc2aab73c62c7b34d575fb2e2e2d71ba40ed56b6c0bd35d62d819e2a->leave($__internal_a76601b8cc2aab73c62c7b34d575fb2e2e2d71ba40ed56b6c0bd35d62d819e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
