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

/* components/logs.html.twig */
class __TwigTemplate_2d16baa529ae6b9fb5e33a496411109367fc652fe7ab1ec0c914a1043d61048d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/logs.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        if ((-1 === twig_compare(($context["total_number"] ?? null), 1))) {
            // line 37
            echo "   <div class=\"alert alert-info\">
      ";
            // line 38
            echo twig_escape_filter($this->env, __("No historical"), "html", null, true);
            echo "
   </div>
";
        } else {
            // line 41
            echo "
   ";
            // line 42
            echo twig_include($this->env, $context, "components/pager.html.twig", ["count" => ($context["filtered_number"] ?? null)]);
            echo "
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
         ";
            // line 47
            $context["insumo"] = "text";
            // line 48
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 49
                echo "            ";
                if ((0 === twig_compare((($__internal_compile_0 = $context["entry"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field"] ?? null) : null), "Insumo"))) {
                    // line 50
                    echo "               ";
                    $context["insumo"] = "true";
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "         ";
            if ((0 === twig_compare(($context["insumo"] ?? null), "true"))) {
                // line 54
                echo "            <th> * </th>
            <th>";
                // line 55
                echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
                echo "</th>
            <th>";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
                echo "</th>
            <th>Quantidade</th>
            <th>";
                // line 58
                echo twig_escape_filter($this->env, _x("name", "Update"), "html", null, true);
                echo "</th>
         ";
            } else {
                // line 60
                echo "
            <th>";
                // line 61
                echo twig_escape_filter($this->env, __("ID"), "html", null, true);
                echo "</th>
            <th>";
                // line 62
                echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
                echo "</th>
            <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
                echo "</th>
            <th>";
                // line 64
                echo twig_escape_filter($this->env, _n("Field", "Fields", 1), "html", null, true);
                echo "</th>
            <th>";
                // line 65
                echo twig_escape_filter($this->env, _x("name", "Update"), "html", null, true);
                echo "</th>
         ";
            }
            // line 67
            echo "       
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_log_filters ";
            // line 70
            echo (((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) ? ("btn-secondary active") : ("btn-outline-secondary"));
            echo "\">
                     <i class=\"fas fa-filter\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 72
            echo twig_escape_filter($this->env, __("Filter"), "html", null, true);
            echo "</span>
                  </button>
                  <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, ($context["csv_url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-sm text-capitalize btn-icon btn-outline-secondary\">
                     <i class=\"fas fa-file-download\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 76
            echo twig_escape_filter($this->env, __("Export"), "html", null, true);
            echo "</span>
                  </a>
               </span>
            </th>
         </tr>

         ";
            // line 82
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
                // line 83
                echo "         <tr class=\"log_history_filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 86
                echo twig_escape_filter($this->env, ($context["items_id"] ?? null), "html", null, true);
                echo "\" />
            </td>
            <td>
               ";
                // line 89
                echo twig_call_macro($macros["fields"], "macro_dateField", ["filters[date]", (($__internal_compile_1 =                 // line 91
($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["date"] ?? null) : null), "", ["no_label" => true, "full_width" => true, "mb" => ""]], 89, $context, $this->getSourceContext());
                // line 98
                echo "
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-mulitple\" multiple>
                  ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["user_names"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["username"]) {
                    // line 103
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["value"]), "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "users_names", [], "array", true, true, false, 103) && twig_in_filter($context["value"], (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["users_names"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["username"]), "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['username'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-mulitple\" multiple>
                  ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["affected_fields"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["field"]) {
                    // line 112
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "affected_fields", [], "array", true, true, false, 112) && twig_in_filter($context["value"], (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["affected_fields"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 113
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-mulitple\" multiple>
                  ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["linked_actions"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["action"]) {
                    // line 121
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "linked_actions", [], "array", true, true, false, 121) && twig_in_filter($context["value"], (($__internal_compile_4 = ($context["filters"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["linked_actions"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 122
                    echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "               </select>
            </td>
         </tr>
         ";
            }
            // line 129
            echo "
      </thead>
      <tbody>
      ";
            // line 132
            if ((-1 === twig_compare(($context["filtered_number"] ?? null), 1))) {
                // line 133
                echo "         <tr><td colspan=\"6\">";
                echo twig_escape_filter($this->env, __("No historical matching your filters"), "html", null, true);
                echo "</td></tr>
      ";
            } else {
                // line 135
                echo "         
         ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 137
                    echo "            
            ";
                    // line 138
                    if ((0 === twig_compare((($__internal_compile_5 = $context["entry"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["field"] ?? null) : null), "Insumo"))) {
                        // line 139
                        echo "               ";
                        $context["insumo"] = "true";
                        // line 140
                        echo "            ";
                    } else {
                        // line 141
                        echo "            <br>
            <tr>
               <td> * </td>
               <td>";
                        // line 144
                        echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["entry"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date_mod"] ?? null) : null), "html", null, true);
                        echo "</td>
               <td>";
                        // line 145
                        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = $context["entry"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["user_name"] ?? null) : null)), "html", null, true);
                        echo "</td>
               <td>";
                        // line 146
                        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_8 = $context["entry"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["field"] ?? null) : null)), "html", null, true);
                        echo "</td>
               <td colspan=\"2\" style=\"width: 60%\">";
                        // line 147
                        echo (($__internal_compile_9 = $context["entry"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["change"] ?? null) : null);
                        echo "</td>
            </tr>
            ";
                    }
                    // line 150
                    echo "         
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "         ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reqs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 153
                    echo "            ";
                    if ((0 === twig_compare(($context["insumo"] ?? null), "true"))) {
                        // line 154
                        echo "               <tr>
                  <td> * </td>
                  <td> ";
                        // line 156
                        echo twig_escape_filter($this->env, (($__internal_compile_10 = $context["s"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_mod"] ?? null) : null), "html", null, true);
                        echo " </td>
                  <td> ";
                        // line 157
                        echo twig_escape_filter($this->env, (($__internal_compile_11 = $context["s"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["user"] ?? null) : null), "html", null, true);
                        echo " </td>
                  <td> ";
                        // line 158
                        echo twig_escape_filter($this->env, (($__internal_compile_12 = $context["s"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["items_id"] ?? null) : null), "html", null, true);
                        echo " </td>
                  <td colspan=\"2\" style=\"width: 60%\">Adcionou insumos</td>
               </tr>
            ";
                    }
                    // line 162
                    echo "         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "      ";
            }
            // line 164
            echo "      </tbody>
   </table>
   </div>";
            // line 167
            echo "
   ";
            // line 168
            $context["limitdropdown"] = twig_include($this->env, $context, "components/dropdown/limit.html.twig");
            // line 169
            echo "   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2\">
      ";
            // line 170
            echo twig_sprintf(__("Show %s entries"), ($context["limitdropdown"] ?? null));
            echo "
   </div>
";
        }
        // line 173
        echo "


<script type=\"text/javascript\">
\$(function() {
   \$('.logs-filter-select-mulitple').select2();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 173,  371 => 170,  368 => 169,  366 => 168,  363 => 167,  359 => 164,  356 => 163,  350 => 162,  343 => 158,  339 => 157,  335 => 156,  331 => 154,  328 => 153,  323 => 152,  316 => 150,  310 => 147,  306 => 146,  302 => 145,  298 => 144,  293 => 141,  290 => 140,  287 => 139,  285 => 138,  282 => 137,  278 => 136,  275 => 135,  269 => 133,  267 => 132,  262 => 129,  256 => 125,  247 => 122,  240 => 121,  236 => 120,  230 => 116,  221 => 113,  214 => 112,  210 => 111,  204 => 107,  195 => 104,  188 => 103,  184 => 102,  178 => 98,  176 => 91,  175 => 89,  169 => 86,  164 => 83,  162 => 82,  153 => 76,  148 => 74,  143 => 72,  138 => 70,  133 => 67,  128 => 65,  124 => 64,  120 => 63,  116 => 62,  112 => 61,  109 => 60,  104 => 58,  99 => 56,  95 => 55,  92 => 54,  89 => 53,  83 => 52,  80 => 51,  77 => 50,  74 => 49,  69 => 48,  67 => 47,  59 => 42,  56 => 41,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/logs.html.twig", "/var/www/html/glpi/templates/components/logs.html.twig");
    }
}
