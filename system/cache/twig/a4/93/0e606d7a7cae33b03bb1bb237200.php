<?php

/* formproses.html */
class __TwigTemplate_a4930e606d7a7cae33b03bb1bb237200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        $this->env->loadTemplate("navigation.html")->display($context);
        // line 2
        echo "<div id=\"page-wrapper\">
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Form Inputan</h1>
            <div id=\"planit\" style=\"height: 300px; margin-bottom: 20px;\"></div>
            <div id=\"lat\"></div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Data Petugas Pintu Air </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form role=\"form\" method=\"post\" id=\"myForm\">
        
            <table style=\"padding: 1px; width: 100%; border: solid 0px #000000; font-size: 9pt; \">
                <input type=\"hidden\" value=\"\" id=\"id\"/>
                    <tr>
                        <input type=\"hidden\" name=\"koordinat\" id=\"koordinat\" value=\"\" size=\"40\">
                        <td style=\"width: 50%; text-align: left;\">Nama PPA   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"nama\" id=\"nama\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Tempat   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"tempat\" id=\"tempat\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Tanggal Lahir   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"tglLahir\" id=\"tglLahir\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Alamat   </td>
                        <td style=\"width: 50%; text-align: left;\">: <textarea name=\"alamat\" id=\"alamat\" rows=\"3\" cols=\"41\" ></textarea> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Lokasi Kerja   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"lokasiKerja\" id=\"lokasiKerja\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Nama Bangunan   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"namaBangunan\" id=\"namaBangunan\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <input type=\"hidden\" name=\"koordinat\" id=\"koordinat\" value=\"\" size=\"40\">
                        <td style=\"width: 50%; text-align: left;\">Ruas Saluran   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"ruasSaluran\" id=\"ruasSaluran\" value=\"\" placeholder=\"Satuan Meter\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Nama Saluran   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"namaSaluran\" id=\"namaSaluran\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Kejuraon   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"kejuron\" id=\"kejuron\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Pengamat   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input type=\"text\" name=\"pengamat\" id=\"pengamat\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Seksi / UPTD   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"seksi\" id=\"seksi\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Foto   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"foto\" id=\"foto\" type=\"file\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 1   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar1\" id=\"gambar1\" type=\"file\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 2   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar2\" id=\"gambar2\" type=\"file\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 3   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar3\" id=\"gambar3\" type=\"file\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 4   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar4\" id=\"gambar4\" type=\"file\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 5   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar5\" id=\"gambar5\" type=\"file\" value=\"\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 6   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar6\" id=\"gambar6\" type=\"file\" value=\"\" size=\"40\"> </td>
                    </tr>
            </table>
            <!-- /.Penduduk -->

    
            <hr>
            <button type=\"button\" id=\"btnAdd\" onclick=\"addData()\" class=\"btn btn-primary \" >Add</button>
            <button type=\"button\" id=\"btnUpdate\" onclick=\"updateData()\" class=\"btn btn-success\">Update</button>
    </form>
