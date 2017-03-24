<?php

/* _includes/head.html */
class __TwigTemplate_b5b06fe0ab924b956b66170e2ebbc95788c63519982d2af75de2267251d78ea9 extends Twig_Template
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
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 5
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
        // line 6
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
        // line 7
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
\t<link rel=\"stylesheet\" href=\"/theme/simple/css/main.css?ver=";
        // line 8
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 9
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "/feed.xml\" />
\t
\t";
        // line 11
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 15
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
        // line 21
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
        return array (  98 => 21,  88 => 15,  80 => 11,  71 => 9,  66 => 8,  54 => 7,  40 => 6,  25 => 5,  19 => 1,);
    }
}
