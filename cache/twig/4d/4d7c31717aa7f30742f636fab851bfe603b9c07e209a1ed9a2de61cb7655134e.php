<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_06ac1f994fe871530db3b3f7e75bc4b40d7e36d8c581284a536ddcc5a44bb99e extends Twig_Template
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
        echo "<div class=\"head-search\">
    <div class=\"input-group\">
        <input type=\"text\" class=\"form-control header-search-input\" placeholder=\"Tìm Kiếm\" value=\"";
        // line 3
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" data-header-search-input=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
        ";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 5
            echo "            <span class=\"input-group-btn\">
              <button type=\"submit\" class=\"btn btn-primary header-search-submit\">Search</button>
            </span>
        ";
        }
        // line 9
        echo "    </div>
</div>

<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-header-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length >= ";
        // line 17
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method");
        echo ") {
            event.preventDefault();
            window.location.href = input.data('header-search-input') + '";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "' + input.val();
        }
    });

    \$('.header-search-submit').on('click', function(event) {
        event.preventDefault();
        window.location.href = input.data('header-search-input') + '";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "' + input.val();
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  53 => 19,  48 => 17,  38 => 9,  32 => 5,  30 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"head-search\">
    <div class=\"input-group\">
        <input type=\"text\" class=\"form-control header-search-input\" placeholder=\"Tìm Kiếm\" value=\"{{ query }}\" data-header-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
        {% if config.plugins.simplesearch.display_button %}
            <span class=\"input-group-btn\">
              <button type=\"submit\" class=\"btn btn-primary header-search-submit\">Search</button>
            </span>
        {% endif %}
    </div>
</div>

<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-header-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length >= {{ config.get('plugins.simplesearch.min_query_length', 3) }}) {
            event.preventDefault();
            window.location.href = input.data('header-search-input') + '{{ config.system.param_sep }}' + input.val();
        }
    });

    \$('.header-search-submit').on('click', function(event) {
        event.preventDefault();
        window.location.href = input.data('header-search-input') + '{{ config.system.param_sep }}' + input.val();
    });
});
</script>
", "partials/simplesearch_searchbox.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\partials\\simplesearch_searchbox.html.twig");
    }
}
