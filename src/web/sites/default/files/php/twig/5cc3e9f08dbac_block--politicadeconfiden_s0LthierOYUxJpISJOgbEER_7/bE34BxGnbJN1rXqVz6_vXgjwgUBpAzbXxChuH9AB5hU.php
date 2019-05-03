<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/cpr_bootstrap_barrio/templates/block/block--politicadeconfidentialitate.html.twig */
class __TwigTemplate_9e728410f1cf783f941840d67190c7785e455760ea9b8ba651d2076938bcec3c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 33, "if" => 46, "include" => 52, "block" => 58];
        $filters = ["clean_class" => 35, "trans" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
                ['clean_class', 'trans'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 33
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 35
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null)))), 3 => ("block--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 37
($context["elements"] ?? null), "#id", [], "array"))))];
        // line 40
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "modal", 2 => "fade"], "method")), "html", null, true);
        echo " tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

      <div class=\"modal-header\">
        ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
        ";
        // line 46
        if (($context["label"] ?? null)) {
            // line 47
            echo "          <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block__title"], "method")), "html", null, true);
            echo " class=\"modal-title\" >";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
        ";
        }
        // line 49
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
        <button type=\"button\" class=\"close modal__close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">
            ";
        // line 52
        $this->loadTemplate((($context["directory"] ?? null) . "/images/cpr-modal-close.svg"), "themes/custom/cpr_bootstrap_barrio/templates/block/block--politicadeconfidentialitate.html.twig", 52)->display($context);
        // line 53
        echo "          </span>
        </button>
      </div>

      <div class=\"modal-body\">
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "      </div>

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary js-btn__policy--agree btn--to-dark\" data-dismiss=\"modal\">";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("I Agree"));
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "          <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method")), "html", null, true);
        echo ">
            ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
          </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/cpr_bootstrap_barrio/templates/block/block--politicadeconfidentialitate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 60,  120 => 59,  117 => 58,  107 => 66,  102 => 63,  100 => 58,  93 => 53,  91 => 52,  84 => 49,  76 => 47,  74 => 46,  70 => 45,  61 => 40,  59 => 37,  58 => 36,  57 => 35,  56 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cpr_bootstrap_barrio/templates/block/block--politicadeconfidentialitate.html.twig", "/var/www/stadmin/data/www/repo/web/themes/custom/cpr_bootstrap_barrio/templates/block/block--politicadeconfidentialitate.html.twig");
    }
}
