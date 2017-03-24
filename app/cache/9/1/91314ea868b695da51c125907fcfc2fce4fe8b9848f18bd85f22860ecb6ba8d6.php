<?php

/* _layouts/struct.html */
class __TwigTemplate_91314ea868b695da51c125907fcfc2fce4fe8b9848f18bd85f22860ecb6ba8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/base.html", "_layouts/struct.html", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'contents' => array($this, 'block_contents'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->loadTemplate("_layouts/sidebar.html", "_layouts/struct.html", 4)->display($context);
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "<section id=\"contents\">
\t<header id=\"mainheader\">
\t\t<h1><a href=\"";
        // line 10
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "\"><span>";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title", array()), "html", null, true);
        echo "</span></a></h1>
\t</header>
\t
\t";
        // line 13
        $this->displayBlock('main', $context, $blocks);
        // line 15
        echo "    
    ";
        // line 16
        $this->loadTemplate("_includes/footer.html", "_layouts/struct.html", 16)->display($context);
        echo " 
</section>
";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "_layouts/struct.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  67 => 13,  60 => 16,  57 => 15,  55 => 13,  45 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
