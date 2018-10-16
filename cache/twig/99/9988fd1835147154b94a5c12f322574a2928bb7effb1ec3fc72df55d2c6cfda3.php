<?php

/* forms/fields/tinymce/tinymce.html.twig */
class __TwigTemplate_be8ce1037273b9b47a449f34f0a049e20c2f613148eaca01f07202ec47eacb7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('label', $context, $blocks);
        // line 7
        $this->displayBlock('field', $context, $blocks);
    }

    // line 1
    public function block_label($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())) {
            // line 3
            echo "\t\t";
            $context["hint"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) ? ((("data-hint=\"" . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()))) . "\"")) : (""));
            // line 4
            echo "\t\t<div class=\"form-label form-field hint--bottom\" ";
            echo twig_escape_filter($this->env, (isset($context["hint"]) ? $context["hint"] : null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</div>
\t";
        }
    }

    // line 7
    public function block_field($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"form-field ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t<div class=\"form-data\">
\t\t\t<textarea
\t\t\t\tclass=\"tinymce\"
\t\t\t\tname=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 13
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 14
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())), "html", null, true);
            echo "\"";
        }
        // line 15
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 18
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 19
        echo "\t\t\t>";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"), "html");
        echo "</textarea>
\t\t\t";
        // line 20
        echo "lol";
        echo "
\t\t</div>
\t</div>
\t<script>
\t\ttinymce.init({
\t\t\tselector:\"textarea.tinymce\",
\t\t\tconvert_urls:false,
\t\t\tdocument_base_url:\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/../\"+(\"\"";
        // line 27
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) {
            echo "+\"../\"";
        }
        echo "),
\t\t\tlanguage_url:\"";
        // line 28
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((("user://data/tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "language", array())) . ".js")), _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((((("user://data/tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "language", array())) . "_") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "language", array()))) . ".js")), _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((("plugins://tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "language", array())) . ".js")), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((((("plugins://tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "language", array())) . "_") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "language", array()))) . ".js"))))), "html", null, true);
        echo "\",
\t\t\tplugins:\"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "plugins", array()), " "), "js"), "html", null, true);
        echo "\",
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "parameters", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 31
            echo "\t\t\t\t\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "parameters", array()), $context["key"], array(), "array"), "name", array()), "js"), "html", null, true);
            echo "\":function(x) {
\t\t\t\t\ttry{return JSON.parse(x)}catch(e){return x}
\t\t\t\t}(\"";
            // line 33
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "parameters", array()), $context["key"], array(), "array"), "value", array()), "js"), "html", null, true);
            echo "\"),
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\tmenubar:";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menubar", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\t\tmenu:{
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menu", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 38
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ":{
\t\t\t\t\t\ttitle:\"";
            // line 39
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menu", array()), $context["key"], array(), "array"), "title", array()), "js"), "html", null, true);
            echo "\",
\t\t\t\t\t\titems:\"";
            // line 40
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menu", array()), $context["key"], array(), "array"), "items", array()), "js"), "html", null, true);
            echo "\"
\t\t\t\t\t},
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t},
\t\t\ttoolbar:[
\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "toolbar", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 46
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 47
                echo "\t\t\t\t\t\t'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["row"], "js"), "html", null, true);
                echo "',
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t],
\t\t\tbranding:";
        // line 51
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "branding", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\t\tstatusbar:";
        // line 52
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "statusbar", array())) {
            echo "true";
        } else {
            echo "false";
        }
        // line 53
        echo "\t\t});
