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
            ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "layout", array()) == "left")) {
            // line 11
            echo "                <div class=\"col-md-6 img-left\">
                    ";
            // line 12
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()) != "")) {
                // line 13
                echo "                    ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "html", array(), "method");
                echo "
                    ";
            }
            // line 15
            echo "                </div>
                <div class=\"col-md-6\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 18
                echo "                        <div class=\"promo-block-wrapper clearfix\">
                            <div class=\"promo-icon\">
                                ";
                // line 20
                if (($this->getAttribute($context["feature"], "icon", array()) != "")) {
                    // line 21
                    echo "                                <i class=\"fa ";
                    echo $this->getAttribute($context["feature"], "icon", array());
                    echo "\"></i>
                                ";
                }
                // line 23
                echo "                            </div>
                            <div class=\"promo-content\">
                                <h3>";
                // line 25
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
            echo "                </div>
            ";
        }
        // line 32
        echo "           
            ";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "layout", array()) == "right")) {
            // line 34
            echo "                <div class=\"col-md-6\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 36
                echo "                        <div class=\"promo-block-wrapper clearfix\">
                            <div class=\"promo-icon right\">
                                ";
                // line 38
                if (($this->getAttribute($context["feature"], "icon", array()) != "")) {
                    // line 39
                    echo "                                <i class=\"fa ";
                    echo $this->getAttribute($context["feature"], "icon", array());
                    echo "\"></i>
                                ";
                }
                // line 41
                echo "                            </div>
                            <div class=\"promo-content right\">
                                <h3>";
                // line 43
                echo $this->getAttribute($context["feature"], "title", array());
                echo "</h3>
                                <p>";
                // line 44
                echo $this->getAttribute($context["feature"], "description", array());
                echo "</p>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </div>
                <div class=\"col-md-6 img-right\">
                    ";
            // line 50
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()) != "")) {
                // line 51
                echo "                    ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "html", array(), "method");
                echo "
                    ";
            }
            // line 53
            echo "                </div>
            ";
        }
        // line 55
        echo "        </div>
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
        return array (  146 => 55,  142 => 53,  136 => 51,  134 => 50,  130 => 48,  120 => 44,  116 => 43,  112 => 41,  106 => 39,  104 => 38,  100 => 36,  96 => 35,  93 => 34,  91 => 33,  88 => 32,  84 => 30,  74 => 26,  70 => 25,  66 => 23,  60 => 21,  58 => 20,  54 => 18,  50 => 17,  46 => 15,  40 => 13,  38 => 12,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
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
            {% if page.header.layout == 'left' %}
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
            {% endif %}
           
            {% if page.header.layout == 'right' %}
                <div class=\"col-md-6\">
                    {% for feature in page.header.features %}
                        <div class=\"promo-block-wrapper clearfix\">
                            <div class=\"promo-icon right\">
                                {% if feature.icon != '' %}
                                <i class=\"fa {{ feature.icon }}\"></i>
                                {% endif %}
                            </div>
                            <div class=\"promo-content right\">
                                <h3>{{ feature.title }}</h3>
                                <p>{{ feature.description }}</p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"col-md-6 img-right\">
                    {% if page.header.image != '' %}
                    {{ page.media.images[page.header.image].html() }}
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>
</section>
", "modular/features.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\features.html.twig");
    }
}
