<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_827584c59e858595bf074ea9cd827616cccb736a416f62d7c71c356212523d93 extends Twig_Template
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
        $__internal_c765513272a1b8f77afdb8420d7ba2eb78efb2ced27ccf729910cf8b9c337fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c765513272a1b8f77afdb8420d7ba2eb78efb2ced27ccf729910cf8b9c337fdf->enter($__internal_c765513272a1b8f77afdb8420d7ba2eb78efb2ced27ccf729910cf8b9c337fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c765513272a1b8f77afdb8420d7ba2eb78efb2ced27ccf729910cf8b9c337fdf->leave($__internal_c765513272a1b8f77afdb8420d7ba2eb78efb2ced27ccf729910cf8b9c337fdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
