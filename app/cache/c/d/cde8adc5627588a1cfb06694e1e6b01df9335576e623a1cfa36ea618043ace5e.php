<?php

/* detail.html */
class __TwigTemplate_cde8adc5627588a1cfb06694e1e6b01df9335576e623a1cfa36ea618043ace5e extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<a title=\"首页\" class=\"fa fa-paper-plane dp-dropplets-icon\" href=\"";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "\"></a>
\t<article class=\"single \">
    <div class=\"row\">
        <div class=\"one-quarter meta\">
            <div class=\"thumbnail\">
            \t";
        // line 8
        $context["headUrl"] = "/img/logo_64x64.png";
        // line 9
        echo "        \t";
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($_blog_, "authorHead", array())) {
            // line 10
            echo "        \t\t";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            $context["headUrl"] = $this->getAttribute($_blog_, "authorHead", array());
            // line 11
            echo "        \t";
        }
        // line 12
        echo "                <img src=\"";
        if (isset($context["headUrl"])) { $_headUrl_ = $context["headUrl"]; } else { $_headUrl_ = null; }
        echo twig_escape_filter($this->env, $_headUrl_, "html", null, true);
        echo "\" alt=\"";
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
        echo "\" />
            </div>

            <ul>
                <li>";
        // line 16
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
        echo "</li>
                <li>";
        // line 17
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "date", array()), "Y-m-d"), "html", null, true);
        echo "</li>
                <li>
                ";
        // line 19
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($this->getAttribute($_blog_, "category", array()), 0)) {
            // line 20
            echo "                ";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "  
\t\t\t    <a href=\"";
                // line 21
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
                echo "\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "</a>
\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t    ";
        }
        // line 24
        echo "                </li>
                <li></li>
            </ul>
        </div>

        <div class=\"three-quarters post\">
            <h2>";
        // line 30
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
        echo "</h2>
            ";
        // line 31
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo $this->getAttribute($_blog_, "content", array());
        echo "
            
            <br/>
        \t";
        // line 34
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "duoshuo", array())) {
            // line 35
            echo "\t\t\t<!-- 多说评论框 start -->
\t\t\t<div class=\"ds-thread\" data-thread-key=\"";
            // line 36
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
\t\t\t<!-- 多说评论框 end -->
\t\t\t<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
\t\t\t<script type=\"text/javascript\">
\t\t\tvar duoshuoQuery = {short_name:\"";
            // line 40
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "duoshuo", array()), "html", null, true);
            echo "\"};
\t\t\t(function() {
\t\t\t\tvar ds = document.createElement('script');
\t\t\t\tds.type = 'text/javascript';ds.async = true;
\t\t\t\tds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
\t\t\t\tds.charset = 'UTF-8';
\t\t\t\t(document.getElementsByTagName('head')[0] 
\t\t\t\t || document.getElementsByTagName('body')[0]).appendChild(ds);
\t\t\t})();
\t\t\t</script>
\t        <!-- 多说公共JS代码 end -->
\t\t</div>
\t\t";
        }
        // line 53
        echo "    </div>
</article>\t
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
        return array (  162 => 53,  145 => 40,  129 => 36,  126 => 35,  123 => 34,  116 => 31,  111 => 30,  103 => 24,  100 => 23,  88 => 21,  80 => 20,  77 => 19,  71 => 17,  66 => 16,  54 => 12,  51 => 11,  47 => 10,  43 => 9,  41 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
