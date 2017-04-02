<?php

/* article/article.html.twig */
class __TwigTemplate_ccf1968b1468bebe6708ac9af1453decc7f499a593d2ec887f476582bb1a6468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/article.html.twig", 1);
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
        $__internal_9a073c3e74ab0847635d363b07c0bd853dccac0fb4b7e439b4a786c1de7dfbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a073c3e74ab0847635d363b07c0bd853dccac0fb4b7e439b4a786c1de7dfbd4->enter($__internal_9a073c3e74ab0847635d363b07c0bd853dccac0fb4b7e439b4a786c1de7dfbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a073c3e74ab0847635d363b07c0bd853dccac0fb4b7e439b4a786c1de7dfbd4->leave($__internal_9a073c3e74ab0847635d363b07c0bd853dccac0fb4b7e439b4a786c1de7dfbd4_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f1b51135d50cd2db22e13a5451ac12543255ab3d7c4c4d15d3a07eb1196f4311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b51135d50cd2db22e13a5451ac12543255ab3d7c4c4d15d3a07eb1196f4311->enter($__internal_f1b51135d50cd2db22e13a5451ac12543255ab3d7c4c4d15d3a07eb1196f4311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
                    </header>

                    <p>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
                    </p>

                    <small class=\"author\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "
                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            ";
        // line 22
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 23
            echo "                            <a class=\"btn btn-primary btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Delete</a>
                            ";
        }
        // line 26
        echo "                            <a class=\"btn btn-default btn-xs\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">back >></a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
";
        
        $__internal_f1b51135d50cd2db22e13a5451ac12543255ab3d7c4c4d15d3a07eb1196f4311->leave($__internal_f1b51135d50cd2db22e13a5451ac12543255ab3d7c4c4d15d3a07eb1196f4311_prof);

    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  76 => 24,  71 => 23,  69 => 22,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>{{ article.title }}</h2>
                    </header>

                    <p>
                        {{ article.content }}
                    </p>

                    <small class=\"author\">
                        {{ article.author }}
                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            {% if app.user %}
                            <a class=\"btn btn-primary btn-xs\" href=\"{{ path('article_edit', {id: article.id}) }}\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"{{ path('article_delete', {id: article.id}) }}\">Delete</a>
                            {% endif %}
                            <a class=\"btn btn-default btn-xs\" href=\"{{ path('blog_index') }}\">back >></a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
{% endblock %}

";
    }
}
