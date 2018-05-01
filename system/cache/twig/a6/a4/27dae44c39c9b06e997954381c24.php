<?php

/* listProduk.html */
class __TwigTemplate_a6a427dae44c39c9b06e997954381c24 extends Twig_Template
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
        // line 2
        echo "
    <div class=\"block\">
            <div class=\"block-header\">
                <h3 class=\"block-title col-lg-6\" style=\"text-align: left;\">
                    List Produk
                </h3>
                <span class=\"col-lg-6\" style=\"text-align: right;\">
                  <a class=\"btn btn-default btn-rounded btn-condensed btn-sm\" data-toggle=\"tooltip\" title=\"Add Color\" href=\"<?=base_url();?>account/color-add\"><span title=\"Add Color\" class=\"fa fa-plus\"></span></a>
                </span>
            </div>
            <div class=\"block-content\">
                <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Produk</th>
                            <th>Kode Penerbit</th>
                            <th>Kode Penuli</th>
                            <th>ISBN</th>
                            <th>Nama Buku</th>
                            <th>Tanggal</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th>Isi</th>
                            <th>Ukuran</th>
                            <th>Berat</th>
                            <th>Deskripsi</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Total Harga</th>
                            <th>Foto</th>
                            <th>Foto Besar</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>


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
                                <input type=\"hidden\" value=\"\" name=\"id\" id=\"id\"/> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Kode Buku</label>
                                    <input class=\"form-control\" name=\"kodePenulis\" id=\"kodePenulis\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Status</label>
                                    <select id=\"status\" name=\"status\" class=\"selectpicker form-control\" data-live-search=\"true\">
                                            <option>--- Pilih ---</option>
                                            <option value=\"Best Seller\">Best Seller</option>
                                            <option value=\"New Book\">New Book</option>
                                    </select>
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

    // line 82
    public function block_js($context, array $blocks = array())
    {
        // line 83
        echo "<script>
    var saveMethod;
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({
            \"processing\": true, //Feature control the processing indicator.
            // \"serverSide\": true, //Feature control DataTables' server-side processing mode.
            // \"ordering\": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/listData\",
                \"type\": \"POST\"
            }
 
            });
        // Tabel Penduduk

   
    
        });



    function deleteData(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/deleteData/\" + id,
                type: \"POST\",
                dataType: \"JSON\",
                success: function(data)
                {
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }

    function reloadTable()
    {
        tabel.ajax.reload(null,false);
    }


    function getData(id)
    {
        saveMethod = 'update';
        \$('#myForm')[0].reset(); // reset form on modals
        \$('.form-group').removeClass('has-error'); // clear error class
        \$('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        \$.ajax({
            url : \"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/getData/\" + id,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                \$('[name=\"kodePenulis\"]').val(data.kodePenulis).attr('readonly',true);
                \$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                \$('.modal-title').text('Form Status'); // Set title to Bootstrap modal title
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function saveData()
    {
        \$('#btnSave').text('Saving...'); //change button text
        \$('#btnSave').attr('disabled',true); //set button disable 
        var url;
        var status = true;


        if(saveMethod == 'add') {
            url = \"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/addData\";
        } else {
            url = \"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/statusData\";
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
                if(data.status) //if success close modal and reload ajax table
                {
                    \$('#modal_form').modal('hide');
                    \$('#add').attr('disabled',true);
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
        return "listProduk.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 170,  211 => 168,  183 => 143,  149 => 112,  127 => 93,  115 => 83,  112 => 82,  30 => 2,  27 => 1,);
    }
}
