<?php

/* block/homeContent.html */
class __TwigTemplate_8b6a0164d428eaa84fdafd78d2106802e0f931a5186ff4df56742e1797b10359 extends Twig_Template
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
        echo "<div id=\"content\" class=\"site-content\">
\t<div id=\"primary\" class=\"content-area\">
        <div id=\"main\" class=\"site-main\" role=\"main\">
    \t";
        // line 4
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
        if ($_category_) {
            // line 5
            echo "    \t<header class=\"page-header\">
\t\t\t<h1 class=\"page-title\">分类：";
            // line 6
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
            echo "</h1>
\t\t</header><!-- .page-header -->
    \t";
        } elseif ($_tag_) {
            // line 9
            echo "    \t<header class=\"page-header\">
\t\t\t<h1 class=\"page-title\">标签：";
            // line 10
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
            echo "</h1>
\t\t</header><!-- .page-header -->
    \t";
        } elseif ($_yearMonth_) {
            // line 13
            echo "    \t<header class=\"page-header\">
\t\t\t<h1 class=\"page-title\">月份：";
            // line 14
            if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "name", array()), "html", null, true);
            echo "</h1>
\t\t</header><!-- .page-header -->
    \t";
        }
        // line 17
        echo "    \t
        ";
        // line 18
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
            // line 19
            echo "        \t";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            if ($this->getAttribute($_blog_, "title", array())) {
                // line 20
                echo "        \t";
                $this->loadTemplate("blog/blog.html", "block/homeContent.html", 20)->display($context);
                // line 21
                echo "        \t";
            }
            // line 22
            echo "        ";
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
        // line 23
        echo "        
        ";
        // line 24
        $this->loadTemplate("block/nav.html", "block/homeContent.html", 24)->display($context);
        // line 25
        echo "        
    \t</div>
    </div><!-- .content-area -->
</div><!-- .site-content -->";
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
        return array (  109 => 25,  107 => 24,  104 => 23,  90 => 22,  87 => 21,  84 => 20,  80 => 19,  62 => 18,  59 => 17,  52 => 14,  49 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
