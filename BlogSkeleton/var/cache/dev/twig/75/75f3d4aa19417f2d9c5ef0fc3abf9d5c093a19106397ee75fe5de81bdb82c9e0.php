<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1b0222f9861b088877d2e92fe309bd7a6c78c4dd5f576c37ad8380f4e9020aaf extends Twig_Template
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
        $__internal_6ce913b9c5cb0591db493038aec6ec14393b6ee7fcb49e659659fa9dac888ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce913b9c5cb0591db493038aec6ec14393b6ee7fcb49e659659fa9dac888ae9->enter($__internal_6ce913b9c5cb0591db493038aec6ec14393b6ee7fcb49e659659fa9dac888ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6ce913b9c5cb0591db493038aec6ec14393b6ee7fcb49e659659fa9dac888ae9->leave($__internal_6ce913b9c5cb0591db493038aec6ec14393b6ee7fcb49e659659fa9dac888ae9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
