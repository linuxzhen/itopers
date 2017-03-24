<?php

/* block/breadcrumbs.html */
class __TwigTemplate_46af3416753430531a3bb5c9ae35bed8b0c6993ac2ec4d751ebee0f5ac308adb extends Twig_Template
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
        echo "<div class=\"quest-row\" id=\"title-container\">
\t<div class=\"container title-container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 5
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ == "search")) {
            // line 6
            echo "\t\t\t\t<h3>搜索：";
            if (isset($context["keyword"])) { $_keyword_ = $context["keyword"]; } else { $_keyword_ = null; }
            echo twig_escape_filter($this->env, $_keyword_, "html", null, true);
            echo "</h3>
\t\t\t\t";
        } else {
            // line 8
            echo "\t\t\t\t<h3>";
            if (isset($context["navObj"])) { $_navObj_ = $context["navObj"]; } else { $_navObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_navObj_, "name", array()), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t";
        // line 14
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ == "search")) {
            // line 15
            echo "\t\t\t\t\t<li>search</li>
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t<li>";
            if (isset($context["navObj"])) { $_navObj_ = $context["navObj"]; } else { $_navObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_navObj_, "name", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t</ul>
\t\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "block/breadcrumbs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  55 => 17,  51 => 15,  48 => 14,  42 => 10,  35 => 8,  28 => 6,  25 => 5,  19 => 1,);
    }
}
