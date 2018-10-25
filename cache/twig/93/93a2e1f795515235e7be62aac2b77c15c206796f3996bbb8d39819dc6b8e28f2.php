<?php

/* partials/base.html.twig */
class __TwigTemplate_fe7021da3a8827b08d7bcf9b6405f93a67352f3fd77029ad8776bd8e1f9c1a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 3
        echo "
";
        // line 4
        $context["logo"] = "";
        // line 5
        echo "
";
        // line 6
        if (twig_test_iterable($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "logo", array()))) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "logo", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "        ";
                $context["logo"] = $this->getAttribute($context["file"], "name", array());
                // line 9
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 11
            echo "    ";
            $context["logo"] = $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "logo", array());
        }
        // line 13
        echo "
";
        // line 14
        if (twig_test_empty((isset($context["logo"]) ? $context["logo"] : null))) {
            // line 15
            echo "    ";
            $context["logo"] = "logo.png";
        }
        // line 17
        echo "
";
        // line 18
        $context["favicon"] = "";
        // line 19
        echo "
";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array())) > 0)) {
            // line 21
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 22
                echo "        ";
                $context["favicon"] = $this->getAttribute($context["file"], "name", array());
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        echo "
";
        // line 26
        if (twig_test_empty((isset($context["favicon"]) ? $context["favicon"] : null))) {
            // line 27
            echo "    ";
            $context["favicon"] = "favicon.png";
        }
        // line 29
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 31
        echo "<!DOCTYPE HTML>
<html lang=\"";
        // line 32
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
    <head>
        ";
        // line 34
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 34)->display($context);
        // line 35
        echo "    </head>
    <body>
        <div id=\"main-wrapper\">
            <div id=\"preloader\">
                <div id=\"status\">
                    <div class=\"status-mes\"></div>
                </div>
            </div>

            <div class=\"uc-mobile-menu-pusher\">
                <div class=\"content-wrapper\">
                    ";
        // line 46
        $this->loadTemplate("partials/navbar.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "
                    ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "                </div>
            </div>

            <div class=\"uc-mobile-menu uc-mobile-menu-effect\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-toggle=\"offcanvas\"
                        id=\"uc-mobile-menu-close-btn\">&times;</button>
                <div>
                    <div>
                        <ul id=\"menu\">
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 59
            echo "                            ";
            $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
            // line 60
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) == 0)) {
                // line 61
                echo "                                <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                                    <a href=\"";
                // line 62
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</a>
                                </li>
                            ";
            }
            // line 65
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 72
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "    </body>
</html>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 48,  180 => 73,  178 => 72,  170 => 66,  164 => 65,  156 => 62,  151 => 61,  148 => 60,  145 => 59,  141 => 58,  130 => 49,  128 => 48,  125 => 47,  123 => 46,  110 => 35,  108 => 34,  103 => 32,  100 => 31,  96 => 29,  92 => 27,  90 => 26,  87 => 25,  80 => 23,  77 => 22,  72 => 21,  70 => 20,  67 => 19,  65 => 18,  62 => 17,  58 => 15,  56 => 14,  53 => 13,  49 => 11,  42 => 9,  39 => 8,  34 => 7,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

{% set logo = \"\" %}

{% if theme_config.logo is iterable %}
    {% for file in theme_config.logo %}
        {% set logo = file.name %}
    {% endfor %}
{% else %}
    {% set logo = theme_config.logo %}
{% endif %}

{% if logo is empty %}
    {% set logo = 'logo.png' %}
{% endif %}

{% set favicon = \"\" %}

{% if theme_config.favicon|length > 0 %}
    {% for file in theme_config.favicon %}
        {% set favicon = file.name %}
    {% endfor %}
{% endif %}

{% if favicon is empty %}
    {% set favicon = 'favicon.png' %}
{% endif %}

{% endspaceless %}
<!DOCTYPE HTML>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
    <head>
        {% include 'partials/head.html.twig' %}
    </head>
    <body>
        <div id=\"main-wrapper\">
            <div id=\"preloader\">
                <div id=\"status\">
                    <div class=\"status-mes\"></div>
                </div>
            </div>

            <div class=\"uc-mobile-menu-pusher\">
                <div class=\"content-wrapper\">
                    {% include 'partials/navbar.html.twig' %}

                    {% block content %}{% endblock %}
                </div>
            </div>

            <div class=\"uc-mobile-menu uc-mobile-menu-effect\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-toggle=\"offcanvas\"
                        id=\"uc-mobile-menu-close-btn\">&times;</button>
                <div>
                    <div>
                        <ul id=\"menu\">
                        {% for p in pages.children.visible %}
                            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
                            {% if p.children.visible.count == 0 %}
                                <li class=\"{{ current_page }}\">
                                    <a href=\"{{ p.url }}\">{{ p.menu }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {% include 'partials/footer.html.twig' %}
    </body>
</html>
", "partials/base.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\partials\\base.html.twig");
    }
}
