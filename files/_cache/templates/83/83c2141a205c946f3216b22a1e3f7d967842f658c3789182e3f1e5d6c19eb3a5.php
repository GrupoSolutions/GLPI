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

/* components/itilobject/timeline/form_validation.html.twig */
class __TwigTemplate_3c4a95e7dc7004da0b09ae891f778731d25d7b54892f8c11a7641bb8da8eec6a extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_validation.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]));
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_validation.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "   ";
        if ((0 === twig_compare(($context["form_mode"] ?? null), "view"))) {
            // line 41
            echo "      <div class=\"read-only-content w-100\">
         ";
            // line 42
            echo (($__internal_compile_0 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["content"] ?? null) : null);
            echo "

         ";
            // line 44
            if (twig_length_filter($this->env, (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["comment_submission"] ?? null) : null))) {
                // line 45
                echo "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div>
                        ";
                // line 49
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["comment_submission"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 52
                echo "
                    </div>
                </div>
            </div>
         ";
            }
            // line 57
            echo "         ";
            if (twig_length_filter($this->env, (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["comment_validation"] ?? null) : null))) {
                // line 58
                echo "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div>
                        ";
                // line 62
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment_validation"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 65
                echo "
                    </div>
                </div>
            </div>
         ";
            }
            // line 70
            echo "
         ";
            // line 71
            if ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["can_answer"] ?? null) : null)) {
                // line 72
                echo "            <hr class=\"my-2\" />
            <form id=\"validationanswers_id_";
                // line 73
                echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
                echo "\"
                  action=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath((($__internal_compile_7 = ($context["entry"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null)), "html", null, true);
                echo "\" method=\"post\" data-submit-once>

               <input type=\"hidden\" name=\"id\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"users_id_validate\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_validate"] ?? null) : null), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
               ";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                echo "

               <div class=\"mb-3 comment-part\">
                  ";
                // line 82
                echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_validation", "", _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>                 // line 92
($context["rand"] ?? null)]], 82, $context, $this->getSourceContext());
                // line 94
                echo "
               </div>

               <div class=\"validation-footer\">
                  <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
                     <i class=\"fas fa-thumbs-up\"></i>
                     <span class=\"validation-label\">";
                // line 100
                echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
                echo "</span>
                  </button>
                  <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
                     <i class=\"fas fa-thumbs-down\"></i>
                     <span class=\"validation-label\">";
                // line 104
                echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
                echo "</span>
                  </button>
               </div>
            </form>
         ";
            }
            // line 109
            echo "      </div>
   ";
        } elseif ((0 === twig_compare(        // line 110
($context["form_mode"] ?? null), "answer"))) {
            // line 111
            echo "      <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
            action=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 112), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>

         <input type=\"hidden\" name=\"id\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 114)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
            echo "\" />
         <input type=\"hidden\" name=\"users_id_validate\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["users_id_validate"] ?? null) : null), "html", null, true);
            echo "\" />
         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />

         ";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

         <div class=\"mb-3 comment-part\">
            ";
            // line 121
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_validation", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 123
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 123)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["comment_validation"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 131
($context["rand"] ?? null)]], 121, $context, $this->getSourceContext());
            // line 133
            echo "
         </div>

         <div class=\"validation-footer\">
            <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
               <i class=\"fas fa-thumbs-up\"></i>
               <span class=\"validation-label\">";
            // line 139
            echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
            echo "</span>
            </button>
            <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
               <i class=\"fas fa-thumbs-down\"></i>
               <span class=\"validation-label\">";
            // line 143
            echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
            echo "</span>
            </button>
         </div>
      </form>
   ";
        } else {
            // line 148
            echo "      <div class=\"itilvalidation card mt-4\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 150), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 151), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 152), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 152)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null), "html", null, true);
            echo "\" />

            <div class=\"card-header\">
                <h3 class=\"cart-title\">";
            // line 155
            echo twig_escape_filter($this->env, __("Validation request"), "html", null, true);
            echo "</h3>
            </div>
            <div class=\"card-body\">
                ";
            // line 158
            echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["approval_requester", twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser(), "getFriendlyName", [], "method", false, false, false, 160), _n("Requester", "Requesters", 1), ["full_width" => true, "rand" =>             // line 164
($context["rand"] ?? null)]], 158, $context, $this->getSourceContext());
            // line 166
            echo "

                ";
            // line 168
            if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 168)) {
                // line 169
                echo "                    ";
                echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["validatortype", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 169)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["validatortype"] ?? null) : null), ["User" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "Group" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group")], __("Approver"), ["display_emptychoice" => true, "rand" =>                 // line 174
($context["rand"] ?? null), "field_class" => "col-12", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8 flex-wrap", "add_field_html" => (("<span id=\"show_validator_field" .                 // line 178
($context["rand"] ?? null)) . "\" class=\"flex-grow-1\">&nbsp;</span>")]], 169, $context, $this->getSourceContext());
                // line 179
                echo "
                    ";
                // line 180
                if ( !(null === (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["validatortype"] ?? null) : null))) {
                    // line 181
                    echo "                    <script type=\"application/javascript\">
                        \$('#show_validator_field";
                    // line 182
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "').load(CFG_GLPI.root_doc + '/ajax/dropdownValidator.php', {
                            id: ";
                    // line 183
                    echo twig_escape_filter($this->env, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), "html", null, true);
                    echo ",
                            entity: ";
                    // line 184
                    echo twig_escape_filter($this->env, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 184)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null), "html", null, true);
                    echo ",
                            right: \"";
                    // line 185
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 185) === "Ticket") && (0 === twig_compare((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 185)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["type"] ?? null) : null), 2)))) ? ("validate_request") : ("validate_incident"));
                    echo "\",
                            validatortype: \"";
                    // line 186
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 186), "users_id_validate", [], "array", false, true, false, 186), "groups_id", [], "array", true, true, false, 186)) ? ("Group") : ((( !twig_test_empty((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 186)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["users_id_validate"] ?? null) : null))) ? ("User") : (""))));
                    echo "\"
                        });
                    </script>
                    ";
                } else {
                    // line 190
                    echo "                    <script type=\"application/javascript\">
                        updateItemOnSelectEvent(\"dropdown_validatortype";
                    // line 191
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\", '#show_validator_field";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "',
                            CFG_GLPI.root_doc + '/ajax/dropdownValidator.php', {
                                id: 0,
                                entity: ";
                    // line 194
                    echo twig_escape_filter($this->env, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null), "html", null, true);
                    echo ",
                                right: \"";
                    // line 195
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 195) === "Ticket") && (0 === twig_compare((($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 195)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["type"] ?? null) : null), 2)))) ? ("validate_request") : ("validate_incident"));
                    echo "\",
                                validatortype: '__VALUE__',
                                groups_id: 0
                            });
                    </script>
                    ";
                }
                // line 201
                echo "                ";
            } else {
                // line 202
                echo "                    ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_validate", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,                 // line 205
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 205)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["users_id_validate"] ?? null) : null), __("Approver"), ["disabled" => true, "full_width" => true]], 202, $context, $this->getSourceContext());
                // line 211
                echo "
                ";
            }
            // line 213
            echo "
                ";
            // line 214
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_submission", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 216
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 216)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["comment_submission"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 223
($context["rand"] ?? null)]], 214, $context, $this->getSourceContext());
            // line 225
            echo "
            </div>

            ";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            <div class=\"d-flex justify-content-center card-footer\">
               ";
            // line 231
            if ((0 >= twig_compare((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 231)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["id"] ?? null) : null), 0))) {
                // line 232
                echo "                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                     <i class=\"fas fa-plus\"></i>
                     <span>";
                // line 234
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                  </button>
               ";
            } else {
                // line 237
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 237)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 240
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 243
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 243)) {
                    // line 244
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 245
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 247
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 250
                echo "               ";
            }
            // line 251
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 253
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
        window.scrollTo(0,document.body.scrollHeight);
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 253,  389 => 251,  386 => 250,  380 => 247,  375 => 245,  372 => 244,  370 => 243,  364 => 240,  357 => 237,  351 => 234,  347 => 232,  345 => 231,  339 => 228,  334 => 225,  332 => 223,  331 => 216,  330 => 214,  327 => 213,  323 => 211,  321 => 205,  319 => 202,  316 => 201,  307 => 195,  303 => 194,  295 => 191,  292 => 190,  285 => 186,  281 => 185,  277 => 184,  273 => 183,  269 => 182,  266 => 181,  264 => 180,  261 => 179,  259 => 178,  258 => 174,  256 => 169,  254 => 168,  250 => 166,  248 => 164,  247 => 158,  241 => 155,  233 => 152,  229 => 151,  225 => 150,  221 => 148,  213 => 143,  206 => 139,  198 => 133,  196 => 131,  195 => 123,  194 => 121,  188 => 118,  183 => 116,  179 => 115,  175 => 114,  170 => 112,  167 => 111,  165 => 110,  162 => 109,  154 => 104,  147 => 100,  139 => 94,  137 => 92,  136 => 82,  130 => 79,  126 => 78,  122 => 77,  118 => 76,  113 => 74,  109 => 73,  106 => 72,  104 => 71,  101 => 70,  94 => 65,  92 => 62,  86 => 58,  83 => 57,  76 => 52,  74 => 49,  68 => 45,  66 => 44,  61 => 42,  58 => 41,  55 => 40,  51 => 39,  46 => 34,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_validation.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\timeline\\form_validation.html.twig");
    }
}
