<?php

/* modular/info.html.twig */
class __TwigTemplate_72ba22e3c90ee29053292377aabbf302c60c91004eae54633acf78ed532f39d9 extends Twig_Template
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
        echo "
<div class=\"container info-container\">        
     ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "infos", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 4
            echo "        ";
            if (($this->getAttribute($context["info"], "postion_image", array()) == "right")) {
                // line 5
                echo "            ";
                if (($this->getAttribute($context["info"], "background", array()) != "")) {
                    // line 6
                    echo "                <div class=\"info have-background left\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
            ";
                } else {
                    // line 8
                    echo "                <div class=\"info\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
            ";
                }
                // line 10
                echo "            
                <div class=\" main-row ";
                // line 11
                echo ($this->getAttribute($context["info"], "postion", array()) - (isset($context["image"]) ? $context["image"] : null));
                echo " ";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">           
                    <div class=\"col first col-lg-6\" style=\"color:";
                // line 12
                echo $this->getAttribute($context["info"], "content_color", array());
                echo "\">
                        <h2 class=\"info-title\">";
                // line 13
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "text", array()));
                echo "</h2>
                        ";
                // line 14
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "content", array()));
                echo "
                    </div>
                    <div class=\"col second col-lg-6\">
                        ";
                // line 17
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["info"], "thumbnail", array()), array(), "array"), "cropZoom", array(0 => 540, 1 => 380), "method"), "html", array(), "method");
                echo "
                    </div>
                </div>
            </div>
        ";
            } elseif (($this->getAttribute(            // line 21
$context["info"], "postion_image", array()) == "left")) {
                // line 22
                echo "            ";
                if (($this->getAttribute($context["info"], "background", array()) != "")) {
                    // line 23
                    echo "                <div class=\"info have-background right\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
            ";
                } else {
                    // line 25
                    echo "                <div class=\"info\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
            ";
                }
                // line 27
                echo "                <div  class=\" main-row ";
                echo ($this->getAttribute($context["info"], "postion", array()) - (isset($context["image"]) ? $context["image"] : null));
                echo " ";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
                    <div class=\"col first col-lg-6\">
                        ";
                // line 29
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["info"], "thumbnail", array()), array(), "array"), "cropZoom", array(0 => 540, 1 => 380), "method"), "html", array(), "method");
                echo "
                    </div>
                    <div class=\"col second col-lg-6\" style=\"color:";
                // line 31
                echo $this->getAttribute($context["info"], "content_color", array());
                echo "\">
                        <h2 class=\"info-title\">";
                // line 32
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "text", array()));
                echo "</h2>
                        ";
                // line 33
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "content", array()));
                echo "
                    </div>
                </div>
            </div>

        ";
            } else {
                // line 39
                echo "            ";
                if (($this->getAttribute($context["info"], "background", array()) != "")) {
                    // line 40
                    echo "                <div class=\"info have-background right\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
            ";
                } else {
                    // line 42
                    echo "                <div class=\"info\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
            ";
                }
                // line 44
                echo "                <div  class=\"row ";
                echo ($this->getAttribute($context["info"], "postion", array()) - (isset($context["image"]) ? $context["image"] : null));
                echo " ";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
                    <div class=\"col-sm-12 center\">
                        <h2 class=\"info-title\">";
                // line 46
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "text", array()));
                echo "</h2>
                        ";
                // line 47
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "content", array()));
                echo "
                    </div>
                    <div class=\"col-sm-12\" style=\"color:";
                // line 49
                echo $this->getAttribute($context["info"], "content_color", array());
                echo "\">                       
                        ";
                // line 50
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["info"], "thumbnail", array()), array(), "array"), "html", array(), "method");
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 55
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "modular/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 57,  179 => 55,  171 => 50,  167 => 49,  162 => 47,  158 => 46,  150 => 44,  144 => 42,  138 => 40,  135 => 39,  126 => 33,  122 => 32,  118 => 31,  113 => 29,  105 => 27,  99 => 25,  93 => 23,  90 => 22,  88 => 21,  81 => 17,  75 => 14,  71 => 13,  67 => 12,  61 => 11,  58 => 10,  52 => 8,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"container info-container\">        
     {% for info in page.header.infos %}
        {% if(info.postion_image == \"right\") %}
            {% if info.background !=\"\" %}
                <div class=\"info have-background left\" style=\"background-color:{{info.color}};\">
            {%else%}
                <div class=\"info\" style=\"background-color:{{info.color}};\">
            {%endif%}
            
                <div class=\" main-row {{info.postion-image}} {{loop.index}}\">           
                    <div class=\"col first col-lg-6\" style=\"color:{{info.content_color}}\">
                        <h2 class=\"info-title\">{{ info.text|markdown }}</h2>
                        {{ info.content|markdown }}
                    </div>
                    <div class=\"col second col-lg-6\">
                        {{ page.media.images[info.thumbnail].cropZoom(540, 380).html() }}
                    </div>
                </div>
            </div>
        {% elseif(info.postion_image == \"left\") %}
            {% if info.background !=\"\" %}
                <div class=\"info have-background right\" style=\"background-color:{{info.color}};\">
            {%else%}
                <div class=\"info\" style=\"background-color:{{info.color}};\">
            {%endif%}
                <div  class=\" main-row {{info.postion-image}} {{loop.index}}\">
                    <div class=\"col first col-lg-6\">
                        {{ page.media.images[info.thumbnail].cropZoom(540, 380).html() }}
                    </div>
                    <div class=\"col second col-lg-6\" style=\"color:{{info.content_color}}\">
                        <h2 class=\"info-title\">{{ info.text|markdown }}</h2>
                        {{ info.content|markdown }}
                    </div>
                </div>
            </div>

        {% else %}
            {% if info.background !=\"\" %}
                <div class=\"info have-background right\" style=\"background-color:{{info.color}};\">
            {%else%}
                <div class=\"info\" style=\"background-color:{{info.color}};\">
            {%endif%}
                <div  class=\"row {{info.postion-image}} {{loop.index}}\">
                    <div class=\"col-sm-12 center\">
                        <h2 class=\"info-title\">{{ info.text|markdown }}</h2>
                        {{ info.content|markdown }}
                    </div>
                    <div class=\"col-sm-12\" style=\"color:{{info.content_color}}\">                       
                        {{ page.media.images[info.thumbnail].html() }}
                    </div>
                </div>
            </div>
        {% endif %}

    {% endfor %}
</div>

", "modular/info.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\info.html.twig");
    }
}