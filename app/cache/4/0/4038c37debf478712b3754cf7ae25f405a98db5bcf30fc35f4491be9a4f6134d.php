<?php

/* _includes/content.html */
class __TwigTemplate_4038c37debf478712b3754cf7ae25f405a98db5bcf30fc35f4491be9a4f6134d extends Twig_Template
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
        $this->loadTemplate("_includes/header.html", "_includes/content.html", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
\t<div class=\"content\">
\t";
        // line 5
        $this->loadTemplate("_includes/posts.html", "_includes/content.html", 5)->display($context);
        // line 6
        echo "\t</div>
</div>

";
        // line 9
        $this->loadTemplate("_includes/footer.html", "_includes/content.html", 9)->display($context);
    }

    public function getTemplateName()
    {
        return "_includes/content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
