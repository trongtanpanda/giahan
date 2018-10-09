<?php

/* modular/about.html.twig */
class __TwigTemplate_ff8616ad4b83f4032b9722d71706c2a3f105b735bea400b68c95ed84a104aa22 extends Twig_Template
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
        echo "<section class=\"about-text ptb-100\">
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
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "columns", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                // line 12
                echo "        <div class=\"row\">
        ";
            }
            // line 14
            echo "            <div class=\"col-md-6\">
                <p>";
            // line 15
            echo $this->getAttribute($context["column"], "content", array());
            echo "</p>
            </div>
        ";
            // line 17
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "columns", array()), "count", array())) || (($this->getAttribute($context["loop"], "index", array()) % 2) == 0))) {
                // line 18
                echo "        </div>
        ";
            }
            // line 20
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  71 => 20,  67 => 18,  65 => 17,  60 => 15,  57 => 14,  53 => 12,  50 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"about-text ptb-100\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>

    <div class=\"container\">
    {% for column in page.header.columns %}
        {% if loop.index % 2 == 1 %}
        <div class=\"row\">
        {% endif %}
            <div class=\"col-md-6\">
                <p>{{ column.content }}</p>
            </div>
        {% if loop.index == page.header.columns.count or loop.index % 2 == 0 %}
        </div>
        {% endif %}
    {% endfor %}
    </div>
</section>
", "modular/about.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\about.html.twig");
    }
}
