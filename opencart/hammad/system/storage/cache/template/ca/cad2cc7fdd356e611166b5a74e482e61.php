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

/* admin/view/template/marketplace/api.twig */
class __TwigTemplate_53819b0a725d2995228c2480abeaaf8d extends Template
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
        echo "<div id=\"modal-api\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-api\">
          <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 10
        echo ($context["text_signup"] ?? null);
        echo "</div>
          <div class=\"mb-3\">
            <label for=\"input-username\" class=\"form-label\">";
        // line 12
        echo ($context["entry_username"] ?? null);
        echo "</label> <input type=\"text\" name=\"opencart_username\" value=\"\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
            <div id=\"error-username\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-secret\" class=\"form-label\">";
        // line 16
        echo ($context["entry_secret"] ?? null);
        echo "</label> <textarea name=\"opencart_secret\" placeholder=\"";
        echo ($context["entry_secret"] ?? null);
        echo "\" rows=\"8\" id=\"input-secret\" class=\"form-control\"></textarea>
            <div id=\"error-secret\" class=\"invalid-feedback\"></div>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" form=\"form-api\" id=\"button-save\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 22
        echo ($context["button_save"] ?? null);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-api').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=marketplace/api.save&user_token=";
        // line 32
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$('#form-api').serialize(),
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#modal-api .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-api .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                window.location.reload();
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  76 => 22,  65 => 16,  56 => 12,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/api.twig", "C:\\xamp PHP8\\htdocs\\opencart\\upload\\admin\\view\\template\\marketplace\\api.twig");
    }
}
