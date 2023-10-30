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
  ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
</header>
<main role=\"main\">
  ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
</main>";
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
        return array (  86 => 60,  80 => 57,  76 => 55,  71 => 53,  69 => 52,  65 => 51,  63 => 50,  59 => 49,  57 => 48,  53 => 47,  51 => 46,  47 => 45,  45 => 44,  41 => 43,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/page.html.twig", "/var/www/html/plantilla/themes/RITA/templates/page.html.twig");
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
