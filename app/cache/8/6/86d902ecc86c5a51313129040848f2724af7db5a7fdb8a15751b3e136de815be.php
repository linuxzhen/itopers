<?php

/* index.html */
class __TwigTemplate_86d902ecc86c5a51313129040848f2724af7db5a7fdb8a15751b3e136de815be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/default.html", "index.html", 1);
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
        echo "<div class=\"home\">
\t<h1 class=\"page-heading\">";
        // line 5
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "subtitle", array()), "html", null, true);
        echo "</h1>
\t";
        // line 6
        if (isset($context["blogList"])) { $_blogList_ = $context["blogList"]; } else { $_blogList_ = null; }
        if ($_blogList_) {
            // line 7
            echo "\t<ul class=\"post-list\">
\t\t";
            // line 8
            if (isset($context["blogList"])) { $_blogList_ = $context["blogList"]; } else { $_blogList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_blogList_);
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 9
                echo "\t\t";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                if ($this->getAttribute($_blog_, "title", array())) {
                    // line 10
                    echo "\t\t<li>
\t\t\t<span class=\"post-meta\">";
                    // line 11
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "date", array()), "Y-m-d"), "html", null, true);
                    echo "</span>
\t\t\t<h2><a class=\"post-link\" href=\"";
                    // line 12
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                    echo "</a></h2>
\t\t</li>
\t\t";
                }
                // line 15
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t</ul>
\t<p class=\"rss-subscribe\">subscribe <a href=\"/feed.xml\">via RSS</a></p>
\t";
        }
        // line 19
        echo "\t
\t
\t";
        // line 21
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        if (($_pages_ > 1)) {
            // line 22
            echo "\t<p class=\"rss-subscribe\">
\t\t";
            // line 23
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "prev", array())) {
                // line 24
                echo "\t\t<a href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "prev", array()), "url", array()), "html", null, true);
                echo "\" title=\"前一页\">Prev</a>
\t\t";
            }
            // line 26
            echo "\t\t
\t\t";
            // line 27
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "next", array())) {
                // line 28
                echo "\t\t<a href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "next", array()), "url", array()), "html", null, true);
                echo "\" title=\"后一页\">Next</a>
\t\t";
            }
            // line 30
            echo "\t</p>
\t";
        }
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  116 => 30,  109 => 28,  106 => 27,  103 => 26,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  83 => 19,  78 => 16,  72 => 15,  62 => 12,  57 => 11,  54 => 10,  50 => 9,  45 => 8,  42 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
