<?php

/* _includes/pagenav.html */
class __TwigTemplate_301f9dfd2a986be5cd560db84b6ae50f0b265935d10763e16aea10d7c44d87d4 extends Twig_Template
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
        echo "<div class=\"wp-pagenavi\">
\t";
        // line 2
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if ($this->getAttribute($_pagination_, "prev", array())) {
            // line 3
            echo "\t<a href=\"";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "prev", array()), "url", array()), "html", null, true);
            echo "\">&laquo; Prev</a>
\t";
        }
        // line 5
        echo "\t";
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_pagination_, "showList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "\t\t";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "isCurrent", array())) {
                // line 7
                echo "\t\t<span class=\"current\">";
                if (isset($context["pageNo"])) { $_pageNo_ = $context["pageNo"]; } else { $_pageNo_ = null; }
                echo twig_escape_filter($this->env, $_pageNo_, "html", null, true);
                echo "</span>
\t\t";
            } else {
                // line 9
                echo "    \t<a href=\"";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_page_, "url", array()), "html", null, true);
                echo "\" title=\"";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_page_, "num", array()), "html", null, true);
                echo "\">";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_page_, "num", array()), "html", null, true);
                echo "</a>
    \t";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if ($this->getAttribute($_pagination_, "next", array())) {
            // line 13
            echo "\t<a href=\"";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "next", array()), "url", array()), "html", null, true);
            echo "\">Next &raquo;</a>
\t";
        }
        // line 15
        echo "</div>
<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "_includes/pagenav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  72 => 13,  68 => 12,  62 => 11,  49 => 9,  42 => 7,  38 => 6,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
