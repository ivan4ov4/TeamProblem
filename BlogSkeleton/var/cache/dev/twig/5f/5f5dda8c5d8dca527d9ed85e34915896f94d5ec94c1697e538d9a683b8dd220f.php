<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fe8520aa21dc06027e62a9d180e9337603bec7e17294d029f56b1998ba7e2e1b extends Twig_Template
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
        $__internal_4d8bbe3388d4c00fe363d2b8e5f79ad525ed13f01dd9258b1dff7db2ae7958cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8bbe3388d4c00fe363d2b8e5f79ad525ed13f01dd9258b1dff7db2ae7958cf->enter($__internal_4d8bbe3388d4c00fe363d2b8e5f79ad525ed13f01dd9258b1dff7db2ae7958cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4d8bbe3388d4c00fe363d2b8e5f79ad525ed13f01dd9258b1dff7db2ae7958cf->leave($__internal_4d8bbe3388d4c00fe363d2b8e5f79ad525ed13f01dd9258b1dff7db2ae7958cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
