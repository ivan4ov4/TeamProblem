<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8d151b778d2bd519809d371f2595c1d178b69cf037a0365cb61fcffc319cdd27 extends Twig_Template
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
        $__internal_49ab6f57395d2bdeebf12c0c1c881237b75320e2d790b33741f3474c3d0c72a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ab6f57395d2bdeebf12c0c1c881237b75320e2d790b33741f3474c3d0c72a8->enter($__internal_49ab6f57395d2bdeebf12c0c1c881237b75320e2d790b33741f3474c3d0c72a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_49ab6f57395d2bdeebf12c0c1c881237b75320e2d790b33741f3474c3d0c72a8->leave($__internal_49ab6f57395d2bdeebf12c0c1c881237b75320e2d790b33741f3474c3d0c72a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
