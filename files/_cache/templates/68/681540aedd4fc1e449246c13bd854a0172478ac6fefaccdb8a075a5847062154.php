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

/* components/form/header.html.twig */
class __TwigTemplate_79186593982192a0f5800eae3940eb24025f2602178dbcb331d8b3fe018db28f extends Template
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
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 34)));
        // line 35
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["canedit"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["canedit"] ?? null) : null)) : (true));
        // line 36
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["withtemplate"] ?? null) : null)) : (""));
        // line 37
        $context["rand"] = twig_random($this->env);
        // line 38
        $context["nametype"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["formtitle"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["formtitle"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 38)));
        // line 39
        $context["friendlyname"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["friendlyname"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["friendlyname"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 39)));
        // line 40
        $context["no_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["noid"] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["noid"] ?? null) : null)) : (false));
        // line 41
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41), "id", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)))) ? ((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null)) : ( -1));
        // line 42
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["formoptions"] ?? null) : null)))) ? ((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["formoptions"] ?? null) : null)) : (""));
        // line 43
        $context["currentPath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", [0 => "_route_params"], "method", false, false, false, 43);
        // line 44
        $context["entity_id"] = 0;
        // line 45
        $context["entity_name"] = "";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 46)) {
            // line 47
            echo "   ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47), "Entity")) && (0 === twig_compare((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), 0)))) {
                // line 48
                echo "      ";
                $context["entity_id"] = null;
                // line 49
                echo "   ";
            } else {
                // line 50
                echo "      ";
                $context["entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null)))) ? ((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)))) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 51
                echo "   ";
            }
            // line 52
            echo "
   ";
            // line 53
            if (Session::isMultiEntitiesMode()) {
                // line 54
                echo "      ";
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 54));
                // line 55
                echo "   ";
            }
        }
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [0 => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null)], "method", false, false, false, 57)) {
            // line 58
            echo "<form name=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" id=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" method=\"post\"
      action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            echo "\" data-submit-once>
   <div id=\"massive_container_";
            // line 60
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
</form>

";
            // line 64
            if (((((((0 === twig_compare(($context["nametype"] ?? null), "Computador")) || (0 === twig_compare(($context["nametype"] ?? null), "Monitor"))) || (0 === twig_compare(($context["nametype"] ?? null), "Impressora"))) || (0 === twig_compare(($context["nametype"] ?? null), "Telefone"))) || (0 === twig_compare(($context["nametype"] ?? null), "Dispositivo"))) || (0 === twig_compare(($context["nametype"] ?? null), "Dispositivo de rede")))) {
                // line 65
                echo "   ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "   <form method='post' name='useditemsexport_form\$rand' id='useditemsexport_form\$rand' action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/marketplace/useditemsexport/inc/termounit.php"), "html", null, true);
                    echo "\">
      <table class='' style=\"margin:0px 40px\">
      <tr class=''><td colspan='1'>
         <td style='padding:0px 15px'><p> Termo de devolução
            <input type='submit' name='generate' value=\"Gerar\" class='submit'>
            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 71
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" />
            <input type=\"hidden\" name=\"tipo\" value=\"";
                    // line 72
                    echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                    echo "\"/>
            </td>
         </td>
         <td style='padding:0px 240px'>
            <td colspan='6'><p> Termo de Manutenção
            <input type='submit' name='manutencao' value=\"Gerar\" class='submit'>
            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 78
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" />
            <input type=\"hidden\" name=\"acao\" value=\"manutencao\"/>
         </td>
      </tr>
   </table>
   </form>
   ";
                }
                // line 85
                echo "   
";
            }
            // line 87
            echo "

<form name=\"asset_form\" method=\"post\" action=\"";
            // line 89
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo ($context["formoptions"] ?? null);
            echo " enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["entity_id"] ?? null), "html", null, true);
            echo "\" />

