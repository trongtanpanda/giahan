<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_247d0242b95f4432a9c2300cc50b3ba4833b97d78ddc58e97c2bda474752bd92 extends Twig_Template
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
        echo "<section class=\"testimonial\">
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
        <div id=\"testimonialSlider\" class=\"carousel slide\" data-ride=\"carousel\">

            <div class=\"carousel-inner\" role=\"listbox\">
                ";
        // line 12
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
            // line 13
            echo "                ";
            $context["slideClass"] = ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? ("item active") : ("item"));
            // line 14
            echo "                <div class=\"";
            echo (isset($context["slideClass"]) ? $context["slideClass"] : null);
            echo "\">
                    <blockquote>
                        <ul>
                            <li>";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array"), "html", array(), "method");
            echo "</li>
                            <li class=\"name\">";
            // line 18
            echo $this->getAttribute($context["slide"], "name", array());
            echo "</li>
                        </ul>
                        <p>";
            // line 20
            echo $this->getAttribute($context["slide"], "description", array());
            echo "</p>
                    </blockquote>
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
        // line 24
        echo "            </div>

            <a class=\"left carousel-control\" href=\"#testimonialSlider\" role=\"button\" data-slide=\"prev\">
                <span><i class=\"fa fa-angle-left\"></i></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#testimonialSlider\" role=\"button\" data-slide=\"next\">
                <span><i class=\"fa fa-angle-right\"></i></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  71 => 20,  66 => 18,  62 => 17,  55 => 14,  52 => 13,  35 => 12,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"testimonial\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        <div id=\"testimonialSlider\" class=\"carousel slide\" data-ride=\"carousel\">

            <div class=\"carousel-inner\" role=\"listbox\">
                {% for slide in page.header.slides %}
                {% set slideClass = loop.index == 1 ? 'item active' : 'item' %}
                <div class=\"{{ slideClass }}\">
                    <blockquote>
                        <ul>
                            <li>{{ page.media.images[slide.image].html() }}</li>
                            <li class=\"name\">{{ slide.name }}</li>
                        </ul>
                        <p>{{ slide.description }}</p>
                    </blockquote>
                </div>
                {% endfor %}
            </div>

            <a class=\"left carousel-control\" href=\"#testimonialSlider\" role=\"button\" data-slide=\"prev\">
                <span><i class=\"fa fa-angle-left\"></i></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#testimonialSlider\" role=\"button\" data-slide=\"next\">
                <span><i class=\"fa fa-angle-right\"></i></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</section>
", "modular/testimonials.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\testimonials.html.twig");
    }
}
