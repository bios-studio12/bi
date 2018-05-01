<?php

/* top_bar.html */
class __TwigTemplate_653b01177eb92729558537fc5a654c0d extends Twig_Template
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
        return array (  34 => 13,  26 => 8,  35 => 14,  31 => 13,  17 => 1,  239 => 115,  233 => 61,  227 => 116,  225 => 115,  206 => 99,  202 => 98,  196 => 95,  190 => 92,  184 => 89,  180 => 88,  176 => 87,  172 => 86,  168 => 85,  164 => 84,  160 => 83,  156 => 82,  150 => 79,  146 => 78,  142 => 77,  136 => 74,  130 => 71,  124 => 68,  117 => 64,  113 => 62,  111 => 61,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  263 => 215,  258 => 213,  232 => 190,  204 => 165,  122 => 86,  109 => 75,  106 => 74,  32 => 2,  27 => 1,);
    }
}
