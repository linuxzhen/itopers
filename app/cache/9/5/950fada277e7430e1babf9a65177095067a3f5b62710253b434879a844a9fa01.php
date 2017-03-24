<?php

/* _includes/posts.html */
class __TwigTemplate_950fada277e7430e1babf9a65177095067a3f5b62710253b434879a844a9fa01 extends Twig_Template
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
        if (isset($context["blogList"])) { $_blogList_ = $context["blogList"]; } else { $_blogList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blogList_);
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 2
            echo "<article class=\"published\">
    <div class=\"row\">
        <div class=\"one-quarter meta\">
        \t";
            // line 5
            $context["headUrl"] = "/img/logo_64x64.png";
            // line 6
            echo "        \t";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            if ($this->getAttribute($_blog_, "head", array())) {
                // line 7
                echo "        \t\t";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                $context["headUrl"] = $this->getAttribute($_blog_, "head", array());
                // line 8
                echo "        \t";
            }
            // line 9
            echo "            <div class=\"thumbnail\"><img alt=\"";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
            echo "\" src=\"";
            if (isset($context["headUrl"])) { $_headUrl_ = $context["headUrl"]; } else { $_headUrl_ = null; }
            echo twig_escape_filter($this->env, $_headUrl_, "html", null, true);
            echo "\"></div>
            <ul>
                <li>";
            // line 11
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
            echo "</li>
                <li>";
            // line 12
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "date", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                <li>
                    ";
            // line 14
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            if ($this->getAttribute($this->getAttribute($_blog_, "category", array()), 0)) {
                // line 15
                echo "                    ";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "category", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    echo "  
\t\t\t\t    <a href=\"";
                    // line 16
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                    echo "</a>
\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t\t\t\t    ";
            }
            // line 19
            echo "                </li>
                <li>
                    ";
            // line 21
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            if ($this->getAttribute($this->getAttribute($_blog_, "tags", array()), 0)) {
                // line 22
                echo "                    ";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    echo "  
\t\t\t\t    <a href=\"";
                    // line 23
                    if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
                    echo "</a>
\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t\t    ";
            }
            // line 26
            echo "                </li>
                <li></li>
            </ul>
        </div>

        <div class=\"three-quarters post\">
            <h2><a href=\"";
            // line 32
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
            echo "\">";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 33
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "summary", array());
            echo "</p>
            <ul class=\"actions\">
                <li>
                    <a class=\"button\" href=\"";
            // line 36
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
            echo "\">继续阅读</a>
                </li>
            </ul>
        </div>
    </div>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_includes/posts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 36,  135 => 33,  127 => 32,  119 => 26,  116 => 25,  104 => 23,  96 => 22,  93 => 21,  89 => 19,  86 => 18,  74 => 16,  66 => 15,  63 => 14,  57 => 12,  52 => 11,  42 => 9,  39 => 8,  35 => 7,  31 => 6,  29 => 5,  24 => 2,  19 => 1,);
    }
}
