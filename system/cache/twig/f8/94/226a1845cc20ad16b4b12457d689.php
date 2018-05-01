<?php

/* navigation.html */
class __TwigTemplate_f894226a1845cc20ad16b4b12457d689 extends Twig_Template
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
        return array (  35 => 14,  31 => 13,  17 => 1,);
    }
}
