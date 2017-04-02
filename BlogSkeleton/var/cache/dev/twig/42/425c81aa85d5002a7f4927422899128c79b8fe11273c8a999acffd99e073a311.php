<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ee03168c9ef7e2cae8cb97b04f137d366810e3356ae2f1398b1c7ef989369fbd extends Twig_Template
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
        $__internal_b05c72b5132790a97b23c80ef067ad7669734d69277594e6fd9eb71b82f81c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05c72b5132790a97b23c80ef067ad7669734d69277594e6fd9eb71b82f81c6a->enter($__internal_b05c72b5132790a97b23c80ef067ad7669734d69277594e6fd9eb71b82f81c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b05c72b5132790a97b23c80ef067ad7669734d69277594e6fd9eb71b82f81c6a->leave($__internal_b05c72b5132790a97b23c80ef067ad7669734d69277594e6fd9eb71b82f81c6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
