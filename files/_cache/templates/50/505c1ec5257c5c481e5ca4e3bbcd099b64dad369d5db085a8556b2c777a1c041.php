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

/* components/form/buttons.html.twig */
class __TwigTemplate_3378b93c539735f0ef09183c947b36608f2193fb675491ffcf4ceb1c5ad3b8c4 extends Template
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
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["withtemplate"] ?? null) : null)) : (""));
        // line 35
        $context["candel"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "candel", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["candel"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["candel"] ?? null) : null)) : (true));
        // line 36
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["canedit"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["canedit"] ?? null) : null)) : (true));
        // line 37
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 37), "id", [], "array", true, true, false, 37) &&  !(null === (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 37)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null)))) ? ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 37)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null)) : ( -1));
        // line 38
        echo "
         <div class=\"row\">
         ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>

";
        // line 43
        if ((($context["canedit"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [0 => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null)], "method", false, false, false, 43))) {
            // line 44
            echo "      <div class=\"card-body mx-n2 mb-4 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
         ";
            // line 45
            if (((1 === twig_compare(twig_length_filter($this->env, ($context["withtemplate"] ?? null)), 0)) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [0 => ($context["id"] ?? null)], "method", false, false, false, 45))) {
                // line 46
                echo "            ";
                if (((0 >= twig_compare(($context["id"] ?? null), 0)) || (0 === twig_compare(($context["withtemplate"] ?? null), 2)))) {
                    // line 47
                    echo "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                  <i class=\"fas fa-plus\"></i>
                  <span>";
                    // line 49
                    echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                    echo "</span>
               </button>
            ";
                } else {
                    // line 52
                    echo "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>";
                    // line 54
                    echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                    echo "</span>
               </button>
            ";
                }
                // line 57
                echo "         ";
            } else {
                // line 58
                echo "            ";
                if (((($context["candel"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("DELETE")], "method", false, false, false, 58)) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 58))) {
                    // line 59
                    echo "               ";
                    $context["candel"] = false;
                    // line 60
                    echo "            ";
                }
                // line 61
                echo "
            ";
                // line 62
                if ((($context["canedit"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("UPDATE")], "method", false, false, false, 62))) {
                    // line 63
                    echo "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>";
                    // line 65
                    echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                    echo "</span>
               </button>
            ";
                }
                // line 68
                echo "
            ";
                // line 69
                if (($context["candel"] ?? null)) {
                    // line 70
                    echo "               ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 70)) {
                        // line 71
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("DELETE")], "method", false, false, false, 71)) {
                            // line 72
                            echo "                     <button class=\"btn btn-outline-secondary me-2\" type=\"submit\"
                             name=\"restore\" value=\"1\">
                        <i class=\"ti ti-trash-off\"></i>
                        <span>";
                            // line 75
                            echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                            echo "</span>
                     </button>
                  ";
                        }
                        // line 78
                        echo "
                  ";
                        // line 79
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 79)) {
                            // line 80
                            echo "                    ";
                            $context["item_devices"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Devices::getConcernedItems");
                            // line 81
                            echo "                    ";
                            $context["show_keep_devices"] = twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 81), ($context["item_devices"] ?? null));
                            // line 82
                            echo "
                    ";
                            // line 83
                            $context["span_cls"] = "";
                            // line 84
                            echo "                    ";
                            if (($context["show_keep_devices"] ?? null)) {
                                // line 85
                                echo "                        ";
                                $context["span_cls"] = "border border-danger d-flex align-items-start flex-wrap p-1 px-2 me-2";
                                // line 86
                                echo "                    ";
                            }
                            // line 87
                            echo "
                     <span class=\"";
                            // line 88
                            echo twig_escape_filter($this->env, ($context["span_cls"] ?? null), "html", null, true);
                            echo "\">
                        <button class=\"btn btn-danger me-2\" type=\"submit\" name=\"purge\"
                              value=\"1\"
                              onclick=\"return confirm('";
                            // line 91
                            echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                            echo "');\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                            // line 93
                            echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                            echo "</span>
                        </button>
                        ";
                            // line 95
                            if (($context["show_keep_devices"] ?? null)) {
                                // line 96
                                echo "                            <span class=\"mt-2\">
                                <label class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"keep_devices\" value=\"1\" />
                                    <span class=\"form-check-label text-danger\">
                                        ";
                                // line 100
                                echo twig_escape_filter($this->env, __("Keep the devices while deleting this item"), "html", null, true);
                                echo "
                                    </span>
                                </label>
                            </span>
                        ";
                            }
                            // line 105
                            echo "                     <span>
                  ";
                        }
                        // line 107
                        echo "               ";
                    } else {
                        // line 108
                        echo "                  ";
                        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 108) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "useDeletedToLockIfDynamic", [], "method", false, false, false, 108))) {
                            // line 109
                            echo "                     ";
                            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 109)) {
                                // line 110
                                echo "                        <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                                onclick=\"return confirm('";
                                // line 111
                                echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                                echo "');\"
                                value=\"1\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                                // line 114
                                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                                echo "</span>
                        </button>
                     ";
                            }
                            // line 117
                            echo "                  ";
                        } elseif (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 117) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("DELETE")], "method", false, false, false, 117))) {
                            // line 118
                            echo "                     <button class=\"btn btn-outline-warning me-2\" type=\"submit\"
                             name=\"delete\" value=\"1\">
                        <i class=\"ti ti-trash\"></i>
                        <span>";
                            // line 121
                            echo twig_escape_filter($this->env, _x("button", "Put in trashbin"), "html", null, true);
                            echo "</span>
                     </button>
                  ";
                        }
                        // line 124
                        echo "               ";
                    }
                    // line 125
                    echo "            ";
                }
                // line 126
                echo "
            ";
                // line 127
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_mod"], "method", false, false, false, 127)) {
                    // line 128
                    echo "               <input type=\"hidden\" name=\"_read_date_mod\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date_mod"] ?? null) : null), "html", null, true);
                    echo "\" />
            ";
                }
                // line 130
                echo "         ";
            }
            // line 131
            echo "
         ";
            // line 132
            if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [0 => ($context["id"] ?? null)], "method", false, false, false, 132)) {
                // line 133
                echo "            <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" />
         ";
            }
            // line 135
            echo "
         ";
            // line 136
            if ((($context["canedit"] ?? null) && (1 === twig_compare(twig_length_filter($this->env, (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["addbuttons"] ?? null) : null)), 0)))) {
                // line 137
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["addbuttons"] ?? null) : null));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 138
                    echo "               <button class=\"btn btn-outline-secondary me-2\" type=\"submit\" name=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"1\">
                  ";
                    // line 139
                    if (twig_test_iterable($context["val"])) {
                        // line 140
                        echo "                     ";
                        if (twig_get_attribute($this->env, $this->source, $context["val"], "icon", [], "any", true, true, false, 140)) {
                            // line 141
                            echo "                        <i class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "icon", [], "any", false, false, false, 141), "html", null, true);
                            echo "\"></i>
                     ";
                        }
                        // line 143
                        echo "                     <span>";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["val"], "text", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["val"], "text", [], "any", false, false, false, 143), "")) : ("")), "html", null, true);
                        echo "</span>
                  ";
                    } else {
                        // line 145
                        echo "                     ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "
                  ";
                    }
                    // line 147
                    echo "               </button>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "         ";
            }
            // line 150
            echo "
      </div>

      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
   </div> ";
            // line 155
            echo "</form> ";
        } else {
            // line 157
            echo "   </div> ";
        }
    }

    public function getTemplateName()
    {
        return "components/form/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 157,  327 => 155,  323 => 153,  318 => 150,  315 => 149,  308 => 147,  302 => 145,  296 => 143,  290 => 141,  287 => 140,  285 => 139,  280 => 138,  275 => 137,  273 => 136,  270 => 135,  264 => 133,  262 => 132,  259 => 131,  256 => 130,  250 => 128,  248 => 127,  245 => 126,  242 => 125,  239 => 124,  233 => 121,  228 => 118,  225 => 117,  219 => 114,  213 => 111,  210 => 110,  207 => 109,  204 => 108,  201 => 107,  197 => 105,  189 => 100,  183 => 96,  181 => 95,  176 => 93,  171 => 91,  165 => 88,  162 => 87,  159 => 86,  156 => 85,  153 => 84,  151 => 83,  148 => 82,  145 => 81,  142 => 80,  140 => 79,  137 => 78,  131 => 75,  126 => 72,  123 => 71,  120 => 70,  118 => 69,  115 => 68,  109 => 65,  105 => 63,  103 => 62,  100 => 61,  97 => 60,  94 => 59,  91 => 58,  88 => 57,  82 => 54,  78 => 52,  72 => 49,  68 => 47,  65 => 46,  63 => 45,  60 => 44,  58 => 43,  52 => 40,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set withtemplate = params['withtemplate'] ?? '' %}
{% set candel       = params['candel'] ?? true %}
{% set canedit      = params['canedit'] ?? true %}
{% set id           = item.fields['id'] ?? -1 %}

         <div class=\"row\">
         {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::POST_ITEM_FORM'), {'item': item, 'options': params}) }}
         </div>

{% if canedit or item.canEdit(item.fields['id']) %}
      <div class=\"card-body mx-n2 mb-4 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
         {% if withtemplate|length > 0 or item.isNewID(id) %}
            {% if id <= 0 or withtemplate == 2 %}
               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                  <i class=\"fas fa-plus\"></i>
                  <span>{{ _x('button', 'Add') }}</span>
               </button>
            {% else %}
               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>{{ _x('button', 'Save') }}</span>
               </button>
            {% endif %}
         {% else %}
            {% if candel and not item.can(id, constant('DELETE')) and not item.can(id, constant('PURGE')) %}
               {% set candel = false %}
            {% endif %}

            {% if canedit and item.can(id, constant('UPDATE')) %}
               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>{{ _x('button', 'Save') }}</span>
               </button>
            {% endif %}

            {% if candel %}
               {% if item.isDeleted() %}
                  {% if item.can(id, constant('DELETE')) %}
                     <button class=\"btn btn-outline-secondary me-2\" type=\"submit\"
                             name=\"restore\" value=\"1\">
                        <i class=\"ti ti-trash-off\"></i>
                        <span>{{ _x('button', 'Restore') }}</span>
                     </button>
                  {% endif %}

                  {% if item.can(id, constant('PURGE')) %}
                    {% set item_devices = call('Item_Devices::getConcernedItems') %}
                    {% set show_keep_devices = item.getType() in item_devices %}

                    {% set span_cls = \"\" %}
                    {% if show_keep_devices %}
                        {% set span_cls = \"border border-danger d-flex align-items-start flex-wrap p-1 px-2 me-2\" %}
                    {% endif %}

                     <span class=\"{{ span_cls }}\">
                        <button class=\"btn btn-danger me-2\" type=\"submit\" name=\"purge\"
                              value=\"1\"
                              onclick=\"return confirm('{{ __('Confirm the final deletion?') }}');\">
                           <i class=\"ti ti-trash\"></i>
                           <span>{{ _x('button', 'Delete permanently') }}</span>
                        </button>
                        {% if show_keep_devices %}
                            <span class=\"mt-2\">
                                <label class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"keep_devices\" value=\"1\" />
                                    <span class=\"form-check-label text-danger\">
                                        {{ __('Keep the devices while deleting this item') }}
                                    </span>
                                </label>
                            </span>
                        {% endif %}
                     <span>
                  {% endif %}
               {% else %}
                  {% if (not item.maybeDeleted() or item.useDeletedToLockIfDynamic()) %}
                     {% if item.can(id, constant('PURGE')) %}
                        <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                                onclick=\"return confirm('{{ __('Confirm the final deletion?') }}');\"
                                value=\"1\">
                           <i class=\"ti ti-trash\"></i>
                           <span>{{ _x('button', 'Delete permanently') }}</span>
                        </button>
                     {% endif %}
                  {% elseif not item.isDeleted() and item.can(id, constant('DELETE')) %}
                     <button class=\"btn btn-outline-warning me-2\" type=\"submit\"
                             name=\"delete\" value=\"1\">
                        <i class=\"ti ti-trash\"></i>
                        <span>{{ _x('button', 'Put in trashbin') }}</span>
                     </button>
                  {% endif %}
               {% endif %}
            {% endif %}

            {% if item.isField('date_mod') %}
               <input type=\"hidden\" name=\"_read_date_mod\" value=\"{{ item.fields['date_mod'] }}\" />
            {% endif %}
         {% endif %}

         {% if not item.isNewID(id) %}
            <input type=\"hidden\" name=\"id\" value=\"{{ id }}\" />
         {% endif %}

         {% if canedit and params['addbuttons']|length > 0 %}
            {% for key, val in params['addbuttons'] %}
               <button class=\"btn btn-outline-secondary me-2\" type=\"submit\" name=\"{{ key }}\" value=\"1\">
                  {% if val is iterable %}
                     {% if val.icon is defined %}
                        <i class=\"{{ val.icon }}\"></i>
                     {% endif %}
                     <span>{{ val.text|default('') }}</span>
                  {% else %}
                     {{ val }}
                  {% endif %}
               </button>
            {% endfor %}
         {% endif %}

      </div>

      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
   </div> {# #mainformtable #}
</form> {# [name=asset_form] #}
{% else %}
   </div> {# #mainformtable #}
{% endif %}
", "components/form/buttons.html.twig", "/var/www/html/glpi/templates/components/form/buttons.html.twig");
    }
}
