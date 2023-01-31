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

/* components/itilobject/timeline/form_solution.html.twig */
class __TwigTemplate_5f94975aa5c008b9570d80c8fa389ebb117fff473720938653f665a5f88150f7 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_solution.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 42
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || (0 === twig_compare((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null), true)));
        // line 43
        $context["noform"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 43) || (0 === twig_compare((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["noform"] ?? null) : null), true)));
        // line 44
        $context["disabled"] = (0 === twig_compare(($context["candedit"] ?? null), false));
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_solution.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "   ";
        if ((0 === twig_compare(($context["form_mode"] ?? null), "view"))) {
            // line 48
            echo "      <div class=\"read-only-content\">
         ";
            // line 49
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 52
            echo "

         <div class=\"timeline-badges\">
            ";
            // line 55
            if ((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["solutiontypes_id"] ?? null) : null)) {
                // line 56
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-tag me-1\"></i>
                  ";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("SolutionType", (($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["solutiontypes_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 61
            echo "
            ";
            // line 62
            if (((0 !== twig_compare((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null), twig_constant("CommonITILValidation::WAITING"))) && (0 !== twig_compare((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["status"] ?? null) : null), twig_constant("CommonITILValidation::NONE"))))) {
                // line 63
                echo "               <span class=\"badge bg-blue-lt\">
                  ";
                // line 64
                $context["action"] = (((0 === twig_compare((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["status"] ?? null) : null), twig_constant("CommonITILValidation::ACCEPTED")))) ? (__("Accepted")) : (_x("validation", "Refused")));
                // line 65
                echo "                  ";
                echo twig_sprintf(__("%1\$s on %2\$s by %3\$s"),                 // line 66
($context["action"] ?? null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_8 =                 // line 67
($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_approval"] ?? null) : null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", (($__internal_compile_9 =                 // line 68
($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_approval"] ?? null) : null), ["enable_anonymization" => true]));
                // line 69
                echo "
               </span>
            ";
            }
            // line 72
            echo "         </div>
      </div>
   ";
        } else {
            // line 75
            echo "      <div class=\"itilsolution\">
         ";
            // line 76
            $context["validation_class"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 76);
            // line 77
            echo "         ";
            if ( !(null === ($context["validation_class"] ?? null))) {
                // line 78
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [0 => ($context["item"] ?? null), 1 => "solution"], "method", false, false, false, 78), "html", null, true);
                echo "
         ";
            }
            // line 80
            echo "
         ";
            // line 81
            if ( !($context["noform"] ?? null)) {
                // line 82
                echo "         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 83), "html", null, true);
                echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
         ";
            }
            // line 85
            echo "
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 86), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
            ";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            ";
            // line 91
            if ((1 === twig_compare($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket_Ticket::countOpenChildren", [0 => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null)]), 0))) {
                // line 92
                echo "               <div class=\"alert alert-important alert-warning\">
                  <i class=\"fas fa-2x fa-info me-2\"></i>
                  <span>";
                // line 94
                echo twig_escape_filter($this->env, __("Warning: non closed children tickets depends on current ticket. Are you sure you want to close it?"), "html", null, true);
                echo "</span>
               </div>
            ";
            }
            // line 97
            echo "
            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 100
            $context["content"] = (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null);
            // line 101
            echo "                  ";
            if ((1 === twig_compare(($context["kb_id_toload"] ?? null), 0))) {
                // line 102
                echo "                     ";
                $context["kb_item"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("KnowbaseItem", ($context["kb_id_toload"] ?? null));
                // line 103
                echo "                     ";
                $context["content"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 103), "answer", [], "array", true, true, false, 103) &&  !(null === (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 103)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["answer"] ?? null) : null)))) ? ((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 103)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["answer"] ?? null) : null)) : (""));
                // line 104
                echo "                  ";
            }
            // line 105
            echo "
                  ";
            // line 106
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content",             // line 108
($context["content"] ?? null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 116
($context["rand"] ?? null), "disabled" =>             // line 117
($context["disabled"] ?? null)]], 106, $context, $this->getSourceContext());
            // line 119
            echo "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                  <div class=\"row\">
                     ";
            // line 123
            if (($context["candedit"] ?? null)) {
                // line 124
                echo "                        ";
                if (($context["can_read_kb"] ?? null)) {
                    // line 125
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 126
                    echo "                              <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((("/front/knowbaseitem.php?item_itemtype=" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 126)) . "&item_items_id=") . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 126)) . "&forcetab=Knowbase\$1")), "html", null, true);
                    echo "\"
                                 class=\"btn btn-secondary overflow-hidden text-nowrap\" type=\"submit\"
                                 title=\"";
                    // line 128
                    echo twig_escape_filter($this->env, __("Search a solution"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                 <i class=\"fas fa-search\"></i>
                              </a>
                           ";
                    $context["search_solution_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 133
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_field", ["",                     // line 135
($context["search_solution_button"] ?? null), "", ["full_width" => true, "icon_label" => true]], 133, $context, $this->getSourceContext());
                    // line 141
                    echo "
                        ";
                }
                // line 143
                echo "
                        ";
                // line 144
                ob_start(function () { return ''; });
                // line 145
                echo "                           <i class=\"fas fa-reply fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 146
                echo twig_escape_filter($this->env, _n("Solution template", "Solution templates", Session::getPluralNumber()), "html", null, true);
                echo "\"></i>
                        ";
                $context["sol_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 148
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SolutionTemplate", "solutiontemplates_id", 0,                 // line 152
($context["sol_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("solutiontemplate_update" .                 // line 156
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 157
($context["rand"] ?? null), "disabled" =>                 // line 158
($context["disabled"] ?? null)]], 148, $context, $this->getSourceContext());
                // line 160
                echo "

                     ";
            }
            // line 163
            echo "
                     ";
            // line 164
            ob_start(function () { return ''; });
            // line 165
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SolutionType"), "html", null, true);
            echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
            $context["sol_type_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 168
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SolutionType", "solutiontypes_id", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,             // line 171
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["solutiontypes_id"] ?? null) : null),             // line 172
($context["sol_type_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 176
($context["rand"] ?? null), "disabled" =>             // line 177
($context["disabled"] ?? null)]], 168, $context, $this->getSourceContext());
            // line 179
            echo "

                     ";
            // line 181
            if ((($context["can_read_kb"] ?? null) && (1 === twig_compare(($context["kb_id_toload"] ?? null), 0)))) {
                // line 182
                echo "                        ";
                ob_start(function () { return ''; });
                // line 183
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 184
                echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 186
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id",                 // line 188
($context["kb_id_toload"] ?? null),                 // line 189
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 193
($context["rand"] ?? null)]], 186, $context, $this->getSourceContext());
                // line 195
                echo "
                     ";
            }
            // line 197
            echo "
                     ";
            // line 198
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 199
                echo "                        ";
                ob_start(function () { return ''; });
                // line 200
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["sol_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 203
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_sol_to_kb", 0,                 // line 206
($context["sol_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 210
($context["rand"] ?? null)]], 203, $context, $this->getSourceContext());
                // line 212
                echo "
                     ";
            }
            // line 214
            echo "                  </div>
               </div>
            </div>

         ";
            // line 218
            if ( !($context["noform"] ?? null)) {
                // line 219
                echo "               ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                echo "
               <div class=\"d-flex card-footer mx-n3 mb-n3\">
                  ";
                // line 221
                if ((0 >= twig_compare((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 221)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), 0))) {
                    // line 222
                    echo "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                    // line 224
                    echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                } else {
                    // line 227
                    echo "                     <input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 227)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null), "html", null, true);
                    echo "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                        <i class=\"far fa-save\"></i>
                        <span>";
                    // line 230
                    echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 233
                echo "               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 235
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
            </form>
         ";
            }
            // line 238
            echo "      </div>

      <script type=\"text/javascript\">
         function solutiontemplate_update";
            // line 241
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/solution.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  solutiontemplates_id: value,
                  items_id: '";
            // line 247
            echo twig_escape_filter($this->env, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 247)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 248), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 252
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }

               // set type
               var solutiontypes_id = isNaN(parseInt(data.solutiontypes_id))
                  ? 0
                  : parseInt(data.solutiontypes_id);
               \$(\"#dropdown_solutiontypes_id";
            // line 260
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", solutiontypes_id);
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_solution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 260,  409 => 252,  402 => 248,  398 => 247,  391 => 243,  386 => 241,  381 => 238,  375 => 235,  371 => 233,  365 => 230,  358 => 227,  352 => 224,  348 => 222,  346 => 221,  340 => 219,  338 => 218,  332 => 214,  328 => 212,  326 => 210,  325 => 206,  323 => 203,  316 => 200,  313 => 199,  311 => 198,  308 => 197,  304 => 195,  302 => 193,  301 => 189,  300 => 188,  298 => 186,  293 => 184,  290 => 183,  287 => 182,  285 => 181,  281 => 179,  279 => 177,  278 => 176,  277 => 172,  276 => 171,  274 => 168,  267 => 165,  265 => 164,  262 => 163,  257 => 160,  255 => 158,  254 => 157,  253 => 156,  252 => 152,  250 => 148,  245 => 146,  242 => 145,  240 => 144,  237 => 143,  233 => 141,  231 => 135,  229 => 133,  221 => 128,  215 => 126,  212 => 125,  209 => 124,  207 => 123,  201 => 119,  199 => 117,  198 => 116,  197 => 108,  196 => 106,  193 => 105,  190 => 104,  187 => 103,  184 => 102,  181 => 101,  179 => 100,  174 => 97,  168 => 94,  164 => 92,  162 => 91,  157 => 89,  152 => 87,  148 => 86,  145 => 85,  140 => 83,  137 => 82,  135 => 81,  132 => 80,  126 => 78,  123 => 77,  121 => 76,  118 => 75,  113 => 72,  108 => 69,  106 => 68,  105 => 67,  104 => 66,  102 => 65,  100 => 64,  97 => 63,  95 => 62,  92 => 61,  86 => 58,  82 => 56,  80 => 55,  75 => 52,  73 => 49,  70 => 48,  67 => 47,  63 => 46,  58 => 34,  56 => 44,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_solution.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\timeline\\form_solution.html.twig");
    }
}
