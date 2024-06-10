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

/* admin/view/template/sale/voucher_list.twig */
class __TwigTemplate_74ef0fa807bb30b6266494165c05ebeb extends Template
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
        echo "<form id=\"form-voucher\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#voucher\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_code"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.code")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_code"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_from"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.from_name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_from"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_to"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.to_name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_to"] ?? null);
        echo "</a></td>
          <td class=\"text-end\"><a href=\"";
        // line 10
        echo ($context["sort_amount"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.amount")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_amount"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_theme"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "theme")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_theme"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 12
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 13
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 17
        if (($context["vouchers"] ?? null)) {
            // line 18
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 19
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "voucher_id", [], "any", false, false, false, 20);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "code", [], "any", false, false, false, 21);
                echo "
                <br/>
                ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                  <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                ";
                } else {
                    // line 26
                    echo "                  <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                ";
                }
                // line 28
                echo "              </td>
              <td class=\"text-start\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "from", [], "any", false, false, false, 29);
                echo "</td>
              <td class=\"text-start\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "to", [], "any", false, false, false, 30);
                echo "</td>
              <td class=\"text-end\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 31);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "theme", [], "any", false, false, false, 32);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "date_added", [], "any", false, false, false, 33);
                echo "</td>
              <td class=\"text-end\">
                ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["voucher"], "order", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "order", [], "any", false, false, false, 36);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_order"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-eye\"></i></a>
                ";
                }
                // line 38
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "edit", [], "any", false, false, false, 38);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        } else {
            // line 42
            echo "          <tr>
            <td class=\"text-center\" colspan=\"9\">";
            // line 43
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 46
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 50
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 51
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/voucher_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 51,  223 => 50,  217 => 46,  211 => 43,  208 => 42,  205 => 41,  193 => 38,  185 => 36,  183 => 35,  178 => 33,  174 => 32,  170 => 31,  166 => 30,  162 => 29,  159 => 28,  153 => 26,  147 => 24,  145 => 23,  140 => 21,  136 => 20,  133 => 19,  128 => 18,  126 => 17,  119 => 13,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/voucher_list.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\sale\\voucher_list.twig");
    }
}
