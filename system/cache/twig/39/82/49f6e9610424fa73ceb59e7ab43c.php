<?php

/* navigation.html */
class __TwigTemplate_398249f6e9610424fa73ceb59e7ab43c extends Twig_Template
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
<h1 class=\"page-header\" style=\"text-align: center;\">Sistem Informasi Irigasi Cipancuh Kabupaten Indramayu</h1>
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
        return array (  35 => 14,  31 => 13,  17 => 1,  286 => 138,  280 => 75,  274 => 139,  272 => 138,  253 => 122,  248 => 120,  244 => 119,  238 => 116,  233 => 114,  228 => 112,  222 => 109,  216 => 106,  210 => 103,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  190 => 98,  186 => 97,  182 => 96,  176 => 93,  172 => 92,  168 => 91,  162 => 88,  156 => 85,  150 => 82,  143 => 78,  139 => 76,  137 => 75,  113 => 54,  109 => 53,  105 => 52,  98 => 48,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  30 => 2,  26 => 1,);
    }
}
