<?php

/* block/secondary.html */
class __TwigTemplate_7ce74a00965be60e24f28337984e4b6b424cfec507e0457eb9e213f5c60fb795 extends Twig_Template
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
        echo "<div id=\"secondary\" class=\"widget-area main-sidebar col-md-3\" role=\"complementary\">
\t";
        // line 2
        $this->loadTemplate("widget/search.html", "block/secondary.html", 2)->display($context);
        // line 3
        echo "\t";
        $this->loadTemplate("widget/categories.html", "block/secondary.html", 3)->display($context);
        // line 4
        echo "\t";
        $this->loadTemplate("widget/archive.html", "block/secondary.html", 4)->display($context);
        // line 5
        echo "\t";
        $this->loadTemplate("widget/recent.html", "block/secondary.html", 5)->display($context);
        // line 6
        echo "\t";
        $this->loadTemplate("widget/tagcloud.html", "block/secondary.html", 6)->display($context);
        // line 7
        echo "\t";
        $this->loadTemplate("widget/text.html", "block/secondary.html", 7)->display($context);
        // line 8
        echo "</div><!-- #secondary -->";
    }

    public function getTemplateName()
    {
        return "block/secondary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
