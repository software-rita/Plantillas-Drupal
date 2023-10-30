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

/* themes/RITA/templates/views/views-view-unformatted--pagina_de_inicio.html.twig */
class __TwigTemplate_48e4eb181be9ddb11999bd30f939d404 extends Template
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
            // line 21
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 21) == 3)) {
                // line 22
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("proyectos_finalizados", "convocatorias"), "html", null, true);
                echo "
    ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("modal_convocatoria", "modal_convocatoria"), "html", null, true);
                echo "
  ";
            }
            // line 25
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 25) == 4)) {
                // line 26
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("recomendaciones_inicio", "recomendaciones_inicio"), "html", null, true);
                echo "
  ";
            }
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
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
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", 34, "full"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/views/views-view-unformatted--pagina_de_inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  78 => 28,  72 => 26,  69 => 25,  64 => 23,  59 => 22,  56 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/views/views-view-unformatted--pagina_de_inicio.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/views/views-view-unformatted--pagina_de_inicio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "if" => 21);
        static $filters = array("escape" => 22);
        static $functions = array("drupal_view" => 22, "drupal_entity" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                ['drupal_view', 'drupal_entity']
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