</div>
<!-- /#page-wrapper -->
";
    }

    // line 112
    public function block_js($context, array $blocks = array())
    {
        // line 113
        echo "

   

    <script>
    var x = 12;
    var y = 45;
      p = planit.new({

        container: 'planit',
        image: {
          url: '";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/skema.jpg',
          zoom: true,
        },
        markers: [
          // {
          //   coords: ['12','45'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dingle</h2><p>It's the dinkus.</p>\",
          //     position: 'top-left',
          //     arrow: true
          //   },
          //   class: \"cheese bucket\",
          //   color: \"#CEA052\",
          //   size: 40
          // },
          // {
          //   coords: ['45','62'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dangle</h2><p>It's the other dinkus.</p>\",
          //     position: 'bottom-left',
          //     arrow: true
          //   }
          // },
          // {
          //   coords: ['64.21','22'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dangle</h2><p>It's the other dinkus.</p>\",
          //     position: 'top-right'
          //   }
          // },
          // {
          //   coords: ['64.21','72'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dangle</h2><p>It's the other dinkus.</p>\",
          //     position: 'bottom-right'
          //   }
          // }
          // {
          //   coords: ['12','45'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dingle</h2><p>It's the dinkus.</p>\",
          //     position: 'top',
          //     arrow: true
          //   },
          //   class: \"cheese bucket\",
          //   color: \"#CEA052\",
          //   size: 40
          // },
          // {
          //   coords: ['45','62'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dangle</h2><p>It's the other dinkus.</p>\",
          //     position: 'left',
          //     arrow: true
          //   }
          // },
          // {
          //   coords: ['64.21','22'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dangle</h2><p>It's the other dinkus.</p>\",
          //     position: 'bottom',
          //     arrow: true
          //   }
          // },
          // {
          //   coords: ['64.21','72'],
          //   draggable: true,
          //   infobox: {
          //     html: \"<h2>Dangle</h2><p>It's the other dinkus.</p>\",
          //     position: 'right',
          //     arrow: true
          //   }
          // }
        
          {

            coords: [x,y],
            draggable: true,
            infobox: {
              html: \"<h2>Dangle</h2><p>It's the other dinkus.</p>\",
              position: 'bottom-right',
              arrow: false,
              offsetX: -10,
              offsetY: -10
            },

          }
        ],
        markerDragEnd: function(event, marker) {
          console.log(marker.position());
          document.getElementById(\"koor\").value = marker.position();
          // console.log(marker.coords());
        },
        markerClick: function(event, marker) {
          // console.log(marker.position());
          p.centerOn(marker.position());
          setTimeout(marker.showInfobox, 50);
          // console.log(marker.position());
        },
        canvasClick: function(event, coords) {
          // console.log(coords);
          // console.log(marker.coords());
          p.zoomTo(0);
        }
      });

      \$(window).load(function() {
        // console.log(JSON.stringify(p.getAllMarkers()));
        var show = document.getElementById('namaBangunan').value;

        if(show == \"\")
        {
            \$('#btnAdd').add();
            \$('#btnUpdate').remove();
        }
        else
        {
            \$('#btnAdd').remove();
            \$('#btnUpdate').add();
        }

      });
      
          

    function addData()
    {
        \$('#btnAdd').text('Adding...'); //change button text
        \$('#btnAdd').attr('disabled',true); //set button disable 
        var status = true;
        var url = \"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/addData\";
        var KodePenduduk = document.getElementById('KodePenduduk').value;
        var KodeKawasan = document.getElementById('KodeKawasan').value;
        var KodeUsulan = document.getElementById('KodeUsulan').value;
        var Kode = document.getElementById('Kode').value;
        

    if (status==true) {
            // ajax adding data to database
            \$.ajax({
                url : url,
                type: \"POST\",
                data: \$('#myForm').serialize(),
                dataType: \"JSON\",
                success: function(data)
                {

                    if (data.status == true) { 
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/listProses\";
                        
                    }else{
                        alert(\"Duplikat Kode!!, Cek Kembali Kode per Data\"); 
                        window.location = \"";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/formProses\";
                    }
                    \$('#btnAdd').text('Add'); //change button text
                    \$('#btnAdd').attr('disabled',false); //set button enable 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"Gagal Menyimpan\");
                    \$('#btnAdd').text('Add'); //change button text
                    \$('#btnAdd').attr('disabled',false); //set button enable 

                }
            });
        }
        else
        {
            \$('#btnAdd').text('Add'); //change button text
            \$('#btnAdd').attr('disabled',false); //set button enable 
        }
    }

    function updateData()
    {
        \$('#btnUpdate').text('Updating...'); //change button text
        \$('#btnUpdate').attr('disabled',true); //set button disable 
        var status = true;
        var url = \"";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/updateData\";

    if (status==true) {
            // ajax adding data to database
            \$.ajax({
                url : url,
                type: \"POST\",
                data: \$('#myForm').serialize(),
                dataType: \"JSON\",
                success: function(data)
                {
                    if (data.status) {
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/listProses\";
                        
                    }
                    \$('#btnUpdate').text('Update'); //change button text
                    \$('#btnUpdate').attr('disabled',false); //set button enable 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"Gagal Menyimpan\");
                    \$('#btnUpdate').text('Update'); //change button text
                    \$('#btnUpdate').attr('disabled',false); //set button enable 

                }
            });
        }
        else
        {
            \$('#btnUpdate').text('Update'); //change button text
            \$('#btnUpdate').attr('disabled',false); //set button enable 
        }
    }  
            

    </script>
  

";
    }

    public function getTemplateName()
    {
        return "formproses.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 323,  357 => 310,  328 => 284,  321 => 280,  299 => 261,  159 => 124,  146 => 113,  143 => 112,  31 => 2,  27 => 1,);
    }
}
