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

/* themes/RITA/templates/node/node--publicacion--full.html.twig */
class __TwigTemplate_4d0622a5262157879d6dca620f6e1336 extends Template
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
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/publicaciones-styling"), "html", null, true);
        echo "
<section id=\"publicacion\">
    <!-- seccion heading -->
    <div class=\"cabecera\" style=\"background-image: url('";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_principal", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "fileuri", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
        echo "');\">
        <div class=\"container-filter\">
            <!-- seccion titulo noticia -->
            <div class=\"container centrar barraIzquierda\">
                <h3 class=\"title-cabecera\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 9, $this->source), "html", null, true);
        echo "</h3>
            </div>
            <!-- seccion iconos informacion -->
            <div class=\"container info\">
                <i class=\"icofont-calendar\"><span class=\"descrIconos\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 13), 13, $this->source), "d/m/Y"), "html", null, true);
        echo "</span></i>
                <i class=\"icofont-clock-time\"><span class=\"descrIconos\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 14), 14, $this->source), "h:i:s A"), "html", null, true);
        echo "</span></i>
                <!-- seccion iconos redes sociales -->
                <div class=\"container social\">
                    ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("social_sharing_buttons_block"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
    <!-- seccion aside -->
    <div class=\"container con-sidebar\">
        <article>
            <div class=\"contenido\">
                <h2 class=\"principal-title\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 26, $this->source), "html", null, true);
        echo "</h2>
                ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cuerpo_publiacacion", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source));
        echo "
            </div>
            <!-- seccion paginacion  -->
            <div class=\"centrar\">
                <ul class=\"paginacion\">
                    ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "rita_prevnext"), "html", null, true);
        echo "
                </ul>
            </div>
        </article>
        ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("recomendaciones_publicaciones", "recomendaciones_publicaciones", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
        echo "
    </div>
</section>
";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", 34, "full"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--publicacion--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  104 => 36,  97 => 32,  89 => 27,  85 => 26,  73 => 17,  67 => 14,  63 => 13,  56 => 9,  49 => 5,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--publicacion--full.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--publicacion--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "date" => 13, "raw" => 27);
        static $functions = array("attach_library" => 1, "file_url" => 5, "drupal_block" => 17, "drupal_entity" => 32, "drupal_view" => 36);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date', 'raw'],
                ['attach_library', 'file_url', 'drupal_block', 'drupal_entity', 'drupal_view']
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
