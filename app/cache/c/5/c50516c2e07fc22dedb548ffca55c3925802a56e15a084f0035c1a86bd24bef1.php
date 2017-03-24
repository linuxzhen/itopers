<?php

/* detail.html */
class __TwigTemplate_c50516c2e07fc22dedb548ffca55c3925802a56e15a084f0035c1a86bd24bef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/struct.html", "detail.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/struct.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"main\">
    ";
        // line 5
        $this->loadTemplate("_includes/post.html", "detail.html", 5)->display($context);
        // line 6
        echo "    <section id=\"comments\">
    ";
        // line 7
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "duoshuo", array())) {
            // line 8
            echo "\t<div class=\"post-content\">
\t\t<!-- 多说评论框 start -->
\t\t<div class=\"ds-thread\" data-thread-key=\"";
            // line 10
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
            // line 14
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
        // line 27
        echo "    </section>
</section>
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
        return array (  79 => 27,  62 => 14,  46 => 10,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
