<?php

/* _includes/footer.html */
class __TwigTemplate_f8c2882e95242b4be8f013fe95f8baf6aee66a26ee6a170abae9362b47375cb9 extends Twig_Template
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
        echo "<footer class=\"footer\">
    <div class=\"footer_bottom\">
        <div class=\"follow-us\">
            <a class=\"fa fa-github social-icon\" href=\"https://github.com/";
        // line 4
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "github", array()), "html", null, true);
        echo "\"></a>
            <a class=\"fa fa-weibo social-icon\" href=\"http://weibo.com/";
        // line 5
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "weibo", array()), "html", null, true);
        echo "\"></a>
        </div>

        <div class=\"copy\">
            <p>Copyright &copy; 2015 Gitblog | Proudly powered by <a href=\"http://www.gitblog.cn/\">Gitblog</a>.</p>
        </div>
    </div>
</footer>

<a title=\"首页\" class=\"fa fa-paper-plane dp-dropplets-icon\" href=\"";
        // line 14
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "\"></a>
";
        // line 15
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        if (($_pages_ > 1)) {
            // line 16
            echo "\t";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "prev", array())) {
                // line 17
                echo "\t<a title=\"上一页\" class=\"fa fa-arrow-left dp-dropplets-icon dp-dropplets-prev\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "prev", array()), "url", array()), "html", null, true);
                echo "\"></a>
\t";
            }
            // line 19
            echo "\t
\t";
            // line 20
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "next", array())) {
                // line 21
                echo "\t<a title=\"下一页\" class=\"fa fa-arrow-right dp-dropplets-icon dp-dropplets-next\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "next", array()), "url", array()), "html", null, true);
                echo "\"></a>
\t";
            }
        }
        // line 24
        echo "<script >
\$('ul.nav li.dropdown').hover(function() {
  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43198935-1', 'auto');
  ga('send', 'pageview');

</script>
";
    }

    public function getTemplateName()
    {
        return "_includes/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  67 => 21,  64 => 20,  61 => 19,  54 => 17,  50 => 16,  47 => 15,  42 => 14,  29 => 5,  24 => 4,  19 => 1,);
    }
}
