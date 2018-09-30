<?php

/* modular/clients.html.twig */
class __TwigTemplate_509eaab5c311410c7d6838b9738c680ecc67aa7ff421548b07449899de1d4062 extends Twig_Template
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
        $context["num_per_row"] = ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "num_per_row", array()) > 0)) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "num_per_row", array())) : (6));
        // line 2
        $context["client_size"] = (12 / (isset($context["num_per_row"]) ? $context["num_per_row"] : null));
        // line 3
        echo "<section class=\"client-logo ptb-100\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "clients", array()), (isset($context["num_per_row"]) ? $context["num_per_row"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "            <div class=\"row\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 14
                echo "                    <div class=\"col-md-";
                echo (isset($context["client_size"]) ? $context["client_size"] : null);
                echo " col-sm-4 col-xs-6 section-margin client\">
                        <a href=\"";
                // line 15
                echo $this->getAttribute($context["client"], "url", array());
                echo "\">
                            ";
                // line 16
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["client"], "image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["client"], "name", array())), "method");
                echo "
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
    <!--end of .container -->
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  66 => 20,  56 => 16,  52 => 15,  47 => 14,  43 => 13,  40 => 12,  36 => 11,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set num_per_row = page.header.num_per_row > 0 ? page.header.num_per_row : 6 %}
{% set client_size = 12/num_per_row %}
<section class=\"client-logo ptb-100\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        {% for row in page.header.clients|batch(num_per_row) %}
            <div class=\"row\">
                {% for client in row %}
                    <div class=\"col-md-{{client_size}} col-sm-4 col-xs-6 section-margin client\">
                        <a href=\"{{ client.url }}\">
                            {{ page.media.images[client.image].html('', client.name) }}
                        </a>
                    </div>
                {% endfor %}
            </div>
        {% endfor %}
    </div>
    <!--end of .container -->
</section>
", "modular/clients.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\clients.html.twig");
    }
}
