<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_41668c803ad5e2106267ed973ecf169548d7b8e55acea85a529d3bee7bb2c9ab extends Twig_Template
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
        $__internal_bd87b5ff45844689b75a04f33cdeaa77750aea4bfb691b730af2be787d3a2a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd87b5ff45844689b75a04f33cdeaa77750aea4bfb691b730af2be787d3a2a1b->enter($__internal_bd87b5ff45844689b75a04f33cdeaa77750aea4bfb691b730af2be787d3a2a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bd87b5ff45844689b75a04f33cdeaa77750aea4bfb691b730af2be787d3a2a1b->leave($__internal_bd87b5ff45844689b75a04f33cdeaa77750aea4bfb691b730af2be787d3a2a1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
