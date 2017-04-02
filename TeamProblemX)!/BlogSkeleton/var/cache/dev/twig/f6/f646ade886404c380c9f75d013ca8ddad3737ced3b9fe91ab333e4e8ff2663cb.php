<?php

/* article/edit.html.twig */
class __TwigTemplate_5dbb0e15e822fb9f7ff163b9392ddc5ad4115d75d0676e38114fff919d599445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_addb48aade54310f10593045be5caa127a3999dbeda193e8cd41f09ffcd9e6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addb48aade54310f10593045be5caa127a3999dbeda193e8cd41f09ffcd9e6f6->enter($__internal_addb48aade54310f10593045be5caa127a3999dbeda193e8cd41f09ffcd9e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_addb48aade54310f10593045be5caa127a3999dbeda193e8cd41f09ffcd9e6f6->leave($__internal_addb48aade54310f10593045be5caa127a3999dbeda193e8cd41f09ffcd9e6f6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_11bd61d0096292998abd4b1afe7bc63c58b89e268e7fafd7652b5807ac85f222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bd61d0096292998abd4b1afe7bc63c58b89e268e7fafd7652b5807ac85f222->enter($__internal_11bd61d0096292998abd4b1afe7bc63c58b89e268e7fafd7652b5807ac85f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>Edit Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                        <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                  name=\"article[content]\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>




";
        
        $__internal_11bd61d0096292998abd4b1afe7bc63c58b89e268e7fafd7652b5807ac85f222->leave($__internal_11bd61d0096292998abd4b1afe7bc63c58b89e268e7fafd7652b5807ac85f222_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  74 => 27,  67 => 23,  56 => 15,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('article_edit', {id: article.id}) }}\" method=\"POST\">
                <fieldset>
                    <legend>Edit Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"{{ article.title }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                        <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                  name=\"article[content]\">{{ article.content }}</textarea>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('article_view', {id: article.id}) }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>




{% endblock %}

";
    }
}
