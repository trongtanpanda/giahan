<?php

/* post.html.twig */
class __TwigTemplate_00aaa27a6a1d5e745a8024686ef7cd50c063683a0a9444f06476d38bcedca275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
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
        echo "
";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()) != "")) {
            // line 6
            echo "    ";
            $context["background_html"] = (("style=\"background-image: url(" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()), array(), "array"), "url", array())) . ");\"");
        } else {
            // line 8
            echo "    ";
            $context["background_html"] = "";
        }
        // line 10
        echo "<section class=\"single-page-title\"";
        echo (isset($context["background_html"]) ? $context["background_html"] : null);
        echo ">
    <div class=\"container text-center\">
        <h2>";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    </div>
</section>
<div class=\"container\">
<section class=\"ptb-40\">
";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 20
            echo "    ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</section>
</div>

";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  67 => 20,  63 => 19,  58 => 17,  50 => 12,  44 => 10,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"container\">
<section class=\"ptb-40\">
{{ page.content }}

{% for module in page.collection() %}
    {{ module.content }}
{% endfor %}
</section>
</div>

{% endblock %}", "post.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\post.html.twig");
    }
}
