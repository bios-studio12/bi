<?php

/* index.html */
class __TwigTemplate_66140c2b869e034eed859ce75a7b339d extends Twig_Template
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SI Irigasi Cipancuh Kabupaten Indramayu</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/vendor/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/css/creative.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/test/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/dist/planit.min.css\">
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/test/js/modernizr-2.8.3.min.js\"></script>

    <style>
      #planit {
        width: 90%;
      }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\">

    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Tugas Pembantuan Operasi Pemeliharaan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#skema\">Skema</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class=\"header-content\">
            <div class=\"header-content-inner\">
                <h1 id=\"homeHeading\"></h1>
                <hr>
                <p>Selamat Datang Di Sistem Informasi Cipancuh Kabupaten Indramayu</p>
                <a href=\"#about\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More</a>
            </div>
        </div>
    </header>

    <section id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">About</h2>
                    <hr class=\"primary\">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
        </div>
    </section>

    <aside class=\"bg-primary\">
        <div class=\"container text-center\">
            <div class=\"call-to-action\">
                <h2>SI Irigasi Cipancuh Kabupaten Indramayu</h2>
            </div>
        </div>
    </aside>

    <section id=\"skema\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">Skema</h2>
                    <hr class=\"primary\">
                    <div id=\"planit\" style=\"height: 470px; margin-bottom: 20px;\" ></div>
                </div>
            </div>
        </div>

        <div class=\"row\" id=\"divData\" style=\"display: none\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder white\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div align=\"right\"><img src=\"";
        // line 120
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
    </section>



    <section class=\"no-padding\" id=\"portfolio\">
        <div class=\"container-fluid\">
            <div class=\"row no-gutter popup-gallery\" id=\"gallery\">
                
            </div>
        </div>
    </section>

    <aside class=\"bg-primary\">
        <div class=\"container text-center\">
            <div class=\"call-to-action\">
                <h2>SI Irigasi Cipancuh Kabupaten Indramayu</h2>
            </div>
        </div>
    </aside>



    <!-- jQuery -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/vendor/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/vendor/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/vendor/scrollreveal/scrollreveal.min.js\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/vendor/magnific-popup/jquery.magnific-popup.min.js\"></script>

    <!-- Theme JavaScript -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/front_new/js/creative.min.js\"></script>

    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/dist/planit.min.js\"></script>


    <script type=\"text/javascript\">
