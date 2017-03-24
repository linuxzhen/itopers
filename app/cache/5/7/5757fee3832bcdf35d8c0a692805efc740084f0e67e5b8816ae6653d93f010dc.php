<?php

/* _layouts/sidebar.html */
class __TwigTemplate_5757fee3832bcdf35d8c0a692805efc740084f0e67e5b8816ae6653d93f010dc extends Twig_Template
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
        echo "<section id=\"sidebar\">
\t";
        // line 2
        if (isset($context["categoryList"])) { $_categoryList_ = $context["categoryList"]; } else { $_categoryList_ = null; }
        if ( !twig_test_empty($_categoryList_)) {
            // line 3
            echo "    <h2>分类</h2>
    <ul>
    ";
            // line 5
            if (isset($context["categoryList"])) { $_categoryList_ = $context["categoryList"]; } else { $_categoryList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_categoryList_);
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "        <li>
            <a href=\"";
                // line 7
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
                echo "\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ul>
    ";
        }
        // line 12
        echo "    
    ";
        // line 13
        if (isset($context["tagsList"])) { $_tagsList_ = $context["tagsList"]; } else { $_tagsList_ = null; }
        if ( !twig_test_empty($_tagsList_)) {
            // line 14
            echo "    <h2>标签</h2>
    <ul>
    ";
            // line 16
            if (isset($context["tagsList"])) { $_tagsList_ = $context["tagsList"]; } else { $_tagsList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tagsList_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 17
                echo "        <li>
            <a href=\"";
                // line 18
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
                echo "\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
    ";
        }
        // line 23
        echo "    
    ";
        // line 24
        if (isset($context["yearMonthList"])) { $_yearMonthList_ = $context["yearMonthList"]; } else { $_yearMonthList_ = null; }
        if ( !twig_test_empty($_yearMonthList_)) {
            // line 25
            echo "    <h2>归档</h2>
    <ul>
    ";
            // line 27
            if (isset($context["yearMonthList"])) { $_yearMonthList_ = $context["yearMonthList"]; } else { $_yearMonthList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_yearMonthList_);
            foreach ($context['_seq'] as $context["_key"] => $context["yearMonth"]) {
                // line 28
                echo "        <li>
            <a href=\"";
                // line 29
                if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "url", array()), "html", null, true);
                echo "\">";
                if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "name", array()), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yearMonth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
    ";
        }
        // line 34
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "_layouts/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  120 => 32,  107 => 29,  104 => 28,  99 => 27,  95 => 25,  92 => 24,  89 => 23,  85 => 21,  72 => 18,  69 => 17,  64 => 16,  60 => 14,  57 => 13,  54 => 12,  50 => 10,  37 => 7,  34 => 6,  29 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
