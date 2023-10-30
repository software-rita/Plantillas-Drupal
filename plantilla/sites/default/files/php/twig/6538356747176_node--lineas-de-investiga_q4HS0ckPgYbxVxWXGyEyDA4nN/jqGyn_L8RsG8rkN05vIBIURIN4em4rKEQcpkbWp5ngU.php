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

/* themes/RITA/templates/node/node--lineas-de-investigacion-inicio--full.html.twig */
class __TwigTemplate_8801a20c30d91b395b121bff5c89e6ff extends Template
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
<!-- ======= Líneas de investigación Section ======= -->
    <section id=\"Services\" class=\"Services section-bg\">
        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Líneas y áreas de Investigación</h2>
          <p>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_desc_linea", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>  
        </div>
        <div class=\"container-accordion\" data-aos=\"fade-up\">
          <!-- Imagen acordion -->
          <div class=\"img-accordion\" style=\"background: url('";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_img_lineas", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "fileuri", [], "any", false, false, true, 10), 10, $this->source)), "html", null, true);
        echo "') center center;\">
          </div>
          <!-- Inicio acordion -->
          <div id=\"accordion\">
            ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("vista_lineas", "lineas"), "html", null, true);
        echo "
          </div>
          <!-- Fin acordion -->
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--lineas-de-investigacion-inicio--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--lineas-de-investigacion-inicio--full.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--lineas-de-investigacion-inicio--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 10, "drupal_view" => 14);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library', 'file_url', 'drupal_view']
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
