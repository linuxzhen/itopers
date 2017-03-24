<?php

/* widget/tagcloud.html */
class __TwigTemplate_71c213004630230b3f5d168fb4b655a27b5c9d6b4d02a022b1abe300c4b766a6 extends Twig_Template
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
        if (isset($context["tagsList"])) { $_tagsList_ = $context["tagsList"]; } else { $_tagsList_ = null; }
        if ($this->getAttribute($_tagsList_, 0)) {
            // line 2
            echo "<aside class=\"widget widget_tag_cloud sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">标签</h3>
\t<div class=\"tagcloud\">
\t";
            // line 5
            if (isset($context["tagsList"])) { $_tagsList_ = $context["tagsList"]; } else { $_tagsList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tagsList_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 6
                echo "\t<a href=\"";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
                echo "\"  title=\"";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
                echo "\" >";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
                echo "</a>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/tagcloud.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  32 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }
}
