<?php

/* forms/field.html.twig */
class __TwigTemplate_e149ed1ad9ed29007fa35ed48c2fb822336a6b055fa21809361b362117830214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) && ( !(null === (isset($context["originalValue"]) ? $context["originalValue"] : null)) &&  !twig_test_empty((isset($context["originalValue"]) ? $context["originalValue"] : null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) &&  !(isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null));
        // line 4
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array())) . "-") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 6
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie((isset($context["cookie_name"]) ? $context["cookie_name"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie((isset($context["cookie_name"]) ? $context["cookie_name"] : null))))) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 8
        $context["required"] = ((isset($context["client_side_validation"]) ? $context["client_side_validation"] : null) && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 9
        $context["autofocus"] = (((isset($context["inline_errors"]) ? $context["inline_errors"] : null) == false) && twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 10
        echo "
";
        // line 11
        if (((isset($context["inline_errors"]) ? $context["inline_errors"] : null) && (isset($context["errors"]) ? $context["errors"] : null))) {
            // line 12
            echo "    ";
            $context["autofocus"] = true;
        }
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayBlock('contents', $context, $blocks);
    }

    public function block_contents($context, array $blocks = array())
    {
        // line 17
        echo "        <div class=\"form-group user-";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
        echo "\">
            <label for=\"";
        // line 18
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        }
        echo "\" class=\"sr-only\">";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array());
        echo "</label>
            ";
        // line 19
        $this->displayBlock('group', $context, $blocks);
        // line 44
        echo "        </div>
    ";
    }

    // line 19
    public function block_group($context, array $blocks = array())
    {
        // line 20
        echo "                ";
        $this->displayBlock('input', $context, $blocks);
        // line 43
        echo "            ";
    }

    // line 20
    public function block_input($context, array $blocks = array())
    {
        // line 21
        echo "                    <input
                        ";
        // line 23
        echo "                        name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                        value=\"";
        // line 24
        echo twig_join_filter(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html_attr"), ", ");
        echo "\"
                        ";
        // line 26
        echo "                        ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 41
        echo "                        />
                ";
    }

    // line 26
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 27
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"form-control ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 28
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 29
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 30
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 31
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array());
            echo "\"";
        }
        // line 32
        echo "                            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 33
        echo "                            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 34
        echo "                            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 35
        echo "                            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 36
        echo "                            ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 37
        echo "                            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 38
        echo "                            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            echo "\"
                            ";
        } elseif ($this->getAttribute(        // line 39
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())));
            echo "\" ";
        }
        // line 40
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 40,  199 => 39,  192 => 38,  185 => 37,  180 => 36,  173 => 35,  168 => 34,  163 => 33,  158 => 32,  151 => 31,  146 => 30,  139 => 29,  132 => 28,  125 => 27,  122 => 26,  117 => 41,  114 => 26,  110 => 24,  105 => 23,  102 => 21,  99 => 20,  95 => 43,  92 => 20,  89 => 19,  84 => 44,  82 => 19,  72 => 18,  67 => 17,  60 => 16,  54 => 15,  51 => 14,  47 => 12,  45 => 11,  42 => 10,  40 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% block field %}
    {% block contents %}
        <div class=\"form-group user-{{ field.name }}\">
            <label for=\"{% if field.id is defined %}{{ field.id|e }}{% else %}{{ field.name|e }}{% endif %}\" class=\"sr-only\">{{ field.label }}</label>
            {% block group %}
                {% block input %}
                    <input
                        {# required attribute structures #}
                        name=\"{{ (scope ~ field.name)|fieldName }}\"
                        value=\"{{ value|e('html_attr')|join(', ') }}\"
                        {# input attribute structures #}
                        {% block input_attributes %}
                            {% if field.classes is defined %}class=\"form-control {{ field.classes }}\" {% endif %}
                            {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                            {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                            {% if field.disabled %}disabled=\"disabled\"{% endif %}
                            {% if field.placeholder %}placeholder=\"{{ field.placeholder }}\"{% endif %}
                            {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                            {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                            {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                            {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                            {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                            {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                            {% if field.validate.message %}title=\"{{ field.validate.message|e|t }}\"
                            {% elseif field.title is defined %}title=\"{{ field.title|e|t }}\" {% endif %}
                        {% endblock %}
                        />
                {% endblock %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "forms/field.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\forms\\field.html.twig");
    }
}
