<?php

/* blog/blog.html */
class __TwigTemplate_bdaf213ecfd58ffb2c21f50b213bed05beeb771adb869a9b3a84b8f7c395305c extends Twig_Template
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
        echo "<article class=\"post hentry\">
";
        // line 2
        $this->loadTemplate("blog/header.html", "blog/blog.html", 2)->display($context);
        // line 3
        $this->loadTemplate("blog/content.html", "blog/blog.html", 3)->display($context);
        // line 4
        $this->loadTemplate("blog/footer.html", "blog/blog.html", 4)->display($context);
        // line 5
        echo "</article><!-- #post-## -->";
    }

    public function getTemplateName()
    {
        return "blog/blog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
