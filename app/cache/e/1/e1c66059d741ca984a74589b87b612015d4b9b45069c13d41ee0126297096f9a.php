<?php

/* block/script.html */
class __TwigTemplate_e1c66059d741ca984a74589b87b612015d4b9b45069c13d41ee0126297096f9a extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"/theme/default/js/skip-link-focus-fix.js?ver=";
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
/* <![CDATA[ */
var screenReaderText = {\"expand\":\"<span class=\\\"screen-reader-text\\\">\\u5c55\\u5f00\\u5b50\\u83dc\\u5355<\\/span>\",\"collapse\":\"<span class=\\\"screen-reader-text\\\">\\u6298\\u53e0\\u5b50\\u83dc\\u5355<\\/span>\"};
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"/theme/default/js/functions.js?ver=";
        // line 7
        if (isset($context["confObj"])) { $_confObj_ = $context["confObj"]; } else { $_confObj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_confObj_, "version", array()), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "block/script.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  19 => 1,);
    }
}
