<?php

/* block/404content.html */
class __TwigTemplate_bddfd2a5191a2e1419065135faeba223885ea9135bb01a1076509f673a3f77e4 extends Twig_Template
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
        echo "<div id=\"content\">
    <div class=\"quest-row site-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"content-area col-md-12\" id=\"primary\">
                    <main class=\"site-main\" id=\"main\" role=\"main\">
                        <section class=\"error-404 not-found\">
                            <header class=\"entry-header\">
                                <h1 class=\"page-title\">Oops! 404.</h1>
                            </header><!-- .entry-header -->

                            <div class=\"entry-content\">
                            \t<p>您访问的页面不存了，你可以试试查看下面的内容.</p>
                            
\t\t\t\t\t\t\t\t";
        // line 15
        if (isset($context["recentBlogList"])) { $_recentBlogList_ = $context["recentBlogList"]; } else { $_recentBlogList_ = null; }
        if ( !twig_test_empty($_recentBlogList_)) {
            // line 16
            echo "                                <div class=\"widget widget_recent_entries\">
                                    <h2 class=\"widgettitle\">近期文章</h2>
                                    <ul>
                                        ";
            // line 19
            if (isset($context["recentBlogList"])) { $_recentBlogList_ = $context["recentBlogList"]; } else { $_recentBlogList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_recentBlogList_);
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 20
                echo "\t\t\t\t\t\t\t\t\t    <li><a href=\"";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
                echo "\">";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                                    </ul>
                                </div>
                                ";
        }
        // line 25
        echo "                                
                                ";
        // line 26
        if (isset($context["categoryList"])) { $_categoryList_ = $context["categoryList"]; } else { $_categoryList_ = null; }
        if ( !twig_test_empty($_categoryList_)) {
            // line 27
            echo "                                <div class=\"widget widget_categories\">
                                    <h2 class=\"widget-title\">博客分类</h2>
                                    <ul>
                                    ";
            // line 30
            if (isset($context["categoryList"])) { $_categoryList_ = $context["categoryList"]; } else { $_categoryList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_categoryList_);
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "\t\t\t\t\t\t\t        <li class=\"cat-item\"><a href=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
                echo "\" >";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                                    </ul>
                                </div>
                                ";
        }
        // line 36
        echo "                                
                                ";
        // line 37
        if (isset($context["yearMonthList"])) { $_yearMonthList_ = $context["yearMonthList"]; } else { $_yearMonthList_ = null; }
        if ( !twig_test_empty($_yearMonthList_)) {
            // line 38
            echo "                                <div class=\"widget widget_archive\">
                                    <h2 class=\"widgettitle\">文章归档</h2>
                                    <ul>
\t\t\t\t\t\t\t\t\t";
            // line 41
            if (isset($context["yearMonthList"])) { $_yearMonthList_ = $context["yearMonthList"]; } else { $_yearMonthList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_yearMonthList_);
            foreach ($context['_seq'] as $context["_key"] => $context["yearMonth"]) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "url", array()), "html", null, true);
                echo "\">";
                if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "name", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yearMonth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t\t\t\t\t\t</ul>
                                </div>
                                ";
        }
        // line 47
        echo "                                
                                <div class=\"widget widget_tag_cloud\">
                                    <h2 class=\"widgettitle\">标签</h2>

                                    <div class=\"tagcloud\">
\t\t\t\t\t\t\t\t\t    ";
        // line 52
        if (isset($context["tagsList"])) { $_tagsList_ = $context["tagsList"]; } else { $_tagsList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tagsList_);
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
            echo "\"  title=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
            echo "\" >";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                        </section><!-- .error-404 -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "block/404content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  146 => 53,  141 => 52,  134 => 47,  129 => 44,  116 => 42,  111 => 41,  106 => 38,  103 => 37,  100 => 36,  95 => 33,  82 => 31,  77 => 30,  72 => 27,  69 => 26,  66 => 25,  61 => 22,  48 => 20,  43 => 19,  38 => 16,  35 => 15,  19 => 1,);
    }
}
