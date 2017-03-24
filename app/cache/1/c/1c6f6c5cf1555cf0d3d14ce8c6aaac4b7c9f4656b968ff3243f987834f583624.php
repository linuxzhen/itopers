<?php

/* block/comments.html */
class __TwigTemplate_1c6f6c5cf1555cf0d3d14ce8c6aaac4b7c9f4656b968ff3243f987834f583624 extends Twig_Template
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
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        if ($this->getAttribute($_confObj_, "duoshuo", array())) {
            // line 2
            echo "<div id=\"comments\" class=\"comments-area\">
\t<div id=\"respond\" class=\"comment-respond\">
\t\t<!-- 多说评论框 start -->
\t\t<div class=\"ds-thread\" data-thread-key=\"";
            // line 5
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
            // line 9
            if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "duoshuo", array()), "html", null, true);
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
\t</div><!-- #respond -->
</div><!-- .comments-area -->
";
        }
    }

    public function getTemplateName()
    {
        return "block/comments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  27 => 5,  22 => 2,  19 => 1,);
    }
}
