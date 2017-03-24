<?php

/* index.html */
class __TwigTemplate_dfd5620c34942346459dcbc112d08fc4ac830dc7029698336107db90cd7557a0 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Adornment  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20090802

-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<title>Adornment   by Free CSS Templates</title>
<link href=\"/theme/html/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
</head>
<body>
<div id=\"wrapper\">
\t<div id=\"header\">
\t\t<div id=\"logo\">
\t\t\t<h1><a href=\"#\">Adornment   </a></h1>
\t\t\t<p> design by <a href=\"http://www.freecsstemplates.org/\">Free CSS Templates</a></p>
\t\t</div>
\t\t<div id=\"search\">
\t\t\t<form method=\"get\" action=\"\">
\t\t\t\t<fieldset>
\t\t\t\t<input type=\"text\" name=\"s\" id=\"search-text\" size=\"15\" />
\t\t\t\t<input type=\"submit\" id=\"search-submit\" value=\"GO\" />
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>
\t<!-- end #header -->
\t<div id=\"menu\">
\t\t<ul>
\t\t\t<li class=\"current_page_item\"><a href=\"#\">Home</a></li>
\t\t\t<li><a href=\"#\">Blog</a></li>
\t\t\t<li><a href=\"#\">Photos</a></li>
\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t<li><a href=\"#\">Links</a></li>
\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t</ul>
\t</div>
\t<!-- end #menu -->
\t<div id=\"page\">
\t<div id=\"page-bgtop\">
\t<div id=\"page-bgbtm\">
\t\t<div id=\"content\">
\t\t         ";
        // line 53
        if (isset($context["blogList"])) { $_blogList_ = $context["blogList"]; } else { $_blogList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blogList_);
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 54
            echo "\t\t          ";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            if ($this->getAttribute($_blog_, "title", array())) {
                // line 55
                echo "\t\t\t<div class=\"post\">
\t\t\t\t<h2 class=\"title\"><a href=\"";
                // line 56
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
                echo "\">";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
                echo "   </a></h2>
\t\t\t\t<p class=\"meta\">Posted by <a href=\"#\">";
                // line 57
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
                echo "</a> on ";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "date", array()), "html", null, true);
                echo "
