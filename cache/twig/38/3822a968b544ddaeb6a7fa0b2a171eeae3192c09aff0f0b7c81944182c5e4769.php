<?php

/* modular/team.html.twig */
class __TwigTemplate_7b5d457852530c766da73cb9552ce713f965e837042514edd76e1af4c6ca67ec extends Twig_Template
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
        echo "<section class=\"team ptb-100\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "members", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "
        ";
            // line 11
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 1)) {
                // line 12
                echo "        <div class=\"row\">
        ";
            }
            // line 14
            echo "            <div class=\"col-md-4\">
                <figure class=\"thumbnail\">
                    <a href=\"";
            // line 16
            echo $this->getAttribute($context["member"], "url", array());
            echo "\">
                        ";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["member"], "image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["member"], "name", array())), "method");
            echo "
                    </a>
                    <figcaption class=\"caption text-center\">
                        <h3>";
            // line 20
            echo $this->getAttribute($context["member"], "name", array());
            echo "                            
                        </h3>
                    </figcaption>
                </figure>
            </div>
        ";
            // line 25
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "members", array()), "count", array())) || (($this->getAttribute($context["loop"], "index", array()) % 3) == 0))) {
                // line 26
                echo "        </div>
        ";
            }
            // line 28
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  86 => 28,  82 => 26,  80 => 25,  72 => 20,  66 => 17,  62 => 16,  58 => 14,  54 => 12,  52 => 11,  49 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"team ptb-100\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
    {% for member in page.header.members %}

        {% if loop.index % 3 == 1 %}
        <div class=\"row\">
        {% endif %}
            <div class=\"col-md-4\">
                <figure class=\"thumbnail\">
                    <a href=\"{{ member.url }}\">
                        {{ page.media.images[member.image].html('', member.name) }}
                    </a>
                    <figcaption class=\"caption text-center\">
                        <h3>{{ member.name }}                            
                        </h3>
                    </figcaption>
                </figure>
            </div>
        {% if loop.index == page.header.members.count or loop.index % 3 == 0 %}
        </div>
        {% endif %}

    {% endfor %}
    </div>
</section>
", "modular/team.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\team.html.twig");
    }
}