\t\t\$(window).on(\"load\", function() {
\t\t\t\$(\"div.dropzone\").on(\"click\", \"a.dz-insert\", function() {
\t\t\t\tvar dir = \$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/\";
\t\t\t\tvar safedir = \$(\"[id=grav-dropzone]\").attr(\"data-media-path\")+\"/\";
\t\t\t\tvar src = \$(this).parent().find(\"[data-dz-name]\").text();
\t\t\t\tvar file = new Image();
\t\t\t\tfile.onload = function() {
\t\t\t\t\t\$(\"[aria-label='Insert/edit image'] button\").click();
\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t};
\t\t\t\tfile.onerror = function() {
\t\t\t\t\tfile = new Audio();
\t\t\t\t\tfile.onload = function() {
\t\t\t\t\t\ttinyMCE.activeEditor.plugins.media.showDialog();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.onerror = function() {
\t\t\t\t\t\t\$(\"[aria-label='Insert/edit link'] button\").click();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:eq(1)\").val(src);
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.src = safedir+src;
\t\t\t\t};
\t\t\t\tfile.src = safedir+src;
\t\t\t});
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/tinymce/tinymce.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 53,  211 => 52,  203 => 51,  200 => 50,  194 => 49,  185 => 47,  180 => 46,  176 => 45,  172 => 43,  163 => 40,  159 => 39,  154 => 38,  150 => 37,  140 => 35,  132 => 33,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  108 => 27,  98 => 20,  92 => 19,  87 => 18,  82 => 17,  77 => 16,  72 => 15,  65 => 14,  61 => 13,  57 => 12,  49 => 8,  46 => 7,  36 => 4,  33 => 3,  30 => 2,  27 => 1,  23 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block label %}
\t{% if field.label %}
\t\t{% set hint = field.help ? 'data-hint=\"' ~ field.help|tu|raw ~ '\"': '' %}
\t\t<div class=\"form-label form-field hint--bottom\" {{ hint }}>{{ field.label|tu|raw }}</div>
\t{% endif %}
{% endblock %}
{% block field %}
\t<div class=\"form-field {{ field.classes|default('') }}\">
\t\t<div class=\"form-data\">
\t\t\t<textarea
\t\t\t\tclass=\"tinymce\"
\t\t\t\tname=\"{{ (scope ~ field.name)|fieldName }}\"
\t\t\t\t{% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
\t\t\t\t{% if field.placeholder %}placeholder=\"{{ field.placeholder|tu }}\"{% endif %}
\t\t\t\t{% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
\t\t\t\t{% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
\t\t\t\t{% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
\t\t\t\t{% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
\t\t\t>{{ value|join(\"\\n\")|e(\"html\") }}</textarea>
\t\t\t{{ \"lol\" }}
\t\t</div>
\t</div>
\t<script>
\t\ttinymce.init({
\t\t\tselector:\"textarea.tinymce\",
\t\t\tconvert_urls:false,
\t\t\tdocument_base_url:\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/../\"+(\"\"{% if context.modular %}+\"../\"{% endif %}),
\t\t\tlanguage_url:\"{{ url('user://data/tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '.js')|default(url('user://data/tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '_' ~ (grav.user.language|upper) ~ '.js')|default(url('plugins://tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '.js')|default(url('plugins://tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '_' ~ (grav.user.language|upper) ~ '.js')))) }}\",
\t\t\tplugins:\"{{ config.plugins[\"tinymce-editor\"].plugins|join(\" \")|e(\"js\") }}\",
\t\t\t{% for key in config.plugins[\"tinymce-editor\"].parameters|keys %}
\t\t\t\t\"{{ config.plugins[\"tinymce-editor\"].parameters[key].name|e(\"js\") }}\":function(x) {
\t\t\t\t\ttry{return JSON.parse(x)}catch(e){return x}
\t\t\t\t}(\"{{ config.plugins[\"tinymce-editor\"].parameters[key].value|e(\"js\") }}\"),
\t\t\t{% endfor %}
\t\t\tmenubar:{% if config.plugins[\"tinymce-editor\"].menubar %}true{% else %}false{% endif %},
\t\t\tmenu:{
\t\t\t\t{% for key in config.plugins[\"tinymce-editor\"].menu|keys %}
\t\t\t\t\t{{ key }}:{
\t\t\t\t\t\ttitle:\"{{ config.plugins[\"tinymce-editor\"].menu[key].title|e(\"js\") }}\",
\t\t\t\t\t\titems:\"{{ config.plugins[\"tinymce-editor\"].menu[key].items|e(\"js\") }}\"
\t\t\t\t\t},
\t\t\t\t{% endfor %}
\t\t\t},
\t\t\ttoolbar:[
\t\t\t\t{% for fields in config.plugins[\"tinymce-editor\"].toolbar %}
\t\t\t\t\t{% for row in fields %}
\t\t\t\t\t\t'{{ row|e(\"js\") }}',
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t],
\t\t\tbranding:{% if config.plugins[\"tinymce-editor\"].branding %}true{% else %}false{% endif %},
\t\t\tstatusbar:{% if config.plugins[\"tinymce-editor\"].statusbar %}true{% else %}false{% endif %}
\t\t});
\t\t\$(window).on(\"load\", function() {
\t\t\t\$(\"div.dropzone\").on(\"click\", \"a.dz-insert\", function() {
\t\t\t\tvar dir = \$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/\";
\t\t\t\tvar safedir = \$(\"[id=grav-dropzone]\").attr(\"data-media-path\")+\"/\";
\t\t\t\tvar src = \$(this).parent().find(\"[data-dz-name]\").text();
\t\t\t\tvar file = new Image();
\t\t\t\tfile.onload = function() {
\t\t\t\t\t\$(\"[aria-label='Insert/edit image'] button\").click();
\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t};
\t\t\t\tfile.onerror = function() {
\t\t\t\t\tfile = new Audio();
\t\t\t\t\tfile.onload = function() {
\t\t\t\t\t\ttinyMCE.activeEditor.plugins.media.showDialog();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.onerror = function() {
\t\t\t\t\t\t\$(\"[aria-label='Insert/edit link'] button\").click();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:eq(1)\").val(src);
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.src = safedir+src;
\t\t\t\t};
\t\t\t\tfile.src = safedir+src;
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "forms/fields/tinymce/tinymce.html.twig", "C:\\wamp64\\www\\giahan\\user\\plugins\\tinymce-editor\\templates\\forms\\fields\\tinymce\\tinymce.html.twig");
    }
}
