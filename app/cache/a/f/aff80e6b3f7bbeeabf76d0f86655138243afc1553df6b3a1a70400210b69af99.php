<?php

/* _includes/detailcontent.html */
class __TwigTemplate_aff80e6b3f7bbeeabf76d0f86655138243afc1553df6b3a1a70400210b69af99 extends Twig_Template
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
        echo "<div class=\"container\">
    <span class=\"content-title\">";
        // line 2
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
        echo "</span>
    <div class=\"content\">
        <article class=\"full\">
            <div class=\"read\">
                <div class=\"post\">
                    <h2>";
        // line 7
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
        echo "</h2>
                    <span style=\"font-size:14px;\">时间:";
        // line 8
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "date", array()), "Y-m-d h:m:s"), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp; 作者:";
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;
\t 标签:";
        // line 9
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 10
            echo "           <a href=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
            echo "\" rel=\"tag\">";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  &nbsp;&nbsp;&nbsp;&nbsp;
\t  分类:";
        // line 12
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "           \t<a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
            echo "\" rel=\"category\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
            echo "</a>
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</span>
                    <p>
                    \t";
        // line 17
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo $this->getAttribute($_blog_, "content", array());
        echo "
                    </p>
                </div>
                <div class=\"meta\">
\t\t\t<span style=\"font-size:14px;\">时间:";
        // line 21
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "date", array()), "Y-m-d h:m:s"), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp; 作者:";
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;
         标签:";
        // line 22
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 23
            echo "           <a href=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
            echo "\" rel=\"tag\">";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  &nbsp;&nbsp;&nbsp;&nbsp;
          分类:";
        // line 25
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                <a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
            echo "\" rel=\"category\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </span>
<div class=\"ds-share\" data-thread-key=\"";
        // line 29
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "blogId", array()), "html", null, true);
        echo "\" data-title=\"";
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
        echo "\" data-images=\"";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "blog/img/random/tb";
        echo twig_escape_filter($this->env, twig_random($this->env, 20), "html", null, true);
        echo ".jpg\" data-content=\"";
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo $this->getAttribute($_blog_, "summary", array());
        echo "\" data-url=\"";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
        echo "\">
    <div class=\"ds-share-inline\">
      <ul  class=\"ds-share-icons-16\">
      \t
      \t<li data-toggle=\"ds-share-icons-more\"><a class=\"ds-more\" href=\"javascript:void(0);\">分享到：</a></li>
        <li><a class=\"ds-weibo\" href=\"javascript:void(0);\" data-service=\"weibo\">微博</a></li>
        <li><a class=\"ds-qzone\" href=\"javascript:void(0);\" data-service=\"qzone\">QQ空间</a></li>
        <li><a class=\"ds-qqt\" href=\"javascript:void(0);\" data-service=\"qqt\">腾讯微博</a></li>
        <li><a class=\"ds-wechat\" href=\"javascript:void(0);\" data-service=\"wechat\">微信</a></li>
      \t
      </ul>
      <div class=\"ds-share-icons-more\">
      </div>
    </div>
 </div>
                </div>
            </div>
        </article>
<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- unit1 -->
<ins class=\"adsbygoogle\"
     style=\"display:inline-block;width:940px;height:90px\"
     data-ad-client=\"ca-pub-4199877952940875\"
     data-ad-slot=\"8919069141\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

        ";
        // line 57
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "duoshuo", array())) {
            // line 58
            echo "\t\t<div class=\"post-content\">
\t\t\t<!-- 多说评论框 start -->
\t\t\t<div class=\"ds-thread\" data-thread-key=\"";
            // line 60
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
            // line 64
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
        // line 77
        echo "    </div>
    <div id=\"duoshuo\"></div>
</div>

";
        // line 81
        $this->loadTemplate("_includes/footer.html", "_includes/detailcontent.html", 81)->display($context);
    }

    public function getTemplateName()
    {
        return "_includes/detailcontent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 81,  233 => 77,  216 => 64,  200 => 60,  196 => 58,  193 => 57,  145 => 29,  142 => 28,  129 => 26,  124 => 25,  121 => 24,  108 => 23,  103 => 22,  95 => 21,  87 => 17,  83 => 15,  70 => 13,  65 => 12,  62 => 11,  49 => 10,  44 => 9,  36 => 8,  31 => 7,  22 => 2,  19 => 1,);
    }
}