\t\t\t\t\t&nbsp;&bull;&nbsp; <a href=\"#\" class=\"comments\">Comments (64)</a> &nbsp;&bull;&nbsp; <a href=\"#\" class=\"permalink\">Full article</a></p>
\t\t\t\t<div class=\"entry\">
\t\t\t\t";
                // line 60
                if (isset($context["pageName"])) { $_pageName_ = $context["pageName"]; } else { $_pageName_ = null; }
                if (($_pageName_ == "blog")) {
                    // line 61
                    echo "\t\t\t\t        ";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo $this->getAttribute($_blog_, "content", array());
                    echo "
\t\t\t\t                ";
                } else {
                    // line 63
                    echo "\t\t\t\t                        ";
                    if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                    echo $this->getAttribute($_blog_, "summary", array());
                    echo "
\t\t\t\t                                ";
                }
                // line 65
                echo "\t\t\t\t\t<p><a href=\"";
                if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "siteURL", array()), "html", null, true);
                echo "\" class=\"links\">Read More</a> </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 69
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t<div class=\"post\">
\t\t\t\t<h2 class=\"title\"><a href=\"#\">Lorem ipsum sed aliquam</a></h2>
\t\t\t\t<p class=\"meta\">Posted by <a href=\"#\">Someone</a> on March 8, 2008
\t\t\t\t\t&nbsp;&bull;&nbsp; <a href=\"#\" class=\"comments\">Comments (64)</a> &nbsp;&bull;&nbsp; <a href=\"#\" class=\"permalink\">Full article</a></p>
\t\t\t\t<div class=\"entry\">
\t\t\t\t\t<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href=\"#\">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>
\t\t\t\t\t<p>Praesent ac lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus augue. Fusce eget tellus ultrices ligula volutpat adipiscing. Aenean ligula lectus, vehicula in, dictum a, fermentum nec, felis. Nunc ac turpis in leo posuere imperdiet.</p>
\t\t\t\t\t<p><a href=\"#\" class=\"links\">Read More</a> </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"post\">
\t\t\t\t<h2 class=\"title\"><a href=\"#\">Phasellus pellentesque turpis </a></h2>
\t\t\t\t<p class=\"meta\">Posted by <a href=\"#\">Someone</a> on March 8, 2008
\t\t\t\t\t&nbsp;&bull;&nbsp; <a href=\"#\" class=\"comments\">Comments (64)</a> &nbsp;&bull;&nbsp; <a href=\"#\" class=\"permalink\">Full article</a></p>
\t\t\t\t<div class=\"entry\">
\t\t\t\t\t<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim molestie  rhoncus lobortis a, est.</p>
\t\t\t\t\t<p><a href=\"#\" class=\"links\">Read More</a> </p>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t<div style=\"clear: both;\">&nbsp;</div>
\t\t";
        // line 90
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        if (($_pages_ > 1)) {
            // line 91
            echo "\t\t<div class=\"center\">
\t\t        <ul class=\"pagination\">
\t\t                ";
            // line 93
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "prev", array())) {
                // line 94
                echo "\t\t                        <li><a class=\"prev page-numbers\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "prev", array()), "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-left\"></i></a></li>
\t\t                                ";
            }
            // line 96
            echo "
        ";
            // line 97
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_pagination_, "showList", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 98
                echo "                        ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if ($this->getAttribute($_page_, "isCurrent", array())) {
                    // line 99
                    echo "                                        <li><span class=\"page-numbers current\">";
                    if (isset($context["pageNo"])) { $_pageNo_ = $context["pageNo"]; } else { $_pageNo_ = null; }
                    echo twig_escape_filter($this->env, $_pageNo_, "html", null, true);
                    echo "</span></li>
                                                        ";
                } else {
                    // line 101
                    echo "                                                                        <li><a class=\"page-numbers\" href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_page_, "url", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_page_, "num", array()), "html", null, true);
                    echo "</a></li>
                                                                                ";
                }
                // line 103
                echo "                                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                                                                                            
        ";
            // line 105
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "next", array())) {
                // line 106
                echo "                <li><a class=\"next page-numbers\" href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pagination_, "next", array()), "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a></li>
                        ";
            }
            // line 108
            echo "                                </ul>
                                </div>
                                ";
        }
        // line 111
        echo "\t\t</div>
\t\t<!-- end #content -->
\t\t<div id=\"sidebar\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<h2>Aliquam tempus</h2>
\t\t\t\t\t<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<h2>Categories</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Aliquam libero</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Consectetuer adipiscing elit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Metus aliquam pellentesque</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Suspendisse iaculis mauris</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Urnanet non molestie semper</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Proin gravida orci porttitor</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<h2>Blogroll</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Aliquam libero</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Consectetuer adipiscing elit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Metus aliquam pellentesque</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Suspendisse iaculis mauris</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Urnanet non molestie semper</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Proin gravida orci porttitor</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<h2>Archives</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Aliquam libero</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Consectetuer adipiscing elit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Metus aliquam pellentesque</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Suspendisse iaculis mauris</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Urnanet non molestie semper</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Proin gravida orci porttitor</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<!-- end #sidebar -->
\t\t<div style=\"clear: both;\">&nbsp;</div>
\t</div>
\t</div>
\t</div>
\t<!-- end #page -->
</div>
\t<div id=\"footer\">
\t\t<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href=\"http://www.freecsstemplates.org/\">Free CSS Templates</a>.</p>
\t</div>
\t<!-- end #footer -->
</body>
</html>
<span style=\"display:none;\"><a href=\"http://www.mobanwang.com\" title=\"ÍøÒ³Ä£°åÏÂÔØ\">ÍøÒ³Ä£°å</a></span>
";
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
        return array (  227 => 111,  222 => 108,  215 => 106,  212 => 105,  209 => 104,  203 => 103,  193 => 101,  186 => 99,  182 => 98,  177 => 97,  174 => 96,  167 => 94,  164 => 93,  160 => 91,  157 => 90,  135 => 70,  129 => 69,  120 => 65,  113 => 63,  106 => 61,  103 => 60,  93 => 57,  85 => 56,  82 => 55,  78 => 54,  73 => 53,  19 => 1,);
    }
}
