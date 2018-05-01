<?php

/* formProduk.html */
class __TwigTemplate_34e5d83a4468cc399524c482b5e9bc73 extends Twig_Template
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
                                    <h3 class=\"block-title\">Form Produk</h3>
                                </div>
                                <div class=\"block-content block-content-full bg-gray-lighter \">
                                      <form class=\"form-horizontal\"  method=\"post\" enctype=\"multipart/form-data\" id=\"myForm\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
        echo "\">
                                       <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kode Produk</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"kodeProduk\" name=\"kodeProduk\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kodeProduk"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kode Penerbit</label></div>
                                            <div class=\"col-12 col-md-9\">
                                                <select id=\"kodePenerbit\" name=\"kodePenerbit\" class=\"form-control\">
                                                
                                                ";
        // line 28
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["penerbit"]) ? $context["penerbit"] : null), 0, array(), "array"), "kodePenerbit")))) {
            echo " 
                                                <option value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["penerbit"]) ? $context["penerbit"] : null), 0, array(), "array"), "kodePenerbit"), "html", null, true);
            echo "\" class=\"itemRow\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["penerbit"]) ? $context["penerbit"] : null), 0, array(), "array"), "nama"), "html", null, true);
            echo "</option>
                                                ";
        } else {
            // line 31
            echo "                                                <option>--- Pilih ---</option>
                                                ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Datapenerbit"]) ? $context["Datapenerbit"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Datapenerbit"]) {
                // line 33
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Datapenerbit"]) ? $context["Datapenerbit"] : null), "kodePenerbit"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Datapenerbit"]) ? $context["Datapenerbit"] : null), "nama"), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Datapenerbit'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "                                                ";
        }
        // line 36
        echo "                                            </select>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kode Penulis</label></div>
                                            <div class=\"col-12 col-md-9\">
                                            <select id=\"kodePenulis\" name=\"kodePenulis\" class=\"form-control\">
                                               
                                                ";
        // line 44
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["penulis"]) ? $context["penulis"] : null), 0, array(), "array"), "kodePenulis")))) {
            echo " 
                                                <option value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["penulis"]) ? $context["penulis"] : null), 0, array(), "array"), "kodePenulis"), "html", null, true);
            echo "\" class=\"itemRow\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["penulis"]) ? $context["penulis"] : null), 0, array(), "array"), "namaPenulis"), "html", null, true);
            echo "</option>
                                                ";
        } else {
            // line 47
            echo "                                                <option>--- Pilih ---</option>
                                                ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Datapenulis"]) ? $context["Datapenulis"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Datapenulis"]) {
                // line 49
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Datapenulis"]) ? $context["Datapenulis"] : null), "kodePenulis"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Datapenulis"]) ? $context["Datapenulis"] : null), "namaPenulis"), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Datapenulis'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "                                                ";
        }
        // line 52
        echo "                                            </select>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kategori</label></div>
                                            <div class=\"col-12 col-md-9\">
                                            <select id=\"kategori\" name=\"kategori\" class=\"form-control\">
                                               
                                                ";
        // line 60
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), 0, array(), "array"), "kategori")))) {
            echo " 
                                                <option value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), 0, array(), "array"), "kategori"), "html", null, true);
            echo "\" class=\"itemRow\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), 0, array(), "array"), "kategori"), "html", null, true);
            echo "</option>
                                                ";
        } else {
            // line 63
            echo "                                                <option>--- Pilih ---</option>
                                                ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Datakategori"]) ? $context["Datakategori"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Datakategori"]) {
                // line 65
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Datakategori"]) ? $context["Datakategori"] : null), "kategori"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Datakategori"]) ? $context["Datakategori"] : null), "kategori"), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Datakategori'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 67
            echo "                                                ";
        }
        // line 68
        echo "                                            </select>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Tanggal</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"tanggal\" name=\"tanggal\" class=\"form-control datepicker\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tanggal"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Ukuran</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"ukuran\" name=\"ukuran\" class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ukuran"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Berat</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"berat\" name=\"berat\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "berat"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Tahun Terbit</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"tahunTerbit\" name=\"tahunTerbit\" class=\"form-control\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tahunTerbit"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Isi</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"isi\" name=\"isi\" class=\"form-control\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isi"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Stok</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"stok\" name=\"stok\" class=\"form-control \" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stok"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Harga</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"harga\" name=\"harga\" class=\"form-control\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "harga"), "html", null, true);
        echo "\" onchange=\"Disc()\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Diskon</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"diskon\" name=\"diskon\" class=\"form-control\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "diskon"), "html", null, true);
        echo "\" onchange=\"Disc()\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Total Harga</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"totalHarga\" name=\"totalHarga\" class=\"form-control\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "totalHarga"), "html", null, true);
        echo "\" readonly=\"\" style=\"background: #f9f9f9 ;\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Deskripsi</label></div>
                                            <div class=\"col-12 col-md-9\"><textarea id=\"deskripsi\" name=\"deskripsi\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deskripsi"), "html", null, true);
        echo "\" rows=\"9\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deskripsi"), "html", null, true);
        echo "</textarea></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Foto</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"file\" id=\"file\" name=\"file\" class=\"form-control\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "foto"), "html", null, true);
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

    // line 134
    public function block_js($context, array $blocks = array())
    {
        // line 135
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

        \$(\"#tahunTerbit\").datepicker( {
            format: \" yyyy\",
            viewMode: \"years\", 
            minViewMode: \"years\",
             orientation: 'auto top'
        });

        var show = document.getElementById('kodeProduk').value;

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

   function Disc() {
       var harga = (document.getElementById('harga').value ? document.getElementById('harga').value : 0);
       var diskon = document.getElementById('diskon').value;
       var total = 0;
       totalHarga = 0;

       total = (parseInt(harga) / 100) * parseInt(diskon) ;
       
       totalHarga = parseInt(harga) - total ;

       document.getElementById('totalHarga').value = totalHarga;
   }

    function addData()
    {
        \$('#btnAdd').text('Adding...'); //change button text
        \$('#btnAdd').attr('disabled',true); //set button disable 
        var status = true;
        var url = \"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/addData\";

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
        // line 213
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/showData\";
                  
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
        // line 239
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/updateData\";


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
                    if (data.status) {
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Produk/showData\";
                        
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
        return "formProduk.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 270,  398 => 239,  369 => 213,  341 => 188,  286 => 135,  283 => 134,  259 => 113,  250 => 109,  243 => 105,  236 => 101,  229 => 97,  222 => 93,  215 => 89,  208 => 85,  201 => 81,  194 => 77,  187 => 73,  180 => 68,  177 => 67,  166 => 65,  162 => 64,  159 => 63,  152 => 61,  148 => 60,  138 => 52,  135 => 51,  124 => 49,  120 => 48,  117 => 47,  110 => 45,  106 => 44,  96 => 36,  93 => 35,  82 => 33,  78 => 32,  75 => 31,  68 => 29,  64 => 28,  54 => 21,  48 => 18,  30 => 2,  27 => 1,);
    }
}
