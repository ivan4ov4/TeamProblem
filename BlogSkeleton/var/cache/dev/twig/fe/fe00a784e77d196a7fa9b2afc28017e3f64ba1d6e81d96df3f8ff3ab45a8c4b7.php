<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6631a4793b172e537b35396b5083f83d56419766ed3f506a780d0bff65c63a12 extends Twig_Template
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
        $__internal_2152960f1d4e0ef9e72635d071d98b4a29e462134be1c76172cc82874ef0d953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2152960f1d4e0ef9e72635d071d98b4a29e462134be1c76172cc82874ef0d953->enter($__internal_2152960f1d4e0ef9e72635d071d98b4a29e462134be1c76172cc82874ef0d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2152960f1d4e0ef9e72635d071d98b4a29e462134be1c76172cc82874ef0d953->leave($__internal_2152960f1d4e0ef9e72635d071d98b4a29e462134be1c76172cc82874ef0d953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
