<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_08b62234a83fbc68d3d97fd65fea9e69dc3c8a8e4a0bda25ed10afb3443ce83d extends Twig_Template
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
        $__internal_83b4b5be4b3bf50d44d053a441cc0a6909602e9c85cc040b80ded8777801a600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b4b5be4b3bf50d44d053a441cc0a6909602e9c85cc040b80ded8777801a600->enter($__internal_83b4b5be4b3bf50d44d053a441cc0a6909602e9c85cc040b80ded8777801a600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_83b4b5be4b3bf50d44d053a441cc0a6909602e9c85cc040b80ded8777801a600->leave($__internal_83b4b5be4b3bf50d44d053a441cc0a6909602e9c85cc040b80ded8777801a600_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
