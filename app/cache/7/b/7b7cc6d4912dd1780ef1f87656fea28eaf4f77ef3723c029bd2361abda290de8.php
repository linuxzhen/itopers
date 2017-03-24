<?php

/* widget/categories.html */
class __TwigTemplate_7b7cc6d4912dd1780ef1f87656fea28eaf4f77ef3723c029bd2361abda290de8 extends Twig_Template
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
        if (isset($context["categoryList"])) { $_categoryList_ = $context["categoryList"]; } else { $_categoryList_ = null; }
        if ($this->getAttribute($_categoryList_, 0)) {
            // line 2
            echo "<aside class=\"widget widget_categories sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">分类目录</h3>
\t<ul>
\t\t";
            // line 5
            if (isset($context["categoryList"])) { $_categoryList_ = $context["categoryList"]; } else { $_categoryList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_categoryList_);
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "        <li class=\"cat-item\"><a href=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
                echo "\" >";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</ul>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/categories.html";
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
