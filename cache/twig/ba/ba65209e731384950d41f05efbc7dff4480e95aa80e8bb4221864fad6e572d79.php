<?php

/* modular/solutions.html.twig */
class __TwigTemplate_78e8f36e912f0ba40ee959993505f5ae2d6f17571ff945d96a232c9b8644a6ec extends Twig_Template
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
        echo "<section class=\"service-icon-style ptb-100\">
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
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "solutions", array())) > 0)) {
            // line 9
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "solutions", array())) >= 4)) {
                // line 10
                echo "            ";
                $context["column_count"] = 4;
                // line 11
                echo "        ";
            } else {
                // line 12
                echo "            ";
                $context["column_count"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "solutions", array()));
                // line 13
                echo "        ";
            }
            // line 14
            echo "    <div class=\"container text-center\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "solutions", array()));
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
                if ((($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "solutions", array()))) || (($this->getAttribute($context["loop"], "index", array()) % (isset($context["column_count"]) ? $context["column_count"] : null)) == 0))) {
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
        echo "</section>

";
        // line 39
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hows", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array())) > 0))) {
            // line 40
            echo "<section class=\"ptb-100 gray-bg\">
    <div class=\"container\">
        <div class=\"row\">
            ";
            // line 43
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hows", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array())) > 0))) {
                // line 44
                echo "            <div class=\"col-md-6 col-sm-12 x-accordion\">
            ";
            } elseif (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(            // line 45
(isset($context["page"]) ? $context["page"] : null), "header", array()), "hows", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array())) == 0))) {
                // line 46
                echo "            <div class=\"col-md-12 col-sm-12 x-accordion\">
            ";
            }
            // line 48
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hows", array())) > 0)) {
                // line 49
                echo "                <h3>";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "how_heading", array());
                echo "</h3>
                <div class=\"panel-group\" id=\"accordionHow\">
                    ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hows", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["how"]) {
                    // line 52
                    echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordionHow\" href=\"#collapseHow";
                    // line 55
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" aria-expanded=\"false\" class=\"collapsed\">
                                    ";
                    // line 56
                    echo $this->getAttribute($context["how"], "title", array());
                    echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseHow";
                    // line 60
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"panel-collapse collapse\" aria-expanded=\"false\" style=\"height: 0px;\">
                            <div class=\"panel-body\">
                                ";
                    // line 62
                    echo $this->getAttribute($context["how"], "description", array());
                    echo "
                            </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['how'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                </div>
                ";
            }
            // line 69
            echo "            </div>

            ";
            // line 71
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hows", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array())) > 0))) {
                // line 72
                echo "            <div class=\"col-md-6 col-sm-12 tabWhy\">
            ";
            } elseif (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(            // line 73
(isset($context["page"]) ? $context["page"] : null), "header", array()), "hows", array())) == 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "whys", array())) > 0))) {
                // line 74
                echo "            <div class=\"col-md-12 col-sm-12 tabWhy\">
            ";
            }
            // line 76
            echo "                <h3>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "why_heading", array());
            echo "</h3>
                <div role=\"tabpanel\">
                    <ul id=\"tabWhy\" class=\"nav nav-tabs nav-justified\">
                        ";
            // line 79
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
            foreach ($context['_seq'] as $context["_key"] => $context["why"]) {
                // line 80
                echo "                        ";
                $context["tabClass"] = ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? ("active") : (""));
                // line 81
                echo "                        <li class=\"";
                echo (isset($context["tabClass"]) ? $context["tabClass"] : null);
                echo "\">
                            <a href=\"#tabWhy";
                // line 82
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" data-toggle=\"tab\" aria-expanded=\"true\">
                                ";
                // line 83
                echo $this->getAttribute($context["why"], "title", array());
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['why'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </ul>

                    <div class=\"tab-content\">
                        ";
            // line 90
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
            foreach ($context['_seq'] as $context["_key"] => $context["why"]) {
                // line 91
                echo "                        ";
                $context["tabClass"] = ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? (" active in") : (""));
                // line 92
                echo "                        <div class=\"tab-pane fade";
                echo (isset($context["tabClass"]) ? $context["tabClass"] : null);
                echo "\" id=\"tabWhy";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
                            ";
                // line 93
                echo $this->getAttribute($context["why"], "description", array());
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['why'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/solutions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 96,  317 => 93,  310 => 92,  307 => 91,  290 => 90,  285 => 87,  267 => 83,  263 => 82,  258 => 81,  255 => 80,  238 => 79,  231 => 76,  227 => 74,  225 => 73,  222 => 72,  220 => 71,  216 => 69,  212 => 67,  193 => 62,  188 => 60,  181 => 56,  177 => 55,  172 => 52,  155 => 51,  149 => 49,  146 => 48,  142 => 46,  140 => 45,  137 => 44,  135 => 43,  130 => 40,  128 => 39,  124 => 37,  120 => 35,  106 => 34,  102 => 32,  100 => 31,  93 => 27,  88 => 25,  82 => 22,  75 => 19,  71 => 17,  68 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"service-icon-style ptb-100\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    {% if page.header.solutions|length > 0 %}
        {% if page.header.solutions|length >= 4 %}
            {% set column_count = 4 %}
        {% else %}
            {% set column_count = page.header.solutions|length %}
        {% endif %}
    <div class=\"container text-center\">
        {% for solution in page.header.solutions %}
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
        {% if loop.index == page.header.solutions|length or loop.index % column_count == 0 %}
        </div>
        {% endif %}
        {% endfor %}
    </div>
    {% endif %}
</section>

{% if page.header.hows|length > 0 or page.header.whys|length > 0 %}
<section class=\"ptb-100 gray-bg\">
    <div class=\"container\">
        <div class=\"row\">
            {% if page.header.hows|length > 0 and page.header.whys|length > 0 %}
            <div class=\"col-md-6 col-sm-12 x-accordion\">
            {% elseif page.header.hows|length > 0 and page.header.whys|length == 0 %}
            <div class=\"col-md-12 col-sm-12 x-accordion\">
            {% endif %}
                {% if page.header.hows|length > 0 %}
                <h3>{{ page.header.how_heading }}</h3>
                <div class=\"panel-group\" id=\"accordionHow\">
                    {% for how in page.header.hows %}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordionHow\" href=\"#collapseHow{{ loop.index }}\" aria-expanded=\"false\" class=\"collapsed\">
                                    {{ how.title }}
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseHow{{ loop.index }}\" class=\"panel-collapse collapse\" aria-expanded=\"false\" style=\"height: 0px;\">
                            <div class=\"panel-body\">
                                {{ how.description }}
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                {% endif %}
            </div>

            {% if page.header.hows|length > 0 and page.header.whys|length > 0 %}
            <div class=\"col-md-6 col-sm-12 tabWhy\">
            {% elseif page.header.hows|length == 0 and page.header.whys|length > 0 %}
            <div class=\"col-md-12 col-sm-12 tabWhy\">
            {% endif %}
                <h3>{{ page.header.why_heading }}</h3>
                <div role=\"tabpanel\">
                    <ul id=\"tabWhy\" class=\"nav nav-tabs nav-justified\">
                        {% for why in page.header.whys %}
                        {% set tabClass = loop.index == 1 ? 'active' : '' %}
                        <li class=\"{{ tabClass }}\">
                            <a href=\"#tabWhy{{ loop.index }}\" data-toggle=\"tab\" aria-expanded=\"true\">
                                {{ why.title }}
                            </a>
                        </li>
                        {% endfor %}
                    </ul>

                    <div class=\"tab-content\">
                        {% for why in page.header.whys %}
                        {% set tabClass = loop.index == 1 ? ' active in' : '' %}
                        <div class=\"tab-pane fade{{ tabClass }}\" id=\"tabWhy{{ loop.index }}\">
                            {{ why.description }}
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endif %}
", "modular/solutions.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\solutions.html.twig");
    }
}
