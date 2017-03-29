<?php

/* article/article.html.twig */
class __TwigTemplate_5fa746edc5b0d07c088a5525e42bfd4759142e4b55e322caf03d86eda2cfe41a extends Twig_Template
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
        $__internal_6d38f7e138078f0d527cfed12cffea81a9ac67c30978b8249e8bbcdf8ce3da22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d38f7e138078f0d527cfed12cffea81a9ac67c30978b8249e8bbcdf8ce3da22->enter($__internal_6d38f7e138078f0d527cfed12cffea81a9ac67c30978b8249e8bbcdf8ce3da22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d38f7e138078f0d527cfed12cffea81a9ac67c30978b8249e8bbcdf8ce3da22->leave($__internal_6d38f7e138078f0d527cfed12cffea81a9ac67c30978b8249e8bbcdf8ce3da22_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_fc7d59e9685ce1f4e575359ad291ad9ff4d84d1ff24b439856dcca2863d40167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7d59e9685ce1f4e575359ad291ad9ff4d84d1ff24b439856dcca2863d40167->enter($__internal_fc7d59e9685ce1f4e575359ad291ad9ff4d84d1ff24b439856dcca2863d40167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                            <a class=\"btn btn-default btn-xs\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
";
        
        $__internal_fc7d59e9685ce1f4e575359ad291ad9ff4d84d1ff24b439856dcca2863d40167->leave($__internal_fc7d59e9685ce1f4e575359ad291ad9ff4d84d1ff24b439856dcca2863d40167_prof);

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
        return array (  69 => 22,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
                            <a class=\"btn btn-default btn-xs\" href=\"{{ path('blog_index') }}\">back &raquo;</a>
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
