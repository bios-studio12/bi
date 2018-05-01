<?php

/* formPenerbit.html */
class __TwigTemplate_d1f8bbc9bbf6feb6b5fad8b28d1c5c8f extends Twig_Template
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
    <div class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <!-- Main Dashboard Chart -->
                            <div class=\"block\">
                                <div class=\"block-header\">
                                    <ul class=\"block-options\">
                                        <li>
                                            <button type=\"button\" data-toggle=\"block-option\" data-action=\"refresh_toggle\" data-action-mode=\"demo\"><i class=\"si si-refresh\"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class=\"block-title\">Form Penerbit</h3>
                                </div>
                                <div class=\"block-content block-content-full bg-gray-lighter \">
                                      <form class=\"form-horizontal\"  method=\"post\" enctype=\"multipart/form-data\" id=\"myForm\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
        echo "\">
                                       <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kode Penerbit</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"kodePenerbit\" name=\"kodePenerbit\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kodePenerbit"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kota</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"kota\" name=\"kota\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kota"), "html", null, true);
        echo "\"></div>
                                        </div><div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Nama</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"nama\" name=\"nama\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nama"), "html", null, true);
        echo "\"></div>
                                        </div>
                                       <div class=\"form-group\">
                                            <div class=\"col-md-8 col-md-offset-2\">
                                                <button type=\"button\" id=\"btnAdd\" onclick=\"addData()\" class=\"btn btn-primary \" >Add</button>
                                                <button type=\"button\" id=\"btnUpdate\" onclick=\"updateData()\" class=\"btn btn-success\">Update</button>
                                                <button type=\"reset\" class=\"btn btn-danger \">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Main Dashboard Chart -->
                        </div>
                     
                    </div>
                  
                </div>

";
    }

    // line 49
    public function block_js($context, array $blocks = array())
    {
        // line 50
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

        var show = document.getElementById('kodePenerbit').value;

        if(show == \"\")
        {
            \$('#btnAdd').add();
            \$('#btnUpdate').remove();
        }
        else
        {
            \$('#btnAdd').remove();
            \$('#btnUpdate').add();
        }
    });

    function addData()
    {
        \$('#btnAdd').text('Adding...'); //change button text
        \$('#btnAdd').attr('disabled',true); //set button disable 
        var status = true;
        var url = \"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penerbit/addData\";

    if (status==true) {
            // ajax adding data to database
            \$.ajax({
                url : url,
                type: \"POST\",
                data: \$('#myForm').serialize(),
                dataType: \"JSON\",
                success: function(data)
                {
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penerbit/showData\";
                  
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
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penerbit/updateData\";

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
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Penerbit/showData\";
                        
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
        return "formPenerbit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 134,  173 => 121,  144 => 95,  129 => 83,  94 => 50,  91 => 49,  67 => 28,  61 => 25,  54 => 21,  48 => 18,  30 => 2,  27 => 1,);
    }
}
