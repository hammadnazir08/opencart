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

/* admin/view/template/customer/customer_approval.twig */
class __TwigTemplate_c306c7715e32bd0362c7bafc58b6e1f1 extends Template
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
        echo "\" onclick=\"\$('#filter-customer').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"submit\" form=\"form-customer-approval\" formaction=\"";
        // line 7
        echo ($context["approve"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["text_approve"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
        <button type=\"submit\" form=\"form-customer-approval\" formaction=\"";
        // line 8
        echo ($context["deny"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["text_deny"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 22
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 25
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"";
        // line 26
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" data-oc-target=\"autocomplete-email\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-email\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-customer-group\" class=\"form-label\">";
        // line 35
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                <option value=\"\"></option>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 38
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 38);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 38);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-type\" class=\"form-label\">";
        // line 43
        echo ($context["entry_type"] ?? null);
        echo "</label> <select name=\"filter_type\" id=\"input-type\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"customer\">";
        // line 45
        echo ($context["text_customer"] ?? null);
        echo "</option>
                <option value=\"affiliate\">";
        // line 46
        echo ($context["text_affiliate"] ?? null);
        echo "</option>
              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-from\" class=\"form-label\">";
        // line 50
        echo ($context["entry_date_from"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_from\" value=\"";
        // line 52
        echo ($context["filter_date_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_from"] ?? null);
        echo "\" id=\"input-date-from\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-to\" class=\"form-label\">";
        // line 57
        echo ($context["entry_date_to"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_to\" value=\"";
        // line 59
        echo ($context["filter_date_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_to"] ?? null);
        echo "\" id=\"input-date-to\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 64
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 71
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div id=\"customer-approval\">";
        // line 73
        echo ($context["list"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer-approval').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#customer-approval').load(this.href);
});

\$('#customer-approval').on('click', '.btn-success, .btn-danger', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#customer-approval').load(\$('#form-customer-approval').attr('data-oc-load'));
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-filter').on('click', function () {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_email = \$('#input-email').val();

    if (filter_email) {
        url += '&filter_email=' + encodeURIComponent(filter_email);
    }

    var filter_customer_group_id = \$('#input-customer-group').val();

    if (filter_customer_group_id !== '') {
        url += '&filter_customer_group_id=' + filter_customer_group_id;
    }

    var filter_type = \$('#input-type').val();

    if (filter_type !== '') {
        url += '&filter_type=' + filter_type;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    window.history.pushState({}, null, 'index.php?route=customer/customer_approval&user_token=";
        // line 159
        echo ($context["user_token"] ?? null);
        echo "' + url);

    \$('#customer-approval').load('index.php?route=customer/customer_approval.list&user_token=";
        // line 161
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 167
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-customer').val(item['label']);
    }
});

\$('#input-email').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 187
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['email'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-email').val(item['label']);
    }
});
//--></script>
";
        // line 204
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_approval.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 204,  332 => 187,  309 => 167,  300 => 161,  295 => 159,  206 => 73,  201 => 71,  191 => 64,  181 => 59,  176 => 57,  166 => 52,  161 => 50,  154 => 46,  150 => 45,  145 => 43,  140 => 40,  129 => 38,  125 => 37,  120 => 35,  113 => 31,  109 => 30,  102 => 26,  98 => 25,  92 => 22,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer_approval.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\customer\\customer_approval.twig");
    }
}
