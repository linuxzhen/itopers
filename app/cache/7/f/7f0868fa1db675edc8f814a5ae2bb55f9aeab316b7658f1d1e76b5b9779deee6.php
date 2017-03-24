<?php

/* block/nav.html */
class __TwigTemplate_7f0868fa1db675edc8f814a5ae2bb55f9aeab316b7658f1d1e76b5b9779deee6 extends Twig_Template
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
            echo "<div class=\"center\">
\t<ul class=\"pagination\">
\t";
            // line 4
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "prev", array())) {
                // line 5
                echo "\t<li><a class=\"prev page-numbers\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "prev", array()), "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-left\"></i></a></li>
\t";
            }
            // line 7
            echo "\t
\t";
            // line 8
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_pagination_, "showList", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                echo "\t\t";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if ($this->getAttribute($_page_, "isCurrent", array())) {
                    // line 10
                    echo "\t\t<li><span class=\"page-numbers current\">";
                    if (isset($context["pageNo"])) { $_pageNo_ = $context["pageNo"]; } else { $_pageNo_ = null; }
                    echo twig_escape_filter($this->env, $_pageNo_, "html", null, true);
                    echo "</span></li>
\t\t";
                } else {
                    // line 12
                    echo "\t\t<li><a class=\"page-numbers\" href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_page_, "url", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_page_, "num", array()), "html", null, true);
                    echo "</a></li>
    \t";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        
\t";
            // line 16
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "next", array())) {
                // line 17
                echo "\t<li><a class=\"next page-numbers\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "next", array()), "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a></li>
\t";
            }
            // line 19
            echo "\t</ul>
</div>
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
        return array (  84 => 19,  77 => 17,  74 => 16,  71 => 15,  65 => 14,  55 => 12,  48 => 10,  44 => 9,  39 => 8,  36 => 7,  29 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }
}
