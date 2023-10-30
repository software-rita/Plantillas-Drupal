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

/* themes/RITA/templates/node/node--proyectos--full.html.twig */
class __TwigTemplate_2df2b222f4780b2646e044cc1dce7327 extends Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_proyecto", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1)) {
            // line 2
            echo "<div class=\"carousel-interno\" style=\"background: no-repeat url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_proyecto", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "fileuri", [], "any", false, false, true, 2), 2, $this->source)), "html", null, true);
            echo "') center center;\">
";
        } else {
            // line 4
            echo "<div class=\"carousel-interno\" style=\"background: no-repeat url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 4, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 4, $this->source)), "html", null, true);
            echo "/images/proyecto.jpg') center center;\">
";
        }
        // line 6
        echo "    <div class=\"carousel-filter\">
        <div class=\"carousel-caption d-md-block\">
            <h5 class=\"carusel-proyect-title\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 8, $this->source), "html", null, true);
        echo "</h5>
            <p class=\"carusel-proyect-description\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_proyecto", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--proyectos--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  57 => 8,  53 => 6,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--proyectos--full.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--proyectos--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2);
        static $functions = array("file_url" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['file_url']
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
