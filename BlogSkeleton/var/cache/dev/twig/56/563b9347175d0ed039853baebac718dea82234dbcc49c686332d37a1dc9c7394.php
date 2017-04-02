<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_fe09fe49992006294298c04702c9a7e52da345d5a61b925310243889d7b87c21 extends Twig_Template
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
        $__internal_91e712ed4c36e40d82328a3036f7d9e5311fc5d6c2041aa3456aba0361a5a948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e712ed4c36e40d82328a3036f7d9e5311fc5d6c2041aa3456aba0361a5a948->enter($__internal_91e712ed4c36e40d82328a3036f7d9e5311fc5d6c2041aa3456aba0361a5a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_91e712ed4c36e40d82328a3036f7d9e5311fc5d6c2041aa3456aba0361a5a948->leave($__internal_91e712ed4c36e40d82328a3036f7d9e5311fc5d6c2041aa3456aba0361a5a948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
