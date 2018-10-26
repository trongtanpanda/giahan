<?php

/* modular/section.html.twig */
class __TwigTemplate_e7c28f65fc14e2a7730f984b836945334ff483572f3881ebe1bb1d616db528e0 extends Twig_Template
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
        echo "<section class=\"x-section\" style=\"background-image:url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute(($context["header"] ?? null), "background", array()), array(), "array"), "url", array());
        echo "');\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        <div class=\"row\">      
            ";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "align", array()) == "left")) {
            // line 11
            echo "                ";
            $context["class"] = "col-sm-6 left";
            // line 12
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "align", array()) == "right")) {
            echo "  
                ";
            // line 13
            $context["class"] = "col-sm-6 col-sm-offset-6";
            // line 14
            echo "            ";
        } else {
            echo " 
                ";
            // line 15
            $context["class"] = "col-sm-6 col-sm-offset-3";
            // line 16
            echo "            ";
        }
        // line 17
        echo "            <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">               
                <div class=\"promo-block-wrapper clearfix\">                    
                    <div class=\"promo-content\">
                        ";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                        <a class=\"gh-btn-more\" href=\"";
        // line 21
        echo $this->getAttribute(($context["header"] ?? null), "url", array());
        echo "\" target=\"";
        echo $this->getAttribute(($context["header"] ?? null), "target", array());
        echo "\" >";
        echo $this->getAttribute(($context["header"] ?? null), "url_text", array());
        echo "</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  64 => 20,  57 => 17,  54 => 16,  52 => 15,  47 => 14,  45 => 13,  40 => 12,  37 => 11,  35 => 10,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"x-section\" style=\"background-image:url('{{ page.media.images[header.background].url}}');\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        <div class=\"row\">      
            {% if page.header.align == 'left' %}
                {% set class = 'col-sm-6 left' %}
            {% elseif page.header.align == 'right' %}  
                {% set class = 'col-sm-6 col-sm-offset-6' %}
            {% else %} 
                {% set class = 'col-sm-6 col-sm-offset-3' %}
            {% endif %}
            <div class=\"{{ class }}\">               
                <div class=\"promo-block-wrapper clearfix\">                    
                    <div class=\"promo-content\">
                        {{ page.content }}
                        <a class=\"gh-btn-more\" href=\"{{ header.url }}\" target=\"{{ header.target }}\" >{{ header.url_text }}</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
", "modular/section.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\section.html.twig");
    }
}
