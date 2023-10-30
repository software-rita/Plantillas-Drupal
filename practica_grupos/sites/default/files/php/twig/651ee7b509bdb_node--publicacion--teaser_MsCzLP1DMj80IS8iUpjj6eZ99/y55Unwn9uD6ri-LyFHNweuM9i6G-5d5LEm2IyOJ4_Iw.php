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

/* themes/RITA/templates/node/node--publicacion--teaser.html.twig */
class __TwigTemplate_60acbd700d822ad3fbb75ed1a5758ebe extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/publicaciones-styling"), "html", null, true);
        echo "
<a href=\"";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 2, $this->source), "html", null, true);
        echo "\" class=\"grid-columnas\">
<section class=\"card\">
    <div class=\"bg-image secundaria columna\"
        style=\"background-image: url('";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_principal", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "fileuri", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
        echo "');\">
    </div>
    <div class=\"contenido\">
        <h3>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 8, $this->source), "html", null, true);
        echo "</h3>
        <p> 
        ";
        // line 10
        $context["text"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cuerpo_publiacacion", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), 10, $this->source))));
        // line 11
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 11, $this->source)) > 200)) ? ((twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 11, $this->source), 0, 201), " "), 0,  -1), " ") . "&hellip;")) : (($context["text"] ?? null))));
        echo "
        </p>
        <p class=\"autor\">
            ";
        // line 14
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 14), "m") == 1)) {
            // line 15
            echo "            Enero
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 16
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 16), "m") == 2)) {
            // line 17
            echo "            Febrero
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 18
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 18), "m") == 3)) {
            // line 19
            echo "            Marzo
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 20
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 20), "m") == 4)) {
            // line 21
            echo "            Abril
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 22
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 22), "m") == 5)) {
            // line 23
            echo "            Mayo
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 24
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 24), "m") == 6)) {
            // line 25
            echo "            Junio
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 26
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 26), "m") == 7)) {
            // line 27
            echo "            Julio
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 28
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 28), "m") == 8)) {
            // line 29
            echo "            Agosto
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 30
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 30), "m") == 9)) {
            // line 31
            echo "            Septiembre
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 32
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 32), "m") == 10)) {
            // line 33
            echo "            Octubre
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 34
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 34), "m") == 11)) {
            // line 35
            echo "            Noviembre
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 36
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 36), "m") == 12)) {
            // line 37
            echo "            Diciembre
            ";
        }
        // line 39
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 39), 39, $this->source), "d, Y"), "html", null, true);
        echo "
        </p>
    </div>
</section>
</a>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--publicacion--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  126 => 37,  124 => 36,  121 => 35,  119 => 34,  116 => 33,  114 => 32,  111 => 31,  109 => 30,  106 => 29,  104 => 28,  101 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  74 => 16,  71 => 15,  69 => 14,  62 => 11,  60 => 10,  55 => 8,  49 => 5,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--publicacion--teaser.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--publicacion--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 14);
        static $filters = array("escape" => 1, "trim" => 10, "striptags" => 10, "render" => 10, "raw" => 11, "length" => 11, "join" => 11, "slice" => 11, "split" => 11, "date" => 14);
        static $functions = array("attach_library" => 1, "file_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trim', 'striptags', 'render', 'raw', 'length', 'join', 'slice', 'split', 'date'],
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
