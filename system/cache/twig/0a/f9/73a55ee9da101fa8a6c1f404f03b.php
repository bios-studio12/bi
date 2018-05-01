<?php

/* cuti.html */
class __TwigTemplate_0af973a55ee9da101fa8a6c1f404f03b extends Twig_Template
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
            <h1 class=\"page-header\">Master Pengajuan Cuti </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\" style=\"margin-bottom: 10px\">
            <button class=\"btn btn-success\" onclick=\"addData()\"><i class=\"fa fa-plus\"></i> Add Pengajuan Cuti</button>
        <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable cuti
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>NIP</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Tanggal Cuti Akhir</th>
                                        <th>Ambil Cuti</th>
                                        <th>Sisa Cuti</th>
                                        <th>Aksi</th>
                                        <th>cetak</th>
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
                            <form role=\"form\" method=\"post\" id=\"myForm\">
                                <input type=\"hidden\" value=\"\" name=\"ID\" id=\"ID\"/> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">NIP</label>
                                    <select id=\"NIP\" name=\"NIP\" class=\"selectpicker form-control\" data-live-search=\"true\">
                                        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Pegawai"]) ? $context["Pegawai"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Pegawai"]) {
            // line 66
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Pegawai"]) ? $context["Pegawai"] : null), "NIP"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Pegawai"]) ? $context["Pegawai"] : null), "TotalCuti"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Pegawai"]) ? $context["Pegawai"] : null), "NIP"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Pegawai'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "                                    </select>
                                    <span class=\"help-block\"></span>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Kode</label>
                                    <input class=\"form-control\" name=\"Kode\" id=\"Kode\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\" id=\"nip\">
                                    <label class=\"control-label\">Ambil Cuti</label>
                                    <input class=\"form-control\" name=\"AmbilCuti\" id=\"AmbilCuti\" placeholder=\"\" >
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal Cuti</label>
                                    <input class=\"form-control datepicker\" name=\"TglCuti\" id=\"TglCuti\" placeholder=\"\" onchange=\"tglCutiAkhir()\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal Cuti Akhir</label>
                                    <input class=\"form-control\" name=\"TglCutiAkhir\" id=\"TglCutiAkhir\" placeholder=\"\" readonly=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <!--<div class=\"form-group\">
                                    <label class=\"control-label\">Jumlah Cuti</label>
                                    <input class=\"form-control\" name=\"JumlahCuti\" id=\"JumlahCuti\" placeholder=\"\" readonly=\"\">
                                    <span class=\"help-block\"></span>
                                </div>-->
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Sisa Cuti</label>
                                    <input class=\"form-control\" name=\"SisaCuti\" id=\"SisaCuti\" placeholder=\"\" readonly=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\" id=\"jumlahcuti\">
                                    <!--<label class=\"control-label\">Jumlah Cuti</label>
                                    <input class=\"form-control\" name=\"JumlahCuti\" id=\"JumlahCuti\" placeholder=\"\" readonly=\"\">
                                    <span class=\"help-block\"></span>-->
                                </div>
                                <div class=\"form-group\" id=\"sisacuti\">
                                </div>
                                <div class=\"form-group\" id=\"totalcuti\">
                                </div>
                            </form>

            </div>
            <div class=\"modal-footer\">
                <input type=\"hidden\" name=\"bucket\" id=\"bucket\" >
                <button type=\"button\" id=\"btnSave\" onclick=\"saveData()\" class=\"btn btn-primary\">Save</button>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

