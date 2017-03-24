<?php

/* widget/recent.html */
class __TwigTemplate_a6f1b1a1d7a7dda4f2ad2dd94829114c0e08ae5c9d6a726d7ba974a1525adb3e extends Twig_Template
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
            echo "<aside id=\"recent-posts\" class=\"widget widget_recent_entries\">
    <h2 class=\"widget-title\">近期文章</h2>
    <ul>
    ";
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
            echo "    </ul>
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
