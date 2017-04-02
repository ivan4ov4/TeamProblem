<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a5ba58b63a702745e73aaf93928e4a037965d16ed741952f3788ac3a45f57882 extends Twig_Template
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
        $__internal_e25b61ccacab13b34bbbc82772af1dd31cfa8597eda8ca755a50a7c012a72d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25b61ccacab13b34bbbc82772af1dd31cfa8597eda8ca755a50a7c012a72d7a->enter($__internal_e25b61ccacab13b34bbbc82772af1dd31cfa8597eda8ca755a50a7c012a72d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e25b61ccacab13b34bbbc82772af1dd31cfa8597eda8ca755a50a7c012a72d7a->leave($__internal_e25b61ccacab13b34bbbc82772af1dd31cfa8597eda8ca755a50a7c012a72d7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
