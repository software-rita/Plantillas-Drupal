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

/* themes/RITA/templates/node/node--investigadores--teaser.html.twig */
class __TwigTemplate_316a177cdf9a8a44a46a58953bab0978 extends Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/about-styling"), "html", null, true);
        echo "
<div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModal";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
    <h3>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cargo", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h3>
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4)) {
            // line 5
            echo "    <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "fileuri", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
    ";
        } else {
            // line 7
            echo "    <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
            echo "/images/investigadores.png\" class=\"img-fluid\" alt=\"\">
    ";
        }
        // line 9
        echo "    <p>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--investigadores--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  59 => 7,  53 => 5,  51 => 4,  47 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--investigadores--teaser.html.twig", "/var/www/html/plantilla-unidades/themes/RITA/templates/node/node--investigadores--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library', 'file_url']
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
