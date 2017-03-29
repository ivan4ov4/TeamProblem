<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1b8675fc3c1d5cd2e9e624d369b93f027070f1d60ec5655dc9ad61dcff7a4392 extends Twig_Template
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
        $__internal_cc3c8cd97939ae69de9845db1fe1b60b56cad11cc6f99b233f1fbc2640b57961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3c8cd97939ae69de9845db1fe1b60b56cad11cc6f99b233f1fbc2640b57961->enter($__internal_cc3c8cd97939ae69de9845db1fe1b60b56cad11cc6f99b233f1fbc2640b57961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cc3c8cd97939ae69de9845db1fe1b60b56cad11cc6f99b233f1fbc2640b57961->leave($__internal_cc3c8cd97939ae69de9845db1fe1b60b56cad11cc6f99b233f1fbc2640b57961_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
