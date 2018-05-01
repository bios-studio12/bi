<?php

/* side_bar.html */
class __TwigTemplate_6221ce41db8c04b96e1e0ca6cf6e0338 extends Twig_Template
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
        ";
        // line 3
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin")) {
            // line 4
            echo "        <ul class=\"nav\" id=\"side-menu\">
            <li>
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Order<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/createOrder\">Buat Order</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/listOrder\">List Order</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/listSP\">List SP</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/prosesSP\">Proses SP</a>
                    </li>                                         
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/terimaBarang\">Terima Barang</a>
                    </li>                                       
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/terimaRetur\">Terima Retur</a>
                    </li>  
                    <!-- 
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/retailDetail\">Retail Detail</a>
                    </li> -->
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Sales<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/retailTotal\">Laporan Faktur</a>
                    </li>                    
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/laporanPiutang\">Laporan Piutang</a>
                    </li>              
                    <li>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/laporanMutasi\">Laporan Mutasi & Produk</a>
                    </li>            
                    <li>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/laporanKartuGudang\">Laporan Kartu Gudang</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-money fa-fw\"></i> Pelunasan<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/createDIH\">Buat DIH</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/listDIH\">List DIH</a>
                    </li> 
                    <li>
                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/createPelunasan\">Buat Pelunasan</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/laporanPelunasan\">Laporan Pelunasan</a>
                    </li> 
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/retail/\"><i class=\"fa arrow\"></i> Retail</a>
            </li>
            <li>
                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> logout</a>
            </li>
        </ul>
        ";
        }
        // line 79
        echo "
        ";
        // line 80
        if (((($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "RBM") || ($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "BM")) || ($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "KSA"))) {
            // line 81
            echo "        <ul class=\"nav\" id=\"side-menu\">
            <li>
                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Order<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">                                                         
                    <li>
                        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/listApproveOrder\">Approval Order</a>
                    </li>  
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> logout</a>
            </li>
        </ul>
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Apotik")) {
            // line 101
            echo "        <ul class=\"nav\" id=\"side-menu\">
            <li>
                <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Order<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/createOrder\">Buat Order</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/listOrder\">List Order</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/listSP\">List SP</a>
                    </li>                                            
                    <li>
                        <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/terimaBarang\">Terima Barang</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Kirim<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/kirimFaktur\">Kirim Faktur</a>
                    </li>                    
                    <li>
                        <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/terimaFaktur\">Terima Faktur</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Sales<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/retailTotal\">Laporan Faktur</a>
                    </li>                    
                    <li>
                        <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/laporanPiutang\">Laporan Piutang</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/laporanMutasi\">Laporan Mutasi & Produk</a>
                    </li> 
                    <li>
                        <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/laporanKartuGudang\">Laporan Kartu Gudang</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-money fa-fw\"></i> Pelunasan<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/createDIH\">Buat DIH</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/listDIH\">List DIH</a>
                    </li> 
                    <li>
                        <a href=\"";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/createPelunasan\">Buat Pelunasan</a>
                    </li>                                       
                    <li>
                        <a href=\"";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/lunas/laporanPelunasan\">Laporan Pelunasan</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> logout</a>
            </li>
        </ul>
        ";
        }
        // line 176
        echo "
        ";
        // line 177
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Cabang")) {
            // line 178
            echo "        <ul class=\"nav\" id=\"side-menu\">
            <li>
                <a href=\"";
            // line 180
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Order<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 186
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/prosesSP\">Proses SP</a>
                    </li>                                           
                    <li>
                        <a href=\"";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/terimaRetur\">Terima Retur</a>
                    </li>  
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/auth/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> logout</a>
            </li>
        </ul>
        ";
        }
        // line 199
        echo "    </div>
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
        return array (  358 => 199,  351 => 195,  342 => 189,  336 => 186,  327 => 180,  323 => 178,  321 => 177,  318 => 176,  311 => 172,  302 => 166,  296 => 163,  290 => 160,  284 => 157,  272 => 148,  266 => 145,  260 => 142,  254 => 139,  242 => 130,  236 => 127,  224 => 118,  218 => 115,  212 => 112,  206 => 109,  197 => 103,  193 => 101,  191 => 100,  188 => 99,  181 => 95,  172 => 89,  163 => 83,  159 => 81,  157 => 80,  154 => 79,  147 => 75,  141 => 72,  132 => 66,  126 => 63,  120 => 60,  114 => 57,  102 => 48,  96 => 45,  90 => 42,  84 => 39,  72 => 30,  66 => 27,  60 => 24,  54 => 21,  48 => 18,  42 => 15,  36 => 12,  27 => 6,  23 => 4,  21 => 3,  17 => 1,);
    }
}
