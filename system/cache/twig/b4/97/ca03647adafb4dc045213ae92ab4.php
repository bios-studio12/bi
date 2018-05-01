<?php

/* listDIH.html */
class __TwigTemplate_b497ca03647adafb4dc045213ae92ab4 extends Twig_Template
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
            <h1 class=\"page-header\">List DIH</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form role=\"form\" method=\"post\" id=\"myForm\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/cetakBanyakDIH\" target=\"_blank\" onsubmit=\"setTimeout(function () { reloadTable(); }, 3)\">
    <div class=\"row\">
        <div class=\"col-lg-6\" style=\"margin-bottom: 10px\">
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/createDIH\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Add DIH</a>
            <a href=\"javascript:void(0)\" class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</a>
        </div>
        <div class=\"col-lg-6\" style=\"margin-bottom: 10px; text-align: right;\">
            ";
        // line 17
        if ((($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin") || ($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Apotik"))) {
            // line 18
            echo "            <button id=\"prosesCetak\" class=\"btn btn-success\" type=\"submit\" name=\"pdf\"><i class=\"fa fa-file-o\"></i> PDF Banyak</button>
            <button id=\"prosesCetak\" class=\"btn btn-primary\" type=\"submit\" name=\"print\"><i class=\"fa fa-print\"></i> Print Banyak</button>
            ";
        }
        // line 21
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable List DIH
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th><input type=\"checkbox\" name=\"title\"  value=\"\" id=\"checkAll\" ></th>
                                        <th>No DIH</th>
                                        <th>Kode Apotik</th>
                                        <th>Kode Faktur</th>
                                        <th>Kode Pelanggan</th>
                                        <th>Kode Penagih</th>
                                        <th>Kode Salesman</th>
                                        <th>Value</th>
\t\t\t\t\t\t\t\t\t\t<th>Saldo</th>
\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t<th>Tanggal DIH</th>
\t\t\t\t\t\t\t\t\t\t<th>Tanggal Faktur</th>
\t\t\t\t\t\t\t\t\t\t<th>Umur</th>
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
        echo "main/lunas/dataDIH\",
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
        return "listDIH.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 77,  114 => 69,  111 => 68,  62 => 21,  57 => 18,  55 => 17,  48 => 13,  42 => 10,  32 => 2,  27 => 1,);
    }
}
