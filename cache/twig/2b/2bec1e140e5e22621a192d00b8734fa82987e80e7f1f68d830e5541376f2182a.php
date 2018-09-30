<?php

/* modular/carousel.html.twig */
class __TwigTemplate_ab682fb0dd68d2dbf31006eb70d00b6578eef7e50766b6783ecd284f05c6b738 extends Twig_Template
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
        echo "<div id=\"x-corp-carousel\" class=\"carousel slide hero-slide hidden-xs\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slides", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "        ";
            $context["indicatorClass"] = ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? ("active") : (""));
            // line 5
            echo "        <li data-target=\"#x-corp-carousel\" data-slide-to=\"";
            echo ($this->getAttribute($context["loop"], "index", array()) - 1);
            echo "\" class=\"";
            echo (isset($context["indicatorClass"]) ? $context["indicatorClass"] : null);
            echo "\"></li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ol>

    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slides", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 11
            echo "        ";
            $context["slideClass"] = ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? ("item active") : ("item"));
            // line 12
            echo "        <div class=\"";
            echo (isset($context["slideClass"]) ? $context["slideClass"] : null);
            echo "\">
            ";
            // line 13
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "background_image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["slide"], "background_image_description", array())), "method");
            echo "

            <div class=\"carousel-caption\">
                <h1>";
            // line 16
            echo $this->getAttribute($context["slide"], "heading", array());
            echo "</h1>

                <p>";
            // line 18
            echo $this->getAttribute($context["slide"], "description", array());
            echo "</p>
            </div>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

    <a class=\"left carousel-control\" href=\"#x-corp-carousel\" role=\"button\" data-slide=\"prev\">
        <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#x-corp-carousel\" role=\"button\" data-slide=\"next\">
        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 22,  103 => 18,  98 => 16,  92 => 13,  87 => 12,  84 => 11,  67 => 10,  62 => 7,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"x-corp-carousel\" class=\"carousel slide hero-slide hidden-xs\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        {% for slide in page.header.slides %}
        {% set indicatorClass = loop.index == 1 ? 'active' : '' %}
        <li data-target=\"#x-corp-carousel\" data-slide-to=\"{{ loop.index - 1 }}\" class=\"{{ indicatorClass }}\"></li>
        {% endfor %}
    </ol>

    <div class=\"carousel-inner\" role=\"listbox\">
        {% for slide in page.header.slides %}
        {% set slideClass = loop.index == 1 ? 'item active' : 'item' %}
        <div class=\"{{ slideClass }}\">
            {{ page.media.images[slide.background_image].html('', slide.background_image_description) }}

            <div class=\"carousel-caption\">
                <h1>{{ slide.heading }}</h1>

                <p>{{ slide.description }}</p>
            </div>
        </div>
        {% endfor %}
    </div>

    <a class=\"left carousel-control\" href=\"#x-corp-carousel\" role=\"button\" data-slide=\"prev\">
        <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#x-corp-carousel\" role=\"button\" data-slide=\"next\">
        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
", "modular/carousel.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\carousel.html.twig");
    }
}
