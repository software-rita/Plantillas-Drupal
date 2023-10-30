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

/* themes/RITA/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_a9d0d5ed0decd5900d2626ec3d9eda68 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["pager_action_classes"] = [0 => "pager__link", 1 => "pager__link--mini", 2 => "pager__link--action-link", 3 => "paginacion1"];
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 21) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 21))) {
            // line 22
            echo "<div class=\"container centrar\">
    <ul";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "pager__items", 1 => "js-pager__items", 2 => "paginacion"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo ">
      ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 24)) {
                // line 25
                echo "        ";
                ob_start(function () { return ''; });
                // line 26
                echo "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\">
            <a";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 27), "attributes", [], "any", false, false, true, 27), "addClass", [0 => ($context["pager_action_classes"] ?? null)], "method", false, false, true, 27), "setAttribute", [0 => "title", 1 => t("Go to previous page")], "method", false, false, true, 27), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 27), "href", [], "any", false, false, true, 27)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
                echo ">
              «
            </a>
          </li>
        ";
                $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
                // line 32
                echo "      ";
            }
            // line 33
            echo "
      ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 34)) {
                // line 35
                echo "        <li class=\"pager__item pager__item--mini pager__item--current paginacion1\">
          <span class=\"visually-hidden\">
            ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                echo "
          </span>
          ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
        </li>
      ";
            }
            // line 42
            echo "
      ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 43)) {
                // line 44
                echo "        ";
                ob_start(function () { return ''; });
                // line 45
                echo "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--next\">
            <a";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 46), "attributes", [], "any", false, false, true, 46), "addClass", [0 => ($context["pager_action_classes"] ?? null)], "method", false, false, true, 46), "setAttribute", [0 => "title", 1 => t("Go to next page")], "method", false, false, true, 46), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 46), "href", [], "any", false, false, true, 46)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                echo ">
              »</a>
          </li>
        ";
                $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
                // line 50
                echo "      ";
            }
            // line 51
            echo "    </ul>
</div>
";
        }
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", 34, "full"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  114 => 51,  111 => 50,  109 => 44,  102 => 46,  99 => 45,  96 => 44,  94 => 43,  91 => 42,  85 => 39,  80 => 37,  76 => 35,  74 => 34,  71 => 33,  68 => 32,  66 => 25,  58 => 27,  55 => 26,  52 => 25,  50 => 24,  46 => 23,  43 => 22,  41 => 21,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/views/views-mini-pager.html.twig", "/var/www/html/plantilla/themes/RITA/templates/views/views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 21, "apply" => 25);
        static $filters = array("escape" => 23, "t" => 27, "spaceless" => 25);
        static $functions = array("drupal_entity" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'apply'],
                ['escape', 't', 'spaceless'],
                ['drupal_entity']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
