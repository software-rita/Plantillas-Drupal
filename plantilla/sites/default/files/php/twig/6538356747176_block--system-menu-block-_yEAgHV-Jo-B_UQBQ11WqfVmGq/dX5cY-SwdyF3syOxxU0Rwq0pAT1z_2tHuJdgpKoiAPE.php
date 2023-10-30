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

/* themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig */
class __TwigTemplate_fc14a1b15cd49b99340b25601dc1be65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["classes"] = [0 => "menu", 1 => "d-none", 2 => "d-lg-block"];
        // line 42
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 42), 42, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        echo "
<div class=\"row header-top\">
  <div class=\"col-md-8 offset-md-8\">
    <ul>
      <li><a target=\"_blank\" href=\"tel:018000914410\"><i class=\"icofont-ui-call\"></i>018000 - 914410</a></li>
      <li><a target=\"_blank\" href=\"https://www.udistrital.edu.co/directorio\"><i
            class=\"icofont-book-alt\"></i>Directorio</a></li>
      <li><a target=\"_blank\" href=\"https://www.udistrital.edu.co/\"><i class=\"icofont-headphone-alt\"></i>Servicios</a>
      </li>
    </ul>
  </div>
</div>
<div class=\"logo\">
  <a href=\"https://www.udistrital.edu.co/inicio\" target=\"_blank\">
    <img src=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 57, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 57, $this->source)), "html", null, true);
        echo "/images/logoud-negro.png\" alt=\"\" class=\"img-fluid\">
  </a>
  <h1>";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalConfig("system.site", "name"), "html", null, true);
        echo "  - Universidad Distrital Francisco José de Caldas</h1>
</div>
<div class=\"row\">
  <div class=\"forma-div elemento-variable sub-menu col-md-8 offset-md-4\">
    <ul>
      <li><a href=\"https://autoevaluacionyacreditacion.udistrital.edu.co/\" target=\"_blank\">Aseguramiento de la
          calidad</a></li>
      <li><a href=\"https://idexud.udistrital.edu.co/\" target=\"_blank\">Instituto de extensión</a></li>
      <li><a href=\"https://urelinter.udistrital.edu.co/\" target=\"_blank\">Internacionalización</a></li>
      <li><a href=\"https://moodleilud.udistrital.edu.co/\" target=\"_blank\">Instituto de idiomas</a></li>
    </ul>
  </div>
</div>
<div id=\"header-principal\">
  <div class=\"d-flex align-items-center \">
    <div class=\"d-flex align-items-center logo mx-auto\">
      <a href=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\" class=\"img_visible\" id=\"logo\">
        <img src=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 76, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 76, $this->source)), "html", null, true);
        echo "/images/logoud_blanco.png\" alt=\"\" class=\"img-fluid\">
      </a>
      <a class=\"inicio\" style=\"text-align: left;\" href=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">Inicio</a>
    </div>
    <nav role=\"navigation\" aria-labelledby=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 80, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 81
($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
      ";
        // line 83
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 83)) {
            // line 84
            echo "      ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 84);
            // line 85
            echo "      ";
        }
        // line 86
        echo "      ";
        // line 87
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "    </nav>
  </div>
</div><!-- End Header -->";
    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 88, $this->source), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 88,  125 => 87,  119 => 90,  116 => 87,  114 => 86,  111 => 85,  108 => 84,  105 => 83,  101 => 81,  98 => 80,  93 => 78,  88 => 76,  84 => 75,  65 => 59,  60 => 57,  44 => 43,  42 => 42,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig", "/var/www/html/plantilla/themes/RITA/templates/block/block--system-menu-block--menu-sobre-nosotros.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 83, "block" => 87);
        static $filters = array("clean_id" => 42, "escape" => 57, "without" => 81);
        static $functions = array("drupal_config" => 59, "url" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
                ['drupal_config', 'url']
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
