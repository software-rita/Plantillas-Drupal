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

/* themes/RITA/templates/node/node--investigadores--modal.html.twig */
class __TwigTemplate_6d53365c9e0b04bd4aa166bf701a55b7 extends Template
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
<div class=\"modal fade\" id=\"memberModal";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\"
    aria-labelledby=\"memberModal";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "Label\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close text-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal-header text-center\">
                ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10)) {
            // line 11
            echo "                <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11), "fileuri", [], "any", false, false, true, 11), 11, $this->source)), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                ";
        } else {
            // line 13
            echo "                <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 13, $this->source)), "html", null, true);
            echo "/images/investigadores.png\" class=\"img-fluid\" alt=\"\">
                ";
        }
        // line 15
        echo "                <div class=\"modal-title\">
                    <h3 id=\"memberModal";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "Label\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 16, $this->source), "html", null, true);
        echo "</h3>
                    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cargo", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17)) {
            // line 18
            echo "                    <h5 id=\"memberModal";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "Label\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cargo", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</h5>
                    ";
        }
        // line 20
        echo "                </div>
            </div>
            <div class=\"modal-body\">
                <p class=\"text-justify\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_investigador", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cvlac", [], "any", false, false, true, 26), 0, [], "any", false, false, true, 26), "url", [], "any", false, false, true, 26)) {
            // line 27
            echo "                <a class=\"btn-team btn btn-more\" target=”_blank” href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cvlac", [], "any", false, false, true, 27), 0, [], "any", false, false, true, 27), "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">cvLac</a>
                ";
        }
        // line 29
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_linkedin", [], "any", false, false, true, 29), 0, [], "any", false, false, true, 29), "url", [], "any", false, false, true, 29)) {
            // line 30
            echo "                <a class=\"btn-team linkedin btn btn-more\" target=”_blank”
                    href=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_linkedin", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31), "url", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">LinkedIn</a>
                ";
        }
        // line 33
        echo "                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--investigadores--modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  115 => 31,  112 => 30,  109 => 29,  103 => 27,  101 => 26,  95 => 23,  90 => 20,  82 => 18,  80 => 17,  74 => 16,  71 => 15,  65 => 13,  59 => 11,  57 => 10,  47 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--investigadores--modal.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/node/node--investigadores--modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 11);

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
