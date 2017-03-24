<?php

/* detail.html */
class __TwigTemplate_a1018d0e46d63c72d2600a2029945a1695a30d0f0136308ac53150436163f49e extends Twig_Template
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
            'sidebar' => array($this, 'block_sidebar'),
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
        echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(strtr($this->getAttribute($_blog_, "summary", array()), array("
" => ""))), 0, 140), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("block/sidebar.html", "detail.html", 10)->display($context);
        echo "  
";
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
        return array (  82 => 19,  79 => 18,  74 => 14,  71 => 13,  64 => 10,  61 => 9,  53 => 7,  43 => 5,  33 => 3,  11 => 1,);
    }
}
