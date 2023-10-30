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

/* themes/RITA/templates/page.html.twig */
class __TwigTemplate_a8257bfd4d2c7df8aecd9a2ccec36352 extends Template
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
        // line 42
        if ((($context["color_sitio"] ?? null) == "azul")) {
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/azul-styling"), "html", null, true);
            echo "
";
        } elseif ((        // line 44
($context["color_sitio"] ?? null) == "amarillo")) {
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/amarillo-styling"), "html", null, true);
            echo "
";
        } elseif ((        // line 46
($context["color_sitio"] ?? null) == "verde")) {
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/verde-styling"), "html", null, true);
            echo "
";
        } elseif ((        // line 48
($context["color_sitio"] ?? null) == "naranja")) {
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/naranja-styling"), "html", null, true);
            echo "
";
        } elseif ((        // line 50
($context["color_sitio"] ?? null) == "morado")) {
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/morado-styling"), "html", null, true);
            echo "
";
        } elseif ((        // line 52
($context["color_sitio"] ?? null) == "darkcyan")) {
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/dark-cyan-styling"), "html", null, true);
            echo "
";
        }
        // line 55
        echo "
  <header class=\"content-header clearfix\">
    <div class=\"layout-container\">
      ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
      ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
    </div>
  </header>

  <div class=\"layout-container\">
    ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
      ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 68)) {
            // line 69
            echo "        <div class=\"help\">
          ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 73
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
    </main>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 73,  108 => 70,  105 => 69,  103 => 68,  99 => 67,  93 => 64,  85 => 59,  81 => 58,  76 => 55,  71 => 53,  69 => 52,  65 => 51,  63 => 50,  59 => 49,  57 => 48,  53 => 47,  51 => 46,  47 => 45,  45 => 44,  41 => 43,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/page.html.twig", "/var/www/html/practica_grupos/themes/RITA/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42);
        static $filters = array("escape" => 43);
        static $functions = array("attach_library" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
