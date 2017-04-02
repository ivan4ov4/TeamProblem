<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c06a138d7fda59a497a84f83c90d3d6cff08f1346744bfbc31b7905b44043fa7 extends Twig_Template
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
        $__internal_838eafec94864d825e1f8af307b869027b6c45c115a8bb9aaa7f7db1f736ae13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838eafec94864d825e1f8af307b869027b6c45c115a8bb9aaa7f7db1f736ae13->enter($__internal_838eafec94864d825e1f8af307b869027b6c45c115a8bb9aaa7f7db1f736ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_838eafec94864d825e1f8af307b869027b6c45c115a8bb9aaa7f7db1f736ae13->leave($__internal_838eafec94864d825e1f8af307b869027b6c45c115a8bb9aaa7f7db1f736ae13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
