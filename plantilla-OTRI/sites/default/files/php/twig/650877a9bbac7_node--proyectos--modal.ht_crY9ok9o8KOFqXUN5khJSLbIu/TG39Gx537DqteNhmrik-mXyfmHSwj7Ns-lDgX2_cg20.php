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

/* themes/RITA/templates/node/node--proyectos--modal.html.twig */
class __TwigTemplate_f6369749d0beddb2dca5b0c5c718e46d extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/principal-styling"), "html", null, true);
        echo "
<div class=\"modal fade\" id=\"convocatoriaModal";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\"
    aria-labelledby=\"convocatoriaModal";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "Label\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close text-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal-header text-center\">
                <div class=\"modal-title\">
                    <h3 id=\"convocatoriaModal";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "Label\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 11, $this->source), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"modal-body\">
                <p class=\"text-justify\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_proyecto", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</p>
                    <h4>Dirigido a:</h4>
                    <p class=\"text-justify\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_dirigido", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</p>
                    <h4>Plazo de inscripción</h4>
                    <p>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_fecha_finalizacion", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</p>
                    <h4>Fecha de realización</h4>
                    <p>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_fecha_convocatoria", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_enlace_inscripcion", [], "any", false, false, true, 24), 0, [], "any", false, false, true, 24), "url", [], "any", false, false, true, 24)) {
            // line 25
            echo "                <a class=\"btn btn-more\" target=”_blank”
                    href=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_enlace_inscripcion", [], "any", false, false, true, 26), 0, [], "any", false, false, true, 26), "url", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\">Inscripción</a>
                ";
        }
        // line 28
        echo "                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--proyectos--modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  93 => 26,  90 => 25,  88 => 24,  82 => 21,  77 => 19,  72 => 17,  67 => 15,  58 => 11,  47 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--proyectos--modal.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/node/node--proyectos--modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

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
