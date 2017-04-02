<?php

/* form/fields.html.twig */
class __TwigTemplate_fa22aacdc9e4998c2bb591b76355198671bec6162784e91b5d1b63060918893a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3b9f36956d5763037664517cfe232ab9a76ffe8c7a9c90cf506beb5e1b3fc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b9f36956d5763037664517cfe232ab9a76ffe8c7a9c90cf506beb5e1b3fc4d->enter($__internal_a3b9f36956d5763037664517cfe232ab9a76ffe8c7a9c90cf506beb5e1b3fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_a3b9f36956d5763037664517cfe232ab9a76ffe8c7a9c90cf506beb5e1b3fc4d->leave($__internal_a3b9f36956d5763037664517cfe232ab9a76ffe8c7a9c90cf506beb5e1b3fc4d_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_f175bd01f8ad88b252a9cd3e668335c7a9a03aa574ab82a5ad2143214c1cfbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f175bd01f8ad88b252a9cd3e668335c7a9a03aa574ab82a5ad2143214c1cfbc2->enter($__internal_f175bd01f8ad88b252a9cd3e668335c7a9a03aa574ab82a5ad2143214c1cfbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f175bd01f8ad88b252a9cd3e668335c7a9a03aa574ab82a5ad2143214c1cfbc2->leave($__internal_f175bd01f8ad88b252a9cd3e668335c7a9a03aa574ab82a5ad2143214c1cfbc2_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
