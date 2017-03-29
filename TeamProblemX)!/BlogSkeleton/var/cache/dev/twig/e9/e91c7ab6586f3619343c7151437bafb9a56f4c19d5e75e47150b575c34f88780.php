<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a14b981fbe86cd399c28fd3309bdc6db6ac97eaf6cdb00c01d7f2d799cd9ae33 extends Twig_Template
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
        $__internal_1129ed3ae591f37f5744a61975c55c74c3c6b35f3ed843d79dbe57754341c4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1129ed3ae591f37f5744a61975c55c74c3c6b35f3ed843d79dbe57754341c4c3->enter($__internal_1129ed3ae591f37f5744a61975c55c74c3c6b35f3ed843d79dbe57754341c4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1129ed3ae591f37f5744a61975c55c74c3c6b35f3ed843d79dbe57754341c4c3->leave($__internal_1129ed3ae591f37f5744a61975c55c74c3c6b35f3ed843d79dbe57754341c4c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
