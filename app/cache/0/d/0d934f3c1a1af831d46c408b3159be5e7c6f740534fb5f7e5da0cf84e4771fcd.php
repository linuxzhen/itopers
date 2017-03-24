<?php

/* _includes/head.html */
class __TwigTemplate_0d934f3c1a1af831d46c408b3159be5e7c6f740534fb5f7e5da0cf84e4771fcd extends Twig_Template
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
        echo "<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 4
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
\t<meta name=\"keywords\" content=\"";
        // line 5
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
        // line 6
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
\t<link rel=\"stylesheet\" href=\"/theme/line/css/font-awesome.min.css?ver=";
        // line 7
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"/theme/line/css/main.css?ver=";
        // line 8
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"/theme/line/css/style.css?ver=";
        // line 9
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"/theme/line/css/markdown.css?ver=";
        // line 10
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 11
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "/feed.xml\" />
    
\t";
        // line 13
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 17
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
        // line 23
        echo "</head>
";
    }

    public function getTemplateName()
    {
        return "_includes/head.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  102 => 17,  94 => 13,  85 => 11,  80 => 10,  75 => 9,  70 => 8,  65 => 7,  53 => 6,  39 => 5,  24 => 4,  19 => 1,);
    }
}
