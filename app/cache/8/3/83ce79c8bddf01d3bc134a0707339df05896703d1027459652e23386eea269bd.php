<?php

/* block/sidebar.html */
class __TwigTemplate_83ce79c8bddf01d3bc134a0707339df05896703d1027459652e23386eea269bd extends Twig_Template
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
        echo "<div id=\"sidebar\" class=\"sidebar\">
\t<header id=\"masthead\" class=\"site-header\" role=\"banner\">
\t\t<div class=\"site-branding\">
\t\t\t<h1 class=\"site-title\"><a href=\"";
        // line 4
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "\" rel=\"home\">";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "</a></h1>
\t\t\t\t<p class=\"site-description\">";
        // line 5
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "subtitle", array()), "html", null, true);
        echo "</p>
\t\t\t\t<button class=\"secondary-toggle\">菜单和挂件</button>
\t\t</div><!-- .site-branding -->
\t</header><!-- .site-header -->
\t<div id=\"secondary\" class=\"secondary\">
\t\t<div id=\"widget-area\" class=\"widget-area\" role=\"complementary\">
\t\t
\t\t\t";
        // line 12
        $this->loadTemplate("widget/categories.html", "block/sidebar.html", 12)->display($context);
        // line 13
        echo "\t\t    ";
        $this->loadTemplate("widget/archive.html", "block/sidebar.html", 13)->display($context);
        // line 14
        echo "\t\t    ";
        $this->loadTemplate("widget/recent.html", "block/sidebar.html", 14)->display($context);
        // line 15
        echo "\t\t    ";
        $this->loadTemplate("widget/tagcloud.html", "block/sidebar.html", 15)->display($context);
        // line 16
        echo "\t\t    ";
        $this->loadTemplate("widget/text.html", "block/sidebar.html", 16)->display($context);
        // line 17
        echo "\t    </div><!-- .widget-area -->
    </div><!-- .secondary -->
</div><!-- .sidebar -->";
    }

    public function getTemplateName()
    {
        return "block/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  54 => 16,  51 => 15,  48 => 14,  45 => 13,  43 => 12,  32 => 5,  24 => 4,  19 => 1,);
    }
}
