<?php

/* default.html.twig */
class __TwigTemplate_c7af71ed949f65aa626df86893e0b835bab2836838328700ea1df36764d04d17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"single-page-title\">
    <div class=\"container text-center\">
        <h2>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    </div>
</section>

<section class=\"ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 13
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<section class=\"single-page-title\">
    <div class=\"container text-center\">
        <h2>{{ page.title }}</h2>
    </div>
</section>

<section class=\"ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            {{ content }}
        </div>
    </div>
</section>
{% endblock %}
", "default.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\default.html.twig");
    }
}
