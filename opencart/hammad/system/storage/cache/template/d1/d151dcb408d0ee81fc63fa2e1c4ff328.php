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

/* catalog/view/template/account/address_form.twig */
class __TwigTemplate_2a0e37804d125ada62198ed553183a78 extends Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-address\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["text_address"] ?? null);
        echo "</h1>
      <form id=\"form-address\" action=\"";
        // line 11
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 14
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 16
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 21
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 23
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-company\" class=\"col-sm-2 col-form-label\">";
        // line 28
        echo ($context["entry_company"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 30
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-address-1\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"address_1\" value=\"";
        // line 36
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-address-1\" class=\"form-control\"/>
              <div id=\"error-address-1\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-address-2\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"address_2\" value=\"";
        // line 43
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-address-2\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-city\" class=\"col-sm-2 col-form-label\">";
        // line 47
        echo ($context["entry_city"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"city\" value=\"";
        // line 49
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city\" class=\"form-control\"/>
              <div id=\"error-city\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-postcode\" class=\"col-sm-2 col-form-label\">";
        // line 54
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"postcode\" value=\"";
        // line 56
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\"/>
              <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 61
        echo ($context["entry_country"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"country_id\" id=\"input-country\" class=\"form-select\">
                <option value=\"0\">";
        // line 64
        echo ($context["text_select"] ?? null);
        echo "</option>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 66
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 66);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 66) == ($context["country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 66);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "              </select>
              <div id=\"error-country\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 73
        echo ($context["entry_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\"></select>
              <div id=\"error-zone\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 81
            echo "
            ";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 82) == "select")) {
                // line 83
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 83)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 84);
                echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                echo "\" class=\"form-select\">
                    <option value=\"\">";
                // line 87
                echo ($context["text_select"] ?? null);
                echo "</option>
                    ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 88));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 89
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 89);
                    echo "\"";
                    if (((($__internal_compile_0 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 89) == (($__internal_compile_1 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89)] ?? null) : null)))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 89);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                  </select>
                  <div id=\"error-custom-field-";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 96
            echo "
            ";
            // line 97
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 97) == "radio")) {
                // line 98
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 98)) {
                    echo " required";
                }
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 99);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                echo "\">
                    ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 102));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 103
                    echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_2 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104) == (($__internal_compile_3 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 112
            echo "
            ";
            // line 113
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 113) == "checkbox")) {
                // line 114
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 114)) {
                    echo " required";
                }
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                echo "\">
                    ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 119
                    echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_4 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120), (($__internal_compile_5 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 120);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 128
            echo "
            ";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "text")) {
                // line 130
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 130)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "]\" value=\"";
                if ((($__internal_compile_6 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) {
                    echo (($__internal_compile_7 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 133);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 138
            echo "
            ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 139) == "textarea")) {
                // line 140
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 140)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 143);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_8 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null)) {
                    echo (($__internal_compile_9 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 143);
                }
                echo "</textarea>
                  <div id=\"error-custom-field-";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 148
            echo "
            ";
            // line 149
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 149) == "file")) {
                // line 150
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 150)) {
                    echo " required";
                }
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 154
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null)) {
                    echo (($__internal_compile_11 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null);
                }
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                echo "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 161
            echo "
            ";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 162) == "date")) {
                // line 163
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 163)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "]\" value=\"";
                if ((($__internal_compile_12 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) {
                    echo (($__internal_compile_13 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 167);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 174
            echo "
            ";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 175) == "time")) {
                // line 176
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 176)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) {
                    echo (($__internal_compile_15 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 180);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 187
            echo "
            ";
            // line 188
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 188) == "datetime")) {
                // line 189
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 189)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 190);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null)) {
                    echo (($__internal_compile_17 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 193);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 193);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 200
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 204
        echo ($context["entry_default"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" id=\"input-default-yes\" class=\"form-check-input\"";
        // line 207
        if (($context["default"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-default-yes\" class=\"form-check-label\">";
        echo ($context["text_yes"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" id=\"input-default-no\" class=\"form-check-input\"";
        // line 210
        if ( !($context["default"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-default-no\" class=\"form-check-label\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"";
        // line 217
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 220
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 224
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 225
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
        // line 232
        echo ($context["language"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function (json) {
            if (json['postcode_required'] == '1') {
                \$('#input-postcode').parent().parent().addClass('required');
            } else {
                \$('#input-postcode').parent().parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 249
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 255
        echo ($context["zone_id"] ?? null);
        echo "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 262
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 275
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/address_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 275,  774 => 262,  764 => 255,  755 => 249,  735 => 232,  725 => 225,  721 => 224,  714 => 220,  706 => 217,  692 => 210,  682 => 207,  676 => 204,  672 => 202,  665 => 200,  658 => 196,  642 => 193,  634 => 190,  627 => 189,  625 => 188,  622 => 187,  615 => 183,  599 => 180,  591 => 177,  584 => 176,  582 => 175,  579 => 174,  572 => 170,  556 => 167,  548 => 164,  541 => 163,  539 => 162,  536 => 161,  529 => 157,  518 => 155,  506 => 154,  500 => 151,  493 => 150,  491 => 149,  488 => 148,  481 => 144,  467 => 143,  460 => 141,  453 => 140,  451 => 139,  448 => 138,  441 => 134,  427 => 133,  420 => 131,  413 => 130,  411 => 129,  408 => 128,  401 => 124,  398 => 123,  377 => 120,  374 => 119,  370 => 118,  366 => 117,  361 => 115,  354 => 114,  352 => 113,  349 => 112,  342 => 108,  339 => 107,  318 => 104,  315 => 103,  311 => 102,  307 => 101,  302 => 99,  295 => 98,  293 => 97,  290 => 96,  283 => 92,  280 => 91,  265 => 89,  261 => 88,  257 => 87,  251 => 86,  244 => 84,  237 => 83,  235 => 82,  232 => 81,  228 => 80,  218 => 73,  211 => 68,  196 => 66,  192 => 65,  188 => 64,  182 => 61,  172 => 56,  167 => 54,  157 => 49,  152 => 47,  143 => 43,  138 => 41,  128 => 36,  123 => 34,  114 => 30,  109 => 28,  99 => 23,  94 => 21,  84 => 16,  79 => 14,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/address_form.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\catalog\\view\\template\\account\\address_form.twig");
    }
}
