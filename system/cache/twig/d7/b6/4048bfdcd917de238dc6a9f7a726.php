<?php

/* listOrder.html */
class __TwigTemplate_d7b64048bfdcd917de238dc6a9f7a726 extends Twig_Template
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
            <h1 class=\"page-header\">List Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->    
    <form role=\"form\" method=\"post\" id=\"myForm\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/cetakBanyakOrder\" target=\"_blank\" onsubmit=\"setTimeout(function () { reloadTable(); }, 3)\">
    <div class=\"row\">
        <div class=\"col-lg-6\" style=\"margin-bottom: 10px\">            
        ";
        // line 13
        if (((($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") != "RBM") && ($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") != "BM")) && ($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") != "User Cabang"))) {
            // line 14
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/createOrder\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Add Order</a>
        ";
        }
        // line 15
        echo " 
            <a href=\"javascript:void(0)\" id=\"reload\" class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</a>
        </div>
        <div class=\"col-lg-6\" style=\"margin-bottom: 10px; text-align: right;\">
            ";
        // line 19
        if ((($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin") || ($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Apotik"))) {
            // line 20
            echo "            <button id=\"prosesCetak\" class=\"btn btn-success\" type=\"submit\" name=\"pdf\"><i class=\"fa fa-file-o\"></i> PDF Banyak</button>
            <button id=\"prosesCetak\" class=\"btn btn-primary\" type=\"submit\" name=\"print\"><i class=\"fa fa-print\"></i> Print Banyak</button>
            <button id=\"SP\" class=\"btn btn-warning\" onclick=\"buatSP()\"><i class=\"fa fa-check\"></i> Buat SP</button>
            ";
        }
        // line 24
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable List Order
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th><input type=\"checkbox\" name=\"title\"  value=\"\" id=\"checkAll\" ></th>
                                        <th>No Order</th>
                                        <th>Kode Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Salesman</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>NoSP</th>
                                        <th>Tanggal Order</th>
                                        <th>PDF</th>
                                        <th>Print</th>
                                        <th>Batal</th>
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
    </form>
</div>
<!-- /#page-wrapper -->

";
    }

    // line 68
    public function block_js($context, array $blocks = array())
    {
        // line 69
        echo "<script>
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            \"processing\": true, //Feature control the processing indicator.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataOrder\",
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

    function buatSP()
    {
        \$('#SP').attr('disabled',true); //set button disable 
        var url = \"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/addSP\"; 

        // ajax adding data to database
        \$.ajax({
            url : url,
            type: \"POST\",
            dataType: \"JSON\",
            success: function(data)
            {
                reloadTable(); 
                \$('#SP').attr('disabled',false); //set button enable 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                reloadTable(); 
                \$('#SP').attr('disabled',false); //set button enable 

            }
        });
    }

    function batalOrder(id)
    {
        if(confirm('Apakah kamu yakin ingin membatalkan data order ini?'))
        {
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/deleteOrder/\",
                type: \"POST\",
                data:{id:id},
                dataType: \"JSON\",
                success: function(data)
                {
                    reloadTable();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }

    function reloadTable()
    {
        tabel.ajax.reload(null,false);
    }

    \$(\"#checkAll\").change(function () {
        \$(\"input:checkbox\").prop('checked', \$(this).prop(\"checked\"));
    });

</script>
    ";
    }

    public function getTemplateName()
    {
        return "listOrder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 140,  168 => 113,  129 => 77,  119 => 69,  116 => 68,  70 => 24,  64 => 20,  62 => 19,  56 => 15,  50 => 14,  48 => 13,  42 => 10,  32 => 2,  27 => 1,);
    }
}
