<?php

/* partials/footer.html.twig */
class __TwigTemplate_3542104d2a8e0636a5ba45b92a2197827ed23d2b5e236038a699cc60873854d5 extends Twig_Template
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
        echo "<footer class=\"footer\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_blocks", array())) > 0)) {
            // line 3
            echo "    <div class=\"footer-widget-section\">
        <div class=\"container text-center\">
            <div class=\"row\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_blocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 7
                echo "                <div class=\"col-sm-";
                echo twig_round((12 / twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_blocks", array()))));
                echo " footer-block\">
                    <div class=\"footer-widget widget_text\">
                        ";
                // line 9
                if ($this->getAttribute($context["block"], "title", array())) {
                    // line 10
                    echo "                        <h3>";
                    echo $this->getAttribute($context["block"], "title", array());
                    echo "</h3>
                        ";
                }
                // line 12
                echo "                        ";
                if ($this->getAttribute($context["block"], "logo", array())) {
                    // line 13
                    echo "                        <div class=\"footer-logo\">
                            <a href=\"";
                    // line 14
                    echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
                    echo "\">
                                <img src=\"";
                    // line 15
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . ($context["logo"] ?? null)));
                    echo "\" alt=\"\">
                            </a>
                        </div>
                        ";
                }
                // line 19
                echo "                        ";
                if ($this->getAttribute($context["block"], "content", array())) {
                    // line 20
                    echo "                        ";
                    echo $this->getAttribute($context["block"], "content", array());
                    echo "
                        ";
                }
                // line 22
                echo "                        ";
                if (($this->getAttribute($context["block"], "icons", array()) && (twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_icons", array())) > 0))) {
                    // line 23
                    echo "                        <ul class=\"list-inline social-links\">
                            ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_icons", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                        // line 25
                        echo "                            <li><a href=\"";
                        echo $this->getAttribute($context["icon"], "url", array());
                        echo "\"><i class=\"fa ";
                        echo $this->getAttribute($context["icon"], "icon", array());
                        echo "\"></i></a></li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                        </ul>
                        ";
                }
                // line 29
                echo "                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        </div>
    </div>
    ";
        }
        // line 36
        echo "
    <div class=\"copyright-section\">
        <div class=\"container clearfix\">
            <span class=\"copytext\">";
        // line 39
        echo $this->getAttribute(($context["theme_config"] ?? null), "copyright", array());
        echo "</span>

            <ul class=\"list-inline pull-right\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 43
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "shown_in_footer", array())) {
                // line 44
                echo "                ";
                $context["activeClass"] = (($this->getAttribute($context["page"], "active", array())) ? ("active") : (""));
                // line 45
                echo "                <li class=\"";
                echo ($context["activeClass"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                ";
            }
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  143 => 47,  133 => 45,  130 => 44,  127 => 43,  123 => 42,  117 => 39,  112 => 36,  106 => 32,  98 => 29,  94 => 27,  83 => 25,  79 => 24,  76 => 23,  73 => 22,  67 => 20,  64 => 19,  57 => 15,  53 => 14,  50 => 13,  47 => 12,  41 => 10,  39 => 9,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer\">
    {% if theme_config.footer_blocks|length > 0 %}
    <div class=\"footer-widget-section\">
        <div class=\"container text-center\">
            <div class=\"row\">
                {% for block in theme_config.footer_blocks %}
                <div class=\"col-sm-{{ (12 / theme_config.footer_blocks|length)|round }} footer-block\">
                    <div class=\"footer-widget widget_text\">
                        {% if block.title %}
                        <h3>{{ block.title }}</h3>
                        {% endif %}
                        {% if block.logo %}
                        <div class=\"footer-logo\">
                            <a href=\"{{ base_url == '' ? '/' : base_url }}\">
                                <img src=\"{{ url('theme://img/' ~ logo) }}\" alt=\"\">
                            </a>
                        </div>
                        {% endif %}
                        {% if block.content %}
                        {{ block.content }}
                        {% endif %}
                        {% if block.icons and theme_config.footer_icons|length > 0 %}
                        <ul class=\"list-inline social-links\">
                            {% for icon in theme_config.footer_icons %}
                            <li><a href=\"{{ icon.url }}\"><i class=\"fa {{ icon.icon }}\"></i></a></li>
                            {% endfor %}
                        </ul>
                        {% endif %}
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
    {% endif %}

    <div class=\"copyright-section\">
        <div class=\"container clearfix\">
            <span class=\"copytext\">{{ theme_config.copyright }}</span>

            <ul class=\"list-inline pull-right\">
            {% for page in pages.children.visible %}
                {% if page.header.shown_in_footer %}
                {% set activeClass = (page.active) ? 'active' : '' %}
                <li class=\"{{ activeClass }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                {% endif %}
            {% endfor %}
            </ul>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\partials\\footer.html.twig");
    }
}
