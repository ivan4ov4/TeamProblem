<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_641e652352f54aa9af1032715b908726806266f12d0118df07f18a07c59945f0 extends Twig_Template
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
        $__internal_77655f402ab1b38dbc04dcc7723b00c3bc313279904f0d8e620328c26b95c126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77655f402ab1b38dbc04dcc7723b00c3bc313279904f0d8e620328c26b95c126->enter($__internal_77655f402ab1b38dbc04dcc7723b00c3bc313279904f0d8e620328c26b95c126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_77655f402ab1b38dbc04dcc7723b00c3bc313279904f0d8e620328c26b95c126->leave($__internal_77655f402ab1b38dbc04dcc7723b00c3bc313279904f0d8e620328c26b95c126_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
