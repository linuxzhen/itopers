<?php

/* detail.html */
class __TwigTemplate_dc81b46e6a3c530a5b731947ec5538e642cef258717dcba6e84df04ad15f15d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/default.html", "detail.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"post\">
\t<header class=\"post-header\">
\t\t<h1 class=\"post-title\">";
        // line 6
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
        echo "</h1>
\t\t<p class=\"post-meta\">";
        // line 7
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "date", array()), "Y-m-d"), "html", null, true);
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($_blog_, "author", array())) {
            echo " • ";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
        }
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($_blog_, "keywords", array())) {
            echo " • ";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_blog_, "keywords", array()), ","), "html", null, true);
        }
        echo "</p>
\t</header>
\t<article class=\"post-content\">
\t\t";
        // line 10
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo $this->getAttribute($_blog_, "content", array());
        echo "
\t</article>
\t
\t";
        // line 13
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "duoshuo", array())) {
            // line 14
            echo "\t<div class=\"post-content\">
\t\t<!-- 多说评论框 start -->
\t\t<div class=\"ds-thread\" data-thread-key=\"";
            // line 16
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "blogId", array()), "html", null, true);
            echo "\" data-title=\"";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "\" data-url=\"";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
            echo "\"></div>
\t\t<!-- 多说评论框 end -->
\t\t<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
\t\t<script type=\"text/javascript\">
\t\tvar duoshuoQuery = {short_name:\"";
            // line 20
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "duoshuo", array()), "html", null, true);
            echo "\"};
\t\t(function() {
\t\t\tvar ds = document.createElement('script');
\t\t\tds.type = 'text/javascript';ds.async = true;
\t\t\tds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
\t\t\tds.charset = 'UTF-8';
\t\t\t(document.getElementsByTagName('head')[0] 
\t\t\t || document.getElementsByTagName('body')[0]).appendChild(ds);
\t\t})();
\t\t</script>
        <!-- 多说公共JS代码 end -->
\t</div>
\t";
        }
        // line 33
        echo "</div>
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
        return array (  106 => 33,  89 => 20,  73 => 16,  69 => 14,  66 => 13,  59 => 10,  40 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
