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

/* themes/RITA/templates/node/node--sobre-nosotros-inicio--full.html.twig */
class __TwigTemplate_83487d7f8ad10b4b2700c6dd64db2b1e extends Template
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
 <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about counts\">
      <div class=\"section-title\" data-aos=\"fade-up\">
        <h2>Sobre Nosotros</h2>
        <p>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_introduccion_sobre_nosotro", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
        <div class=\"container\">
          <div class=\"row no-gutters\">
            <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
              <div class=\"count-box\">
                <div class=\"icon-box icon-box-principal w-100\">
                  <div class=\"icon\"><i class=\"icofont-clock-time\"></i></div>
                </div>
                <span data-toggle=\"counter-up\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_anios", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</span>
                <p><strong>Años</strong> de trayectoria como unidad investigativa de la Universidad Distrital.</p>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
              <div class=\"count-box\">
                <div class=\"icon-box icon-box-principal w-100\">
                  <div class=\"icon\"><i class=\"icofont-document-folder\"></i></div>
                </div>
                <span data-toggle=\"counter-up\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cant_articulos", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</span>
                <p><strong>Grupos de investigación</strong> adscritos actualmente a la unidad de investigación.</p>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
              <div class=\"count-box\">
                <div class=\"icon-box icon-box-principal w-100\">
                  <div class=\"icon\">
                    <i class=\"icofont-read-book\"></i>
                  </div>
                </div>
                <span data-toggle=\"counter-up\">";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cant_trabajos", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</span>
                <p><strong>Semilleros de investigación</strong> adscritos actualmente a la unidad de investigación.</p>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
              <div class=\"count-box\">
                <div class=\"icon-box icon-box-principal w-100\">
                  <div class=\"icon\">
                    <i class=\"icofont-users-alt-5\"></i>
                  </div>
                </div>
                <span data-toggle=\"counter-up\">";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cant_integrantes", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</span>
                <p><strong>Integrantes</strong> activos conformando un grupo interdisciplinario de trabajo.</p>
              </div>
            </div>
          </div>
        </div>
        <a href=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "SobreNosotros\" class=\"btn-more\">Leer más</a>
      </div>
    </section><!-- End About Section -->";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--sobre-nosotros-inicio--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 51,  98 => 45,  84 => 34,  70 => 23,  58 => 14,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--sobre-nosotros-inicio--full.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/node/node--sobre-nosotros-inicio--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "url" => 51);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library', 'url']
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
