<?php

/* side_bar.html */
class __TwigTemplate_2702c11302e945e64f0eab816ce06b00 extends Twig_Template
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
            ";
        // line 4
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "kategori") == "admin")) {
            // line 5
            echo "            <li>
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/\"><i class=\"fa fa-dashboard fa-fw\"></i> Home</a>
            </li>
\t\t\t<li>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/main/profil\"><i class=\"fa fa-folder\"></i> Profil</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-book\"></i> Pegawai<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Pegawai\">Data Pegawai</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Cuti\">Data Pengajuan Cuti</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Utilitas<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <!-- <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/role\"><i class=\"fa fa-users fa-fw\"></i> Role / User Group Management</a>
                    </li> -->
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/user\"><i class=\"fa fa-user fa-fw\"></i> User Management</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> logout</a>
            </li>
            ";
        }
        // line 39
        echo "

            ";
        // line 41
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "kategori") == "user")) {
            // line 42
            echo "            <li>
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/\"><i class=\"fa fa-dashboard fa-fw\"></i> Home</a>
            </li>
            <li>
                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Profil\"><i class=\"fa fa-folder\"></i> Profil</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-book\"></i> Pegawai<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Pegawai\">Data Pegawai</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Cuti\">Data Pegawai Cuti</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> logout</a>
            </li>
            ";
        }
        // line 64
        echo "        </ul>
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
        return array (  126 => 64,  120 => 61,  111 => 55,  105 => 52,  96 => 46,  90 => 43,  87 => 42,  85 => 41,  81 => 39,  75 => 36,  66 => 30,  60 => 27,  48 => 18,  42 => 15,  33 => 9,  27 => 6,  24 => 5,  22 => 4,  17 => 1,);
    }
}
