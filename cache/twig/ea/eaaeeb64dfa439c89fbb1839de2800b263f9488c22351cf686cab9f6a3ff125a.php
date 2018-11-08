<?php

/* modular.html.twig */
class __TwigTemplate_2731023c6cff3dc23e334c5992d1d8b7c0c084a96523e1031d9d03b77c48001b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()) != "")) {
            // line 5
            echo "    ";
            $context["background_html"] = (("style=\"background-image: url(" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()), array(), "array"), "url", array())) . ");\"");
        } else {
            // line 7
            echo "    ";
            $context["background_html"] = "";
        }
        // line 9
        echo "<section class=\"single-page-title\"";
        echo (isset($context["background_html"]) ? $context["background_html"] : null);
        echo ">
    <div class=\"container text-center\">
        <h2>";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    </div>
</section>


<div class=\"ptb-60\">
\t<div class=\"container\">
\t\t";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            echo "\t
\t    ";
            // line 21
            echo $this->getAttribute($context["module"], "content", array());
            echo "   \t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  68 => 21,  62 => 20,  57 => 18,  47 => 11,  41 => 9,  37 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
{% if page.header.background_image != '' %}
    {% set background_html = 'style=\"background-image: url(' ~ page.media.images[page.header.background_image].url ~ ');\"' %}
{% else %}
    {% set  background_html = \"\" %}
{% endif %}
<section class=\"single-page-title\"{{ background_html }}>
    <div class=\"container text-center\">
        <h2>{{ page.title }}</h2>
    </div>
</section>


<div class=\"ptb-60\">
\t<div class=\"container\">
\t\t{{ page.content }}
\t</div>
\t{% for module in page.collection() %}\t
\t    {{ module.content }}   \t
\t{% endfor %}
</div>
{% endblock %}
", "modular.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular.html.twig");
    }
}
