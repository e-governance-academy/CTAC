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

/* themes/custom/cpr_bootstrap_barrio/templates/content/taxonomy-term--problem-type.html.twig */
class __TwigTemplate_6f090c779dbac7a07a4cf5c7007f3467eed5bf94b8906dc904745b624a52b0f8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 27, "set" => 28];
        $filters = ["clean_class" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['clean_class'],
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
        // line 26
        echo "
";
        // line 27
        if ((($context["language"] ?? null) == "ro")) {
            // line 28
            echo "\t";
            $context["current_lang"] = "";
        } else {
            // line 30
            echo "\t";
            $context["current_lang"] = ("/" . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null)));
        }
        // line 32
        echo "
";
        // line 34
        $context["classes"] = [0 => "taxonomy-term", 1 => ("vocabulary-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 36
($context["term"] ?? null), "bundle", []))))];
        // line 39
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ("taxonomy-term-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["term"] ?? null), "id", [])))], "method"), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
\t";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
\t";
        // line 41
        if ( !($context["page"] ?? null)) {
            // line 42
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_lang"] ?? null)), "html", null, true);
            echo "/reports?title=&field_problem_type_target_id=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["term"] ?? null), "id", [])), "html", null, true);
            echo "&created_from=&created_to=&nid=\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "</a>
\t";
        }
        // line 44
        echo "\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cpr_bootstrap_barrio/templates/content/taxonomy-term--problem-type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 44,  85 => 42,  83 => 41,  79 => 40,  74 => 39,  72 => 36,  71 => 34,  68 => 32,  64 => 30,  60 => 28,  58 => 27,  55 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cpr_bootstrap_barrio/templates/content/taxonomy-term--problem-type.html.twig", "/var/www/stadmin/data/www/repo/web/themes/custom/cpr_bootstrap_barrio/templates/content/taxonomy-term--problem-type.html.twig");
    }
}
