<?php

/* side_bar.html */
class __TwigTemplate_4f00e003e1017185ba11b5a73efd3498 extends Twig_Template
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
        echo "<ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"index.html\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Dashboard</span>
          </a>
        </li>
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Components\">
          <a class=\"nav-link nav-link-collapse collapsed\" data-toggle=\"collapse\" href=\"#collapseComponents\" data-parent=\"#exampleAccordion\">
            <i class=\"fa fa-fw fa-wrench\"></i>
            <span class=\"nav-link-text\">Berita</span>
          </a>
          <ul class=\"sidenav-second-level collapse\" id=\"collapseComponents\">
            <li>
              <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Berita/formData\">Form</a>
            </li>
            <li>
              <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Berita/listData\">List</a>
            </li>
          </ul>
        </li>
      </ul>";
    }

    public function getTemplateName()
    {
        return "side_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 18,  33 => 15,  27 => 8,  25 => 7,  17 => 1,  159 => 79,  153 => 33,  146 => 80,  144 => 79,  139 => 77,  135 => 76,  130 => 74,  125 => 72,  121 => 71,  117 => 70,  112 => 68,  107 => 66,  103 => 65,  70 => 34,  68 => 33,  57 => 24,  55 => 23,  47 => 18,  42 => 16,  37 => 14,  32 => 12,  19 => 1,  29 => 2,  26 => 1,);
    }
}
