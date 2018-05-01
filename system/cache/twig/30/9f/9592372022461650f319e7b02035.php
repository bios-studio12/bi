<?php

/* navigation.html */
class __TwigTemplate_309f9592372022461650f319e7b02035 extends Twig_Template
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
        return array (  31 => 13,  17 => 1,  242 => 115,  236 => 61,  230 => 116,  228 => 115,  209 => 99,  205 => 98,  199 => 95,  193 => 92,  187 => 89,  183 => 88,  179 => 87,  175 => 86,  171 => 85,  167 => 84,  163 => 83,  159 => 82,  153 => 79,  149 => 78,  145 => 77,  139 => 74,  133 => 71,  127 => 68,  120 => 64,  116 => 62,  114 => 61,  95 => 45,  89 => 42,  83 => 39,  77 => 36,  71 => 33,  65 => 30,  59 => 27,  53 => 24,  47 => 21,  41 => 18,  35 => 14,  19 => 1,);
    }
}
