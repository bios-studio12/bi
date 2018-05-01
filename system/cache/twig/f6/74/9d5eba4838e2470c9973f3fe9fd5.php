<?php

/* side_bar.html */
class __TwigTemplate_f6749d5eba4838e2470c9973f3fe9fd5 extends Twig_Template
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
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "user_group") == "admin")) {
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
            echo "main/Profil\"><i class=\"fa fa-money fa-fw\"></i> Profil</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Pegawai<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/BangkimDesa\">Data Pegawai</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/BangkimKota\">Data Pegawai Cuti</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Utilitas<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "admin/role\"><i class=\"fa fa-users fa-fw\"></i> Role / User Group Management</a>
                    </li>
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
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "user_group") == "user")) {
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
            echo "main/Profil\"><i class=\"fa fa-money fa-fw\"></i> Profil</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Pegawai<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/BangkimDesa\">Data Pegawai</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/BangkimKota\">Data Pegawai Cuti</a>
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
        return array (  126 => 64,  120 => 61,  105 => 52,  96 => 46,  90 => 43,  87 => 42,  85 => 41,  81 => 39,  75 => 36,  66 => 30,  60 => 27,  48 => 18,  42 => 15,  33 => 9,  24 => 5,  22 => 4,  34 => 13,  26 => 8,  35 => 14,  31 => 13,  17 => 1,  239 => 115,  233 => 61,  227 => 116,  225 => 115,  206 => 99,  202 => 98,  196 => 95,  190 => 92,  184 => 89,  180 => 88,  176 => 87,  172 => 86,  168 => 85,  164 => 84,  160 => 83,  156 => 82,  150 => 79,  146 => 78,  142 => 77,  136 => 74,  130 => 71,  124 => 68,  117 => 64,  113 => 62,  111 => 55,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  263 => 215,  258 => 213,  232 => 190,  204 => 165,  122 => 86,  109 => 75,  106 => 74,  32 => 2,  27 => 6,);
    }
}
