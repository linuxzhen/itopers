<?php

/* block/content.html */
class __TwigTemplate_b4c26baaec3444a2f5b2689323465c8620546b0ed8d1d8c6464bdd66c0f3ce1a extends Twig_Template
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
        echo "<div id=\"content\" class=\"site-content\">
    <div id=\"primary\" class=\"content-area\">
        <main id=\"main\" class=\"site-main\" role=\"main\">
        
            ";
        // line 5
        $this->loadTemplate("blog/blog.html", "block/content.html", 5)->display($context);
        // line 6
        echo "            ";
        $this->loadTemplate("block/comments.html", "block/content.html", 6)->display($context);
        // line 7
        echo "            
        </main><!-- .site-main -->
    </div><!-- .content-area -->
</div><!-- .site-content -->";
    }

    public function getTemplateName()
    {
        return "block/content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
