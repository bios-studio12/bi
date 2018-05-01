<?php

/* listkinerja.html */
class __TwigTemplate_1eb924af90b86d5bfdd56a641f2ebdf7 extends Twig_Template
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
            <h1 class=\"page-header\">List Data Indeks Kinerja Sistem Irigasi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable Indeks Kinerja
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomenklatur</th>
                                        <th>Koordinat GPS</th>
                                        <th>Desa</th>
                                        <th>Kecamatan</th>
                                        <th>Kondisi</th>
                                        <th>Fungsi</th>
                                        <th>Nilai</th>
                                        <th>Foto</th>
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

    // line 53
    public function block_js($context, array $blocks = array())
    {
        // line 54
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
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Kinerja/listData\",
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
    
        });



    function deleteData(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Kinerja/deleteData/\" + id,
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
        return "listkinerja.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 127,  100 => 64,  88 => 54,  85 => 53,  32 => 2,  27 => 1,);
    }
}
