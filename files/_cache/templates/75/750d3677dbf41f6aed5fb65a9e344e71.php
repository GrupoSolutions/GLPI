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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_029debb6f5b973639d8b295cac72edd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_followup.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 42
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 43
        $context["rand"] = twig_random($this->env);
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_followup.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 47
            echo "      <div class=\"read-only-content\">
         ";
            // line 48
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 51
            echo "

         <div class=\"timeline-badges\">
            ";
            // line 54
            if ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["sourceitems_id"] ?? null) : null)) {
                // line 55
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 57
                ob_start(function () { return ''; });
                // line 58
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 59
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 62
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 65
            echo "
            ";
            // line 66
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["sourceof_items_id"] ?? null) : null)) {
                // line 67
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 69
                ob_start(function () { return ''; });
                // line 70
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 71
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 77
            echo "
            ";
            // line 78
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>
   ";
        } else {
            // line 82
            echo "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 84), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 85), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            ";
            // line 89
            $context["add_reopen"] = ((((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 89) &&  !(null === (($__internal_compile_7 = ($context["_get"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["_get"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_openfollowup"] ?? null) : null)) : (false)) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "needReopen", [], "method", false, false, false, 89));
            // line 90
            echo "            ";
            if (($context["add_reopen"] ?? null)) {
                // line 91
                echo "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 93
            echo "
            <div class=\"row\">
               <div class=\"col-12 ";
            // line 95
            echo twig_escape_filter($this->env, ($context["col_md"] ?? null), "html", null, true);
            echo "\">
                  ";
            // line 96
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 98
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 106
($context["rand"] ?? null), "required" =>             // line 107
($context["add_reopen"] ?? null)]], 96, $context, $this->getSourceContext());
            // line 109
            echo "
               </div>
                           </div>

            ";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 115
            if (((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null) <= 0)) {
                // line 116
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fa-fw ti ti-message-circle\"></i>
                        <span>Responder</span>
                     </button>
                                       </div>
               ";
            } else {
                // line 123
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 123)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>

                  </button>

                  ";
                // line 129
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 129)) {
                    // line 130
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 131
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 133
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 136
                echo "               ";
            }
            // line 137
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 144
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/itilfollowup.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 150
            echo twig_escape_filter($this->env, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 151), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 159
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }
               // set category
               \$(\"#dropdown_requesttypes_id";
            // line 163
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", requesttypes_id);
               // set is_private
               \$(\"#is_private_";
            // line 165
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                  .prop(\"checked\", data.is_private == \"0\"
                     ? false
                     : true);
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_followup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 165,  279 => 163,  272 => 159,  261 => 151,  257 => 150,  250 => 146,  245 => 144,  237 => 139,  233 => 137,  230 => 136,  224 => 133,  219 => 131,  216 => 130,  214 => 129,  204 => 123,  195 => 116,  193 => 115,  188 => 113,  182 => 109,  180 => 107,  179 => 106,  178 => 98,  177 => 96,  173 => 95,  169 => 93,  165 => 91,  162 => 90,  160 => 89,  155 => 87,  151 => 86,  147 => 85,  143 => 84,  139 => 82,  132 => 78,  129 => 77,  122 => 74,  116 => 71,  113 => 70,  111 => 69,  107 => 67,  105 => 66,  102 => 65,  95 => 62,  89 => 59,  86 => 58,  84 => 57,  80 => 55,  78 => 54,  73 => 51,  71 => 48,  68 => 47,  65 => 46,  61 => 45,  56 => 34,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_followup.html.twig");
    }
}
