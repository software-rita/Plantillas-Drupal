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

/* themes/RITA/templates/node/node--proyectos--teaser.html.twig */
class __TwigTemplate_9f20267dc33707e45e41367369716c37 extends Template
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
        echo "<div class=\"col\">
    <div class=\"card .h-100\">
        <div class=\"card-body\">
            <div class=\"container-title\">
                <h5 class=\"card-title\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 5, $this->source), "html", null, true);
        echo "</h5>
            </div>
            <p class=\"card-text desc\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_proyecto", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
            <div class=\"card-footer\">
                <p class=\"card-text\"><small class=\"text-muted\">Finalizado en ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_fecha_finalizacion", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "Y"), "html", null, true);
        echo "</small></p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--proyectos--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  50 => 7,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--proyectos--teaser.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--proyectos--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5, "date" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
                []
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
