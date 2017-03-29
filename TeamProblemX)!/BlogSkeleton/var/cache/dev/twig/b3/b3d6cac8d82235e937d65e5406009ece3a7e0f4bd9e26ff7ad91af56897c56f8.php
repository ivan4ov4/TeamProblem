<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4a82cce1b043d50da65215045d42873a2c916f0780b8e358c3619ef2ff8a538c extends Twig_Template
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
        $__internal_a9e260774652905f73f3590939655c07388ca7379c11b73e800cc3c6f9a7f47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e260774652905f73f3590939655c07388ca7379c11b73e800cc3c6f9a7f47f->enter($__internal_a9e260774652905f73f3590939655c07388ca7379c11b73e800cc3c6f9a7f47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a9e260774652905f73f3590939655c07388ca7379c11b73e800cc3c6f9a7f47f->leave($__internal_a9e260774652905f73f3590939655c07388ca7379c11b73e800cc3c6f9a7f47f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
