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

/* themes/RITA/templates/node/node--footer--full.html.twig */
class __TwigTemplate_ea4093bbb45842eeaa480798991b971f extends Template
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
        echo "<!-- ======= Footer ======= -->
<section id=\"contacto\">
    <div class=\"lines-cont\">
        <hr class=\"line-amarilla\">
        <hr class=\"line-vinotinto\">
        <hr class=\"line-blanca\">
    </div>
    <footer>
        <div class=\"footer-ud\">
            <h3>Universidad Distrital <br> Francisco José de Caldas <br><em>NIT.899.999.230.7</em></h3>
            <a href=\"https://www.udistrital.edu.co/inicio\" target=\"blank\"><img
                    src=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/logoud_blanco.png"), "html", null, true);
        echo "\" alt=\"Logo UD\"></a>
            <p>
                Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación
                Nacional<br>
                <a href=\"https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=3499\" target=\"_blank\">Acuerdo de
                    creación N° 10 de 1948 del Concejo de Bogotá</a><br>
                <a href=\"https://autoevaluacionyacreditacion.udistrital.edu.co/sites/acreditacion/files/documentos/Resolucion%20MEN%20023653%20del%2010%20de%20diciebmre%20de%202021.pdf\"
                    target=\"_blank\">Acreditación Institucional de Alta Calidad - Resolución N° 23096 del 15 de diciembre
                    del 2016</a>
            </p>
            <div class=\"social_footer\">
                <a target=\"_blank\" href=\"https://www.facebook.com/UniversidadDistrital\"><i class=\"icofont-facebook\"></i></a>
                </li>
                <a target=\"_blank\" href=\"https://twitter.com/udistrital\"><i class=\"icofont-twitter\"></i></a></li>
                <a target=\"_blank\" href=\"https://www.instagram.com/universidaddistrital/\"><i class=\"icofont-instagram\"></i></a>
                </li>
                <a target=\"_blank\" href=\"https://www.youtube.com/user/udistritaltv\"><i
                        class=\"icofont-youtube-play\"></i></a></li>
            </div>
        </div>
        <div class=\"footer-normatividad\">
            <h3>Normatividad general</h3>
            <ul>
                <li><a href=\"https://sgral.udistrital.edu.co/xdata/csu/acu_2018-11.pdf\" target=\"_blank\">Proyecto Universitario Institucional – PUI</a></li>
                <li><a href=\"https://sgral.udistrital.edu.co/xdata/csu/acu_1997-003.pdf\" target=\"_blank\">Estatuto General</a></li>
            </ul>
            <h3>Normatividad académica</h3>
            <ul>
                <li><a href=\"https://sgral.udistrital.edu.co/xdata/sgral/cir_2022-003.pdf\" target=\"_blank\">Derechos pecuniarios</a></li>
                <li><a href=\"https://sgral.udistrital.edu.co/xdata/csu/acu_2002-011.pdf\" target=\"_blank\">Estatuto Docente</a></li>
                <li><a href=\"https://sgral.udistrital.edu.co/xdata/csu/acu_1996-004.pdf\" target=\"_blank\">Estatuto Académico</a></li>
                <li><a href=\"https://sgral.udistrital.edu.co/xdata/csu/acu_1993-027.pdf\" target=\"_blank\">Estatuto Estudiantil</a></li>
            </ul>
            <h3>Representante legal</h3>
            <span><i class=\"icofont-user-alt-2\"></i>Rector Dr. Giovanny Mauricio Tarazona Bermúdez</span><br>
            <span><i class=\"icofont-user-alt-2\"></i><strong>Correo electronico: </strong><a href=\"mailto:rectoria@udistrital.edu.co\">rectoria@udistrital.edu.co</a></span>
        </div>
        <div class=\"footer-datos\">
            <h3>Contáctenos</h3>
            <span><i class=\"icofont-user-alt-2\"></i><strong>Sede: </strong><a href=\"https://maps.app.goo.gl/xGidSnXEwcM6bpTH7\" target=\"_blank\">Calle 13 # 31 -75. Bogotá D.C, Colombia</a></span><br>
            <span><i class=\"icofont-user-alt-2\"></i><strong>Código postal: </strong>111611 - 111611537</span><br>
            <span><i class=\"icofont-user-alt-2\"></i><strong> Atención a usuarios del Centro De Relevo: </strong><br>(+57) 6013238314<br>(+57) 6013239300 ext: 1421<br>(+57) 6013238340<br>Lunes a viernes de 8:00 a.m. a 5:00 p.m.</span><br>
            <span><i class=\"icofont-user-alt-2\"></i><strong>Atención al ciudadano: </strong><a href=\"mailto:atencion@udistrital.edu.co\">atencion@udistrital.edu.co</a></span><br>
            <span><i class=\"icofont-user-alt-2\"></i><strong> Notificaciones judiciales: </strong><a href=\"mailto:notificacionjudicial@udistrital.edu.co\" target=\"_blank\">notificacionjudicial@udistrital.edu.co</a></span><br>
            <span><i class=\"icofont-user-alt-2\"></i><strong><a href=\"https://www.udistrital.edu.co/directorio\" target=\"_blank\">Directorio institucional</a></span><br>
            <!-- <p><strong>Sede: </strong>";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_direccion_sede", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "<br>

                <strong>PBX:</strong> (060) (1) ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_numero_telefono", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo " <br>

                <strong>Email:</strong> ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_correo", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "<br>

                <strong>Estatus:</strong> ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_estatus", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo " - Colciencias 
            </p>
            <h3>Director: </h3>
            <span><i class=\"icofont-user-alt-2\"></i>";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_nombre_director", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "</span> -->
        </div>
    </footer>
    <div class=\"lines-cont\">
        <hr class=\"line-amarilla\">
        <hr class=\"line-vinotinto\">
    </div>
    <div class=\"partners\">
        <div id=\"clients\">
            <div class=\"clients-wrap\">
                <ul id=\"clients-list\" class=\"clearfix\">
                    <li>
                        <a target=\"_blank\" href=\"http://olr.udistrital.edu.co/es\">
                            <img src=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/Emple-AP_1.png"), "html", null, true);
        echo "\"
                                alt=\"logo de Emple-AP\">
                        </a>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"http://www.mineducacion.gov.co/\">
                            <img src=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/mineducacion.png"), "html", null, true);
        echo "\"
                                alt=\"logo de mineducación\">
                        </a>
                    </li>
                    <li><a target=\"_blank\" href=\"http://www.bogota.gov.co/\"><img
                                src=\"";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/alcaldia_bogota.png"), "html", null, true);
        echo "\"
                                alt=\"logo de Alcaldia Mayor de Bogota\"></a></li>
                    <li><a target=\"_blank\" href=\"http://www.colombiacompra.gov.co/\"><img
                                src=\"";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/compra_eficiente_0.png"), "html", null, true);
        echo "\"
                                alt=\"logo de Colombia Compra Eficiente\"></a></li>
                    <li><a target=\"_blank\" href=\"http://www.veeduriadistrital.gov.co/\"><img
                                src=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/veeduria.png"), "html", null, true);
        echo "\"
                                alt=\"logo de Veeduría Distrital\"></a></li>
                    <li><a target=\"_blank\" href=\"https://www.mintic.gov.co/portal/inicio/\"><img
                                src=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/minTic_2.png"), "html", null, true);
        echo "\"
                                alt=\"logo de mintic\"></a></li>
                    <li><a target=\"_blank\" href=\"http://www.codigopostal.gov.co/\"><img
                                src=\"";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/codigopostel.jpg"), "html", null, true);
        echo "\"
                                alt=\"logo de Postal Colombia\"></a></li>
                    <li><a target=\"_blank\" href=\"http://estrategia.gobiernoenlinea.gov.co/\"><img
                                src=\"";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/gobierno_digital.png"), "html", null, true);
        echo "\"
                                alt=\"logo de Gobierno Digital\"></a></li>
                    <li><a target=\"_blank\" href=\"http://sofia.sdmujer.gov.co/\"><img
                                src=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/sofia.jpg"), "html", null, true);
        echo "\"
                                alt=\"logo de Secretaría Distrital de la Mujer\"></a></li>
                    <li><a target=\"_blank\" href=\"http://www.sdp.gov.co/micrositios/pot/que-es\"><img
                                src=\"";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/POT_1.png"), "html", null, true);
        echo "\"
                                alt=\"logo de Plan de Ordenamiento Territorial\"></a></li>
                    <li><a target=\"_blank\" href=\"http://www.bogota.gov.co/sdqs\"><img
                                src=\"";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/sqds.jpg"), "html", null, true);
        echo "\"
                                alt=\"logo de Sistema Distrital de Quejas y Soluciones\"></a></li>
                    <li><a target=\"_blank\" href=\"http://horalegal.inm.gov.co/\"><img
                                src=\"";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/hora-legal.jpg"), "html", null, true);
        echo "\"
                                alt=\"logo de Hora Legal Colombiana\"></a></li>
                    <li><a target=\"_blank\" href=\"https://rita.udistrital.edu.co/\"><img
                                src=\"";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/Lodo_RITA_color.png"), "html", null, true);
        echo "\"
                                alt=\"logo de RITA\"></a>
                    </li>
                    <li><a target=\"_blank\" href=\"https://cidc.udistrital.edu.co/\"><img
                                src=\"";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Sponsors/cidc.png"), "html", null, true);
        echo "\"
                                alt=\"logo de cidc\"></a>
                    </li>
                </ul>
            </div>
            <!-- @end .clients-wrap -->
        </div>
        <!-- @end #clients -->
    </div>
    <div class=\"lines-cont\">
        <hr class=\"line-amarilla\">
        <hr class=\"line-vinotinto\">
    </div>
    <h2 class=\"derechos\">© <Strong id=\"anio_footer\"></Strong> . Todos los Derechos Reservados. <a
            href=\"https://rita.udistrital.edu.co\" target=\"_blank\" style=\"color: rgba(255, 255, 255, 0.705);\">Red de
            Investigaciones de Tecnología Avanzada - Universidad Distrital Francisco José de Caldas</a></h2>
    <div class=\"contenido-derechos\">
        <ul>
            <li><a href=\"https://bogota.gov.co/sdqs/\" target=\"_blank\">SDQS</a></li>
            <li><a href=\"https://www.udistrital.edu.co/politica-de-privacidad\" target=\"_blank\">Políticas de
                    privacidad</a></li>
            <li><a href=\"https://www.udistrital.edu.co/contacto\" target=\"_blank\">Contáctenos</a></li>
            <li><a class=\"btn-login\" href=\"";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "user/login\">Inicio de sesión</a></li>
        </ul>
    </div>
</section>
<script>
    fecha = new Date();
    const anioActual = fecha.getFullYear();
    console.log(anioActual);
    document.getElementById(\"anio_footer\").innerHTML = anioActual;
</script>
<!-- End Footer -->
<a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--footer--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 146,  221 => 124,  214 => 120,  208 => 117,  202 => 114,  196 => 111,  190 => 108,  184 => 105,  178 => 102,  172 => 99,  166 => 96,  160 => 93,  154 => 90,  146 => 85,  137 => 79,  121 => 66,  115 => 63,  110 => 61,  105 => 59,  100 => 57,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--footer--full.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--footer--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12, "render" => 12);
        static $functions = array("url" => 12);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'render'],
                ['url']
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
