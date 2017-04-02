<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1b9554f70bb971a1e3306aa1c77cc8a3d1396061f877ecf77f1df7595c070b71 extends Twig_Template
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
        $__internal_2afe41e683e17f7601102810af1d32498b9c722670657d0c184efbf3dfedd5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afe41e683e17f7601102810af1d32498b9c722670657d0c184efbf3dfedd5a9->enter($__internal_2afe41e683e17f7601102810af1d32498b9c722670657d0c184efbf3dfedd5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2afe41e683e17f7601102810af1d32498b9c722670657d0c184efbf3dfedd5a9->leave($__internal_2afe41e683e17f7601102810af1d32498b9c722670657d0c184efbf3dfedd5a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