\t\t
\t\tp = planit.new({

        container: 'planit',
        image: {
          url: '";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/skema.jpg',
          zoom: false,
        },
        markers: [
          // {
          //   coords: [x,y],
          //   infobox: {
          //     html: \"<h2>";
        // line 200
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
        // line 208
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ppa"]) ? $context["ppa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ppa"]) {
            // line 209
            echo "          {

            coords: [";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "koor"), "html", null, true);
            echo "],
            draggable: false,
            infobox: {
              html: \"<h2>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "namaBangunan"), "html", null, true);
            echo "</h2><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "nama"), "html", null, true);
            echo "</p>\",
              position: 'bottom-right',
              arrow: false
            },
            id: '";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "id"), "html", null, true);
            echo "',
            color: \"#F05F40\",
  \t\t\tsize: 20

          },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ppa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 224
        echo "        ],

        // markerDragEnd: function(event, marker) {
        //   console.log(marker.position());
        //   // document.getElementById(\"koordinat\").value = marker.position();
        //   // console.log(marker.coords());
        // },
        markerClick: function(event, marker) {
          // console.log(marker.position());
          p.centerOn(marker.position());
          setTimeout(marker.showInfobox, 50);
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
\t\t\t\$('#portfolio').hide();
\t\t}

\t\tfunction getData(id)
\t    {
\t    \t\$('.dt').remove();
            // ajax delete data to database
           \t   \$.ajax({
                url : \"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "id/id/get\",
                type: \"POST\",
                data:{id:id},
                dataType: \"JSON\",
                success: function(data)
                {
                    \$('#ppa').append('<tr class=\"dt\"><td width=\"40%\">Nama Petugas</td><td width=\"60%\">: '+data.nama+'</td></tr><tr class=\"dt\"><td width=\"40%\">Tempat / Tanggal Lahir</td><td width=\"60%\">: '+data.tempat+' , '+data.tglLahir+'</td></tr><tr class=\"dt\"><td width=\"40%\">Alamat</td><td width=\"60%\">: '+data.alamat+'</td></tr><tr class=\"dt\"><td width=\"40%\">Lokasi Kerja</td><td width=\"60%\">: '+data.lokasiKerja+'</td></tr><tr class=\"dt\"><td width=\"40%\">Nama Bangunan</td><td width=\"60%\">: '+data.namaBangunan+'</td></tr><tr class=\"dt\"><td width=\"40%\">Ruas Saluran</td><td width=\"60%\">: '+data.ruasSaluran+'m</td></tr><tr class=\"dt\"><td width=\"40%\">Nama Saluran</td><td width=\"60%\">: '+data.namaSaluran+'</td></tr><tr class=\"dt\"><td width=\"40%\"> Kejuron</td><td width=\"60%\">: '+data.kejuron+'</td></tr><tr class=\"dt\"><td width=\"40%\">Pengamat</td><td width=\"60%\">: '+data.pengamat+'</td></tr><tr class=\"dt\"><td width=\"40%\">Seksi / UPTD</td><td width=\"60%\">: '+data.seksi+'</td></tr><tr class=\"dt\"><td width=\"40%\" >Foto Petugas</td><td width=\"60%\">:<img src=\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.foto+'\" style=\"width : 225px; height : 200px;\" > </td></tr>');
                    \$('#gallery').append('<div class=\"dt\"><div class=\"col-lg-4 col-sm-6\"> <a href=\"";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar1+'\" class=\"portfolio-box\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar1+'\" class=\"img-responsive\" alt=\"\"><div class=\"portfolio-box-caption\"><div class=\"portfolio-box-caption-content\"><div class=\"project-category text-faded\">Galeri</div><div class=\"project-name\">Gambar 1</div></div></div></a></div><div class=\"col-lg-4 col-sm-6\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar2+'\" class=\"portfolio-box\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar2+'\"class=\"img-responsive\" alt=\"\"><div class=\"portfolio-box-caption\"><div class=\"portfolio-box-caption-content\"><div class=\"project-category text-faded\">Galeri</div><div class=\"project-name\">Gambar 2</div></div></div></a></div><div class=\"col-lg-4 col-sm-6\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar3+'\" class=\"portfolio-box\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar3+'\" class=\"img-responsive\" alt=\"\"><div class=\"portfolio-box-caption\"><div class=\"portfolio-box-caption-content\"><div class=\"project-category text-faded\">Galeri</div><div class=\"project-name\">Gambar 3</div></div></div></a></div><div class=\"col-lg-4 col-sm-6\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar4+'\" class=\"portfolio-box\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar4+'\" class=\"img-responsive\" alt=\"\"><div class=\"portfolio-box-caption\"><div class=\"portfolio-box-caption-content\"><div class=\"project-category text-faded\">Galeri</div><div class=\"project-name\">Gambar 4</div></div></div></a></div><div class=\"col-lg-4 col-sm-6\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar5+'\" class=\"portfolio-box\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar5+'\" class=\"img-responsive\" alt=\"\"><div class=\"portfolio-box-caption\"><div class=\"portfolio-box-caption-content\"><div class=\"project-category text-faded\">Galeri</div><div class=\"project-name\">Gambar 5</div></div></div></a></div><div class=\"col-lg-4 col-sm-6\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar6+'\" class=\"portfolio-box\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/galeri/'+data.gambar6+'\" class=\"img-responsive\" alt=\"\"><div class=\"portfolio-box-caption\"><div class=\"portfolio-box-caption-content\"><div class=\"project-category text-faded\">Galeri</div><div class=\"project-name\">Gambar 6</div></div></div></a></div></div>');
                    \$('#indeks').append('<tr class=\"dt\"><td width=\"40%\">Nomenklatur</td><td width=\"60%\">: '+data.namaBangunan+'</td></tr><tr class=\"dt\"><td width=\"40%\">Koordinat GPS</td><td width=\"60%\">: '+data.koordinat+'</td></tr><tr class=\"dt\"><td width=\"40%\">Desa</td><td width=\"60%\">: '+data.desa+'</td></tr><tr class=\"dt\"><td width=\"40%\">Kecamatan</td><td width=\"60%\">: '+data.kecamatan+'</td></tr><tr class=\"dt\"><td width=\"40%\">Kondisi</td><td width=\"60%\">: '+data.kondisi+'</td></tr><tr class=\"dt\"><td width=\"40%\">Fungsi</td><td width=\"60%\">: '+data.fungsi+'</td></tr><tr class=\"dt\"><td width=\"40%\">Nilai</td><td width=\"60%\">: '+data.nilai+'</td></tr><tr class=\"dt\"><td width=\"40%\">Foto Terbaru</td><td width=\"60%\">:<img src=\"";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/kinerja/'+data.fotoKinerja+'\" style=\"width : 225px; height : 200px;\" ></td></tr>');

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data');
                }
            });
\t    }
\t    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
\t</script>
</body>

</html>
";
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
        return array (  389 => 269,  363 => 268,  359 => 267,  350 => 261,  311 => 224,  299 => 218,  290 => 214,  284 => 211,  280 => 209,  276 => 208,  263 => 200,  253 => 193,  241 => 184,  236 => 182,  230 => 179,  226 => 178,  219 => 174,  213 => 171,  159 => 120,  66 => 30,  62 => 29,  58 => 28,  53 => 26,  47 => 23,  39 => 18,  33 => 15,  17 => 1,);
    }
}
