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
    ";
            }
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
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
        // line 41
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
        return array (  108 => 41,  94 => 39,  87 => 35,  83 => 34,  76 => 29,  73 => 28,  56 => 27,  52 => 25,  46 => 23,  44 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/views/views-view-unformatted--page_sobre_nosotros.html.twig");
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
