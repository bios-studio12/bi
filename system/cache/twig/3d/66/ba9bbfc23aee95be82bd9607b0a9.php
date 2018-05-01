<?php

/* formBerita.html */
class __TwigTemplate_3d66ba9bbfc23aee95be82bd9607b0a9 extends Twig_Template
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
  <div class=\"content mt-3\">
            <div class=\"animated fadeIn\">


                <div class=\"row\">

                  <div class=\"col-lg-12\">
                    <div class=\"card\">
                      <div class=\"card-header\">
                        <strong>Form </strong> Berita
                      </div>
                      <div class=\"card-body card-block\">
                        <form role=\"form\" method=\"post\" id=\"myForm\">
                          <div class=\"row form-group\">
                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kode Berita</label></div>
                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"kodeBerita\" name=\"kodeBerita\" class=\"form-control\"></div>
                          </div>
                          <div class=\"row form-group\">
                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Judul</label></div>
                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"judul\" name=\"judul\" class=\"form-control\"></div>
                          </div>
                          <div class=\"row form-group\">
                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Tanggal</label></div>
                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"tanggal\" name=\"tanggal\" class=\"form-control datepicker\"></div>
                          </div>
                          <div class=\"row form-group\">
                            <div class=\"col col-md-3\"><label for=\"textarea-input\" class=\" form-control-label\">Sub Deskripsi</label></div>
                            <div class=\"col-12 col-md-9\"><textarea name=\"subDeskripsi\" id=\"subDeskripsi\" rows=\"9\" placeholder=\"Content...\" class=\"form-control\"></textarea></div>
                          </div>
                          <div class=\"row form-group\">
                            <div class=\"col col-md-3\"><label for=\"textarea-input\" class=\" form-control-label\">Deskripsi</label></div>
                            <div class=\"col-12 col-md-9\"><textarea name=\"deskripsi\" id=\"deskripsi\" rows=\"9\" placeholder=\"Content...\" class=\"form-control\"></textarea></div>
                          </div>
                          <div class=\"row form-group\">
                            <div class=\"col col-md-3\"><label for=\"file-input\" class=\" form-control-label\">Foto</label></div>
                            <div class=\"col-12 col-md-9\"><input type=\"file\" id=\"file\" name=\"file\" class=\"form-control-file\"></div>
                          </div>
                          <div class=\"card-footer\">
                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"btnAdd\" onclick=\"addData()\">
                          <i class=\"fa fa-dot-circle-o\"></i> Submit
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fa fa-ban\"></i> Reset
                        </button>
                        </form>
                      </div>
                      
                      </div>
                    </div>
                  </div>


                </div>


            </div><!-- .animated -->
        </div><!-- .content -->



";
    }

    // line 65
    public function block_js($context, array $blocks = array())
    {
        // line 66
        echo "
    <script  type=\"text/javascript\">         

   \$(document).ready(function() { 

        \$('.datepicker').datepicker({
                autoclose: true,
                format: \"yyyy-mm-dd\",
                todayHighlight: true,
                orientation: \"top auto\",
                todayBtn: true,
                todayHighlight: true,  
            });
    });

    function addData()
    {
        \$('#btnAdd').text('Adding...'); //change button text
        \$('#btnAdd').attr('disabled',true); //set button disable 
        var status = true;
        var url = \"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Berita/addData\";
        
        var formdata = new FormData();      
        // append tipe file
        var file = \$('#file')[0].files[0];
        formdata.append('file', file);

        \$.each(\$('#myForm').serializeArray(), function(a, b){
            formdata.append(b.name, b.value);
        });
     
        var formData = new FormData(\$('#myForm')[0]);
        

    if (status==true) {
            // ajax adding data to database
            \$.ajax({
                url : url,
                type: \"POST\",
                data: formData,
                contentType: false,
                processData: false,
                dataType: \"JSON\",
                success: function(data)
                {
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Berita/listData\";
                  
                    \$('#btnAdd').text('Add'); //change button text
                    \$('#btnAdd').attr('disabled',false); //set button enable 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"Gagal Menyimpan\");
                    \$('#btnAdd').text('Add'); //change button text
                    \$('#btnAdd').attr('disabled',false); //set button enable 

                }
            });
        }
        else
        {
            \$('#btnAdd').text('Add'); //change button text
            \$('#btnAdd').attr('disabled',false); //set button enable 
        }
    }

    function updateData()
    {
        \$('#btnUpdate').text('Updating...'); //change button text
        \$('#btnUpdate').attr('disabled',true); //set button disable 
        var status = true;
        var url = \"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/PPA/updateData\";

    if (status==true) {
            // ajax adding data to database
            \$.ajax({
                url : url,
                type: \"POST\",
                data: \$('#myForm').serialize(),
                dataType: \"JSON\",
                success: function(data)
                {
                    if (data.status) {
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Ppa/listppa\";
                        
                    }
                    \$('#btnUpdate').text('Update'); //change button text
                    \$('#btnUpdate').attr('disabled',false); //set button enable 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"Gagal Menyimpan\");
                    \$('#btnUpdate').text('Update'); //change button text
                    \$('#btnUpdate').attr('disabled',false); //set button enable 

                }
            });
        }
        else
        {
            \$('#btnUpdate').text('Update'); //change button text
            \$('#btnUpdate').attr('disabled',false); //set button enable 
        }
    }  
            

    </script>
  

";
    }

    public function getTemplateName()
    {
        return "formBerita.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 151,  178 => 138,  149 => 112,  120 => 86,  98 => 66,  95 => 65,  30 => 2,  27 => 1,);
    }
}
