<?php

/* modular/why.html.twig */
class __TwigTemplate_74cc7726ac05d08e0c5b862955d33c60a7d5a00c4cc4a318b4be7af4f5f14be3 extends Twig_Template
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
        echo "<section class=\"service-icon-style\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    ";
        // line 8
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array())) > 0)) {
            // line 9
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array())) >= 4)) {
                // line 10
                echo "            ";
                $context["column_count"] = 4;
                // line 11
                echo "        ";
            } else {
                // line 12
                echo "            ";
                $context["column_count"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array()));
                // line 13
                echo "        ";
            }
            // line 14
            echo "    <div class=\"container text-center\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["solution"]) {
                // line 16
                echo "        ";
                if ((($this->getAttribute($context["loop"], "index", array()) % (isset($context["column_count"]) ? $context["column_count"] : null)) == 1)) {
                    // line 17
                    echo "        <div class=\"row\">
        ";
                }
                // line 19
                echo "        <div class=\"col-sm-6 col-md-";
                echo twig_round((12 / (isset($context["column_count"]) ? $context["column_count"] : null)));
                echo "\">
            <div class=\"promo-block-wrapper clearfix\">
                <div class=\"promo-icon\">
                    <i class=\"fa ";
                // line 22
                echo $this->getAttribute($context["solution"], "icon", array());
                echo "\"></i>
                </div>
                <div class=\"promo-content\">
                    <h3>";
                // line 25
                echo $this->getAttribute($context["solution"], "title", array());
                echo "</h3>

                    <p>";
                // line 27
                echo $this->getAttribute($context["solution"], "description", array());
                echo "</p>
                </div>
            </div>
        </div>
        ";
                // line 31
                if ((($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array()))) || (($this->getAttribute($context["loop"], "index", array()) % (isset($context["column_count"]) ? $context["column_count"] : null)) == 0))) {
                    // line 32
                    echo "        </div>
        ";
                }
                // line 34
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solution'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </div>
    ";
        }
        // line 37
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "modular/why.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  120 => 35,  106 => 34,  102 => 32,  100 => 31,  93 => 27,  88 => 25,  82 => 22,  75 => 19,  71 => 17,  68 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"service-icon-style\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    {% if page.header.whys|length > 0 %}
        {% if page.header.whys|length >= 4 %}
            {% set column_count = 4 %}
        {% else %}
            {% set column_count = page.header.whys|length %}
        {% endif %}
    <div class=\"container text-center\">
        {% for solution in page.header.whys %}
        {% if loop.index % column_count == 1 %}
        <div class=\"row\">
        {% endif %}
        <div class=\"col-sm-6 col-md-{{ (12 / column_count)|round }}\">
            <div class=\"promo-block-wrapper clearfix\">
                <div class=\"promo-icon\">
                    <i class=\"fa {{ solution.icon }}\"></i>
                </div>
                <div class=\"promo-content\">
                    <h3>{{ solution.title }}</h3>

                    <p>{{ solution.description }}</p>
                </div>
            </div>
        </div>
        {% if loop.index == page.header.whys|length or loop.index % column_count == 0 %}
        </div>
        {% endif %}
        {% endfor %}
    </div>
    {% endif %}
</section>", "modular/why.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\why.html.twig");
    }
}
