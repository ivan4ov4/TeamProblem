<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_639c3f7c54c8b16bdf99f76ab8a99e5fcb7e8281e8188d6f6f3761e08f8dadbd extends Twig_Template
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
        $__internal_8961aa0a0a15615e8d971cd70c36c7fa9ca3779be372386c0aafb45b14a14bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8961aa0a0a15615e8d971cd70c36c7fa9ca3779be372386c0aafb45b14a14bd3->enter($__internal_8961aa0a0a15615e8d971cd70c36c7fa9ca3779be372386c0aafb45b14a14bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8961aa0a0a15615e8d971cd70c36c7fa9ca3779be372386c0aafb45b14a14bd3->leave($__internal_8961aa0a0a15615e8d971cd70c36c7fa9ca3779be372386c0aafb45b14a14bd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
