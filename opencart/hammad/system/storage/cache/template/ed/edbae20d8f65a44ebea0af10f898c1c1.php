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

/* admin/view/template/merchant/merchant.twig */
class __TwigTemplate_f340fdf56185f0adf585ef294d381430 extends Template
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
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-merchant\" formaction=\"";
        // line 6
        echo ($context["fetch_and_save_action"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-merchant\" class=\"form-horizontal\">
          <div class=\"mb-3 row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-merchant\">";
        // line 23
        echo ($context["text_select_merchant"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"merchant_id\" id=\"input-merchant\" class=\"form-control\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["merchants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["merchant"]) {
            // line 27
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["merchant"], "user_id", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["merchant"], "username", [], "any", false, false, false, 27);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["merchant"], "email", [], "any", false, false, false, 27);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['merchant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "              </select>
            </div>
          </div>
          <div class=\"mb-3 row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-store\">";
        // line 33
        echo ($context["text_select_store"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 37
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 37);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 37);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </select>
            </div>
          </div>
        </form>

        <h3>";
        // line 44
        echo ($context["text_relations_heading"] ?? null);
        echo "</h3> <!-- Add a heading here -->

        <table class=\"table table-bordered\">
          <thead>
            <tr>  
              <th>";
        // line 49
        echo ($context["column_store_name"] ?? null);
        echo "</th>
              <th>";
        // line 50
        echo ($context["column_user_name"] ?? null);
        echo "</th>
              <th>";
        // line 51
        echo ($context["column_action"] ?? null);
        echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
            // line 56
            echo "            <tr>
              <td>";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["relation"], "store_name", [], "any", false, false, false, 57);
            echo "</td>
              <td>";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["relation"], "username", [], "any", false, false, false, 58);
            echo "</td>
              <td>
                <a href=\"";
            // line 60
            echo ($context["remove_action"] ?? null);
            echo "&user_id=";
            echo twig_get_attribute($this->env, $this->source, $context["relation"], "user_id", [], "any", false, false, false, 60);
            echo "&store_id=";
            echo twig_get_attribute($this->env, $this->source, $context["relation"], "store_id", [], "any", false, false, false, 60);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> ";
            echo ($context["button_remove"] ?? null);
            echo "</a>
              </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
";
        // line 70
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/merchant/merchant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 70,  208 => 64,  192 => 60,  187 => 58,  183 => 57,  180 => 56,  176 => 55,  169 => 51,  165 => 50,  161 => 49,  153 => 44,  146 => 39,  135 => 37,  131 => 36,  125 => 33,  119 => 29,  106 => 27,  102 => 26,  96 => 23,  91 => 21,  86 => 19,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/merchant/merchant.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\merchant\\merchant.twig");
    }
}
