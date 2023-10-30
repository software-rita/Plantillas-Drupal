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
            <h5>Universidad Distrital <br> Francisco José de Caldas</h5>
            <a href=\"https://www.udistrital.edu.co/inicio\" target=\"blank\"><img
                    src=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/logoud_blanco.png"), "html", null, true);
        echo "\" alt=\"Logo UD\"></a>
            <p>Universidad Distrital Francisco José de Caldas <br>
                NIT. 899.999.230.7<br>
                Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación
                Nacional<br>
                Acuerdo de creación N° 10 de 1948 del Concejo de Bogotá<br>
                Acreditación Institucional de Alta Calidad - Resolución N° 23096 del 15 de diciembre del 2016
            </p>
        </div>
        <div class=\"footer-rita\">
            <h5>Red de Investigaciones de <br> Tecnología Avanzada</h5>
            <a href=\"https://rita.udistrital.edu.co\" target=\"_blank\"><img
                    src=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")) . "themes/RITA/images/Logo_RITA_blanco.png"), "html", null, true);
        echo "\" alt=\"logo RITA\"></a>
            <p><a href=\"https://goo.gl/maps/VT9Potz38ZBRRGPj7\" target=\"blank\"><strong>Sede: </strong>Calle 13 No 31-75
                    Piso 1 Bogotá, Colombia.</a><br>

                <strong>PBX:</strong> (060) (1) 3239300 Ext 1310/1374<br>

                <strong>Email:</strong> rita@udistrital.edu.co<br>

                <strong>Sitio Web:</strong> <a href=\"https://rita.udistrital.edu.co\"
                    target=\"_blank\">rita.udistrital.edu.co</a>
            </p>
            <h5>Director: </h5>
            <span><i class=\"icofont-user-alt-2\"></i>Ing. Carlos Enrique Montenegro Marín Ph.D</span>
            <div class=\"social_footer\">
                <a target=\"_blank\" href=\"https://www.facebook.com/ritaudistrital/\"><i class=\"icofont-facebook\"></i></a>
                </li>
                <a target=\"_blank\" href=\"https://twitter.com/redritaud?lang=es\"><i class=\"icofont-twitter\"></i></a></li>
                <a target=\"_blank\" href=\"https://www.instagram.com/Red_ritaud/\"><i class=\"icofont-instagram\"></i></a>
                </li>
                <a target=\"_blank\"
                    href=\"https://www.linkedin.com/company/red-de-investigaciones-de-tecnolog%C3%ADa-avanzada-rita-ud/mycompany/\"><i
                        class=\"icofont-linkedin\"></i></a></li>
                <a target=\"_blank\" href=\"https://www.youtube.com/channel/UCbqB4G0ccrNtuZFItchiS7Q/featured\"><i
                        class=\"icofont-youtube-play\"></i></a></li>
            </div>
        </div>
        <div class=\"footer-datos\">
            <h5>Unidad de investigaciones</h5>
            <p><strong>Sede: </strong>";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_direccion_sede", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "<br>

                <strong>PBX:</strong> (060) (1) ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_numero_telefono", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo " <br>

                <strong>Email:</strong> ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_correo", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "<br>
                
            </p>
            <h5>Coordinador: </h5>
            <span><i class=\"icofont-user-alt-2\"></i>";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_nombre_director", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</span>
        </div>
    </footer>

    <div class=\"lines-cont\">
        <hr class=\"line-amarilla\">
        <hr class=\"line-vinotinto\">
    </div>
    <h2 class=\"derechos\">© <Strong id=\"anio_footer\"></Strong> . Todos los Derechos Reservados. <a
            href=\"https://rita.udistrital.edu.co\" target=\"_blank\" style=\"color: rgba(255, 255, 255, 0.705);\">Red de
            Investigaciones de Tecnología Avanzada - Universidad Distrital Francisco José de Caldas</a></h2>
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
        return array (  115 => 60,  108 => 56,  103 => 54,  98 => 52,  67 => 24,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--footer--full.html.twig", "/var/www/html/plantilla-unidades/themes/RITA/templates/node/node--footer--full.html.twig");
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
