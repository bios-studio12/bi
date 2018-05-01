<?php

/* top_bar.html */
class __TwigTemplate_ed232259b057716ca57d7046e77e7bc7 extends Twig_Template
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
        <a class=\"navbar-brand \" href=\"#\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "nama_lengkap"), "html", null, true);
        echo "</a>
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
        return array (  22 => 4,  17 => 1,);
    }
}
