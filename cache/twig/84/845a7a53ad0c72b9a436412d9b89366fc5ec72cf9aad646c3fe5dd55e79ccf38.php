<?php

/* modular/event.html.twig */
class __TwigTemplate_eaede574c805aac904749fb0b7d0ce54248b52877bf3c6154449513ffd04fbae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"event ptb-90\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        ";
        // line 9
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        echo " 
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 11
            echo "        \t<div class=\"event-item grid-4\">
        \t\t<div class=\"event-item-thumbail\">
        \t\t\t<a href=\"";
            // line 13
            echo $this->getAttribute($context["p"], "url", array());
            echo "\"><img class=\"img-responsive\" src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()), $this->getAttribute($this->getAttribute($context["p"], "header", array()), "thumbnail", array()), array(), "array"), "url", array());
            echo "\" ></a>
        \t\t</div>
        \t\t<p class=\"event-item-title\"><a href=\"";
            // line 15
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></p>
        \t\t<div class=\"event-item-desc\">";
            // line 16
            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "description", array());
            echo " </div>
        \t\t<div class=\"event-item-link\"><a class=\"read-more\" href=\"";
            // line 17
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">Chi Tiết</a> </div>
        \t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  61 => 17,  57 => 16,  51 => 15,  44 => 13,  40 => 11,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"event ptb-90\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        {% set collection = page.collection() %} 
        {% for p in collection %}
        \t<div class=\"event-item grid-4\">
        \t\t<div class=\"event-item-thumbail\">
        \t\t\t<a href=\"{{ p.url }}\"><img class=\"img-responsive\" src=\"{{p.media.images[p.header.thumbnail].url}}\" ></a>
        \t\t</div>
        \t\t<p class=\"event-item-title\"><a href=\"{{ p.url }}\">{{ p.title }}</a></p>
        \t\t<div class=\"event-item-desc\">{{ p.header.description }} </div>
        \t\t<div class=\"event-item-link\"><a class=\"read-more\" href=\"{{ p.url }}\">Chi Tiết</a> </div>
        \t</div>
        {% endfor %}
    </div>
</section>", "modular/event.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\event.html.twig");
    }
}
