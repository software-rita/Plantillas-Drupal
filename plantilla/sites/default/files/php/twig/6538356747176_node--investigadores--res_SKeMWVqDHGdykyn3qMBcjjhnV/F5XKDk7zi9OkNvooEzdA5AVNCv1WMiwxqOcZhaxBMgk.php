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

/* themes/RITA/templates/node/node--investigadores--resumen_director.html.twig */
class __TwigTemplate_e2e78c2231b866b3fd9cf492a48d0c28 extends Template
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
<div class=\"tarjeta_equipo\">
    <div class=\"card\">
        <div class=\"circle\">
            ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5)) {
            // line 6
            echo "            <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "fileuri", [], "any", false, false, true, 6), 6, $this->source)), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Director\">
            ";
        } else {
            // line 8
            echo "            <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
            echo "/images/investigadores.png\" class=\"img-fluid\" alt=\"Director\">
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"divider\"></div>
        <p class=\"name\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 12, $this->source), "html", null, true);
        echo "</p>
        <div class=\"divider\"></div>
        <p class=\"description\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_investigador", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
        <div class=\"contact\">
            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cvlac", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16), "url", [], "any", false, false, true, 16)) {
            // line 17
            echo "            <a class=\"btn-team btn btn-more\" target=”_blank” href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cvlac", [], "any", false, false, true, 17), 0, [], "any", false, false, true, 17), "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\">cvLac</a>
            ";
        }
        // line 19
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_linkedin", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "url", [], "any", false, false, true, 19)) {
            // line 20
            echo "            <a class=\"btn-team linkedin btn btn-more\" target=”_blank” href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_linkedin", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\">LinkedIn</a>
            ";
        }
        // line 22
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--investigadores--resumen_director.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  85 => 20,  82 => 19,  76 => 17,  74 => 16,  69 => 14,  64 => 12,  60 => 10,  54 => 8,  48 => 6,  46 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--investigadores--resumen_director.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--investigadores--resumen_director.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 6);

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
