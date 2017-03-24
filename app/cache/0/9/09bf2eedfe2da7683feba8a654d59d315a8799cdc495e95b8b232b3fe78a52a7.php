<?php

/* _layouts/base.html */
class __TwigTemplate_09bf2eedfe2da7683feba8a654d59d315a8799cdc495e95b8b232b3fe78a52a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($_blog_) {
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "|";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title", array()), "html", null, true);
            echo " ";
        } else {
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title", array()), "html", null, true);
        }
        echo "</title>
    
    <meta name=\"keywords\" content=\"";
        // line 9
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($_blog_) {
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "keywords", array()), "html", null, true);
            echo ",";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "keywords", array()), "html", null, true);
        } else {
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "keywords", array()), "html", null, true);
        }
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 10
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($_blog_) {
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, strtr(strip_tags($this->getAttribute($_blog_, "summary", array())), array("
" => "")), 0, 140), "html", null, true);
        } else {
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "description", array()), "html", null, true);
        }
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/theme/beach/css/style.css?ver=";
        // line 11
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/theme/beach/css/markdown.css?ver=";
        // line 12
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
    <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 13
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "/feed.xml\" />
    
    <!--[if IE]>
\t<script src=\"http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t<![endif]-->
\t
    <!--[if IE 6]>
\t<script src=\"/theme/beach/js/belatedPNG.js\"></script>
\t<script>
    \tDD_belatedPNG.fix('*');
\t</script>
\t<![endif]-->
\t
\t";
        // line 26
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 30
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
        // line 36
        echo "</head>

<body>
    <section id=\"page\">
        <div id=\"pagewrap\">
        \t";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "        \t";
        $this->displayBlock('contents', $context, $blocks);
        // line 43
        echo "        \t<div class=\"clear\"></div>
        </div>
    </section>

";
        // line 47
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "highlight", array())) {
            // line 48
            echo "<link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/highlight.js/8.6/styles/magula.min.css\">
<script src=\"http://cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 52
        echo "
";
        // line 53
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "mathjax", array())) {
            // line 54
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"http://cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 57
        echo "</body>
</html>";
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 42
    public function block_contents($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 42,  162 => 41,  157 => 57,  152 => 54,  149 => 53,  146 => 52,  140 => 48,  137 => 47,  131 => 43,  128 => 42,  126 => 41,  119 => 36,  109 => 30,  101 => 26,  81 => 13,  76 => 12,  71 => 11,  59 => 10,  45 => 9,  29 => 7,  21 => 1,);
    }
}
