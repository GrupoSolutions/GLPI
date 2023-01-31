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

/* pages/assets/phone.html.twig */
class __TwigTemplate_aa6e62e79516633ffe934f3f9fa33dc9 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/phone.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/phone.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    



    ";
        // line 43
        ob_start(function () { return ''; });
        // line 44
        echo "    ";
        echo twig_include($this->env, $context, "components/form/flags.html.twig");
        echo "
    ";
        $context["flags_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        if (twig_length_filter($this->env, twig_trim_filter(($context["flags_html"] ?? null)))) {
            // line 48
            echo "        ";
            $context["flags_html"] = (("<div class=\"d-flex flex-wrap\">" . ($context["flags_html"] ?? null)) . "</div>");
            // line 49
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 51
($context["flags_html"] ?? null), _n("Port", "Ports", Session::getPluralNumber())], 49, $context, $this->getSourceContext());
            // line 53
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "pages/assets/phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 53,  79 => 51,  77 => 49,  74 => 48,  72 => 47,  69 => 46,  63 => 44,  61 => 43,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/phone.html.twig", "/var/www/html/glpi/templates/pages/assets/phone.html.twig");
    }
}
