<?php

/* base.html.twig */
class __TwigTemplate_c523146f2696acaf2bf771c31f2a0d0ee4d338525d93f5b071ff1edf8f2eb375 extends Twig_Template
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
        $__internal_a83896aa3814dbb593037222cb452e44f2c8e192d793e4c281476c15d27b1b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83896aa3814dbb593037222cb452e44f2c8e192d793e4c281476c15d27b1b9a->enter($__internal_a83896aa3814dbb593037222cb452e44f2c8e192d793e4c281476c15d27b1b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a83896aa3814dbb593037222cb452e44f2c8e192d793e4c281476c15d27b1b9a->leave($__internal_a83896aa3814dbb593037222cb452e44f2c8e192d793e4c281476c15d27b1b9a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8cbb55c962f42450c20680d027cf9c992c77f316cb90a6ee4b6a72fe6e5328a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cbb55c962f42450c20680d027cf9c992c77f316cb90a6ee4b6a72fe6e5328a->enter($__internal_a8cbb55c962f42450c20680d027cf9c992c77f316cb90a6ee4b6a72fe6e5328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LightArtsGfx";
        
        $__internal_a8cbb55c962f42450c20680d027cf9c992c77f316cb90a6ee4b6a72fe6e5328a->leave($__internal_a8cbb55c962f42450c20680d027cf9c992c77f316cb90a6ee4b6a72fe6e5328a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b209f00de9b0788bf5ed87e1384f8fdd92e65561067eac4efeb50b8112314ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b209f00de9b0788bf5ed87e1384f8fdd92e65561067eac4efeb50b8112314ab->enter($__internal_3b209f00de9b0788bf5ed87e1384f8fdd92e65561067eac4efeb50b8112314ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleBlack2.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_3b209f00de9b0788bf5ed87e1384f8fdd92e65561067eac4efeb50b8112314ab->leave($__internal_3b209f00de9b0788bf5ed87e1384f8fdd92e65561067eac4efeb50b8112314ab_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b5e20fc28cc92390ec9017cc7c87be500dfd5c841ecb0889e9e5e3dac5cdb7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e20fc28cc92390ec9017cc7c87be500dfd5c841ecb0889e9e5e3dac5cdb7af->enter($__internal_b5e20fc28cc92390ec9017cc7c87be500dfd5c841ecb0889e9e5e3dac5cdb7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_b5e20fc28cc92390ec9017cc7c87be500dfd5c841ecb0889e9e5e3dac5cdb7af->leave($__internal_b5e20fc28cc92390ec9017cc7c87be500dfd5c841ecb0889e9e5e3dac5cdb7af_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_818932f5f4834261f985d275efac56db0d2311e286b11f1892cb739bb86d4a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818932f5f4834261f985d275efac56db0d2311e286b11f1892cb739bb86d4a01->enter($__internal_818932f5f4834261f985d275efac56db0d2311e286b11f1892cb739bb86d4a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">LightArtsGfx Blog</a>

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
        
        $__internal_818932f5f4834261f985d275efac56db0d2311e286b11f1892cb739bb86d4a01->leave($__internal_818932f5f4834261f985d275efac56db0d2311e286b11f1892cb739bb86d4a01_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6d0f31058d77dcd33bbc25df9d6a8a26f4a8b143bbb00d61eadb54a644039e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d0f31058d77dcd33bbc25df9d6a8a26f4a8b143bbb00d61eadb54a644039e1->enter($__internal_b6d0f31058d77dcd33bbc25df9d6a8a26f4a8b143bbb00d61eadb54a644039e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6d0f31058d77dcd33bbc25df9d6a8a26f4a8b143bbb00d61eadb54a644039e1->leave($__internal_b6d0f31058d77dcd33bbc25df9d6a8a26f4a8b143bbb00d61eadb54a644039e1_prof);

    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        $__internal_e71497a124f417c044c9fd82690b3286ad64397538bfb020cf3ff827c01568a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71497a124f417c044c9fd82690b3286ad64397538bfb020cf3ff827c01568a8->enter($__internal_e71497a124f417c044c9fd82690b3286ad64397538bfb020cf3ff827c01568a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e71497a124f417c044c9fd82690b3286ad64397538bfb020cf3ff827c01568a8->leave($__internal_e71497a124f417c044c9fd82690b3286ad64397538bfb020cf3ff827c01568a8_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2d384432e898380102b91fcb64ddecc1d7a27021e4b90a15e0f7082ccb25c256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d384432e898380102b91fcb64ddecc1d7a27021e4b90a15e0f7082ccb25c256->enter($__internal_2d384432e898380102b91fcb64ddecc1d7a27021e4b90a15e0f7082ccb25c256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "    <footer>
        <div class=\"container footer\">
            <p>&copy; 2017 - LightArtsGfx</p>
        </div>
    </footer>
";
        
        $__internal_2d384432e898380102b91fcb64ddecc1d7a27021e4b90a15e0f7082ccb25c256->leave($__internal_2d384432e898380102b91fcb64ddecc1d7a27021e4b90a15e0f7082ccb25c256_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdfb4fe4f631ec128b52be20155bceef66876999085e93d85002e34d77c55181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfb4fe4f631ec128b52be20155bceef66876999085e93d85002e34d77c55181->enter($__internal_fdfb4fe4f631ec128b52be20155bceef66876999085e93d85002e34d77c55181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fdfb4fe4f631ec128b52be20155bceef66876999085e93d85002e34d77c55181->leave($__internal_fdfb4fe4f631ec128b52be20155bceef66876999085e93d85002e34d77c55181_prof);

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
    <title>{% block title %}LightArtsGfx{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/styleBlack2.css') }}\">
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
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">LightArtsGfx Blog</a>

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
        <div class=\"container footer\">
            <p>&copy; 2017 - LightArtsGfx</p>
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