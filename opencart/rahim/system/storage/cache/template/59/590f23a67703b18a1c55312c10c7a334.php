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

/* admin/view/template/catalog/review.twig */
class __TwigTemplate_0cb9d62b3df2a4ca7f9234b544dac7ad extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-review').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-rating\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_rating"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-review\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-review\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 23
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"input-product\" class=\"form-label\">";
        // line 26
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 27
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-author\" class=\"form-label\">";
        // line 31
        echo ($context["entry_author"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_author\" value=\"";
        // line 32
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-status\" class=\"form-label\">";
        // line 35
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"1\"";
        // line 38
        if ((($context["filter_status"] ?? null) == "1")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                <option value=\"0\"";
        // line 39
        if ((($context["filter_status"] ?? null) == "0")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-from\" class=\"form-label\">";
        // line 43
        echo ($context["entry_date_from"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_from\" value=\"";
        // line 45
        echo ($context["filter_date_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_from"] ?? null);
        echo "\" id=\"input-date-from\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-to\" class=\"form-label\">";
        // line 50
        echo ($context["entry_date_to"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_to\" value=\"";
        // line 52
        echo ($context["filter_date_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_to"] ?? null);
        echo "\" id=\"input-date-to\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 57
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 64
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"review\" class=\"card-body\">";
        // line 65
        echo ($context["list"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#review').on('click', 'thead a, .pagination a', function (e) {
    e.preventDefault();

    \$('#review').load(this.href);
});

\$('#button-filter').on('click', function () {
    url = '';

    var filter_product = \$('#input-product').val();

    if (filter_product) {
        url += '&filter_product=' + encodeURIComponent(filter_product);
    }

    var filter_author = \$('#input-author').val();

    if (filter_author) {
        url += '&filter_author=' + encodeURIComponent(filter_author);
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    window.history.pushState({}, null, 'index.php?route=catalog/review&user_token=";
        // line 111
        echo ($context["user_token"] ?? null);
        echo "' + url);

    \$('#review').load('index.php?route=catalog/review.list&user_token=";
        // line 113
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-product').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 119
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-product').val(item['label']);
    }
});

\$('#button-rating').on('click', function () {
    var element = this;

    \$(element).button('loading');

    var next = 'index.php?route=catalog/review.sync&user_token=";
        // line 141
        echo ($context["user_token"] ?? null);
        echo "';

    var rating = function () {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function (json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(rating);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(rating);
});
//--></script>
";
        // line 185
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 185,  286 => 141,  261 => 119,  252 => 113,  247 => 111,  198 => 65,  194 => 64,  184 => 57,  174 => 52,  169 => 50,  159 => 45,  154 => 43,  143 => 39,  135 => 38,  129 => 35,  121 => 32,  117 => 31,  108 => 27,  104 => 26,  98 => 23,  89 => 16,  78 => 14,  74 => 13,  69 => 11,  60 => 9,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/review.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\catalog\\review.twig");
    }
}
