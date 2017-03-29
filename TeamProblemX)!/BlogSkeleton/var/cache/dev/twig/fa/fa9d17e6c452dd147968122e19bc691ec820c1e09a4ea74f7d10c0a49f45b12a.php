<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0964ab264dab12387fab67fecdebe3d34f46fc5bb7b3554c78c01c01363c2afc extends Twig_Template
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
        $__internal_7006adf4893d41567d5d0f8599825daff9c2992b3a68fd5afce6c98d78840252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7006adf4893d41567d5d0f8599825daff9c2992b3a68fd5afce6c98d78840252->enter($__internal_7006adf4893d41567d5d0f8599825daff9c2992b3a68fd5afce6c98d78840252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7006adf4893d41567d5d0f8599825daff9c2992b3a68fd5afce6c98d78840252->leave($__internal_7006adf4893d41567d5d0f8599825daff9c2992b3a68fd5afce6c98d78840252_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
