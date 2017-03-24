<?php

/* index.html */
class __TwigTemplate_13508f81b32b27d62b14911656d4173560de498301a942b0152b21bc731d237a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/default.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->loadTemplate("_includes/posts.html", "index.html", 4)->display($context);
        // line 5
        echo "\t<a title=\"首页\" class=\"fa fa-paper-plane dp-dropplets-icon\" href=\"";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "\"></a>
\t";
        // line 6
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        if (($_pages_ > 1)) {
            // line 7
            echo "\t\t";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "prev", array())) {
                // line 8
                echo "\t\t<a title=\"上一页\" class=\"fa fa-arrow-left dp-dropplets-icon dp-dropplets-prev\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "prev", array()), "url", array()), "html", null, true);
                echo "\"></a>
\t\t";
            }
            // line 10
            echo "\t\t
\t\t";
            // line 11
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "next", array())) {
                // line 12
                echo "\t\t<a title=\"下一页\" class=\"fa fa-arrow-right dp-dropplets-icon dp-dropplets-next\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "next", array()), "url", array()), "html", null, true);
                echo "\"></a>
\t\t";
            }
            // line 14
            echo "\t";
        }
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  60 => 12,  57 => 11,  54 => 10,  47 => 8,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
