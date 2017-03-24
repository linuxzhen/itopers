<?php

/* block/noresult.html */
class __TwigTemplate_5d211930753ec295ca084b9797c2ff7ba9f5d8ff45d7b66ef6ebf7ec8895249c extends Twig_Template
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
        echo "<section class=\"no-results not-found\">
\t<header class=\"page-header\">
\t\t";
        // line 3
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ == "search")) {
            // line 4
            echo "\t\t<h1 class=\"page-title\">没有搜索到相关博客</h1>
\t\t";
        } else {
            // line 6
            echo "\t\t<h1 class=\"page-title\">没有可展示的博客</h1>
\t\t";
        }
        // line 8
        echo "\t</header>
\t<!-- .page-header -->
\t<div class=\"page-content\">
\t\t";
        // line 11
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ == "search")) {
            // line 12
            echo "\t\t<p>对不起，没有搜索到相关的博客项目，请尝试其他关键字。</p>
\t\t";
        } else {
            // line 14
            echo "\t\t<p>对不起，没有发现可展示的博客，请检查blog目录下是否有正确的markdown文件。</p>
\t\t";
        }
        // line 16
        echo "\t</div>
\t<!-- .page-content -->
</section>";
    }

    public function getTemplateName()
    {
        return "block/noresult.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  46 => 14,  42 => 12,  39 => 11,  34 => 8,  30 => 6,  26 => 4,  23 => 3,  19 => 1,);
    }
}
