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

/* themes/RITA/templates/node/node--investigadores--resumen_director.html.twig */
class __TwigTemplate_e2e78c2231b866b3fd9cf492a48d0c28 extends Template
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
<div class=\"cont-general-team dir-team\">
    <div class=\"cont-main-ind-team\">
        <div class=\"descrip-ind-team\">
            <h4>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h4>
            <h5>Coordinador</h5>
            <div class=\"descrip-ind-team-img\">
                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8)) {
            // line 9
            echo "                <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_investigador", [], "any", false, false, true, 9), "entity", [], "any", false, false, true, 9), "fileuri", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Director\">
                ";
        } else {
            // line 11
            echo "                <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 11, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 11, $this->source)), "html", null, true);
            echo "/images/investigadores.png\" class=\"img-fluid\" alt=\"Director\">
                ";
        }
        // line 13
        echo "            </div>
        </div>
        <hr class=\"line-team-ind\">
        <div class=\"profile-team\">
            ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_investigador", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cvlac", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "url", [], "any", false, false, true, 19)) {
            // line 20
            echo "        <a class=\"btn-team btn btn-more\" target=”_blank” href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cvlac", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\">cvLac</a>
        ";
        }
        // line 22
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_linkedin", [], "any", false, false, true, 22), 0, [], "any", false, false, true, 22), "url", [], "any", false, false, true, 22)) {
            // line 23
            echo "        <a class=\"btn-team linkedin btn btn-more\" target=”_blank” href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_linkedin", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23), "url", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">LinkedIn</a>
        ";
        }
        // line 25
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node--investigadores--resumen_director.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  88 => 23,  85 => 22,  79 => 20,  77 => 19,  72 => 17,  66 => 13,  60 => 11,  54 => 9,  52 => 8,  46 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node--investigadores--resumen_director.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/node/node--investigadores--resumen_director.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 9);

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
