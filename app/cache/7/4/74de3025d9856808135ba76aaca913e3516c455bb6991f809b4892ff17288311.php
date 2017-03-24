<?php

/* _layouts/default.html */
class __TwigTemplate_74de3025d9856808135ba76aaca913e3516c455bb6991f809b4892ff17288311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t";
        // line 3
        $this->loadTemplate("_includes/head.html", "_layouts/default.html", 3)->display($context);
        // line 4
        echo "<body>
\t";
        // line 5
        $this->loadTemplate("_includes/header.html", "_layouts/default.html", 5)->display($context);
        // line 6
        echo "\t<div class=\"page-content\">
\t\t<div class=\"wrapper\">
\t\t\t";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "\t\t</div>
\t</div>
\t";
        // line 11
        $this->loadTemplate("_includes/footer.html", "_layouts/default.html", 11)->display($context);
        // line 12
        echo "
";
        // line 13
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "highlight", array())) {
            // line 14
            echo "<link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/highlight.js/8.6/styles/magula.min.css\">
<script src=\"http://cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 18
        echo "
";
        // line 19
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "mathjax", array())) {
            // line 20
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"http://cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 23
        echo "</body>
</html>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  66 => 23,  61 => 20,  58 => 19,  55 => 18,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  37 => 9,  35 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  20 => 1,);
    }
}
