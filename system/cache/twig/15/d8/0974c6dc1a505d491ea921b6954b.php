<?php

/* navigation.html */
class __TwigTemplate_15d80974c6dc1a505d491ea921b6954b extends Twig_Template
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
        <a class=\"navbar-brand saptaColor\" href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "namaApotik"), "html", null, true);
        echo "</a>
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
        return array (  38 => 14,  34 => 13,  28 => 10,  17 => 1,  359 => 217,  353 => 119,  347 => 218,  345 => 217,  312 => 187,  282 => 160,  278 => 159,  272 => 156,  266 => 153,  260 => 150,  254 => 147,  250 => 146,  246 => 145,  242 => 144,  238 => 143,  234 => 142,  230 => 141,  226 => 140,  220 => 137,  216 => 136,  212 => 135,  206 => 132,  200 => 129,  194 => 126,  187 => 122,  183 => 120,  181 => 119,  113 => 54,  109 => 53,  102 => 49,  96 => 46,  90 => 43,  84 => 40,  78 => 37,  72 => 34,  66 => 31,  60 => 28,  54 => 25,  48 => 22,  42 => 19,  36 => 16,  19 => 1,);
    }
}
