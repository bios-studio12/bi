<?php

/* createDIH.html */
class __TwigTemplate_ebb73ed395367466feb731059d4ff573 extends Twig_Template
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
            <h1 class=\"page-header\">Buat DIH</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Form Buat DIH
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">No DIH</label>
                                    <input class=\"form-control\" name=\"NoDIH\" id=\"NoDIH\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["NoDIH"]) ? $context["NoDIH"] : null), "html", null, true);
        echo "\" readonly=\"\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal DIH</label>
                                    <input class=\"form-control\" type=\"text\" name=\"tgl_dih\" id=\"tgl_dih\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["tgl"]) ? $context["tgl"] : null), "html", null, true);
        echo "\" readonly=\"\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Penagih</label>
                                    <input class=\"form-control\" name=\"salesMask\" id=\"salesmanMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"sales\" id=\"salesman\">
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Order</label>
                                    <div class=\"table-responsive\">
                                        <table class=\"table\" id=\"table-barang\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>No Faktur</th>
                                                    <th>Tanggal Faktur</th>
                                                    <th>Kode Pelanggan</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Kode Salesman</th>
                                                    <th>Total</th>
                                                    <th>Saldo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><input type=\"text\" name=\"NoFaktur[0]\" id=\"NoFaktur0\" onkeyup=\"cariKode(0)\" onchange=\"getFaktur(0)\" autocomplete=\"off\"></td>
                                                    <td><input type=\"text\" name=\"tgl_faktur[0]\" id=\"tgl_faktur0\" readonly=\"\" style=\"background-color: #eee; width: 100px\"></td>
                                                    <td><input type=\"text\" name=\"KodePelanggan[0]\" id=\"KodePelanggan0\" readonly=\"\" style=\"background-color: #eee; width: 100px\"></td>
                                                    <td><input type=\"text\" name=\"NamaPelanggan[0]\" id=\"NamaPelanggan0\" readonly=\"\" style=\"background-color: #eee\"></td>
                                                    <td><input type=\"text\" name=\"KodeSalesman[0]\" id=\"KodeSalesman0\" readonly=\"\" style=\"background-color: #eee; width: 100px\"></td>
                                                    <td><input type=\"text\" name=\"Total[0]\" id=\"Total0\" readonly=\"\" style=\"background-color: #eee; width: 80px\"></td>
                                                    <td><input type=\"text\" name=\"Saldo[0]\" id=\"Saldo0\" readonly=\"\" style=\"background-color: #eee; width: 80px\"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <div align=\"center\">
                                        <input type=\"hidden\" name=\"bucket\" id=\"bucket\" value=\"0\">
                                        <a href=\"javascript:void(0)\" type=\"submit\" class=\"btn btn-success\" onclick=\"addRow(this.form);\">Tambah Baris</a>                    
                                        <a href=\"javascript:void(0)\" type=\"submit\" class=\"btn btn-danger\" id=\"removeRow\" onclick=\"removeRow();\">Hapus Baris</a>
                                    </div>
                                </div>
                                <hr>
                                <button type=\"button\" id=\"btnSave\" onclick=\"saveData()\" class=\"btn btn-primary\">Save</button>
                                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
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

    // line 101
    public function block_js($context, array $blocks = array())
    {
        // line 102
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
        \$('#removeRow').hide();
        \$('#myForm')[0].reset(); // reset form on modals
        \$('.selectpicker').selectpicker('val', '');

        \$.ajax({
            url : \"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/listSales\",
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

        // START AUTOCOMPLETE SALESMAN
        var salesmanSource = [];

        \$.ajax({
            url : \"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/listSales\",
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
                alert('Error get data from ajax');
            }
        });   

        \$('#salesmanMask').typeahead({
                    source: salesmanSource
                });
    // FINISH AUTOCOMPLETE SALESMAN  

    });

    // CARI KODE PRODUK/BARANG
    function cariKode(e){
        var Kode = document.getElementById('NoFaktur'+e).value;
        var fakturSource = [];

        \$.ajax({
            url : \"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/listFaktur\",
            type: \"POST\",
            data: {id:Kode},
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    fakturSource[i] = data[i].NoFaktur;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });   

        \$('#NoFaktur'+e).typeahead({
                    source: fakturSource
                });
    }

    function getFaktur(e){
        var Kode = document.getElementById('NoFaktur'+e).value;

        var bucket =document.getElementById('bucket').value; 
        var Status = true;
        if (bucket > 0) {
            for (var i = 0; i < bucket; i++) {
                var Kode2 = document.getElementById('NoFaktur'+i).value;
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
        // line 197
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/searchFaktur\",
                type: \"POST\",
                data:{id:Kode},
                dataType: \"JSON\",
                success: function(data)
                {   
                    if (data)
                    {
                        \$('#tgl_faktur'+e).val(data.TglFaktur);
                        \$('#KodePelanggan'+e).val(data.KodePelanggan);
                        \$('#NamaPelanggan'+e).val(data.Nama_Faktur);
                        \$('#KodeSalesman'+e).val(data.KodeSalesman);
                        \$('#Total'+e).val(data.Total);
                        \$('#Saldo'+e).val(data.Sisa);
                    }
                    else
                    {
                        \$('#tgl_faktur'+e).val(\"\");
                        \$('#KodePelanggan'+e).val(\"\");
                        \$('#NamaPelanggan'+e).val(\"\");
                        \$('#KodeSalesman'+e).val(\"\");
                        \$('#Total'+e).val(\"\");
                        \$('#Saldo'+e).val(\"\");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    
                }
            });
        }
        else
        {
            alert(\"Duplikat No Faktur!\");
            \$('#NoFaktur'+e).val(\"\");
        }
    }

    // TAMBAH HAPUS ROW BARANG
    var rowNum = 0;
    function addRow(frm)
    {
        \$('#removeRow').show();
        rowNum ++;

        \$('#table-barang').append(\$('<tr id=\"itemRow'+rowNum+'\"><td></td><td><input type=\"text\" name=\"NoFaktur['+rowNum+']\" id=\"NoFaktur'+rowNum+'\" onkeyup=\"cariKode('+rowNum+')\" onchange=\"getFaktur('+rowNum+')\"></td><td><input type=\"text\" name=\"tgl_faktur['+rowNum+']\" id=\"tgl_faktur'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width: 100px\"></td><td><input type=\"text\" name=\"KodePelanggan['+rowNum+']\" id=\"KodePelanggan'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width: 100px\"></td><td><input type=\"text\" name=\"NamaPelanggan['+rowNum+']\" id=\"NamaPelanggan'+rowNum+'\" readonly=\"\" style=\"background-color: #eee\"></td><td><input type=\"text\" name=\"KodeSalesman['+rowNum+']\" id=\"KodeSalesman'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width: 100px\"></td><td><input type=\"text\" name=\"Total['+rowNum+']\" id=\"Total'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width: 80px\"></td><td><input type=\"text\" name=\"Saldo['+rowNum+']\" id=\"Saldo'+rowNum+'\" readonly=\"\" style=\"background-color: #eee; width: 80px\"></td></tr>'));

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


    function saveData()
    {
        \$('#btnSave').text('Saving...'); //change button text
        \$('#btnSave').attr('disabled',true); //set button disable 
        var url = \"";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/addDIH\"; 
        var bucket = document.getElementById('bucket').value;
        var penagih = document.getElementById('salesmanMask').value;
            penagih = penagih.split(\"-\");
            penagih = penagih[0];
        var status = true;

        if (penagih == \"\") {
            alert(\"Silahkan isi data penagih\");
            status=false;
        }
        else{
            document.getElementById('salesman').value = penagih;
        }

        for (var i = 0; i <= bucket; i++) {
            var KodePelanggan = document.getElementById('KodePelanggan'+i).value;

            if (KodePelanggan == \"\") 
            {
                alert(\"PERHATIAN! Data Faktur Belum Lengkap. Hapus Baris Jika Tidak Diperlukan.\");
                status=false;
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
                    if (data.status == false) {
                        alert(\"PERHATIAN! Data Penagih Harus Sesuai Dengan List.\");
                    }
                    else{
                        window.location = \"";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/lunas/listDIH\"; 
                    }
                    \$('#btnSave').text('Save'); //change button text
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
        return "createDIH.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 300,  316 => 262,  248 => 197,  206 => 158,  174 => 129,  151 => 109,  142 => 102,  139 => 101,  70 => 35,  62 => 30,  32 => 2,  27 => 1,);
    }
}
