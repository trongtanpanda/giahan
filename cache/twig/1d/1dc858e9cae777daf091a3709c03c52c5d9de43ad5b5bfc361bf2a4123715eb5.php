<?php

/* partials/navbar.html.twig */
class __TwigTemplate_6bf66a523eb23c179054c2d57e5c07818b4819eb9ce5b14e82a64c1336c0fe78 extends Twig_Template
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
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 28
        echo "
<nav class=\"navbar m-menu navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        // line 39
        if (((isset($context["logo"]) ? $context["logo"] : null) != "")) {
            // line 40
            echo "            <a class=\"navbar-brand\" href=\"";
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">
                <img src=\"";
            // line 41
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . (isset($context["logo"]) ? $context["logo"] : null)));
            echo "\" alt=\"\">
            </a>
            ";
        }
        // line 44
        echo "        </div>

        <div class=\"collapse navbar-collapse\" id=\"#navbar-collapse-1\">
            ";
        // line 47
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 48
            echo "            <ul class=\"nav-cta hidden-xs\">
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><i
                        class=\"fa fa-search\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            ";
            // line 53
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navbar.html.twig", 53)->display($context);
            // line 54
            echo "                        </li>
                    </ul>
                </li>
            </ul>
            ";
        }
        // line 59
        echo "
            <ul class=\"nav navbar-nav navbar-right main-nav\">
                ";
        // line 61
        echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
            </ul>

        </div>
    </div>
</nav>
";
    }

    // line 2
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 5
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 6
                    echo "            <li class=\"dropdown m-menu-fw ";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                <span><i class=\"fa fa-angle-down\"></i></span></a>

                    ";
                    // line 10
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                        // line 11
                        echo "                    <ul class=\"dropdown-menu\">
                    ";
                        // line 12
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["dropdownHeader"]) {
                            // line 13
                            echo "                        <li class=\"m-menu-content\">
                           <a href=\"";
                            // line 14
                            echo $this->getAttribute($context["dropdownHeader"], "url", array());
                            echo "\">";
                            echo $this->getAttribute($context["dropdownHeader"], "menu", array());
                            echo "</a>
                        </li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownHeader'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 17
                        echo "                    </ul>
                    ";
                    }
                    // line 19
                    echo "            </li>
        ";
                } else {
                    // line 21
                    echo "            <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                <a href=\"";
                    // line 22
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>
            </li>
        ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 25,  156 => 22,  151 => 21,  147 => 19,  143 => 17,  132 => 14,  129 => 13,  125 => 12,  122 => 11,  120 => 10,  114 => 7,  109 => 6,  106 => 5,  103 => 4,  98 => 3,  86 => 2,  75 => 61,  71 => 59,  64 => 54,  62 => 53,  55 => 48,  53 => 47,  48 => 44,  42 => 41,  37 => 40,  35 => 39,  22 => 28,  19 => 1,);
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
{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"dropdown m-menu-fw {{ current_page }}\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">{{ p.menu }}
                <span><i class=\"fa fa-angle-down\"></i></span></a>

                    {% if p.children.visible.count > 0 %}
                    <ul class=\"dropdown-menu\">
                    {% for dropdownHeader in p.children.visible %}
                        <li class=\"m-menu-content\">
                           <a href=\"{{ dropdownHeader.url }}\">{{ dropdownHeader.menu }}</a>
                        </li>
                    {% endfor %}
                    </ul>
                    {% endif %}
            </li>
        {% else %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">{{ p.menu }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}
{% endspaceless %}

<nav class=\"navbar m-menu navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            {% if logo != '' %}
            <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <img src=\"{{ url('theme://img/' ~ logo) }}\" alt=\"\">
            </a>
            {% endif %}
        </div>

        <div class=\"collapse navbar-collapse\" id=\"#navbar-collapse-1\">
            {% if config.plugins.simplesearch.enabled %}
            <ul class=\"nav-cta hidden-xs\">
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><i
                        class=\"fa fa-search\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            {% include 'partials/simplesearch_searchbox.html.twig' %}
                        </li>
                    </ul>
                </li>
            </ul>
            {% endif %}

            <ul class=\"nav navbar-nav navbar-right main-nav\">
                {{ _self.loop(pages) }}
            </ul>

        </div>
    </div>
</nav>
", "partials/navbar.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\partials\\navbar.html.twig");
    }
}