";
    }

    // line 125
    public function block_js($context, array $blocks = array())
    {
        // line 126
        echo "<script>
    var saveMethod;
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            \"processing\": true, //Feature control the processing indicator.
            // \"serverSide\": true, //Feature control DataTables' server-side processing mode.
            // \"order\": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/cuti/listData\",
                \"type\": \"POST\"
            },
                //Set column definition initialisation properties.
                 \"columnDefs\": [
            { 
                \"targets\": [ -1 ], //last column
                \"orderable\": false, //set not orderable
            },
                 ],
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
            //set input/textarea/select event when change value, remove class error and remove text help block 
    // \$(\"input\").change(function(){
    //     \$(this).parent().parent().removeClass('has-error');
    //     \$(this).next().empty();
    // });
    // \$(\"textarea\").change(function(){
    //     \$(this).parent().parent().removeClass('has-error');
    //     \$(this).next().empty();
    // });
    //\$(\"select\").change(function(){
     //   \$(this).parent().parent().removeClass('has-error');
    //    \$(this).next().empty();
    //});

    \$('.datepicker').datepicker({
        autoclose: true,
        format: \"yyyy-mm-dd\",
        todayHighlight: true,
        orientation: \"top auto\",
        todayBtn: true,
        todayHighlight: true,  
    });

    });

    function reloadTable()
    {
        tabel.ajax.reload(null,false);
    }

    function tglCutiAkhir(){
        var alldates = [];
        var a = parseInt(document.getElementById(\"AmbilCuti\").value|0);
        var date = new Date(document.getElementById(\"TglCuti\").value);
        alldates.push(new Date(date.setDate(date.getDate() + parseInt(a))));
        var dateFormated = date.toISOString().substr(0,10);

        document.getElementById(\"TglCutiAkhir\").value = dateFormated; 
    }

    function cetakCuti(kode) {
        \$.redirect(\"";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/cuti/cetakCuti\",
            {
                no: kode,
            },
            \"POST\", \"_blank\");
        setTimeout(reloadTable, 3000);

    }

    // function getNIP(){
    //     \$('#left').remove();
    //     \$('#right').remove();
    //     var nip =document.getElementById('NIP').value;
           
    //     \$.ajax({
    //         url : \"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/cuti/getNIP\",
    //         type: \"POST\",
    //         data:{nip:nip},
    //         dataType: \"JSON\",
    //         success: function(data)
    //         {   
    //             if (data)
    //             {
    //                 var x = 1;
    //                 var i = 0;
    //                 var noBPB = 0;
    //                 for(i  in data)
    //                 {  
    //                     \$('#sisacuti').append(\$('<div id=\"right\"><label class=\"control-label\">Sisa Cuti</label><input type=\"text\" class=\"form-control\" name=\"SisaCuti\" id=\"SisaCuti\" placeholder=\"\" readonly=\"\" value=\"' + data[i].SisaCuti + '\">'));
    //                     \$('#totalcuti').append(\$('<div id=\"left\"><label class=\"control-label\">Total Cuti</label><input type=\"text\" class=\"form-control\" name=\"TotalCuti\" id=\"TotalCuti\" placeholder=\"\" readonly=\"\" value=\"' + data[i].TotalCuti + '\">'));
    //                     \$('#jumlahcuti').append(\$('<div id=\"left\"><label class=\"control-label\">jml Cuti</label><input type=\"text\" class=\"form-control\" name=\"JumlahCuti\" id=\"JumlahCuti\" placeholder=\"\" readonly=\"\" value=\"' + data[i].JumlahCuti + '\">'));
                            
    //                     x++;
    //                 }               
    //                 noBPB += 1; 
    //                 \$('#bucket').val(i);
    //             }      
    //         },
    //         error: function (jqXHR, textStatus, errorThrown)
    //         {
    //             alert('Error get data from ajax');
    //         }
    //     });   
    // }

    // function hasilCuti()
    // {
    //     var tot = 0;
    //     var a = document.getElementById('NIP').value;
    //     var split = a.split('-');
    //     var a = split[1];
    //     console.log(a);
    //     var b = document.getElementById('AmbilCuti').value;
    //     var c = (document.getElementById('SisaCuti').value)?document.getElementById('SisaCuti').value:0;

    //     // if(c == 0)
    //     // {
    //         tot = parseInt(a) - parseInt(b);
    //     // }else{
    //     //     tot = parseInt(c) - parseInt(b);
    //     // }
        

    //     document.getElementById('JumlahCuti').value = a;
    //     document.getElementById('SisaCuti').value = tot;  
    // }

    function addData()
    {
        saveMethod = 'add';  
        document.getElementById('ID').value = '';      
        \$('#modal_form').modal('show'); // show bootstrap modal
        \$('.modal-title').text('Area Form Input'); // Set Title to Bootstrap modal title
        \$('#myForm')[0].reset(); // reset form on modals
        \$('.selectpicker').selectpicker('val', '');
        \$('.help-block').empty(); // clear error string
        \$('.form-group').removeClass('has-error'); // clear error class
    }

    function updateData(id)
    {
        saveMethod = 'update';
        \$('#myForm')[0].reset(); // reset form on modals
        \$('.form-group').removeClass('has-error'); // clear error class
        \$('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        \$.ajax({
            url : \"";
        // line 304
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/cuti/getData/\" + id,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {

                \$('[name=\"ID\"]').val(data.ID);
                \$('[name=\"NIP\"]').val(data.NIP);console.log(data.NIP);
                \$('[name=\"Kode\"]').val(data.Kode);
                \$('[name=\"TglCuti\"]').val(data.TglCuti);
                \$('[name=\"TglCutiAkhir\"]').val(data.TglCutiAkhir);
                \$('[name=\"AmbilCuti\"]').val(data.AmbilCuti);
                // \$('[name=\"JumlahCuti\"]').val(data.JumlahCuti);
                \$('[name=\"SisaCuti\"]').val(data.SisaCuti);
                \$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                \$('.modal-title').text('Pengajuan Cuti Form Update'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function deleteData(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 335
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/cuti/deleteData/\" + id,
                type: \"POST\",
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

    function saveData()
    {
        \$('#btnSave').text('Saving...'); //change button text
        \$('#btnSave').attr('disabled',true); //set button disable 
        var url;

        if(saveMethod == 'add') {
            url = \"";
        // line 358
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/cuti/addData\";
        } else {
            url = \"";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/cuti/updateData\";
        }

        // ajax adding data to database
        \$.ajax({
            url : url,
            type: \"POST\",
            data: \$('#myForm').serialize(),
            dataType: \"JSON\",
            success: function(data)
            {
                if(data.status) //if success close modal and reload ajax table
                {
                    console.log(data.status);
                    \$('#modal_form').modal('hide');
                    reloadTable();
                }
                else
                {
                for (var i = 0; i < data.inputerror.length; i++) 
                    {
                    \$('[name=\"'+data.inputerror[i]+'\"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    \$('[name=\"'+data.inputerror[i]+'\"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }

                \$('#btnSave').text('save'); //change button text
                \$('#btnSave').attr('disabled',false); //set button enable 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
                \$('#btnSave').text('save'); //change button text
                \$('#btnSave').attr('disabled',false); //set button enable 

            }
        });
    }

</script>
    ";
    }

    public function getTemplateName()
    {
        return "cuti.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 360,  425 => 358,  399 => 335,  365 => 304,  289 => 231,  271 => 216,  189 => 137,  176 => 126,  173 => 125,  114 => 68,  101 => 66,  97 => 65,  32 => 2,  27 => 1,);
    }
}
