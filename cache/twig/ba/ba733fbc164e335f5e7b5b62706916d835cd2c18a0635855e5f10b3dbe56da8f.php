<?php

/* modular/services.html.twig */
class __TwigTemplate_0c5f7251f8c46b7815c332d07deafc3b366deaf7995d661533db379cce988edd extends Twig_Template
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
        echo "<section class=\"x-services ptb-100 gray-bg\">

    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>

    <div class=\"container\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 12
            echo "        ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                // line 13
                echo "        <div class=\"row\">
        ";
            }
            // line 15
            echo "            <div class=\"col-md-6\">
                <div class=\"thumbnail clearfix\">
                    <a href=\"";
            // line 17
            echo $this->getAttribute($context["service"], "url", array());
            echo "\">
                        ";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["service"], "image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["service"], "title", array())), "method");
            echo "
                    </a>

                    <div class=\"caption\">
                        <h3><a href=\"";
            // line 22
            echo $this->getAttribute($context["service"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["service"], "title", array());
            echo "</a></h3>

                        <p>";
            // line 24
            echo $this->getAttribute($context["service"], "description", array());
            echo "</p>
                    </div>
                </div>
            </div>
        ";
            // line 28
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()), "count", array())) || (($this->getAttribute($context["loop"], "index", array()) % 2) == 0))) {
                // line 29
                echo "        </div>
        ";
            }
            // line 31
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  93 => 31,  89 => 29,  87 => 28,  80 => 24,  73 => 22,  66 => 18,  62 => 17,  58 => 15,  54 => 13,  51 => 12,  34 => 11,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"x-services ptb-100 gray-bg\">

    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>

    <div class=\"container\">
    {% for service in page.header.services %}
        {% if loop.index % 2 == 1 %}
        <div class=\"row\">
        {% endif %}
            <div class=\"col-md-6\">
                <div class=\"thumbnail clearfix\">
                    <a href=\"{{ service.url }}\">
                        {{ page.media.images[service.image].html('', service.title) }}
                    </a>

                    <div class=\"caption\">
                        <h3><a href=\"{{ service.url }}\">{{ service.title }}</a></h3>

                        <p>{{ service.description }}</p>
                    </div>
                </div>
            </div>
        {% if loop.index == page.header.services.count or loop.index % 2 == 0 %}
        </div>
        {% endif %}
    {% endfor %}
    </div>
</section>
", "modular/services.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\services.html.twig");
    }
}
