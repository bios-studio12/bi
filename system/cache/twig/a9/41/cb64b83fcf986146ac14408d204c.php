<?php

/* laporanPiutang.html */
class __TwigTemplate_a941cb64b83fcf986146ac14408d204c extends Twig_Template
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
            <h1 class=\"page-header\">Laporan Piutang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\" style=\"margin-bottom: 10px\">
            <!-- <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/createOrder\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Add Order</a> -->
            <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable Laporan Piutang
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>No Faktur</th>
                                        <th>Umur Piutang</th>
                                        <th>Kode Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Cabang</th>
                                        <th>Salesman</th>
                                        <th>Tanggal Faktur</th>
                                        <th>Status</th>
                                        <th>Gross</th>
                                        <th>Potongan</th>
                                        <th>Value</th>
                                        <th>Ppn</th>
                                        <th>Total</th>
                                        <th>Saldo</th>
                                        <!-- <th>PDF</th>
                                        <th>Print</th>                                         -->
                                        <th>View</th>
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

<!-- Bootstrap modal -->
<div class=\"modal fade\" id=\"modal_form\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h3 class=\"modal-title\"></h3>
            </div>
            <div class=\"modal-body form\">
                <table width=\"100%\" class=\"table2 table-striped table-bordered table-hover\" id=\"laporanPiutang\">
                                <thead style=\"line-height: 2\">
                                    <tr>
                                        <th>No</th>
                                        <th>No DIH</th>
                                        <th>Tanggal DIH</th>
                                        <th>No Faktur</th>
                                        <th>Tanggal Faktur</th>
                                        <th>Umur Lunas</th>
                                        <th>Umur Piutang</th>
                                        <th>Kode Salesman</th>
                                        <th>Kode Penagih</th>
                                        <th>Value Pelunasan</th>
                                    </tr>
                                </thead>
                            </table>
            </div>
            <div class=\"modal-footer\"><!-- 
                <button type=\"button\" id=\"btnSave\" onclick=\"saveData()\" class=\"btn btn-primary\">Save</button>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
";
    }

    // line 96
    public function block_js($context, array $blocks = array())
    {
        // line 97
        echo "<script>
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            \"processing\": true, //Feature control the processing indicator.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataLaporanPiutang\",
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

    function view(id){
        \$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
        \$('.modal-title').text('Approval Detail'); // Set title to Bootstrap modal title

        jQuery('.itemRow').remove();
        \$.ajax({
            url : \"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataPelunasan\",
            type: \"POST\",
            data:{id:id},
            dataType: \"JSON\",
            success: function(data)
            {   
                var x = 1;
                var nf = new Intl.NumberFormat();
                    for(i in data)
                    {
                        \$('#laporanPiutang').append(\$('<tr class=\"itemRow table2 table-striped table-bordered table-hover\"><td>'+x+'</td><td>'+data[i].NoDIH+'</td><td>'+data[i].TglDIH+'</td><td>'+data[i].NoFaktur+'</td><td>'+data[i].TglFaktur+'</td><td>'+data[i].uLunas+'</td><td>'+data[i].uPiutang+'</td><td>'+data[i].KdSalesman+'</td><td>'+data[i].KdPenagih+'</td><td align=\"right\">'+nf.format(data[i].ValuePelunasan)+'</td></tr>'));
                        x++;
                    }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

</script>
    ";
    }

    public function getTemplateName()
    {
        return "laporanPiutang.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 149,  144 => 105,  134 => 97,  131 => 96,  44 => 12,  32 => 2,  27 => 1,);
    }
}
