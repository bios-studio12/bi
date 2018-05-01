<?php

/* index.html */
class __TwigTemplate_52d954be493ccaf7ceac40dd5e070117 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<!-- Stylesheets
\t============================================= -->
\t<link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/bootstrap.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/style.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/swiper.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/dark.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/font-icons.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/animate.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/magnific-popup.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/responsive.css\" type=\"text/css\" />
\t<!-- <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/css/vmap.css\" type=\"text/css\" /> -->
\t<style type=\"text/css\">
\t\t.section{
\t\t\tmargin: 0 !important;
\t\t}
\t\t.content-wrap{
\t\t\tpadding: 0 !important;
\t\t}
\t\t.white{
\t\t\tbackground-color: #fff !important;
\t\t}
\t\ttable{
\t\t\tmargin-bottom: 0 !important;
\t\t}
\t</style>

\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/test/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/dist/planit.min.css\">
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/test/js/modernizr-2.8.3.min.js\"></script>

    <style>
      #planit {
        width: 90%;
      }
    </style>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t
\t<title>SI Irigasi Cipancuh Kabupaten Indramayu</title>
</head>
<body class=\"stretched\">
\t<div id=\"wrapper\" class=\"clearfix\">

\t\t<!-- Header
\t\t============================================= -->
\t\t<header id=\"header\" class=\"transparent-header full-header\" data-sticky-class=\"not-dark\">

\t\t\t<div id=\"header-wrap\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t<div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

\t\t\t\t\t<!-- Logo
\t\t\t\t\t============================================= -->
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"#slider\" class=\"standard-logo\" data-dark-logo=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/images/logo-dark.png\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/images/logo.png\" alt=\"Canvas Logo\"></a>
\t\t\t\t\t\t<a href=\"#slider\" class=\"retina-logo\" data-dark-logo=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/images/logo-dark@2x.png\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/images/logo@2x.png\" alt=\"Canvas Logo\"></a>
\t\t\t\t\t</div><!-- #logo end -->

\t\t\t\t\t<!-- Primary Navigation
\t\t\t\t\t============================================= -->
\t\t\t\t\t<nav id=\"primary-menu\" class=\"dark\">

\t\t\t\t\t\t<ul class=\"one-page-menu\" data-easing=\"easeInOutExpo\" data-speed=\"2000\">
\t\t\t\t\t\t\t<li><a href=\"#\" data-href=\"#home\"><div>Home</div></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-href=\"#profil\"><div>Profil</div></a></li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\" data-href=\"#map\"><div>Skema</div></a></li>\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav><!-- #primary-menu end -->

\t\t\t\t</div>

\t\t\t</div>

\t\t</header><!-- #header end -->

\t\t<section id=\"slider\" class=\"slider-parallax swiper_wrapper full-screen clearfix\">
\t\t\t<div class=\"slider-parallax-inner\">

\t\t\t\t<div class=\"swiper-container swiper-parent\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t<div class=\"swiper-slide dark\" style=\"background-image: url('";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/images/1.jpg');\">
\t\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t\t<div class=\"slider-caption slider-caption-center\">
\t\t\t\t\t\t\t\t\t<h2 data-caption-animate=\"fadeInUp\">Selamat Datang</h2>
\t\t\t\t\t\t\t\t\t<p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">Sistem Informasi Irigasi Cipancuh Indramayu</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"slider-arrow-left\"><i class=\"icon-angle-left\"></i></div>
\t\t\t\t\t<div id=\"slider-arrow-right\"><i class=\"icon-angle-right\"></i></div>
\t\t\t\t</div>

\t\t\t\t<a href=\"#\" data-scrollto=\"#content\" data-offset=\"100\" class=\"dark one-page-arrow\"><i class=\"icon-angle-down infinite animated fadeInDown\"></i></a>

\t\t\t</div>
\t\t</section>

\t\t<!-- Content
\t\t============================================= -->
\t\t<section id=\"content\">

\t\t\t<div class=\"content-wrap\">

