<?php

/* detail.html */
class __TwigTemplate_8f2ab4e6e20a6cd68676ebb025985f26d87a83249c7aa5084af421566ad9197d extends Twig_Template
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
        echo " <link rel=\"stylesheet\" href=\"/theme/quest/assets/plugins/bootstrap/css/bootstrap.min.css?ver=2.2\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"/theme/quest/assets/plugins/font-awesome/css/font-awesome.min.css?ver=2.2\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"http://fonts.useso.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext\">
        <link rel=\"stylesheet\" href=\"/theme/quest/css/style.css?ver=2.2\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"/theme/quest/css/customizer.css?ver=2.2\" type=\"text/css\" media=\"all\" />


<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/modernizr/modernizr.custom.js?ver=2.2\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/js/jquery/jquery.js?ver=1.11.2\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/js/jquery/jquery-migrate.min.js?ver=1.2.1\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/bootstrap/js/bootstrap.min.js?ver=2.2\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/wow/wow.js?ver=2.2\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/colorbox/jquery.colorbox-min.js?ver=2.2\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/js/quest.js?ver=2.2\"></script>

<script type=\"text/javascript\" src=\"http://cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
<div id=\"content\">
        <div class=\"quest-row site-content\">
                <div class=\"container\">
                        <div class=\"row\">
                                <div id=\"primary\" class=\"content-area single col-md-9\">
                                        <div id=\"main\" class=\"site-main\" role=\"main\">
";
        // line 23
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ == "blog")) {
            // line 24
            echo "        ";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "content", array());
            echo "
        ";
        } else {
            // line 26
            echo "        ";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "summary", array());
            echo "
        ";
        }
        // line 27
        echo "                                        
</div>
                                        <!-- #main -->
                                </div>
                                <!-- #primary -->
                        </div>
                        <!-- .row -->
                </div>
                <!-- .container -->
        </div>
        <!-- .quest-row -->
</div>
";
    }

    public function getTemplateName()
    {
        return "detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  53 => 26,  46 => 24,  43 => 23,  19 => 1,);
    }
}
