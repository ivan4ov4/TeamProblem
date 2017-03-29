<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fabc503b04ffebd7356275a792a56866f0667a82c3ea3c4b88513a68d9908653 extends Twig_Template
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
        $__internal_d2da140caadba881621a5cdbcdaeb558f05bda8e702c28cbdb8f4bf2c4d3e7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2da140caadba881621a5cdbcdaeb558f05bda8e702c28cbdb8f4bf2c4d3e7a7->enter($__internal_d2da140caadba881621a5cdbcdaeb558f05bda8e702c28cbdb8f4bf2c4d3e7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d2da140caadba881621a5cdbcdaeb558f05bda8e702c28cbdb8f4bf2c4d3e7a7->leave($__internal_d2da140caadba881621a5cdbcdaeb558f05bda8e702c28cbdb8f4bf2c4d3e7a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
