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
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 28)) {
                // line 29
                echo "  <section id=\"semilleros\" class=\"tab-pane fade\">
    <div class=\"section-title\">
      <h2 data-aos=\"fade-down\">Semilleros</h2>
    </div>
    <div id=\"accordion-container\">
      ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("pdf_semilleros", "pdf_semilleros"), "html", null, true);
                echo "
      ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("semilleros", "semilleros"), "html", null, true);
                echo "
    </div>
  </section>
  <section id=\"RITA\" class=\"tab-pane fade\">
    <div class=\"section-title\">
      <h3 class=\"tituloTeam\" data-aos=\"fade-down\" style=\"padding-top: 50px;\">Desarrollador por la <a
          href=\"https://rita.udistrital.edu.co/\" target=\"_blank\">Red de Investigaciones de Tecnología Avanzada
          RITA</a></h3>
      <p sty>En RITA, estamos comprometidos en brindar apoyo a nuestros colegas investigadores al ofrecer distintos <a
          href=\"https://rita.udistrital.edu.co/consultar-servicios/\" target=\"_blank\"
          style=\"color: var(--main-1-color); text-decoration: underline;\"><strong>servicios</strong></a> profesionales
        para promover su labor investigativa.</p>
      <h3 class=\"tituloTeam\" data-aos=\"zoom-in-down\" style=\"padding-top: 50px;\">¿Cómo Solicitar un Sitio Web
        Investigativo?</h3>
      <p>Si eres investigador de la Universidad Distrital Francisco José de Caldas y deseas solicitar nuestros servicios
        de creación de sitios web, puedes comunícarte con nuestro equipo de desarrollo web a través de nuestro centro de
        solcitudes dando click en el siguiente enlace: <a
          href=\"https://rita.udistrital.edu.co/soporte2/upload/open.php?topicId=45&investigacion=138\" target=\"_blank\"
          style=\"color: var(--main-1-color); text-decoration: underline;\"><strong>Centro de solicitudes
            RITA</strong></a>. En este enlace llena los campos obligatorios, crea la solicitud y nuestro equipo de
        desarrollo se comunicará para dar solución a la solicitud.</p>
      <p><strong>Estamos aquí para ayudarte en cada paso del proceso y garantizar que tu sitio web sea una herramienta
          efectiva para tu investigación y divulgación académica.</strong></p>
      <!-- Equipo desarrollo -->
      <h3 class=\"tituloTeam\" data-aos=\"zoom-in-down\" style=\"padding-top: 50px;\">Equipo Desarrollo RITA</h3>
    </div>

    <div class=\"owl-carousel members-carousel members\">
      <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE1\">
        <h3>Desarrolladora</h3>
        <img src=\"";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 65, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 65, $this->source)), "html", null, true);
                echo "/images/Equipo/Ana_Garcia.png\" class=\"img-fluid\" alt=\"\">
        <p>Ana María García Acosta</p>
      </div>
      <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE2\">
        <h3>Desarrolladora</h3>
        <img src=\"";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 70, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 70, $this->source)), "html", null, true);
                echo "/images/Equipo/Liliana_Herrera.png\" class=\"img-fluid\" alt=\"\">
        <p>Luz Liliana Herrera Polo</p>
      </div>
      <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE3\">
        <h3>Servicios TI</h3>
        <img src=\"";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 75, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 75, $this->source)), "html", null, true);
                echo "/images/Equipo/Jhonnatan_Daza.png\" class=\"img-fluid\" alt=\"\">
        <p>Jhonnatan Leonardo Daza Ibarra</p>
      </div>
      <div class=\"member-item\" data-toggle=\"modal\" data-target=\"#memberModalE4\">
        <h3>Apoyo TI</h3>
        <img src=\"";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 80, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 80, $this->source)), "html", null, true);
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
                // line 92
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 92, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 92, $this->source)), "html", null, true);
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
                // line 120
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 120, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 120, $this->source)), "html", null, true);
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
            <a class=\"btn-team linkedin btn btn-more\" target=”_blank”
              href=\"https://www.linkedin.com/in/lherrerap/\">LinkedIn</a>
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
                // line 148
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 148, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 148, $this->source)), "html", null, true);
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
                // line 176
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 176, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 176, $this->source)), "html", null, true);
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
      <p><strong>Si tienes alguna pregunta o deseas iniciar el proceso de solicitud de un sitio web, por favor no dudes
          en ponerte en contacto con nosotros.</strong></p>
    </div>
  </section>
  <section id=\"productos\" class=\"tab-pane fade\">
    <div class=\"section-title\">
      <h2 data-aos=\"fade-down\" style=\"padding-bottom: 0em; margin-bottom: 0em;\">Productos GrupLAC</h2>
    </div>
    <div>
      ";
                // line 206
                if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasRole", [0 => "content_editor"], "method", false, false, true, 206) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasRole", [0 => "administrator"], "method", false, false, true, 206))) {
                    // line 207
                    echo "      <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("RITAproducts.productos"));
                    echo "\" class=\"btn btn-more\">Actualizar datos</a>
      ";
                }
                // line 209
                echo "      ";
                // line 210
                echo "      ";
                if (($context["json_data"] ?? null)) {
                    // line 211
                    echo "      ";
                    // line 212
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["json_data"] ?? null));
                    foreach ($context['_seq'] as $context["category"] => $context["items"]) {
                        // line 213
                        echo "      <div class=\"section-title\">
        <h3>";
                        // line 214
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["category"], 214, $this->source), "html", null, true);
                        echo "</h3>
      </div>
      <div id=\"cards-finish\" class=\"card-group\">
        <div class=\"row row-cols-1 row-cols-md-3\" style=\"margin-bottom: 30px;\">
          ";
                        // line 218
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["items"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 219
                            echo "          <div class=\"col\">
            <div class=\"card .h-100\">
              <div class=\"card-body\">
                <div class=\"container-title\">
                  <h5 class=\"card-title\">";
                            // line 223
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "tipo", [], "any", false, false, true, 223), 223, $this->source), "html", null, true);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "verificacion", [], "any", false, false, true, 223)) {
                                echo "<i class=\"icofont-check-circled\"></i>";
                            }
                            echo "</h5>
                </div>
                <p class=\"card-text desc\">";
                            // line 225
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "descripcion", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
                            echo "</p>

              </div>
            </div>
          </div>
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 231
                        echo "        </div>
      </div>
      <hr>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 235
                    echo "      ";
                } else {
                    // line 236
                    echo "      <p>No se encontraron datos JSON.</p>
      ";
                }
                // line 238
                echo "


    </div>
  </section>
  ";
            }
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
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
        // line 246
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
        return array (  384 => 246,  370 => 244,  362 => 238,  358 => 236,  355 => 235,  346 => 231,  334 => 225,  325 => 223,  319 => 219,  315 => 218,  308 => 214,  305 => 213,  300 => 212,  298 => 211,  295 => 210,  293 => 209,  287 => 207,  285 => 206,  252 => 176,  221 => 148,  190 => 120,  159 => 92,  144 => 80,  136 => 75,  128 => 70,  120 => 65,  87 => 35,  83 => 34,  76 => 29,  73 => 28,  56 => 27,  52 => 25,  46 => 23,  44 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig", "/var/www/html/plantilla/themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "for" => 27);
        static $filters = array("escape" => 20);
        static $functions = array("attach_library" => 20, "drupal_view" => 34, "path" => 207);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['attach_library', 'drupal_view', 'path']
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
