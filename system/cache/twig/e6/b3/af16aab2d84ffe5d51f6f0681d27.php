<?php

/* createOrder.html */
class __TwigTemplate_e6b3af16aab2d84ffe5d51f6f0681d27 extends Twig_Template
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
    .dropdown-menu{
        font-size: 12px !important;
    }
</style>
<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Buat Order ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "cabang2"), "html", null, true);
        echo "</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Form Buat Order
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">
                                <div class=\"form-group\">
                                    <input type=\"hidden\" name=\"counter\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
        echo "\">
                                    <label class=\"control-label\">Kode Order</label>
                                    <input class=\"form-control\" name=\"KodeOrder\" id=\"KodeOrder\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["KodeOrder"]) ? $context["KodeOrder"] : null), "html", null, true);
        echo "\" readonly=\"\" style=\"background-color: #eee\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal Order</label>
                                    <input class=\"form-control\" type=\"text\" name=\"tgl_order\" id=\"tgl_order\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["tgl"]) ? $context["tgl"] : null), "html", null, true);
        echo "\" readonly=\"\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pelanggan</label>
                                    <input class=\"form-control\" name=\"pelangganMask\" id=\"pelangganMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"pelanggan\" id=\"pelanggan\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"tipePelanggan\" id=\"tipePelanggan\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Salesman</label>
                                    <input class=\"form-control\" name=\"salesMask\" id=\"salesmanMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"sales\" id=\"salesman\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Data</label>
                                    <textarea id=\"data\" name=\"data\" class=\"form-control\" rows=\"10\"></textarea> 
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"col-lg-3\">
                                    <input type=\"hidden\" name=\"saldo\" id=\"saldo\" class=\"form-control\" readonly=\"\" style=\"background-color: #eee\">                                    
                                    <input type=\"hidden\" name=\"top\" id=\"top\" class=\"form-control\" readonly=\"\" style=\"background-color: #eee\">
                                </div>
                                <div class=\"col-lg-3\">
                                    <input type=\"hidden\" name=\"limit\" id=\"limit\" class=\"form-control\" readonly=\"\" style=\"background-color: #eee\">
                                </div>
                                <div class=\"col-lg-3\">
                                    <input type=\"hidden\" name=\"dump\" id=\"dump\" class=\"form-control\" readonly=\"\" style=\"background-color: #eee\">
                                    <input type=\"hidden\" name=\"piutang\" id=\"piutang\" class=\"form-control\" readonly=\"\" style=\"background-color: #eee\">
                                    <input type=\"hidden\" name=\"order\" id=\"order\" class=\"form-control\" readonly=\"\" style=\"background-color: #eee\">
                                </div>
                                <div class=\"col-lg-3\">
                                    <input type=\"hidden\" name=\"status\" id=\"status\" class=\"form-control\" readonly=\"\" style=\"background-color: #eee\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Barang</label>
                                    <div class=\"table-responsive\">
                                        <table class=\"table\" id=\"table-barang\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kode Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Diskon</th>
                                                    <th>Bonus</th>
                                                    <th>Satuan</th>
                                                    <th>Harga</th>
                                                    <th>Gross</th>
                                                    <th>Potongan</th>
                                                    <th>Value</th>
                                                    <th>PPN</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><input type=\"text\" name=\"KodeProduk[0]\" id=\"KodeProduk0\" style=\"
                                                    width:300px\" onkeyup=\"cariKode(0)\" onchange=\"getProduk(0)\"></td>
                                                    <td><input type=\"text\" name=\"Qty[0]\" id=\"Qty0\" onkeyup=\"qty(0)\" onchange=\"qty(0)\" style=\"width: 50px;\"></td>
                                                    <td><input type=\"number\" step=\"0.01\" min=\"0\" name=\"Diskon[0]\" id=\"Diskon0\" onkeyup=\"hitung()\" onchange=\"hitung()\" style=\"width: 50px;\">
                                                        <input type=\"hidden\" name=\"maxDiskon[0]\" id=\"maxDiskon0\">
                                                    </td>
                                                    <td><input type=\"text\" name=\"Bonus[0]\" id=\"Bonus0\" onkeyup=\"hitung()\" onchange=\"hitung()\" style=\"width: 50px;\"></td>
                                                    <td><input type=\"text\" name=\"Satuan[0]\" id=\"Satuan0\" readonly=\"\" style=\"background-color: #eee; width: 50px\"></td>
                                                    <td><input type=\"text\" name=\"Harga[0]\" id=\"Harga0\" readonly=\"\" style=\"background-color: #eee; width: 120px\"></td>
                                                    <td><input type=\"text\" name=\"Gross[0]\" id=\"Gross0\" readonly=\"\" style=\"background-color: #eee; width: 120px\"></td>
                                                    <td><input type=\"text\" name=\"Potongan[0]\" id=\"Potongan0\" readonly=\"\" style=\"background-color: #eee; width: 120px\"></td>
                                                    <td><input type=\"text\" name=\"Value[0]\" id=\"Value0\" readonly=\"\" style=\"background-color: #eee; width: 120px\"></td>
                                                    <td><input type=\"text\" name=\"PPN[0]\" id=\"PPN0\" readonly=\"\" style=\"background-color: #eee; width: 120px\"></td>
                                                    <td><input type=\"text\" name=\"Total[0]\" id=\"Total0\" readonly=\"\" style=\"background-color: #eee; width: 120px\"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <div align=\"center\">
                                        <input type=\"hidden\" name=\"bucket\" id=\"bucket\" value=\"0\">
                                        <a href=\"javascript:void(0)\" type=\"submit\" class=\"btn btn-success\" onclick=\"addRow(this.form);\">Tambah Barang</a>                                        
                                        <button type=\"reset\" class=\"btn btn-default\">Reset Form</button>
                                        <a href=\"javascript:void(0)\" type=\"submit\" class=\"btn btn-danger\" id=\"removeRow\" onclick=\"removeRow();\">Hapus Baris</a>
                                    </div>
                                </div>
                                <hr>
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

    // line 141
    public function block_js($context, array $blocks = array())
    {
        // line 142
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {        
        \$('#removeRow').hide();
        \$('#myForm')[0].reset(); // reset form on modals
        \$('.selectpicker').selectpicker('val', '');  

    // START AUTOCOMPLETE PELANGGAN
        var pelangganSource = [];

        \$.ajax({
            url : \"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listPelanggan\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    pelangganSource[i] = data[i].Kode+\"-\"+data[i].Nama_Faktur+\"-\"+data[i].Alamat;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data Pelanggan from ajax');
            }
        });   

        \$('#pelangganMask').typeahead({
                    source: pelangganSource,
                });
    // FINISH AUTOCOMPLETE PELANGGAN

    // START AUTOCOMPLETE SALESMAN
        var salesmanSource = [];

        \$.ajax({
            url : \"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listSales\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    salesmanSource[i] = data[i].Kode + \"-\" + data[i].Nama + \"-\" + data[i].Jabatan;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data Salesman from ajax');
            }
        });   

        \$('#salesmanMask').typeahead({
                    source: salesmanSource
                });
    // FINISH AUTOCOMPLETE SALESMAN       

    });

    // START LOAD DATA PELANGGAN
    \$('#pelangganMask').on('change', function() {
        var split = this.value.split(\"-\");
        var Kode = split[0];
      \$.ajax({
            url : \"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataPelanggan/\" + Kode,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {   
                if (data.data) {
                    var Saldo = data.data.Limit_Kredit - data.data.Saldo_Piutang - data.order;
                    \$('[name=\"data\"]').val(
                            data.data.Kode + ' - ' + data.data.Nama_Faktur + '\\n' +
                            data.data.Alamat + ', ' + data.data.Kota + '\\n' +
                            'Contact Person: ' + data.data.Contact_Person + '\\n' +
                            'Telpon: ' + data.data.Telp + '\\n' +
                            'Limit: ' + data.data.Limit_Kredit + '\\n' +
                            'Order: ' + data.order + '\\n' +
                            'Piutang: ' + data.data.Saldo_Piutang + '\\n' +
                            'Saldo: ' + Saldo
                        );
                    \$('[name=\"saldo\"]').val(Saldo);
                    \$('#piutang').val(data.data.Saldo_Piutang);
                    \$('#order').val(data.order);
                    \$('#tipePelanggan').val(data.data.Tipe);
                    \$('#top').val(data.data.TOP);
                    clearRow();
                    hitung();
                    loadProduk();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
            }
        });
    });
    // FINISH LOAD DATA PELANGGAN

    // START TAMBAH & HAPUS ROW BARANG
    var rowNum = 0;
    function addRow(frm)
    {
        \$('#removeRow').show();
        rowNum ++;

        \$('#table-barang').append(\$('<tr id=\"itemRow'+rowNum+'\"><td></td><td><input type=\"text\" name=\"KodeProduk['+rowNum+']\" id=\"KodeProduk'+rowNum+'\" onkeyup=\"cariKode('+rowNum+')\" style=\"width:300px\" onchange=\"getProduk('+rowNum+')\"></td><td><input type=\"text\" name=\"Qty['+rowNum+']\" id=\"Qty'+rowNum+'\" onkeyup=\"qty('+rowNum+')\" onchange=\"qty('+rowNum+')\" style=\"width:50px\"></td><td><input type=\"number\" step=\"0.01\" min=\"0\" name=\"Diskon['+rowNum+']\" id=\"Diskon'+rowNum+'\" onkeyup=\"hitung()\" onchange=\"hitung()\" style=\"width:50px\"><input type=\"hidden\" name=\"maxDiskon['+rowNum+']\" id=\"maxDiskon'+rowNum+'\"></td><td><input type=\"text\" name=\"Bonus['+rowNum+']\" id=\"Bonus'+rowNum+'\" onkeyup=\"hitung()\" onchange=\"hitung()\" style=\"width:50px\"></td><td><input type=\"text\" name=\"Satuan['+rowNum+']\" id=\"Satuan'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width:50px\"></td><td><input type=\"text\" name=\"Harga['+rowNum+']\" id=\"Harga'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width:120px\"></td><td><input type=\"text\" name=\"Gross['+rowNum+']\" id=\"Gross'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width:120px\"></td><td><input type=\"text\" name=\"Potongan['+rowNum+']\" id=\"Potongan'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width:120px\"></td><td><input type=\"text\" name=\"Value['+rowNum+']\" id=\"Value'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width:120px\"></td><td><input type=\"text\" name=\"PPN['+rowNum+']\" id=\"PPN'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width:120px\"></td><td><input type=\"text\" name=\"Total['+rowNum+']\" id=\"Total'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width:120px\"></td></tr>'));

        \$('#bucket').val(rowNum);
    }

    function removeRow() 
    {
        jQuery('#itemRow'+rowNum).remove();
        rowNum--;
        if (rowNum==0) {
            \$('#removeRow').hide();
        }
        \$('#bucket').val(rowNum);
    }
    function clearRow() 
    {
        var bucket = document.getElementById('bucket').value;
        for (var i = bucket; i > 0; i--) {            
            jQuery('#itemRow'+i).remove();            
            rowNum--;
        }
        \$('#removeRow').hide();
        \$('#bucket').val(rowNum);
    }
    // FINISH TAMBAH & HAPUS ROW BARANG


    // START CARI KODE PRODUK/BARANG
    // var produkSource = [];

    // function loadProduk() {

    //     \$.ajax({
    //         url : \"";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listProduk\",
    //         type: \"GET\",
    //         dataType: \"JSON\",
    //         success: function(data)
    //         {
    //             for (var i in data) {
    //                 produkSource[i] = data[i].KodeProduk+\"-\"+data[i].Produk;
    //             }

    //         },
    //         error: function (jqXHR, textStatus, errorThrown)
    //         {
    //             alert('Error get list Produk from ajax');
    //         }
    //     });   
    // }

    function loadProduk() {
        var tipe = document.getElementById('tipePelanggan').value
        \$.ajax({
            url : \"";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listProduk/\",
            type: \"POST\",
            data:{tipe:tipe},
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    produkSource[i] = data[i].KodeProduk+\"-\"+data[i].Produk;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get list Produk from ajax');
            }
        });
    }


    function cariKode(e){    
        var tipe = document.getElementById('tipePelanggan').value
        if (tipe == \"\") {
            alert(\"PERHATIAN! Mohon Pilih Pelanggan Terlebih Dahulu.\")
        }
    //     else{
    //         \$.ajax({
    //             url : \"";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listProduk/\",
    //             type: \"POST\",
    //             data:{tipe:tipe},
    //             dataType: \"JSON\",
    //             success: function(data)
    //             {
    //                 for (var i in data) {
    //                     produkSource[i] = data[i].KodeProduk+\"-\"+data[i].Produk;
    //                 }

    //             },
    //             error: function (jqXHR, textStatus, errorThrown)
    //             {
    //                 alert('Error get list Produk from ajax');
    //             }
    //         }); 
            \$('#KodeProduk'+e).typeahead({
                    source: produkSource
                });
    //     }
    }
    var diskon = [];
    function getProduk(e){
        var bucket =document.getElementById('bucket').value; 
        var Value = document.getElementById('KodeProduk'+e).value;
        var split = Value.split(\"-\");
        var Kode = split[0];
        var Status = true;
        if (bucket > 0) {
            for (var i = 0; i < bucket; i++) {
                var Value2 = document.getElementById('KodeProduk'+i).value;
                var split2 = Value2.split(\"-\");
                var Kode2 = split2[0];
                if (Kode === Kode2) 
                { 
                    Status = false;
                    break;
                }
            }
        }

        if (Status == true) {
            \$.ajax({
                url : \"";
        // line 369
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/dataProduk/\" + Kode,
                type: \"GET\",
                dataType: \"JSON\",
                success: function(data)
                {   
                    if (data)
                    {
                        if (data.Data) {
                            diskon = data.Diskon;
                            \$('#Satuan'+e).val(data.Data.Satuan);
                            \$('#Harga'+e).val(data.Harga.HNA);
                            \$('#Qty'+e).val(\"\");
                            \$('#Bonus'+e).val(\"\");
                            \$('#Diskon'+e).val(\"\");
                            \$('#Gross'+e).val(\"\");
                            \$('#Potongan'+e).val(\"\");
                            \$('#Value'+e).val(\"\");
                            \$('#PPN'+e).val(\"\");
                            \$('#Total'+e).val(\"\");
                        }
                        else{                            
                            \$('#Qty'+e).val(\"\");
                            \$('#Bonus'+e).val(\"\");
                            \$('#Diskon'+e).val(\"\");
                            \$('#maxDiskon'+e).val(\"\");
                            \$('#Satuan'+e).val(\"\");
                            \$('#Harga'+e).val(\"\");
                            \$('#Gross'+e).val(\"\");
                            \$('#Potongan'+e).val(\"\");
                            \$('#Value'+e).val(\"\");
                            \$('#PPN'+e).val(\"\");
                            \$('#Total'+e).val(\"\");
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
                    
                }
            });
        }
        else
        {
            alert(\"Duplikat Produk\");
            \$('#KodeProduk'+e).val(\"\");
        }
    }
    // FINISH CARI KODE PRODUK/BARANG

    function qty(e) {
        getDiskon(e);
        hitung();
    }

    function getDiskon(e) {
        var Value = document.getElementById('KodeProduk'+e).value;
        var split = Value.split(\"-\");
        var Kode = split[0];
        var Qty = ((document.getElementById('Qty'+e).value) ? document.getElementById('Qty'+e).value : 0);

        \$.ajax({
                url : \"";
        // line 435
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/getDiskon/\" + Kode +\"?qty=\"+Qty,
                type: \"GET\",
                dataType: \"JSON\",
                success: function(data)
                {   
                    if (data)
                    {
                        if(data.Diskon.Pri == null && data.Diskon.Cab == null)
                        {
                            \$('#maxDiskon'+e).val(\"99\");
                        }
                        else if(data.Diskon.Pri != null && data.Diskon.Cab == null)
                        {
                            \$('#maxDiskon'+e).val(data.Diskon.Pri);
                        }
                        else if(data.Diskon.Pri == null && data.Diskon.Cab != null)
                        {
                            \$('#maxDiskon'+e).val(data.Diskon.Cab);
                        }
                        else
                        {                                
                            \$('#maxDiskon'+e).val(( parseInt(data.Diskon.Pri) + parseInt(data.Diskon.Cab)));
                        }
                    }
                    else
                    {                        
                        
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    
                }
            });
    }

    function hitung(){
        var bucket = ((document.getElementById('bucket').value) ? document.getElementById('bucket').value : 0);
        var summary = 0;
        for (var e = 0; e <= bucket; e++) {
            var Qty = ((document.getElementById('Qty'+e).value) ? document.getElementById('Qty'+e).value : 0);
            var Bonus = ((document.getElementById('Bonus'+e).value) ? document.getElementById('Bonus'+e).value : 0);
            var Diskon = ((document.getElementById('Diskon'+e).value) ? document.getElementById('Diskon'+e).value : 0);
            var Satuan = ((document.getElementById('Satuan'+e).value) ? document.getElementById('Satuan'+e).value : 0);
            var Harga = ((document.getElementById('Harga'+e).value) ? document.getElementById('Harga'+e).value : 0);
            var Gross = ((document.getElementById('Gross'+e).value) ? document.getElementById('Gross'+e).value : 0);
            var Potongan = ((document.getElementById('Potongan'+e).value) ? document.getElementById('Potongan'+e).value : 0);
            var Value = ((document.getElementById('Value'+e).value) ? document.getElementById('Value'+e).value : 0);
            var PPN = ((document.getElementById('PPN'+e).value) ? document.getElementById('PPN'+e).value : 0);
            var Total = ((document.getElementById('Total'+e).value) ? document.getElementById('Total'+e).value : 0);
            
            var saldo = ((document.getElementById('saldo').value) ? document.getElementById('saldo').value : 0);
            var limit = ((document.getElementById('limit').value) ? document.getElementById('limit').value : 0);
            var dump = ((document.getElementById('dump').value) ? document.getElementById('dump').value : 0);
            var status = ((document.getElementById('status').value) ? document.getElementById('status').value : 0);

            Gross = ( parseInt(Qty) + parseInt(Bonus) ) * Harga;
            Diskon =( Harga * Qty ) * ( Diskon / 100 );
            Potongan = ( Bonus * Harga ) + Diskon;
            Value = ( Qty * Harga ) - Diskon;
            PPN = Value * ( 10 / 100 );
            Total = PPN + Value;
            
            document.getElementById('Gross'+e).value = Math.round(Gross);
            document.getElementById('Potongan'+e).value = Math.round(Potongan);
            document.getElementById('Value'+e).value = Math.round(Value);
            document.getElementById('PPN'+e).value = Math.round(PPN);
            document.getElementById('Total'+e).value = Math.round(Total);

            summary = parseInt(summary) + parseInt(Total);
        }

        limit = parseInt(saldo)-parseInt(summary);
        document.getElementById('limit').value = Math.round(limit);
        status = ((limit < 0) ? status = \"OrderLimit\" : \"Open\");
        document.getElementById('dump').value = 0;
        document.getElementById('status').value = status;
    }

    function saveData()
    {
        \$('#btnSave').text('Saving...'); //change button text
        \$('#btnSave').attr('disabled',true); //set button disable 
        var url = \"";
        // line 518
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/saveOrder\"; 

        var bucket = document.getElementById('bucket').value;
        var pelanggan = document.getElementById('pelangganMask').value;
            pelanggan = pelanggan.split(\"-\");
            pelanggan = pelanggan[0];
        var salesman = document.getElementById('salesmanMask').value;
            salesman = salesman.split(\"-\");
            salesman = salesman[0];
        var status = true;

        if (pelanggan == \"\") {
            alert(\"PERHATIAN! Data Pelanggan Masih Kosong.\");
            status=false;
        }
        else{
            document.getElementById('pelanggan').value = pelanggan;
        }

        if (salesman == \"\") {
            alert(\"PERHATIAN! Data Salesman Masih Kosong.\");
            status=false;
        }
        else{
            document.getElementById('salesman').value = salesman;
        }
        
        for (var i = 0; i <= bucket; i++) {
            var KodeProduk = document.getElementById('KodeProduk'+i).value;
            var Qty = document.getElementById('Qty'+i).value;            
            var disc = document.getElementById('Diskon'+i).value;
            var maxdisc = document.getElementById('maxDiskon'+i).value;
            var Harga = document.getElementById('Harga'+i).value;
            console.log(disc);
            console.log(maxdisc);            

            if (KodeProduk == \"\" || Qty == \"\" || Harga == \"\") 
            {
                alert(\"PERHATIAN! Data Barang Belum Lengkap. Hapus Baris Jika Tidak Diperlukan.\");
                status=false;
            } 

            if (parseInt(disc) > maxdisc) {
                alert(\"PERHATIAN! Diskon untuk \"+KodeProduk+\" tidak boleh melebihi \"+maxdisc+\"%.\");
                \$('#Diskon'+i).val(maxdisc);
                status=false;
            }
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
                    if (data.status == false) {
                        alert(\"PERHATIAN! Data Pelanggan & Salesman Harus Sesuai Dengan List.\");
                    }
                    else{
                        window.location = \"";
        // line 579
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listOrder\"; 
                    }
                    \$('#btnSave').text('Save'); //change button text
                    \$('#btnSave').attr('disabled',false); //set button enable 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"PERHATIAN! Save Data Order GAGAL.\");
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
        return "createOrder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 579,  590 => 518,  504 => 435,  435 => 369,  389 => 326,  360 => 300,  337 => 280,  259 => 205,  228 => 177,  200 => 152,  188 => 142,  185 => 141,  77 => 36,  69 => 31,  64 => 29,  45 => 13,  32 => 2,  27 => 1,);
    }
}
