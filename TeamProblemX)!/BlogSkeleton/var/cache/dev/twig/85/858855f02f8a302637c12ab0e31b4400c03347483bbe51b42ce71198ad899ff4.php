<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f811ddc553707b1b0a95fc4114bf79b40989c94674f6e93c5da242db22116c27 extends Twig_Template
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
        $__internal_cdb9c9e65e7133e5dc8786e71b957b3bc3a29a93dfa84acdbac68519dd9e40c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb9c9e65e7133e5dc8786e71b957b3bc3a29a93dfa84acdbac68519dd9e40c7->enter($__internal_cdb9c9e65e7133e5dc8786e71b957b3bc3a29a93dfa84acdbac68519dd9e40c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cdb9c9e65e7133e5dc8786e71b957b3bc3a29a93dfa84acdbac68519dd9e40c7->leave($__internal_cdb9c9e65e7133e5dc8786e71b957b3bc3a29a93dfa84acdbac68519dd9e40c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
