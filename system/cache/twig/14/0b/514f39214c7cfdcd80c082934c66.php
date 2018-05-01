<?php

/* listppa.html */
class __TwigTemplate_140b514f39214c7cfdcd80c082934c66 extends Twig_Template
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
        echo " ";
        $this->env->loadTemplate("navigation.html")->display($context);
        // line 2
        echo "<style>
    .hidden-div {
        display:none
    }
    </style>
<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">List Data PPA</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div id=\"planit\" style=\"height: 300px; margin-bottom: 20px;\" ></div>
            <div id=\"lat\"></div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable PPA
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama PPA</th>
                                        <th>Tampat</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Lokasi Kerja</th>
                                        <th>Nama Bangunan</th>
                                        <th>Ruas Saluran</th>
                                        <th>Nama Saluran</th>
                                        <th>Kejuron</th>
                                        <th>Pengamat</th>
                                        <th>Seksi/UPTD</th>
                                        <th>Foto</th>
                                        <th>Gambar 1</th>
                                        <th>Gambar 2</th>
                                        <th>Gambar 3</th>
                                        <th>Gambar 4</th>
                                        <th>Gambar 5</th>
                                        <th>Gambar 6</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


";
    }

    // line 70
    public function block_js($context, array $blocks = array())
    {
        // line 71
        echo "<script>
    var saveMethod;
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({
            \"processing\": true, //Feature control the processing indicator.
            // \"serverSide\": true, //Feature control DataTables' server-side processing mode.
            // \"ordering\": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/listData\",
                \"type\": \"POST\"
            },

            //Set column definition initialisation properties.
            \"columnDefs\": [
                { 
                    \"targets\": [ -1 ], //last column
                    \"orderable\": false, //set not orderable
                },
                { 
                    \"targets\": [ -2 ], //2 last column (photo)
                    \"orderable\": false, //set not orderable
                },
            ],

            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 
                {
                    extend:'pdf',
                    exportOptions: {
                        columns: ':visible',
                    },
                    download: 'open',
                    customize: function (doc) {
                        doc.content[1].table.widths = 
                            Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                      }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible',
                    }
                }, 
                'pageLength', 'colvis'
            ],
            \"pageLength\": 10,
            \"language\": {
                    \"emptyTable\":     \"Tidak ada data..\"
                }
 
            });
        // Tabel Penduduk

       

            \$('#update').click(function(){
            \$('#btnAdd').removeClass('hidden-div');
            }); 


        
            // var koor = \"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "koor"), "html", null, true);
        echo "\";
            // var split = koor.split(',');
            // var x = split[0];
            // var y = split[1];
      p = planit.new({

        container: 'planit',
        image: {
          url: '";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/skema.jpg',
          zoom: true,
        },
        markers: [
          // {
          //   coords: [x,y],
          //   infobox: {
          //     html: \"<h2>";
        // line 151
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
        // line 159
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ppa"]) ? $context["ppa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ppa"]) {
            // line 160
            echo "          {

            coords: [";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "koor"), "html", null, true);
            echo "],
            draggable: false,
            infobox: {
              html: \"<h2>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "namaBangunan"), "html", null, true);
            echo "</h2><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ppa"]) ? $context["ppa"] : null), "nama"), "html", null, true);
            echo "</p>\",
              position: 'bottom-right',
              arrow: true,
              offsetX: -10,
              offsetY: -10
            }

          },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ppa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 174
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
          // console.log(marker.position());
        },
        canvasClick: function(event, coords) {
          // console.log(coords);
          // console.log(marker.coords());
          p.zoomTo(0);

        }
      });
    
        });



    function deleteData(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/deleteData/\" + id,
                type: \"POST\",
                dataType: \"JSON\",
                success: function(data)
                {
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }

</script>
    ";
    }

    public function getTemplateName()
    {
        return "listppa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 205,  240 => 174,  223 => 165,  217 => 162,  213 => 160,  209 => 159,  196 => 151,  186 => 144,  175 => 136,  117 => 81,  105 => 71,  102 => 70,  32 => 2,  27 => 1,);
    }
}
