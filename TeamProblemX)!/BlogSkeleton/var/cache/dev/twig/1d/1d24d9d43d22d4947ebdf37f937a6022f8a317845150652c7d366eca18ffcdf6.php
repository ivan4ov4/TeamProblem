<?php

/* blog/index.html.twig */
class __TwigTemplate_816a5599118c68b875eba5a751f81e47de5d24d1d25f2974afbf45a2a9eeda95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_2d8b6c210ae7d6b17060b480f9828f88df7e19514a220d7c74bc52536235baa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8b6c210ae7d6b17060b480f9828f88df7e19514a220d7c74bc52536235baa3->enter($__internal_2d8b6c210ae7d6b17060b480f9828f88df7e19514a220d7c74bc52536235baa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8b6c210ae7d6b17060b480f9828f88df7e19514a220d7c74bc52536235baa3->leave($__internal_2d8b6c210ae7d6b17060b480f9828f88df7e19514a220d7c74bc52536235baa3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_82e5e6e721cf65101807d56d23efb4afa1f9e9c4574adb53758a9f6280f3dfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e5e6e721cf65101807d56d23efb4afa1f9e9c4574adb53758a9f6280f3dfe7->enter($__internal_82e5e6e721cf65101807d56d23efb4afa1f9e9c4574adb53758a9f6280f3dfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h2>
                        </header>

                        <p>
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "
                        </p>

                        <small class=\"author\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "
                        </small>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\"
                                   href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Read more &raquo;</a>
                            </div>
                        </footer>
                    </article>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
    </div>
";
        
        $__internal_82e5e6e721cf65101807d56d23efb4afa1f9e9c4574adb53758a9f6280f3dfe7->leave($__internal_82e5e6e721cf65101807d56d23efb4afa1f9e9c4574adb53758a9f6280f3dfe7_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  76 => 24,  67 => 18,  60 => 14,  53 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            {% for article in articles %}
                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>{{ article.title }}</h2>
                        </header>

                        <p>
                            {{ article.summary }}
                        </p>

                        <small class=\"author\">
                            {{ article.author }}
                        </small>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\"
                                   href=\"{{ path('article_view', {'id': article.id}) }}\">Read more &raquo;</a>
                            </div>
                        </footer>
                    </article>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

";
    }
}
