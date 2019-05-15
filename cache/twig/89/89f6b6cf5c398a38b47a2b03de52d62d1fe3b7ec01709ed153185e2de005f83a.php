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

/* default.html.twig */
class __TwigTemplate_39e5d4180dc0130a6b7aa3e6a47e6f2cbf1cf4dcbc23b49e91c2172c5b86405a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("default.html.twig", "default.html.twig", 1, "1991104254")->display($context);
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig'%}

    {% block content %}
        {% include 'partials/pagetoc.html.twig' %}
        {% include 'partials/page.html.twig' %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block footer %}{% endblock %}

{% endembed %}
", "default.html.twig", "/Users/tatiana.perry/Documents/grav-testing/grav-admin/user/themes/learn2/templates/default.html.twig");
    }
}


/* default.html.twig */
class __TwigTemplate_39e5d4180dc0130a6b7aa3e6a47e6f2cbf1cf4dcbc23b49e91c2172c5b86405a___1991104254 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        $this->loadTemplate("partials/pagetoc.html.twig", "default.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("partials/page.html.twig", "default.html.twig", 5)->display($context);
        // line 6
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "default.html.twig", 6)->display($context);
        // line 7
        echo "    ";
    }

    // line 9
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 9,  106 => 7,  103 => 6,  100 => 5,  97 => 4,  94 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig'%}

    {% block content %}
        {% include 'partials/pagetoc.html.twig' %}
        {% include 'partials/page.html.twig' %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block footer %}{% endblock %}

{% endembed %}
", "default.html.twig", "/Users/tatiana.perry/Documents/grav-testing/grav-admin/user/themes/learn2/templates/default.html.twig");
    }
}
