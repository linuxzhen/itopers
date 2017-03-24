<?php

/* widget/archive.html */
class __TwigTemplate_b88b5461d7f6bd22f8c5d6e67bb92d953db32bffb724a556f13ad542fa0b4a94 extends Twig_Template
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
        if (isset($context["yearMonthList"])) { $_yearMonthList_ = $context["yearMonthList"]; } else { $_yearMonthList_ = null; }
        if ($this->getAttribute($_yearMonthList_, 0)) {
            // line 2
            echo "<aside class=\"widget widget_archive\">
    <h2 class=\"widget-title\">文章归档</h2>
    <ul>
    ";
            // line 5
            if (isset($context["yearMonthList"])) { $_yearMonthList_ = $context["yearMonthList"]; } else { $_yearMonthList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_yearMonthList_);
            foreach ($context['_seq'] as $context["_key"] => $context["yearMonth"]) {
                // line 6
                echo "    <li><a href=\"";
                if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "url", array()), "html", null, true);
                echo "\">";
                if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "name", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yearMonth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/archive.html";
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
