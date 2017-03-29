<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a3e2f4358947274f372bbc48d742bff7eee89142e8aa076534bd623ad1eda5b4 extends Twig_Template
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
        $__internal_8461c0578e978f755b8dbdaaac3b47e546fadc2f79f527ecd1bd9bc04017b137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8461c0578e978f755b8dbdaaac3b47e546fadc2f79f527ecd1bd9bc04017b137->enter($__internal_8461c0578e978f755b8dbdaaac3b47e546fadc2f79f527ecd1bd9bc04017b137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8461c0578e978f755b8dbdaaac3b47e546fadc2f79f527ecd1bd9bc04017b137->leave($__internal_8461c0578e978f755b8dbdaaac3b47e546fadc2f79f527ecd1bd9bc04017b137_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
