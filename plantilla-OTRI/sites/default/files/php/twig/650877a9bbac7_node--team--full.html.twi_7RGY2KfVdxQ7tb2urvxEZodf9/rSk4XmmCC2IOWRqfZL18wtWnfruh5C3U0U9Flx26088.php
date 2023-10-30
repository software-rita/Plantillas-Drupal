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

/* themes/RITA/templates/node/node--team--full.html.twig */
class __TwigTemplate_ba37ef9102133d2e84541ac7333de01a extends Template
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
<section id=\"team\" class=\"tab-pane\">
    <div class=\"section-title\">
        <h2 data-aos=\"fade-down\">Comité de Investigación</h2>
        <p>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_investigador", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</p>
        <h3 class=\"tituloTeam\" data-aos=\"zoom-in-down\">Coordinador</h3>
        ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_director", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
        ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("carrusel_de_integrantes", "carrusel_investigadores"), "html", null, true);
        echo "
        <h3 class=\"tituloTeam\" data-aos=\"zoom-in-down\" style=\"display: none;\">Equipo TI RITA</h3>
        <div class=\"owl-carousel members-carousel members\" style=\"display: none;\">
            <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE1\">
                <h3>Desarrolladora</h3>
                <img src=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 13, $this->source)), "html", null, true);
        echo "/images/Equipo/Ana_Garcia.png\" class=\"img-fluid\" alt=\"\">
                <p>Ana María García Acosta</p>
            </div>
            <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE2\">
                <h3>Desarrolladora</h3>
                <img src=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 18, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 18, $this->source)), "html", null, true);
        echo "/images/Equipo/Liliana_Herrera.png\" class=\"img-fluid\" alt=\"\">
                <p>Luz Liliana Herrera Polo</p>
            </div>
            <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE3\">
                <h3>Servicios TI</h3>
                <img src=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 23, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 23, $this->source)), "html", null, true);
        echo "/images/Equipo/Jhonnatan_Daza.png\" class=\"img-fluid\" alt=\"\">
                <p>Jhonnatan Leonardo Daza Ibarra</p>
            </div>
            <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModaE4\">
                <h3>Apoyo TI</h3>
                <img src=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 28, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 28, $this->source)), "html", null, true);
        echo "/images/Equipo/William-Rueda.png\" class=\"img-fluid\" alt=\"\">
                <p>William Rueda</p>
            </div>
        </div>
    </div>
</section>
";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("modal_de_integrantes", "modal_investigadores"), "html", null, true);
        echo "
<div class=\"modal fade\" id=\"memberModalE1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"memberModalE1Label\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close text-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal-header text-center\">
                <img src=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 43, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 43, $this->source)), "html", null, true);
        echo "/images/Equipo/Ana_Garcia.png\" class=\"img-fluid\" alt=\"\">
                <div class=\"modal-title\">
                    <h3 id=\"memberModalE1Label\">Desarrolladora</h3>
                    <h5 id=\"memberModalE1Label\">Ana María García Acosta</h5>
                </div>
            </div>
            <div class=\"modal-body\">
                <p class=\"text-justify\">Ingeniera de Sistemas de la Universidad Distrital Francisco José de Caldas, con
                    experiencia en desarrollo de software.</p>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn-team btn btn-more\" target=”_blank” href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002012918\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank” href=\"https://www.linkedin.com/in/ana-garcia8/\">LinkedIn</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"memberModalE2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"memberModalE2Label\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close text-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal-header text-center\">
                <img src=\"";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 69, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 69, $this->source)), "html", null, true);
        echo "/images/Equipo/Liliana_Herrera.png\" class=\"img-fluid\" alt=\"\">
                <div class=\"modal-title\">
                    <h3 id=\"memberModalE2Label\">Desarrolladora</h3>
                    <h5 id=\"memberModalE2Label\">Luz Liliana Herrera Polo</h5>
                </div>
            </div>
            <div class=\"modal-body\">
                <p class=\"text-justify\">Ingeniería de Sistemas de la Universidad Distrital Francisco José de Caldas, con
                    experiencia en el diseño y desarrollo de software.</p>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn-team btn btn-more\" target=”_blank” href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002012899\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank” href=\"/#\">LinkedIn</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"memberModalE3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"memberModalE3Label\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close text-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal-header text-center\">
                <img src=\"";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 95, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 95, $this->source)), "html", null, true);
        echo "/images/Equipo/Jhonnatan_Daza.png\" class=\"img-fluid\" alt=\"\">
                <div class=\"modal-title\">
                    <h3 id=\"memberModalE3Label\">Jhonnatan Leonardo Daza Ibarra</h3>
                    <h5 id=\"memberModalE3Label\">Servicios TI</h5>
                </div>
            </div>
            <div class=\"modal-body\">
                <p class=\"text-justify\">Ingeniero de Sistemas de la Universidad Distrital Francisco José de caldas, con
                    conocimientos en servidores.</p>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn-team btn btn-more\" target=”_blank” href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002045535\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank” href=\"https://www.linkedin.com/in/jhonnatan-daza-5962a0290/\">LinkedIn</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"memberModalE4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"memberModalE4Label\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close text-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal-header text-center\">
                <img src=\"";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 121, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 121, $this->source)), "html", null, true);
        echo "/images/Equipo/William-Rueda.png\" class=\"img-fluid\" alt=\"\">
                <div class=\"modal-title\">
                    <h3 id=\"memberModalE4Label\">William Rueda</h3>
                    <h5 id=\"memberModalE4Label\">Apoyo TI</h5>
                </div>
            </div>
            <div class=\"modal-body\">
                <p class=\"text-justify\">Ingeniero Electrónico de la Universidad Distrital Francisco José de caldas, con conocimiento en redes e IoT.</p>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn-team btn btn-more\" target=”_blank” href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002089521\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank” href=\"https://www.linkedin.com/in/willianrueda/\">LinkedIn</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--team--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 121,  166 => 95,  137 => 69,  108 => 43,  96 => 34,  87 => 28,  79 => 23,  71 => 18,  63 => 13,  55 => 8,  51 => 7,  46 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--team--full.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/node/node--team--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "drupal_view" => 8);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library', 'drupal_view']
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
