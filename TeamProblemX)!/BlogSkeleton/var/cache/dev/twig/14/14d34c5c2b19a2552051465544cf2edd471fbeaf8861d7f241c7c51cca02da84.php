<?php

/* base.html.twig */
class __TwigTemplate_d554e3250ef1c807e9c996fa2ff61da11bf560c601c6e25f5be0d8adace50f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9c725c7b8c0885a5516dc175f9a812876439d4b630384e44326fcd5fd8e138a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c725c7b8c0885a5516dc175f9a812876439d4b630384e44326fcd5fd8e138a->enter($__internal_b9c725c7b8c0885a5516dc175f9a812876439d4b630384e44326fcd5fd8e138a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
<div class=\"container body-container\">
    ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "</div>

";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
</body>
</html>
";
        
        $__internal_b9c725c7b8c0885a5516dc175f9a812876439d4b630384e44326fcd5fd8e138a->leave($__internal_b9c725c7b8c0885a5516dc175f9a812876439d4b630384e44326fcd5fd8e138a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b83e2e10aa2d0fbfdfbb2dc5fa1c3ccc1faa6215f96f6c281566ac37fead33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b83e2e10aa2d0fbfdfbb2dc5fa1c3ccc1faa6215f96f6c281566ac37fead33c->enter($__internal_0b83e2e10aa2d0fbfdfbb2dc5fa1c3ccc1faa6215f96f6c281566ac37fead33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_0b83e2e10aa2d0fbfdfbb2dc5fa1c3ccc1faa6215f96f6c281566ac37fead33c->leave($__internal_0b83e2e10aa2d0fbfdfbb2dc5fa1c3ccc1faa6215f96f6c281566ac37fead33c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4fa2d67b5a04499a0b814e75e76a8b41add95e0daa3ccba016ea37df6a2baa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa2d67b5a04499a0b814e75e76a8b41add95e0daa3ccba016ea37df6a2baa36->enter($__internal_4fa2d67b5a04499a0b814e75e76a8b41add95e0daa3ccba016ea37df6a2baa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_4fa2d67b5a04499a0b814e75e76a8b41add95e0daa3ccba016ea37df6a2baa36->leave($__internal_4fa2d67b5a04499a0b814e75e76a8b41add95e0daa3ccba016ea37df6a2baa36_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_71055f5dcf4c2d99a39a5fefe8f1a7a45b12cd813b710e5cb92666641d465c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71055f5dcf4c2d99a39a5fefe8f1a7a45b12cd813b710e5cb92666641d465c56->enter($__internal_71055f5dcf4c2d99a39a5fefe8f1a7a45b12cd813b710e5cb92666641d465c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_71055f5dcf4c2d99a39a5fefe8f1a7a45b12cd813b710e5cb92666641d465c56->leave($__internal_71055f5dcf4c2d99a39a5fefe8f1a7a45b12cd813b710e5cb92666641d465c56_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_0f300dabed8a0b0d8a2c134cee57035d4f1a07e0f4d10d73e2ffcd3d290efa24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f300dabed8a0b0d8a2c134cee57035d4f1a07e0f4d10d73e2ffcd3d290efa24->enter($__internal_0f300dabed8a0b0d8a2c134cee57035d4f1a07e0f4d10d73e2ffcd3d290efa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "                            <li>
                                <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 53
            echo "                            <li>
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 64
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_0f300dabed8a0b0d8a2c134cee57035d4f1a07e0f4d10d73e2ffcd3d290efa24->leave($__internal_0f300dabed8a0b0d8a2c134cee57035d4f1a07e0f4d10d73e2ffcd3d290efa24_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_774d5d637821008bd9608635b399c75ce8b489a68bcc2b964451ea52d6d578da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774d5d637821008bd9608635b399c75ce8b489a68bcc2b964451ea52d6d578da->enter($__internal_774d5d637821008bd9608635b399c75ce8b489a68bcc2b964451ea52d6d578da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 75
        $this->displayBlock('main', $context, $blocks);
        // line 76
        echo "            </div>
        </div>
    ";
        
        $__internal_774d5d637821008bd9608635b399c75ce8b489a68bcc2b964451ea52d6d578da->leave($__internal_774d5d637821008bd9608635b399c75ce8b489a68bcc2b964451ea52d6d578da_prof);

    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        $__internal_e15c58be39d10e5b13a084771de063241f34fb76c67d05b0517e8c47045b0b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15c58be39d10e5b13a084771de063241f34fb76c67d05b0517e8c47045b0b3c->enter($__internal_e15c58be39d10e5b13a084771de063241f34fb76c67d05b0517e8c47045b0b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e15c58be39d10e5b13a084771de063241f34fb76c67d05b0517e8c47045b0b3c->leave($__internal_e15c58be39d10e5b13a084771de063241f34fb76c67d05b0517e8c47045b0b3c_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1ab56ee1d5cabdc61b34d5c98dcd43ce6c1f2ee871c67c3b6399b2e3c8897d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab56ee1d5cabdc61b34d5c98dcd43ce6c1f2ee871c67c3b6399b2e3c8897d95->enter($__internal_1ab56ee1d5cabdc61b34d5c98dcd43ce6c1f2ee871c67c3b6399b2e3c8897d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_1ab56ee1d5cabdc61b34d5c98dcd43ce6c1f2ee871c67c3b6399b2e3c8897d95->leave($__internal_1ab56ee1d5cabdc61b34d5c98dcd43ce6c1f2ee871c67c3b6399b2e3c8897d95_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3067fa57f94f995828dc073503e16241e01808e53596cfe30e3d0fe44ff8f4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3067fa57f94f995828dc073503e16241e01808e53596cfe30e3d0fe44ff8f4d0->enter($__internal_3067fa57f94f995828dc073503e16241e01808e53596cfe30e3d0fe44ff8f4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3067fa57f94f995828dc073503e16241e01808e53596cfe30e3d0fe44ff8f4d0->leave($__internal_3067fa57f94f995828dc073503e16241e01808e53596cfe30e3d0fe44ff8f4d0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 93,  277 => 92,  273 => 91,  268 => 90,  262 => 89,  250 => 82,  244 => 81,  233 => 75,  224 => 76,  222 => 75,  218 => 73,  212 => 72,  200 => 64,  192 => 59,  184 => 54,  181 => 53,  173 => 48,  165 => 43,  157 => 38,  154 => 37,  152 => 36,  139 => 26,  133 => 22,  127 => 21,  116 => 19,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 95,  72 => 89,  69 => 88,  67 => 81,  63 => 79,  61 => 72,  57 => 70,  55 => 21,  50 => 19,  43 => 16,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('article_create') }}\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
