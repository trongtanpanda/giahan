<?php

/* list_product.html.twig */
class __TwigTemplate_7ec436ba4ac76e7bcf733701603f88eb3df7ee810fb05c42f95944f83e697a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "list_product.html.twig", 1);
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

<section class=\"ptb-40\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"product-list\"> 
                ";
        // line 14
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        echo "  
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "                                   
                    <div class=\"product-item grid-4\">
                       <a href=\"";
            // line 17
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">
                            <img class=\"img-responsive\" src=\"";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()), $this->getAttribute($this->getAttribute($context["p"], "header", array()), "thumbnail", array()), array(), "array"), "url", array());
            echo "\" >
                        </a>
                        <h3 class=\"product-title\"><a href=\"";
            // line 20
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h3>
                        <p class=\"product-price\">";
            // line 21
            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "price", array());
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "list_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  72 => 21,  66 => 20,  61 => 18,  57 => 17,  50 => 15,  46 => 14,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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

<section class=\"ptb-40\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"product-list\"> 
                {% set collection = page.collection() %}  
                {% for p in collection %}                                   
                    <div class=\"product-item grid-4\">
                       <a href=\"{{ p.url }}\">
                            <img class=\"img-responsive\" src=\"{{p.media.images[p.header.thumbnail].url}}\" >
                        </a>
                        <h3 class=\"product-title\"><a href=\"{{ p.url }}\">{{ p.title }}</a></h3>
                        <p class=\"product-price\">{{ p.header.price }}</p>
                    </div>
                {% endfor %}            
            </div>
        </div>
    </div>
</section>
{% endblock %}", "list_product.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\list_product.html.twig");
    }
}
