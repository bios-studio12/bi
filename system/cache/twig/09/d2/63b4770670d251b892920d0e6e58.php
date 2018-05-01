<?php

/* navigation.html */
class __TwigTemplate_09d263b4770670d251b892920d0e6e58 extends Twig_Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand \" href=\"#\"></a>
    </div>

    ";
        // line 13
        $this->env->loadTemplate("top_bar.html")->display($context);
        echo " ";
        $this->env->loadTemplate("side_bar.html")->display($context);
        // line 14
        echo "
</nav>";
    }

    public function getTemplateName()
    {
        return "navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  31 => 13,  17 => 1,  239 => 115,  233 => 61,  227 => 116,  225 => 115,  206 => 99,  202 => 98,  196 => 95,  190 => 92,  184 => 89,  180 => 88,  176 => 87,  172 => 86,  168 => 85,  164 => 84,  160 => 83,  156 => 82,  150 => 79,  146 => 78,  142 => 77,  136 => 74,  130 => 71,  124 => 68,  117 => 64,  113 => 62,  111 => 61,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  263 => 215,  258 => 213,  232 => 190,  204 => 165,  122 => 86,  109 => 75,  106 => 74,  32 => 2,  27 => 1,);
    }
}
