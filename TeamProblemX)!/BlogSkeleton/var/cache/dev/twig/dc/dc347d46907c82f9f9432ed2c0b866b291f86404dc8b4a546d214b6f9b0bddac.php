<?php

/* :form:fields.html.twig */
class __TwigTemplate_c153526248d9eb2475bb9337969c2ff72b75887e797f559f4f28cd6c549b1689 extends Twig_Template
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
        $__internal_9215f6c6b05854eee7323b327742f8d0cca6cc3c28019dc3cba430062a486fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9215f6c6b05854eee7323b327742f8d0cca6cc3c28019dc3cba430062a486fed->enter($__internal_9215f6c6b05854eee7323b327742f8d0cca6cc3c28019dc3cba430062a486fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_9215f6c6b05854eee7323b327742f8d0cca6cc3c28019dc3cba430062a486fed->leave($__internal_9215f6c6b05854eee7323b327742f8d0cca6cc3c28019dc3cba430062a486fed_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_b92f750166ced1de33d5c54b54c4c3f25277d6ab16b659c71e807517a533f20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92f750166ced1de33d5c54b54c4c3f25277d6ab16b659c71e807517a533f20c->enter($__internal_b92f750166ced1de33d5c54b54c4c3f25277d6ab16b659c71e807517a533f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

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
        
        $__internal_b92f750166ced1de33d5c54b54c4c3f25277d6ab16b659c71e807517a533f20c->leave($__internal_b92f750166ced1de33d5c54b54c4c3f25277d6ab16b659c71e807517a533f20c_prof);

    }

    public function getTemplateName()
    {
        return ":form:fields.html.twig";
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
