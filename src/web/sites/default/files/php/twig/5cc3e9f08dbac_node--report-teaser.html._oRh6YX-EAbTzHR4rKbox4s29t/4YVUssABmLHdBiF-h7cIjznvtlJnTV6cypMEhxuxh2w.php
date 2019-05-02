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

/* themes/custom/cpr_bootstrap_barrio/templates/content/reports/node--report-teaser.html.twig */
class __TwigTemplate_46ec9aabaa2df21bc645a55b93f5e0821026802ef845ae94b93b16eaf0a71bca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 65, "if" => 84, "include" => 103];
        $filters = ["clean_class" => 67, "format_date" => 76, "without" => 113];
        $functions = ["attach_library" => 62];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'format_date', 'without'],
                ['attach_library']
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
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        echo "

";
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 67
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 68
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 69
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 70
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix", 7 => "accordion"];
        // line 76
        $context["date_created"] = call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "html_y_m_d"]);
        // line 77
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "col-md-10", 2 => "offset-md-1"], "method")), "html", null, true);
        echo ">
  <header class=\"accordion__header js--accordion__header\">

    <div class=\"rep-teser__title--wrapper\">
      <div class=\"rep-teaser__date\">
        ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date_created"] ?? null)), "html", null, true);
        echo "
      </div>
      ";
        // line 84
        if ( !($context["page"] ?? null)) {
            // line 85
            echo "        <div class=\"rep-teaser__title\">
          ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 89
        echo "    </div>

    <div class=\"rep-teaser__institution--wrapper\">
      <div class=\"rep-teaser__problem\">
        ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_problem_type", [])), "html", null, true);
        echo "
      </div>
      <div class=\"rep-teaser--institution\">
        ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_institution", [])), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"accordion__link--wrapper\">
      <a href=\"#\" class=\"accordion__link js--accordion__link\">
      <span class=\"accordion__accordion--icon\">
        ";
        // line 103
        $this->loadTemplate((($context["directory"] ?? null) . "/images/cpr-plus-icon.svg"), "themes/custom/cpr_bootstrap_barrio/templates/content/reports/node--report-teaser.html.twig", 103)->display($context);
        // line 104
        echo "      </span>
      </a>
    </div>

    ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  </header>
  <div";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix", 2 => "accordion__body", 3 => "js--accordion__body"], "method")), "html", null, true);
        echo ">
    ";
        // line 112
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description", [])), "html", null, true);
        echo "
    ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_description", "field_institution", "field_problem_type"), "html", null, true);
        echo "
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cpr_bootstrap_barrio/templates/content/reports/node--report-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 113,  134 => 112,  130 => 111,  124 => 108,  118 => 104,  116 => 103,  106 => 96,  100 => 93,  94 => 89,  88 => 86,  85 => 85,  83 => 84,  78 => 82,  69 => 77,  67 => 76,  65 => 71,  64 => 70,  63 => 69,  62 => 68,  61 => 67,  60 => 65,  55 => 62,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cpr_bootstrap_barrio/templates/content/reports/node--report-teaser.html.twig", "/var/www/stadmin/data/www/repo/web/themes/custom/cpr_bootstrap_barrio/templates/content/reports/node--report-teaser.html.twig");
    }
}
