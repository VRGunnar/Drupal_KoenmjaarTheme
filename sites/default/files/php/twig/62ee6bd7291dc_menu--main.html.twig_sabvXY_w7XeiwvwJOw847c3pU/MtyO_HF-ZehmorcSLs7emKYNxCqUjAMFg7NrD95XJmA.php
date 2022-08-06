<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/koenmjaar_theme/templates/menu--main.html.twig */
class __TwigTemplate_eef51f17e390acddbd90b2bb4e71297d221735916b2c5f1e249338ac500e144a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 2, "macro" => 6, "if" => 8, "for" => 19, "set" => 21];
        $filters = ["escape" => 1];
        $functions = ["attach_library" => 1, "link" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['attach_library', 'link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("koenmjaar_theme/nav"), "html", null, true);
        echo "
";
        // line 2
        $context["menus"] = $this;
        // line 3
        echo "
";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 6
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 7
            echo "  ";
            $context["menus"] = $this;
            // line 8
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 9
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 10
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "main-menu"], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 12
                    echo "      <ul class=\"main-menu\">
    ";
                }
                // line 14
                echo "      <div class=\"mobile-menu\">
        <div class=\"mobile-stripe\"> </div>
        <div class=\"mobile-stripe mobile-stripe-closed\"> </div>
        <div class=\"mobile-stripe\"> </div>
      </div>
    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 20
                    echo "      ";
                    // line 21
                    $context["classes"] = [0 => "menu-item", 1 => (($this->getAttribute(                    // line 23
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 24
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 25
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : (""))];
                    // line 28
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 29
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                    echo "
        ";
                    // line 30
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 31
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 33
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/koenmjaar_theme/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  139 => 33,  133 => 31,  131 => 30,  127 => 29,  122 => 28,  120 => 25,  119 => 24,  118 => 23,  117 => 21,  115 => 20,  111 => 19,  104 => 14,  100 => 12,  94 => 10,  91 => 9,  88 => 8,  85 => 7,  71 => 6,  64 => 4,  61 => 3,  59 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('koenmjaar_theme/nav') }}
{% import _self as menus %}

{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('main-menu') }}>
    {% else %}
      <ul class=\"main-menu\">
    {% endif %}
      <div class=\"mobile-menu\">
        <div class=\"mobile-stripe\"> </div>
        <div class=\"mobile-stripe mobile-stripe-closed\"> </div>
        <div class=\"mobile-stripe\"> </div>
      </div>
    {% for item in items %}
      {%
        set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
        ]
      %}
      <li{{ item.attributes.addClass(classes) }}>
        {{ link(item.title, item.url) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}", "themes/koenmjaar_theme/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\site\\themes\\koenmjaar_theme\\templates\\menu--main.html.twig");
    }
}
