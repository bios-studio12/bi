<?php

/* top_bar.html */
class __TwigTemplate_81e066a69bce3fb07a1fb61c0b24004f extends Twig_Template
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
        echo "<!-- /.navbar-header -->
<!-- <ul class=\"nav navbar-top-links navbar-right\">
    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "nama_lengkap"), "html", null, true);
        echo "</a>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
            </li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
            </li>
        </ul> -->
        <!-- /.dropdown-user -->
    <!-- </li> -->
    <!-- /.dropdown -->
<!-- </ul> -->
<!-- /.navbar-top-links -->";
    }

    public function getTemplateName()
    {
        return "top_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 14,  34 => 13,  28 => 10,  17 => 1,  242 => 115,  236 => 61,  230 => 116,  228 => 115,  209 => 99,  205 => 98,  199 => 95,  193 => 92,  187 => 89,  183 => 88,  179 => 87,  175 => 86,  171 => 85,  167 => 84,  163 => 83,  159 => 82,  153 => 79,  149 => 78,  145 => 77,  139 => 74,  133 => 71,  127 => 68,  120 => 64,  116 => 62,  114 => 61,  95 => 45,  89 => 42,  83 => 39,  77 => 36,  71 => 33,  65 => 30,  59 => 27,  53 => 24,  47 => 21,  41 => 18,  35 => 15,  19 => 1,  31 => 3,  29 => 2,  26 => 8,);
    }
}
