<?php

/* blog/footer.html */
class __TwigTemplate_2479276e0bea095b0e9370ddd7e684efb32a18631cb3d5a2ab59d70950acc2f1 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($_blog_, "category", array()), 0)) {
            // line 3
            echo "\t<ul class=\"post-categories\">
        ";
            // line 4
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "  
          <li><a href=\"";
                // line 5
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "url", array()), "html", null, true);
                echo "\" rel=\"category\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\t</ul>
\t";
        }
        // line 9
        echo "\t
\t";
        // line 10
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        if ($this->getAttribute($this->getAttribute($_blog_, "tags", array()), 0)) {
            // line 11
            echo "\t<ul class=\"post-tags\">
        ";
            // line 12
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blog_, "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 13
                echo "           <li><a href=\"";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "url", array()), "html", null, true);
                echo "\" rel=\"tag\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t</ul>
\t";
        }
        // line 17
        echo "\t
\t";
        // line 18
        if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
        if (($_pageName_ != "blog")) {
            // line 19
            echo "\t<div class=\"read-more\">
\t\t<a href=\"";
            // line 20
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
            echo "\">阅读全文<i class=\"fa fa-angle-double-right \"></i></a>
\t</div>
\t";
        }
        // line 23
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
        return array (  98 => 23,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  78 => 15,  65 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  47 => 7,  35 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
