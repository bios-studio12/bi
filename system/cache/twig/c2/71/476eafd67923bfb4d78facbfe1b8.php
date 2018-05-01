<?php

/* formproses.html */
class __TwigTemplate_c271476eafd67923bfb4d78facbfe1b8 extends Twig_Template
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
            <h1 class=\"page-header\">Form Inputan</h1>
            <div id=\"map\" style=\"height: 300px; margin-bottom: 20px;\"></div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Form Data Penduduk
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">  
                            <input type=\"hidden\" value=\"\" id=\"id\"/>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama Pelanggan</label>
                                    <input class=\"form-control\" name=\"Nama_Pelanggan\" id=\"Nama_Pelanggan\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Nama_Pelanggan"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cara Bayar</label>
                                    <select id=\"Cara_Bayar\" name=\"Cara_Bayar\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Cara_Bayar"), "html", null, true);
        echo "\" class=\"selectpicker form-control\">
                                        <option>-- Select --</option>
                                        <option value=\"Cash\">Cash</option>
                                        <option value=\"Kredit\">Kredit</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Saldo Piutang</label>
                                    <input class=\"form-control\" name=\"Saldo_Piutang\" id=\"Saldo_Piutang\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Saldo_Piutang"), "html", null, true);
        echo "\" placeholder=\" 0\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Class</label>
                                    <input class=\"form-control\" name=\"Class\" id=\"Class\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Class"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>  
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Form Kawasan Layanan
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">  
                            <input type=\"hidden\" value=\"\" id=\"id\"/>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama Pelanggan</label>
                                    <input class=\"form-control\" name=\"Nama_Pelanggan\" id=\"Nama_Pelanggan\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Nama_Pelanggan"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cara Bayar</label>
                                    <select id=\"Cara_Bayar\" name=\"Cara_Bayar\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Cara_Bayar"), "html", null, true);
        echo "\" class=\"selectpicker form-control\">
                                        <option>-- Select --</option>
                                        <option value=\"Cash\">Cash</option>
                                        <option value=\"Kredit\">Kredit</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Saldo Piutang</label>
                                    <input class=\"form-control\" name=\"Saldo_Piutang\" id=\"Saldo_Piutang\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Saldo_Piutang"), "html", null, true);
        echo "\" placeholder=\" 0\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Class</label>
                                    <input class=\"form-control\" name=\"Class\" id=\"Class\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Class"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>   
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Form Rencana Kegiatan
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">  
                            <input type=\"hidden\" value=\"\" id=\"id\"/>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama Pelanggan</label>
                                    <input class=\"form-control\" name=\"Nama_Pelanggan\" id=\"Nama_Pelanggan\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Nama_Pelanggan"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cara Bayar</label>
                                    <select id=\"Cara_Bayar\" name=\"Cara_Bayar\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Cara_Bayar"), "html", null, true);
        echo "\" class=\"selectpicker form-control\">
                                        <option>-- Select --</option>
                                        <option value=\"Cash\">Cash</option>
                                        <option value=\"Kredit\">Kredit</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Saldo Piutang</label>
                                    <input class=\"form-control\" name=\"Saldo_Piutang\" id=\"Saldo_Piutang\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Saldo_Piutang"), "html", null, true);
        echo "\" placeholder=\" 0\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Class</label>
                                    <input class=\"form-control\" name=\"Class\" id=\"Class\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Class"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div> 
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Form Data Usulan
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <form role=\"form\" method=\"post\" id=\"myForm\">  
                            <input type=\"hidden\" value=\"\" id=\"id\"/>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama Pelanggan</label>
                                    <input class=\"form-control\" name=\"Nama_Pelanggan\" id=\"Nama_Pelanggan\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Nama_Pelanggan"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cara Bayar</label>
                                    <select id=\"Cara_Bayar\" name=\"Cara_Bayar\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Cara_Bayar"), "html", null, true);
        echo "\" class=\"selectpicker form-control\">
                                        <option>-- Select --</option>
                                        <option value=\"Cash\">Cash</option>
                                        <option value=\"Kredit\">Kredit</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Saldo Piutang</label>
                                    <input class=\"form-control\" name=\"Saldo_Piutang\" id=\"Saldo_Piutang\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Saldo_Piutang"), "html", null, true);
        echo "\" placeholder=\" 0\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Class</label>
                                    <input class=\"form-control\" name=\"Class\" id=\"Class\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "Class"), "html", null, true);
        echo "\" placeholder=\"\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <hr>
                                <button type=\"button\" id=\"btnAdd\" onclick=\"addData()\" class=\"btn btn-primary \" >Add</button>
                                <button type=\"button\" id=\"btnUpdate\" onclick=\"updateData()\" class=\"btn btn-success\">Update</button>    
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
";
    }

    // line 194
    public function block_js($context, array $blocks = array())
    {
        // line 195
        echo "  
<script type=\"text/javascript\">
   \$(document).ready(function(){
            var simpleMap = new GMaps({
            el: '#map',
            zoom: 8,
            center: {
            lat: -12.043333,
            lng: -77.028333,
            }
          });

            simpleMap.addMarker({
            lat: -12.043333,
            lng: -77.028333,
            title: 'Lima',
            infoWindow: {
              content: '<p>You clicked in this marker</p>'
            }
        });

});
</script>

";
    }

    public function getTemplateName()
    {
        return "formproses.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 195,  273 => 194,  252 => 176,  244 => 171,  232 => 162,  224 => 157,  196 => 132,  188 => 127,  176 => 118,  168 => 113,  140 => 88,  132 => 83,  120 => 74,  112 => 69,  84 => 44,  76 => 39,  64 => 30,  56 => 25,  31 => 2,  27 => 1,);
    }
}