\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"heading-block center nomargin\" id=\"home\">
\t\t\t\t\t\t\t\t<h3>HOME</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder white\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"heading-block center nomargin\" id=\"profil\">
\t\t\t\t\t\t\t\t<h3>Profil</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"heading-block center nomargin\" id=\"map\">
\t\t\t\t\t\t\t\t<h3>Skema</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"planit\" style=\"height: 470px; margin-bottom: 20px;\" ></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\" id=\"divData\" style=\"display: none\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder white\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div align=\"right\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/images/close.png\" style=\"position: right; cursor: pointer;\" onclick=\"closeData()\"></div>
\t\t\t\t\t\t\t<div class=\"heading-block center nomargin\" id=\"profil\">
\t\t\t\t\t\t\t\t<h3>Data</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<table width=\"100%\" id='ppa'>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" width=\"100%\">Data PPA</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<table width=\"100%\" id='foto'>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" width=\"100%\">Gambar Lokasi Kerja</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<table width=\"100%\" id=\"indeks\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" width=\"100%\">Data Indeks </th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</section>

\t</div>

\t<!-- Go To Top
\t============================================= -->
\t<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

\t<!-- External JavaScripts
\t============================================= -->
\t<script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/plugins.js\"></script>
\t<!-- <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/jquery.vmap.js\"></script> -->
\t<!-- <script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/vmap/jquery.vmap.world.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/vmap/jquery.vmap.usa.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/vmap/jquery.vmap.europe.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/vmap/jquery.vmap.germany.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/vmap/jquery.vmap.sampledata.js\"></script>
\t<!-- <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?key=AIzaSyCOu15786tOXXtZD75rRVAZgo__RKrLo-Q\"></script> -->
\t<!-- <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/gmaps.js\"></script> --> 
\t<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/dist/planit.min.js\"></script>

\t<!-- Footer Scripts
\t============================================= -->
\t<script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front/js/functions.js\"></script>

\t<script type=\"text/javascript\">
\t\t
\t\tp = planit.new({

        container: 'planit',
        image: {
          url: '";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/skema.jpg',
          zoom: true,
        },
        markers: [
          // {
          //   coords: [x,y],
          //   infobox: {
          //     html: \"<h2>";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "namaBangunan"), "html", null, true);
        echo "</h2><p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "nama"), "html", null, true);
        echo "</p>\",
          //     position: 'top-left',
              
          //   },
          //   class: \"cheese bucket\",
          //   color: \"#CEA052\",
          //   size: 40
          // },
        ";
        // line 240
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ppa"]) ? $context["ppa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ppa"]) {
            // line 241
            echo "          {

            coords: [";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "koor"), "html", null, true);
            echo "],
            draggable: false,
            infobox: {
              html: \"<h2>";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "namaBangunan"), "html", null, true);
            echo "</h2><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "nama"), "html", null, true);
            echo "</p>\",
              position: 'bottom-right',
              arrow: true,
              offsetX: -10,
              offsetY: -10
            },
            id: '";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "id"), "html", null, true);
            echo "',
            color: \"#CEA052\",
  \t\t\tsize: 20

          },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ppa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 258
        echo "        ],

        markerDragEnd: function(event, marker) {
          console.log(marker.position());
          // document.getElementById(\"koordinat\").value = marker.position();
          // console.log(marker.coords());
        },
        markerClick: function(event, marker) {
          // console.log(marker.position());
          p.centerOn(marker.position());
          setTimeout(marker.showInfobox, 10);
          getData(marker.id());

          \$('#divData').show();
\t\t\t\$('html, body').animate({ scrollTop: \$('#divData').offset().top }, 'slow');
          // console.log(marker.position());
        },
        canvasClick: function(event, coords) {
          // console.log(coords);
          // console.log(marker.coords());
          p.zoomTo(0);

        }
      });
\t

\t\tfunction closeData() {
\t\t\t\$('html, body').animate({ scrollTop: \$('#divData').offset().top }, 'slow');
\t\t\t\$('#divData').hide();
\t\t}

