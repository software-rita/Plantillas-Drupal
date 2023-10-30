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

/* themes/RITA/templates/block/prev-next-block.html.twig */
class __TwigTemplate_7fd5930b722ef02f00dd8fbbc7f847fb extends Template
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
        // line 17
        echo "
";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("RITA/publicaciones-styling"), "html", null, true);
        echo "
";
        // line 19
        if (($context["prev_display"] ?? null)) {
            // line 20
            echo "    ";
            $context["nodeFull"] = Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", $this->sandbox->ensureToStringAllowed(($context["prev_id"] ?? null), 20, $this->source), "full");
            // line 21
            echo "    ";
            $context["nodeObj"] = (($__internal_compile_0 = ($context["nodeFull"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#node"] ?? null) : null);
            // line 22
            echo "    ";
            $context["nodeName"] = twig_get_attribute($this->env, $this->source, ($context["nodeObj"] ?? null), "label", [], "any", false, false, true, 22);
            // line 23
            echo "    <li>
        <a class=\"paginacion-publicacion\" href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => ($context["prev_id"] ?? null)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_text"] ?? null), 24, $this->source), "html", null, true);
            echo "</a>
        <span class=\"descrPaginacion\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nodeName"] ?? null), 25, $this->source), "html", null, true);
            echo "</span>
    </li>
";
        }
        // line 28
        if (($context["next_display"] ?? null)) {
            // line 29
            echo "    ";
            $context["nodeFull"] = Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", $this->sandbox->ensureToStringAllowed(($context["next_id"] ?? null), 29, $this->source), "full");
            // line 30
            echo "    ";
            $context["nodeObj"] = (($__internal_compile_1 = ($context["nodeFull"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#node"] ?? null) : null);
            // line 31
            echo "    ";
            $context["nodeName"] = twig_get_attribute($this->env, $this->source, ($context["nodeObj"] ?? null), "label", [], "any", false, false, true, 31);
            // line 32
            echo "    <li>
        <a class=\"paginacion-publicacion\" href=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => ($context["next_id"] ?? null)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_text"] ?? null), 33, $this->source), "html", null, true);
            echo "</a>
        <span class=\"descrPaginacion\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nodeName"] ?? null), 34, $this->source), "html", null, true);
            echo "</span>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/block/prev-next-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  86 => 33,  83 => 32,  80 => 31,  77 => 30,  74 => 29,  72 => 28,  66 => 25,  60 => 24,  57 => 23,  54 => 22,  51 => 21,  48 => 20,  46 => 19,  42 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/block/prev-next-block.html.twig", "/var/www/html/plantilla/themes/RITA/templates/block/prev-next-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 20);
        static $filters = array("escape" => 18);
        static $functions = array("attach_library" => 18, "drupal_entity" => 20, "path" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['attach_library', 'drupal_entity', 'path']
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
