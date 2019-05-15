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

/* error.html.twig */
class __TwigTemplate_917d1ce62ad1736883af13b0937d6a9ef435978fa15c8a9c712b935e3b4ec0ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'topbar' => [$this, 'block_topbar'],
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topbar($context, array $blocks = [])
    {
    }

    // line 4
    public function block_navigation($context, array $blocks = [])
    {
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
    \t\t<h1>";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ERROR.ERROR");
        echo " ";
        echo $this->getAttribute(($context["header"] ?? null), "http_response_code", []);
        echo "</h1>

            ";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  54 => 7,  51 => 6,  46 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block topbar %}{% endblock %}
{% block navigation %}{% endblock %}

{% block content %}
\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
    \t\t<h1>{{ 'PLUGIN_ERROR.ERROR'|t }} {{ header.http_response_code }}</h1>

            {{ page.content }}

\t\t</div>
    </div>
{% endblock %}
", "error.html.twig", "/Users/tatiana.perry/Documents/grav-testing/grav-admin/user/themes/learn2/templates/error.html.twig");
    }
}
