<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b3cc032df3b4a1181c72765b4b17da17ee1a238d93374af013d1643f1995a5d5 extends Twig_Template
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
        $__internal_1489c61dd85262139dc7fea8305003bb578aeaa26cb11dc10a4f7880dc6e9ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1489c61dd85262139dc7fea8305003bb578aeaa26cb11dc10a4f7880dc6e9ce3->enter($__internal_1489c61dd85262139dc7fea8305003bb578aeaa26cb11dc10a4f7880dc6e9ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1489c61dd85262139dc7fea8305003bb578aeaa26cb11dc10a4f7880dc6e9ce3->leave($__internal_1489c61dd85262139dc7fea8305003bb578aeaa26cb11dc10a4f7880dc6e9ce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
