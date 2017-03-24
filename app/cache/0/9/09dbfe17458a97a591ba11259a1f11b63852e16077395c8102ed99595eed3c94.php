<?php

/* block/homeContent.html */
class __TwigTemplate_09dbfe17458a97a591ba11259a1f11b63852e16077395c8102ed99595eed3c94 extends Twig_Template
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
\t\t";
        // line 2
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
        if ($_category_) {
            // line 3
            echo "\t\t\t";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            $context["navObj"] = $_category_;
            // line 4
            echo "    \t";
        } elseif ($_tag_) {
            // line 5
            echo "    \t\t";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            $context["navObj"] = $_tag_;
            // line 6
            echo "    \t";
        } elseif ($_yearMonth_) {
            // line 7
            echo "    \t\t";
            if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
            $context["navObj"] = $_yearMonth_;
            // line 8
            echo "    \t";
        }
        // line 9
        echo "    \t
    \t";
        // line 10
        if (isset($context["navObj"])) { $_navObj_ = $context["navObj"]; } else { $_navObj_ = null; }
        if (isset($context["keyword"])) { $_keyword_ = $context["keyword"]; } else { $_keyword_ = null; }
        if (($_navObj_ || $_keyword_)) {
            // line 11
            echo "    \t\t";
            $this->loadTemplate("block/breadcrumbs.html", "block/homeContent.html", 11)->display($context);
            // line 12
            echo "    \t";
        }
        // line 13
        echo "\t<div class=\"quest-row site-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"primary\" class=\"content-area col-md-9\">
\t\t\t\t\t<div id=\"main\" class=\"site-main\" role=\"main\">
\t\t\t\t\t\t";
        // line 18
        if (isset($context["blogList"])) { $_blogList_ = $context["blogList"]; } else { $_blogList_ = null; }
        if ($_blogList_) {
            // line 19
            echo "\t\t\t\t\t\t\t";
            if (isset($context["blogList"])) { $_blogList_ = $context["blogList"]; } else { $_blogList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_blogList_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 20
                echo "\t\t\t\t\t\t\t\t";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                if ($this->getAttribute($_blog_, "title", array())) {
                    // line 21
                    echo "\t\t\t\t\t        \t";
                    $this->loadTemplate("blog/blog.html", "block/homeContent.html", 21)->display($context);
                    // line 22
                    echo "\t\t\t\t\t        \t";
                }
                // line 23
                echo "\t\t\t\t\t        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("block/nav.html", "block/homeContent.html", 24)->display($context);
            // line 25
            echo "\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("block/noresult.html", "block/homeContent.html", 26)->display($context);
            // line 27
            echo "\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- #main -->
\t\t\t\t</div>
\t\t\t\t";
        // line 31
        $this->loadTemplate("block/secondary.html", "block/homeContent.html", 31)->display($context);
        // line 32
        echo "\t\t\t</div>
\t\t\t<!-- .row -->
\t\t</div>
\t\t<!-- .container -->
\t</div>
\t<!-- .quest-row -->
</div><!-- #content -->";
    }

    public function getTemplateName()
    {
        return "block/homeContent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  131 => 31,  126 => 28,  123 => 27,  120 => 26,  117 => 25,  114 => 24,  100 => 23,  97 => 22,  94 => 21,  90 => 20,  71 => 19,  68 => 18,  61 => 13,  58 => 12,  55 => 11,  51 => 10,  48 => 9,  45 => 8,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
