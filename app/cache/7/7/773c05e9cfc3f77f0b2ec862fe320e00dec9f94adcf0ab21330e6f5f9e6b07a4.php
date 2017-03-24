<?php

/* 404.html */
class __TwigTemplate_773c05e9cfc3f77f0b2ec862fe320e00dec9f94adcf0ab21330e6f5f9e6b07a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/struct.html", "404.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/struct.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"main\">
\t<article class=\"post\">
\t\t<header>
\t\t\t<h2>Oops! 404.</h2>
\t\t</header>
\t\t<section class=\"entry\">
\t\t\t<p>That page can’t be found.</p>
\t\t</section>
\t</article>
\t<div class=\"clear\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
