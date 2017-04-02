<?php

/* form/fields.html.twig */
class __TwigTemplate_b696a8423bc3ab37e4790dc73626c4ff068ecb5d56f19ae8e69f8e2b1b04da1b extends Twig_Template
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
        $__internal_35aae4e7c798361efb6ed2aef22af6fff13060ff6bbb20f36282221df9b35c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aae4e7c798361efb6ed2aef22af6fff13060ff6bbb20f36282221df9b35c13->enter($__internal_35aae4e7c798361efb6ed2aef22af6fff13060ff6bbb20f36282221df9b35c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_35aae4e7c798361efb6ed2aef22af6fff13060ff6bbb20f36282221df9b35c13->leave($__internal_35aae4e7c798361efb6ed2aef22af6fff13060ff6bbb20f36282221df9b35c13_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_646712cecf577ba80667497063560ff5323332283ff7ac5c7e548a1ca1fb0cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646712cecf577ba80667497063560ff5323332283ff7ac5c7e548a1ca1fb0cb5->enter($__internal_646712cecf577ba80667497063560ff5323332283ff7ac5c7e548a1ca1fb0cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

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
        
        $__internal_646712cecf577ba80667497063560ff5323332283ff7ac5c7e548a1ca1fb0cb5->leave($__internal_646712cecf577ba80667497063560ff5323332283ff7ac5c7e548a1ca1fb0cb5_prof);

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
