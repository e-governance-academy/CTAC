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

/* themes/custom/cpr_bootstrap_barrio/templates/page--node--add--be-involved.html.twig */
class __TwigTemplate_06a4189d2b0ce06370184ed431d184b997ad0e236f0cd5a8b4223417148bf09b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 73, "if" => 130, "include" => 102];
        $filters = ["t" => 72, "render" => 137];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'include'],
                ['t', 'render'],
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
        // line 70
        echo "<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\" class=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 129
        echo "    </header>
    ";
        // line 130
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 131
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 137
        echo "    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "featured_top", [])))) {
            // line 138
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 145
            echo "    ";
        } else {
            // line 146
            echo "      <div class=\"featured-top\">
        <div class=\"featured_top--empty\"></div>
      </div>
    ";
        }
        // line 150
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 152
        $this->displayBlock('content', $context, $blocks);
        // line 188
        echo "


    </div>
    ";
        // line 192
        if ((((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "featured_content", [])) || $this->getAttribute(($context["page"] ?? null), "featured_content_first", []))) {
            // line 193
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " clearfix be-involved__featured\" role=\"complementary\">
          ";
            // line 195
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
          ";
            // line 196
            if ($this->getAttribute(($context["page"] ?? null), "featured_content", [])) {
                // line 197
                echo "            <div id=\"main\" class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
                echo "\">
              <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                ";
                // line 199
                if ($this->getAttribute(($context["page"] ?? null), "featured_content_first", [])) {
                    // line 200
                    echo "                  <main";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "col-md-6"], "method")), "html", null, true);
                    echo ">
                    <section class=\"section\">
                      <a id=\"main-content\" tabindex=\"-1\"></a>
                      ";
                    // line 203
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_content", [])), "html", null, true);
                    echo "
                    </section>
                  </main>
                ";
                } else {
                    // line 207
                    echo "                  <main";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
                    echo ">
                    <section class=\"section\">
                      <a id=\"main-content\" tabindex=\"-1\"></a>
                      ";
                    // line 210
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_content", [])), "html", null, true);
                    echo "
                    </section>
                  </main>
                ";
                }
                // line 214
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "featured_content_first", [])) {
                    // line 215
                    echo "                  <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["sidebar_first_attributes"] ?? null), "removeClass", [0 => "col-md-3"], "method"), "addClass", [0 => "col-md-4 offset-md-1"], "method")), "html", null, true);
                    echo ">
                    <aside class=\"section\" role=\"complementary\">
                      ";
                    // line 217
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_content_first", [])), "html", null, true);
                    echo "
                    </aside>
                  </div>
                ";
                }
                // line 221
                echo "              </div>
            </div>
          ";
            }
            // line 224
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
          ";
            // line 225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 229
        echo "    <footer class=\"site-footer\">
      ";
        // line 230
        $this->displayBlock('footer', $context, $blocks);
        // line 247
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        // line 74
        echo "        ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 75
            echo "          <nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "            <div class=\"container\">
              ";
            }
            // line 79
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
              ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
            echo "
              ";
            // line 81
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 82
                echo "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "              ";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "            </div>
            ";
            }
            // line 89
            echo "          </nav>
        ";
        }
        // line 91
        echo "        <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null)), "html", null, true);
        echo ">
          ";
        // line 92
        if (($context["container_navbar"] ?? null)) {
            // line 93
            echo "          <div class=\"container\">
            ";
        }
        // line 95
        echo "            <div class=\"col-md-10 offset-md-1\">
              <div class=\"header--menu align-padding align-padding-plus\">
                ";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
                ";
        // line 98
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "header_form", []))) {
            // line 99
            echo "
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <i class=\"mobile-menu--icon mobile-menu--icon-closed\">
                    ";
            // line 102
            $this->loadTemplate((($context["directory"] ?? null) . "/images/menu.svg"), "themes/custom/cpr_bootstrap_barrio/templates/page--node--add--be-involved.html.twig", 102)->display($context);
            // line 103
            echo "                  </i>
                  <i class=\"mobile-menu--icon mobile-menu--icon-opened\">
                    ";
            // line 105
            $this->loadTemplate((($context["directory"] ?? null) . "/images/x.svg"), "themes/custom/cpr_bootstrap_barrio/templates/page--node--add--be-involved.html.twig", 105)->display($context);
            // line 106
            echo "                  </i>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
                  ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
                  ";
            // line 111
            if ($this->getAttribute(($context["page"] ?? null), "header_form", [])) {
                // line 112
                echo "                    <div class=\"form-inline navbar-form float-right\">
                      ";
                // line 113
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
                    </div>
                  ";
            }
            // line 116
            echo "                  ";
        }
        // line 117
        echo "                </div>
              </div>
            </div>

            ";
        // line 121
        if (($context["sidebar_collapse"] ?? null)) {
            // line 122
            echo "              <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 124
        echo "            ";
        if (($context["container_navbar"] ?? null)) {
            // line 125
            echo "          </div>
          ";
        }
        // line 127
        echo "        </nav>
      ";
    }

    // line 138
    public function block_featured($context, array $blocks = [])
    {
        // line 139
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section clearfix\" role=\"complementary\">
            ";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 152
    public function block_content($context, array $blocks = [])
    {
        // line 153
        echo "        <div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            ";
        // line 156
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 157
            echo "              <main";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "col-md-6"], "method")), "html", null, true);
            echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
            // line 160
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                </section>
              </main>
            ";
        } else {
            // line 164
            echo "              <main";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
            echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
            // line 167
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                </section>
              </main>
            ";
        }
        // line 171
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 172
            echo "              <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["sidebar_first_attributes"] ?? null), "removeClass", [0 => "col-md-3"], "method"), "addClass", [0 => "col-md-4 offset-md-1"], "method")), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 178
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 179
            echo "              <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null)), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 181
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 185
        echo "          </div>
        </div>
      ";
    }

    // line 230
    public function block_footer($context, array $blocks = [])
    {
        // line 231
        echo "        <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 232
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 233
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 234
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
              ";
            // line 235
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
              ";
            // line 236
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
              ";
            // line 237
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 240
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 241
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 242
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 245
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/cpr_bootstrap_barrio/templates/page--node--add--be-involved.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 245,  474 => 242,  471 => 241,  468 => 240,  462 => 237,  458 => 236,  454 => 235,  450 => 234,  447 => 233,  445 => 232,  440 => 231,  437 => 230,  431 => 185,  424 => 181,  418 => 179,  415 => 178,  408 => 174,  402 => 172,  399 => 171,  392 => 167,  385 => 164,  378 => 160,  371 => 157,  369 => 156,  364 => 154,  359 => 153,  356 => 152,  348 => 141,  344 => 139,  341 => 138,  336 => 127,  332 => 125,  329 => 124,  325 => 122,  323 => 121,  317 => 117,  314 => 116,  308 => 113,  305 => 112,  303 => 111,  299 => 110,  293 => 106,  291 => 105,  287 => 103,  285 => 102,  280 => 99,  278 => 98,  274 => 97,  270 => 95,  266 => 93,  264 => 92,  259 => 91,  255 => 89,  251 => 87,  248 => 86,  242 => 83,  239 => 82,  237 => 81,  233 => 80,  228 => 79,  224 => 77,  222 => 76,  217 => 75,  214 => 74,  211 => 73,  204 => 247,  202 => 230,  199 => 229,  192 => 225,  187 => 224,  182 => 221,  175 => 217,  169 => 215,  166 => 214,  159 => 210,  152 => 207,  145 => 203,  138 => 200,  136 => 199,  130 => 197,  128 => 196,  124 => 195,  120 => 194,  117 => 193,  115 => 192,  109 => 188,  107 => 152,  103 => 150,  97 => 146,  94 => 145,  91 => 138,  88 => 137,  81 => 133,  77 => 132,  74 => 131,  72 => 130,  69 => 129,  67 => 73,  63 => 72,  59 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cpr_bootstrap_barrio/templates/page--node--add--be-involved.html.twig", "/var/www/stadmin/data/www/repo/web/themes/custom/cpr_bootstrap_barrio/templates/page--node--add--be-involved.html.twig");
    }
}
