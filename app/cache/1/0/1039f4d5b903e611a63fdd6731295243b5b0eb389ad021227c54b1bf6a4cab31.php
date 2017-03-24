<?php

/* widget/recent.html */
class __TwigTemplate_1039f4d5b903e611a63fdd6731295243b5b0eb389ad021227c54b1bf6a4cab31 extends Twig_Template
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
        if (isset($context["recentBlogList"])) { $_recentBlogList_ = $context["recentBlogList"]; } else { $_recentBlogList_ = null; }
        if ($this->getAttribute($_recentBlogList_, 0)) {
            // line 2
            echo "<aside class=\"widget widget_recent_entries sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">近期文章</h3>
\t<ul>
\t";
            // line 5
            if (isset($context["recentBlogList"])) { $_recentBlogList_ = $context["recentBlogList"]; } else { $_recentBlogList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_recentBlogList_);
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 6
                echo "    <li><a href=\"";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
                echo "\">";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</ul>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/recent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  32 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }
}
