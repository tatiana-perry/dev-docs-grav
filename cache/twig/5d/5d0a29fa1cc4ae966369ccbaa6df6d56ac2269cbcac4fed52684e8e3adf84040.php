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

/* partials/topnavigation.html.twig */
class __TwigTemplate_422c0b6d9e37c415473f3bdeca3919d0ea639f4b91ccf456bab81de3f3c8c8a4 extends \Twig\Template
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
        echo "<ul class=\"top-nav\">
  <li class=\"top-nav-li\"><a class=\"active\" href=\"/\">Home - I also work</a></li>
  <li class=\"top-nav-li\"><a href=\"#news\">Not auto generated</a></li>
  <li class=\"top-nav-li\"><a href=\"#contact\">Links not active</a></li>
  <li class=\"top-nav-li\"><a href=\"/changelog\">Changelog - This one does work</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/topnavigation.html.twig";
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
        return new Source("<ul class=\"top-nav\">
  <li class=\"top-nav-li\"><a class=\"active\" href=\"/\">Home - I also work</a></li>
  <li class=\"top-nav-li\"><a href=\"#news\">Not auto generated</a></li>
  <li class=\"top-nav-li\"><a href=\"#contact\">Links not active</a></li>
  <li class=\"top-nav-li\"><a href=\"/changelog\">Changelog - This one does work</a></li>
</ul>", "partials/topnavigation.html.twig", "/Users/tatiana.perry/Documents/grav-testing/grav-admin/user/themes/learn2/templates/partials/topnavigation.html.twig");
    }
}
