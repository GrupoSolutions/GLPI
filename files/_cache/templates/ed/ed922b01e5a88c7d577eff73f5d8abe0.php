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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_2f21ab7b922d93456c87b46c56eb2ef7 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 53
        echo "
";
        // line 70
        echo "
";
        // line 82
        echo "

";
        // line 103
        echo "

";
        // line 121
        echo "

";
        // line 144
        echo "

";
        // line 169
        echo "

";
        // line 184
        echo "

";
        // line 263
        echo "
";
        // line 290
        echo "
";
        // line 323
        echo "
";
        // line 357
        echo "
";
        // line 385
        echo "
";
        // line 398
        echo "
";
        // line 403
        echo "
";
        // line 425
        echo "
";
        // line 450
        echo "
";
        // line 478
        echo "
";
        // line 490
        echo "
";
        // line 511
        echo "
";
        // line 533
        echo "
";
        // line 554
        echo "
";
        // line 574
        echo "
";
        // line 597
        echo "
";
        // line 608
        echo "
";
        // line 628
        echo "
";
        // line 649
        echo "
";
        // line 681
        echo "
";
        // line 692
        echo "
";
        // line 725
        echo "
";
        // line 736
        echo "
";
        // line 746
        echo "

";
        // line 764
        echo "

";
        // line 823
        echo "

";
        // line 854
        echo "

";
    }

    // line 34
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "   ";
            $context["margins"] = "mt-3";
            // line 36
            echo "   ";
            if (($context["first"] ?? null)) {
                // line 37
                echo "      ";
                $context["margins"] = "mt-n2";
                // line 38
                echo "   ";
            }
            // line 39
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 40
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 42
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 43
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 44
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 45
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 55
            echo "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 56
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 57
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 59
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 60
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 61
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 62
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 72
            echo "   ";
            $context["tpl_value"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 73
            echo "   ";
            $context["tplmark"] = "";
            // line 74
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 74)) {
                echo " ";
                // line 75
                echo "      ";
                $context["tplmark"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [0 => ($context["name"] ?? null), 1 => ["withtemplate" => ($context["withtemplate"] ?? null)], 2 => ($context["tpl_value"] ?? null)], "method", false, false, false, 75);
                // line 76
                echo "   ";
            }
            // line 77
            echo "   ";
            $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)), 1 => ($context["name"] ?? null), 2 => (($context["withtemplate"] ?? null) == 2), 3 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 77), 4 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null)]);
            // line 78
            echo "   ";
            $context["label"] = twig_sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 79
            echo "
   ";
            // line 80
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 80, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 84
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 85
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "text"], ($context["options"] ?? null));
            // line 86
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 86), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 86)) {
                // line 87
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 88
                echo "   ";
            }
            // line 89
            echo "
   ";
            // line 90
            ob_start();
            // line 91
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 91), "html", null, true);
            echo "\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 93
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 94
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, ("maxlenght=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 94)), "html", null, true))) : (print ("")));
            echo "
             ";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 95)) ? ("readonly") : (""));
            echo "
             ";
            // line 96
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 96)) ? ("disabled") : (""));
            echo "
             ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 97)) ? ("multiple") : (""));
            echo " ";
            // line 98
            echo "             ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 98)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            echo "
   ";
            // line 101
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 101, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 105
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 106
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 106), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 106)) {
                // line 107
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 108
                echo "   ";
            }
            // line 109
            echo "
   ";
            // line 110
            ob_start();
            // line 111
            echo "      <input type=\"hidden\"   name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
            // line 112
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
            // line 113
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
             ";
            // line 114
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 114)) ? ("readonly") : (""));
            echo "
             ";
            // line 115
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 115)) ? ("required") : (""));
            echo "
             ";
            // line 116
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 116)) ? ("disabled") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            echo "
   ";
            // line 119
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 119, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 123
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 124
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 124), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 124)) {
                // line 125
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 126
                echo "   ";
            }
            // line 127
            echo "
   ";
            // line 128
            ob_start();
            // line 129
            echo "      <label class=\"form-check form-switch pt-2\">
         <input type=\"hidden\"   name=\"";
            // line 130
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
         <input type=\"checkbox\" name=\"";
            // line 131
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
                ";
            // line 132
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
                ";
            // line 133
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 133)) ? ("readonly") : (""));
            echo "
                ";
            // line 134
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 134)) ? ("required") : (""));
            echo "
                ";
            // line 135
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 135)) ? ("disabled") : (""));
            echo " />
         ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 136)) {
                // line 137
                echo "            <span class=\"form-check-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 137), "html", null, true);
                echo "</span>
         ";
            }
            // line 139
            echo "      </label>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 141
            echo "
   ";
            // line 142
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 142, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 146
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 147
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 147) != "any") && (twig_round(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 147), 0, "floor") != twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 147)))) {
                // line 148
                echo "      ";
                // line 149
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [0 => ($context["value"] ?? null), 1 => true]);
                // line 150
                echo "   ";
            }
            // line 151
            echo "
   ";
            // line 152
            if ((($context["value"] ?? null) == "")) {
                // line 153
                echo "      ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 153)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 153)) : (0));
                // line 154
                echo "   ";
            }
            // line 155
            echo "
   ";
            // line 156
            ob_start();
            // line 157
            echo "      <input type=\"number\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 159
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 160
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 160)) ? ("readonly") : (""));
            echo "
         ";
            // line 161
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 161)) ? ("disabled") : (""));
            echo "
         ";
            // line 162
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 162)) ? ("required") : (""));
            echo "
         ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 163)) {
                echo "min=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 163), "html", null, true);
                echo "\"";
            }
            // line 164
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 164)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 164), "html", null, true);
                echo "\"";
            }
            // line 165
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 165)) {
                echo "step=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 165), "html", null, true);
                echo "\"";
            }
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 167
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 167, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 171
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 172
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["readonly" => true]);
            // line 173
            echo "   ";
            ob_start();
            // line 174
            echo "      <span class=\"form-control\" readonly>
         ";
            // line 175
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 176
                echo "            &nbsp;
         ";
            } else {
                // line 178
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                echo "
         ";
            }
            // line 180
            echo "      </span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 182
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 182, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 186
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 187
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "uploads" => []],             // line 193
($context["options"] ?? null));
            // line 194
            echo "
   ";
            // line 195
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 195), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 195)) {
                // line 196
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 197
                echo "   ";
            }
            // line 198
            echo "   ";
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 198)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 198)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 198))));
            // line 199
            echo "
   ";
            // line 200
            ob_start();
            // line 201
            echo "      ";
            // line 202
            echo "      <textarea class=\"form-control\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
            // line 204
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 204)) ? ("disabled") : (""));
            echo "
                ";
            // line 205
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 205)) ? ("readonly") : (""));
            echo "
                ";
            // line 206
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 206)) ? ("required") : (""));
            echo ">";
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 206)) ? (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null))))) : (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true))));
            echo "</textarea>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 208
            echo "
   ";
            // line 209
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 209)) {
                // line 210
                echo "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [0 =>                 // line 211
($context["id"] ?? null), 1 => twig_get_attribute($this->env, $this->source,                 // line 212
($context["options"] ?? null), "rand", [], "any", false, false, false, 212), 2 => true, 3 => ((twig_get_attribute($this->env, $this->source,                 // line 214
($context["options"] ?? null), "disabled", [], "any", true, true, false, 214)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 214), false)) : (false))]);
                // line 216
                echo "   ";
            }
            // line 217
            echo "
   ";
            // line 218
            $context["add_html"] = "";
            // line 219
            echo "   ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 219) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 219))) {
                // line 220
                echo "      ";
                ob_start();
                // line 221
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 222
($context["id"] ?? null), "multiple" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 224
($context["options"] ?? null), "uploads", [], "any", false, false, false, 224), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 225
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 225), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 225)]]);
                // line 227
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 228
                echo "   ";
            } elseif (((( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 228) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 228)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 228)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 228))) {
                // line 229
                echo "      ";
                ob_start();
                // line 230
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 231
($context["id"] ?? null), "name" =>                 // line 232
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 234
($context["options"] ?? null), "uploads", [], "any", false, false, false, 234), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 235
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 235), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 235)]]);
                // line 237
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 238
                echo "   ";
            }
            // line 239
            echo "
   ";
            // line 240
            if ((($context["add_html"] ?? null) != "")) {
                // line 241
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 241)) {
                    // line 242
                    echo "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 242));
                    // line 243
                    echo "      ";
                }
                // line 244
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 245
                echo "   ";
            }
            // line 246
            echo "
   ";
            // line 247
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 247, $context, $this->getSourceContext());
            echo "
   ";
            // line 248
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 248) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 249
                echo "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 253
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "'),
                  ";
                // line 254
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "html", null, true);
                echo ",
                  '";
                // line 255
                echo twig_escape_filter($this->env, Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")]), "html", null, true);
                echo "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 264
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 265
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 265), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 265)) {
                // line 266
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 267
                echo "   ";
            }
            // line 268
            echo "
   ";
            // line 269
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 269)) {
                // line 270
                echo "      ";
                if ((twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i:s") < twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"))) {
                    // line 271
                    echo "         ";
                    $context["class"] = "warn";
                    // line 272
                    echo "      ";
                }
                // line 273
                echo "   ";
            } else {
                // line 274
                echo "      ";
                $context["class"] = "";
                // line 275
                echo "   ";
            }
            // line 276
            echo "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 277), "html", null, true);
            echo "\">
      ";
            // line 279
            echo "      ";
            // line 280
            echo "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" data-input
             name=\"";
            // line 281
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 282
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 282)) ? ("required") : (""));
            echo "
             ";
            // line 283
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 283)) ? ("readonly") : (""));
            echo "
             ";
            // line 284
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 284)) ? ("disabled") : (""));
            echo " />
      ";
            // line 285
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 285)) {
                // line 286
                echo "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 288
            echo "   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 291
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 292
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 293
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 293))], ($context["options"] ?? null));
            // line 294
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 295
            echo "
   ";
            // line 296
            ob_start();
            // line 297
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 297, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$(\"#";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 300), "html", null, true);
            echo "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            allowInput: ";
            // line 307
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 307)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 308
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 308)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale(\"";
            // line 309
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["locale"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["language"] ?? null) : null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["region"] ?? null) : null), "html", null, true);
            echo "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 320
            echo "
   ";
            // line 321
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 321, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 324
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 325
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 326
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 326))], ($context["options"] ?? null));
            // line 327
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 328
            echo "
   ";
            // line 329
            ob_start();
            // line 330
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 330, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$('#";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 333), "html", null, true);
            echo "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            allowInput: ";
            // line 341
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 341)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 342
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 342)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale('";
            // line 343
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["language"] ?? null) : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["region"] ?? null) : null), "html", null, true);
            echo "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 354
            echo "
   ";
            // line 355
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 355, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 358
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 359
            echo "   ";
            ob_start();
            // line 360
            echo "      <input id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 362
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 363
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 363)) ? ("readonly") : (""));
            echo "
         ";
            // line 364
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 364)) ? ("disabled") : (""));
            echo "
         ";
            // line 365
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 365)) ? ("required") : (""));
            echo " />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            change: function(color) {
                if (color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 383
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 383, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 386
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 387
            echo "   ";
            $context["options"] = twig_array_merge(["autocomplete" => "new-password"], ($context["options"] ?? null));
            // line 388
            echo "   ";
            ob_start();
            // line 389
            echo "      <input type=\"password\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 391
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 392
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 392)) ? ("readonly") : (""));
            echo "
         ";
            // line 393
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 393)) ? ("disabled") : (""));
            echo "
         ";
            // line 394
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 394)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 396
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 396, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 399
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 400
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "email"], ($context["options"] ?? null));
            // line 401
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 401, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 404
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 405
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "name" =>             // line 407
($context["name"] ?? null), "simple" => false],             // line 409
($context["options"] ?? null));
            // line 410
            echo "   ";
            ob_start();
            // line 411
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 411)) {
                // line 412
                echo "        <input type=\"file\" id=\"%id%\"
               class=\"form-control\"
               name=\"";
                // line 414
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
               ";
                // line 415
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mulitple", [], "any", false, false, false, 415)) ? ("multiple") : (""));
                echo "
               ";
                // line 416
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 416)) ? ("readonly") : (""));
                echo "
               ";
                // line 417
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 417)) ? ("disabled") : (""));
                echo "
               ";
                // line 418
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 418)) ? ("required") : (""));
                echo " />
      ";
            } else {
                // line 420
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ($context["options"] ?? null)]);
                // line 421
                echo "      ";
            }
            // line 422
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 423
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 423, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 426
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 427
            echo "   ";
            ob_start();
            // line 428
            echo "      <div class=\"img-overlay-wrapper position-relative\">
         ";
            // line 429
            $context["clearable"] = (($__internal_compile_7 = ($context["options"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["clearable"] ?? null) : null);
            // line 430
            echo "         ";
            $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 430) &&  !(null === (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["url"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)) : (null));
            // line 431
            echo "         ";
            $context["options"] = twig_array_filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
            // line 432
            echo "         ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 433
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["link_options"] ?? null)]), "html", null, true);
                echo ">
         ";
            }
            // line 435
            echo "               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["options"] ?? null)]), "html", null, true);
            echo " />
         ";
            // line 436
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 437
                echo "            </a>
         ";
            }
            // line 439
            echo "         ";
            if (($context["clearable"] ?? null)) {
                // line 440
                echo "            <input type=\"hidden\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                // line 441
                echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
                echo "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                // line 442
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
            }
            // line 446
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 448
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 448, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 451
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 452
            echo "   ";
            ob_start();
            // line 453
            echo "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
            // line 454
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                // line 455
                echo "            <div style=\"position: relative; width: fit-content\">
               ";
                // line 456
                echo twig_call_macro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_10 =                 // line 459
