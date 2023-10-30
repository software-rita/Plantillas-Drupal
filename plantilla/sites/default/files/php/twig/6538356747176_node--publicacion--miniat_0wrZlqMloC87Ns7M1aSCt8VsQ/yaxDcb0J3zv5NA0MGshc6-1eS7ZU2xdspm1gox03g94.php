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

/* themes/RITA/templates/node/node--publicacion--miniatura.html.twig */
class __TwigTemplate_f1bb56d5a8ee00f246fc165e4a30e19d extends Template
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
        echo "\">
<section class=\"card\">
    <div class=\"bg-image principal columna\"
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
        <p class=\"autor\">
            ";
        // line 10
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 10), "m") == 1)) {
            // line 11
            echo "            Enero
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 12
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 12), "m") == 2)) {
            // line 13
            echo "            Febrero
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 14
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 14), "m") == 3)) {
            // line 15
            echo "            Marzo
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 16
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 16), "m") == 4)) {
            // line 17
            echo "            Abril
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 18
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 18), "m") == 5)) {
            // line 19
            echo "            Mayo
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 20
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 20), "m") == 6)) {
            // line 21
            echo "            Junio
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 22
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 22), "m") == 7)) {
            // line 23
            echo "            Julio
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 24
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 24), "m") == 8)) {
            // line 25
            echo "            Agosto
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 26
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 26), "m") == 9)) {
            // line 27
            echo "            Septiembre
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 28
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 28), "m") == 10)) {
            // line 29
            echo "            Octubre
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 30
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 30), "m") == 11)) {
            // line 31
            echo "            Noviembre
            ";
        } elseif ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 32
($context["node"] ?? null), "createdtime", [], "any", false, false, true, 32), "m") == 12)) {
            // line 33
            echo "            Diciembre
            ";
        }
        // line 35
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 35), 35, $this->source), "d, Y"), "html", null, true);
        echo "
        </p>
    </div>
</section>
</a>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--publicacion--miniatura.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  117 => 33,  115 => 32,  112 => 31,  110 => 30,  107 => 29,  105 => 28,  102 => 27,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  60 => 10,  55 => 8,  49 => 5,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--publicacion--miniatura.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--publicacion--miniatura.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 1, "date" => 10);
        static $functions = array("attach_library" => 1, "file_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
