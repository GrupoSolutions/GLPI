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

/* pages/assets/socket.html.twig */
class __TwigTemplate_7dc6235632542061d7dec5a371f59b963f873ce9ce5e7719e3a62fe003572f34 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/socket.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/socket.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "   <input type=\"hidden\" name=\"itemtype\" value=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
        echo "\">
   <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
        echo "\">

   ";
        // line 42
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 42, $context, $this->getSourceContext());
        echo "

   ";
        // line 44
        echo twig_call_macro($macros["fields"], "macro_numberField", ["position", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 46
($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["position"] ?? null) : null), __("Position"),         // line 48
($context["field_options"] ?? null)], 44, $context, $this->getSourceContext());
        // line 49
        echo "


   ";
        // line 52
        ob_start(function () { return ''; });
        // line 53
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Socket::dropdownWiringSide", [0 => "wiring_side", 1 => ["value" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 56
($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["wiring_side"] ?? null) : null)]]);
        // line 59
        echo "   ";
        $context["wiring_side"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["wiring_side",         // line 62
($context["wiring_side"] ?? null), __("Wiring side")], 60, $context, $this->getSourceContext());
        // line 64
        echo "

   ";
        // line 66
        ob_start(function () { return ''; });
        // line 67
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Socket::showNetworkPortForm", [0 => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), 1 => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["items_id"] ?? null) : null), 2 => (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["networkports_id"] ?? null) : null), 3 =>         // line 71
($context["params"] ?? null)]);
        // line 73
        echo "   ";
        $context["networkports"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["networkports_id",         // line 76
($context["networkports"] ?? null), _n("Network port", "Network ports", Session::getPluralNumber())], 74, $context, $this->getSourceContext());
        // line 78
        echo "

";
    }

    public function getTemplateName()
    {
        return "pages/assets/socket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 78,  110 => 76,  108 => 74,  105 => 73,  103 => 71,  102 => 70,  101 => 69,  100 => 68,  98 => 67,  96 => 66,  92 => 64,  90 => 62,  88 => 60,  85 => 59,  83 => 56,  81 => 53,  79 => 52,  74 => 49,  72 => 48,  71 => 46,  70 => 44,  65 => 42,  60 => 40,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/socket.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\assets\\socket.html.twig");
    }
}
