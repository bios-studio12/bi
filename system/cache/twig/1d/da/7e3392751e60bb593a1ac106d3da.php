<?php

/* side_bar.html */
class __TwigTemplate_1dda7e3392751e60bb593a1ac106d3da extends Twig_Template
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
        echo "<div class=\"navbar-default sidebar\" role=\"navigation\">
    <div class=\"sidebar-nav navbar-collapse\">
        <ul class=\"nav\" id=\"side-menu\">
           
            <li>
                <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-book  fa-fw\"></i> Data PPA<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/formppa\"> Form Data</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/listppa\"> List Data</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-book  fa-fw\"></i> Indeks Kinerja<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Kinerja/formKinerja\"> Form Data</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Kinerja/listKinerja\"> List Data</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Utilitas<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <!-- <li>
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/role\"><i class=\"fa fa-users fa-fw\"></i> Role / User Group Management</a>
                    </li> -->
                    <li>
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/user\">User Management</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> logout</a>
            </li>
           
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->";
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
        return array (  84 => 45,  75 => 39,  69 => 36,  57 => 27,  51 => 24,  39 => 15,  33 => 12,  24 => 6,  17 => 1,);
    }
}
