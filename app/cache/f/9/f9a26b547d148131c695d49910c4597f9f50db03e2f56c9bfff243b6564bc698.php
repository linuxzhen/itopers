<?php

/* blog/header.html */
class __TwigTemplate_f9a26b547d148131c695d49910c4597f9f50db03e2f56c9bfff243b6564bc698 extends Twig_Template
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
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ != "blog")) {
            // line 2
            echo "<header class=\"entry-header\">
\t<h2 class=\"entry-title\"><a href=\"";
            // line 3
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
            echo "\" rel=\"bookmark\">";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "</a></h2>
</header><!-- .entry-header -->
";
        } else {
            // line 6
            echo "<header class=\"entry-header\">
    <h1 class=\"entry-title\">";
            // line 7
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "</h1>
</header><!-- .entry-header -->
";
        }
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
        return array (  38 => 7,  35 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
