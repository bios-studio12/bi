<?php

/* side_bar.html */
class __TwigTemplate_8e1f7b12f5ba5dd4a6090590910adb33 extends Twig_Template
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
        return array (  84 => 45,  75 => 39,  69 => 36,  57 => 27,  51 => 24,  39 => 15,  33 => 12,  24 => 6,  35 => 14,  31 => 13,  17 => 1,  286 => 138,  280 => 75,  274 => 139,  272 => 138,  253 => 122,  248 => 120,  244 => 119,  238 => 116,  233 => 114,  228 => 112,  222 => 109,  216 => 106,  210 => 103,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  190 => 98,  186 => 97,  182 => 96,  176 => 93,  172 => 92,  168 => 91,  162 => 88,  156 => 85,  150 => 82,  143 => 78,  139 => 76,  137 => 75,  113 => 54,  109 => 53,  105 => 52,  98 => 48,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  30 => 2,  26 => 1,);
    }
}
