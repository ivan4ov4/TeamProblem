<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b1227f9026c3b63c69ed90edc42f9625b713724df6842f31cdd887fb8607c104 extends Twig_Template
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
        $__internal_4f7e6ba009db57bb8f918effc22b98701fefffb7a1fd68b3b0a610ad9476b3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7e6ba009db57bb8f918effc22b98701fefffb7a1fd68b3b0a610ad9476b3fe->enter($__internal_4f7e6ba009db57bb8f918effc22b98701fefffb7a1fd68b3b0a610ad9476b3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4f7e6ba009db57bb8f918effc22b98701fefffb7a1fd68b3b0a610ad9476b3fe->leave($__internal_4f7e6ba009db57bb8f918effc22b98701fefffb7a1fd68b3b0a610ad9476b3fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
