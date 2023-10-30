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

/* themes/RITA/templates/node/node--logros-y-avances-inicio--full.html.twig */
class __TwigTemplate_eba220bf6ded685e63f7db406f6b94a5 extends Template
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
<!-- ======= \"LOGROS\" Section ======= -->
<section id=\"acknowledgment\" class=\"acknowledgment\">
    <div class=\"container\">
        <div class=\"section-title\" data-aos=\"fade-up\">
            <h2>Logros y Avances</h2>
            <p>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_desc_logros", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
        </div>
        <section class=\"logros\">
            <div class=\"card-deck\" data-aos=\"fade-up\">
                <div class=\"card\">
                    <div class=\"card-img-top\" style=\"background-image: url('";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_img_reconocimiento", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "fileuri", [], "any", false, false, true, 12), 12, $this->source)), "html", null, true);
        echo "');\"></div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Reconocimiento</h5>
                        <hr>
                        <p class=\"card-text\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_desc_reconocimiento", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href='";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_url_gruplac", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "' class=\"card-link\" target=\"_blank\">Ver más</a>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-img-top\" style=\"background-image: url('";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_img_publicaciones", [], "any", false, false, true, 23), "entity", [], "any", false, false, true, 23), "fileuri", [], "any", false, false, true, 23), 23, $this->source)), "html", null, true);
        echo "');\"></div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Publicaciones</h5>
                        <hr>
                        <p class=\"card-text\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_desc_publicaciones", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "Publicaciones\" class=\"card-link\">Ver más</a>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-img-top\" style=\"background-image: url('";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_img_proyectos", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "fileuri", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
        echo "');\"></div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Proyectos</h5>
                        <hr>
                        <p class=\"card-text\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_desc_proyectos", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "Proyectos\" class=\"card-link\">Ver más</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--logros-y-avances-inicio--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  103 => 38,  96 => 34,  89 => 30,  83 => 27,  76 => 23,  69 => 19,  63 => 16,  56 => 12,  48 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--logros-y-avances-inicio--full.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--logros-y-avances-inicio--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 12, "url" => 30);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library', 'file_url', 'url']
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