($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["clearable"] ?? null) : null), "no_label" => true]], 456, $context, $this->getSourceContext());
                // line 461
                echo "
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 464
            echo "      </div>
      ";
            // line 465
            echo twig_call_macro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 465, $context, $this->getSourceContext());
            // line 468
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 470
            echo "
   ";
            // line 471
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 471)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 471)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 471))));
            // line 472
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 472, $context, $this->getSourceContext());
            echo "
   ";
            // line 473
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 473, $context, $this->getSourceContext());
            // line 476
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 479
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 480
            echo "   ";
            ob_start();
            // line 481
            echo "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 483
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 484
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 484)) ? ("readonly") : (""));
            echo "
         ";
            // line 485
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 485)) ? ("disabled") : (""));
            echo "
         ";
            // line 486
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 486)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 488
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 488, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 491
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 492
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 493
            echo "
   ";
            // line 494
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 494)) {
                // line 495
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 496
                echo "   ";
            }
            // line 497
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 497), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 497)) {
                // line 498
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 499
                echo "   ";
            }
            // line 500
            echo "
   ";
            // line 501
            ob_start();
            // line 502
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 503
($context["value"] ?? null), "rand" =>             // line 504
($context["rand"] ?? null), "width" => "100%"],             // line 506
($context["options"] ?? null))]);
            // line 507
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 508
            echo "
   ";
            // line 509
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 509))])], 509, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 512
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 513
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 514
            echo "
   ";
            // line 515
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 515)) {
                // line 516
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 517
                echo "   ";
            }
            // line 518
            echo "
   ";
            // line 519
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 519), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 519)) {
                // line 520
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 521
                echo "   ";
            }
            // line 522
            echo "
   ";
            // line 523
            ob_start();
            // line 524
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [0 => ($context["name"] ?? null), 1 => ($context["elements"] ?? null), 2 => twig_array_merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(            // line 525
($context["value"] ?? null)), "rand" =>             // line 526
($context["rand"] ?? null), "width" => "100%"],             // line 528
($context["options"] ?? null))]);
            // line 529
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 530
            echo "
   ";
            // line 531
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 531))])], 531, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 534
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 535
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 536
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 536), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 536)) {
                // line 537
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 538
                echo "   ";
            }
            // line 539
            echo "
   ";
            // line 540
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 540)) {
                // line 541
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 542
                echo "   ";
            }
            // line 543
            echo "
   ";
            // line 544
            ob_start();
            // line 545
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 546
($context["value"] ?? null), "rand" =>             // line 547
($context["rand"] ?? null), "width" => "100%"],             // line 549
($context["options"] ?? null))]);
            // line 550
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 551
            echo "
   ";
            // line 552
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 552))])], 552, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 555
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 556
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 557
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 557), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 557)) {
                // line 558
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 559
                echo "   ";
            }
            // line 560
            echo "
   ";
            // line 561
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 561)) {
                // line 562
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 563
                echo "   ";
            }
            // line 564
            echo "
   ";
            // line 565
            ob_start();
            // line 566
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 =>  -1, 3 => twig_array_merge(["rand" =>             // line 567
($context["rand"] ?? null), "width" => "100%"],             // line 569
($context["options"] ?? null))]);
            // line 570
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 571
            echo "
   ";
            // line 572
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 572))])], 572, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 575
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 576
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 577
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 577), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 577)) {
                // line 578
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 579
                echo "   ";
            }
            // line 580
            echo "
   ";
            // line 581
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 581)) {
                // line 582
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 583
                echo "   ";
            }
            // line 584
            echo "
   ";
            // line 585
            $context["types"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 585)) ? (_twig_default_filter((($__internal_compile_11 = ($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["types"] ?? null) : null), [])) : ([]));
            // line 586
            echo "
   ";
            // line 587
            ob_start();
            // line 588
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [0 => ($context["name"] ?? null), 1 => ($context["types"] ?? null), 2 => twig_array_merge(["rand" =>             // line 589
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 591
($context["value"] ?? null)],             // line 592
($context["options"] ?? null))]);
            // line 593
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 594
            echo "
   ";
            // line 595
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 595))])], 595, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 598
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 599
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)],             // line 601
($context["options"] ?? null));
            // line 602
            echo "
   ";
            // line 603
            ob_start();
            // line 604
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [0 => ($context["options"] ?? null)]);
            // line 605
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 606
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 606))])], 606, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 609
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 610
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 611
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 611), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 611)) {
                // line 612
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 613
                echo "   ";
            }
            // line 614
            echo "
   ";
            // line 615
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 615)) {
                // line 616
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 617
                echo "   ";
            }
            // line 618
            echo "
   ";
            // line 619
            ob_start();
            // line 620
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 => (twig_constant("GLPI_ROOT") . "/pics/icones"), 3 => twig_array_merge(["rand" =>             // line 621
($context["rand"] ?? null), "width" => "100%"],             // line 623
($context["options"] ?? null))]);
            // line 624
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 625
            echo "
   ";
            // line 626
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 626))])], 626, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 629
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 630
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 631
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 631), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 631)) {
                // line 632
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 633
                echo "   ";
            }
            // line 634
            echo "
   ";
            // line 635
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 635)) {
                // line 636
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 637
                echo "   ";
            }
            // line 638
            echo "
   ";
            // line 639
            ob_start();
            // line 640
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["rand" =>             // line 641
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 643
($context["value"] ?? null)],             // line 644
($context["options"] ?? null))]);
            // line 645
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 646
            echo "
   ";
            // line 647
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 647))])], 647, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 650
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 651
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 651)) {
                // line 652
                echo "      ";
                // line 653
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 654
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 657
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 658
                echo "   ";
            }
            // line 659
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 660
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 660), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 660)) {
                // line 661
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 662
                echo "   ";
            }
            // line 663
            echo "
   ";
            // line 664
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 664)) {
                // line 665
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 666
                echo "   ";
            }
            // line 667
            echo "
   ";
            // line 668
            ob_start();
            // line 669
            echo "      ";
            echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), twig_array_merge(["name" =>             // line 670
($context["name"] ?? null), "value" =>             // line 671
($context["value"] ?? null), "rand" =>             // line 672
($context["rand"] ?? null), "width" => "100%"],             // line 674
($context["options"] ?? null)));
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 676
            echo "
   ";
            // line 677
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 678
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 678))])], 678, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 682
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 683
            echo "   ";
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 684
                echo "      ";
                $context["value"] = "&nbsp;";
                // line 685
                echo "   ";
            }
            // line 686
            echo "
   ";
            // line 687
            ob_start();
            // line 688
            echo "      <span class=\"form-control-plaintext\">";
            echo ($context["value"] ?? null);
            echo "</span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 690
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 690, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 693
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 694
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => []],             // line 701
($context["options"] ?? null));
            // line 702
            echo "
   ";
            // line 703
            if (twig_in_filter(($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 703))) {
                // line 704
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true]);
                // line 705
                echo "   ";
            }
            // line 706
            echo "
   ";
            // line 707
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 707)) {
                // line 708
                echo "      ";
                echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
                echo "
   ";
            } else {
                // line 710
                echo "      ";
                $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 710)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 710)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 710))));
                // line 711
                echo "      ";
                $context["field"] = twig_replace_filter(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 712
                echo "      ";
                $context["add_field_html"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 712)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 712)) : (""));
                // line 713
                echo "
      ";
                // line 714
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 714) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 714), "isHiddenField", [0 => ($context["name"] ?? null)], "method", false, false, false, 714))) {
                    // line 715
                    echo "         ";
                    if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 715)) {
                        // line 716
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 716, $context, $this->getSourceContext());
                        echo "
         ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 717
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 717)) {
                        // line 718
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 718, $context, $this->getSourceContext());
                        echo "
         ";
                    } else {
                        // line 720
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 720, $context, $this->getSourceContext());
                        echo "
         ";
                    }
                    // line 722
                    echo "      ";
                }
                // line 723
                echo "   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 726
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 727
            echo "   ";
            ob_start();
            // line 728
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"form-field-ajax\">
         ";
            // line 729
            if ( !(null === ($context["value"] ?? null))) {
                // line 730
                echo "            ";
                echo ($context["value"] ?? null);
                echo "
         ";
            }
            // line 732
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 734
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 734))])], 734, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 737
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 738
            echo "   ";
            $context["options"] = twig_array_merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 739
            echo "
   ";
            // line 740
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 740)) {
                // line 741
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 741, $context, $this->getSourceContext());
                echo "
   ";
            } else {
                // line 743
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 743, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 748
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 749
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-3"],             // line 752
($context["options"] ?? null));
            // line 753
            echo "
   ";
            // line 754
            $context["class"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 754) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 754)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 754)) : ("col-12 col-sm-6"));
            // line 755
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 755)) {
                // line 756
                echo "      ";
                $context["class"] = "col-12";
                // line 757
                echo "   ";
            }
            // line 758
            echo "
   <div class=\"";
            // line 759
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 759), "html", null, true);
            echo "\">
      ";
            // line 760
            echo ($context["field"] ?? null);
            echo "
      ";
            // line 761
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 766
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 767
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "label_class" => "col-xxl-5", "input_class" => "col-xxl-7", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 778
($context["options"] ?? null));
            // line 779
            echo "
   ";
            // line 780
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 780)) {
                // line 781
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 784
                echo "
      ";
                // line 785
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 785)) {
                    // line 786
                    echo "         ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]);
                    // line 790
                    echo "      ";
                }
                // line 791
                echo "   ";
            }
            // line 792
            echo "
   ";
            // line 793
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 793)) {
                // line 794
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-2", "input_class" => "col-10"]);
                // line 798
                echo "   ";
            }
            // line 799
            echo "
   ";
            // line 800
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 800)) {
                // line 801
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => (twig_get_attribute($this->env, $this->source,                 // line 802
($context["options"] ?? null), "label_class", [], "any", false, false, false, 802) . " text-xxl-end")]);
                // line 804
                echo "   ";
            }
            // line 805
            echo "
   ";
            // line 806
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 806))) {
                // line 807
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 807)]);
                // line 808
                echo "   ";
            } else {
                // line 809
                echo "      ";
                $context["extra_attribs"] = "";
                // line 810
                echo "   ";
            }
            // line 811
            echo "
   <div class=\"form-field row ";
            // line 812
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 812), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 812), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 812), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 813
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 813))], 813, $context, $this->getSourceContext());
            echo "
      ";
            // line 814
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 814)) {
                // line 815
                echo "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 816
                echo "      ";
            }
            // line 817
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 817), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["flex_class"] ?? null), "html", null, true);
            echo " field-container\">
         ";
            // line 818
            echo ($context["field"] ?? null);
            echo "
         ";
            // line 819
            echo ($context["add_field_html"] ?? null);
            echo "
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 825
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 826
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 832
($context["options"] ?? null));
            // line 833
            echo "
   ";
            // line 834
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 834)) {
                // line 835
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 838
                echo "   ";
            }
            // line 839
            echo "
   ";
            // line 840
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 840))) {
                // line 841
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 841)]);
                // line 842
                echo "   ";
            } else {
                // line 843
                echo "      ";
                $context["extra_attribs"] = "";
                // line 844
                echo "   ";
            }
            // line 845
            echo "
   <div class=\"form-field ";
            // line 846
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 846), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 846), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 846), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 847
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 847))], 847, $context, $this->getSourceContext());
            echo "
      <div class=\"";
            // line 848
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 848), "html", null, true);
            echo " field-container\">
         ";
            // line 849
            echo ($context["field"] ?? null);
            echo "
      </div>
      ";
            // line 851
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 856
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 857
            echo "    ";
            $context["options"] = twig_array_merge(["locked" => false],             // line 859
($context["options"] ?? null));
            // line 860
            echo "
   ";
            // line 861
            $context["required_mark"] = "";
            // line 862
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 862), "isMandatoryField", [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 862)], "method", false, false, false, 862) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 862))) {
                // line 863
                echo "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 864
                echo "   ";
            }
            // line 865
            echo "
   ";
            // line 866
            $context["helper"] = "";
            // line 867
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 867)) {
                // line 868
                echo "      ";
                ob_start();
                // line 869
                echo "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                // line 870
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 870), "html", null, true);
                echo "\">
            ?
         </span>
      ";
                $context["helper"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 874
                echo "   ";
            }
            // line 875
            echo "
   ";
            // line 876
            $context["locked_mark"] = "";
            // line 877
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 877)) {
                // line 878
                echo "      ";
                ob_start();
                // line 879
                echo "        <i class=\"ti ti-lock\"
           title=\"";
                // line 880
                echo twig_escape_filter($this->env, __("Field will not be updated from inventory"), "html", null, true);
                echo "\"
           data-bs-toggle=\"tooltip\"></i>
      ";
                $context["locked_mark"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 883
                echo "   ";
            }
            // line 884
            echo "
   <label class=\"";
            // line 885
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 886
            echo ($context["label"] ?? null);
            echo "
      ";
            // line 887
            echo ($context["locked_mark"] ?? null);
            echo "
      ";
            // line 888
            echo ($context["required_mark"] ?? null);
            echo "
      ";
            // line 889
            echo ($context["helper"] ?? null);
            echo "
   </label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2828 => 889,  2824 => 888,  2820 => 887,  2816 => 886,  2810 => 885,  2807 => 884,  2804 => 883,  2798 => 880,  2795 => 879,  2792 => 878,  2789 => 877,  2787 => 876,  2784 => 875,  2781 => 874,  2774 => 870,  2771 => 869,  2768 => 868,  2765 => 867,  2763 => 866,  2760 => 865,  2757 => 864,  2754 => 863,  2751 => 862,  2749 => 861,  2746 => 860,  2744 => 859,  2742 => 857,  2726 => 856,  2714 => 851,  2709 => 849,  2705 => 848,  2701 => 847,  2691 => 846,  2688 => 845,  2685 => 844,  2682 => 843,  2679 => 842,  2676 => 841,  2674 => 840,  2671 => 839,  2668 => 838,  2665 => 835,  2663 => 834,  2660 => 833,  2658 => 832,  2656 => 826,  2639 => 825,  2626 => 819,  2622 => 818,  2615 => 817,  2612 => 816,  2609 => 815,  2607 => 814,  2603 => 813,  2593 => 812,  2590 => 811,  2587 => 810,  2584 => 809,  2581 => 808,  2578 => 807,  2576 => 806,  2573 => 805,  2570 => 804,  2568 => 802,  2566 => 801,  2564 => 800,  2561 => 799,  2558 => 798,  2555 => 794,  2553 => 793,  2550 => 792,  2547 => 791,  2544 => 790,  2541 => 786,  2539 => 785,  2536 => 784,  2533 => 781,  2531 => 780,  2528 => 779,  2526 => 778,  2524 => 767,  2507 => 766,  2495 => 761,  2491 => 760,  2485 => 759,  2482 => 758,  2479 => 757,  2476 => 756,  2473 => 755,  2471 => 754,  2468 => 753,  2466 => 752,  2464 => 749,  2448 => 748,  2435 => 743,  2429 => 741,  2427 => 740,  2424 => 739,  2421 => 738,  2408 => 737,  2396 => 734,  2392 => 732,  2386 => 730,  2384 => 729,  2379 => 728,  2376 => 727,  2360 => 726,  2350 => 723,  2347 => 722,  2341 => 720,  2335 => 718,  2333 => 717,  2328 => 716,  2325 => 715,  2323 => 714,  2320 => 713,  2317 => 712,  2314 => 711,  2311 => 710,  2305 => 708,  2303 => 707,  2300 => 706,  2297 => 705,  2294 => 704,  2292 => 703,  2289 => 702,  2287 => 701,  2285 => 694,  2269 => 693,  2257 => 690,  2251 => 688,  2249 => 687,  2246 => 686,  2243 => 685,  2240 => 684,  2237 => 683,  2221 => 682,  2208 => 678,  2206 => 677,  2203 => 676,  2198 => 674,  2197 => 672,  2196 => 671,  2195 => 670,  2193 => 669,  2191 => 668,  2188 => 667,  2185 => 666,  2182 => 665,  2180 => 664,  2177 => 663,  2174 => 662,  2171 => 661,  2168 => 660,  2165 => 659,  2162 => 658,  2159 => 657,  2153 => 654,  2150 => 653,  2148 => 652,  2145 => 651,  2128 => 650,  2117 => 647,  2114 => 646,  2111 => 645,  2109 => 644,  2108 => 643,  2107 => 641,  2105 => 640,  2103 => 639,  2100 => 638,  2097 => 637,  2094 => 636,  2092 => 635,  2089 => 634,  2086 => 633,  2083 => 632,  2080 => 631,  2077 => 630,  2061 => 629,  2050 => 626,  2047 => 625,  2044 => 624,  2042 => 623,  2041 => 621,  2039 => 620,  2037 => 619,  2034 => 618,  2031 => 617,  2028 => 616,  2026 => 615,  2023 => 614,  2020 => 613,  2017 => 612,  2014 => 611,  2011 => 610,  1995 => 609,  1983 => 606,  1980 => 605,  1977 => 604,  1975 => 603,  1972 => 602,  1970 => 601,  1968 => 599,  1953 => 598,  1942 => 595,  1939 => 594,  1936 => 593,  1934 => 592,  1933 => 591,  1932 => 589,  1930 => 588,  1928 => 587,  1925 => 586,  1923 => 585,  1920 => 584,  1917 => 583,  1914 => 582,  1912 => 581,  1909 => 580,  1906 => 579,  1903 => 578,  1900 => 577,  1897 => 576,  1881 => 575,  1870 => 572,  1867 => 571,  1864 => 570,  1862 => 569,  1861 => 567,  1859 => 566,  1857 => 565,  1854 => 564,  1851 => 563,  1848 => 562,  1846 => 561,  1843 => 560,  1840 => 559,  1837 => 558,  1834 => 557,  1831 => 556,  1815 => 555,  1804 => 552,  1801 => 551,  1798 => 550,  1796 => 549,  1795 => 547,  1794 => 546,  1792 => 545,  1790 => 544,  1787 => 543,  1784 => 542,  1781 => 541,  1779 => 540,  1776 => 539,  1773 => 538,  1770 => 537,  1767 => 536,  1764 => 535,  1748 => 534,  1737 => 531,  1734 => 530,  1731 => 529,  1729 => 528,  1728 => 526,  1727 => 525,  1725 => 524,  1723 => 523,  1720 => 522,  1717 => 521,  1714 => 520,  1712 => 519,  1709 => 518,  1706 => 517,  1703 => 516,  1701 => 515,  1698 => 514,  1695 => 513,  1678 => 512,  1667 => 509,  1664 => 508,  1661 => 507,  1659 => 506,  1658 => 504,  1657 => 503,  1655 => 502,  1653 => 501,  1650 => 500,  1647 => 499,  1644 => 498,  1641 => 497,  1638 => 496,  1635 => 495,  1633 => 494,  1630 => 493,  1627 => 492,  1611 => 491,  1599 => 488,  1594 => 486,  1590 => 485,  1586 => 484,  1580 => 483,  1576 => 481,  1573 => 480,  1557 => 479,  1547 => 476,  1545 => 473,  1540 => 472,  1538 => 471,  1535 => 470,  1531 => 468,  1529 => 465,  1526 => 464,  1518 => 461,  1516 => 459,  1515 => 456,  1512 => 455,  1508 => 454,  1505 => 453,  1502 => 452,  1486 => 451,  1474 => 448,  1470 => 446,  1463 => 442,  1459 => 441,  1454 => 440,  1451 => 439,  1447 => 437,  1445 => 436,  1438 => 435,  1430 => 433,  1427 => 432,  1424 => 431,  1421 => 430,  1419 => 429,  1416 => 428,  1413 => 427,  1396 => 426,  1384 => 423,  1381 => 422,  1378 => 421,  1375 => 420,  1370 => 418,  1366 => 417,  1362 => 416,  1358 => 415,  1354 => 414,  1350 => 412,  1347 => 411,  1344 => 410,  1342 => 409,  1341 => 407,  1339 => 405,  1323 => 404,  1311 => 401,  1308 => 400,  1292 => 399,  1280 => 396,  1275 => 394,  1271 => 393,  1267 => 392,  1263 => 391,  1259 => 389,  1256 => 388,  1253 => 387,  1237 => 386,  1225 => 383,  1204 => 365,  1200 => 364,  1196 => 363,  1190 => 362,  1186 => 360,  1183 => 359,  1167 => 358,  1156 => 355,  1153 => 354,  1137 => 343,  1133 => 342,  1129 => 341,  1121 => 336,  1115 => 333,  1108 => 330,  1106 => 329,  1103 => 328,  1100 => 327,  1097 => 326,  1094 => 325,  1078 => 324,  1067 => 321,  1064 => 320,  1048 => 309,  1044 => 308,  1040 => 307,  1033 => 303,  1027 => 300,  1020 => 297,  1018 => 296,  1015 => 295,  1012 => 294,  1009 => 293,  1006 => 292,  990 => 291,  980 => 288,  976 => 286,  974 => 285,  970 => 284,  966 => 283,  962 => 282,  956 => 281,  951 => 280,  949 => 279,  945 => 277,  942 => 276,  939 => 275,  936 => 274,  933 => 273,  930 => 272,  927 => 271,  924 => 270,  922 => 269,  919 => 268,  916 => 267,  913 => 266,  910 => 265,  894 => 264,  877 => 255,  873 => 254,  869 => 253,  863 => 249,  861 => 248,  857 => 247,  854 => 246,  851 => 245,  848 => 244,  845 => 243,  842 => 242,  839 => 241,  837 => 240,  834 => 239,  831 => 238,  828 => 237,  826 => 235,  825 => 234,  824 => 232,  823 => 231,  821 => 230,  818 => 229,  815 => 228,  812 => 227,  810 => 225,  809 => 224,  808 => 222,  806 => 221,  803 => 220,  800 => 219,  798 => 218,  795 => 217,  792 => 216,  790 => 214,  789 => 212,  788 => 211,  786 => 210,  784 => 209,  781 => 208,  774 => 206,  770 => 205,  766 => 204,  758 => 202,  756 => 201,  754 => 200,  751 => 199,  748 => 198,  745 => 197,  742 => 196,  740 => 195,  737 => 194,  735 => 193,  733 => 187,  717 => 186,  705 => 182,  701 => 180,  695 => 178,  691 => 176,  689 => 175,  686 => 174,  683 => 173,  680 => 172,  664 => 171,  652 => 167,  642 => 165,  635 => 164,  629 => 163,  625 => 162,  621 => 161,  617 => 160,  611 => 159,  607 => 157,  605 => 156,  602 => 155,  599 => 154,  596 => 153,  594 => 152,  591 => 151,  588 => 150,  585 => 149,  583 => 148,  580 => 147,  564 => 146,  553 => 142,  550 => 141,  546 => 139,  540 => 137,  538 => 136,  534 => 135,  530 => 134,  526 => 133,  522 => 132,  518 => 131,  514 => 130,  511 => 129,  509 => 128,  506 => 127,  503 => 126,  500 => 125,  497 => 124,  481 => 123,  470 => 119,  467 => 118,  462 => 116,  458 => 115,  454 => 114,  450 => 113,  446 => 112,  441 => 111,  439 => 110,  436 => 109,  433 => 108,  430 => 107,  427 => 106,  411 => 105,  400 => 101,  397 => 100,  391 => 98,  388 => 97,  384 => 96,  380 => 95,  376 => 94,  370 => 93,  364 => 91,  362 => 90,  359 => 89,  356 => 88,  353 => 87,  350 => 86,  347 => 85,  331 => 84,  320 => 80,  317 => 79,  314 => 78,  311 => 77,  308 => 76,  305 => 75,  301 => 74,  298 => 73,  295 => 72,  278 => 71,  263 => 65,  257 => 62,  254 => 61,  252 => 60,  248 => 59,  243 => 57,  240 => 56,  237 => 55,  223 => 54,  208 => 48,  202 => 45,  199 => 44,  197 => 43,  193 => 42,  188 => 40,  185 => 39,  182 => 38,  179 => 37,  176 => 36,  173 => 35,  158 => 34,  152 => 854,  148 => 823,  144 => 764,  140 => 746,  137 => 736,  134 => 725,  131 => 692,  128 => 681,  125 => 649,  122 => 628,  119 => 608,  116 => 597,  113 => 574,  110 => 554,  107 => 533,  104 => 511,  101 => 490,  98 => 478,  95 => 450,  92 => 425,  89 => 403,  86 => 398,  83 => 385,  80 => 357,  77 => 323,  74 => 290,  71 => 263,  67 => 184,  63 => 169,  59 => 144,  55 => 121,  51 => 103,  47 => 82,  44 => 70,  41 => 53,  38 => 33,);
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

