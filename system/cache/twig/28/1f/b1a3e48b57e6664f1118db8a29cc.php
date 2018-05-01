<?php

/* navigation.html */
class __TwigTemplate_281fb1a3e48b57e6664f1118db8a29cc extends Twig_Template
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
        return array (  35 => 14,  17 => 1,  264 => 128,  258 => 67,  250 => 128,  231 => 112,  227 => 111,  221 => 108,  216 => 106,  211 => 104,  205 => 101,  199 => 98,  193 => 95,  189 => 94,  185 => 93,  181 => 92,  177 => 91,  173 => 90,  169 => 89,  165 => 88,  159 => 85,  155 => 84,  151 => 83,  145 => 80,  139 => 77,  133 => 74,  126 => 70,  122 => 68,  98 => 48,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  276 => 195,  273 => 194,  252 => 129,  244 => 171,  232 => 162,  224 => 157,  196 => 132,  188 => 127,  176 => 118,  168 => 113,  140 => 88,  132 => 83,  120 => 67,  112 => 69,  84 => 44,  76 => 39,  64 => 30,  56 => 27,  31 => 13,  27 => 1,);
    }
}
