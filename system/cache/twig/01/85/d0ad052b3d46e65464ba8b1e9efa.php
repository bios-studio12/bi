<?php

/* laporanKartuGudang.html */
class __TwigTemplate_0185d0ad052b3d46e65464ba8b1e9efa extends Twig_Template
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
        echo "<style type=\"text/css\">
    textarea {
   resize: none;
}
</style>
<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Laporan Kartu Gudang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Datatable Laporan Kartu Gudang
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">                            
                            ";
        // line 25
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin")) {
            // line 26
            echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cabang</label>
                                    <select class=\"selectpicker form-control\" data-live-search=\"true\" name=\"cabang\" id=\"cabang\">
                                            <option value=\"\">-- PILIH CABANG --</option>
                                            ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cabang"]) ? $context["cabang"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cabang"]) {
                // line 31
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
            // line 33
            echo "                                        </select>
                                </div> 
                            ";
        }
        // line 35
        echo "    
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Produk</label>
                                    <input class=\"form-control\" name=\"produk\" id=\"produk\" ";
        // line 38
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin")) {
            echo " disabled=\"\" ";
        }
        echo ">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal</label>
                                    <input class=\"form-control\" type=\"date\" name=\"tgl\" id=\"tgl\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["tgl"]) ? $context["tgl"] : null), "html", null, true);
        echo "\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>     
                                <div style=\"text-align: center;\">
                                    <button type=\"button\" id=\"btnKalkulasi\" onclick=\"Kalkulasi()\" class=\"btn btn-success\" style=\"width: 150px\">Kalkulasi</button><br><br>
                                </div>
                            </form>
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"kartuGudang\">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Terima/Kirim</th>
                                        <th>No Dok</th>
                                        <th>Mutasi</th>
                                        <th>Saldo</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

";
    }

    // line 76
    public function block_js($context, array $blocks = array())
    {
        // line 77
        echo "<script type=\"text/javascript\">
var tabel;
\$(document).ready(function() {
    tabel = \$('#kartuGudang').DataTable({

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

    var produkSource = [];
";
        // line 114
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "Admin")) {
            // line 115
            echo "    \$('#cabang').on('change', function() {
        \$('#produk').val('');
        produkSource.length = 0;
        var cabang = this.value;
        \$.ajax({
            url : \"";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/getDataProduk/\" + cabang,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {   
                if (data.data) { 
                    for (var i in data.data) {
                        produkSource[i] = data.data[i].Produk+\"-\"+data.data[i].KodeProduk;
                    }
                    if (i < data.data.length) {
                        \$('#produk').attr('disabled',false); //set button disable 
                    }
                    else{
                        \$('#produk').attr('disabled',true); //set button disable 
                    }                   
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
            }
        });
    });
";
        }
        // line 144
        echo "
";
        // line 145
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Apotik")) {
            // line 146
            echo "        \$.ajax({
            url : \"";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/order/getDataProduk/\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                if (data.data) { 
                    for (var i in data.data) {
                        produkSource[i] = data.data[i].Produk+\"-\"+data.data[i].KodeProduk;
                    }
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
            }
        });  
";
        }
        // line 165
        echo "
    \$('#produk').typeahead({
                    source: produkSource,
                });

});
    
    function Kalkulasi()
    {
        var t = \$('#kartuGudang').DataTable();

        var rows = t
                .rows()
                .remove()
                .draw();
        var url = \"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataLaporanKartuGudang\"; 
        var status = true;
        var produk = document.getElementById('produk').value;

        if (produk == \"\") {
            status = false;
            alert(\"PERHATIAN! Mohon pilih produk terlebih dahulu\");
        }

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
                        var saldo = 0;
                        var terimaKirim = '';
                        for (var i in data.data) {
                            if (data.data[i].Tipe == \"Faktur\") 
                            {
                                // TERIMA BARANG                                
                                    terimaKirim = \"Terima\";
                                    saldo = parseInt(saldo) + parseInt(data.data[i].mutasi);

                                t.row.add( [
                                    data.data[i].tanggal,
                                    terimaKirim,
                                    data.data[i].NoTerima,
                                    data.data[i].mutasi,
                                    saldo,
                                ] ).draw( false );


                                // KELUAR BARANG
                                terimaKirim = \"Kirim\";
                                    saldo = parseInt(saldo) - parseInt(data.data[i].mutasi);
                                    
                                t.row.add( [
                                    data.data[i].tanggal,
                                    terimaKirim,
                                    data.data[i].noDok,
                                    data.data[i].mutasi,
                                    saldo,
                                ] ).draw( false );
                            }
                            else{
                                // KELUAR BARANG
                                if (data.data.Status != \"Retur\") 
                                {
                                    terimaKirim = \"Terima\";
                                    saldo = parseInt(saldo) + parseInt(data.data[i].mutasi);
                                }
                                else
                                {
                                    terimaKirim = \"Kirim\";
                                    saldo = parseInt(saldo) - parseInt(data.data[i].mutasi);
                                }
                                t.row.add( [
                                    data.data[i].tanggal,
                                    terimaKirim,
                                    data.data[i].noDok,
                                    data.data[i].mutasi,
                                    saldo,
                                ] ).draw( false );
                            }
                        }
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"PERHATIAN! Data Kartu Gudang GAGAL\");
                }
            });
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "laporanKartuGudang.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 180,  243 => 165,  222 => 147,  219 => 146,  217 => 145,  214 => 144,  187 => 120,  180 => 115,  178 => 114,  139 => 77,  136 => 76,  99 => 42,  90 => 38,  85 => 35,  80 => 33,  69 => 31,  65 => 30,  59 => 26,  57 => 25,  32 => 2,  27 => 1,);
    }
}
