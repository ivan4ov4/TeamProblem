<?php

/* user/register.html.twig */
class __TwigTemplate_1cb69c478d03c74f9d832addbe7fab57cd4cf3341549af31e614ac3dd011c6e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_540d19fb4e2dc8dff81531bd413b17e2815407f0323bbf403837e64a15a2a411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540d19fb4e2dc8dff81531bd413b17e2815407f0323bbf403837e64a15a2a411->enter($__internal_540d19fb4e2dc8dff81531bd413b17e2815407f0323bbf403837e64a15a2a411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540d19fb4e2dc8dff81531bd413b17e2815407f0323bbf403837e64a15a2a411->leave($__internal_540d19fb4e2dc8dff81531bd413b17e2815407f0323bbf403837e64a15a2a411_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2c57db04aaa4ddbc5b21bb7a3b27f1d838202a120784aba963a673a1c71bcfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c57db04aaa4ddbc5b21bb7a3b27f1d838202a120784aba963a673a1c71bcfd3->enter($__internal_2c57db04aaa4ddbc5b21bb7a3b27f1d838202a120784aba963a673a1c71bcfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_2c57db04aaa4ddbc5b21bb7a3b27f1d838202a120784aba963a673a1c71bcfd3->leave($__internal_2c57db04aaa4ddbc5b21bb7a3b27f1d838202a120784aba963a673a1c71bcfd3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_da354fb97d53074f644095671aa5de218bfb4306beb6fd5cc8b2169a62369faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da354fb97d53074f644095671aa5de218bfb4306beb6fd5cc8b2169a62369faa->enter($__internal_da354fb97d53074f644095671aa5de218bfb4306beb6fd5cc8b2169a62369faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user[email]\" required type=\"email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>

                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_da354fb97d53074f644095671aa5de218bfb4306beb6fd5cc8b2169a62369faa->leave($__internal_da354fb97d53074f644095671aa5de218bfb4306beb6fd5cc8b2169a62369faa_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  89 => 37,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'register' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('user_register') }}\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user[email]\" required type=\"email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('blog_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>

                    {{  form_row(form._token) }}
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
