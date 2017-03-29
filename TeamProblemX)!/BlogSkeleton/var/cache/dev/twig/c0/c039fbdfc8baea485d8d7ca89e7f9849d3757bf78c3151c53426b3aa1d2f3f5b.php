<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_071ab172e043ad7ff165a2dc38fa98367ddfdbdf60c66d39ad415e62f4317621 extends Twig_Template
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
        $__internal_a1c170dca54fdc7214b72d52f24505a5839e66cc873f317fd91fb1cf4a2cdd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c170dca54fdc7214b72d52f24505a5839e66cc873f317fd91fb1cf4a2cdd33->enter($__internal_a1c170dca54fdc7214b72d52f24505a5839e66cc873f317fd91fb1cf4a2cdd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a1c170dca54fdc7214b72d52f24505a5839e66cc873f317fd91fb1cf4a2cdd33->leave($__internal_a1c170dca54fdc7214b72d52f24505a5839e66cc873f317fd91fb1cf4a2cdd33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
