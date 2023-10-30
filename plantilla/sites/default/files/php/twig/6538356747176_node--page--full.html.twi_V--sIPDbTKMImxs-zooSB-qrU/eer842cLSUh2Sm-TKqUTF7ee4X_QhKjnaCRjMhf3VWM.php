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

/* themes/RITA/templates/node/node--page--full.html.twig */
class __TwigTemplate_afb530833fea88afefbf8aac0501852c extends Template
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
<!-- ======= Banner Section ======= -->
";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_hero", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3)) {
            // line 4
            echo "<section id=\"hero\" style=\"background: no-repeat url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_hero", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "fileuri", [], "any", false, false, true, 4), 4, $this->source)), "html", null, true);
            echo "') center center/cover;\" class=\"d-flex flex-column justify-content-center align-items-center\">
";
        } else {
            // line 6
            echo "<section id=\"hero\" style=\"background: no-repeat url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
            echo "/images/hero.jpg') center center/cover;\" class=\"d-flex flex-column justify-content-center align-items-center\">
";
        }
        // line 8
        echo "    <div class=\"container text-center\" data-aos=\"fade-up\">
        <h1>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_nombre_grupo", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</h1>
        <h2 class=\"titulo-investigacion\">Grupo de Investigación</h2>
        <h2 class=\"nombre-grupo\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_desc_grupo", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</h2>
    </div>
    <a href=\"#about\" class=\"btn-get-started scrollto\">Leer más <span class=\"flecha-button\">
            »
        </span></a>
</section>
<!-- End Hero -->";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--page--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  61 => 9,  58 => 8,  52 => 6,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--page--full.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node--page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library', 'file_url']
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
