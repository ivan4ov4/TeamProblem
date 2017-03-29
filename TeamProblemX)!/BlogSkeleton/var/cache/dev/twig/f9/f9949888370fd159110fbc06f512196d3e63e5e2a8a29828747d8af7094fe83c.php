<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_28573b583cd791ce9f846ec656897607aac7c3d653156a007f9548ad1c8ce8c7 extends Twig_Template
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
        $__internal_75577a322ff2f78a5400630361160ebc2fff4de17236da4d7eb85fe62157c5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75577a322ff2f78a5400630361160ebc2fff4de17236da4d7eb85fe62157c5fe->enter($__internal_75577a322ff2f78a5400630361160ebc2fff4de17236da4d7eb85fe62157c5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_75577a322ff2f78a5400630361160ebc2fff4de17236da4d7eb85fe62157c5fe->leave($__internal_75577a322ff2f78a5400630361160ebc2fff4de17236da4d7eb85fe62157c5fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
