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
class __TwigTemplate_8185bf3a67943545c75e964b54e42f1e12c3bc9e384f17ccc6fd0e8129e655cf extends Template
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
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || (0 === twig_compare((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null), true)));
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
        if ((0 === twig_compare(($context["form_mode"] ?? null), "view"))) {
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
            <div class=\"row mx-n3 mx-xxl-auto\">
               ";
            // line 95
            $context["col_md"] = (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central"))) ? ("col-xl-7 col-xxl-8") : ("col-xxl-12"));
            // line 96
            echo "               <div class=\"col-12 ";
            echo twig_escape_filter($this->env, ($context["col_md"] ?? null), "html", null, true);
            echo "\">
                  ";
            // line 97
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 99
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 107
($context["rand"] ?? null), "required" =>             // line 108
($context["add_reopen"] ?? null)]], 97, $context, $this->getSourceContext());
            // line 110
            echo "
               </div>
               ";
            // line 112
            if ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central"))) {
                // line 113
                echo "                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                     <div class=\"row\">

                        ";
                // line 116
                ob_start(function () { return ''; });
                // line 117
                echo "                           <i class=\"fas fa-reply fa-fw me-1\"
                              title=\"";
                // line 118
                echo twig_escape_filter($this->env, _n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 120
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILFollowupTemplate", "itilfollowuptemplates_id", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,                 // line 123
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 123)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["itilfollowuptemplates_id"] ?? null) : null),                 // line 124
($context["fup_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 128
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 129
($context["rand"] ?? null)]], 120, $context, $this->getSourceContext());
                // line 131
                echo "

                        ";
                // line 133
                ob_start(function () { return ''; });
                // line 134
                echo "                           <i class=\"fas fa-inbox fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Source of followup"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_source_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 136
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,                 // line 139
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["requesttypes_id"] ?? null) : null),                 // line 140
($context["fup_source_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "condition" => ["is_active" => 1, "is_itilfollowup" => 1], "rand" =>                 // line 148
($context["rand"] ?? null)]], 136, $context, $this->getSourceContext());
                // line 150
                echo "

                        ";
                // line 152
                ob_start(function () { return ''; });
                // line 153
                echo "                           <i class=\"ti ti-lock fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Private"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 155
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                 // line 157
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["is_private"] ?? null) : null),                 // line 158
($context["fup_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 162
($context["rand"] ?? null)]], 155, $context, $this->getSourceContext());
                // line 164
                echo "

                        ";
                // line 166
                if ((($context["can_read_kb"] ?? null) && (1 === twig_compare(($context["kb_id_toload"] ?? null), 0)))) {
                    // line 167
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 168
                    echo "                              <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                 title=\"";
                    // line 169
                    echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                    echo "\"></i>
                           ";
                    $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 171
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id",                     // line 173
($context["kb_id_toload"] ?? null),                     // line 174
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 178
($context["rand"] ?? null)]], 171, $context, $this->getSourceContext());
                    // line 180
                    echo "
                        ";
                }
                // line 182
                echo "
                        ";
                // line 183
                if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                    // line 184
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 185
                    echo "                              <i class=\"far fa-save fa-fw me-1\" title=\"";
                    echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 188
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["_fup_to_kb", 0,                     // line 191
($context["fup_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 195
($context["rand"] ?? null)]], 188, $context, $this->getSourceContext());
                    // line 197
                    echo "
                        ";
                }
                // line 199
                echo "                     </div>
                  </div>
               ";
            }
            // line 202
            echo "            </div>

            ";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 206
            if ((0 >= twig_compare((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 206)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null), 0))) {
                // line 207
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 210
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     ";
                // line 212
                if ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central"))) {
                    // line 213
                    echo "                        <span class=\"input-group-text bg-yellow-lt py-0 pe-0\" id=\"pending-reasons-control-";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                           <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 214
                    echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                              <i class=\"fas fa-pause me-2\"></i>
                              <label class=\"form-check form-switch pt-2\">
                                 <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                                 <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                       id=\"enable-pending-reasons-";
                    // line 220
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\"
                                       role=\"button\"
                                       data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 222
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\" />
                              </label>
                           </span>

                           <div class=\"collapse ps-2 py-1 flex-fill\" id=\"pending-reasons-setup-";
                    // line 226
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                              ";
                    // line 227
                    echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                    echo "
                           </div>
                        </span>
                     ";
                }
                // line 231
                echo "                  </div>
               ";
            } else {
                // line 233
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 233)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 236
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 239
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 239)) {
                    // line 240
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 241
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 243
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 246
                echo "               ";
            }
            // line 247
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 254
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/itilfollowup.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 260
            echo twig_escape_filter($this->env, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 260)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 261), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 269
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }
               // set category
               \$(\"#dropdown_requesttypes_id";
            // line 273
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", requesttypes_id);
               // set is_private
               \$(\"#is_private_";
            // line 275
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
        return array (  452 => 275,  447 => 273,  440 => 269,  429 => 261,  425 => 260,  418 => 256,  413 => 254,  405 => 249,  401 => 247,  398 => 246,  392 => 243,  387 => 241,  384 => 240,  382 => 239,  376 => 236,  369 => 233,  365 => 231,  358 => 227,  354 => 226,  347 => 222,  342 => 220,  333 => 214,  328 => 213,  326 => 212,  321 => 210,  316 => 207,  314 => 206,  309 => 204,  305 => 202,  300 => 199,  296 => 197,  294 => 195,  293 => 191,  291 => 188,  284 => 185,  281 => 184,  279 => 183,  276 => 182,  272 => 180,  270 => 178,  269 => 174,  268 => 173,  266 => 171,  261 => 169,  258 => 168,  255 => 167,  253 => 166,  249 => 164,  247 => 162,  246 => 158,  245 => 157,  243 => 155,  237 => 153,  235 => 152,  231 => 150,  229 => 148,  228 => 140,  227 => 139,  225 => 136,  219 => 134,  217 => 133,  213 => 131,  211 => 129,  210 => 128,  209 => 124,  208 => 123,  206 => 120,  201 => 118,  198 => 117,  196 => 116,  191 => 113,  189 => 112,  185 => 110,  183 => 108,  182 => 107,  181 => 99,  180 => 97,  175 => 96,  173 => 95,  169 => 93,  165 => 91,  162 => 90,  160 => 89,  155 => 87,  151 => 86,  147 => 85,  143 => 84,  139 => 82,  132 => 78,  129 => 77,  122 => 74,  116 => 71,  113 => 70,  111 => 69,  107 => 67,  105 => 66,  102 => 65,  95 => 62,  89 => 59,  86 => 58,  84 => 57,  80 => 55,  78 => 54,  73 => 51,  71 => 48,  68 => 47,  65 => 46,  61 => 45,  56 => 34,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_followup.html.twig");
    }
}
