<?php

/* formppa.html */
class __TwigTemplate_78fc4457124ce1b9f94fbfdcbcc63e31 extends Twig_Template
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
                        <input type=\"hidden\" name=\"koor\" id=\"koordinat\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "koor"), "html", null, true);
        echo "\" size=\"40\">
                        <td style=\"width: 50%; text-align: left;\">Nama PPA   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"nama\" id=\"nama\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "nama"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Tempat   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"tempat\" id=\"tempat\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "tempat"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Tanggal Lahir   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"tglLahir\" id=\"tglLahir\" class=\"datepicker\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "tglLahir"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Alamat   </td>
                        <td style=\"width: 50%; text-align: left;\">: <textarea name=\"alamat\" id=\"alamat\" rows=\"3\" cols=\"41\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "alamat"), "html", null, true);
        echo "\"></textarea> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Lokasi Kerja   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"lokasiKerja\" id=\"lokasiKerja\" size=\"40\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "lokasiKerja"), "html", null, true);
        echo "\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Nama Bangunan   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"namaBangunan\" id=\"namaBangunan\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "namaBangunan"), "html", null, true);
        echo "\" size=\"40\" > </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Ruas Saluran   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"ruasSaluran\" id=\"ruasSaluran\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "ruasSaluran"), "html", null, true);
        echo "\" placeholder=\"Satuan Meter\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Nama Saluran   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"namaSaluran\" id=\"namaSaluran\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "namaSaluran"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Kejuron   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"kejuron\" id=\"kejuron\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "kejuron"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Pengamat   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input type=\"text\" name=\"pengamat\" id=\"pengamat\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "pengamat"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Seksi / UPTD   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"seksi\" id=\"seksi\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "seksi"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Foto   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"foto\" id=\"foto\" type=\"file\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "foto"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 1   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar1\" id=\"gambar1\" type=\"file\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "gambar1"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 2   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar2\" id=\"gambar2\" type=\"file\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "gambar2"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 3   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar3\" id=\"gambar3\" type=\"file\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "gambar3"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 4   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar4\" id=\"gambar4\" type=\"file\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "gambar4"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 5   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar5\" id=\"gambar5\" type=\"file\" value=\"gambar5\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Gambar Lokasi 6   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"gambar6\" id=\"gambar6\" type=\"file\" value=\"gambar6\" size=\"40\"> </td>
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

    // line 111
    public function block_js($context, array $blocks = array())
    {
        // line 112
        echo "

   

    <script>
    var x = 12;
    var y = 45;
      p = planit.new({

        container: 'planit',
        image: {
          url: '";
        // line 123
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
              html: \"<p>Menandai</p>\",
              position: 'bottom-right',
              arrow: false,
              offsetX: -10,
              offsetY: -10
            },

          }
        ],
        markerDragEnd: function(event, marker) {
          console.log(marker.position());
          document.getElementById(\"koordinat\").value = marker.position();
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

      \$(document).ready(function() { 

        \$('.datepicker').datepicker({
                autoclose: true,
                format: \"yyyy-mm-dd\",
                todayHighlight: true,
                orientation: \"top auto\",
                todayBtn: true,
                todayHighlight: true,  
            });

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
        // line 268
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/addData\";
        var namaBangunan = document.getElementById('namaBangunan').value;
        
        var formdata = new FormData();      
        // append tipe file
        var foto = \$('#foto')[0].files[0];
        formdata.append('foto', foto);

        var gambar1 = \$('#gambar1')[0].files[0];
        formdata.append('gambar1', gambar1);

        var gambar2 = \$('#gambar2')[0].files[0];
        formdata.append('gambar2', gambar2);

        var gambar3 = \$('#gambar3')[0].files[0];
        formdata.append('gambar3', gambar3);

        var gambar4 = \$('#gambar4')[0].files[0];
        formdata.append('gambar4', gambar4);

        var gambar5 = \$('#gambar5')[0].files[0];
        formdata.append('gambar5', gambar5);

        var gambar6 = \$('#gambar6')[0].files[0];
        formdata.append('gambar6', gambar6);

        \$.each(\$('#myForm').serializeArray(), function(a, b){
            formdata.append(b.name, b.value);
        });
     
        var formData = new FormData(\$('#myForm')[0]);
        

    if (status==true) {
            // ajax adding data to database
            \$.ajax({
                url : url,
                type: \"POST\",
                data: formData,
                contentType: false,
                processData: false,
                dataType: \"JSON\",
                success: function(data)
                {

                    if (data.status == true) { 
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 315
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/listppa\";
                        
                    }else{
                        alert(\"Duplikat Kode!!, Cek Kembali Kode per Data\"); 
                        window.location = \"";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/formppa\";
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
        // line 345
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/PPA/updateData\";

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
        // line 358
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/listppa\";
                        
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
        return "formppa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 358,  443 => 345,  414 => 319,  407 => 315,  357 => 268,  209 => 123,  196 => 112,  193 => 111,  168 => 89,  161 => 85,  154 => 81,  147 => 77,  140 => 73,  131 => 67,  124 => 63,  117 => 59,  110 => 55,  103 => 51,  96 => 47,  89 => 43,  82 => 39,  75 => 35,  68 => 31,  61 => 27,  56 => 25,  31 => 2,  27 => 1,);
    }
}
