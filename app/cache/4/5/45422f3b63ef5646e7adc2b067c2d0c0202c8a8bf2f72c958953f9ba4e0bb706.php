<?php

/* blog/content.html */
class __TwigTemplate_45422f3b63ef5646e7adc2b067c2d0c0202c8a8bf2f72c958953f9ba4e0bb706 extends Twig_Template
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
        echo "<div class=\"entry-content\">
";
        // line 2
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ == "blog")) {
            // line 3
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "content", array());
            echo "
";
        } else {
            // line 5
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "summary", array());
            echo "
";
        }
        // line 7
        echo "</div><!-- .entry-content -->";
    }

    public function getTemplateName()
    {
        return "blog/content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
