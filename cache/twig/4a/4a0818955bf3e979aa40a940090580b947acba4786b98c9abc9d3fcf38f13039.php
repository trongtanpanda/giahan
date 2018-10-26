<?php

/* partials/head.html.twig */
class __TwigTemplate_47166d01334e32507e234aea346f635a0c56e47f13c31b83106a2ca8c5051101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute(($context["site"] ?? null), "title", array());
            echo " ";
        }
        echo "</title>
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 6
        $this->loadTemplate("partials/metadata.html.twig", "partials/head.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        if (($context["favicon"] ?? null)) {
            // line 9
            echo "<link rel=\"icon\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . ($context["favicon"] ?? null)));
            echo "\">
";
        }
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "<link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
";
        // line 16
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://fonts/font-awesome/css/font-awesome.min.css", 1 => 101), "method");
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/style.css", 1 => 101), "method");
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/mobile-menu.css", 1 => 101), "method");
        // line 19
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/custom.css", 1 => 101), "method");
        // line 20
        echo " ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 25
            echo "        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/mobile-menu.js"), "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/flexSlider/jquery.flexslider-min.js"), "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/scripts.js"), "method");
        // line 33
        echo "
    ";
        // line 34
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  118 => 33,  115 => 32,  112 => 31,  109 => 30,  107 => 29,  104 => 28,  99 => 25,  96 => 24,  93 => 23,  86 => 20,  84 => 19,  82 => 18,  80 => 17,  78 => 16,  73 => 13,  70 => 12,  66 => 23,  63 => 22,  61 => 12,  58 => 11,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<title>{% if header.title %}{{ header.title }} {% else %} {{ site.title }} {% endif %}</title>
{% block head %}
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% include 'partials/metadata.html.twig' %}

{% if favicon %}
<link rel=\"icon\" href=\"{{ url('theme://img/' ~ favicon) }}\">
{% endif %}

{% block stylesheets %}
<link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
{% do assets.add('theme://fonts/font-awesome/css/font-awesome.min.css', 101) %}
{% do assets.add('theme://css/style.css', 101) %}
{% do assets.add('theme://css/mobile-menu.css', 101) %}
{% do assets.add('theme://css/custom.css', 101) %}
 {{ assets.css() }}
{% endblock %}

{% block javascripts %}
    {% if browser.getBrowser == 'msie' and browser.getVersion <= 9 %}
        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    {% endif %}

    {% do assets.addJs('jquery', 101) %}
    {% do assets.add('theme://js/mobile-menu.js') %}
    {% do assets.add('theme://js/flexSlider/jquery.flexslider-min.js') %}
    {% do assets.add('theme://js/scripts.js') %}

    {{ assets.js() }}

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
{% endblock %}
{% endblock head %}
", "partials/head.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\partials\\head.html.twig");
    }
}
