<?php

/* formProduk.html */
class __TwigTemplate_a25af3764a1094354466e7a12ef0cb7a extends Twig_Template
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
                                                
                                                <option>--- Pilih ---</option>
                                                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["penerbit"]) ? $context["penerbit"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["penerbit"]) {
            // line 30
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["penerbit"]) ? $context["penerbit"] : null), "kodePenerbit"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["penerbit"]) ? $context["penerbit"] : null), "kodePenerbit") == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kodePenerbit"))) {
                echo " selected=\"\" ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["penerbit"]) ? $context["penerbit"] : null), "nama"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['penerbit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "                                            </select>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kode Penulis</label></div>
                                            <div class=\"col-12 col-md-9\">
                                            <select id=\"kodePenulis\" name=\"kodePenulis\" class=\"form-control\">
                                               
                       
                                                <option>--- Pilih ---</option>
                                                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["penulis"]) ? $context["penulis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["penulis"]) {
            // line 43
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["penulis"]) ? $context["penulis"] : null), "kodePenulis"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["penulis"]) ? $context["penulis"] : null), "kodePenulis") == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kodePenulis"))) {
                echo " selected=\"\" ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["penulis"]) ? $context["penulis"] : null), "namaPenulis"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['penulis'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "                                            </select>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Kategori</label></div>
                                            <div class=\"col-12 col-md-9\">
                                            <select id=\"kategori\" name=\"kategori\" class=\"form-control\">
                                            
                                                <option>--- Pilih ---</option>
                                                ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kategori"]) ? $context["kategori"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["kategori"]) {
            // line 55
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), "kategori"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), "kategori") == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kategori"))) {
                echo " selected=\"\" ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), "kategori"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kategori'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "                                            </select>
                                            </div>
                                        </div>

                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">ISBN</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"isbn\" name=\"isbn\" class=\"form-control\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isbn"), "html", null, true);
        echo "\"></div>
                                        </div>

                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Nama Buku</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"namaBuku\" name=\"namaBuku\" class=\"form-control\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "namaBuku"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Tanggal</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"tanggal\" name=\"tanggal\" class=\"form-control datepicker\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tanggal"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Ukuran</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"ukuran\" name=\"ukuran\" class=\"form-control\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ukuran"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Berat</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"berat\" name=\"berat\" class=\"form-control\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "berat"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Tahun Terbit</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"tahunTerbit\" name=\"tahunTerbit\" class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tahunTerbit"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Isi</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"isi\" name=\"isi\" class=\"form-control\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isi"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Stok</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"stok\" name=\"stok\" class=\"form-control \" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stok"), "html", null, true);
        echo "\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Harga</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"harga\" name=\"harga\" class=\"form-control\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "harga"), "html", null, true);
        echo "\" onchange=\"Disc()\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Diskon</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"diskon\" name=\"diskon\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "diskon"), "html", null, true);
        echo "\" onchange=\"Disc()\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Total Harga</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"totalHarga\" name=\"totalHarga\" class=\"form-control\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "totalHarga"), "html", null, true);
        echo "\" readonly=\"\" style=\"background: #f9f9f9 ;\"></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Deskripsi</label></div>
                                            <div class=\"col-12 col-md-9\"><textarea id=\"deskripsi\" name=\"deskripsi\" class=\"form-control\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deskripsi"), "html", null, true);
        echo "\" rows=\"9\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deskripsi"), "html", null, true);
        echo "</textarea></div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Foto</label></div>
                                            <div class=\"col-12 col-md-9\"><input type=\"file\" id=\"file\" name=\"file\" class=\"form-control\" value=\"";
        // line 112
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

    // line 133
    public function block_js($context, array $blocks = array())
    {
        // line 134
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
        // line 187
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
        // line 212
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
        // line 238
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
        // line 269
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
        return array (  413 => 269,  379 => 238,  350 => 212,  322 => 187,  267 => 134,  264 => 133,  240 => 112,  231 => 108,  224 => 104,  217 => 100,  210 => 96,  203 => 92,  196 => 88,  189 => 84,  182 => 80,  175 => 76,  168 => 72,  161 => 68,  153 => 63,  145 => 57,  130 => 55,  126 => 54,  115 => 45,  100 => 43,  96 => 42,  84 => 32,  69 => 30,  65 => 29,  54 => 21,  48 => 18,  30 => 2,  27 => 1,);
    }
}