";
        }
        // line 93
        echo "   <div id=\"mainformtable\">
      ";
        // line 94
        $context["template_name"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["template_name"] ?? null) : null));
        // line 95
        echo "      ";
        if (((0 === twig_compare(($context["withtemplate"] ?? null), 2)) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 95))) {
            // line 96
            echo "         <input type=\"hidden\" name=\"template_name\" value=\"";
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
         ";
            // line 97
            $context["nametype"] = twig_sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
            // line 98
            echo "      ";
        } elseif ((0 === twig_compare(($context["withtemplate"] ?? null), 1))) {
            // line 99
            echo "         <input type=\"hidden\" name=\"is_template\" value=\"1\" />
      ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 100
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 100)) {
            // line 101
            echo "         ";
            $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
            // line 102
            echo "      ";
        } else {
            // line 103
            echo "         ";
            if (((0 === twig_compare(($context["noid"] ?? null), false)) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiis_ids_visible") || (0 === twig_compare(twig_length_filter($this->env, ($context["nametype"] ?? null)), 0))))) {
                // line 104
                echo "            ";
                $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), ($context["nametype"] ?? null), (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null));
                // line 105
                echo "         ";
            }
            // line 106
            echo "      ";
        }
        // line 107
        echo "
      ";
        // line 108
        if (( !array_key_exists("no_header", $context) || (0 === twig_compare(($context["no_header"] ?? null), false)))) {
            // line 109
            echo "         <div class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch\">
            ";
            // line 110
            if ((0 === twig_compare(($context["withtemplate"] ?? null), 1))) {
                // line 111
                echo "               <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
                echo twig_escape_filter($this->env, __("Template name"), "html", null, true);
                echo "\"
                  name=\"template_name\" id=\"textfield_template_name";
                // line 112
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                  value=\"";
                // line 113
                echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
                echo "\" />
            ";
            }
            // line 115
            echo "            <h3 class=\"card-title d-flex align-items-center ps-4\">
               ";
            // line 116
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 116);
            // line 117
            echo "               ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["icon"] ?? null)), 0))) {
                // line 118
                echo "                  <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                     <i class=\"";
                // line 119
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-2x\"></i>
                  </div>
               ";
            }
            // line 122
            echo "               <span>
               ";
            // line 123
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 123), 0))) {
                // line 124
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, ($context["friendlyname"] ?? null), "html", null, true);
                echo " 
               ";
            } else {
                // line 126
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo "
               ";
            }
            // line 128
            echo "               
               </span>
               
               ";
            // line 131
            if (($context["header_toolbar"] ?? null)) {
                // line 132
                echo "                  <div class=\"d-inline-block toolbar ms-2\">
                     ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_toolbar"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                    // line 134
                    echo "                        ";
                    echo $context["raw_element"];
                    echo "
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raw_element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                  </div>
               ";
            }
            // line 138
            echo "            </h3>
            
            ";
            // line 140
            $context["single_actions_ms_auto"] = true;
            // line 141
            echo "            
            ";
            // line 142
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 142) && Session::isMultiEntitiesMode()) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Entity"))) {
                // line 143
                echo "               ";
                $context["single_actions_ms_auto"] = false;
                // line 144
                echo "               <span class=\"badge entity-name mx-1 px-2 ms-auto align-items-center\" title=\"";
                echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
                echo "\">
                  <i class=\"ti ti-stack me-2\"></i>
                  ";
                // line 146
                echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
                echo "
               </span>

               ";
                // line 149
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 149)) {
                    // line 150
                    echo "                  <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center\">
                     <label class=\"form-check d-flex align-items-center mb-0\">
                        ";
                    // line 152
                    $context["disabled"] = (0 === twig_compare(($context["canedit"] ?? null), false));
                    // line 153
                    echo "                        ";
                    $context["comment"] = __("Change visibility in child entities.");
                    // line 154
                    echo "
                        ";
                    // line 155
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild")) {
                        // line 156
                        echo "                           ";
                        $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                        // line 157
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 158
                        echo "                        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => "recursive"], "method", false, false, false, 158)) {
                        // line 159
                        echo "                           ";
                        $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                        // line 160
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 161
                        echo "                        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUnrecurs", [], "method", false, false, false, 161)) {
                        // line 162
                        echo "                           ";
                        $context["comment"] = __("Flag change forbidden. Linked items found.");
                        // line 163
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 164
                        echo "                        ";
                    }
                    // line 165
                    echo "
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                              ";
                    // line 167
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 167)) {
                        echo "checked=\"checked\"";
                    }
                    // line 168
                    echo "                              ";
                    if (($context["disabled"] ?? null)) {
                        echo "disabled=\"disabled\"";
                    }
                    echo " />
                        ";
                    // line 169
                    if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 169)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 169))) {
                        // line 170
                        echo "                            ";
                        // line 171
                        echo "                            <input type=\"hidden\" name=\"is_recursive\" value=\"1\" />
                        ";
                    }
                    // line 173
                    echo "                        <span class=\"form-check-label mb-0 mx-2\">
                           ";
                    // line 174
                    echo twig_escape_filter($this->env, __("Child entities"), "html", null, true);
                    echo "
                           <i class=\"fas fa-info ms-1\" title=\"";
                    // line 175
                    echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                    echo "\"></i>
                        </span>
                     </label>
                  </span>
                  
               ";
                }
                // line 181
                echo "            ";
            }
            // line 182
            echo "
            ";
            // line 183
            echo twig_include($this->env, $context, "components/form/single-action.html.twig");
            echo "
         </div>
      ";
        }
        // line 186
        echo "
      ";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

      ";
        // line 190
        echo "      ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 190), "request", [0 => "in_modal"], "method", false, false, false, 190), true))) {
            // line 191
            echo "      
      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      ";
        }
    }

    public function getTemplateName()
    {
        return "components/form/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 191,  429 => 190,  424 => 187,  421 => 186,  415 => 183,  412 => 182,  409 => 181,  400 => 175,  396 => 174,  393 => 173,  389 => 171,  387 => 170,  385 => 169,  378 => 168,  374 => 167,  370 => 165,  367 => 164,  364 => 163,  361 => 162,  358 => 161,  355 => 160,  352 => 159,  349 => 158,  346 => 157,  343 => 156,  341 => 155,  338 => 154,  335 => 153,  333 => 152,  329 => 150,  327 => 149,  321 => 146,  315 => 144,  312 => 143,  310 => 142,  307 => 141,  305 => 140,  301 => 138,  297 => 136,  288 => 134,  284 => 133,  281 => 132,  279 => 131,  274 => 128,  268 => 126,  260 => 124,  258 => 123,  255 => 122,  249 => 119,  246 => 118,  243 => 117,  241 => 116,  238 => 115,  233 => 113,  229 => 112,  224 => 111,  222 => 110,  219 => 109,  217 => 108,  214 => 107,  211 => 106,  208 => 105,  205 => 104,  202 => 103,  199 => 102,  196 => 101,  194 => 100,  191 => 99,  188 => 98,  186 => 97,  181 => 96,  178 => 95,  176 => 94,  173 => 93,  167 => 90,  161 => 89,  157 => 87,  153 => 85,  143 => 78,  134 => 72,  130 => 71,  121 => 66,  118 => 65,  116 => 64,  110 => 61,  106 => 60,  102 => 59,  95 => 58,  93 => 57,  89 => 55,  86 => 54,  84 => 53,  81 => 52,  78 => 51,  75 => 50,  72 => 49,  69 => 48,  66 => 47,  64 => 46,  62 => 45,  60 => 44,  58 => 43,  56 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% set target       = params['target'] ?? item.getFormURL() %}
{% set canedit      = params['canedit'] ?? true %}
{% set withtemplate = params['withtemplate'] ?? '' %}
{% set rand         = random() %}
{% set nametype     = params['formtitle'] ?? item.getTypeName(1) %}
{% set friendlyname = params['friendlyname'] ?? item.getHeaderName() %}
{% set no_id        = params['noid'] ?? false %}
{% set id           = item.fields['id'] ?? -1 %}
{% set formoptions  = params['formoptions'] ?? '' %}
{% set currentPath = app.request.attributes.get('_route_params') %}
{% set entity_id = 0 %}
{% set entity_name = '' %}
{% if item.isEntityAssign() %}
   {% if item.getType() == 'Entity' and item.fields['id'] == 0 %}
      {% set entity_id = null %}
   {% else %}
      {% set entity_id = params['entities_id'] ?? item.getEntityID() ?? session('glpiactive_entity') %}
   {% endif %}

   {% if is_multi_entities_mode() %}
      {% set entity_name = get_item_name('Entity', item.getEntityID()) %}
   {% endif %}
{% endif %}
{% if item.canEdit(item.fields['id']) %}
<form name=\"massaction_{{ rand }}\" id=\"massaction_{{ rand }}\" method=\"post\"
      action=\"{{ path('/front/massiveaction.php') }}\" data-submit-once>
   <div id=\"massive_container_{{ rand }}\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
</form>

{% if (nametype == 'Computador') or (nametype == 'Monitor') or (nametype == 'Impressora') or (nametype == 'Telefone') or (nametype == 'Dispositivo') or (nametype == 'Dispositivo de rede')  %}
   {% if not item.isNewItem %}
   <form method='post' name='useditemsexport_form\$rand' id='useditemsexport_form\$rand' action=\"{{ path('/marketplace/useditemsexport/inc/termounit.php') }}\">
      <table class='' style=\"margin:0px 40px\">
      <tr class=''><td colspan='1'>
         <td style='padding:0px 15px'><p> Termo de devolução
            <input type='submit' name='generate' value=\"Gerar\" class='submit'>
            <input type=\"hidden\" name=\"entities_id\" value=\"{{ id }}\" />
            <input type=\"hidden\" name=\"tipo\" value=\"{{nametype}}\"/>
            </td>
         </td>
         <td style='padding:0px 240px'>
            <td colspan='6'><p> Termo de Manutenção
            <input type='submit' name='manutencao' value=\"Gerar\" class='submit'>
            <input type=\"hidden\" name=\"entities_id\" value=\"{{ id }}\" />
            <input type=\"hidden\" name=\"acao\" value=\"manutencao\"/>
         </td>
      </tr>
   </table>
   </form>
   {% endif %}
   
{% endif %}


<form name=\"asset_form\" method=\"post\" action=\"{{ target }}\" {{ formoptions|raw }} enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"entities_id\" value=\"{{ entity_id }}\" />

{% endif %}
   <div id=\"mainformtable\">
      {% set template_name = item.fields['template_name']|verbatim_value %}
      {% if withtemplate == 2 and not item.isNewItem() %}
         <input type=\"hidden\" name=\"template_name\" value=\"{{ template_name }}\" />
         {% set nametype = __('Created from the template %s')|format(template_name) %}
      {% elseif withtemplate == 1 %}
         <input type=\"hidden\" name=\"is_template\" value=\"1\" />
      {% elseif item.isNewItem() %}
         {% set nametype = __('%1\$s - %2\$s')|format(__('New item'), nametype) %}
      {% else %}
         {% if noid == false and (session('glpiis_ids_visible') or nametype|length == 0) %}
            {% set nametype = __('%1\$s - %2\$s')|format(nametype, item.fields['id']) %}
         {% endif %}
      {% endif %}

      {% if no_header is not defined or no_header == false %}
         <div class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch\">
            {% if withtemplate == 1 %}
               <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"{{ __('Template name') }}\"
                  name=\"template_name\" id=\"textfield_template_name{{ rand }}\"
                  value=\"{{ template_name }}\" />
            {% endif %}
            <h3 class=\"card-title d-flex align-items-center ps-4\">
               {% set icon = item.getIcon() %}
               {% if icon|length > 0 %}
                  <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                     <i class=\"{{ icon }} fa-2x\"></i>
                  </div>
               {% endif %}
               <span>
               {% if item.id > 0 %}
                  {{ nametype }} - {{ friendlyname }} 
               {% else %}
                  {{ nametype }}
               {% endif %}
               
               </span>
               
               {% if header_toolbar %}
                  <div class=\"d-inline-block toolbar ms-2\">
                     {% for raw_element in header_toolbar %}
                        {{ raw_element|raw }}
                     {% endfor %}
                  </div>
               {% endif %}
            </h3>
            
            {% set single_actions_ms_auto = true %}
            
            {% if item.isEntityAssign() and is_multi_entities_mode() and item is not instanceof('Entity') %}
               {% set single_actions_ms_auto = false %}
               <span class=\"badge entity-name mx-1 px-2 ms-auto align-items-center\" title=\"{{ entity_name }}\">
                  <i class=\"ti ti-stack me-2\"></i>
                  {{ entity_name }}
               </span>

               {% if item.maybeRecursive() %}
                  <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center\">
                     <label class=\"form-check d-flex align-items-center mb-0\">
                        {% set disabled = canedit == false %}
                        {% set comment  = __('Change visibility in child entities.') %}

                        {% if item is instanceof('CommonDBChild') %}
                           {% set comment  = __('Can՛t change this attribute. It՛s inherited from its parent.') %}
                           {% set disabled = true %}
                        {% elseif not item.can(id, 'recursive') %}
                           {% set comment  = __('You are not allowed to change the visibility flag for child entities.') %}
                           {% set disabled = true %}
                        {% elseif not item.canUnrecurs() %}
                           {% set comment  = __('Flag change forbidden. Linked items found.') %}
                           {% set disabled = true %}
                        {% endif %}

                        <input class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                              {% if item.isRecursive() %}checked=\"checked\"{% endif %}
                              {% if disabled %}disabled=\"disabled\"{% endif %} />
                        {% if item is instanceof('CommonDBChild') and item.isNewItem() and item.isRecursive() %}
                            {# Send value on hidden field to ensure creation will use inherited recursivity on CommonDBChild #}
                            <input type=\"hidden\" name=\"is_recursive\" value=\"1\" />
                        {% endif %}
                        <span class=\"form-check-label mb-0 mx-2\">
                           {{ __('Child entities') }}
                           <i class=\"fas fa-info ms-1\" title=\"{{ comment }}\"></i>
                        </span>
                     </label>
                  </span>
                  
               {% endif %}
            {% endif %}

            {{ include('components/form/single-action.html.twig') }}
         </div>
      {% endif %}

      {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::PRE_ITEM_FORM'), {'item': item, 'options': params}) }}

      {# todo modal message #}
      {% if app.request.request('in_modal') == true %}
      
      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      {% endif %}
", "components/form/header.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\form\\header.html.twig");
    }
}
