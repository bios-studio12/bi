<?php

/* top_bar.html */
class __TwigTemplate_bd4158a60cc90e2e30a9a189b3888989 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"index.html\">Admin - KPID Provinsi Jawa Barat</a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      ";
        // line 7
        $this->env->loadTemplate("side_bar.html")->display($context);
        // line 8
        echo "
      <ul class=\"navbar-nav sidenav-toggler\">
        <li class=\"nav-item\">
          <a class=\"nav-link text-center\" id=\"sidenavToggler\">
            <i class=\"fa fa-fw fa-angle-left\"></i>
          </a>
        </li>
      </ul>
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#exampleModal\">
            <i class=\"fa fa-fw fa-sign-out\"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>";
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
        return array (  27 => 8,  25 => 7,  17 => 1,);
    }
}
