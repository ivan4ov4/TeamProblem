<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e7905084b232ec744e45b893cd1c9e1d231222bd948f45ddf2f45cce347b192f extends Twig_Template
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
        $__internal_35c7b44832a623a3f723077a78bade1fb91c8861afc5c989c4d89f485e9722b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c7b44832a623a3f723077a78bade1fb91c8861afc5c989c4d89f485e9722b9->enter($__internal_35c7b44832a623a3f723077a78bade1fb91c8861afc5c989c4d89f485e9722b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_35c7b44832a623a3f723077a78bade1fb91c8861afc5c989c4d89f485e9722b9->leave($__internal_35c7b44832a623a3f723077a78bade1fb91c8861afc5c989c4d89f485e9722b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
