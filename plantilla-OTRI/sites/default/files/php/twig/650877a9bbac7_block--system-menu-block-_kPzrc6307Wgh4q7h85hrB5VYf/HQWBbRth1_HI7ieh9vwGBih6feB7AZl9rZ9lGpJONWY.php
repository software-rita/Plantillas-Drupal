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
        echo "<div class=\"d-flex\">
  <div class=\"logo mr-auto\">
    <a href=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\"> 
      <img src=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 46, $this->source)), "html", null, true);
        echo "/images/logoud_blanco.png\" alt=\"\" class=\"img-fluid\">
    </a>
  </div>
  <div class=\"div-nav\">
    <nav role=\"navigation\" aria-labelledby=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 50, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 51
($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
      ";
        // line 53
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 53)) {
            // line 54
            echo "      ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 54);
            // line 55
            echo "      ";
        }
        // line 56
        echo "
      ";
        // line 58
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
    </nav>
  </div>
</div>";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 59, $this->source), "html", null, true);
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
        return array (  92 => 59,  88 => 58,  81 => 61,  78 => 58,  75 => 56,  72 => 55,  69 => 54,  66 => 53,  62 => 51,  59 => 50,  52 => 46,  48 => 45,  44 => 43,  42 => 42,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/RITA/templates/block/block--system-menu-block--main.html.twig", "/var/www/html/plantilla-unidades2/themes/RITA/templates/block/block--system-menu-block--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 53, "block" => 58);
        static $filters = array("clean_id" => 42, "escape" => 46, "without" => 51);
        static $functions = array("url" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
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
