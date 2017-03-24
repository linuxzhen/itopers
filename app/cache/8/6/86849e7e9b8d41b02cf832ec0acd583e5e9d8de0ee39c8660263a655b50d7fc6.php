<?php

/* blog/header.html */
class __TwigTemplate_86849e7e9b8d41b02cf832ec0acd583e5e9d8de0ee39c8660263a655b50d7fc6 extends Twig_Template
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
        echo "<header class=\"entry-header\">
\t<h1 class=\"post-title\"><a href=\"";
        // line 2
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
        echo "\" rel=\"bookmark\">";
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
        echo "</a></h1>
\t<div class=\"entry-meta\">
\t\t<time class=\"post-date\"><i class=\"fa fa-clock-o\"></i>";
        // line 4
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "date", array()), "html", null, true);
        echo "</time>
\t\t";
        // line 5
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($_blog_, "author", array())) {
            // line 6
            echo "\t\t<span class=\"seperator\">/</span>
\t    <span><i class=\"fa fa-user\"></i> ";
            // line 7
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
            echo "</span>
\t    ";
        }
        // line 9
        echo "\t</div><!-- .entry-meta -->
</header><!-- .entry-header -->";
    }

    public function getTemplateName()
    {
        return "blog/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 4,  22 => 2,  19 => 1,);
    }
}
