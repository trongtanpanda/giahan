<?php

/* modular/ads.html.twig */
class __TwigTemplate_47a759a144e0397f169817c1fb4a95e02d340d67eba7912d3e277a7a2d2ec938 extends Twig_Template
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
        echo "<section class=\"x-ads\">
";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "type", array())) {
            // line 3
            echo "\t";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "url", array()) != "")) {
                // line 4
                echo "\t\t<a href=\"page.header.url\"><img class=\"ads-img\" src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "file", array()), array(), "array"), "url", array());
                echo "\"></a>
\t";
            } else {
                // line 6
                echo "\t\t<img class=\"ads-img\" src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "file", array()), array(), "array"), "url", array());
                echo "\">
\t";
            }
            // line 7
            echo "\t
";
        } else {
            // line 9
            echo "\t<video style=\"width: 100%;\" autoplay=\"\" muted=\"\" loop=\"\" id=\"myVideo\">
\t\t<source src=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "file", array()), array(), "array"), "url", array());
            echo "\" type=\"video/mp4\">
\t</video>
";
        }
        // line 13
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "modular/ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 10,  43 => 9,  39 => 7,  33 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"x-ads\">
{% if page.header.type %}
\t{% if page.header.url != \"\" %}
\t\t<a href=\"page.header.url\"><img class=\"ads-img\" src=\"{{ page.media.images[header.file].url}}\"></a>
\t{%else%}
\t\t<img class=\"ads-img\" src=\"{{ page.media.images[header.file].url}}\">
\t{%endif%}\t
{%else%}
\t<video style=\"width: 100%;\" autoplay=\"\" muted=\"\" loop=\"\" id=\"myVideo\">
\t\t<source src=\"{{ page.media[header.file].url}}\" type=\"video/mp4\">
\t</video>
{%endif%}
</section>", "modular/ads.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\ads.html.twig");
    }
}
