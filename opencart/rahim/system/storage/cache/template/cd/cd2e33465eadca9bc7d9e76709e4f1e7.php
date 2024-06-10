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

/* admin/view/template/sale/order_invoice.twig */
class __TwigTemplate_8a08470458bad91541b30e619a041740 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\"/>
  <link href=\"";
        // line 7
        echo ($context["bootstrap_css"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 8
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"";
        // line 9
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 10
        echo ($context["bootstrap_js"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 11
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "    <div style=\"page-break-after: always;\">
      <h1>";
            // line 17
            echo ($context["text_invoice"] ?? null);
            echo " #";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 17);
            echo "</h1>
      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 21
            echo ($context["text_invoice"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 23)) {
                // line 24
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 24);
                echo "
              ";
            } else {
                // line 26
                echo "                &nbsp;
              ";
            }
            // line 28
            echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 33
            echo ($context["text_order_id"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 35);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 41
            echo ($context["text_date_added"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 43);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 49
            echo ($context["text_store"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 51);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 57
            echo ($context["text_store_address"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 59);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 65
            echo ($context["text_store_telephone"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 67);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 73
            echo ($context["text_store_email"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 75);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 81
            echo ($context["text_payment_method"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 83);
            echo "
            </div>
          </div>
        </div>
        ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 87)) {
                // line 88
                echo "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 90
                echo ($context["text_shipping_method"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 92);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 97
            echo "      </div>

      <div class=\"row\">
        ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 100)) {
                // line 101
                echo "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 103
                echo ($context["text_payment_address"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 105);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 110
            echo "
        ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 111)) {
                // line 112
                echo "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 114
                echo ($context["text_shipping_address"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 116);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 121
            echo "      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td><b>";
            // line 126
            echo ($context["column_product"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 127
            echo ($context["column_model"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 128
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 129
            echo ($context["column_price"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 130
            echo ($context["column_total"] ?? null);
            echo "</b></td>
          </tr>
        </thead>
        <tbody>
          ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 135
                echo "            <tr>
              <td>";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 136);
                echo "
                ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 137));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 138
                    echo "                  <br/>
                  <small> - ";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 139);
                    echo "</small>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "
                ";
                // line 142
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "                  <br/>
                  <small> - ";
                    // line 144
                    echo ($context["text_points"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 144);
                    echo "</small>
                ";
                }
                // line 146
                echo "
                ";
                // line 147
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 147)) {
                    // line 148
                    echo "                  <br/>
                  <small> - ";
                    // line 149
                    echo ($context["text_subscription"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 149);
                    echo " </small>
                ";
                }
                // line 151
                echo "
              </td>
              <td>";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 153);
                echo "</td>
              <td class=\"text-end\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 154);
                echo "</td>
              <td class=\"text-end\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 155);
                echo "</td>
              <td class=\"text-end\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 156);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 160
                echo "            <tr>
              <td>";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 161);
                echo "</td>
              <td></td>
              <td class=\"text-end\">1</td>
              <td class=\"text-end\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 164);
                echo "</td>
              <td class=\"text-end\">";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 165);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 168));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 169
                echo "            <tr>
              <td class=\"text-end\" colspan=\"4\"><b>";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 170);
                echo "</b></td>
              <td class=\"text-end\">";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 171);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "        </tbody>
      </table>
      ";
            // line 176
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 176)) {
                // line 177
                echo "        <div class=\"row\">
          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 180
                echo ($context["text_comment"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 182);
                echo "
              </div>
            </div>
          </div>
        </div>
      ";
            }
            // line 188
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 190,  466 => 188,  457 => 182,  452 => 180,  447 => 177,  445 => 176,  441 => 174,  432 => 171,  428 => 170,  425 => 169,  420 => 168,  411 => 165,  407 => 164,  401 => 161,  398 => 160,  393 => 159,  384 => 156,  380 => 155,  376 => 154,  372 => 153,  368 => 151,  361 => 149,  358 => 148,  356 => 147,  353 => 146,  346 => 144,  343 => 143,  341 => 142,  338 => 141,  328 => 139,  325 => 138,  321 => 137,  317 => 136,  314 => 135,  310 => 134,  303 => 130,  299 => 129,  295 => 128,  291 => 127,  287 => 126,  280 => 121,  272 => 116,  267 => 114,  263 => 112,  261 => 111,  258 => 110,  250 => 105,  245 => 103,  241 => 101,  239 => 100,  234 => 97,  226 => 92,  221 => 90,  217 => 88,  215 => 87,  208 => 83,  203 => 81,  194 => 75,  189 => 73,  180 => 67,  175 => 65,  166 => 59,  161 => 57,  152 => 51,  147 => 49,  138 => 43,  133 => 41,  124 => 35,  119 => 33,  112 => 28,  108 => 26,  102 => 24,  100 => 23,  95 => 21,  86 => 17,  83 => 16,  79 => 15,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_invoice.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\sale\\order_invoice.twig");
    }
}
