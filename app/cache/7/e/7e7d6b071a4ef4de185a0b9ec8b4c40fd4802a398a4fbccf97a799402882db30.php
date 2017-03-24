<?php

/* _includes/header.html */
class __TwigTemplate_7e7d6b071a4ef4de185a0b9ec8b4c40fd4802a398a4fbccf97a799402882db30 extends Twig_Template
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
        echo "<header class=\"light\" style=\"background-image: url('http://pingodata.qiniudn.com/cube-header.jpg');\">
    <div class=\"intro\">
        <h1>";
        // line 3
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title", array()), "html", null, true);
        echo "</h1>
        <p>";
        // line 4
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "description", array()), "html", null, true);
        echo "</p>
        ";
        // line 5
        $context["headUrl"] = "/img/logo_128x128.png";
        // line 6
        echo "    \t";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($this->getAttribute($_site_, "author", array()), "avatar", array())) {
            // line 7
            echo "    \t\t";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            $context["headUrl"] = $this->getAttribute($this->getAttribute($_site_, "author", array()), "avatar", array());
            // line 8
            echo "    \t";
        }
        // line 9
        echo "        <a href=\"";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "\"><img src=\"";
        if (isset($context["headUrl"])) { $_headUrl_ = $context["headUrl"]; } else { $_headUrl_ = null; }
        echo twig_escape_filter($this->env, $_headUrl_, "html", null, true);
        echo "\" alt=\"avatar\"/></a>
     </div></header>
        <div style=\"position: relative;text-align: center;width:80%;margin-left:15%;top:-20px;z-index:999999;\">
        <div style=\"float:left;width:50%;margin-top:0px;text-align: left;\">
          <ul class=\"nav navbar-nav\">
\t <li class=\"dropdown\">
          <a style=\"clear:both\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">操作系统<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/category/1752954334.html\">Linux</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"/category/2004609611.html\">Linux基础</a></li>
            <li><a href=\"#\">Linux安全</a></li>
            <li><a href=\"#\">linux应用</a></li>
            <li><a href=\"/category/2628734136.html\">linux服务</a></li>
            <li><a href=\"#\">Linux系统优化</a></li>
            <li><a href=\"/category/2165081386.html\">无线技术</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"/category/1828756791.html\">Windows</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Windows工具</a></li>
          </ul> 
         </li>
\t\t<li class=\"dropdown\">
          <a style=\"clear:both\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">数据库<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/category/2488021733.html\">MySQL</a></li>
\t    <li class=\"divider\"></li>
            <li><a href=\"/category/1049233538.html\">Oracle</a></li>
          </ul>
         </li>
 \t\t<li class=\"dropdown\">
          <a style=\"clear:both\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">编程<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/category/2286085968.html\">C#</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"/category/192703327.html\">Django</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"/category/88834407.html\">Python</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">C/C++</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"/category/3096058031.html\">Shell</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"/category/379311926.html\">Web前端</a></li>
            </ul>
           </li>
            <li class=\"dropdown\">
          <a style=\"clear:both\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">其它<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/category/948787488.html\">FQA</a></li>
\t    <li class=\"divider\"></li>
            <li><a href=\"/search?keyword=总结\">总结</a></li>
\t    <li class=\"divider\"></li>
\t     <li><a href=\"/category/1628854555.html\">我们的作品</a></li>
          </ul>
           </li>
         </ul>
\t</div>
        <form class=\"search\" action=\"/search\" method=\"get\" style=\"width:45%;float:right;\">
                <fieldset>
                        <div class=\"text\">
                                <input name=\"keyword\" id=\"keyword\" type=\"text\" placeholder=\"请输入关键字 ...\"/>
                                <button class=\"btn\">搜 索</button>
                        </div>
                </fieldset>
        </form>
        </div>
";
    }

    public function getTemplateName()
    {
        return "_includes/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  39 => 7,  35 => 6,  33 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
