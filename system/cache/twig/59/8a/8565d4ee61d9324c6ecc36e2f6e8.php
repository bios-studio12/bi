<?php

/* top_bar.html */
class __TwigTemplate_598a8565d4ee61d9324c6ecc36e2f6e8 extends Twig_Template
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
        echo "<header id=\"header-navbar\" class=\"content-mini content-mini-full\">
                <!-- Header Navigation Right -->
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Sys/\" class=\"btn btn-default btn-image dropdown-toggle\" >
                                 Dashboard
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                              Produk Buku
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/formData\">
                                        <!--<i class=\"si si-envelope-open pull-right\"></i>-->
                                       Form Data
                                    </a>
                                </li>
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/showData\">
<!--                                        <i class=\"si si-user pull-right\"></i>-->
                                       List Data
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                              Penulis
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penulis/formData\">
                                        <!--<i class=\"si si-envelope-open pull-right\"></i>-->
                                       Form Data
                                    </a>
                                </li>
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penulis/showData\">
<!--                                        <i class=\"si si-user pull-right\"></i>-->
                                       List Data
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                              Penerbit
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penerbit/formData\">
                                        <!--<i class=\"si si-envelope-open pull-right\"></i>-->
                                       Form Data
                                    </a>
                                </li>
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penerbit/showData\">
<!--                                        <i class=\"si si-user pull-right\"></i>-->
                                       List Data
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                              Kategori
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Kategori/formData\">
                                       
                                       Form Data
                                    </a>
                                </li>
                                <li>
                                    <a tabindex=\"-1\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Kategori/showData\">
                                       
                                       List Data
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul> 
                
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                              Customer
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"<?php echo base_url();?>admin/Customer\">
                                        Customer List       
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                              Sales
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"<?php echo base_url();?>admin/Sale\">
                                       All Sales
                                    </a>
                                </li>
                                <li>
                                    <a tabindex=\"-1\" href=\"<?php echo base_url();?>admin/Sale/shipped\">
                                    Shipped Sales
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                  <!-- <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                             Slider
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"<?php echo base_url();?>account/list-slider\">
                                        All Slider
                                    </a>
                                </li>
                                <li>
                                    <a tabindex=\"-1\" href=\"<?php echo base_url();?>account/add-slider\">
                                          Add Slider
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul> -->
                
                <ul class=\"nav-header pull-left\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                             Admin Register
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a tabindex=\"-1\" href=\"<?php echo base_url();?>admin/Newadmin\">
                                       Admin List
                                    </a>
                                </li>
                                <li>
                                    <a tabindex=\"-1\" href=\"<?php echo base_url();?>admin/Newadmin/admin_add\">
                                          Admin Add
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
             
                <ul class=\"nav-header pull-right\">
                    <li>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-default btn-image dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
                              <img alt=\"Avatar\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/img/avatars/avatar10.jpg\">
                                    Hi, Panca Wiguna
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                       <a href=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">
                                        <i class=\"si si-logout pull-right\"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </header>";
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
        return array (  246 => 198,  237 => 192,  129 => 90,  109 => 73,  100 => 67,  24 => 6,  17 => 1,  191 => 73,  186 => 34,  179 => 74,  177 => 73,  172 => 71,  166 => 68,  162 => 67,  158 => 66,  152 => 63,  148 => 62,  144 => 61,  138 => 96,  132 => 55,  126 => 52,  122 => 51,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  102 => 46,  98 => 45,  94 => 44,  89 => 41,  87 => 40,  80 => 50,  78 => 34,  73 => 31,  71 => 44,  62 => 24,  56 => 21,  50 => 26,  45 => 16,  41 => 20,  37 => 14,  30 => 10,  19 => 1,  33 => 4,  29 => 2,  26 => 1,);
    }
}
