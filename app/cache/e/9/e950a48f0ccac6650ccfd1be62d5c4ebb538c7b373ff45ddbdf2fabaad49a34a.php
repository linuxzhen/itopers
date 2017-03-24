<?php

/* _layouts/default.html */
class __TwigTemplate_e950a48f0ccac6650ccfd1be62d5c4ebb538c7b373ff45ddbdf2fabaad49a34a extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "\t
";
        // line 7
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "highlight", array())) {
            // line 8
            echo "<link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/highlight.js/8.6/styles/magula.min.css\">
<script src=\"http://cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 12
        echo "
";
        // line 13
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "mathjax", array())) {
            // line 14
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"http://cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 17
        echo "</body>
</html>
";
    }

    // line 5
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
        return array (  60 => 5,  54 => 17,  49 => 14,  46 => 13,  43 => 12,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  20 => 1,);
    }
}
