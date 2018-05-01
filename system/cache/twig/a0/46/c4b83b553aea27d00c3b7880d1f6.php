<?php

/* createPelunasan.html */
class __TwigTemplate_a046c4b83b553aea27d00c3b7880d1f6 extends Twig_Template
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
            <h1 class=\"page-header\">Buat Pelunasan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Form Buat Pelunasan
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">No DIH</label>
                                    <select class=\"form-control\" name=\"NoDIH\" id=\"NoDIH\" onchange=\"getDIH()\">
                                        <option value=\"\">-- PILIH NO DIH --</option>
                                        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodih"]) ? $context["nodih"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nodih"]) {
            // line 30
            echo "                                            <option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nodih"]) ? $context["nodih"] : null), "NoDIH"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nodih'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal</label>
                                    <input class=\"form-control\" type=\"text\" name=\"tgl\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["tgl"]) ? $context["tgl"] : null), "html", null, true);
        echo "\" id=\"tgl\" readonly=\"\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Faktur</label>
                                    <div class=\"table-responsive\">
                                        <table class=\"table\" id=\"table-faktur\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>No Faktur</th>
                                                    <th>Pelanggan</th>
                                                    <th>Tanggal Faktur</th>
                                                    <th>Total</th>
                                                    <th>Saldo Awal</th>
                                                    <th>Cash</th>
                                                    <th>Transfer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <hr>
                                <input type=\"hidden\" name=\"bucket\" id=\"bucket\">
                                <button type=\"button\" id=\"btnSave\" onclick=\"saveData()\" class=\"btn btn-primary\">Save</button>
                                <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
                            </form>
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

    // line 82
    public function block_js($context, array $blocks = array())
    {
        // line 83
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
        \$('#removeRow').hide();
        \$('#myForm')[0].reset(); // reset form on modals
        \$('.selectpicker').selectpicker('val', '');

        \$.ajax({
            url : \"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listSales\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    \$(\"#sales\").append('<option value=' + data[i].Kode + '>' + data[i].Nama + \"-\" + data[i].Kode + \"-\" + data[i].Jabatan + '</option>');
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    });

    // CARI KODE PRODUK/BARANG
    function cariKode(e){
        var Kode = document.getElementById('KodeProduk'+e).value;
        \$.ajax({
            url : \"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataProduk/\" + Kode,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {   
                if (data)
                {
                    if (data.Data) {
                        \$('#NamaProduk'+e).val(data.Data.Produk);
                        \$('#Satuan'+e).val(data.Data.Satuan);
                        \$('#Harga'+e).val(data.Harga.HrgBeliPst);
                    }
                }
                else
                {
                    \$('#NamaProduk'+e).val(\"\");
                    \$('#Satuan'+e).val(\"\");
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function getDIH(){
        jQuery('.itemRow').remove();
        var nodih = document.getElementById('NoDIH').value;
        \$.ajax({
            url : \"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/getDIH\",
            type: \"POST\",
            data:{nodih:nodih},
            dataType: \"JSON\",
            success: function(data)
            {   
                if (data)
                {
                    for(i in data)
                    {
                        \$('#table-faktur').append(\$('<tr class=\"itemRow\"><td></td><td><input type=\"text\" name=\"NoFaktur[]\" value=\"' + data[i].NoFaktur + '\" id=\"NoFaktur'+i+'\" readonly=\"\" style=\"background-color: #eee\"></td><td><input type=\"text\" name=\"KodePelanggan[]\" value=\"' + data[i].KodePelanggan + '\" id=\"KodePelanggan'+i+'\" readonly=\"\" style=\"background-color: #eee\"></td><td><input type=\"text\" name=\"tglFaktur[]\" value=\"' + data[i].Tgl_Faktur + '\" id=\"tglFaktur'+i+'\" readonly=\"\" style=\"background-color: #eee\"></td><td><input type=\"text\" name=\"Total[]\" value=\"' + data[i].Value + '\" id=\"Total'+i+'\" readonly=\"\" style=\"background-color: #eee\"></td><td><input type=\"text\" name=\"Saldo[]\" value=\"' + data[i].Saldo + '\" id=\"Saldo'+i+'\" readonly=\"\" style=\"background-color: #eee\"></td><td><input type=\"text\" name=\"Cash[]\" id=\"Cash'+i+'\"></td><td><input type=\"text\" name=\"Transfer[]\" id=\"Transfer'+i+'\"><input type=\"hidden\" name=\"Tgl_DIH[]\" value=\"'+data[i].Tgl_DIH+'\"><input type=\"hidden\" name=\"KdSalesman[]\" value=\"'+data[i].KodeSalesman+'\"><input type=\"hidden\" name=\"KdPenagih[]\" value=\"'+data[i].KodePenagih+'\"><input type=\"hidden\" name=\"Umur[]\" value=\"'+data[i].Umur+'\"></td></tr>'));
                    }
                    \$('#bucket').val(i);
                }
                else
                {
                    \$('#NamaProduk'+e).val(\"\");
                    \$('#Satuan'+e).val(\"\");
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function hitung(e){
        var Qty = ((document.getElementById('Qty'+e).value) ? document.getElementById('Qty'+e).value : 0);
        var Bonus = ((document.getElementById('Bonus'+e).value) ? document.getElementById('Bonus'+e).value : 0);
        var Diskon = ((document.getElementById('Diskon'+e).value) ? document.getElementById('Diskon'+e).value : 0);
        // var Satuan = ((document.getElementById('Satuan'+e).value) ? document.getElementById('Satuan'+e).value : 0);
        // var Stok = ((document.getElementById('Stok'+e).value) ? document.getElementById('Stok'+e).value : 0);
        var Harga = ((document.getElementById('Harga'+e).value) ? document.getElementById('Harga'+e).value : 0);
        var Gross = ((document.getElementById('Gross'+e).value) ? document.getElementById('Gross'+e).value : 0);
        var Potongan = ((document.getElementById('Potongan'+e).value) ? document.getElementById('Potongan'+e).value : 0);
        var Value = ((document.getElementById('Value'+e).value) ? document.getElementById('Value'+e).value : 0);
        var PPN = ((document.getElementById('PPN'+e).value) ? document.getElementById('PPN'+e).value : 0);
        var Total = ((document.getElementById('Total'+e).value) ? document.getElementById('Total'+e).value : 0);

        Gross = ( parseInt(Qty) + parseInt(Bonus) ) * Harga;
        Diskon =( Harga * Qty ) * ( Diskon / 100 );
        Potongan = ( Bonus * Harga ) + Diskon;
        Value = ( Qty * Harga ) - Diskon;
        PPN = Value * ( 10 / 100 );
        Total = PPN + Value;

        document.getElementById('Gross'+e).value = Gross;
        document.getElementById('Potongan'+e).value = Potongan;
        document.getElementById('Value'+e).value = Value;
        document.getElementById('PPN'+e).value = PPN;
        document.getElementById('Total'+e).value = Total;

    }

    function saveData()
    {
        \$('#btnSave').text('Saving...'); //change button text
        \$('#btnSave').attr('disabled',true); //set button disable 
        var url = \"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/addPelunasan\"; 
        var bucket = document.getElementById('bucket').value;        
        var status = true;

        for (var i = 0; i <= bucket; i++) {
            var Cash = document.getElementById('Cash'+i).value;
            var Transfer = document.getElementById('Transfer'+i).value;            
            var statusCash = true;
            var statusTransfer = true;

            if (Cash == \"\" || Cash < 0) 
            {
                alert(\"PERHATIAN! Kolom Cash Harus Diisi. Minimal 0\");
                statusCash = false;
                status=false;
            } 
            if (Transfer == \"\" || Transfer < 0) 
            {
                alert(\"PERHATIAN! Kolom Transfer Harus Diisi. Minimal 0\");
                statusTransfer = false;
                status=false;
            } 

            if (statusCash == true && statusTransfer == true) {
                var Total = document.getElementById('Total'+i).value;   
                var Summary = parseInt(Cash) + parseInt(Transfer);
                if (Total < Summary) 
                {
                    alert(\"PERHATIAN! Jumlah Cash & Transfer Melebihi Nilai Total\");
                    status=false;
                } 
            }
            
        }

        if (status==true) {
        // ajax adding data to database
        \$.ajax({
            url : url,
            type: \"POST\",
            data: \$('#myForm').serialize(),
            dataType: \"JSON\",
            success: function(data)
            {
                window.location = \"";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/createPelunasan\"; 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(\"Gagal Menyimpan\");
                \$('#btnSave').text('Save'); //change button text
                \$('#btnSave').attr('disabled',false); //set button enable 

            }
        });
        }
        else
        {
            \$('#btnSave').text('Save'); //change button text
            \$('#btnSave').attr('disabled',false); //set button enable 
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "createPelunasan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 244,  260 => 200,  198 => 141,  165 => 111,  141 => 90,  132 => 83,  129 => 82,  80 => 36,  74 => 32,  65 => 30,  61 => 29,  32 => 2,  27 => 1,);
    }
}
