<?php

/* admin/role.html */
class __TwigTemplate_26da9063d41cd983365892a380b6f2c1 extends Twig_Template
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
            <h1 class=\"page-header\">Role Management</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\" style=\"margin-bottom: 10px\">
            <button class=\"btn btn-success\" onclick=\"addData()\"><i class=\"fa fa-plus\"></i> Add Role</button>
        <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable Role
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Role</th>
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
                                <input type=\"hidden\" value=\"\" name=\"id\" id=\"id\" /> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Role</label>
                                    <input class=\"form-control\" name=\"Role\" id=\"Role\" placeholder=\"\">
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

    // line 74
    public function block_js($context, array $blocks = array())
    {
        // line 75
        echo "<script>
    var saveMethod;
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            \"processing\": true, //Feature control the processing indicator.
            //\"serverSide\": true, //Feature control DataTables' server-side processing mode.
            //\"order\": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "role/listData\",
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
        \$('.modal-title').text('Role Form Input'); // Set Title to Bootstrap modal title
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
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "role/getData/\" + id,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {

                \$('[name=\"id\"]').val(data.id);
                \$('[name=\"Role\"]').val(data.Role);
                \$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                \$('.modal-title').text('Role Form Update'); // Set title to Bootstrap modal title

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
        // line 190
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "role/deleteData/\" + id,
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
        // line 213
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "role/addData\";
        } else {
            url = \"";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "role/updateData\";
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
                alert(\"Error Adding / Updating Data\");
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
        return "admin/role.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 215,  258 => 213,  232 => 190,  204 => 165,  122 => 86,  109 => 75,  106 => 74,  32 => 2,  27 => 1,);
    }
}
