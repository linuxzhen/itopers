<?php

/* widget/text.html */
class __TwigTemplate_163ec203ba8f2ef0b6436956f4867e4db559d873d9e20cd6831ab3a1c5d291f0 extends Twig_Template
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
            echo "<aside id=\"text\" class=\"widget widget_text\">
    <h2 class=\"widget-title\">";
            // line 3
            if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_confObj_, "text", array()), "title", array()), "html", null, true);
            echo "</h2>\t
    <div class=\"textwidget\">
    \t<p>";
            // line 5
            if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_confObj_, "text", array()), "intro", array()), "html", null, true);
            echo "</p>
    </div>
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
