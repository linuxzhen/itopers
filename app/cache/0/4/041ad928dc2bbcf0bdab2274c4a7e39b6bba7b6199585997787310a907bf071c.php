<?php

/* blog/content.html */
class __TwigTemplate_041ad928dc2bbcf0bdab2274c4a7e39b6bba7b6199585997787310a907bf071c extends Twig_Template
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
\t";
        // line 2
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ == "blog")) {
            // line 3
            echo "\t";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "content", array());
            echo "
\t";
        } else {
            // line 5
            echo "\t";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "summary", array());
            echo "
\t";
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
        return array (  39 => 7,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
