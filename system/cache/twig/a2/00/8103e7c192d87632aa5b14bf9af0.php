<?php

/* listSP.html */
class __TwigTemplate_a2008103e7c192d87632aa5b14bf9af0 extends Twig_Template
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
            <h1 class=\"page-header\">List SP</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form role=\"form\" method=\"post\" id=\"myForm\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/cetakBanyakSP\" target=\"_blank\" onsubmit=\"setTimeout(function () { reloadTable(); }, 3)\">
    <div class=\"row\">
        <div class=\"col-lg-6\" style=\"margin-bottom: 10px\">
            <a href=\"javascript:void(0)\" class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</a>
        </div>
        <div class=\"col-lg-6\" style=\"margin-bottom: 10px; text-align: right;\">
            ";
        // line 16
        if ((($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin") || ($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Apotik"))) {
            // line 17
            echo "            <button id=\"prosesCetak\" class=\"btn btn-success\" type=\"submit\" name=\"pdf\"><i class=\"fa fa-file-o\"></i> PDF Banyak</button>
            <button id=\"prosesCetak\" class=\"btn btn-primary\" type=\"submit\" name=\"print\"><i class=\"fa fa-print\"></i> Print Banyak</button>
            ";
        }
        // line 20
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable List SP
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th><input type=\"checkbox\" name=\"title\"  value=\"\" id=\"checkAll\" ></th>
                                        <th>Kode SP</th>
                                        <th>Tanggal SP</th>
                                        <th>Kode Apotik</th>
                                        <th>Nama Apotik</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>PDF</th>
                                        <th>Print</th>
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

    // line 61
    public function block_js($context, array $blocks = array())
    {
        // line 62
        echo "<script>
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            \"processing\": true, //Feature control the processing indicator.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataSP\",
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
        return "listSP.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 70,  104 => 62,  101 => 61,  58 => 20,  53 => 17,  51 => 16,  42 => 10,  32 => 2,  27 => 1,);
    }
}
