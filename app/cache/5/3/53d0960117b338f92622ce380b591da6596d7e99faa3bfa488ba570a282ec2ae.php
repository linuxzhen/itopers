<?php

/* widget/archive.html */
class __TwigTemplate_53d0960117b338f92622ce380b591da6596d7e99faa3bfa488ba570a282ec2ae extends Twig_Template
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
        echo "<aside class=\"widget widget_archive sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">文章归档</h3>
\t<ul>
\t";
        // line 4
        if (isset($context["yearMonthList"])) { $_yearMonthList_ = $context["yearMonthList"]; } else { $_yearMonthList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_yearMonthList_);
        foreach ($context['_seq'] as $context["_key"] => $context["yearMonth"]) {
            // line 5
            echo "\t<li><a href=\"";
            if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "url", array()), "html", null, true);
            echo "\">";
            if (isset($context["yearMonth"])) { $_yearMonth_ = $context["yearMonth"]; } else { $_yearMonth_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_yearMonth_, "name", array()), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yearMonth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</ul>
</aside>";
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
        return array (  42 => 7,  29 => 5,  24 => 4,  19 => 1,);
    }
}
