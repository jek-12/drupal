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

/* themes/custom/examexam/templates/views-view-fields--news2--block.html.twig */
class __TwigTemplate_dba99b809119c0e9572880129bee2406e785a3419b2db8313a1abacfd4992e57 extends \Twig\Template
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
        // line 12
        echo "

<div class = \"top_news_card\">
  <div class = \"date_group_news col-1\">
    <div class = \"news-month\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created", [], "any", false, false, true, 16), "content", [], "any", false, false, true, 16), 16, $this->source), "html", null, true));
        echo " </div>
    <div class = \"news-day\"><h2> ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created_1", [], "any", false, false, true, 17), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true));
        echo " </h2> </div>
    <div class = \"news-year\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created_2", [], "any", false, false, true, 18), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true));
        echo " </div>
  </div>
  <div class = \"teammates_description col-11\">
    <div class = \"wrapper\">
      <div class = \"party\">
        <div class = \"news-picture\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "user_picture", [], "any", false, false, true, 23), "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true));
        echo " </div>
        <div class = \"group\">
          <div class = \"news-role\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "roles_target_id", [], "any", false, false, true, 25), "content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true));
        echo " </div>
          <div class = \"news-name\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "name", [], "any", false, false, true, 26), "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true));
        echo " / </div>
          <div class = \"news-term-position\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_news_", [], "any", false, false, true, 27), "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true));
        echo " </div>
        </div>
      </div>
      <div class = \"news-time-ago\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created_3", [], "any", false, false, true, 30), "content", [], "any", false, false, true, 30), 30, $this->source), "html", null, true));
        echo " </div>
    </div>
  </div>
</div>
<div class = \"bot_news_card\">
  <div class = \"col-1\">
  </div>
  <div class = \"col-11\">
    <div class = \"desc\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_title_for_news_content", [], "any", false, false, true, 38), "content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true));
        echo " </div>
    <div class = \"news-content\">";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 39), "content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true));
        echo " </div>
    <div class = \"news-link\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 40), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true));
        echo " </div>
  </div>
</div>





";
    }

    public function getTemplateName()
    {
        return "themes/custom/examexam/templates/views-view-fields--news2--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  95 => 39,  91 => 38,  80 => 30,  74 => 27,  70 => 26,  66 => 25,  61 => 23,  53 => 18,  49 => 17,  45 => 16,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#{{ created }} == Content: Authored on#}
{#{{ created_1 }} == Content: Authored on#}
{#{{ created_2 }} == Content: Authored on#}
{#{{ user_picture }} == User: Picture#}
{#{{ roles_target_id }} == User: Roles#}
{#{{ name }} == User: Name#}
{#{{ field_news_ }} == Content: news-term#}
{#{{ created_3 }} == Content: Authored on#}
{#{{ field_title_for_news_content }} == Content: Title for news content#}
{#{{ body }} == Content: Body#}
{#{{ view_node }} == Content: Link to Content#}


<div class = \"top_news_card\">
  <div class = \"date_group_news col-1\">
    <div class = \"news-month\">{{ fields.created.content }} </div>
    <div class = \"news-day\"><h2> {{ fields.created_1.content }} </h2> </div>
    <div class = \"news-year\">{{ fields.created_2.content }} </div>
  </div>
  <div class = \"teammates_description col-11\">
    <div class = \"wrapper\">
      <div class = \"party\">
        <div class = \"news-picture\">{{ fields.user_picture.content }} </div>
        <div class = \"group\">
          <div class = \"news-role\">{{ fields.roles_target_id.content }} </div>
          <div class = \"news-name\">{{ fields.name.content }} / </div>
          <div class = \"news-term-position\">{{ fields.field_news_.content }} </div>
        </div>
      </div>
      <div class = \"news-time-ago\">{{ fields.created_3.content }} </div>
    </div>
  </div>
</div>
<div class = \"bot_news_card\">
  <div class = \"col-1\">
  </div>
  <div class = \"col-11\">
    <div class = \"desc\">{{ fields.field_title_for_news_content.content }} </div>
    <div class = \"news-content\">{{ fields.body.content }} </div>
    <div class = \"news-link\">{{ fields.view_node.content }} </div>
  </div>
</div>





", "themes/custom/examexam/templates/views-view-fields--news2--block.html.twig", "/var/www/web/themes/custom/examexam/templates/views-view-fields--news2--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
