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

/* themes/RITA/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_9cd203f2836447a4fcb30010c7bec09d extends Template
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
        $context["classes"] = [0 => "nav-menu", 1 => "d-none", 2 => "d-lg-block"];
        // line 42
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 42), 42, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        echo "<div class=\"secondary-header elemento-variable row justify-content-end\" id=\"second-menu\">
  <div class=\"col-auto\">
    <ul>
      <li><a target=\"_blank\" href=\"tel:018000914410\"><i class=\"icofont-ui-call\"></i>018000 - 914410</a></li>
      <li><a target=\"_blank\" href=\"https://www.udistrital.edu.co/directorio\"><i
            class=\"icofont-book-alt\"></i>Directorio</a></li>
      <li><a target=\"_blank\" href=\"https://www.udistrital.edu.co/\"><i class=\"icofont-headphone-alt\"></i>Servicios</a>
      </li>
    </ul>
  </div>
</div>
<div class=\"principal-header\">
  <div class=\"logo mr-auto\">
    <a href=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">
      <img src=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 57, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 57, $this->source)), "html", null, true);
        echo "/images/logoud-negro.png\" alt=\"Logo UD\"
        class=\"img-fluid logo-negro\">
      <img src=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 59, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 59, $this->source)), "html", null, true);
        echo "/images/logoud_blanco.png\" alt=\"Logo UD\"
        class=\"logo-blanco no-visible img-fluid\">
    </a>
    <h1 class=\"elemento-variable\">";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalConfig("system.site", "name"), "html", null, true);
        echo "  - Universidad Distrital Francisco José de Caldas</h1>
  </div>
  <div class=\"row menu-superior\">
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
  <div id=\"principal-nav\" class=\"d-flex nav-centrado\">
    <div class=\"div-nav\">
      <nav role=\"navigation\" aria-labelledby=\"";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 77, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 78
($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
        ";
        // line 80
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 80)) {
            // line 81
            echo "        ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 81);
            // line 82
            echo "        ";
        }
        // line 83
        echo "
        ";
        // line 85
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "
      </nav>
    </div>
  </div>
</div>";
    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 86, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 86,  122 => 85,  114 => 88,  111 => 85,  108 => 83,  105 => 82,  102 => 81,  99 => 80,  95 => 78,  92 => 77,  74 => 62,  68 => 59,  63 => 57,  59 => 56,  44 => 43,  42 => 42,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/block/block--system-menu-block--main.html.twig", "/var/www/html/plantilla/themes/RITA/templates/block/block--system-menu-block--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 80, "block" => 85);
        static $filters = array("clean_id" => 42, "escape" => 57, "without" => 78);
        static $functions = array("url" => 56, "drupal_config" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
                ['url', 'drupal_config']
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
