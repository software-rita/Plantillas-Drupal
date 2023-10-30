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

/* themes/RITA/templates/node/node---quienes-somos---full.html.twig */
class __TwigTemplate_ea4836f878714696e1ec0089e6f01766 extends Template
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
<section id=\"about\" class=\"tab-pane active\">
    <div id=\"mision\" data-aos=\"fade-down\">
        <div class=\"desc_mision\">
            <div class=\"icon-box icon-box-principal\">
                <div class=\"icon\"><i class=\"icofont-brainstorming\"></i></div>
            </div>
            <h3>Misión</h3>
            <p class=\"texto-about\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mision", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"img_mision\">
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_mision", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12)) {
            // line 13
            echo "            <div style=\"background-image:linear-gradient(to right, rgba(255, 255, 255), rgba(152, 57, 57, 0.65)),
            url('";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_mision", [], "any", false, false, true, 14), "entity", [], "any", false, false, true, 14), "fileuri", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
            echo "');\"></div>
            ";
        } else {
            // line 16
            echo "            <div style=\"background-image:linear-gradient(to right, rgba(255, 255, 255), rgba(152, 57, 57, 0.65)),
            url('";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 17, $this->source)), "html", null, true);
            echo "/images/paiba.JPG');\"></div>
            ";
        }
        // line 19
        echo "        </div>
    </div>
    <div id=\"vision\" data-aos=\"fade-right\">
        <div class=\"desc_vision\">
            <div class=\"icon-box icon-box-principal\">
                <div class=\"icon\"><i class=\"icofont-rocket-alt-2\"></i></div>
            </div>
            <h3>Visión</h3>
            <p class=\"texto-about\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_vision", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"img_vision\">
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_vision", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30)) {
            // line 31
            echo "            <div style=\"background-image:linear-gradient(to left, rgba(255, 255, 255), rgba(64, 64, 149, 0.65)),
            url('";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_vision", [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "fileuri", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
            echo "');\"></div>
            ";
        } else {
            // line 34
            echo "            <div style=\"background-image:linear-gradient(to left, rgba(255, 255, 255), rgba(64, 64, 149, 0.65)),
            url('";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 35, $this->source)), "html", null, true);
            echo "/images/paiba.JPG');\"></div>
            ";
        }
        // line 37
        echo "        </div>
    </div> \t
    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_objetivos", [], "any", false, false, true, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "value", [], "any", false, false, true, 39)) {
            // line 40
            echo "    <div id=\"objetivos\" data-aos=\"fade-left\">
        <div class=\"desc_objetivos\">
            <div class=\"icon-box icon-box-principal\">
                <div class=\"icon\"><i class=\"icofont-dart\"></i></div>
            </div>
            <h3>Objetivos</h3>
            <ul class=\"texto-about\">
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_objetivos", [], "any", false, false, true, 47)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "                    <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </ul>
        </div>
        <div class=\"img_objetivos\">
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_objetivos", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53)) {
                // line 54
                echo "            <div style=\"background-image:linear-gradient(to right, rgba(255, 255, 255), rgba(109, 175, 109, 0.65)),
            url('";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_objetivos", [], "any", false, false, true, 55), "entity", [], "any", false, false, true, 55), "fileuri", [], "any", false, false, true, 55), 55, $this->source)), "html", null, true);
                echo "');\"></div>
            ";
            } else {
                // line 57
                echo "            <div style=\"background-image:linear-gradient(to right, rgba(255, 255, 255), rgba(109, 175, 109, 0.65)),
            url('";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 58, $this->source)), "html", null, true);
                echo "/images/paiba.JPG');\"></div>
            ";
            }
            // line 60
            echo "        </div>
    </div>
    ";
        }
        // line 63
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_acciones", [], "any", false, false, true, 63)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), "value", [], "any", false, false, true, 63)) {
            // line 64
            echo "    <div id=\"acciones\" data-aos=\"fade-up\">
        <div class=\"desc_acciones\">
            <div class=\"icon-box icon-box-principal\">
                <div class=\"icon\"><i class=\"icofont-instrument\"></i></div>
            </div>
            <h3>Plan de acción</h3>
            <ol class=\"texto-about\">
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_acciones", [], "any", false, false, true, 71)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 72
                echo "                    <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            </ol>
        </div>
        <div class=\"img_acciones\">
            ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_plan_accion", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77)) {
                // line 78
                echo "            <div style=\"background-image:linear-gradient(to left, rgba(255, 255, 255), rgba(255, 230, 86, 0.65)),
            url('";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_plan_accion", [], "any", false, false, true, 79), "entity", [], "any", false, false, true, 79), "fileuri", [], "any", false, false, true, 79), 79, $this->source)), "html", null, true);
                echo "');\"></div>
            ";
            } else {
                // line 81
                echo "            <div style=\"background-image:linear-gradient(to left, rgba(255, 255, 255), rgba(255, 230, 86, 0.65)),
            url('";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 82, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 82, $this->source)), "html", null, true);
                echo "/images/paiba.JPG');\"></div>
            ";
            }
            // line 84
            echo "        </div>
    </div>
    ";
        }
        // line 87
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "themes/RITA/templates/node/node---quienes-somos---full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 87,  212 => 84,  207 => 82,  204 => 81,  199 => 79,  196 => 78,  194 => 77,  189 => 74,  180 => 72,  176 => 71,  167 => 64,  164 => 63,  159 => 60,  154 => 58,  151 => 57,  146 => 55,  143 => 54,  141 => 53,  136 => 50,  127 => 48,  123 => 47,  114 => 40,  112 => 39,  108 => 37,  103 => 35,  100 => 34,  95 => 32,  92 => 31,  90 => 30,  84 => 27,  74 => 19,  69 => 17,  66 => 16,  61 => 14,  58 => 13,  56 => 12,  50 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/node/node---quienes-somos---full.html.twig", "/var/www/html/plantilla/themes/RITA/templates/node/node---quienes-somos---full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 47);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
