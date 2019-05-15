<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_4e182df195e1d5f79b50e661bb0255a97d0a76dbe7522b3a86e52c407fb0e048 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'navigation' => [$this, 'block_navigation'],
            'topbar' => [$this, 'block_topbar'],
            'content' => [$this, 'block_content'],
            'analytics' => [$this, 'block_analytics'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        $context["github_link_position"] = (((isset($context["github_link_position"]) || array_key_exists("github_link_position", $context))) ? (($context["github_link_position"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "position", [])));
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", []);
        echo "\">
    ";
        // line 46
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
    ";
        // line 93
        $this->displayBlock('analytics', $context, $blocks);
        // line 98
        echo "
    ";
        // line 99
        $this->displayBlock('bottom', $context, $blocks);
        // line 102
        echo " </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 12
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('assets', $context, $blocks);
        // line 42
        echo "
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/theme.css", 1 => 101], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/featherlight.min.css"], "method");
        // line 21
        echo "
        ";
        // line 22
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css"], "method");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/featherlight.min.js"], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/clipboard.min.js"], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.scrollbar.min.js"], "method");
        // line 35
        echo "        ";
        // line 36
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 38
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 40
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
  ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 46
    public function block_sidebar($context, array $blocks = [])
    {
        // line 47
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                ";
        // line 51
        echo "                <a id=\"logo\" href=\"";
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", [])) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", [])) : (($context["base_url_absolute"] ?? null)));
        echo "\">BigCommerce Logo Here or nothing</a> 
                ";
        // line 52
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "            </div>
        </div>
        ";
        // line 55
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "    </nav>
    ";
    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        // line 60
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>
            ";
        // line 65
        $this->displayBlock('navigation', $context, $blocks);
        // line 66
        echo "            ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 79
        echo "
            ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "
            ";
        // line 83
        echo "                ";
        // line 86
        echo "            ";
        // line 87
        echo "
        </div>
        ";
        // line 90
        echo "    </section>
    ";
    }

    // line 65
    public function block_navigation($context, array $blocks = [])
    {
        $this->loadTemplate("partials/topnavigation.html.twig", "partials/base.html.twig", 65)->display($context);
    }

    // line 66
    public function block_topbar($context, array $blocks = [])
    {
        if (((($context["github_link_position"] ?? null) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 67
            echo "            <div id=\"top-bar\">
                ";
            // line 68
            if ((($context["github_link_position"] ?? null) == "top")) {
                // line 69
                echo "                <div id=\"top-github-link\">
                ";
                // line 70
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 70)->display($context);
                // line 71
                echo "                </div>
                ";
            }
            // line 73
            echo "
                ";
            // line 74
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
                // line 75
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 75)->display($context);
                // line 76
                echo "                ";
            }
            // line 77
            echo "            </div>
            ";
        }
    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
    }

    // line 93
    public function block_analytics($context, array $blocks = [])
    {
        // line 94
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", [])) {
            // line 95
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 95)->display($context);
            // line 96
            echo "        ";
        }
        // line 97
        echo "    ";
    }

    // line 99
    public function block_bottom($context, array $blocks = [])
    {
        // line 100
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 100,  344 => 99,  340 => 97,  337 => 96,  334 => 95,  331 => 94,  328 => 93,  323 => 80,  317 => 77,  314 => 76,  311 => 75,  309 => 74,  306 => 73,  302 => 71,  300 => 70,  297 => 69,  295 => 68,  292 => 67,  288 => 66,  282 => 65,  277 => 90,  273 => 87,  271 => 86,  269 => 83,  266 => 81,  264 => 80,  261 => 79,  258 => 66,  256 => 65,  249 => 60,  246 => 59,  241 => 56,  239 => 55,  235 => 53,  233 => 52,  228 => 51,  223 => 47,  220 => 46,  213 => 40,  208 => 39,  205 => 38,  196 => 36,  194 => 35,  191 => 34,  188 => 33,  185 => 32,  182 => 31,  179 => 30,  176 => 29,  172 => 27,  169 => 26,  166 => 25,  163 => 24,  160 => 23,  158 => 22,  155 => 21,  152 => 20,  149 => 19,  146 => 18,  143 => 17,  140 => 16,  137 => 15,  132 => 42,  130 => 38,  127 => 37,  125 => 29,  122 => 28,  120 => 15,  115 => 13,  111 => 12,  107 => 11,  104 => 10,  102 => 9,  94 => 8,  91 => 7,  88 => 6,  81 => 102,  79 => 99,  76 => 98,  74 => 93,  71 => 92,  69 => 59,  66 => 58,  64 => 46,  58 => 45,  55 => 44,  53 => 6,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set github_link_position = github_link_position is defined ? github_link_position : theme_config.github.position %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"{{ base_url_absolute}}/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{{ base_url_absolute}}/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/theme.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/featherlight.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/featherlight.min.js') %}
        {% do assets.addJs('theme://js/clipboard.min.js') %}
        {% do assets.addJs('theme://js/jquery.scrollbar.min.js') %}
        {# {% do assets.addJs('theme://js/learn.js') %} #}
    {% endblock %}

    {% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
  {% endblock %}

{% endblock head %}
</head>
<body class=\"searchbox-hidden {{ page.header.body_classes }}\" data-url=\"{{ page.route }}\">
    {% block sidebar %}
    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                {# <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">{% include 'partials/logo.html.twig' %}</a> #}
                <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">BigCommerce Logo Here or nothing</a> 
                {% include 'partials/search.html.twig' %}
            </div>
        </div>
        {% include 'partials/sidebar.html.twig' %}
    </nav>
    {% endblock %}

    {% block body %}
    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>
            {% block navigation %}{% include 'partials/topnavigation.html.twig'%}{% endblock %}
            {% block topbar %}{% if  github_link_position == 'top' or config.plugins.breadcrumbs.enabled %}
            <div id=\"top-bar\">
                {% if  github_link_position == 'top' %}
                <div id=\"top-github-link\">
                {% include 'partials/github_link.html.twig' %}
                </div>
                {% endif %}

                {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
                {% endif %}
            </div>
            {% endif %}{% endblock %}

            {% block content %}{% endblock %}

            {# {% block footer %} #}
                {# {% if  github_link_position == 'bottom' %}
                {% include 'partials/github_note.html.twig' %}
                {% endif %} #}
            {# {% endblock %} #}

        </div>
        {# {% block navigation %}{% endblock %} #}
    </section>
    {% endblock %}

    {% block analytics %}
        {% if theme_config.google_analytics_code %}
        {% include 'partials/analytics.html.twig' %}
        {% endif %}
    {% endblock %}

    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
 </body>
</html>
", "partials/base.html.twig", "/Users/tatiana.perry/Documents/grav-testing/grav-admin/user/themes/learn2/templates/partials/base.html.twig");
    }
}
