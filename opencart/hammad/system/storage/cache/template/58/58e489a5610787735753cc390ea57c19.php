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

/* admin/view/template/catalog/review_list.twig */
class __TwigTemplate_3c1fdc0085cdfee7253fc5ba77f1c5ee extends Template
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
        echo "<form id=\"form-review\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#review\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_product"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_product"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_author"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "r.author")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_author"] ?? null);
        echo "</a></td>
          <td class=\"text-end d-none d-lg-table-cell\"><a href=\"";
        // line 9
        echo ($context["sort_rating"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "r.rating")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_rating"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 10
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "r.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 11
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["reviews"] ?? null)) {
            // line 16
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 17
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 18);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 19);
                echo "
                <br/>
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                  <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                ";
                } else {
                    // line 24
                    echo "                  <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                ";
                }
                // line 25
                echo "</td>
              <td class=\"text-start\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 26);
                echo "</td>
              <td class=\"text-end d-none d-lg-table-cell\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 27);
                echo "</td>
              <td class=\"text-start\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-end\"><a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 29);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        } else {
            // line 33
            echo "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 34
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 37
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 41
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 42
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 42,  179 => 41,  173 => 37,  167 => 34,  164 => 33,  161 => 32,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  135 => 25,  129 => 24,  123 => 22,  121 => 21,  116 => 19,  112 => 18,  109 => 17,  104 => 16,  102 => 15,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/review_list.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\catalog\\review_list.twig");
    }
}
