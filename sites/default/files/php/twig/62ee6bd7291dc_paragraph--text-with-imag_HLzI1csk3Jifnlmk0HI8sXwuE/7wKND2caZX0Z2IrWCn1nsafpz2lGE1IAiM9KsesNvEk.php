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

/* themes/koenmjaar_theme/templates/paragraph--text-with-image.html.twig */
class __TwigTemplate_a58468a8a7aeb565e58a5e239edb71098709766994036b1fc54b376a1086ea0e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2];
        $filters = ["clean_class" => 4, "escape" => 12, "without" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'without'],
                []
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
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 6
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 7
($context["paragraph"] ?? null), "field_theme", []), "value", [])) ? (("paragraph--theme--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_theme", []), "value", []))))) : ("")), 5 => (($this->getAttribute($this->getAttribute(        // line 8
($context["paragraph"] ?? null), "field_border", []), "value", [])) ? (("paragraph--border--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_border", []), "value", []))))) : (""))];
        // line 11
        echo "
<div ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "image_with_text"], "method")), "html", null, true);
        echo ">
    <div class=\"left\">
        ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_media_image", [])), "html", null, true);
        echo "
    </div>
  
    <div class=\"right\">
        ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_media_image"), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/koenmjaar_theme/templates/paragraph--text-with-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  70 => 14,  65 => 12,  62 => 11,  60 => 8,  59 => 7,  58 => 6,  57 => 5,  56 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished',
    paragraph.field_theme.value ? 'paragraph--theme--' ~ paragraph.field_theme.value|clean_class,
    paragraph.field_border.value ? 'paragraph--border--' ~ paragraph.field_border.value|clean_class
  ]
%}

<div {{ attributes.addClass(classes, \"image_with_text\") }}>
    <div class=\"left\">
        {{ content.field_media_image }}
    </div>
  
    <div class=\"right\">
        {{ content|without(\"field_media_image\") }}
    </div>
</div>", "themes/koenmjaar_theme/templates/paragraph--text-with-image.html.twig", "C:\\xampp\\htdocs\\site\\themes\\koenmjaar_theme\\templates\\paragraph--text-with-image.html.twig");
    }
}
