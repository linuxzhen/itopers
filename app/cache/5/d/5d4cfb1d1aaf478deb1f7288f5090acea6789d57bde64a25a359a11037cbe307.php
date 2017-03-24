<?php

/* _includes/posts.html */
class __TwigTemplate_5d4cfb1d1aaf478deb1f7288f5090acea6789d57bde64a25a359a11037cbe307 extends Twig_Template
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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 2
            echo "<article>
        ";
            // line 3
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ( !$this->getAttribute($_loop_, "first", array())) {
                // line 4
                echo "\t";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                if ($this->getAttribute($_blog_, "images", array())) {
                    // line 5
                    echo "\t<div class=\"look\" style=\"background-image: url('";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_blog_, "images", array()), 0, array()), "html", null, true);
                    echo "');\">
    \t<a href=\"";
                    // line 6
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                    echo "\"><!-- ";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                    echo " --></a>
    </div>
      ";
                } else {
                    // line 9
                    echo "\t<div class=\"look\" style=\"background-image: url('/blog/img/random/tb";
                    echo twig_escape_filter($this->env, twig_random($this->env, 21), "html", null, true);
                    echo ".jpg');\">
    \t<a href=\"";
                    // line 10
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                    echo "\"><!-- ";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                    echo " --></a>
    </div>
    ";
                }
                // line 13
                echo "     ";
            }
            // line 14
            echo "    <div class=\"read\">
        <div class=\"excerpt\">
            <h2><a href=\"";
            // line 16
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
            echo "\" title=\"";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "\">";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "</a></h2>
            <p></p>
            <p>";
            // line 18
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo $this->getAttribute($_blog_, "summary", array());
            echo "</p>
            <p></p>
        </div>

        <div class=\"meta\">
            <span>";
            // line 23
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "date", array()), "Y-m-d"), "html", null, true);
            echo "</span>
            <div class=\"share\">
                <a class=\"facebook fa fa-paper-plane\" href=\"";
            // line 25
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
            echo "#duoshuo\" title=\"add comment\"></a>
            </div>
        </div>
    </div>
</article>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
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
        return array (  118 => 25,  112 => 23,  103 => 18,  91 => 16,  87 => 14,  84 => 13,  71 => 10,  66 => 9,  53 => 6,  47 => 5,  43 => 4,  40 => 3,  37 => 2,  19 => 1,);
    }
}
