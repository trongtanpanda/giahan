<?php

/* modular/skills.html.twig */
class __TwigTemplate_ee72b0a751d51787be565b0c23ea63239705507974209600b4351f376ce547c2 extends Twig_Template
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
        echo "<section class=\"skills ptb-100 gray-bg\">
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
            <div class=\"col-md-6\">
                ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
            <div class=\"col-md-6 x-progress\">
                <div class=\"progress-wrapper\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 17
            echo "                    <div class=\"progress-item\">
                        <span class=\"progress-title\">";
            // line 18
            echo $this->getAttribute($context["skill"], "name", array());
            echo "</span>

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-dealy\" role=\"progressbar\" aria-valuenow=\"";
            // line 21
            echo $this->getAttribute($context["skill"], "percentage", array());
            echo "\"
                                 aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            // line 22
            echo $this->getAttribute($context["skill"], "percentage", array());
            echo "%;\"></div>
                        </div>
                        <span class=\"progress-percent\">";
            // line 24
            echo $this->getAttribute($context["skill"], "percentage", array());
            echo "%</span>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  64 => 24,  59 => 22,  55 => 21,  49 => 18,  46 => 17,  42 => 16,  35 => 12,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"skills ptb-100 gray-bg\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                {{ page.content }}
            </div>
            <div class=\"col-md-6 x-progress\">
                <div class=\"progress-wrapper\">
                    {% for skill in page.header.skills %}
                    <div class=\"progress-item\">
                        <span class=\"progress-title\">{{ skill.name }}</span>

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-dealy\" role=\"progressbar\" aria-valuenow=\"{{ skill.percentage }}\"
                                 aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ skill.percentage }}%;\"></div>
                        </div>
                        <span class=\"progress-percent\">{{ skill.percentage }}%</span>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</section>
", "modular/skills.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\skills.html.twig");
    }
}