{% macro largeTitle(label, icon = '', first = false) %}
   {% set margins = 'mt-3' %}
   {% if first %}
      {% set margins = 'mt-n2' %}
   {% endif %}

   <div class=\"card border-0 shadow-none p-0 m-0 {{ margins }}\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title {{ icon|length ? 'ms-4' : '' }}\">
            {% if icon|length %}
               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x {{ icon }}\"></i>
               </div>
            {% endif %}
            {{ label }}
         </h4>
      </div>
   </div>
{% endmacro %}

{% macro smallTitle(label, icon = '') %}
   {% set margins = 'mt-2 mb-2' %}

   <div class=\"card border-0 shadow-none p-0 m-0 {{ margins }}\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle {{ icon|length ? 'ms-4' : '' }}\">
            {% if icon|length %}
               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x {{ icon }}\"></i>
               </div>
            {% endif %}
            {{ label }}
         </h4>
      </div>
   </div>
{% endmacro %}

{% macro autoNameField(name, item, label = '', withtemplate, options = {}) %}
   {% set tpl_value = option.value|length > 0 ? option.value : item.fields[name]|verbatim_value %}
   {% set tplmark = '' %}
   {% if item.isTemplate() %} {# TODO exluded types #}
      {% set tplmark = item.getAutofillMark(name, {'withtemplate': withtemplate}, tpl_value) %}
   {% endif %}
   {% set value = call('autoName', [item.fields[name]|verbatim_value, name, (withtemplate == 2), item.getType(), item.fields['entities_id']]) %}
   {% set label = __('%1\$s%2\$s')|format(label, tplmark) %}

   {{ _self.textField(name, value, label, options) }}
{% endmacro %}


{% macro textField(name, value, label = '', options = {}) %}
   {% set options = {'type': 'text'}|merge(options) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% set field %}
      <input type=\"{{ options.type }}\" id=\"%id%\"
             class=\"form-control\"
             name=\"{{ name }}\" value=\"{{ value|verbatim_value }}\"
             {{ options.maxlenght ? 'maxlenght=' ~ options.maxlenght : '' }}
             {{ options.readonly ? 'readonly' : '' }}
             {{ options.disabled ? 'disabled' : '' }}
             {{ options.multiple ? 'multiple' : '' }} {# Only for emailField #}
             {{ options.required ? 'required' : '' }} />
   {% endset %}

   {{ _self.field(name, field, label, options) }}
{% endmacro %}


{% macro checkboxField(name, value, label = '', options = {}) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% set field %}
      <input type=\"hidden\"   name=\"{{ name }}\" value=\"0\" />
      <input type=\"checkbox\" name=\"{{ name }}\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             {{ value == 1 ? 'checked' : '' }}
             {{ options.readonly ? 'readonly' : '' }}
             {{ options.required ? 'required' : '' }}
             {{ options.disabled ? 'disabled' : '' }} />
   {% endset %}

   {{ _self.field(name, field, label, options) }}
{% endmacro %}


{% macro sliderField(name, value, label = '', options = {}) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% set field %}
      <label class=\"form-check form-switch pt-2\">
         <input type=\"hidden\"   name=\"{{ name }}\" value=\"0\" />
         <input type=\"checkbox\" name=\"{{ name }}\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
                {{ value == 1 ? 'checked' : '' }}
                {{ options.readonly ? 'readonly' : '' }}
                {{ options.required ? 'required' : '' }}
                {{ options.disabled ? 'disabled' : '' }} />
         {% if options.label2 %}
            <span class=\"form-check-label\">{{ options.label2 }}</span>
         {% endif %}
      </label>
   {% endset %}

   {{ _self.field(name, field, label, options) }}
{% endmacro %}


{% macro numberField(name, value, label = '', options = {}) %}
   {% if options.step != 'any' and options.step|round(0, 'floor') != options.step %}
      {# Only format number if not a whole number #}
      {% set value = call('Html::formatNumber', [value, true]) %}
   {% endif %}

   {% if value == \"\" %}
      {% set value = (options.min is defined ? options.min : 0) %}
   {% endif %}

   {% set field %}
      <input type=\"number\" id=\"%id%\"
             class=\"form-control\"
             name=\"{{ name }}\" value=\"{{ value }}\"
         {{ options.readonly ? 'readonly' : '' }}
         {{ options.disabled ? 'disabled' : '' }}
         {{ options.required ? 'required' : '' }}
         {% if options.min is defined %}min=\"{{ options.min }}\"{% endif %}
         {% if options.max is defined %}max=\"{{ options.max }}\"{% endif %}
         {% if options.step is defined %}step=\"{{ options.step }}\"{% endif %} />
   {% endset %}
   {{ _self.field(name, field, label, options) }}
{% endmacro %}


{% macro readOnlyField(name, value, label = '', options = {}) %}
   {% set options = options|merge({'readonly': true}) %}
   {% set value %}
      <span class=\"form-control\" readonly>
         {% if value|length == 0 %}
            &nbsp;
         {% else %}
            {{ value|verbatim_value }}
         {% endif %}
      </span>
   {% endset %}
   {{ _self.field(name, value, label, options) }}
{% endmacro %}


{% macro textareaField(name, value, label = '', options = {}) %}
   {% set options = {
      'rand': random(),
      'enable_richtext': false,
      'enable_images': true,
      'enable_fileupload': false,
      'uploads': []
   }|merge(options) %}

   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}
   {% set id = options.id|length > 0 ? options.id : (name ~ '_' ~ options.rand) %}

   {% set field %}
      {# 100% width is here to prevent width issues with tinymce #}
      <textarea class=\"form-control\" id=\"{{ id }}\" name=\"{{ name }}\" rows=\"3\"
                style=\"width: 100%;\"
                {{ options.disabled ? 'disabled' : '' }}
                {{ options.readonly ? 'readonly' : '' }}
                {{ options.required ? 'required' : '' }}>{{ options.enable_richtext ? value|safe_html|escape : value|verbatim_value }}</textarea>
   {% endset %}

   {% if options.enable_richtext %}
      {% do call('Html::initEditorSystem', [
         id,
         options.rand,
         true,
         options.disabled|default(false)
      ]) %}
   {% endif %}

   {% set add_html = '' %}
   {% if not options.readonly and options.enable_fileupload %}
      {% set add_html %}
         {% do call('Html::file', [{
             'editor_id': id,
             'multiple': true,
             'uploads': options.uploads,
             'required': options.fields_template.isMandatoryField('_documents_id')
         }]) %}
      {% endset %}
   {% elseif not options.readonly and not options.enable_fileupload and options.enable_richtext and options.enable_images %}
      {% set add_html %}
         {% do call('Html::file', [{
             'editor_id': id,
             'name': name,
             'only_uploaded_files': true,
             'uploads': options.uploads,
             'required': options.fields_template.isMandatoryField('_documents_id')
         }]) %}
      {% endset %}
   {% endif %}

   {% if add_html != '' %}
      {% if options.add_field_html is defined %}
         {% set add_html = add_html ~ options.add_field_html %}
      {% endif %}
      {% set options = options|merge({'add_field_html': add_html}) %}
   {% endif %}

   {{ _self.field(name, field, label, options) }}
   {% if options.enable_mentions and config('use_notifications') %}
      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('{{ id }}'),
                  {{ session('glpiactive_entity') }},
                  '{{ idor_token('User', {'right': 'all', 'entity_restrict': session('glpiactive_entity')}) }}'
               );
               user_mention.register();
            }
         )
      </script>
   {% endif %}
{% endmacro %}

{% macro flatpickrHtmlInput(name, value, label = '', options = {}) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% if options.checkIsExpired %}
      {% if value|date('Y-m-d H:i:s') < \"now\"|date('Y-m-d H:i:s') %}
         {% set class = 'warn' %}
      {% endif %}
   {% else %}
      {% set class = '' %}
   {% endif %}

   <div class=\"input-group flex-grow-1 flatpickr\" id=\"{{ options.id }}\">
      {# .rounded-start added to prevent issue with bootstrap .input-group #}
      {# the first element is an input[type=hidden] added by flatpickr and so we don't have border-radius on the start #}
      <input type=\"text\" class=\"form-control rounded-start ps-2 {{ class }}\" data-input
             name=\"{{ name }}\" value=\"{{ value|verbatim_value }}\"
             {{ options.required ? 'required' : '' }}
             {{ options.readonly ? 'readonly' : '' }}
             {{ options.disabled ? 'disabled' : '' }} />
      {% if not options.readonly %}
         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      {% endif %}
   </div>
{% endmacro %}

{% macro dateField(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}
   {% set options = {'id': name|slug ~ '_' ~ options.rand}|merge(options) %}
   {% set locale = get_current_locale() %}

   {% set field %}
      {{ _self.flatpickrHtmlInput(name, value, label, options) }}
      <script>
      \$(function() {
         \$(\"#{{ options.id }}\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '{{ call('Toolbox::getDateFormat', ['js']) }}',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            allowInput: {{ options.readonly ? 'false' : 'true' }},
            clickOpens: {{ options.readonly ? 'false' : 'true' }},
            locale: getFlatPickerLocale(\"{{ locale['language'] }}\", \"{{ locale['region'] }}\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   {% endset %}

   {{ _self.field(name, field, label, options) }}
{% endmacro %}

{% macro datetimeField(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}
   {% set options = {'id': name|slug ~ '_' ~ options.rand}|merge(options) %}
   {% set locale = get_current_locale() %}

   {% set field %}
      {{ _self.flatpickrHtmlInput(name, value, label, options) }}
      <script>
      \$(function() {
         \$('#{{ options.id }}').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '{{ call('Toolbox::getDateFormat', ['js']) }} H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            allowInput: {{ options.readonly ? 'false' : 'true' }},
            clickOpens: {{ options.readonly ? 'false' : 'true' }},
            locale: getFlatPickerLocale('{{ locale['language'] }}', '{{ locale['region'] }}'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   {% endset %}

   {{ _self.field(name, field, label, options) }}
{% endmacro %}

{% macro colorField(name, value, label = '', options = {}) %}
   {% set field %}
      <input id=\"%id%\"
             class=\"form-control\"
             name=\"{{ name }}\" value=\"{{ value|verbatim_value }}\"
         {{ options.readonly ? 'readonly' : '' }}
         {{ options.disabled ? 'disabled' : '' }}
         {{ options.required ? 'required' : '' }} />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            change: function(color) {
                if (color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   {% endset %}
   {{ _self.field(name, field, label, options) }}
{% endmacro %}

{% macro passwordField(name, value, label = '', options = {}) %}
   {% set options = {'autocomplete': 'new-password'}|merge(options) %}
   {% set field %}
      <input type=\"password\" id=\"%id%\"
             class=\"form-control\"
             name=\"{{ name }}\"
         {{ options.readonly ? 'readonly' : '' }}
         {{ options.disabled ? 'disabled' : '' }}
         {{ options.required ? 'required' : '' }} />
   {% endset %}
   {{ _self.field(name, field, label, options) }}
{% endmacro %}

{% macro emailField(name, value, label = '', options = {}) %}
   {% set options = {'type': 'email'}|merge(options) %}
   {{ _self.textField(name, value, label, options) }}
{% endmacro %}

{% macro fileField(name, value, label = '', options = {}) %}
   {% set options = {
      'rand': random(),
      'name': name,
      'simple': false,
   }|merge(options) %}
   {% set field %}
      {% if options.simple %}
        <input type=\"file\" id=\"%id%\"
               class=\"form-control\"
               name=\"{{ name }}\"
               {{ options.mulitple ? 'multiple' : '' }}
               {{ options.readonly ? 'readonly' : '' }}
               {{ options.disabled ? 'disabled' : '' }}
               {{ options.required ? 'required' : '' }} />
      {% else %}
        {% do call('Html::file', [options]) %}
      {% endif %}
   {% endset %}
   {{ _self.field(name, field, label, options) }}
{% endmacro %}

{% macro imageField(name, value, label = '', options = {}, link_options = {}) %}
   {% set field %}
      <div class=\"img-overlay-wrapper position-relative\">
         {% set clearable = options['clearable'] %}
         {% set url = options['url'] ?? null %}
         {% set options = options|filter((v, k) => k != 'url' and k != 'clearable') %}
         {% if url is not empty %}
            <a href=\"{{ url }}\" {{ call('Html::parseAttributes', [link_options]) }}>
         {% endif %}
               <img src=\"{{ value|verbatim_value }}\" {{ call('Html::parseAttributes', [options]) }} />
         {% if url is not empty %}
            </a>
         {% endif %}
         {% if clearable %}
            <input type=\"hidden\" name=\"_blank_{{ name }}\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"{{ __('Delete') }}\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_{{ name }}\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         {% endif %}
      </div>
   {% endset %}
   {{ _self.field(name, field, label, options) }}
{% endmacro %}

{% macro imageGalleryField(name, value, label = '', options = {}) %}
   {% set field %}
      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         {% for i, picture in value %}
            <div style=\"position: relative; width: fit-content\">
               {{ _self.imageField(name ~ '_' ~ i, picture, '', {
                  'style': 'max-width: 300px; max-height: 150px',
                  'class': 'picture_square',
                  'clearable': options['clearable'],
                  'no_label': true,
               }) }}
            </div>
         {% endfor %}
      </div>
      {{ _self.fileField(name, null, '', {
         'onlyimages': true,
         'multiple': true,
      }) }}
   {% endset %}

   {% set id = options.id|length > 0 ? options.id : (name ~ '_' ~ options.rand) %}
   {{ _self.label(label, id, options) }}
   {{ _self.field(name, field, label, options|merge({
      'full_width': true,
      'no_label': true
   })) }}
{% endmacro %}

{% macro hiddenField(name, value, label = '', options = {}) %}
   {% set field %}
      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control\"
             name=\"{{ name }}\" value=\"{{ value|verbatim_value }}\"
         {{ options.readonly ? 'readonly' : '' }}
         {{ options.disabled ? 'disabled' : '' }}
         {{ options.required ? 'required' : '' }} />
   {% endset %}
   {{ _self.field(name, field, label, options) }}
{% endmacro %}

{% macro dropdownNumberField(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}

   {% if options.disabled %}
      {% set options = options|merge({specific_tags: {'disabled': 'disabled'}}) %}
   {% endif %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'specific_tags': {'required': true}}|merge(options) %}
   {% endif %}

   {% set field %}
      {% do call('Dropdown::showNumber', [name, {
         'value': value,
         'rand': rand,
         'width': '100%',
      }|merge(options)]) %}
   {% endset %}

   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownArrayField(name, value, elements, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}

   {% if options.disabled %}
      {% set options = options|merge({specific_tags: {'disabled': 'disabled'}}) %}
   {% endif %}

   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% set field %}
      {% do call('Dropdown::showFromArray', [name, elements, {
         'value': value|verbatim_value,
         'rand': rand,
         'width': '100%',
      }|merge(options)]) %}
   {% endset %}

   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownTimestampField(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% if options.disabled %}
      {% set options = options|merge({specific_tags: {'disabled': 'disabled'}}) %}
   {% endif %}

   {% set field %}
      {% do call('Dropdown::showTimestamp', [name, {
         'value': value,
         'rand': rand,
         'width': '100%',
      }|merge(options)]) %}
   {% endset %}

   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownYesNo(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% if options.disabled %}
      {% set options = options|merge({specific_tags: {'disabled': 'disabled'}}) %}
   {% endif %}

   {% set field %}
      {% do call('Dropdown::showYesNo', [name, value, -1, {
         'rand': rand,
         'width': '100%',
      }|merge(options)]) %}
   {% endset %}

   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownItemTypes(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% if options.disabled %}
      {% set options = options|merge({specific_tags: {'disabled': 'disabled'}}) %}
   {% endif %}

   {% set types = options['types']|default([]) %}

   {% set field %}
      {% do call('Dropdown::showItemTypes', [name, types, {
         'rand': rand,
         'width': '100%',
         'value': value
      }|merge(options)]) %}
   {% endset %}

   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownItemsFromItemtypes(name, label = '', options = {}) %}
   {% set options = {
      'rand': random()
   }|merge(options) %}

   {% set field %}
      {% do call('Dropdown::showSelectItemFromItemtypes', [options]) %}
   {% endset %}
   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownIcons(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% if options.disabled %}
      {% set options = options|merge({specific_tags: {'disabled': 'disabled'}}) %}
   {% endif %}

   {% set field %}
      {% do call('Dropdown::dropdownIcons', [name, value, constant('GLPI_ROOT') ~ '/pics/icones', {
         'rand': rand,
         'width': '100%',
      }|merge(options)]) %}
   {% endset %}

   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownHoursField(name, value, label = '', options = {}) %}
   {% set options = {'rand': random()}|merge(options) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'required': true}|merge(options) %}
   {% endif %}

   {% if options.disabled %}
      {% set options = options|merge({specific_tags: {'disabled': 'disabled'}}) %}
   {% endif %}

   {% set field %}
      {% do call('Dropdown::showHours', [name, {
         'rand': rand,
         'width': '100%',
         'value': value
      }|merge(options)]) %}
   {% endset %}

   {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro dropdownField(itemtype, name, value, label = '', options = {}) %}
   {% if options.multiple %}
      {# Needed for empty value as the input wont be sent in this case... we need something to know the input was displayed AND empty #}
      {% set defined_input_name = \"_#{name}_defined\" %}
      <input type=\"hidden\" name=\"{{ defined_input_name }}\" value=\"1\"></input>

      {# Multiple values will be set, input need to be an array #}
      {% set name = \"#{name}[]\" %}
   {% endif %}
   {% set options = {'rand': random()}|merge(options) %}
   {% if options.fields_template.isMandatoryField(name) %}
      {% set options = {'specific_tags': {'required': true}}|merge(options) %}
   {% endif %}

   {% if options.disabled %}
      {% set options = options|merge({'specific_tags': {'disabled': 'disabled'}}) %}
   {% endif %}

   {% set field %}
      {{ itemtype|itemtype_dropdown({
         'name': name,
         'value': value,
         'rand': rand,
         'width': '100%',
      }|merge(options)) }}
   {% endset %}

   {% if field|trim is not empty %}
      {{ _self.field(name, field, label, options|merge({'id': 'dropdown_' ~ name ~ '_' ~ options.rand})) }}
   {% endif %}
{% endmacro %}

{% macro htmlField(name, value, label = '', options = {}) %}
   {% if value|length == 0 %}
      {% set value = '&nbsp;' %}
   {% endif %}

   {% set value %}
      <span class=\"form-control-plaintext\">{{ value|raw }}</span>
   {% endset %}
   {{ _self.field(name, value, label, options) }}
{% endmacro %}

{% macro field(name, field, label = '', options = {}) %}
   {% set options = {
      'rand': random(),
      'is_horizontal': true,
      'include_field': true,
      'add_field_html': '',
      'locked': false,
      'locked_fields': [],
   }|merge(options) %}

   {% if name in options.locked_fields %}
      {% set options = options|merge({'locked': true}) %}
   {% endif %}

   {% if not options.include_field %}
      {{ field }}
   {% else %}
      {% set id    = options.id|length > 0 ? options.id : (name ~ '_' ~ options.rand) %}
      {% set field = field|replace({'%id%': id}) %}
      {% set add_field_html = options.add_field_html|length > 0 ? options.add_field_html : '' %}

      {% if options.fields_template is not defined or not options.fields_template.isHiddenField(name) %}
         {% if options.no_label %}
            {{ _self.noLabelField(field, id, add_field_html, options) }}
         {% elseif options.is_horizontal %}
            {{ _self.horizontalField(label, field, id, add_field_html, options|merge({'name': name})) }}
         {% else %}
            {{ _self.verticalField(label, field, id, add_field_html, options|merge({'name': name})) }}
         {% endif %}
      {% endif %}
   {% endif %}
{% endmacro %}

{% macro ajaxField(id, value, label = '', options = {}) %}
   {% set field %}
      <div id=\"{{ id }}\" class=\"form-field-ajax\">
         {% if value is not null %}
            {{ value|raw }}
         {% endif %}
      </div>
   {% endset %}
   {{ _self.field(id, field, label, options|merge({'id': id ~ '_' ~ options.rand})) }}
{% endmacro %}

{% macro nullField(options = {}) %}
   {% set options = {'is_horizontal': true}|merge(options) %}

   {% if options.is_horizontal %}
      {{ _self.horizontalField(label, field, id, add_field_html, options) }}
   {% else %}
      {{ _self.verticalField(label, field, id, add_field_html, options) }}
   {% endif %}
{% endmacro %}


{% macro noLabelField(field, id = '', add_field_html = '', options = {}) %}
   {% set options = {
      'full_width': false,
      'mb': 'mb-3',
   }|merge(options) %}

   {% set class = options.field_class ?? 'col-12 col-sm-6' %}
   {% if options.full_width %}
      {% set class = 'col-12' %}
   {% endif %}

   <div class=\"{{ class }} {{ options.mb }}\">
      {{ field|raw }}
      {{ add_field_html|raw }}
   </div>
{% endmacro %}


{% macro horizontalField(label, field, id, add_field_html = '', options = {}) %}
   {% set options = {
      'full_width': false,
      'full_width_adapt_column': true,
      'align_label_right': true,
      'mb': 'mb-2',
      'field_class': 'col-12 col-sm-6',
      'label_class': 'col-xxl-5',
      'input_class': 'col-xxl-7',
      'add_field_class': '',
      'add_field_attribs': {},
      'center': false,
   }|merge(options) %}

   {% if options.full_width %}
      {% set options = options|merge({
         field_class: 'col-12',
      }) %}

      {% if options.full_width_adapt_column %}
         {% set options = options|merge({
            label_class: 'col-xxl-4',
            input_class: 'col-xxl-8',
      }) %}
      {% endif %}
   {% endif %}

   {% if options.icon_label %}
      {% set options = options|merge({
         label_class: 'col-2',
         input_class: 'col-10',
      }) %}
   {% endif %}

   {% if options.align_label_right %}
      {% set options = options|merge({
         label_class: options.label_class ~ ' text-xxl-end',
      }) %}
   {% endif %}

   {% if options.add_field_attribs is not empty %}
      {% set extra_attribs = call('Html::parseAttributes', {options: options.add_field_attribs}) %}
   {% else %}
      {% set extra_attribs = '' %}
   {% endif %}

   <div class=\"form-field row {{ options.field_class }} {{ options.add_field_class }} {{ options.mb }}\" {{ extra_attribs|raw }}>
      {{ _self.label(label, id, options, 'col-form-label ' ~ options.label_class) }}
      {% if options.center %}
         {% set flex_class = \"d-flex align-items-center\" %}
      {% endif %}
      <div class=\"{{ options.input_class }} {{ flex_class }} field-container\">
         {{ field|raw }}
         {{ add_field_html|raw }}
      </div>
   </div>
{% endmacro %}


{% macro verticalField(label, field, id, add_field_html = '', options = {}) %}
   {% set options = {
      'full_width': false,
      'mb': 'mb-2',
      'field_class': 'col-12 col-sm-6',
      'add_field_class': '',
      'add_field_attribs': {},
   }|merge(options) %}

   {% if options.full_width %}
      {% set options = options|merge({
         field_class: 'col-12',
      }) %}
   {% endif %}

   {% if options.add_field_attribs is not empty %}
      {% set extra_attribs = call('Html::parseAttributes', {options: options.add_field_attribs}) %}
   {% else %}
      {% set extra_attribs = '' %}
   {% endif %}

   <div class=\"form-field {{ options.field_class }} {{ options.add_field_class }} {{ options.mb }}\" {{ extra_attribs|raw }}>
      {{ _self.label(label, id, options, 'col-form-label ' ~ options.label_class) }}
      <div class=\"{{ options.input_class }} field-container\">
         {{ field|raw }}
      </div>
      {{ add_field_html|raw }}
   </div>
{% endmacro %}


{% macro label(label, id, options = {}, class = 'form-label') %}
    {% set options = {
        locked: false
    }|merge(options) %}

   {% set required_mark = '' %}
   {% if options.fields_template.isMandatoryField(options.name) or options.required %}
      {% set required_mark = '<span class=\"required\">*</span>' %}
   {% endif %}

   {% set helper = '' %}
   {% if options.helper %}
      {% set helper %}
         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"{{ options.helper }}\">
            ?
         </span>
      {% endset %}
   {% endif %}

   {% set locked_mark = '' %}
   {% if options.locked %}
      {% set locked_mark %}
        <i class=\"ti ti-lock\"
           title=\"{{ __('Field will not be updated from inventory') }}\"
           data-bs-toggle=\"tooltip\"></i>
      {% endset %}
   {% endif %}

   <label class=\"{{ class }}\" for=\"{{ id }}\">
      {{ label|raw }}
      {{ locked_mark|raw }}
      {{ required_mark|raw }}
      {{ helper|raw }}
   </label>
{% endmacro %}
", "components/form/fields_macros.html.twig", "/var/www/html/glpi/templates/components/form/fields_macros.html.twig");
    }
}
