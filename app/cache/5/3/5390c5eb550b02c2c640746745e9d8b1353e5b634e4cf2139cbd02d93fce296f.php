<?php

/* blog/footer.html */
class __TwigTemplate_5390c5eb550b02c2c640746745e9d8b1353e5b634e4cf2139cbd02d93fce296f extends Twig_Template
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
        echo "<footer class=\"entry-footer\">
\t";
        // line 2
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($_blog_, "date", array())) {
            // line 3
            echo "    <span class=\"posted-on\">
        <span class=\"screen-reader-text\">Posted on </span>
        <time class=\"entry-date published\">";
            // line 5
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "date", array()), "html", null, true);
            echo "</time>
    </span>
\t";
        }
        // line 8
        echo "\t
\t";
        // line 9
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($_blog_, "author", array())) {
            // line 10
            echo "    <span class=\"byline\">
        <span class=\"author vcard\">
            <span class=\"screen-reader-text\">Author </span>
            ";
            // line 13
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
            echo "
        </span>
    </span>
    ";
        }
        // line 17
        echo "    
    ";
        // line 18
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($this->getAttribute($_blog_, "category", array()), 0)) {
            // line 19
            echo "    <span class=\"cat-links\">
        <span class=\"screen-reader-text\">Categories </span>
        ";
            // line 21
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "  
           <a href=\"";
                // line 22
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
                echo "\" rel=\"category\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </span>
    ";
        }
        // line 26
        echo "    
    
    ";
        // line 28
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($this->getAttribute($_blog_, "tags", array()), 0)) {
            // line 29
            echo "    <span class=\"tags-links\">
    \t
        <span class=\"screen-reader-text\">Tags </span>
        ";
            // line 32
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo "  
           <a href=\"";
                // line 33
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
                echo "\" rel=\"tag\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </span>
    ";
        }
        // line 37
        echo "</footer><!-- .entry-footer -->";
    }

    public function getTemplateName()
    {
        return "blog/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  119 => 35,  107 => 33,  100 => 32,  95 => 29,  92 => 28,  88 => 26,  84 => 24,  72 => 22,  65 => 21,  61 => 19,  58 => 18,  55 => 17,  47 => 13,  42 => 10,  39 => 9,  36 => 8,  29 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
