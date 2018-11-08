<?php

/* partials/footer.html.twig */
class __TwigTemplate_c7bb84e67270fe1b8e8f3f950bd79293f14e9e868b7253da856202a73594b06a extends Twig_Template
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
        echo "<footer class=\"footer\">
    <div class=\"footer-widget-section\">
        <div class=\"container\">
            <div class=\"row\">               
                <div class=\"col-sm-3 footer-block text-center\">
                    <div class=\"footer-widget widget_text\">
                        ";
        // line 7
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array())) {
            // line 8
            echo "                        <h3>";
            echo $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array());
            echo "</h3>
                        ";
        }
        // line 10
        echo "                        <div class=\"footer-logo\">
                            <a href=\"";
        // line 11
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                                <img src=\"";
        // line 12
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/themes/x-corporation/img/giahan_logo_footer.png\" alt=\"\">
                            </a>
                        </div>                       
                        <p>Giahangroup là đơn vị thi công và phân phối giải pháp nhà thông minh, đã và đang triển khai nhiều dự án tại Đà Nẵng và các tỉnh thành lân cận. Giahangroup được khách hàng lựa chọn bởi sự uy tín, chuyên nghiệp và tận tậm</p>
                       
                        ";
        // line 17
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "icons", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "footer_icons", array())) > 0))) {
            // line 18
            echo "                        <ul class=\"list-inline social-links\">
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "footer_icons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 20
                echo "                            <li><a href=\"";
                echo $this->getAttribute($context["icon"], "url", array());
                echo "\"><i class=\"fa ";
                echo $this->getAttribute($context["icon"], "icon", array());
                echo "\"></i></a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                        </ul>
                        ";
        }
        // line 24
        echo "                    </div>
                </div>
                <div class=\"col-sm-3 footer-block\">
                    <div class=\"footer-widget widget_menu\">                        
                        <h2>Về Chúng Tôi</h2>
                        <ul class=\"footer-menu-item\">
                            <li><a href=\"";
        // line 30
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">Trang Chủ</a></li>
                            <li><a href=\"";
        // line 31
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/tuyen-dung\">Tuyển Dụng</a></li>
                            <li><a href=\"";
        // line 32
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/tai-lieu-huong-dan\">Tài liệu hướng dẫn</a></li>
                            <li><a href=\"";
        // line 33
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/cong-trinh-tieu-bieu\">Công trình tiêu biểu</a></li>
                            <li><a href=\"";
        // line 34
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/chinh-sach-bao-hanh\">Chính sách bảo hành</a></li>
                            <li><a href=\"";
        // line 35
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/tu-van-giai-phap\">Tư vấn giải pháp</a></li>
                            <li><a href=\"";
        // line 36
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/cau-hoi-thuong-gap\">Câu hỏi thường gặp</a></li>                         
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3 footer-block\">
                    <div class=\"footer-widget widget_menu\">                        
                        <h2>Sản Phẩm</h2>
                        <ul class=\"footer-menu-item\">
                            <li><a href=\"";
        // line 44
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">Chiếu sáng thông minh</a></li>
                            <li><a href=\"";
        // line 45
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/tuyen-dung\">Điều khiển rèm tự động</a></li>
                            <li><a href=\"";
        // line 46
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/tai-lieu-huong-dan\">Âm thanh đa vùng</a></li>
                            <li><a href=\"";
        // line 47
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/cong-trinh-tieu-bieu\">Điều khiển điều hoà, TV</a></li>
                        </ul>
                    </div>
                    <div class=\"footer-widget widget_menu\" style=\"margin-top: 43px\">                        
                        <h2>Bảng Giá</h2>
                        <ul class=\"footer-menu-item\">
                            <li><a href=\"";
        // line 53
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">Bảng giá Lumi</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3 footer-block\">
                    <div class=\"footer-widget widget_menu\">
                        <h2>Liên Hệ</h2>
                        <p style=\"margin-top: 5px\"><i class=\"fa fa-map-marker\"></i>Số 304 Nguyễn Đình Tựu, Q.Thanh Khê TP. Đà Nẵng</p>
                        <p><i class=\"fa fa-phone\"></i><a href=\"tel:0968333268\">0968.333.268</a> - <a href=\"tel:0935333268\">0935.333.268</a></p>
                        <p><i class=\"fa fa-envelope\"></i><a href=\"mailto:GiahanGroup2018@gmail.com\" target=\"_blank\">GiahanGroup2018@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"copyright-section\">
        <div class=\"container clearfix text-center\">
            <span class=\"copytext\">Gia Han Group © ";
        // line 71
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "</span>           
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 71,  138 => 53,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  74 => 24,  70 => 22,  59 => 20,  55 => 19,  52 => 18,  50 => 17,  42 => 12,  38 => 11,  35 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer\">
    <div class=\"footer-widget-section\">
        <div class=\"container\">
            <div class=\"row\">               
                <div class=\"col-sm-3 footer-block text-center\">
                    <div class=\"footer-widget widget_text\">
                        {% if block.title %}
                        <h3>{{ block.title }}</h3>
                        {% endif %}
                        <div class=\"footer-logo\">
                            <a href=\"{{ base_url == '' ? '/' : base_url }}\">
                                <img src=\"{{ base_url_absolute }}/user/themes/x-corporation/img/giahan_logo_footer.png\" alt=\"\">
                            </a>
                        </div>                       
                        <p>Giahangroup là đơn vị thi công và phân phối giải pháp nhà thông minh, đã và đang triển khai nhiều dự án tại Đà Nẵng và các tỉnh thành lân cận. Giahangroup được khách hàng lựa chọn bởi sự uy tín, chuyên nghiệp và tận tậm</p>
                       
                        {% if block.icons and theme_config.footer_icons|length > 0 %}
                        <ul class=\"list-inline social-links\">
                            {% for icon in theme_config.footer_icons %}
                            <li><a href=\"{{ icon.url }}\"><i class=\"fa {{ icon.icon }}\"></i></a></li>
                            {% endfor %}
                        </ul>
                        {% endif %}
                    </div>
                </div>
                <div class=\"col-sm-3 footer-block\">
                    <div class=\"footer-widget widget_menu\">                        
                        <h2>Về Chúng Tôi</h2>
                        <ul class=\"footer-menu-item\">
                            <li><a href=\"{{ base_url_absolute }}\">Trang Chủ</a></li>
                            <li><a href=\"{{ base_url_absolute }}/tuyen-dung\">Tuyển Dụng</a></li>
                            <li><a href=\"{{ base_url_absolute }}/tai-lieu-huong-dan\">Tài liệu hướng dẫn</a></li>
                            <li><a href=\"{{ base_url_absolute }}/cong-trinh-tieu-bieu\">Công trình tiêu biểu</a></li>
                            <li><a href=\"{{ base_url_absolute }}/chinh-sach-bao-hanh\">Chính sách bảo hành</a></li>
                            <li><a href=\"{{ base_url_absolute }}/tu-van-giai-phap\">Tư vấn giải pháp</a></li>
                            <li><a href=\"{{ base_url_absolute }}/cau-hoi-thuong-gap\">Câu hỏi thường gặp</a></li>                         
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3 footer-block\">
                    <div class=\"footer-widget widget_menu\">                        
                        <h2>Sản Phẩm</h2>
                        <ul class=\"footer-menu-item\">
                            <li><a href=\"{{ base_url_absolute }}\">Chiếu sáng thông minh</a></li>
                            <li><a href=\"{{ base_url_absolute }}/tuyen-dung\">Điều khiển rèm tự động</a></li>
                            <li><a href=\"{{ base_url_absolute }}/tai-lieu-huong-dan\">Âm thanh đa vùng</a></li>
                            <li><a href=\"{{ base_url_absolute }}/cong-trinh-tieu-bieu\">Điều khiển điều hoà, TV</a></li>
                        </ul>
                    </div>
                    <div class=\"footer-widget widget_menu\" style=\"margin-top: 43px\">                        
                        <h2>Bảng Giá</h2>
                        <ul class=\"footer-menu-item\">
                            <li><a href=\"{{ base_url_absolute }}\">Bảng giá Lumi</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3 footer-block\">
                    <div class=\"footer-widget widget_menu\">
                        <h2>Liên Hệ</h2>
                        <p style=\"margin-top: 5px\"><i class=\"fa fa-map-marker\"></i>Số 304 Nguyễn Đình Tựu, Q.Thanh Khê TP. Đà Nẵng</p>
                        <p><i class=\"fa fa-phone\"></i><a href=\"tel:0968333268\">0968.333.268</a> - <a href=\"tel:0935333268\">0935.333.268</a></p>
                        <p><i class=\"fa fa-envelope\"></i><a href=\"mailto:GiahanGroup2018@gmail.com\" target=\"_blank\">GiahanGroup2018@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"copyright-section\">
        <div class=\"container clearfix text-center\">
            <span class=\"copytext\">Gia Han Group © {{ \"now\"|date(\"Y\") }}</span>           
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "D:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\partials\\footer.html.twig");
    }
}
