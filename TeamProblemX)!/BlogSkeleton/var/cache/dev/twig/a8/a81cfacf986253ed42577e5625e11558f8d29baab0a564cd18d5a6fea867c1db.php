<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4582b0668abeabc6f2675bc22dbef4691da284d8dcd6a6114de5aa8635eba047 extends Twig_Template
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
        $__internal_cd463b60468dda23d3bd92e7217e3032f777f2c939d0bc8aeafc1810fe4fdb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd463b60468dda23d3bd92e7217e3032f777f2c939d0bc8aeafc1810fe4fdb1b->enter($__internal_cd463b60468dda23d3bd92e7217e3032f777f2c939d0bc8aeafc1810fe4fdb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cd463b60468dda23d3bd92e7217e3032f777f2c939d0bc8aeafc1810fe4fdb1b->leave($__internal_cd463b60468dda23d3bd92e7217e3032f777f2c939d0bc8aeafc1810fe4fdb1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
