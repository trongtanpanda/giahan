<?php

/* partials/head.html.twig */
class __TwigTemplate_48d5da5c813dc3f3fec07ae6f1e6ca1c9e69722c58e7f2f069ae8f4d5e74a680 extends Twig_Template
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
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo " ";
        }
        echo "</title>
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "
";
    }

    // line 2
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
        if ((isset($context["favicon"]) ? $context["favicon"] : null)) {
            // line 9
            echo "<link rel=\"icon\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . (isset($context["favicon"]) ? $context["favicon"] : null)));
            echo "\">
";
        }
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
";
        // line 24
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://fonts/font-awesome/css/font-awesome.min.css", 1 => 101), "method");
        // line 17
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/style.css", 1 => 101), "method");
        // line 18
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/material-icons.css", 1 => 101), "method");
        // line 19
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/mobile-menu.css", 1 => 101), "method");
        // line 20
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/custom.css", 1 => 101), "method");
        // line 21
        echo " ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 26
            echo "        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 31
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/mobile-menu.js"), "method");
        // line 32
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/flexSlider/jquery.flexslider-min.js"), "method");
        // line 33
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/scripts.js"), "method");
        // line 34
        echo "
    ";
        // line 35
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PCR9DS8');</script>
    <!-- End Google Tag Manager -->
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
        return array (  127 => 35,  124 => 34,  121 => 33,  118 => 32,  115 => 31,  113 => 30,  110 => 29,  105 => 26,  102 => 25,  99 => 24,  92 => 21,  90 => 20,  88 => 19,  86 => 18,  84 => 17,  82 => 16,  77 => 13,  74 => 12,  70 => 24,  67 => 23,  65 => 12,  62 => 11,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  44 => 3,  41 => 2,  36 => 47,  34 => 2,  22 => 1,);
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
{% do assets.add('theme://css/material-icons.css', 101) %}
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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PCR9DS8');</script>
    <!-- End Google Tag Manager -->
{% endblock %}
{% endblock head %}

", "partials/head.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\partials\\head.html.twig");
    }
}
