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

/* themes/custom/cpr_bootstrap_barrio/templates/view/views-view--reports.html.twig */
class __TwigTemplate_c7be95aca144b3d51e4a58396b6cdbdf98da452cbda8d1182303132edd032878 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 36, "if" => 46];
        $filters = ["clean_class" => 38];
        $functions = ["attach_library" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class'],
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
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("cpr_bootstrap_barrio/cpr-reports"), "html", null, true);
        echo "

";
        // line 36
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null)))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null))), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null))), 4 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 44
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "row"], "method")), "html", null, true);
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            echo "    <div class=\"view-header\">
      ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 56
            echo "    <div class=\"view-filters\">
      ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["rows"] ?? null)) {
            // line 67
            echo "    <div class=\"view-content container\">
      <div class=\"row\">
        ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  ";
        } elseif (        // line 72
($context["empty"] ?? null)) {
            // line 73
            echo "    <div class=\"view-empty\">
      ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if (($context["attachment_after"] ?? null)) {
            // line 79
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 84
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 86
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 87
            echo "    <div class=\"view-footer container\">
      <div class=\"row\">
        <div class=\"col-md-10 offset-md-1 \">
          <div class=\"row d-flex align-items-center justify-content-between\">
            ";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
            ";
            // line 92
            if (($context["pager"] ?? null)) {
                // line 93
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
                echo "
            ";
            }
            // line 95
            echo "          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 100
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 101
            echo "    <div class=\"feed-icons\">
      ";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 105
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cpr_bootstrap_barrio/templates/view/views-view--reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 105,  206 => 102,  203 => 101,  200 => 100,  193 => 95,  187 => 93,  185 => 92,  181 => 91,  175 => 87,  172 => 86,  166 => 84,  163 => 83,  157 => 80,  154 => 79,  152 => 78,  149 => 77,  143 => 74,  140 => 73,  138 => 72,  132 => 69,  128 => 67,  126 => 66,  123 => 65,  117 => 62,  114 => 61,  111 => 60,  105 => 57,  102 => 56,  99 => 55,  93 => 52,  90 => 51,  88 => 50,  83 => 49,  77 => 47,  75 => 46,  71 => 45,  66 => 44,  64 => 41,  63 => 40,  62 => 39,  61 => 38,  60 => 36,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cpr_bootstrap_barrio/templates/view/views-view--reports.html.twig", "/var/www/stadmin/data/www/repo/web/themes/custom/cpr_bootstrap_barrio/templates/view/views-view--reports.html.twig");
    }
}
