<?php

/* terimaBarang.html */
class __TwigTemplate_95f759c02f390e66e9c835baeba0ee10 extends Twig_Template
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
        echo "<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Terima Barang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\" style=\"margin-bottom: 10px\">
            <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Terima Barang
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No SP</th>
                                        <th>Status</th>
                                        <th>Tanggal SP</th>
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

    // line 48
    public function block_js($context, array $blocks = array())
    {
        // line 49
        echo "<script>
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            \"processing\": true, //Feature control the processing indicator.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listTerimaBarang\",
                \"type\": \"POST\"
            },
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
    });

    function terimaBarang(No) {
        \$('#SP').text('Saving...'); //change button text
        \$('#SP').attr('disabled',true); //set button disable 
        var url = \"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/addTerimaBarang\"; 

        // ajax adding data to database
        \$.ajax({
            url : url,
            type: \"POST\",
            data:{NoSP:No},
            dataType: \"JSON\",
            success: function(data)
            {
                reloadTable();
                \$('#btnSave').text('save'); //change button text
                \$('#btnSave').attr('disabled',false); //set button enable 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(\"Gagal Menyimpan\");
                \$('#btnSave').text('save'); //change button text
                \$('#btnSave').attr('disabled',false); //set button enable 

            }
        });
    }

    function reloadTable()
    {
        tabel.ajax.reload(null,false);
    }

</script>
    ";
    }

    public function getTemplateName()
    {
        return "terimaBarang.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 93,  93 => 57,  83 => 49,  80 => 48,  32 => 2,  27 => 1,);
    }
}
