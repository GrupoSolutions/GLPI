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

/* components/itilobject/timeline/form_document_item.html.twig */
class __TwigTemplate_5a8b8b190d4f4c7e9d7f96f852bcca1c extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_document_item.html.twig", 35)->unwrap();
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_document_item.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 39
            echo "      <div class=\"row align-items-center m-n2\">
         ";
            // line 40
            $context["name"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "name", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_0 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)) : ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["filename"] ?? null) : null)));
            // line 41
            echo "         ";
            $context["filename"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "filename", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["filename"] ?? null) : null)))) ? ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["filename"] ?? null) : null)) : ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null)));
            // line 42
            echo "         ";
            $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 42);
            // line 43
            echo "
         ";
            // line 44
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["filename"] ?? null) : null)) {
                // line 45
                echo "            ";
                $context["docpath"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(((((("front/document.send.php?docid=" . (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null)) . "&") . ($context["fk"] ?? null)) . "=") . (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null)));
                // line 46
                echo "            <div class=\"col text-truncate\">
               <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, ($context["docpath"] ?? null), "html", null, true);
                echo "\" target=\"_blank\">
                  <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DocumentExtension']->getDocumentIcon(($context["filename"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, __("File extension"), "html", null, true);
                echo "\" />
                  ";
                // line 49
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "
               </a>
            </div>
         ";
            }
            // line 53
            echo "
         ";
            // line 54
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["link"] ?? null) : null)) {
                // line 55
                echo "            <div class=\"col-auto\">
               <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["link"] ?? null) : null), "html", null, true);
                echo "\" target=\"_blank\">
                  <i class=\"ti ti-external-link\"></i>
                  ";
                // line 58
                echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null), "html", null, true);
                echo "
               </a>
            </div>
         ";
            }
            // line 62
            echo "
         <div class=\"col-auto text-muted ms-2\">
            ";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DocumentExtension']->getDocumentSize((($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["filepath"] ?? null) : null)), "html", null, true);
            echo "
         </div>

         <div class=\"col-auto\">
            <div class=\"list-group-item-actions\">
               ";
            // line 69
            if ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_can_edit"] ?? null) : null)) {
                // line 70
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document", (($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null)), "html", null, true);
                echo "\"
                     class=\"btn btn-sm btn-ghost-secondary\" title=\"";
                // line 71
                echo twig_escape_filter($this->env, _x("button", "Edit"), "html", null, true);
                echo "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                     <i class=\"ti ti-edit\"></i>
                  </a>
               ";
            }
            // line 76
            echo "
               ";
            // line 77
            if ((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_can_delete"] ?? null) : null)) {
                // line 78
                echo "                  <form class=\"d-inline\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 78), "html", null, true);
                echo "\">
                     <input type=\"hidden\" name=\"";
                // line 79
                echo twig_escape_filter($this->env, ($context["fk"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), "html", null, true);
                echo "\">
                     <input type=\"hidden\" name=\"documents_id\" value=\"";
                // line 80
                echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null), "html", null, true);
                echo "\">
                     <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 81
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
                     <button type=\"submit\" class=\"btn btn-sm btn-ghost-secondary\" name=\"delete_document\"
                             title=\"";
                // line 83
                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                echo "\"
                             data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                     </button>
                  </form>
               ";
            }
            // line 89
            echo "            </div>
         </div>
      </div>
    ";
        } else {
            // line 93
            echo "        <div class=\"document_item\">
            <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
                action=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document"), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
                <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 96), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"is_recursive\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 97), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 98), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
                ";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

                ";
            // line 103
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["DocumentCategory", "documentcategories_id", null, __("Heading"), ["label_class" => "col-xxl-3", "field_class" => "col-xxl-11", "full_width" => true, "is_horizontal" => false]], 103, $context, $this->getSourceContext());
            // line 114
            echo "

                ";
            // line 116
            ob_start(function () { return ''; });
            // line 117
            echo "                    <div class=\"alert alert-info\">
                        ";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Document::getMaxUploadSize"), "html", null, true);
            echo "
                    </div>
                ";
            $context["max_size"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 121
            echo "
                ";
            // line 122
            echo twig_call_macro($macros["fields"], "macro_fileField", ["filename", null, __("File"), ["multiple" => true, "label_class" => "col-xxl-3", "field_class" => "col-xxl-11", "full_width" => true, "is_horizontal" => false, "add_field_html" =>             // line 132
($context["max_size"] ?? null)]], 122, $context, $this->getSourceContext());
            // line 134
            echo "

                ";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

                <div class=\"d-flex card-footer mx-n3 mb-n3\">
                    ";
            // line 139
            if (((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null) <= 0)) {
                // line 140
                echo "                        <div class=\"input-group\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                                <i class=\"ti ti-file-plus\"></i>
                                <span>";
                // line 143
                echo twig_escape_filter($this->env, _x("button", "Add a new file"), "html", null, true);
                echo "</span>
                            </button>
                        </div>
                    ";
            }
            // line 147
            echo "                </div>
            </form>
        </div>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_document_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 147,  255 => 143,  250 => 140,  248 => 139,  242 => 136,  238 => 134,  236 => 132,  235 => 122,  232 => 121,  226 => 118,  223 => 117,  221 => 116,  217 => 114,  215 => 103,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  190 => 96,  186 => 95,  182 => 93,  176 => 89,  167 => 83,  162 => 81,  158 => 80,  152 => 79,  147 => 78,  145 => 77,  142 => 76,  134 => 71,  129 => 70,  127 => 69,  119 => 64,  115 => 62,  108 => 58,  103 => 56,  100 => 55,  98 => 54,  95 => 53,  88 => 49,  82 => 48,  78 => 47,  75 => 46,  72 => 45,  70 => 44,  67 => 43,  64 => 42,  61 => 41,  59 => 40,  56 => 39,  53 => 38,  49 => 37,  44 => 34,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_document_item.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_document_item.html.twig");
    }
}
