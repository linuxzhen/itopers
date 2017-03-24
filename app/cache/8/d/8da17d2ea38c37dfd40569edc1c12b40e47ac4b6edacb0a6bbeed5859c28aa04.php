<?php

/* detail.html */
class __TwigTemplate_8da17d2ea38c37dfd40569edc1c12b40e47ac4b6edacb0a6bbeed5859c28aa04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block/base.html", "detail.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
        echo "|";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "keywords", array()), "html", null, true);
        echo ",";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "title", array()), "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($_blog_, "summary", array())), 0, 140), "html", null, true);
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("block/header.html", "detail.html", 10)->display($context);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->loadTemplate("block/content.html", "detail.html", 14)->display($context);
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("block/footer.html", "detail.html", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  76 => 18,  71 => 14,  68 => 13,  63 => 10,  60 => 9,  53 => 7,  43 => 5,  33 => 3,  11 => 1,);
    }
}
