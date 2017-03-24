<?php

/* _includes/head.html */
class __TwigTemplate_1af99c0ccb582b9e33d3c7dba143dbfce7976daa2c796bd2e0c89a5721a7ad27 extends Twig_Template
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
<meta name=\"baidu_union_verify\" content=\"06dbc493880ee0ec0f16e0220326d829\">
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
        <link rel=\"stylesheet\" href=\"/theme/cube/bootstrap/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/theme/cube/bootstrap/bootstrap-theme.min.css\">
            <script src='/theme/cube/bootstrap/jquery.js'></script>
  <script src='/theme/cube/bootstrap/bootstrap.min.js'></script>
\t<meta name=\"keywords\" content=\"";
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
\t<link rel=\"stylesheet\" href=\"/theme/cube/css/font-awesome.min.css?ver=";
        // line 11
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"/theme/cube/css/style.css?ver=";
        // line 12
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"/theme/cube/css/style-mobile.css?ver=";
        // line 13
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"/theme/cube/css/main.css?ver=";
        // line 14
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "version", array()), "html", null, true);
        echo "\">
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 15
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "/feed.xml\" />
    <link href=\"http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900\" rel=\"stylesheet\" type=\"text/css\">
    
\t";
        // line 18
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 22
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
        // line 28
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
        return array (  117 => 28,  107 => 22,  99 => 18,  89 => 15,  84 => 14,  79 => 13,  74 => 12,  69 => 11,  57 => 10,  43 => 9,  24 => 4,  19 => 1,);
    }
}
