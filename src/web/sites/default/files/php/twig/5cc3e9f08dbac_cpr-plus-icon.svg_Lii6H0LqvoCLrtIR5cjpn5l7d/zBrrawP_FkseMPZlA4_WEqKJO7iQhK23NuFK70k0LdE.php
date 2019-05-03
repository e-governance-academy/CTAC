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

/* themes/custom/cpr_bootstrap_barrio/images/cpr-plus-icon.svg */
class __TwigTemplate_1eae373624f04b3f80680fa292f181fb93f6ffdd48d598bf492006accd70fff7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<svg viewBox=\"0 0 16 16\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: Sketch 52.4 (67378) - http://www.bohemiancoding.com/sketch -->
    <title>Group 9</title>
    <desc>Created with Sketch.</desc>
    <g id=\"Desktop-v2\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"cpr-report-design-01-2\" transform=\"translate(-1162.000000, -592.000000)\" fill=\"#FFFFFF\">
            <g id=\"Group-15\" transform=\"translate(235.000000, 570.000000)\">
                <g id=\"Group-9\" transform=\"translate(935.000000, 30.000000) rotate(-270.000000) translate(-935.000000, -30.000000) translate(927.000000, 22.000000)\">
                    <rect id=\"Rectangle\" x=\"6\" y=\"0\" width=\"4\" height=\"16\"></rect>
                    <rect id=\"Rectangle\" transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) \" x=\"6\" y=\"0\" width=\"4\" height=\"16\"></rect>
                </g>
            </g>
        </g>
    </g>
</svg>";
    }

    public function getTemplateName()
    {
        return "themes/custom/cpr_bootstrap_barrio/images/cpr-plus-icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cpr_bootstrap_barrio/images/cpr-plus-icon.svg", "/var/www/stadmin/data/www/repo/web/themes/custom/cpr_bootstrap_barrio/images/cpr-plus-icon.svg");
    }
}
