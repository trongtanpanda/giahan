<?php

/* modular/section.html.twig */
class __TwigTemplate_a0cc18469865a0965c9b469a27db6e90a789b47df754cccdf033c0825f24f1df extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "background", array()), array(), "array"), "url", array());
        echo "'); background-color: ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "bgcolor", array());
        echo "; color: ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "color", array());
        echo "\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2 style=\"color: ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "color", array());
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        <div class=\"row\">      
            ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "align", array()) == "left")) {
            // line 11
            echo "                ";
            $context["class"] = "col-sm-6 left";
            // line 12
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "align", array()) == "right")) {
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
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">               
                <div class=\"promo-block-wrapper clearfix\">                    
                    <div class=\"promo-content\">
                        ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thumbnail", array()) != "")) {
            // line 21
            echo "                            <img class=\"img-responsive\" src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "thumbnail", array()), array(), "array"), "url", array());
            echo "\" >
                        ";
        }
        // line 23
        echo "                        ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                        <a class=\"read-more\" href=\"";
        // line 24
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "url", array());
        echo "\" target=\"";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "target", array());
        echo "\" >";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "url_text", array());
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
        return array (  83 => 24,  78 => 23,  72 => 21,  70 => 20,  63 => 17,  60 => 16,  58 => 15,  53 => 14,  51 => 13,  46 => 12,  43 => 11,  41 => 10,  30 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"x-section\" style=\"background-image:url('{{ page.media.images[header.background].url}}'); background-color: {{ page.header.bgcolor }}; color: {{ page.header.color }}\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2 style=\"color: {{ page.header.color }}\">{{ page.title }}</h2>
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
                        {% if page.header.thumbnail != \"\" %}
                            <img class=\"img-responsive\" src=\"{{ page.media.images[header.thumbnail].url}}\" >
                        {% endif %}
                        {{ page.content }}
                        <a class=\"read-more\" href=\"{{ header.url }}\" target=\"{{ header.target }}\" >{{ header.url_text }}</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
", "modular/section.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\section.html.twig");
    }
}
