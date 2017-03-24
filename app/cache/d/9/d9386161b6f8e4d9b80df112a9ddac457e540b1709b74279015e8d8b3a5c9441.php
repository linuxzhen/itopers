<?php

/* block/header.html */
class __TwigTemplate_d9386161b6f8e4d9b80df112a9ddac457e540b1709b74279015e8d8b3a5c9441 extends Twig_Template
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
        echo "<header id=\"masthead\" class=\"main-header\" role=\"banner\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"site-branding col-md-4\">
\t\t\t<h1 class=\"site-title\"><a href=\"";
        // line 5
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "url", array()), "html", null, true);
        echo "\" rel=\"home\">";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
        echo "</a></h1>
\t\t\t\t<span class=\"site-description\">";
        // line 6
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "subtitle", array()), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<!-- .site-branding -->
\t</div>
</div>
</header>";
    }

    public function getTemplateName()
    {
        return "block/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  25 => 5,  19 => 1,);
    }
}
