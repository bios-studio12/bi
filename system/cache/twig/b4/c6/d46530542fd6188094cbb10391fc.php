<?php

/* listproses.html */
class __TwigTemplate_b4c6d46530542fd6188094cbb10391fc extends Twig_Template
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
            <h1 class=\"page-header\">List Proses</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div id=\"map\" style=\"height: 300px; margin-bottom: 20px;\" ></div>
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
                            Datatable Penduduk
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Penduduk</th>
                                        <th>Jumlah Penduduk</th>
                                        <th>Jumlah Penduduk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.panel-body -->

                        <div class=\"panel-heading\">
                            Datatable Cakupan Kawasan
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example1\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kawasan</th>
                                        <th>Nama Kawasan</th>
                                        <th>Titik Koordinat</th>
                                        <th>Kecamatan/Distrik</th>
                                        <th>Kelurahan/Desa/Nagari/Kampung</th>
                                        <th>RT/RW</th>
                                        <th>Luas Kawasan</th>
                                        <th>Potensial</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.panel-body -->


                        <div class=\"panel-heading\">
                            Datatable Usulan
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example2\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Usulan</th>
                                        <th>Nama Usulan</th>
                                        <th>Jenis Kegiatan</th>
                                        <th>Tanah Hak Milik</th>
                                        <th>Tanah Pemerintah</th>
                                        <th>Tanah Adat</th>
                                        <th>Lainnya</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.panel-body -->

                        <div class=\"panel-heading\">
                            Datatable Kondisi Kawasan
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example3\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Jarak Pengumpulan</th>
                                        <th>Waktu Pengumpulan</th>
                                        <th>Biaya Pengumpulan</th>
                                        <th>Jarak Pengolahan</th>
                                        <th>Waktu Pengolahan</th>
                                        <th>Biaya Pengolahan</th>
                                        <th>Jarak Lokal</th>
                                        <th>Waktu Lokal</th>
                                        <th>Biaya Lokal</th>
                                        <th>Jarak Kabupaten</th>
                                        <th>Waktu Kabupaten</th>
                                        <th>Biaya Kabupaten</th>
                                        <th>Jalan Tanah</th>
                                        <th>Jalan Pavling</th>
                                        <th>Jalan Beton</th>
                                        <th>Jalan Aspal</th>
                                        <th>Jumlah Terminal</th>
                                        <th>Kebutuhan Terminal</th>
                                        <th>Kondisi Layak Terminal</th>
                                        <th>Kondisi Tidak Layak Terminal</th>
                                        <th>Jumlah Pasar</th>
                                        <th>Kebutuhan Pasar</th>
                                        <th>Kondisi Layak Pasar</th>
                                        <th>Kondisi Tidak Layak Pasar</th>
                                        <th>Jumlah Kios</th>
                                        <th>Kebutuhan Kios</th>
                                        <th>Kondisi Layak Kios</th>
                                        <th>Kondisi Tidak Layak Kios</th>
                                        <th>Jumlah Bengkel</th>
                                        <th>Kebutuhan Bengkel</th>
                                        <th>Kondisi Layak Bengkel</th>
                                        <th>Kondisi Tidak Layak Bengkel</th>
                                        <th>Jumlah Perahu</th>
                                        <th>Kebutuhan Perahu</th>
                                        <th>Kondisi Layak Perahu</th>
                                        <th>Kondisi Tidak Layak Perahu</th>
                                        <th>Jumlah Pelelangan Ikan</th>
                                        <th>Kebutuhan Pelelangan Ikan</th>
                                        <th>Kondisi Layak Pelelangan Ikan</th>
                                        <th>Kondisi Tidak Layak Pelelangan Ikan</th>
                                        <th>Jumlah Pertanian</th>
                                        <th>Kebutuhan Pertanian</th>
                                        <th>Kondisi Layak Pertanian</th>
                                        <th>Kondisi Tidak Layak Pertanian</th>
                                        <th>Jenis Infrastruktur</th>
                                        <th>Jumlah Infrastruktur</th>
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

    // line 166
    public function block_js($context, array $blocks = array())
    {
        // line 167
        echo "<script>
    var saveMethod;
    var tabel;
    var tabel1;
    var tabel2;
    var tabel3;
    var map;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({
            \"processing\": true, //Feature control the processing indicator.
            // \"serverSide\": true, //Feature control DataTables' server-side processing mode.
            // \"ordering\": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/listPenduduk\",
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

        tabel1 = \$('#dataTables-example1').DataTable({
            \"processing\": true, //Feature control the processing indicator.
            // \"serverSide\": true, //Feature control DataTables' server-side processing mode.
            // \"ordering\": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/listCakupanKawasan\",
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
        // Tabel Cakupan Kawasan

        tabel2 = \$('#dataTables-example2').DataTable({
            \"processing\": true, //Feature control the processing indicator.
            // \"serverSide\": true, //Feature control DataTables' server-side processing mode.
            // \"ordering\": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/listUsulan\",
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
            // Tabel Usulan

            tabel2 = \$('#dataTables-example3').DataTable({
            \"processing\": true, //Feature control the processing indicator.
            // \"serverSide\": true, //Feature control DataTables' server-side processing mode.
            // \"ordering\": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/listKondisiKawasan\",
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
            // Tabel Kondisi Kawasan

            \$('#update').click(function(){
            \$('#btnAdd').removeClass('hidden-div');
            }); 


        //iyeu mah nu hiji default kan? hooh eh iyeu mah koordinat si map
        map = new GMaps({
            div: '#map',
            lat: -6.9775323,
            lng: 107.6920444,
            zoom: 14,
            draggable: true,
            dragend: function(event) {
              console.log(event);
              document.getElementById('lat').innerHTML = \"map center=\" + map.map.getCenter().toUrlValue(6);
            }
        });
            // var path = [[-6.866667,109.125595], 
            //             [-6.876667,109.126000], 
            //             [-6.886667,109.146000],   
            //             [-6.869767,109.126580]];

            //           polygon = map.drawPolygon({
            //           paths: path,
            //           strokeColor: '#BBD8E9',
            //           strokeOpacity: 1,
            //           strokeWeight: 3,
            //           fillColor: '#BBD8E9',
            //           fillOpacity: 0.6
            //         });
        
        ";
        // line 418
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dt"]) ? $context["dt"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dt"]) {
            // line 419
            echo "            var koor = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dt"]) ? $context["dt"] : null), "TitikKoordinat"), "html", null, true);
            echo "\";
            var split = koor.split('/');
            var x = split[0];
            var y = split[1];
            map.addMarker({
                lat: x,
                lng: y,
                title: '";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dt"]) ? $context["dt"] : null), "NamaKawasan"), "html", null, true);
            echo "',
                infoWindow: {
                content: '<p>Nama Kawasan :";
            // line 428
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dt"]) ? $context["dt"] : null), "NamaKawasan"), "html", null, true);
            echo "</p> <p>Luas Kawasan :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dt"]) ? $context["dt"] : null), "LuasKawasan"), "html", null, true);
            echo " Ha</p><p>Potensial :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dt"]) ? $context["dt"] : null), "Potensial"), "html", null, true);
            echo "' },
                click: function(e) {
                    // diisi ku didinya jang nampilkeun data keseluruhan. jadi pas si ikon na di klik tah fungsi nu rek di eksekusi simpen didieu
                }
              //     fences: [polygon],
              //       outside: function(marker, fence) {
              //       alert('This marker has been moved outside of its fence');
              // }
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dt'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 438
        echo "        });



    function deleteData(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 448
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/proses/deleteData/\" + id,
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
        return "listproses.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 448,  506 => 438,  486 => 428,  481 => 426,  470 => 419,  466 => 418,  385 => 340,  329 => 287,  273 => 234,  217 => 181,  201 => 167,  198 => 166,  32 => 2,  27 => 1,);
    }
}