\t\tfunction getData(id)
\t    {
\t    \t\$('.dt').remove();
            // ajax delete data to database
           \t            \$.ajax({
                url : \"";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "id/id/get\",
                type: \"POST\",
                data:{id:id},
                dataType: \"JSON\",
                success: function(data)
                {
                    \$('#ppa').append('<tr class=\"dt\"><td width=\"40%\">Nama Petugas</td><td width=\"60%\">: '+data.nama+'</td></tr><tr class=\"dt\"><td width=\"40%\">Tempat / Tanggal Lahir</td><td width=\"60%\">: '+data.tempat+' , '+data.tglLahir+'</td></tr><tr class=\"dt\"><td width=\"40%\">Alamat</td><td width=\"60%\">: '+data.alamat+'</td></tr><tr class=\"dt\"><td width=\"40%\">Lokasi Kerja</td><td width=\"60%\">: '+data.lokasiKerja+'</td></tr><tr class=\"dt\"><td width=\"40%\">Nama Bangunan</td><td width=\"60%\">: '+data.namaBangunan+'</td></tr><tr class=\"dt\"><td width=\"40%\">Ruas Saluran</td><td width=\"60%\">: '+data.ruasSaluran+'m</td></tr><tr class=\"dt\"><td width=\"40%\">Nama Saluran</td><td width=\"60%\">: '+data.namaSaluran+'</td></tr><tr class=\"dt\"><td width=\"40%\"> Kejuron</td><td width=\"60%\">: '+data.kejuron+'</td></tr><tr class=\"dt\"><td width=\"40%\">Pengamat</td><td width=\"60%\">: '+data.pengamat+'</td></tr><tr class=\"dt\"><td width=\"40%\">Seksi / UPTD</td><td width=\"60%\">: '+data.seksi+'</td></tr><tr class=\"dt\"><td width=\"40%\" >Foto Petugas</td><td width=\"60%\">:<img src=\"";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.foto+'\" style=\"width : 225px; height : 200px;\" > </td></tr>');
                    \$('#foto').append('<tr class=\"dt\"><td width=\"33%\">:<img src=\"";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar1+'\" style=\"width : 225px; height : 200px;\" > </td><td width=\"33%\">:<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar2+'\" style=\"width : 225px; height : 200px;\" > </td><td width=\"33%\">:<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar3+'\" style=\"width : 225px; height : 200px;\" ></td></tr><tr class=\"dt\"><td width=\"33%\">:<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar4+'\" style=\"width : 225px; height : 200px;\" > </td><td width=\"33%\">:<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar5+'\" style=\"width : 225px; height : 200px;\" > </td><td width=\"33%\">:<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar6+'\" style=\"width : 225px; height : 200px;\" ></td></tr>');
                    \$('#indeks').append('<tr class=\"dt\"><td width=\"40%\">Nomenklatur</td><td width=\"60%\">: '+data.namaBangunan+'</td></tr><tr class=\"dt\"><td width=\"40%\">Koordinat GPS</td><td width=\"60%\">: '+data.koordinat+'</td></tr><tr class=\"dt\"><td width=\"40%\">Desa</td><td width=\"60%\">: '+data.desa+'</td></tr><tr class=\"dt\"><td width=\"40%\">Kecamatan</td><td width=\"60%\">: '+data.kecamatan+'</td></tr><tr class=\"dt\"><td width=\"40%\">Kondisi</td><td width=\"60%\">: '+data.kondisi+'</td></tr><tr class=\"dt\"><td width=\"40%\">Fungsi</td><td width=\"60%\">: '+data.fungsi+'</td></tr><tr class=\"dt\"><td width=\"40%\">Nilai</td><td width=\"60%\">: '+data.nilai+'</td></tr><tr class=\"dt\"><td width=\"40%\">Foto Terbaru</td><td width=\"60%\">:<img src=\"";
        // line 302
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/kinerja/'+data.fotoKinerja+'\" style=\"width : 225px; height : 200px;\" ></td></tr>');

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data');
                }
            });
\t    }
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 302,  439 => 301,  435 => 300,  426 => 294,  388 => 258,  376 => 252,  365 => 246,  359 => 243,  355 => 241,  351 => 240,  338 => 232,  328 => 225,  317 => 217,  310 => 213,  306 => 212,  301 => 210,  297 => 209,  293 => 208,  289 => 207,  285 => 206,  281 => 205,  277 => 204,  273 => 203,  221 => 154,  151 => 87,  120 => 61,  114 => 60,  84 => 33,  80 => 32,  76 => 31,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  25 => 7,  17 => 1,);
    }
}
