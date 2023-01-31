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

/* components/form/flags.html.twig */
class __TwigTemplate_674560d299cfed51dd73a4ed0c6c1e5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["flags"] = ["have_serial" => __("Serial"), "have_parallel" => __("Parallel"), "have_usb" => __("USB"), "have_ethernet" => __("Ethernet"), "have_wifi" => __("Wifi"), "have_micro" => __("Microphone"), "have_subd" => __("Sub-D"), "have_bnc" => __("BNC"), "have_dvi" => __("DVI"), "have_pivot" => __("Pivot"), "have_hdmi" => __("HDMI"), "have_displayport" => __("DisplayPort")];
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flags"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 49
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["field"]], "method", false, false, false, 49)) {
                // line 50
                echo "      <div class=\"m-2\">
         <label class=\"form-check\">
            <input type=\"hidden\" name=\"";
                // line 52
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "\" value=\"0\" />
            <input class=\"form-check-input\"
                   type=\"checkbox\"
                   name=\"";
                // line 55
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "\"
                   ";
                // line 56
                if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["field"]] ?? null) : null) == 1)) {
                    echo "checked=\"checked\"";
                }
                // line 57
                echo "                   value=\"1\" />
            <span class=\"form-check-label\">
               ";
                // line 59
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "
            </span>
         </label>
      </div>
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "components/form/flags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 59,  67 => 57,  63 => 56,  59 => 55,  53 => 52,  49 => 50,  46 => 49,  42 => 48,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/flags.html.twig", "/var/www/html/glpi/templates/components/form/flags.html.twig");
    }
}
