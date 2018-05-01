<?php

/* BangkimDesa.html */
class __TwigTemplate_bcce00503f76db2f64fc07ade55f9153 extends Twig_Template
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
            <h1 class=\"page-header\">Bangkim Desa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\" style=\"margin-bottom: 10px\">
        <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable 
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
\t\t\t\t\t\t\t\t<tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>Topan SGk</th>
                                        <th>Jalan Otista No 190</th>
                                        <th>081321644408</th>
                                        <th><a class=\"btn btn-sm btn-primary\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"updateData()\"><i class=\"fa fa-pencil\"></i> Edit</a>
\t\t\t\t  <a class=\"btn btn-sm btn-danger\" href=\"javascript:void(0)\" title=\"Hapus\" onclick=\"deleteData()\"><i class=\"fa fa-trash\"></i> Delete</a></th>
                                    </tr>
                                </tbody>
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
                                <input type=\"hidden\" value=\"\" name=\"id\" id=\"id\" /> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama</label>
                                    <input class=\"form-control\" name=\"Nama\" id=\"Nama\" placeholder=\"ex: \">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Alamat</label>
                                    <input class=\"form-control\" name=\"Alamat\" id=\"Alamat\" placeholder=\"ex: \">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">No Telepon</label>
                                    <input class=\"form-control\" name=\"Tlpn\" id=\"Tlpn\" placeholder=\"ex: \">
                                    <span class=\"help-block\"></span>
                                </div>
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

    // line 95
    public function block_js($context, array $blocks = array())
    {
        // line 96
        echo "<script>
    var saveMethod;
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            \"processing\": true,//Feature control the processing indicator.
            //\"serverSide\": true, //Feature control DataTables' server-side processing mode.
            //\"order\": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            //\"ajax\": {
            //    \"url\": \"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/listBangkimDesa\",
            //    \"type\": \"POST\"
            //},
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
    \$(\"input\").change(function(){
        \$(this).parent().parent().removeClass('has-error');
        \$(this).next().empty();
    });
    \$(\"textarea\").change(function(){
        \$(this).parent().parent().removeClass('has-error');
        \$(this).next().empty();
    });
    //\$(\"select\").change(function(){
     //   \$(this).parent().parent().removeClass('has-error');
    //    \$(this).next().empty();
    //});
    });

    function reloadTable()
    {
        tabel.ajax.reload(null,false);
    }

    function addData()
    {
        saveMethod = 'add';   
        document.getElementById('id').value = '';     
        \$('#modal_form').modal('show'); // show bootstrap modal
        \$('.modal-title').text('Pabrik Form Input'); // Set Title to Bootstrap modal title
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
     
                \$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                \$('.modal-title').text('Pabrik Form Update'); // Set title to Bootstrap modal title

    }

    function deleteData(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            
                    reloadTable();
              

        }
    }

    function saveData()
    {
        \$('#btnSave').text('Saving...'); //change button text
        \$('#btnSave').attr('disabled',true); //set button disable 
        var url;

        
    }

</script>
    ";
    }

    public function getTemplateName()
    {
        return "BangkimDesa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 107,  130 => 96,  127 => 95,  32 => 2,  27 => 1,);
    }
}
