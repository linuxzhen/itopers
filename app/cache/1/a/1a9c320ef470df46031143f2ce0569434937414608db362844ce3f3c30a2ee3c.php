<?php

/* _includes/footer.html */
class __TwigTemplate_1a9c320ef470df46031143f2ce0569434937414608db362844ce3f3c30a2ee3c extends Twig_Template
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
        echo "<footer class=\"site-footer\">
\t<div class=\"wrapper\">
\t<div class=\"footer-col-wrapper\">
\t\t<div class=\"footer-col  footer-col-1\">
\t\t\t<ul class=\"contact-list\">
\t\t\t\t<li><a href=\"";
        // line 6
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "\">";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t<li><a href=\"mailto:";
        // line 7
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "email", array()), "html", null, true);
        echo "\">";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "email", array()), "html", null, true);
        echo "</a></li>
\t\t\t</ul>
\t\t</div>
\t
\t<div class=\"footer-col  footer-col-2\">
\t\t<ul class=\"social-media-list\">
\t\t\t";
        // line 13
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($this->getAttribute($_site_, "author", array()), "github", array())) {
            // line 14
            echo "\t\t\t<li>
\t\t\t\t<a href=\"https://github.com/";
            // line 15
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "github", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<span class=\"icon icon--github\">
\t                <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\">
\t                \t<path fill=\"#828282\" d=\"M7.999,0.431c-4.285,0-7.76,3.474-7.76,7.761 c0,3.428,2.223,6.337,5.307,7.363c0.388,0.071,0.53-0.168,0.53-0.374c0-0.184-0.007-0.672-0.01-1.32 c-2.159,0.469-2.614-1.04-2.614-1.04c-0.353-0.896-0.862-1.135-0.862-1.135c-0.705-0.481,0.053-0.472,0.053-0.472 c0.779,0.055,1.189,0.8,1.189,0.8c0.692,1.186,1.816,0.843,2.258,0.645c0.071-0.502,0.271-0.843,0.493-1.037 C4.86,11.425,3.049,10.76,3.049,7.786c0-0.847,0.302-1.54,0.799-2.082C3.768,5.507,3.501,4.718,3.924,3.65 c0,0,0.652-0.209,2.134,0.796C6.677,4.273,7.34,4.187,8,4.184c0.659,0.003,1.323,0.089,1.943,0.261 c1.482-1.004,2.132-0.796,2.132-0.796c0.423,1.068,0.157,1.857,0.077,2.054c0.497,0.542,0.798,1.235,0.798,2.082 c0,2.981-1.814,3.637-3.543,3.829c0.279,0.24,0.527,0.713,0.527,1.437c0,1.037-0.01,1.874-0.01,2.129 c0,0.208,0.14,0.449,0.534,0.373c3.081-1.028,5.302-3.935,5.302-7.362C15.76,3.906,12.285,0.431,7.999,0.431z\"/>
\t                </svg>
\t                </span>
\t                <span class=\"username\">";
            // line 21
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "name", array()), "html", null, true);
            echo "</span>
                </a>
            </li>
            ";
        }
        // line 25
        echo "
          ";
        // line 26
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($this->getAttribute($_site_, "author", array()), "weibo", array())) {
            // line 27
            echo "          <li>
            <a href=\"http://weibo.com/";
            // line 28
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "weibo", array()), "html", null, true);
            echo "\">
              <span class=\"icon icon--twitter\">
\t              <svg width=\"16\" height=\"16\" viewBox=\"0 0 32 32\">
\t              <path fill=\"#828282\" d=\"M12.054 22.929q0.375-0.607 0.196-1.232t-0.804-0.893q-0.607-0.25-1.304-0.018t-1.071 0.821q-0.393 0.607-0.232 1.223t0.768 0.902 1.33 0.045 1.116-0.848zM13.732 20.768q0.143-0.232 0.063-0.473t-0.313-0.33q-0.25-0.089-0.509 0.009t-0.384 0.33q-0.304 0.554 0.232 0.804 0.25 0.089 0.518-0.009t0.393-0.33zM16.839 22.679q-0.804 1.821-2.821 2.679t-4 0.214q-1.911-0.607-2.634-2.259t0.116-3.348q0.839-1.661 2.705-2.482t3.759-0.339q1.982 0.518 2.83 2.134t0.045 3.402zM22.411 19.821q-0.161-1.714-1.589-3.036t-3.723-1.946-4.902-0.375q-3.982 0.411-6.598 2.527t-2.366 4.723q0.161 1.714 1.589 3.036t3.723 1.946 4.902 0.375q3.982-0.411 6.598-2.527t2.366-4.723zM27.911 19.893q0 1.214-0.661 2.491t-1.946 2.446-3.009 2.098-4.036 1.482-4.83 0.554-4.911-0.598-4.295-1.661-3.063-2.696-1.161-3.563q0-2.054 1.241-4.375t3.527-4.607q3.018-3.018 6.098-4.214t4.402 0.125q1.161 1.143 0.357 3.732-0.071 0.25-0.018 0.357t0.179 0.125 0.259-0.009 0.241-0.063l0.107-0.036q2.482-1.054 4.393-1.054t2.732 1.089q0.804 1.125 0 3.179-0.036 0.232-0.080 0.357t0.080 0.223 0.214 0.134 0.304 0.107q1.018 0.321 1.839 0.839t1.429 1.455 0.607 2.080zM26.589 8.75q0.75 0.839 0.973 1.938t-0.116 2.098q-0.143 0.411-0.527 0.607t-0.795 0.071q-0.411-0.143-0.607-0.527t-0.071-0.795q0.357-1.125-0.429-1.982t-1.911-0.625q-0.429 0.089-0.804-0.143t-0.446-0.661q-0.089-0.429 0.143-0.795t0.661-0.455q1.071-0.232 2.125 0.098t1.804 1.17zM29.821 5.839q1.554 1.714 2.009 3.973t-0.241 4.313q-0.161 0.482-0.607 0.714t-0.929 0.071-0.714-0.607-0.089-0.929q0.5-1.464 0.179-3.071t-1.429-2.821q-1.107-1.232-2.643-1.705t-3.089-0.152q-0.5 0.107-0.929-0.17t-0.536-0.777 0.17-0.92 0.777-0.527q2.196-0.464 4.357 0.205t3.714 2.402z\"></path>
\t              </svg>
              </span>
              <span class=\"username\">";
            // line 34
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "author", array()), "weibo", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 38
        echo "        </ul>
      </div>
      <div class=\"footer-col  footer-col-3\">
        <p class=\"text\">";
        // line 41
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_site_, "text", array()), "intro", array()), "html", null, true);
        echo "</p>
      </div>
    </div>
    <h2 class=\"footer-heading\"><a href=\"hhttp://www.gitblog.cn\">proudly powered by Gitblog</a></h2>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "_includes/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 38,  90 => 34,  80 => 28,  77 => 27,  74 => 26,  71 => 25,  63 => 21,  53 => 15,  50 => 14,  47 => 13,  34 => 7,  26 => 6,  19 => 1,);
    }
}
