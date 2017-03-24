<?php

/* block/base.html */
class __TwigTemplate_4235efb4d9265b61d36cdcd755cdd0a594f5106eb2d6f3a976f287da77069eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "</head>

<body class=\"home blog wide\">
\t<div id=\"page\" class=\"hfeed site\">
\t\t<a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
\t\t";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "\t</div><!-- #page -->
\t<a href=\"#0\" class=\"cd-top\"><i class=\"fa fa-angle-up\"></i></a>


<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/modernizr/modernizr.custom.js?ver=";
        // line 41
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/js/jquery/jquery.js?ver=1.11.2\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/js/jquery/jquery-migrate.min.js?ver=1.2.1\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/bootstrap/js/bootstrap.min.js?ver=";
        // line 44
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/wow/wow.js?ver=";
        // line 45
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/colorbox/jquery.colorbox-min.js?ver=";
        // line 46
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/js/quest.js?ver=";
        // line 47
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
\t
";
        // line 49
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "highlight", array())) {
            // line 50
            echo "<link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/highlight.js/8.6/styles/default.min.css\">
<script src=\"http://cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 54
        echo "
";
        // line 55
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "mathjax", array())) {
            // line 56
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"http://cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 59
        echo "</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('description', $context, $blocks);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"/theme/quest/assets/plugins/bootstrap/css/bootstrap.min.css?ver=";
        // line 11
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"/theme/quest/assets/plugins/font-awesome/css/font-awesome.min.css?ver=";
        // line 12
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"http://fonts.useso.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext\">
\t<link rel=\"stylesheet\" href=\"/theme/quest/css/style.css?ver=";
        // line 14
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"/theme/quest/css/customizer.css?ver=";
        // line 15
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 16
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "/feed.xml\" />
\t
\t";
        // line 18
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        if ($this->getAttribute($_confObj_, "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 22
            if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "keywords", array()), "html", null, true);
        echo ",";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "description", array()), "html", null, true);
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "block/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 36,  207 => 35,  201 => 34,  194 => 9,  184 => 8,  177 => 7,  165 => 22,  157 => 18,  148 => 16,  143 => 15,  138 => 14,  132 => 12,  127 => 11,  122 => 9,  118 => 8,  114 => 7,  109 => 4,  106 => 3,  101 => 59,  96 => 56,  93 => 55,  90 => 54,  84 => 50,  81 => 49,  75 => 47,  70 => 46,  65 => 45,  60 => 44,  53 => 41,  47 => 37,  44 => 36,  41 => 35,  39 => 34,  32 => 29,  30 => 3,  26 => 1,);
    }
}
