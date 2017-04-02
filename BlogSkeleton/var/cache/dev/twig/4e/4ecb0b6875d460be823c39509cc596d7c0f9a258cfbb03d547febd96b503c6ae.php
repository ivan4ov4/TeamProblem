<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_987fd388076bd0be0cbd5b243d49b9894cfd21d50b6104f1517ff2d9da4ca52f extends Twig_Template
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
        $__internal_870702a794799215b25ba438eb6fb4c3dfceff6b4173b7b97a68928e546f2530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870702a794799215b25ba438eb6fb4c3dfceff6b4173b7b97a68928e546f2530->enter($__internal_870702a794799215b25ba438eb6fb4c3dfceff6b4173b7b97a68928e546f2530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_870702a794799215b25ba438eb6fb4c3dfceff6b4173b7b97a68928e546f2530->leave($__internal_870702a794799215b25ba438eb6fb4c3dfceff6b4173b7b97a68928e546f2530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
