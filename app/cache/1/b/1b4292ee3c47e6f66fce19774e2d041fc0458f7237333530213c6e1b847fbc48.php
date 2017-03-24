<?php

/* block/footer.html */
class __TwigTemplate_1b4292ee3c47e6f66fce19774e2d041fc0458f7237333530213c6e1b847fbc48 extends Twig_Template
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
        echo "<footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"site-info\">
        <a href=\"https://github.com/jockchou/gitblog\">Proudly powered by Gitblog</a>
    </div><!-- .site-info -->
</footer><!-- .site-footer -->
";
    }

    public function getTemplateName()
    {
        return "block/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
