<?php

/* block/nav.html */
class __TwigTemplate_243ca321ee1cd0521fc3dc75f253fbe92070424b65204312cdd942c1d183da39 extends Twig_Template
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
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        if (($_pages_ > 1)) {
            // line 2
            echo "<nav class=\"navigation pagination\" role=\"navigation\">
\t<h2 class=\"screen-reader-text\">文章导航</h2>
\t<div class=\"nav-links\">
\t\t";
            // line 5
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "prev", array())) {
                // line 6
                echo "\t\t<a class=\"prev page-numbers\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "prev", array()), "url", array()), "html", null, true);
                echo "\">Previous page</a>
\t\t";
            }
            // line 8
            echo "\t\t
\t\t";
            // line 9
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_pagination_, "showList", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 10
                echo "\t\t\t";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if ($this->getAttribute($_page_, "isCurrent", array())) {
                    // line 11
                    echo "\t\t\t<span class=\"page-numbers current\"><span class=\"meta-nav screen-reader-text\">Page </span>";
                    if (isset($context["pageNo"])) { $_pageNo_ = $context["pageNo"]; } else { $_pageNo_ = null; }
                    echo twig_escape_filter($this->env, $_pageNo_, "html", null, true);
                    echo "</span>
\t\t\t";
                } else {
                    // line 13
                    echo "        \t<a class=\"page-numbers\" href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_page_, "url", array()), "html", null, true);
                    echo "\"><span class=\"meta-nav screen-reader-text\">Page </span>";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_page_, "num", array()), "html", null, true);
                    echo "</a>
        \t";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t
\t\t";
            // line 17
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "next", array())) {
                // line 18
                echo "\t\t<a class=\"next page-numbers\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "next", array()), "url", array()), "html", null, true);
                echo "\">Next page</a>
\t\t";
            }
            // line 20
            echo "\t</div>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "block/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  78 => 18,  75 => 17,  72 => 16,  66 => 15,  56 => 13,  49 => 11,  45 => 10,  40 => 9,  37 => 8,  30 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }
}
