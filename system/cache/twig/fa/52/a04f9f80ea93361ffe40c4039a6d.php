<?php

/* top_bar.html */
class __TwigTemplate_fa52a04f9f80ea93361ffe40c4039a6d extends Twig_Template
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
<ul class=\"nav navbar-top-links navbar-right\">
    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "username"), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
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
        return array (  29 => 8,  23 => 5,  38 => 14,  34 => 13,  28 => 10,  17 => 1,  359 => 217,  353 => 119,  347 => 218,  345 => 217,  312 => 187,  282 => 160,  278 => 159,  272 => 156,  266 => 153,  260 => 150,  254 => 147,  250 => 146,  246 => 145,  242 => 144,  238 => 143,  234 => 142,  230 => 141,  226 => 140,  220 => 137,  216 => 136,  212 => 135,  206 => 132,  200 => 129,  194 => 126,  187 => 122,  183 => 120,  181 => 119,  113 => 54,  109 => 53,  102 => 49,  96 => 46,  90 => 43,  84 => 40,  78 => 37,  72 => 34,  66 => 31,  60 => 28,  54 => 25,  48 => 22,  42 => 19,  36 => 16,  19 => 1,);
    }
}
