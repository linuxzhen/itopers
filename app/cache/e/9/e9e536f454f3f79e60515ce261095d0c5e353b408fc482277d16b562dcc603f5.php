<?php

/* _includes/404content.html */
class __TwigTemplate_e9e536f454f3f79e60515ce261095d0c5e353b408fc482277d16b562dcc603f5 extends Twig_Template
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
        echo "<div class=\"container\">
    <span class=\"content-title\">404</span>
    <div class=\"content\">
        <article class=\"full\">
            <div class=\"read\">
            \t<div class=\"post\">
            \t\t<h2>Oops! 404</h2>
            \t\t<p>That page can’t be found.</p>
            \t</div>
            </div>
        </article>
    </div>
</div>
<style>.footer {position: absolute;bottom: 0px;}</style>
";
        // line 15
        $this->loadTemplate("_includes/footer.html", "_includes/404content.html", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "_includes/404content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
    }
}
