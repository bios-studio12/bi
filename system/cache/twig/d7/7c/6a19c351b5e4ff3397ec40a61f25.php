<?php

/* formkinerja.html */
class __TwigTemplate_d77c6a19c351b5e4ff3397ec40a61f25 extends Twig_Template
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
        $this->env->loadTemplate("navigation.html")->display($context);
        // line 2
        echo "<div id=\"page-wrapper\">
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">FORM ANALISA KINERJA SISTEM IRIGASI</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
    <form role=\"form\" method=\"post\" id=\"myForm\">
        
            <table style=\"padding: 1px; width: 100%; border: solid 0px #000000; font-size: 9pt; \">
                <input type=\"hidden\" value=\"\" id=\"id\"/>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Nomenklatur   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"namaBangunan\" id=\"namaBangunan\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "namaBangunan"), "html", null, true);
        echo "\" size=\"40\" > </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Koordinat GPS   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"koordinat\" id=\"koordinat\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "koordinat"), "html", null, true);
        echo "\"  size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Desa   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"desa\" id=\"desa\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "desa"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Kecamatan   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"kecamatan\" id=\"kecamatan\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "kecamatan"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Kondisi   </td>
                        <td style=\"width: 50%; text-align: left;\">: <input type=\"text\" name=\"kondisi\" id=\"kondisi\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "kondisi"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Fungsi  </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"fungsi\" id=\"fungsi\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "fungsi"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Nilai  </td>
                        <td style=\"width: 50%; text-align: left;\">: <input name=\"nilai\" id=\"nilai\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "nilai"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style=\"width: 50%; text-align: left;\">Foto   </td>
                        <td style=\"width: 50%; text-align: left;\">   <input name=\"foto\" id=\"foto\" type=\"file\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kinerja"]) ? $context["kinerja"] : null), "foto"), "html", null, true);
        echo "\" size=\"40\"> </td>
                    </tr>
            </table>
            <!-- /.Penduduk -->

    
            <hr>
            <button type=\"button\" id=\"btnAdd\" onclick=\"addData()\" class=\"btn btn-primary \" >Add</button>
            <button type=\"button\" id=\"btnUpdate\" onclick=\"updateData()\" class=\"btn btn-success\">Update</button>
    </form>
</div>
<!-- /#page-wrapper -->
";
    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        // line 63
        echo "
    <script>

      \$(document).ready(function() { 

        \$('.datepicker').datepicker({
                autoclose: true,
                format: \"yyyy-mm-dd\",
                todayHighlight: true,
                orientation: \"top auto\",
                todayBtn: true,
                todayHighlight: true,  
            });

        var show = document.getElementById('namaBangunan').value;

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
        // line 98
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/kinerja/addData\";
        var namaBangunan = document.getElementById('namaBangunan').value;
        
        var formdata = new FormData();      
        // append tipe file
        var foto = \$('#foto')[0].files[0];
        formdata.append('foto', foto);

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

                    if (data.status == true) { 
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/kinerja/listkinerja\";
                        
                    }else{
                        alert(\"Duplikat Kode!!, Cek Kembali Kode per Data\"); 
                        window.location = \"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/kinerja/formkinerja\";
                    }
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
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/kinerja/updateData\";

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
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/kinerja/listkinerja\";
                        
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
        return "formkinerja.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 170,  225 => 157,  196 => 131,  189 => 127,  157 => 98,  120 => 63,  117 => 62,  100 => 48,  91 => 42,  84 => 38,  77 => 34,  70 => 30,  63 => 26,  56 => 22,  49 => 18,  31 => 2,  27 => 1,);
    }
}
