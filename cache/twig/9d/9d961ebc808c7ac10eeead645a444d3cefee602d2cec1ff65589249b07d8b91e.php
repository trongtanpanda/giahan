<?php

/* list_post.html.twig */
class __TwigTemplate_3a6014cd6ff37d912f4b79dc0fa5457287f33dcd45547c5594e3b54dfd15072d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "list_post.html.twig", 1);
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
        echo "<section class=\"single-page-title\">
    <div class=\"container text-center\">
        <h2>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    </div>
</section>

<section class=\"ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 13
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        echo "            
                  
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "                <div class=\"post-item\">
                    <div class=\"post-item-thumbnail col-xs-12 col-sm-3\">
                        <a href=\"";
            // line 18
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">
                            <img class=\"img-responsive\" src=\"";
            // line 19
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()), $this->getAttribute($this->getAttribute($context["p"], "header", array()), "thumbnail", array()), array(), "array"), "url", array());
            echo "\" >
                        </a>
                    </div>
                    <div class=\"post-item-content col-xs-12 col-sm-9\">
                        <h2><a href=\"";
            // line 23
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h2>
                        ";
            // line 24
            echo $this->getAttribute($context["p"], "summary", array());
            echo "
                    </div>                   
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "list_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  75 => 24,  69 => 23,  62 => 19,  58 => 18,  54 => 16,  50 => 15,  45 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
<section class=\"single-page-title\">
    <div class=\"container text-center\">
        <h2>{{ page.title }}</h2>
    </div>
</section>

<section class=\"ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            {% set collection = page.collection() %}            
                  
            {% for p in collection %}
                <div class=\"post-item\">
                    <div class=\"post-item-thumbnail col-xs-12 col-sm-3\">
                        <a href=\"{{ p.url }}\">
                            <img class=\"img-responsive\" src=\"{{p.media.images[p.header.thumbnail].url}}\" >
                        </a>
                    </div>
                    <div class=\"post-item-content col-xs-12 col-sm-9\">
                        <h2><a href=\"{{ p.url }}\">{{ p.title }}</a></h2>
                        {{ p.summary }}
                    </div>                   
                </div>
            {% endfor %}
            
        </div>
    </div>
</section>
{% endblock %}", "list_post.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\list_post.html.twig");
    }
}
