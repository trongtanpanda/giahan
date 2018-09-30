<?php

/* modular/features.html.twig */
class __TwigTemplate_3733527c85c8b002cee8cddf5a2f3160f2eb57e4606d600d97cd3c5a9b55b7d0 extends Twig_Template
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
        echo "<section class=\"x-features\">
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
            <div class=\"col-md-6 img-left\">
                ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()) != "")) {
            // line 12
            echo "                ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "html", array(), "method");
            echo "
                ";
        }
        // line 14
        echo "            </div>
            <div class=\"col-md-6\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 17
            echo "                <div class=\"promo-block-wrapper clearfix\">
                    <div class=\"promo-icon\">
                        ";
            // line 19
            if (($this->getAttribute($context["feature"], "icon", array()) != "")) {
                // line 20
                echo "                        <i class=\"fa ";
                echo $this->getAttribute($context["feature"], "icon", array());
                echo "\"></i>
                        ";
            }
            // line 22
            echo "                    </div>
                    <div class=\"promo-content\">
                        <h3>";
            // line 24
            echo $this->getAttribute($context["feature"], "title", array());
            echo "</h3>

                        <p>";
            // line 26
            echo $this->getAttribute($context["feature"], "description", array());
            echo "</p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  71 => 26,  66 => 24,  62 => 22,  56 => 20,  54 => 19,  50 => 17,  46 => 16,  42 => 14,  36 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"x-features\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 img-left\">
                {% if page.header.image != '' %}
                {{ page.media.images[page.header.image].html() }}
                {% endif %}
            </div>
            <div class=\"col-md-6\">
                {% for feature in page.header.features %}
                <div class=\"promo-block-wrapper clearfix\">
                    <div class=\"promo-icon\">
                        {% if feature.icon != '' %}
                        <i class=\"fa {{ feature.icon }}\"></i>
                        {% endif %}
                    </div>
                    <div class=\"promo-content\">
                        <h3>{{ feature.title }}</h3>

                        <p>{{ feature.description }}</p>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>
", "modular/features.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\features.html.twig");
    }
}
