<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_32dacaffd870febb89c0d03ec7c43b2405d0d51e36a2f1e917d60e124fa063d3 extends Twig_Template
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
        $__internal_b884d5abe54a3598896bb2cbbd138935365e8974368f3e0473697d24b62f2dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b884d5abe54a3598896bb2cbbd138935365e8974368f3e0473697d24b62f2dce->enter($__internal_b884d5abe54a3598896bb2cbbd138935365e8974368f3e0473697d24b62f2dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b884d5abe54a3598896bb2cbbd138935365e8974368f3e0473697d24b62f2dce->leave($__internal_b884d5abe54a3598896bb2cbbd138935365e8974368f3e0473697d24b62f2dce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_77ac965e0677f1419152c5e88c2da7a3a43182dda54b68aed90083c4eb52c198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ac965e0677f1419152c5e88c2da7a3a43182dda54b68aed90083c4eb52c198->enter($__internal_77ac965e0677f1419152c5e88c2da7a3a43182dda54b68aed90083c4eb52c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_77ac965e0677f1419152c5e88c2da7a3a43182dda54b68aed90083c4eb52c198->leave($__internal_77ac965e0677f1419152c5e88c2da7a3a43182dda54b68aed90083c4eb52c198_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
