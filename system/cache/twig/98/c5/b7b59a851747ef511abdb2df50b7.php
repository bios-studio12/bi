<?php

/* pegawai.html */
class __TwigTemplate_98c5b7b59a851747ef511abdb2df50b7 extends Twig_Template
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
            <h1 class=\"page-header\">Master Pegawai </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\" style=\"margin-bottom: 10px\">
            <button class=\"btn btn-success\" onclick=\"addData()\"><i class=\"fa fa-plus\"></i> Add Pegawai</button>
        <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable Pegawai
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telpon</th>
                                        <th>Status</th>
                                        <th>Jabatan</th>
                                        <th>Agama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
                                        <th>NPWP</th>
                                        <th>Masa Kerja</th>
                                        <th>Total Cuti</th>
                                        <th>Aksi</th>
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
                                    <input class=\"form-control\" name=\"NIP\" id=\"NIP\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama</label>
                                    <input class=\"form-control\" name=\"Nama\" id=\"Nama\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Alamat</label>
                                    <input class=\"form-control\" name=\"Alamat\" id=\"Alamat\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">No Telpon</label>
                                    <input class=\"form-control\" name=\"NoTelpon\" id=\"NoTelpon\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Status</label>
                                    <select id=\"Status\" name=\"Status\" class=\"selectpicker form-control\" data-live-search=\"true\">
                                            <option value=\"Nikah\">Nikah</option>
                                            <option value=\"Belum Nikah\">Belum Nikah</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Jabatan</label>
                                    <input class=\"form-control\" name=\"Jabatan\" id=\"Jabatan\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Agama</label>
                                    <input class=\"form-control\" name=\"Agama\" id=\"Agama\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tanggal Lahir</label>
                                    <input class=\"form-control datepicker\" name=\"TglLahir\" id=\"TglLahir\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tempat Lahir</label>
                                    <input class=\"form-control\" name=\"TempatLahir\" id=\"TempatLahir\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">NPWP</label>
                                    <input class=\"form-control\" name=\"NPWP\" id=\"NPWP\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Masa Kerja</label>
                                    <input class=\"form-control\" name=\"MasaKerja\" id=\"MasaKerja\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <!-- <div class=\"form-group\">
                                    <label class=\"control-label\">Jumlah Cuti</label>
                                    <input class=\"form-control\" name=\"JumlahCuti\" id=\"JumlahCuti\" placeholder=\"\" type=\"hidden\">
                                    <span class=\"help-block\"></span>
                                </div>-->
                            </form>



            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"btnSave\" onclick=\"saveData()\" class=\"btn btn-primary\">Save</button>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

";
    }

    // line 146
    public function block_js($context, array $blocks = array())
    {
        // line 147
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
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/pegawai/listData\",
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
        // line 247
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/pegawai/getData/\" + id,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {

                \$('[name=\"ID\"]').val(data.ID);
                \$('[name=\"Nama\"]').val(data.Nama);
                \$('[name=\"Alamat\"]').val(data.Alamat);
                \$('[name=\"NIP\"]').val(data.NIP);
                \$('[name=\"NoTelpon\"]').val(data.NoTelpon);
                \$('[name=\"Status\"]').selectpicker('val', data.Status);
                \$('[name=\"Agama\"]').val(data.Agama);
                \$('[name=\"TempatLahir\"]').val(data.TempatLahir);
                \$('[name=\"Jabatan\"]').val(data.Jabatan);
                \$('[name=\"NPWP\"]').val(data.NPWP);
                \$('[name=\"TglLahir\"]').val(data.TglLahir);
                \$('[name=\"MasaKerja\"]').val(data.MasaKerja);
                \$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                \$('.modal-title').text('Pegawai Form Update'); // Set title to Bootstrap modal title

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
        // line 282
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/pegawai/deleteData/\" + id,
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
        // line 305
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/pegawai/addData\";
        } else {
            url = \"";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/pegawai/updateData\";
        }

        // var masaKerja = document.getElementById('MasaKerja').value;
        // var jumlahCuti = document.getElementById('JumlahCuti').value;

        // if(masaKerja > 12)
        // {
        //     jumlahCuti = 14;
        // }else if(masaKerja > 6 && masaKerja < 12)
        // {
        //     jumlahCuti = 6;
        // }else{
        //     jumlahCuti = 0;
        // }

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
        return "pegawai.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 307,  350 => 305,  324 => 282,  286 => 247,  194 => 158,  181 => 147,  178 => 146,  32 => 2,  27 => 1,);
    }
}
