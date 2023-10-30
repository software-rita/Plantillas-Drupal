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

/* themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig */
class __TwigTemplate_c44235e7a6d19ad8f5c3bef3340bb66e extends Template
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
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/about-styling"), "html", null, true);
        echo "

";
        // line 22
        if (($context["title"] ?? null)) {
            // line 23
            echo "<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 23, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 25
        echo "
<div id=\"tabsContent\" class=\"tab-content\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 28
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 28)) {
                // line 29
                echo "      <section id=\"documentos\" class=\"tab-pane fade\">
          <div class=\"section-title\" id=\"filtro\">
            <h2 data-aos=\"fade-down\">Documentos</h2>
          </div>
          <div id=\"accordion-container\">
            ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("pdf_semilleros", "pdf_documentos"), "html", null, true);
                echo "
            ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("semilleros", "documentos"), "html", null, true);
                echo "
          </div>
      </section>
      <section id=\"RITA\" class=\"tab-pane fade\">
        <div class=\"section-title\">
          <h3 class=\"tituloTeam\" data-aos=\"fade-down\" style=\"padding-top: 50px;\">Desarrollador por la <a href=\"https://rita.udistrital.edu.co/\" target=\"_blank\">Red de Investigaciones de Tecnología Avanzada
            RITA</a></h3>
          <p sty>En RITA, estamos comprometidos en brindar apoyo a nuestros colegas investigadores al ofrecer distintos <a href=\"https://rita.udistrital.edu.co/consultar-servicios/\" target=\"_blank\" style=\"color: var(--main-1-color); text-decoration: underline;\"><strong>servicios</strong></a> profesionales para promover su labor investigativa.</p>
          <h3 class=\"tituloTeam\" data-aos=\"zoom-in-down\" style=\"padding-top: 50px;\">¿Cómo Solicitar un Sitio Web Investigativo?</h3>
          <p>Si eres investigador de la Universidad Distrital Francisco José de Caldas y deseas solicitar nuestros servicios de creación de sitios web, puedes comunícarte con nuestro equipo de desarrollo web a través de nuestro centro de solcitudes dando click en el siguiente enlace: <a href=\"https://rita.udistrital.edu.co/soporte2/upload/open.php?topicId=45&investigacion=138\" target=\"_blank\" style=\"color: var(--main-1-color); text-decoration: underline;\"><strong>Centro de solicitudes RITA</strong></a>. En este enlace llena los campos obligatorios, crea la solicitud y nuestro equipo de desarrollo se comunicará para dar solución a la solicitud.</p>
          <p><strong>Estamos aquí para ayudarte en cada paso del proceso y garantizar que tu sitio web sea una herramienta efectiva para tu investigación y divulgación académica.</strong></p>
          <!-- Equipo desarrollo -->
          <h3 class=\"tituloTeam\" data-aos=\"zoom-in-down\" style=\"padding-top: 50px;\">Equipo Desarrollo RITA</h3>
        </div>
    
        <div class=\"owl-carousel members-carousel members\">
          <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE1\">
            <h3>Desarrolladora</h3>
            <img src=\"";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 53, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 53, $this->source)), "html", null, true);
                echo "/images/Equipo/Ana_Garcia.png\" class=\"img-fluid\" alt=\"\">
            <p>Ana María García Acosta</p>
          </div>
          <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE2\">
            <h3>Desarrolladora</h3>
            <img src=\"";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 58, $this->source)), "html", null, true);
                echo "/images/Equipo/Liliana_Herrera.png\" class=\"img-fluid\" alt=\"\">
            <p>Luz Liliana Herrera Polo</p>
          </div>
          <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE3\">
            <h3>Servicios TI</h3>
            <img src=\"";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 63, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 63, $this->source)), "html", null, true);
                echo "/images/Equipo/Jhonnatan_Daza.png\" class=\"img-fluid\" alt=\"\">
            <p>Jhonnatan Leonardo Daza Ibarra</p>
          </div>
          <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE4\">
            <h3>Apoyo TI</h3>
            <img src=\"";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 68, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 68, $this->source)), "html", null, true);
                echo "/images/Equipo/William-Rueda.png\" class=\"img-fluid\" alt=\"\">
            <p>William Rueda</p>
          </div>
        </div>
        <div class=\"modal fade\" id=\"memberModalE1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"memberModalE1Label\"
          aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
              <button type=\"button\" class=\"close text-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
              <div class=\"modal-header text-center\">
                <img src=\"";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 80, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 80, $this->source)), "html", null, true);
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
                <a class=\"btn-team btn btn-more\" target=”_blank”
                  href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002012918\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank”
                  href=\"https://www.linkedin.com/in/ana-garcia8/\">LinkedIn</a>
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
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 108, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 108, $this->source)), "html", null, true);
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
                <a class=\"btn-team btn btn-more\" target=”_blank”
                  href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002012899\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank” href=\"https://www.linkedin.com/in/lherrerap/\">LinkedIn</a>
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
                // line 135
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 135, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 135, $this->source)), "html", null, true);
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
                <a class=\"btn-team btn btn-more\" target=”_blank”
                  href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002045535\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank”
                  href=\"https://www.linkedin.com/in/jhonnatan-daza-5962a0290/\">LinkedIn</a>
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
                // line 163
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 163, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 163, $this->source)), "html", null, true);
                echo "/images/Equipo/William-Rueda.png\" class=\"img-fluid\" alt=\"\">
                <div class=\"modal-title\">
                  <h3 id=\"memberModalE4Label\">William Rueda</h3>
                  <h5 id=\"memberModalE4Label\">Apoyo TI</h5>
                </div>
              </div>
              <div class=\"modal-body\">
                <p class=\"text-justify\">Ingeniero Electrónico de la Universidad Distrital Francisco José de caldas, con
                  conocimiento en redes e IoT.</p>
              </div>
              <div class=\"modal-footer\">
                <a class=\"btn-team btn btn-more\" target=”_blank”
                  href=\"https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0002089521\">cvLac</a>
                <a class=\"btn-team linkedin btn btn-more\" target=”_blank”
                  href=\"https://www.linkedin.com/in/willianrueda/\">LinkedIn</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"section-title\">
          <p><strong>Si tienes alguna pregunta o deseas iniciar el proceso de solicitud de un sitio web, por favor no dudes en ponerte en contacto con nosotros.</strong></p>
        </div>
      </section>
    ";
            }
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 190,  267 => 188,  239 => 163,  208 => 135,  178 => 108,  147 => 80,  132 => 68,  124 => 63,  116 => 58,  108 => 53,  87 => 35,  83 => 34,  76 => 29,  73 => 28,  56 => 27,  52 => 25,  46 => 23,  44 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig", "/var/www/html/plantilla-unidades/themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "for" => 27);
        static $filters = array("escape" => 20);
        static $functions = array("attach_library" => 20, "drupal_view" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
