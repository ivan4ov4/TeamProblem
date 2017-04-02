<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1124321dddf9834d743f4d4d45fff130afbab4450896ecd63dff250ee4cbe355 extends Twig_Template
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
        $__internal_bbbe8d73d20b66b60e871284b56ed741bcb6bfcc2928ae3eb8975faeb9727b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbe8d73d20b66b60e871284b56ed741bcb6bfcc2928ae3eb8975faeb9727b5e->enter($__internal_bbbe8d73d20b66b60e871284b56ed741bcb6bfcc2928ae3eb8975faeb9727b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bbbe8d73d20b66b60e871284b56ed741bcb6bfcc2928ae3eb8975faeb9727b5e->leave($__internal_bbbe8d73d20b66b60e871284b56ed741bcb6bfcc2928ae3eb8975faeb9727b5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
