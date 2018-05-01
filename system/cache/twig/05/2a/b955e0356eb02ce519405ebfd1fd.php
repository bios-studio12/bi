<?php

/* profil.html */
class __TwigTemplate_052ab955e0356eb02ce519405ebfd1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("navigation.html")->display($context);
        // line 2
        echo "<div id=\"page-wrapper\">
    <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"jumbotron\">
                        <h1>PT AJ CENTRAL ASIA RAYA</h1>
                        <p>PT A.J. Central Asia Raya didirikan pada tanggal 30 April 1975 berdasarkan Akta Notaris Ridwan Suselo no. 357. PT. AJ Central Asia adalah bagian dari Salim Group yang telah mendirikan / menjalankan beberapa perusahaan berikut seperti Yakult, Indofood, Indomilk, Indomaret, Indogrosir, Indomobil, Indocement, Bogasari, Djarum, Nestle, BCA, PepsiCo, Sinar Mas Group, Smartfren, Superindo, Unilever, Wings dan banyak lagi.</p>
                        <p>Sejak semula, seluruh pemegang saham, komisaris dan direksi telah sepakat untuk menjadikan PT A.J. Central Asia Raya sebagai salah satu perusahaan asuransi jiwa yang telah melalui tiga dekade dan terus berkembang. Hal ini telah dibuktikan oleh perseroan dengan memiliki kekayaan lebih dari Rp 3,81 triyun, risk based capital (RBC) 216%, serta satu-satunya perusahaan asuransi jiwa dan yang pertama berhasil meraih Platinum Award dari majalah InfoBank atas predikat “sangat bagus” selama 10 (sepuluh) tahun berturut-turut (1999 s/d 2008).</p>
                        <p></p>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>
<!-- /#page-wrapper -->


";
    }

    public function getTemplateName()
    {
        return "profil.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  26 => 1,);
    }
}
