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

/* themes/custom/examexam/templates/menu--main.html.twig */
class __TwigTemplate_6b4244029f082e6c4b46312a8fcd19addf41a1e4b6b32d03d8f100c5a1a6f7e2 extends \Twig\Template
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
        // line 21
        echo "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        echo "
";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 28, $context, $this->getSourceContext())));
        echo "
";
        // line 32
        echo "
";
        // line 34
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 34), "uri", [], "any", false, false, true, 34), 34, $this->source)));
        echo "
";
        // line 36
        echo "

";
        // line 84
        echo "
";
    }

    // line 38
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 39
            echo "<div class = \"menu\">
  <a href=\"/node\" id = \"default_active\">
    <span>
      HOME
    </span>
  </a>
  ";
            // line 45
            $macros["menus"] = $this;
            // line 46
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 47
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 48
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\flag\TwigExtension\FlagCount']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "nav navbar-nav"], "method", false, false, true, 48), 48, $this->source), "id"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 50
                    echo "      <ul class=\"dropdown-menu\">
    ";
                }
                // line 52
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 53
                    echo "      ";
                    // line 54
                    $context["classes"] = [0 => ((                    // line 55
($context["menu_level"] ?? null)) ? ("dropdown-item") : ("nav-item")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 56
$context["item"], "is_expanded", [], "any", false, false, true, 56)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 57
$context["item"], "is_collapsed", [], "any", false, false, true, 57)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 58
$context["item"], "in_active_trail", [], "any", false, false, true, 58)) ? ("active") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 59
$context["item"], "below", [], "any", false, false, true, 59)) ? ("dropdown") : (""))];
                    // line 62
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true));
                    echo ">
        ";
                    // line 64
                    $context["link_classes"] = [0 => (( !                    // line 65
($context["menu_level"] ?? null)) ? ("nav-link") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 66
$context["item"], "in_active_trail", [], "any", false, false, true, 66)) ? ("active") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 67
$context["item"], "below", [], "any", false, false, true, 67)) ? ("dropdown-toggle") : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 68
$context["item"], "url", [], "any", false, false, true, 68), "getOption", [0 => "attributes"], "method", false, false, true, 68), "class", [], "any", false, false, true, 68)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 68), "getOption", [0 => "attributes"], "method", false, false, true, 68), "class", [], "any", false, false, true, 68), 68, $this->source), " ")) : ("")), 4 => ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 69
$context["item"], "url", [], "any", false, false, true, 69), "toString", [], "method", false, false, true, 69), 69, $this->source)))];
                    // line 72
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72)) {
                        // line 73
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 73), 73, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73), 73, $this->source), ["class" => ($context["link_classes"] ?? null), "data-bs-toggle" => "dropdown", "aria-expanded" => "false", "aria-haspopup" => "true"]), "html", null, true));
                        echo "
          ";
                        // line 74
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 74, $context, $this->getSourceContext())));
                        echo "
        ";
                    } else {
                        // line 76
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 76), 76, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 76), 76, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true));
                        echo "
        ";
                    }
                    // line 78
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "    </ul>
  ";
            }
            // line 82
            echo "</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/examexam/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 82,  161 => 80,  154 => 78,  148 => 76,  143 => 74,  138 => 73,  135 => 72,  133 => 69,  132 => 68,  131 => 67,  130 => 66,  129 => 65,  128 => 64,  123 => 62,  121 => 59,  120 => 58,  119 => 57,  118 => 56,  117 => 55,  116 => 54,  114 => 53,  109 => 52,  105 => 50,  99 => 48,  96 => 47,  93 => 46,  91 => 45,  83 => 39,  68 => 38,  63 => 84,  59 => 36,  54 => 34,  51 => 32,  47 => 28,  44 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}
{#  ///custom path #}
{#  {% set currentPath = path(app.request.attributes.get('_route'),
app.request.attributes.get('_route_params')) %}#}

{% autoescape %}
  {{ app.request.uri|raw }}
{% endautoescape %}


{% macro menu_links(items, attributes, menu_level) %}
<div class = \"menu\">
  <a href=\"/node\" id = \"default_active\">
    <span>
      HOME
    </span>
  </a>
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('nav navbar-nav')|without('id') }}>
    {% else %}
      <ul class=\"dropdown-menu\">
    {% endif %}
    {% for item in items %}
      {%
        set classes = [
          menu_level ? 'dropdown-item' : 'nav-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'active',
          item.below ? 'dropdown',
        ]
      %}
      <li{{ item.attributes.addClass(classes) }}>
        {%
          set link_classes = [
            not menu_level ? 'nav-link',
            item.in_active_trail ? 'active',
            item.below ? 'dropdown-toggle',
            item.url.getOption('attributes').class ? item.url.getOption('attributes').class | join(' '),
            'nav-link-' ~ item.url.toString() | clean_class,
          ]
        %}
        {% if item.below %}
          {{ link(item.title, item.url, {'class': link_classes, 'data-bs-toggle': 'dropdown', 'aria-expanded': 'false', 'aria-haspopup': 'true' }) }}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% else %}
          {{ link(item.title, item.url, {'class': link_classes}) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
</div>
{% endmacro %}

", "themes/custom/examexam/templates/menu--main.html.twig", "/var/www/web/themes/custom/examexam/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "autoescape" => 33, "macro" => 38, "if" => 46, "for" => 52, "set" => 54);
        static $filters = array("raw" => 34, "escape" => 48, "without" => 48, "join" => 68, "clean_class" => 69);
        static $functions = array("link" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'autoescape', 'macro', 'if', 'for', 'set'],
                ['raw', 'escape', 'without', 'join', 'clean_class'],
                ['link']
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
