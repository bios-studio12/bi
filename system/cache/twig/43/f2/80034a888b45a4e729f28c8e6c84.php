<?php

/* laporanMutasi.html */
class __TwigTemplate_43f280034a888b45a4e729f28c8e6c84 extends Twig_Template
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
            <h1 class=\"page-header\">Laporan Mutasi & Produk</h1>
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
            <!-- <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button> -->
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable Laporan Mutasi & Produk
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">   
                            <form role=\"form\" method=\"post\" id=\"myForm\">
                            ";
        // line 27
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin")) {
            // line 28
            echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cabang</label>
                                    <select class=\"selectpicker form-control\" data-live-search=\"true\" name=\"cabang\" id=\"cabang\">
                                            <option value=\"\">-- PILIH CABANG --</option>
                                            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cabang"]) ? $context["cabang"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cabang"]) {
                // line 33
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cabang"]) ? $context["cabang"] : null), "Cabang"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cabang"]) ? $context["cabang"] : null), "Cabang"), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cabang'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "                                        </select>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Apotik</label>
                                    <input class=\"form-control\" name=\"apotik\" id=\"apotik\" disabled=\"\">
                                </div>     
                            ";
        }
        // line 41
        echo "             
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal Awal</label>
                                    <input class=\"form-control\" type=\"date\" name=\"tgl\" id=\"tgl\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["tgl"]) ? $context["tgl"] : null), "html", null, true);
        echo "\">
                                </div>      
                                <div style=\"text-align: center;\">
                                        <button type=\"button\" id=\"btnProses\" onclick=\"Proses()\" class=\"btn btn-success\" style=\"width: 150px\">Proses</button><br><br>
                                </div>
                            </form>
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"tableMutasi\">
                                <thead>
                                    <tr>
                                        <th>Kode Produk</th>
                                        <th>Produk</th>
                                        <th>Order</th>
                                        <th>Terima</th>
                                        <th>Keluar</th>
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

    // line 73
    public function block_js($context, array $blocks = array())
    {
        // line 74
        echo "<script>    
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#tableMutasi').DataTable({

            \"processing\": true, //Feature control the processing indicator.
            // Load data for the table's content from an Ajax source
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

        var apotikSource = [];

    \$('#cabang').on('change', function() {
        \$('#apotik').val('');
        apotikSource.length = 0;
        var cabang = this.value;
        \$.ajax({
            url : \"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/getDataApotik/\" + cabang,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {   
                if (data.data) { 
                    for (var i in data.data) {
                        apotikSource[i] = data.data[i].Pelanggan+\"-\"+data.data[i].Kode;
                    }
                    if (i < data.data.length) {
                        \$('#apotik').attr('disabled',false); //set button disable 
                    }
                    else{
                        \$('#apotik').attr('disabled',true); //set button disable 
                    }                   
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
            }
        });
    });

    \$('#apotik').typeahead({
                    source: apotikSource,
                });
    });
    
    // function reloadTable()
    // {
    //     tabel.ajax.reload(null,false);
    // }

    function Proses()
    {
        var t = \$('#tableMutasi').DataTable();
        var rows = t
                .rows()
                .remove()
                .draw();
        var url = \"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataLaporanMutasi\"; 
        var status = true;
        var tgl = document.getElementById('tgl').value;

        ";
        // line 162
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin")) {
            // line 163
            echo "        var apotik = document.getElementById('apotik').value;

        if (apotik == \"\") {
            status = false;
            alert(\"PERHATIAN! Mohon pilih Apotik terlebih dahulu\");
        }
        ";
        }
        // line 170
        echo "
        // ajax adding data to database
        if (status==true) {
            \$.ajax({
                url : url,
                type: \"POST\",
                data: \$('#myForm').serialize(),
                dataType: \"JSON\",
                success: function(data)
                {
                    if (data.data) { 
                        for (var i in data.data) {
                            t.row.add( [
                                data.data[i].KodeProduk,
                                data.data[i].Produk,
                                data.data[i].Order1,
                                data.data[i].Terima,
                                data.data[i].Keluar,
                            ] ).draw( false );
                        }
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"PERHATIAN! Data Mutasi Produk GAGAL\");
                }
            });
        }
    }
</script>
    ";
    }

    public function getTemplateName()
    {
        return "laporanMutasi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 170,  232 => 163,  230 => 162,  223 => 158,  179 => 117,  134 => 74,  131 => 73,  99 => 44,  94 => 41,  85 => 35,  74 => 33,  70 => 32,  64 => 28,  62 => 27,  44 => 12,  32 => 2,  27 => 1,);
    }
}
