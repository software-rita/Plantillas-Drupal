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

/* themes/RITA/templates/node/node--contacto-inicio--full.html.twig */
class __TwigTemplate_7eba8c5319b3a2df2251ef5475477ffd extends Template
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
<!-- ======= Contact Section ======= -->
<section id=\"contact\" class=\"contact\">
    <div class=\"container\">
        <div class=\"section-title\" data-aos=\"fade-up\">
            <h2>Información de contacto</h2>
            <p>¿Tienes alguna duda o solicitud? Por favor puedes comunicarte en los siguientes medios o dejarnos un
                mensaje para ponernos en contacto contigo.</p>
        </div>
        <div class=\"row no-gutters justify-content-center\" data-aos=\"fade-up\">
            <div class=\"col-lg-5 d-flex align-items-stretch\">
                <div class=\"info\">
                    <div class=\"address\">
                        <i class=\"icofont-google-map\"></i>
                        <h4>Dirección:</h4>
                        <p>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_direccion_grupo", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"email mt-4\">
                        <i class=\"icofont-envelope\"></i>
                        <h4>Contactanos</h4>
                        <p>Dejanos tu mensaje o escribenos a ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_correo_grupo", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</p>
                        ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "contact"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-flex align-items-stretch\">
                <!-- ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_frame_maps", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source));
        echo " -->
                <iframe style=\"border:0; width: 100%; height: auto;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8091672312576!2d-74.06764138517931!3d4.628109843571235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a286d598bd5%3A0xddf14904a87dfb47!2sUniversidad%20Distrital%20Francisco%20Jos%C3%A9%20de%20Caldas!5e0!3m2!1ses!2sco!4v1597709409446!5m2!1ses!2sco\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
            </div>
        </div>

    </div>
</section>
<!-- End Contact Section -->";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--contacto-inicio--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  69 => 22,  65 => 21,  57 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--contacto-inicio--full.html.twig", "/var/www/html/practica_grupos/themes/RITA/templates/node/node--contacto-inicio--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "raw" => 27);
        static $functions = array("attach_library" => 1, "drupal_entity" => 22);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw'],
                ['attach_library', 'drupal_entity']
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
