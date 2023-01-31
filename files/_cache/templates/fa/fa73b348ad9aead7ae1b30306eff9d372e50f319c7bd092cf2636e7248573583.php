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

/* pages/assets/enclosure.html.twig */
class __TwigTemplate_dcd6b9e821091812d94f7cef8e0f4514fe2c69bbaeb23ac7f530f4cfeb21dd80 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/enclosure.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/enclosure.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_numberField", ["power_supplies", max((($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["power_supplies"] ?? null) : null), 1), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("DevicePowerSupply", Session::getPluralNumber()), twig_array_merge(        // line 43
($context["field_options"] ?? null), ["min" => 1, "max" => 6, "step" => 1])], 39, $context, $this->getSourceContext());
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/assets/enclosure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 48,  58 => 43,  57 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/enclosure.html.twig", "C:\\wamp64\\www\\glpi\\templates\\pages\\assets\\enclosure.html.twig");
    }
}
