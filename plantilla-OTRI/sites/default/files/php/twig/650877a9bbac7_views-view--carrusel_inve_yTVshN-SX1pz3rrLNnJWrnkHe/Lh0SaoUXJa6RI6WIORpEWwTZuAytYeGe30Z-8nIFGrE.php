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

/* themes/RITA/templates/views/views-view--carrusel_investigadores.html.twig */
class __TwigTemplate_4812471633d23a89a3a5f40a6079ecaa extends Template
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
        // line 33
        echo "<h3 class=\"tituloTeam\" data-aos=\"zoom-in-down\">Integrantes</h3>
";
        // line 34
        if (($context["rows"] ?? null)) {
            // line 35
            echo "<div class=\"owl-carousel members-carousel members\">
  ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 36, $this->source), "html", null, true);
            echo "
</div>
";
        } elseif (        // line 38
($context["empty"] ?? null)) {
            // line 39
            echo "  <div class=\"view-empty\">
    ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 40, $this->source), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/views/views-view--carrusel_investigadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 40,  54 => 39,  52 => 38,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/views/views-view--carrusel_investigadores.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/views/views-view--carrusel_investigadores.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
