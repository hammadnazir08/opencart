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

/* admin/view/template/sale/order_info.twig */
class __TwigTemplate_78226428938e2e4b0e8f1a26fb8b0972 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><a href=\"";
        // line 5
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["order_id"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"";
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["shipping_code"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa-solid fa-truck\"></i></a> <a href=\"";
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 16
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 23
        echo ($context["text_invoice"] ?? null);
        echo "</strong>
                  <br/>
                  <span id=\"invoice-value\">";
        // line 25
        echo ($context["invoice_prefix"] ?? null);
        echo ($context["invoice_no"] ?? null);
        echo "</span>
                </div>
              </div>
              ";
        // line 28
        if ( !($context["invoice_no"] ?? null)) {
            // line 29
            echo "                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        } else {
            // line 31
            echo "                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        }
        // line 33
        echo "            </div>
          </div>

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 39
        echo ($context["text_customer"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 41
        if (($context["customer_id"] ?? null)) {
            // line 42
            echo "                    <div id=\"customer-value\"><a href=\"index.php?route=customer/customer.form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["customer_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</a></div>
                  ";
        } else {
            // line 44
            echo "                    <div id=\"customer-value\">";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</div>
                  ";
        }
        // line 46
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

          <div class=\"col\">
            <div class=\"form-control p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
        // line 54
        echo ($context["text_date_added"] ?? null);
        echo "</strong>
                <br/>
                ";
        // line 56
        echo ($context["date_added"] ?? null);
        echo "
              </div>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-start\">";
        // line 65
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 66
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 67
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 68
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 69
        echo ($context["column_total"] ?? null);
        echo "</td>
              <td class=\"text-end\" style=\"width: 1px;\">";
        // line 70
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody id=\"order-products\">
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
            // line 75
            echo "              <tr>
                <td class=\"text-start\"><a href=\"index.php?route=catalog/product.form&user_token=";
            // line 76
            echo ($context["user_token"] ?? null);
            echo "&product_id=";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 76);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 76);
            echo "</a>

                  ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 78)) {
                // line 79
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 80
                    echo "                      <br/>
                      ";
                    // line 81
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 81) != "file")) {
                        // line 82
                        echo "                      <small> - ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 82);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 82);
                        echo "</small> ";
                    } else {
                        // line 83
                        echo "                      <small> - ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 83);
                        echo ": <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 83);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 83);
                        echo "</a></small> ";
                    }
                    // line 84
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                  ";
            }
            // line 86
            echo "
                  ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 87)) {
                // line 88
                echo "                    <br/>
                    <small> - ";
                // line 89
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 89);
                echo "</small>
                  ";
            }
            // line 91
            echo "
                  ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 92)) {
                // line 93
                echo "                    <br/>
                    <small> - ";
                // line 94
                echo ($context["text_subscription"] ?? null);
                echo ": <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 94);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription_description", [], "any", false, false, false, 94);
                echo "</a></small>
                  ";
            }
            // line 96
            echo "
                </td>
                <td class=\"text-start\">";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 98);
            echo "</td>
                <td class=\"text-end\">";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 99);
            echo "</td>
                <td class=\"text-end\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 100);
            echo "</td>
                <td class=\"text-end\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 101);
            echo "</td>
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 104
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "cart_id", [], "any", false, false, false, 105);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "          </tbody>
          <tbody id=\"order-vouchers\">
            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
            // line 113
            echo "              <tr>
                <td class=\"text-start\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 114);
            echo "</td>
                <td></td>
                <td class=\"text-end\">1</td>
                <td class=\"text-end\">";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 117);
            echo "</td>
                <td class=\"text-end\">";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 118);
            echo "</td>
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 121
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "key", [], "any", false, false, false, 122);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "            ";
        if (( !($context["order_products"] ?? null) &&  !($context["order_vouchers"] ?? null))) {
            // line 128
            echo "              <tr>
                <td colspan=\"6\" class=\"text-center\">";
            // line 129
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 132
        echo "          </tbody>
          <tfoot>
            <tr>
              <td colspan=\"5\"></td>
              <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-cart\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
            </tr>
          </tfoot>
        </table>

        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">

            <div class=\"col\">
              <form id=\"form-store\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 149
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 149);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 149) == ($context["store_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 149);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                  </select> <label for=\"input-store\">";
        echo ($context["entry_store"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-language\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 161
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 161);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 161) == ($context["language_code"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 161);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                  </select> <label for=\"input-language\">";
        echo ($context["entry_language"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-currency\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 173
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 173);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 173) == ($context["currency_code"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 173);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                  </select> <label for=\"input-currency\">";
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-coupon\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"coupon\" value=\"";
        // line 183
        echo ($context["total_coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/> <label for=\"input-coupon\">";
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-coupon\" data-bs-toogle=\"tooltip\" title=\"";
        // line 184
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-voucher\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"voucher\" value=\"";
        // line 192
        echo ($context["total_voucher"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/> <label for=\"input-voucher\">";
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-voucher\" data-bs-toogle=\"tooltip\" title=\"";
        // line 193
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-reward\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"reward\" value=\"";
        // line 201
        echo ($context["total_reward"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/> <label for=\"input-reward\">";
        echo ($context["entry_reward"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-reward\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <div class=\"input-group\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead p-0\"><strong>";
        // line 210
        echo ($context["text_reward"] ?? null);
        echo "</strong>
                    <br/>
                    <div id=\"reward-value\">";
        // line 212
        echo ($context["points"] ?? null);
        echo "</div>
                  </div>
                </div>
                ";
        // line 215
        if ( !($context["reward_total"] ?? null)) {
            // line 216
            echo "                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if (( !($context["customer_id"] ?? null) ||  !($context["points"] ?? null))) {
                echo " disabled";
            }
            echo "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 218
            echo "                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 220
        echo "              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 226
        echo ($context["text_affiliate"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 228
        if (($context["affiliate_id"] ?? null)) {
            // line 229
            echo "                      <div id=\"affiliate-value\"><a href=\"index.php?route=marketing/affiliate.form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["affiliate_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["affiliate"] ?? null);
            echo "</a></div>
                    ";
        } else {
            // line 231
            echo "                      <div id=\"affiliate-value\">&nbsp;</div>
                    ";
        }
        // line 233
        echo "                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 242
        echo ($context["text_commission"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 244
        if (($context["commission"] ?? null)) {
            // line 245
            echo "                      <div id=\"commission-value\">";
            echo ($context["commission"] ?? null);
            echo "</div>
                    ";
        } else {
            // line 247
            echo "                      <div id=\"commission-value\">&nbsp;</div>
                    ";
        }
        // line 249
        echo "                  </div>
                </div>
                ";
        // line 251
        if ( !($context["commission_total"] ?? null)) {
            // line 252
            echo "                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if ( !($context["affiliate_id"] ?? null)) {
                echo " disabled";
            }
            echo "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 254
            echo "                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 256
        echo "              </div>
            </div>

          </div>
        </div>

        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">";
        // line 262
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fa-solid fa-angle-down\"></i></button>

        <div class=\"row\">
          <div class=\"col-md\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 268
        echo ($context["text_payment_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"payment-address-value\">
                    ";
        // line 271
        if (($context["payment_firstname"] ?? null)) {
            // line 272
            echo "                      ";
            echo ($context["payment_firstname"] ?? null);
            echo " ";
            echo ($context["payment_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 275
        echo "
                    ";
        // line 276
        if (($context["payment_company"] ?? null)) {
            // line 277
            echo "                      ";
            echo ($context["payment_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 280
        echo "
                    ";
        // line 281
        if (($context["payment_address_1"] ?? null)) {
            // line 282
            echo "                      ";
            echo ($context["payment_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 285
        echo "
                    ";
        // line 286
        if (($context["payment_address_2"] ?? null)) {
            // line 287
            echo "                      ";
            echo ($context["payment_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 290
        echo "
                    ";
        // line 291
        if (($context["payment_city"] ?? null)) {
            // line 292
            echo "                      ";
            echo ($context["payment_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 295
        echo "
                    ";
        // line 296
        if (($context["payment_postcode"] ?? null)) {
            // line 297
            echo "                      ";
            echo ($context["payment_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 300
        echo "
                    ";
        // line 301
        if (($context["payment_zone"] ?? null)) {
            // line 302
            echo "                      ";
            echo ($context["payment_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 305
        echo "                    ";
        if (($context["payment_country"] ?? null)) {
            // line 306
            echo "                      ";
            echo ($context["payment_country"] ?? null);
            echo "
                    ";
        }
        // line 308
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

          <div id=\"shipping-address\" class=\"col";
        // line 315
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 318
        echo ($context["text_shipping_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"shipping-address-value\">
                    ";
        // line 321
        if (($context["shipping_firstname"] ?? null)) {
            // line 322
            echo "                      ";
            echo ($context["shipping_firstname"] ?? null);
            echo " ";
            echo ($context["shipping_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 325
        echo "                    ";
        if (($context["shipping_company"] ?? null)) {
            // line 326
            echo "                      ";
            echo ($context["shipping_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 329
        echo "                    ";
        if (($context["shipping_address_1"] ?? null)) {
            // line 330
            echo "                      ";
            echo ($context["shipping_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 333
        echo "                    ";
        if (($context["shipping_address_2"] ?? null)) {
            // line 334
            echo "                      ";
            echo ($context["shipping_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 337
        echo "                    ";
        if (($context["shipping_city"] ?? null)) {
            // line 338
            echo "                      ";
            echo ($context["shipping_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 341
        echo "                    ";
        if (($context["shipping_postcode"] ?? null)) {
            // line 342
            echo "                      ";
            echo ($context["shipping_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 345
        echo "                    ";
        if (($context["shipping_zone"] ?? null)) {
            // line 346
            echo "                      ";
            echo ($context["shipping_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 349
        echo "                    ";
        if (($context["shipping_country"] ?? null)) {
            // line 350
            echo "                      ";
            echo ($context["shipping_country"] ?? null);
            echo "
                    ";
        }
        // line 352
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

        </div>
        <div class=\"row\">

          <div id=\"shipping-method\" class=\"col-md";
        // line 362
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 365
        echo ($context["text_shipping_method"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 367
        if (($context["shipping_method"] ?? null)) {
            // line 368
            echo "                    <span id=\"shipping-method-value\">";
            echo ($context["shipping_method"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 370
            echo "                    <span id=\"shipping-method-value\"></span>
                  ";
        }
        // line 372
        echo "                </div>
              </div>
              <input type=\"hidden\" name=\"shipping_code\" value=\"";
        // line 374
        echo ($context["shipping_code"] ?? null);
        echo "\" id=\"input-shipping-code\"/>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

          <div id=\"payment-method\" class=\"col-md\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 382
        echo ($context["text_payment_method"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 384
        if (($context["payment_method"] ?? null)) {
            // line 385
            echo "                    <span id=\"payment-method-value\">";
            echo ($context["payment_method"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 387
            echo "                    <span id=\"payment-method-value\"></span>
                  ";
        }
        // line 389
        echo "                </div>
              </div>
              <input type=\"hidden\" name=\"payment_code\" value=\"";
        // line 391
        echo ($context["payment_code"] ?? null);
        echo "\" id=\"input-payment-code\"/>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

        </div>

        <div class=\"row\">
          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 402
        echo ($context["text_comment"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 404
        if (($context["comment"] ?? null)) {
            // line 405
            echo "                    <span id=\"comment-value\">";
            echo ($context["comment"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 407
            echo "                    <span id=\"comment-value\"></span>
                  ";
        }
        // line 409
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <tbody id=\"order-totals\">
            ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 419
            echo "              <tr>
                <td class=\"text-end\"><strong>";
            // line 420
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 420);
            echo "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">";
            // line 421
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "text", [], "any", false, false, false, 421);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        echo "          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 427
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 428
        echo ($context["button_confirm"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>

    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> ";
        // line 434
        echo ($context["text_history"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 437
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 438
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 439
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 440
            echo "            <li class=\"nav-item\"><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 440);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 440);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 442
        echo "        </ul>
        <div class=\"tab-content\">

          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 447
        echo ($context["text_history"] ?? null);
        echo "</legend>
              <div id=\"history\">";
        // line 448
        echo ($context["history"] ?? null);
        echo "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 452
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 454
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 457
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 458
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 458);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 458) == ($context["order_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 458);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 464
        echo ($context["entry_override"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"override\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\">
                    </div>
                    <div class=\"form-text\">";
        // line 470
        echo ($context["help_override"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 474
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"notify\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 483
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 485
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 489
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 492
        echo ($context["order_id"] ?? null);
        echo "\" id=\"input-order-id\"/>
            </form>
          </div>

          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 501
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 506
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 507
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 509
        if (($context["forwarded_ip"] ?? null)) {
            // line 510
            echo "                    <tr>
                      <td>";
            // line 511
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 512
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 515
        echo "                  <tr>
                    <td>";
        // line 516
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 517
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 520
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 521
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 527
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 528
            echo "            <div id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 528);
            echo "\" class=\"tab-pane\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 528);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 540
        echo ($context["text_customer"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 546
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"customer\" value=\"";
        // line 548
        echo ($context["firstname"] ?? null);
        echo " ";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"";
        echo ($context["customer_add"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_customer_add"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 550
        echo ($context["customer_id"] ?? null);
        echo "\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">";
        // line 554
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 555
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 556
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 556);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 556) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 556);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 558
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 561
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 565
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 569
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 571
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/> <a href=\"mailto:";
        echo ($context["email"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 575
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 576
        echo ($context["entry_telephone"] ?? null);
        echo "</label> <input type=\"text\" name=\"telephone\" value=\"";
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 580
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 580) == "account")) {
                // line 581
                echo "
              ";
                // line 582
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 582) == "select")) {
                    // line 583
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 584
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 584);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 585
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 586
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 586));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 587
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 587);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 587) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 587);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 589
                    echo "                  </select>
                  <div id=\"error-custom-field-";
                    // line 590
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 593
                echo "
              ";
                // line 594
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 594) == "radio")) {
                    // line 595
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 595);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 596
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 596);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 597
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 598
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 598));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 599
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 600
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 600);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 600);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 600);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 600)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 600) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 600)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 600);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 600);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 603
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 604
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 607
                echo "
              ";
                // line 608
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 608) == "checkbox")) {
                    // line 609
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 609);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 610
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 610);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 611
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 612
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 612));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 613
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 614
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 614);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 614);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 614), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 614);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 614);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 617
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 618
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 621
                echo "
              ";
                // line 622
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 622) == "text")) {
                    // line 623
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 624
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 624);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 624);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 624);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 624)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 624)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 624)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 624);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 624);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 625
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 628
                echo "
              ";
                // line 629
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 629) == "textarea")) {
                    // line 630
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 630);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 631
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 631);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 631);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 631);
                    echo "</textarea>
                  <div id=\"error-custom-field-";
                    // line 632
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 632);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 635
                echo "
              ";
                // line 636
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 636) == "file")) {
                    // line 637
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 637);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 638
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 638);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 640
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 640);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 641
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 641)));
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641);
                    echo "\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 642
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 642);
                    echo "\"";
                    if ( !(($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 642)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 643
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 643);
                    echo "\"";
                    if ( !(($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 643)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 645
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 645);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 648
                echo "
              ";
                // line 649
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 649) == "date")) {
                    // line 650
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 650);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 651
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 651);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 651);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 653
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 653);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 653)] ?? null) : null)) ? ((($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 653)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 653)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 653);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 653);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 656
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 656);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 659
                echo "
              ";
                // line 660
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 660) == "time")) {
                    // line 661
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 661);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 662
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 662);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 662);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 664
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 664)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 664);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 667
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 667);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 670
                echo "
              ";
                // line 671
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 671) == "datetime")) {
                    // line 672
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 672);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 673
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 673);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 673);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 675
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 675);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 675)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 675)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 675)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 675);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 675);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 678
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 678);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 681
                echo "
            ";
            }
            // line 683
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 685
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-cart\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 696
        echo ($context["text_cart_add"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-product\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 701
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-voucher\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 702
        echo ($context["tab_voucher"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-product\" class=\"tab-pane active\">
            <form id=\"form-product-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 708
        echo ($context["text_product_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3\">
                  <label for=\"input-product\" class=\"form-label\">";
        // line 710
        echo ($context["entry_product"] ?? null);
        echo "</label> <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
                  <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 715
        echo ($context["entry_quantity"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </fieldset>
              <div id=\"option\"></div>
              <div id=\"subscription\"></div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 721
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
          <div id=\"tab-voucher\" class=\"tab-pane\">
            <form id=\"form-voucher-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 728
        echo ($context["text_voucher_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-name\" class=\"form-label\">";
        // line 730
        echo ($context["entry_to_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_name\" value=\"\" placeholder=\"";
        echo ($context["entry_to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\"/>
                  <div id=\"error-to-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-email\" class=\"form-label\">";
        // line 734
        echo ($context["entry_to_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_email\" value=\"\" placeholder=\"";
        echo ($context["entry_to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\"/>
                  <div id=\"error-to-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-name\" class=\"form-label\">";
        // line 738
        echo ($context["entry_from_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_name\" value=\"\" placeholder=\"";
        echo ($context["entry_from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\"/>
                  <div id=\"error-from-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-email\" class=\"form-label\">";
        // line 742
        echo ($context["entry_from_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_email\" value=\"\" placeholder=\"";
        echo ($context["entry_from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\"/>
                  <div id=\"error-from-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-theme\" class=\"form-label\">";
        // line 746
        echo ($context["entry_theme"] ?? null);
        echo "</label> <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 748
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 748);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 748);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 750
        echo "                  </select>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-message\" class=\"form-label\">";
        // line 753
        echo ($context["entry_message"] ?? null);
        echo "</label> <textarea name=\"message\" rows=\"5\" placeholder=\"";
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\"></textarea>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-amount\" class=\"form-label\">";
        // line 756
        echo ($context["entry_amount"] ?? null);
        echo "</label> <input type=\"text\" name=\"amount\" value=\"";
        echo ($context["voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                  <div id=\"error-amount\" class=\"invalid-feedback\"></div>
                </div>
              </fieldset>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-voucher-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 761
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 774
        echo ($context["text_affiliate"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">";
        // line 780
        echo ($context["entry_affiliate"] ?? null);
        echo "</label> <input type=\"text\" name=\"affiliate\" value=\"";
        echo ($context["affiliate"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/> <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        echo ($context["affiliate_id"] ?? null);
        echo "\" id=\"input-affiliate-id\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 784
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 795
        echo ($context["text_payment_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">";
        // line 801
        echo ($context["entry_address"] ?? null);
        echo "</label>
            <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>";
        // line 803
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 804
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 805
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 805);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 805) == ($context["payment_address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 805);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 805);
            echo ",";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 805)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 805);
                echo ",";
            }
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 805);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 805);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 805);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 807
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 810
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["payment_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 814
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["payment_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">";
        // line 818
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["payment_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 821
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["payment_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 825
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["payment_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">";
        // line 828
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["payment_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 832
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["payment_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">";
        // line 836
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 837
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 838
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 839
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 839);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 839) == ($context["payment_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 839);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 841
        echo "            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 845
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-select\"></select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 848
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 849
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 849) == "address")) {
                // line 850
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 850) == "select")) {
                    // line 851
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 851);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 852
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 852);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 852);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 852);
                    echo "]\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 852);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 853
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 854
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 854));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 855
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 855);
                        echo "\"";
                        if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 855)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 855) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 855)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 855);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 857
                    echo "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 858
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 858);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 861
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 861) == "radio")) {
                    // line 862
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 862);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 863
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 863);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 864
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 864);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 865
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 865));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 866
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 867
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 867);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 867);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 867);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 867)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 867) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 867)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 867);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 867);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 870
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 871
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 871);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 874
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 874) == "checkbox")) {
                    // line 875
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 875);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 876
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 876);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 877
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 877);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 878
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 878));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 879
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 880
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 880);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 880);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_22 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 880), (($__internal_compile_23 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 880);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 880);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 883
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 884
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 884);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 887
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 887) == "text")) {
                    // line 888
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 888);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 889
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 889);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 889);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 889);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_24 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 889)] ?? null) : null)) ? ((($__internal_compile_25 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 889)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 889)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 889);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 889);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 890
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 890);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 893
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 893) == "textarea")) {
                    // line 894
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 895
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 895);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 895);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 895);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 895);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 895);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_26 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 895)] ?? null) : null)) ? ((($__internal_compile_27 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 895)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 895)));
                    echo "</textarea>
                  <div id=\"error-payment-custom-field-";
                    // line 896
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 896);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 899
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 899) == "file")) {
                    // line 900
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 900);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 901
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 901);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 903
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 903);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 904
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904)] ?? null) : null)) ? ((($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904)] ?? null) : null)) : (""));
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-";
                    // line 905
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905);
                    echo "\"";
                    if ( !(($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 906
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906);
                    echo "\"";
                    if ( !(($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 908
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 908);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 911
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 911) == "date")) {
                    // line 912
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 913
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 913);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 913);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 915
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 915);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 915)] ?? null) : null)) ? ((($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 915)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 915)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 915);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 915);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 918
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 918);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 921
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 921) == "time")) {
                    // line 922
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 923
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 923);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 923);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 925
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 925);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 925)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 925)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 925)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 925);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 925);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 928
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 931
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 931) == "datetime")) {
                    // line 932
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 932);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 933
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 933);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 933);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 935
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_36 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 935)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 935);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 938
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 938);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 941
                echo "            ";
            }
            // line 942
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 943
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 944
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-payment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> ";
        // line 955
        echo ($context["text_payment_method"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-method\">
          <p>";
        // line 960
        echo ($context["text_payment"] ?? null);
        echo "</p>
          <div id=\"payment-methods\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">";
        // line 963
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 974
        echo ($context["text_shipping_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">";
        // line 980
        echo ($context["entry_address"] ?? null);
        echo "</label>
            <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">";
        // line 982
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 983
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 984
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 984);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 984) == ($context["shipping_address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 984);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 984);
            echo ",";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 984)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 984);
                echo ",";
            }
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 984);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 984);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 984);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 986
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 989
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["shipping_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 993
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["shipping_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 997
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 1000
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 1004
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 1007
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 1011
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 1015
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 1016
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 1017
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1018
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 1018);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 1018) == ($context["shipping_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 1018);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1020
        echo "            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 1025
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 1029
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 1030
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 1030) == "address")) {
                // line 1031
                echo "
              ";
                // line 1032
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1032) == "select")) {
                    // line 1033
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1033);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1034
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1034);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1034);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1034);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1034);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 1035
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 1036
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1036));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1037
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1037);
                        echo "\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1037)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1037) == (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1037)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1037);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1039
                    echo "                  </select>
                  <div id=\"error-shipping-custom-field-";
                    // line 1040
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1040);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1043
                echo "
              ";
                // line 1044
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1044) == "radio")) {
                    // line 1045
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1045);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1046
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1046);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1047
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1047);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 1048
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1048));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1049
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 1050
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050) == (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1050);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1053
                    echo "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1054
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1057
                echo "
              ";
                // line 1058
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1058) == "checkbox")) {
                    // line 1059
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1059);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1060
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1060);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1061
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 1062
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1062));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1063
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 1064
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1064);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1064);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1064);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1064)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1064), (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1064)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1064);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1064);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1067
                    echo "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1068
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1068);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1071
                echo "
              ";
                // line 1072
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1072) == "text")) {
                    // line 1073
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1073);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1074
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1074);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074)] ?? null) : null)) ? ((($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1074)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1074);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 1075
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1075);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1078
                echo "
              ";
                // line 1079
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1079) == "textarea")) {
                    // line 1080
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1080);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1081
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1081);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1081);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1081);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081)] ?? null) : null)) ? ((($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1081)));
                    echo "</textarea>
                  <div id=\"error-shipping-custom-field-";
                    // line 1082
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1082);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1085
                echo "
              ";
                // line 1086
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1086) == "file")) {
                    // line 1087
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1087);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1088
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1088);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1090
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1090);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 1091
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091)] ?? null) : null)) : (""));
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 1092
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1092);
                    echo "\"";
                    if ( !(($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1092)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1093
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1093);
                    echo "\"";
                    if ( !(($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1093)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1095
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1098
                echo "
              ";
                // line 1099
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1099) == "date")) {
                    // line 1100
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1100);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1101
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1101);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1101);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1103
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1103);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1103)] ?? null) : null)) ? ((($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1103)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1103)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1103);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1103);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1106);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1109
                echo "
              ";
                // line 1110
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1110) == "time")) {
                    // line 1111
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1111);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1112);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1112);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1114);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_54 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1114)] ?? null) : null)) ? ((($__internal_compile_55 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1114)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1114)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1114);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1114);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1117
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1117);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1120
                echo "
              ";
                // line 1121
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1121) == "datetime")) {
                    // line 1122
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1122);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1123);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1123);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1125);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_56 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1125)] ?? null) : null)) ? ((($__internal_compile_57 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1125)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1125)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1125);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1125);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1128);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1131
                echo "
            ";
            }
            // line 1133
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1134
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 1135
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-shipping\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> ";
        // line 1146
        echo ($context["text_shipping_method"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-method\">
          <p>";
        // line 1151
        echo ($context["text_shipping"] ?? null);
        echo "</p>
          <div id=\"shipping-methods\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\">";
        // line 1154
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1165
        echo ($context["text_comment"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 1171
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 1174
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('";
        // line 1189
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('";
        // line 1193
        echo ($context["text_less"] ?? null);
        echo " <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token=";
        // line 1200
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#invoice-value').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 1233
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: ";
        // line 1238
        echo ($context["customer_group_id"] ?? null);
        echo ",
                    name: '";
        // line 1239
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">";
        // line 1291
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + (item['address'][i]['company'] ? item['address'][i]['company'] + ', ' : '') + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);

        \$('#payment-method-value').html('');
        \$('#shipping-method-value').html('');
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 1308
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

// Customer
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1337
        echo ($context["user_token"] ?? null);
        echo "&action=sale/customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#customer-value').html('<a href=\"index.php?route=customer/customer.form&user_token=";
        // line 1370
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val() + '\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1388
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        model: item['model'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(item['label']);

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1413
        echo twig_escape_filter($this->env, ($context["entry_option"] ?? null), "js");
        echo "</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1422
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1446
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/> ';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1496
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
        // line 1535
        echo ($context["upload"] ?? null);
        echo "\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"";
        echo ($context["config_file_max_size"] ?? null);
        echo "\" data-oc-size-error=\"";
        echo twig_escape_filter($this->env, ($context["error_upload_size"] ?? null), "js");
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
        echo twig_escape_filter($this->env, ($context["button_upload"] ?? null), "js");
        echo "</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1577
        echo twig_escape_filter($this->env, ($context["entry_subscription"] ?? null), "js");
        echo "</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">";
        // line 1580
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '  <div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '\" class=\"form-text subscription d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>';
            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1607
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart.add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-product-add').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-products').on('submit', 'form', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1657
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/cart.remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(e.target).button('loading');
        },
        complete: function() {
            \$(e.target).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1696
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/voucher.add',
        type: 'post',
        data: \$('#form-voucher-add').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-voucher-add').button('loading');
        },
        complete: function() {
            \$('#button-voucher-add').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-voucher-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['error']) {
                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-to-name').val('');
                \$('#input-to-email').val('');
                \$('#input-from-name').val('');
                \$('#input-from-email').val('');
                \$('#input-message').val('');
                \$('#input-amount').val('";
        // line 1732
        echo twig_escape_filter($this->env, ($context["voucher_min"] ?? null), "js");
        echo "');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove voucher
\$('#order-vouchers').on('submit', 'form', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1754
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/voucher.remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(e.target).button('loading');
        },
        complete: function() {
            \$(e.target).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-store').on('change', function(e) {
    e.preventDefault();

    \$('#button-refresh').trigger('click');
});

\$('#input-language').on('change', function(e) {
    e.preventDefault();

    \$('#button-refresh').trigger('click');
});

\$('#input-currency').on('change', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1804
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=localisation/currency',
        type: 'post',
        data: \$('#form-currency').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#input-currency').prop('disabled', true);
        },
        complete: function() {
            \$('#input-currency').prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Coupon
\$('#form-coupon').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1838
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/coupon',
        type: 'post',
        data: \$('#form-coupon').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-coupon').button('loading');
        },
        complete: function() {
            \$('#button-coupon').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1873
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/voucher',
        type: 'post',
        data: \$('#form-voucher').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-voucher').button('loading');
        },
        complete: function() {
            \$('#button-voucher').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$('#form-reward').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1908
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/reward',
        type: 'post',
        data: \$('#form-reward').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token=";
        // line 1948
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1968
        echo twig_escape_filter($this->env, ($context["button_reward_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1972
        echo twig_escape_filter($this->env, ($context["button_reward_add"] ?? null), "js");
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token=";
        // line 1988
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 1992
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_id: 0
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(item['label']);
    }
});

// Affiliate
\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2016
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/affiliate',
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#affiliate-value').html('<a href=\"index.php?route=marketing/affiliate.form&user_token=";
        // line 2037
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#affiliate-value').html('&nbsp;');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token=";
        // line 2060
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2080
        echo twig_escape_filter($this->env, ($context["button_commission_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2084
        echo twig_escape_filter($this->env, ($context["button_commission_add"] ?? null), "js");
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.address&user_token=";
        // line 2099
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2152
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/payment_address',
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + \"<br/>\";

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + \"<br/>\";
                }

                address += \$('#input-payment-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + \"<br/>\";
                }

                address += \$('#input-payment-city').val() + \"<br/>\";

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-payment-zone option:selected').text() + \"<br/>\";
                address += \$('#input-payment-country option:selected').text();

                \$('#payment-address-value').html(address);

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = '";
        // line 2220
        echo ($context["payment_zone_id"] ?? null);
        echo "';

\$('#input-payment-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 2226
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2241
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 2254
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-payment-country').trigger('change');

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.address&user_token=";
        // line 2272
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2325
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-shipping-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-shipping-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + \"<br/>\";

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + \"<br/>\";
                }

                address += \$('#input-shipping-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + \"<br/>\";
                }

                address += \$('#input-shipping-city').val() + \"<br/>\";

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-shipping-zone option:selected').text() + \"<br/>\";
                address += \$('#input-shipping-country option:selected').text();

                \$('#shipping-address-value').html(address);

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = '";
        // line 2395
        echo ($context["shipping_zone_id"] ?? null);
        echo "';

\$('#input-shipping-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 2401
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2416
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 2429
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-shipping-country').trigger('change');

// Shipping Method
\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2447
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['shipping_methods']) {
                html = '';

                for (i in json['shipping_methods']) {
                    html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            html += '<div class=\"form-check\">';

                            var code = i + '-' + j.replaceAll('_', '-');

                            html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + code + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-shipping-method-' + code + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                            html += '</div>';
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#shipping-methods').html(html);

                \$('#modal-shipping').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2506
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method.save&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-shipping-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-method').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-shipping-method').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shipping-method-value').html(\$('input[name=\\'shipping_method\\']:checked').parent().find('label').text());
                \$('#input-shipping-code').val(\$('input[name=\\'shipping_method\\']:checked').val());

                \$('#payment-method-value').html('');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2548
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['payment_methods']) {
                var html = '';

                for (i in json['payment_methods']) {
                    html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            html += '<div class=\"form-check\">';

                            var code = i + '-' + j.replaceAll('_', '-');

                            html += '<input type=\"radio\" name=\"payment_method\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + code + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + code + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</div>';
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#payment-methods').html(html);

                \$('#modal-payment').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2607
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method.save&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-payment-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-method').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-payment-method').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html(\$('input[name=\\'payment_method\\']:checked').parent().find('label').text());
                \$('#input-payment-code').val(\$('input[name=\\'payment_method\\']:checked').val());

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2648
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order.comment&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-comment').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-comment').button('loading');
        },
        complete: function() {
            \$('#button-comment').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#form-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment-value').html(\$('#input-comment').val().replace(/([^>\\r\\n]?)(\\r\\n|\\n\\r|\\r|\\n)/g, '\$1<br/>\$2'));
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products, vouchers and totals
\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2682
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
            \$('#button-confirm').prop('disabled', true);
        },
        complete: function() {
            \$('#button-refresh').button('reset');
            \$('#button-confirm').prop('disabled', false);
        },
        success: function(json) {
            html = '';

            if (json['products'].length) {
                for (i = 0; i < json['products'].length; i++) {
                    product = json['products'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\"><a href=\"index.php?route=catalog/product.form&user_token=";
        // line 2700
        echo ($context["user_token"] ?? null);
        echo "&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');

                    if (product['option']) {
                        for (j = 0; j < product['option'].length; j++) {
                            option = product['option'][j];

                            html += '<br/>';
                            html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small>';
                        }
                    }

                    if (product['reward']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2713
        echo twig_escape_filter($this->env, ($context["text_points"] ?? null), "js");
        echo ": ' + product['reward'] + '</small>';
                    }

                    if (product['subscription']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2718
        echo twig_escape_filter($this->env, ($context["text_subscription"] ?? null), "js");
        echo ": <a href=\"index.php?route=sale/subscription.info&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&subscription_id=";
        echo twig_get_attribute($this->env, $this->source, ($context["order_product"] ?? null), "subscription_id", [], "any", false, false, false, 2718);
        echo "\" target=\"_blank\">' + product['subscription'] + '</small>';
                    }

                    html += '  </td>';
                    html += '  <td class=\"text-start\">' + product['model'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['price'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['total'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2728
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + product['cart_id'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            \$('#order-products').html(html);

            html = '';

            if (json['vouchers'].length) {
                for (i in json['vouchers']) {
                    voucher = json['vouchers'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\">' + voucher['description'] + '</td>';
                    html += '  <td class=\"text-start\"></td>';
                    html += '  <td class=\"text-end\">1</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2752
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + voucher['key'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            if (!json['products'].length && !json['vouchers'].length) {
                html += '<tr>';
                html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2762
        echo twig_escape_filter($this->env, ($context["text_no_results"] ?? null), "js");
        echo "</td>';
                html += '</tr>';
            }

            \$('#order-vouchers').html(html);

            // Totals
            html = '';

            if (json['totals'].length) {
                for (i in json['totals']) {
                    total = json['totals'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
                    html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
                    html += '</tr>';
                }
            }

            \$('#order-totals').html(html);

            if (json['shipping_required']) {
                \$('#shipping-address').removeClass('d-none');
                \$('#shipping-method').removeClass('d-none');
                \$('#button-shipping').prop('disabled', false);
            } else {
                \$('#shipping-address').addClass('d-none');
                \$('#shipping-method').addClass('d-none');
                \$('#button-shipping').prop('disabled', true);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Checkout
\$('#button-confirm').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2805
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order.confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                for (i in json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'][i] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#reward-value').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#reward-value').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#commission-value').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#commission-value').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2868
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order.addHistory&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token=";
        // line 2889
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 2900
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5175 => 2900,  5161 => 2889,  5137 => 2868,  5071 => 2805,  5025 => 2762,  5012 => 2752,  4985 => 2728,  4968 => 2718,  4960 => 2713,  4944 => 2700,  4923 => 2682,  4886 => 2648,  4842 => 2607,  4780 => 2548,  4735 => 2506,  4673 => 2447,  4652 => 2429,  4636 => 2416,  4618 => 2401,  4609 => 2395,  4536 => 2325,  4480 => 2272,  4459 => 2254,  4443 => 2241,  4425 => 2226,  4416 => 2220,  4345 => 2152,  4289 => 2099,  4271 => 2084,  4264 => 2080,  4241 => 2060,  4215 => 2037,  4191 => 2016,  4164 => 1992,  4157 => 1988,  4138 => 1972,  4131 => 1968,  4108 => 1948,  4065 => 1908,  4027 => 1873,  3989 => 1838,  3952 => 1804,  3899 => 1754,  3874 => 1732,  3835 => 1696,  3793 => 1657,  3740 => 1607,  3710 => 1580,  3704 => 1577,  3653 => 1535,  3611 => 1496,  3558 => 1446,  3531 => 1422,  3519 => 1413,  3491 => 1388,  3470 => 1370,  3434 => 1337,  3402 => 1308,  3382 => 1291,  3327 => 1239,  3323 => 1238,  3315 => 1233,  3277 => 1200,  3267 => 1193,  3260 => 1189,  3242 => 1174,  3234 => 1171,  3225 => 1165,  3211 => 1154,  3205 => 1151,  3197 => 1146,  3183 => 1135,  3180 => 1134,  3174 => 1133,  3170 => 1131,  3164 => 1128,  3152 => 1125,  3145 => 1123,  3140 => 1122,  3138 => 1121,  3135 => 1120,  3129 => 1117,  3117 => 1114,  3110 => 1112,  3105 => 1111,  3103 => 1110,  3100 => 1109,  3094 => 1106,  3082 => 1103,  3075 => 1101,  3070 => 1100,  3068 => 1099,  3065 => 1098,  3059 => 1095,  3048 => 1093,  3038 => 1092,  3030 => 1091,  3018 => 1090,  3013 => 1088,  3008 => 1087,  3006 => 1086,  3003 => 1085,  2997 => 1082,  2981 => 1081,  2976 => 1080,  2974 => 1079,  2971 => 1078,  2965 => 1075,  2951 => 1074,  2946 => 1073,  2944 => 1072,  2941 => 1071,  2935 => 1068,  2932 => 1067,  2911 => 1064,  2908 => 1063,  2904 => 1062,  2900 => 1061,  2896 => 1060,  2891 => 1059,  2889 => 1058,  2886 => 1057,  2880 => 1054,  2877 => 1053,  2856 => 1050,  2853 => 1049,  2849 => 1048,  2845 => 1047,  2841 => 1046,  2836 => 1045,  2834 => 1044,  2831 => 1043,  2825 => 1040,  2822 => 1039,  2807 => 1037,  2803 => 1036,  2799 => 1035,  2789 => 1034,  2784 => 1033,  2782 => 1032,  2779 => 1031,  2776 => 1030,  2772 => 1029,  2765 => 1025,  2758 => 1020,  2743 => 1018,  2739 => 1017,  2735 => 1016,  2731 => 1015,  2720 => 1011,  2709 => 1007,  2699 => 1004,  2688 => 1000,  2678 => 997,  2667 => 993,  2656 => 989,  2651 => 986,  2622 => 984,  2618 => 983,  2614 => 982,  2609 => 980,  2600 => 974,  2586 => 963,  2580 => 960,  2572 => 955,  2558 => 944,  2555 => 943,  2549 => 942,  2546 => 941,  2540 => 938,  2528 => 935,  2521 => 933,  2516 => 932,  2513 => 931,  2507 => 928,  2495 => 925,  2488 => 923,  2483 => 922,  2480 => 921,  2474 => 918,  2462 => 915,  2455 => 913,  2450 => 912,  2447 => 911,  2441 => 908,  2430 => 906,  2420 => 905,  2412 => 904,  2400 => 903,  2395 => 901,  2390 => 900,  2387 => 899,  2381 => 896,  2367 => 895,  2362 => 894,  2359 => 893,  2353 => 890,  2339 => 889,  2334 => 888,  2331 => 887,  2325 => 884,  2322 => 883,  2301 => 880,  2298 => 879,  2294 => 878,  2290 => 877,  2286 => 876,  2281 => 875,  2278 => 874,  2272 => 871,  2269 => 870,  2248 => 867,  2245 => 866,  2241 => 865,  2237 => 864,  2233 => 863,  2228 => 862,  2225 => 861,  2219 => 858,  2216 => 857,  2201 => 855,  2197 => 854,  2193 => 853,  2183 => 852,  2178 => 851,  2175 => 850,  2172 => 849,  2168 => 848,  2162 => 845,  2156 => 841,  2141 => 839,  2137 => 838,  2133 => 837,  2129 => 836,  2118 => 832,  2107 => 828,  2097 => 825,  2086 => 821,  2076 => 818,  2065 => 814,  2054 => 810,  2049 => 807,  2020 => 805,  2016 => 804,  2012 => 803,  2007 => 801,  1998 => 795,  1984 => 784,  1971 => 780,  1962 => 774,  1946 => 761,  1934 => 756,  1926 => 753,  1921 => 750,  1910 => 748,  1906 => 747,  1902 => 746,  1893 => 742,  1884 => 738,  1875 => 734,  1866 => 730,  1861 => 728,  1851 => 721,  1840 => 715,  1830 => 710,  1825 => 708,  1816 => 702,  1812 => 701,  1804 => 696,  1790 => 685,  1787 => 684,  1781 => 683,  1777 => 681,  1771 => 678,  1759 => 675,  1752 => 673,  1747 => 672,  1745 => 671,  1742 => 670,  1736 => 667,  1724 => 664,  1717 => 662,  1712 => 661,  1710 => 660,  1707 => 659,  1701 => 656,  1689 => 653,  1682 => 651,  1677 => 650,  1675 => 649,  1672 => 648,  1666 => 645,  1655 => 643,  1645 => 642,  1637 => 641,  1625 => 640,  1620 => 638,  1615 => 637,  1613 => 636,  1610 => 635,  1604 => 632,  1590 => 631,  1585 => 630,  1583 => 629,  1580 => 628,  1574 => 625,  1560 => 624,  1555 => 623,  1553 => 622,  1550 => 621,  1544 => 618,  1541 => 617,  1520 => 614,  1517 => 613,  1513 => 612,  1509 => 611,  1505 => 610,  1500 => 609,  1498 => 608,  1495 => 607,  1489 => 604,  1486 => 603,  1465 => 600,  1462 => 599,  1458 => 598,  1454 => 597,  1450 => 596,  1445 => 595,  1443 => 594,  1440 => 593,  1434 => 590,  1431 => 589,  1416 => 587,  1412 => 586,  1408 => 585,  1398 => 584,  1393 => 583,  1391 => 582,  1388 => 581,  1385 => 580,  1381 => 579,  1371 => 576,  1365 => 575,  1354 => 571,  1349 => 569,  1338 => 565,  1327 => 561,  1322 => 558,  1307 => 556,  1303 => 555,  1299 => 554,  1292 => 550,  1279 => 548,  1274 => 546,  1265 => 540,  1253 => 530,  1242 => 528,  1238 => 527,  1229 => 521,  1225 => 520,  1219 => 517,  1215 => 516,  1212 => 515,  1206 => 512,  1202 => 511,  1199 => 510,  1197 => 509,  1192 => 507,  1188 => 506,  1180 => 501,  1168 => 492,  1162 => 489,  1155 => 485,  1150 => 483,  1138 => 474,  1131 => 470,  1122 => 464,  1116 => 460,  1101 => 458,  1097 => 457,  1091 => 454,  1086 => 452,  1079 => 448,  1075 => 447,  1068 => 442,  1057 => 440,  1053 => 439,  1049 => 438,  1045 => 437,  1039 => 434,  1030 => 428,  1026 => 427,  1021 => 424,  1012 => 421,  1008 => 420,  1005 => 419,  1001 => 418,  990 => 409,  986 => 407,  980 => 405,  978 => 404,  973 => 402,  959 => 391,  955 => 389,  951 => 387,  945 => 385,  943 => 384,  938 => 382,  927 => 374,  923 => 372,  919 => 370,  913 => 368,  911 => 367,  906 => 365,  898 => 362,  886 => 352,  880 => 350,  877 => 349,  870 => 346,  867 => 345,  860 => 342,  857 => 341,  850 => 338,  847 => 337,  840 => 334,  837 => 333,  830 => 330,  827 => 329,  820 => 326,  817 => 325,  808 => 322,  806 => 321,  800 => 318,  792 => 315,  783 => 308,  777 => 306,  774 => 305,  767 => 302,  765 => 301,  762 => 300,  755 => 297,  753 => 296,  750 => 295,  743 => 292,  741 => 291,  738 => 290,  731 => 287,  729 => 286,  726 => 285,  719 => 282,  717 => 281,  714 => 280,  707 => 277,  705 => 276,  702 => 275,  693 => 272,  691 => 271,  685 => 268,  676 => 262,  668 => 256,  662 => 254,  652 => 252,  650 => 251,  646 => 249,  642 => 247,  636 => 245,  634 => 244,  629 => 242,  618 => 233,  614 => 231,  604 => 229,  602 => 228,  597 => 226,  589 => 220,  583 => 218,  573 => 216,  571 => 215,  565 => 212,  560 => 210,  544 => 201,  533 => 193,  525 => 192,  514 => 184,  506 => 183,  494 => 175,  479 => 173,  475 => 172,  462 => 163,  447 => 161,  443 => 160,  430 => 151,  415 => 149,  411 => 148,  393 => 132,  387 => 129,  384 => 128,  381 => 127,  370 => 122,  366 => 121,  360 => 118,  356 => 117,  350 => 114,  347 => 113,  343 => 112,  339 => 110,  328 => 105,  324 => 104,  318 => 101,  314 => 100,  310 => 99,  306 => 98,  302 => 96,  293 => 94,  290 => 93,  288 => 92,  285 => 91,  278 => 89,  275 => 88,  273 => 87,  270 => 86,  267 => 85,  261 => 84,  252 => 83,  245 => 82,  243 => 81,  240 => 80,  235 => 79,  233 => 78,  224 => 76,  221 => 75,  217 => 74,  210 => 70,  206 => 69,  202 => 68,  198 => 67,  194 => 66,  190 => 65,  178 => 56,  173 => 54,  163 => 46,  155 => 44,  143 => 42,  141 => 41,  136 => 39,  128 => 33,  124 => 31,  118 => 29,  116 => 28,  109 => 25,  104 => 23,  94 => 16,  87 => 11,  76 => 9,  72 => 8,  67 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_info.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\sale\\order_info.twig");
    }
}
