<?php

/* widget/text.html */
class __TwigTemplate_b5a982b41b339413a4db6db9e2c400ccdd2b6494d1e71dfec40b78213c43a2f4 extends Twig_Template
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
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        if ($this->getAttribute($this->getAttribute($_confObj_, "text", array()), "intro")) {
            // line 2
            echo "<aside class=\"widget widget_text sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">";
            // line 3
            if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_confObj_, "text", array()), "title", array()), "html", null, true);
            echo "</h3>
\t<div class=\"textwidget\">
\t\t<p>";
            // line 5
            if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_confObj_, "text", array()), "intro", array()), "html", null, true);
            echo "</p>
\t</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/text.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
