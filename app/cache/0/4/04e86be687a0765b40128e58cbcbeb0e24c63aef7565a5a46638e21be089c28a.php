<?php

/* _includes/footer.html */
class __TwigTemplate_04e86be687a0765b40128e58cbcbeb0e24c63aef7565a5a46638e21be089c28a extends Twig_Template
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
        echo "<footer id=\"pagefooter\">
    <div class=\"footerwrap\">
        <p class=\"siteinfo\">Copyright &copy 2015 Gtiblog. All Rights Reserved. <a href=\"http://www.gitblog.cn\">Proudly powered by Gitblog</a></p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "_includes/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
