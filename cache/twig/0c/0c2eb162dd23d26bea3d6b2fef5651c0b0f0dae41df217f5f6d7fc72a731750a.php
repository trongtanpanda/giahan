<?php

/* product.html.twig */
class __TwigTemplate_98c0e8c7ec3b398b2d4cb935a5041d3c8503f420a02813fab984d395a7e936fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "product.html.twig", 1);
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
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()) != "")) {
            // line 5
            echo "    ";
            $context["background_html"] = (("style=\"background-image: url(" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()), array(), "array"), "url", array())) . ");\"");
        } else {
            // line 7
            echo "    ";
            $context["background_html"] = "";
        }
        // line 9
        echo "<section class=\"single-page-title\"";
        echo (isset($context["background_html"]) ? $context["background_html"] : null);
        echo ">
    <div class=\"container text-center\">
       <h2>";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    </div>
</section>
<section class=\"ptb-40\">
<div class=\"container\">    
        <div class=\"col-sm-6 product-image-feature\">
            <img class=\"img-responsive\" src=\"";
        // line 17
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thumbnail", array()), array(), "array"), "url", array());
        echo "\" >
        </div>
        <div class=\"col-sm-6 product-main-info\">
            <h2>";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
            <p class=\"price\"><span class=\"money\">";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "price", array());
        echo "</span> <span class=\"state\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "state", array());
        echo "</span></p>
            <button class=\"read-more\" data-toggle=\"modal\" data-target=\"#myModal\">Đặt Mua</button>
        </div>
        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Đặt Mua</h4>
              </div>
              <div class=\"modal-body\">
                ";
        // line 35
        $this->loadTemplate("forms/buy.html.twig", "product.html.twig", 35)->display($context);
        // line 36
        echo "              </div>              
            </div>

          </div>
        </div>
        <!-- END Modal -->
        <div class=\"col-md-12 col-sm-12 tabWhy\">
            <h3>";
        // line 43
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "why_heading", array());
        echo "</h3>
            <div role=\"tabpanel\">
                <ul id=\"tabWhy\" class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\">
                        <a href=\"#tabWhy1\" data-toggle=\"tab\" aria-expanded=\"true\">
                            Đặc Điểm Nổi Bật
                        </a>
                    </li>   
                    <li class=\"\">
                        <a href=\"#tabWhy2\" data-toggle=\"tab\" aria-expanded=\"true\">
                            Thông Số Kỹ Thuật
                        </a>
                    </li>
                    <li class=\"\">
                        <a href=\"#tabWhy3\" data-toggle=\"tab\" aria-expanded=\"true\">
                            Hình Ảnh
                        </a>
                    </li>                
                </ul>

                <div class=\"tab-content\">                  
                    <div class=\"product-content tab-pane fade active in\" id=\"tabWhy1\">
                        ";
        // line 65
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "feature_content", array()));
        echo "
                    </div>
                    <div class=\"tab-pane fade\" id=\"tabWhy2\">
                        dfgdfg2
                    </div>
                    <div class=\"tab-pane fade\" id=\"tabWhy3\">
                        dfgdfg3
                    </div>
                </div>
            </div>            
        </div>
</div>
</section>
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 79
            echo "    ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 79,  137 => 78,  121 => 65,  96 => 43,  87 => 36,  85 => 35,  66 => 21,  62 => 20,  56 => 17,  47 => 11,  41 => 9,  37 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
{% if page.header.background_image != '' %}
    {% set background_html = 'style=\"background-image: url(' ~ page.media.images[page.header.background_image].url ~ ');\"' %}
{% else %}
    {% set  background_html = \"\" %}
{% endif %}
<section class=\"single-page-title\"{{ background_html }}>
    <div class=\"container text-center\">
       <h2>{{ page.title }}</h2>
    </div>
</section>
<section class=\"ptb-40\">
<div class=\"container\">    
        <div class=\"col-sm-6 product-image-feature\">
            <img class=\"img-responsive\" src=\"{{page.media.images[page.header.thumbnail].url}}\" >
        </div>
        <div class=\"col-sm-6 product-main-info\">
            <h2>{{ page.title }}</h2>
            <p class=\"price\"><span class=\"money\">{{ page.header.price }}</span> <span class=\"state\">{{ page.header.state }}</span></p>
            <button class=\"read-more\" data-toggle=\"modal\" data-target=\"#myModal\">Đặt Mua</button>
        </div>
        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Đặt Mua</h4>
              </div>
              <div class=\"modal-body\">
                {% include \"forms/buy.html.twig\" %}
              </div>              
            </div>

          </div>
        </div>
        <!-- END Modal -->
        <div class=\"col-md-12 col-sm-12 tabWhy\">
            <h3>{{ page.header.why_heading }}</h3>
            <div role=\"tabpanel\">
                <ul id=\"tabWhy\" class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\">
                        <a href=\"#tabWhy1\" data-toggle=\"tab\" aria-expanded=\"true\">
                            Đặc Điểm Nổi Bật
                        </a>
                    </li>   
                    <li class=\"\">
                        <a href=\"#tabWhy2\" data-toggle=\"tab\" aria-expanded=\"true\">
                            Thông Số Kỹ Thuật
                        </a>
                    </li>
                    <li class=\"\">
                        <a href=\"#tabWhy3\" data-toggle=\"tab\" aria-expanded=\"true\">
                            Hình Ảnh
                        </a>
                    </li>                
                </ul>

                <div class=\"tab-content\">                  
                    <div class=\"product-content tab-pane fade active in\" id=\"tabWhy1\">
                        {{ page.header.feature_content|markdown }}
                    </div>
                    <div class=\"tab-pane fade\" id=\"tabWhy2\">
                        dfgdfg2
                    </div>
                    <div class=\"tab-pane fade\" id=\"tabWhy3\">
                        dfgdfg3
                    </div>
                </div>
            </div>            
        </div>
</div>
</section>
{% for module in page.collection() %}
    {{ module.content }}
{% endfor %}
{% endblock %}", "product.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\product.html.twig");
    }
}
