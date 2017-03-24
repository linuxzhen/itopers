<?php

/* block/base.html */
class __TwigTemplate_e0f8ee6d3d52ee48f58dbf939be0a7e78d524d7d1c6b7ee502a8f0680b4d26bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\" class=\"no-js\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>

<body>
<div id=\"page\" class=\"hfeed site\">
\t<a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
\t
\t";
        // line 49
        $this->displayBlock('sidebar', $context, $blocks);
        // line 50
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "\t
</div><!-- .site -->
";
        // line 54
        $this->loadTemplate("block/script.html", "block/base.html", 54)->display($context);
        // line 55
        echo "
";
        // line 56
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "highlight", array())) {
            // line 57
            echo "<link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/highlight.js/8.6/styles/github.min.css\">
<script src=\"http://cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 61
        echo "
";
        // line 62
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "mathjax", array())) {
            // line 63
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"http://cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 66
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width\">
\t<meta name=\"keywords\" content=\"";
        // line 7
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\">

\t<!--[if lt IE 9]>
\t<script src=\"/theme/default/js/html5.js\"></script>
\t<![endif]-->
\t<script>(function(html){html.className = html.className.replace(/\\bno-js\\b/,'js')})(document.documentElement);</script>
\t
\t<title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t<link rel=\"stylesheet\" href=\"/theme/default/css/genericons.css?ver=";
        // line 17
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"/theme/default/css/style.css?ver=";
        // line 18
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"/theme/default/css/markdown.css?ver=";
        // line 19
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 20
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "/feed.xml\" />
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"/theme/default/css/ie.css?ver=";
        // line 22
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<![endif]-->
\t<!--[if lt IE 8]>
\t<link rel=\"stylesheet\" href=\"/theme/default/css/ie7.css?ver=";
        // line 25
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<![endif]-->
\t
\t<script type=\"text/javascript\" src=\"/theme/default/js/jquery/jquery.js?ver=";
        // line 28
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"/theme/default/js/jquery/jquery-migrate.min.js?ver=";
        // line 29
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
\t
\t";
        // line 31
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        if ($this->getAttribute($_confObj_, "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 35
            if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
        // line 41
        echo "
";
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "keywords", array()), "html", null, true);
        echo ",";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "description", array()), "html", null, true);
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
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
        return array (  216 => 51,  211 => 50,  206 => 49,  199 => 15,  192 => 8,  182 => 7,  177 => 41,  167 => 35,  159 => 31,  153 => 29,  148 => 28,  141 => 25,  134 => 22,  125 => 20,  120 => 19,  115 => 18,  110 => 17,  105 => 15,  95 => 8,  91 => 7,  87 => 5,  84 => 4,  78 => 66,  73 => 63,  70 => 62,  67 => 61,  61 => 57,  58 => 56,  55 => 55,  53 => 54,  49 => 52,  46 => 51,  43 => 50,  41 => 49,  33 => 43,  31 => 4,  26 => 1,);
    }
}
