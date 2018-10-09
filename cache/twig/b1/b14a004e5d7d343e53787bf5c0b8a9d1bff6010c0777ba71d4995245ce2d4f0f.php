<?php

/* modular/section.html.twig */
class __TwigTemplate_86df4188f82bf73e30ad42ccc15181946a17f23ab1485e8770a86a5c9065d1d3 extends Twig_Template
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
        echo "');\">
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
        <div class=\"row\">            
            <div class=\"col-md-6\">               
                <div class=\"promo-block-wrapper clearfix\">                    
                    <div class=\"promo-content\">
                        ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                        <a class=\"gh-btn-more\" href=\"";
        // line 14
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
        return array (  42 => 14,  38 => 13,  26 => 4,  19 => 1,);
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
            <div class=\"col-md-6\">               
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
", "modular/section.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\section.html.twig");
    }
}
