<?php

/* forms/contact.html.twig */
class __TwigTemplate_d93416f6531247cda13ec03b9dc8f2b6f715d0d5412fac103b461f8af382eac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === (isset($context["form"]) ? $context["form"] : null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/contact.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 10
        $context["client_side_validation"] = (( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "client_side_validation", array()))) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "client_side_validation", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array()), true)) : (true))));
        // line 11
        $context["inline_errors"] = (( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array()))) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "form", array()), "inline_errors", array(0 => false), "method")));
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            echo "    ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 15
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $context["action"] = (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array())) . $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()))));
        // line 20
        echo "
";
        // line 21
        if (((isset($context["action"]) ? $context["action"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 22
            echo "    ";
            $context["action"] = (((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 24
        echo "
<form name=\"";
        // line 25
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\"
      method=\"";
        // line 27
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo "
      ";
        // line 28
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array());
            echo "\"";
        }
        // line 29
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 32
        echo ">

  ";
        // line 34
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 35
        echo "
  <div class=\"row\">
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 38
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 39
                echo "        ";
                $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "plugin://form/assets/form.min.js"), "method");
                // line 40
                echo "    ";
            }
            // line 41
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 42
            echo "
    ";
            // line 43
            if (($this->getAttribute($context["field"], "name", array()) == "name")) {
                // line 44
                echo "    <div class=\"col-md-6\">
    ";
            } elseif (($this->getAttribute(            // line 45
$context["field"], "name", array()) == "message")) {
                // line 46
                echo "    </div>
    <div class=\"col-md-6\">
    ";
            }
            // line 49
            echo "
        ";
            // line 50
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/contact.html.twig", 50)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 51
            echo "
    ";
            // line 52
            if (($this->getAttribute($context["field"], "name", array()) == "message")) {
                // line 53
                echo "    </div>
    ";
            }
            // line 55
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </div>

  ";
        // line 58
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/contact.html.twig", 58)->display($context);
        // line 59
        echo "
  ";
        // line 60
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 61
        echo "
  ";
        // line 62
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 65
        echo "
  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 67
            echo "      <button
            ";
            // line 68
            $this->displayBlock('button_classes', $context, $blocks);
            // line 71
            echo "            type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"
        >
            ";
            // line 73
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
        </button>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
  ";
        // line 77
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 80
        echo "
  ";
        // line 81
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/contact.html.twig", 81)->display($context);
        // line 82
        echo "  ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 29
    public function block_form_classes($context, array $blocks = array())
    {
        // line 30
        echo "      ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array())) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
            echo "\"";
        }
        // line 31
        echo "      ";
    }

    // line 34
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 60
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 62
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 63
        echo "  <div class=\"buttons\">
  ";
    }

    // line 68
    public function block_button_classes($context, array $blocks = array())
    {
        // line 69
        echo "            class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "button")) : ("button"));
        echo "\"
            ";
    }

    // line 77
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 78
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 78,  320 => 77,  313 => 69,  310 => 68,  305 => 63,  302 => 62,  297 => 60,  292 => 34,  288 => 31,  281 => 30,  278 => 29,  270 => 82,  268 => 81,  265 => 80,  263 => 77,  260 => 76,  243 => 73,  237 => 71,  235 => 68,  232 => 67,  215 => 66,  212 => 65,  210 => 62,  207 => 61,  205 => 60,  202 => 59,  200 => 58,  196 => 56,  182 => 55,  178 => 53,  176 => 52,  173 => 51,  166 => 50,  163 => 49,  158 => 46,  156 => 45,  153 => 44,  151 => 43,  148 => 42,  145 => 41,  142 => 40,  139 => 39,  136 => 38,  119 => 37,  115 => 35,  113 => 34,  109 => 32,  106 => 29,  100 => 28,  94 => 27,  90 => 26,  86 => 25,  83 => 24,  79 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  62 => 16,  59 => 15,  56 => 14,  52 => 13,  49 => 12,  47 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      {% if form.classes %}class=\"{{ form.classes }}\"{% endif %}
      {% endblock %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  <div class=\"row\">
  {% for field in form.fields %}
    {% if field.type == 'file' %}
        {% do assets.addJs('plugin://form/assets/form.min.js') %}
    {% endif %}
    {% set value = form.value(field.name) %}

    {% if field.name == 'name' %}
    <div class=\"col-md-6\">
    {% elseif field.name == 'message' %}
    </div>
    <div class=\"col-md-6\">
    {% endif %}

        {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}

    {% if field.name == 'message' %}
    </div>
    {% endif %}
  {% endfor %}
  </div>

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"buttons\">
  {% endblock %}

  {% for button in form.buttons %}
      <button
            {% block button_classes %}
            class=\"{{ button.classes|default('button') }}\"
            {% endblock %}
            type=\"{{ button.type|default('submit') }}\"
        >
            {{ button.value|t|default('Submit') }}
        </button>
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
", "forms/contact.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\forms\\contact.html.twig");
    }
}
