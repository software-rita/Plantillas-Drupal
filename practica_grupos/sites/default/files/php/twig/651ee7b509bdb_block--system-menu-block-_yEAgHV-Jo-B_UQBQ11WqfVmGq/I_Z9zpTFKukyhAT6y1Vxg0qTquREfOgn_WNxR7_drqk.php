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

/* themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig */
class __TwigTemplate_fc14a1b15cd49b99340b25601dc1be65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["classes"] = [0 => "menu", 1 => "d-none", 2 => "d-lg-block"];
        // line 42
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 42), 42, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        echo "<div class=\"d-flex align-items-center fixed-top\">
  <div class=\"d-flex align-items-center logo mr-auto\">
    <a href=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">
      <img src=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/logoud_blanco.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
    </a>
    <a class=\"inicio\" style=\"text-align: left;\" href=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">Inicio</a>
  </div>
<nav role=\"navigation\" aria-labelledby=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 50, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 51
($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
  ";
        // line 53
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 53)) {
            // line 54
            echo "    ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 54);
            // line 55
            echo "  ";
        }
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "</nav>
</div>";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 58, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 58,  88 => 57,  83 => 60,  80 => 57,  78 => 56,  75 => 55,  72 => 54,  69 => 53,  65 => 51,  62 => 50,  57 => 48,  52 => 46,  48 => 45,  44 => 43,  42 => 42,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig", "/var/www/html/practica_grupos/themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 53, "block" => 57);
        static $filters = array("clean_id" => 42, "escape" => 46, "render" => 46, "without" => 51);
        static $functions = array("url" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'render', 'without'],
                ['url']
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
