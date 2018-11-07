<?php

/* modular/contact.html.twig */
class __TwigTemplate_40d60872cdec9b9b05a39dfac5ed948d8026153a133fa80f9aef302823aa6b7e extends Twig_Template
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
        echo "<section class=\"contact-form ptb-40\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 contact-form text-center \">
                ";
        // line 5
        $this->loadTemplate("forms/contact.html.twig", "modular/contact.html.twig", 5)->display($context);
        // line 6
        echo "            </div>
            <div class=\"col-md-6 contact-content\">
            \t<h2>Gia Hân Group</h2>
                <p><i style=\"margin-right: 5px\" class=\"fa fa-map-marker\"></i>Số 304 Nguyễn Đình Tựu, Q.Thanh Khê TP. Đà Nẵng</p>
                <p><i style=\"margin-right: 5px\" class=\"fa fa-phone\"></i><a href=\"tel:0968333268\">0968.333.268</a> - <a href=\"tel:0935333268\">0935.333.268</a></p>
                <p><i style=\"margin-right: 5px\" class=\"fa fa-envelope\"></i><a href=\"mailto:GiahanGroup2018@gmail.com\" target=\"_blank\">GiahanGroup2018@gmail.com</p>
            </div>
        </div>
    </div>     
</section>
<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1943062686214!2d108.18285241485833!3d16.05540368888949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421908a5578423%3A0xe33089a380b4706!2zMzA0IE5ndXnhu4VuIMSQw6xuaCBU4buxdSwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1531381562612\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"contact-form ptb-40\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 contact-form text-center \">
                {% include \"forms/contact.html.twig\" %}
            </div>
            <div class=\"col-md-6 contact-content\">
            \t<h2>Gia Hân Group</h2>
                <p><i style=\"margin-right: 5px\" class=\"fa fa-map-marker\"></i>Số 304 Nguyễn Đình Tựu, Q.Thanh Khê TP. Đà Nẵng</p>
                <p><i style=\"margin-right: 5px\" class=\"fa fa-phone\"></i><a href=\"tel:0968333268\">0968.333.268</a> - <a href=\"tel:0935333268\">0935.333.268</a></p>
                <p><i style=\"margin-right: 5px\" class=\"fa fa-envelope\"></i><a href=\"mailto:GiahanGroup2018@gmail.com\" target=\"_blank\">GiahanGroup2018@gmail.com</p>
            </div>
        </div>
    </div>     
</section>
<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1943062686214!2d108.18285241485833!3d16.05540368888949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421908a5578423%3A0xe33089a380b4706!2zMzA0IE5ndXnhu4VuIMSQw6xuaCBU4buxdSwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1531381562612\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
", "modular/contact.html.twig", "C:\\wamp64\\www\\giahan\\user\\themes\\x-corporation\\templates\\modular\\contact.html.twig");
    }
}
