<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @formcreator/field/undefinedfield.html.twig */
class __TwigTemplate_56dc1b7cfa8142d477cfaf0218469f111efdd90a9b20dd9c9f4695c1199c2273 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'questionFields' => [$this, 'block_questionFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "@formcreator/pages/question.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/undefinedfield.html.twig", 35)->unwrap();
        // line 36
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/undefinedfield.html.twig", 36)->unwrap();
        // line 34
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/undefinedfield.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "error", [], "any", false, false, false, 39)], 39, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@formcreator/field/undefinedfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/undefinedfield.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\formcreator\\templates\\field\\undefinedfield.html.twig");
    }
}
