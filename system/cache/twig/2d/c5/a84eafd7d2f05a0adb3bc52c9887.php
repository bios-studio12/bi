<?php

/* retail.html */
class __TwigTemplate_2dc5a84eafd7d2f05a0adb3bc52c9887 extends Twig_Template
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
            <h1 class=\"page-header\">Master Retail</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\" style=\"margin-bottom: 10px\">
            <button class=\"btn btn-success\" onclick=\"addData()\"><i class=\"fa fa-plus\"></i> Add Retail</button>
        <button class=\"btn btn-default\" onclick=\"reloadTable()\"><i class=\"fa fa-refresh\"></i> Reload</button>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable Retail
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Cabang</th>
                                        <th>Area</th>
                                        <th>Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Kode Reps</th>
                                        <th>Kode</th>
                                        <th>Nama Faktur</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Contact Person</th>
                                        <th>Telp</th>
                                        <th>Limit Kredit</th>
                                        <th>TOP</th>
                                        <th>Cara Bayar</th>
                                        <th>Saldo Piutang</th>
                                        <th>Class 2</th>
                                        <th>Class</th>
                                        <th>Tipe 2</th>
                                        <th>Tipe</th>
                                        <th>Channel 2</th>
                                        <th>Channel</th>
                                        <th>Rayon 1</th>
                                        <!-- <th>Status Usulan Limit</th>
                                        <th>Usulan Limit Kredit</th>
                                        <th>History Update</th>
                                        <th>Tgl Usulan Limit</th>
                                        <th>Approval Limit Bm</th>
                                        <th>Approval Limit Pusat</th>
                                        <th>Status Usulan TOP</th>
                                        <th>Buka TOP</th>
                                        <th>Tgl Usulan TOP</th>
                                        <th>Approval TOP Bm</th>
                                        <th>Approval TOP Pusat</th>
                                        <th>Riwayat Bayar</th>
                                        <th>Dokumen Limit Top</th>
                                        <th>Kategori2</th>
                                        <th>Status</th>
                                        <th>Stat_No</th>
                                        <th>Cabang String</th>
                                        <th>Area String</th>
                                        <th>Pelanggan String</th> -->
                                        <th>Smsp</th>
                                        <th>Nama Reg</th>
                                        <th>Alamat Reg</th>
                                        <th>userid</th>
                                        <th>Password</th>
                                        <th>cek</th>
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
                            <form role=\"form\" method=\"post\" id=\"myForm\" enctype=\"multipart/form-data\">                    
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cabang</label>
                                    <input class=\"form-control\" name=\"cabangMask\" id=\"cabangMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"Cabang\" id=\"Cabang\">
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t<!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Area</label>
                                    <input class=\"form-control\" name=\"areaMask\" id=\"areaMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"Area\" id=\"Area\">  
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t<!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pelanggan</label>
                                    <input class=\"form-control\" name=\"pelangganMask\" id=\"pelangganMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"Pelanggan\" id=\"Pelanggan\"> 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t<!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama Pelanggan</label>
                                    <input class=\"form-control\" name=\"Nama_Pelanggan\" id=\"Nama_Pelanggan\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Kode Reps</label>
                                    <input class=\"form-control\" name=\"Kode_Reps\" id=\"Kode_Reps\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Kode</label>
                                    <input class=\"form-control\" name=\"Kode\" id=\"Kode\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama Faktur</label>
                                    <input class=\"form-control\" name=\"Nama_Faktur\" id=\"Nama_Faktur\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Alamat</label>
                                    <input class=\"form-control\" name=\"Alamat\" id=\"Alamat\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Kota</label>
                                    <input class=\"form-control\" name=\"Kota\" id=\"Kota\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Contact Person</label>
                                    <input class=\"form-control\" name=\"Contact_Person\" id=\"Contact_Person\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Telp</label>
                                    <input class=\"form-control\" name=\"Telp\" id=\"Telp\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Limit Kredit</label>
                                    <input class=\"form-control\" name=\"Limit_Kredit\" id=\"Limit_Kredit\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">TOP</label>
                                    <input class=\"form-control\" name=\"TOP\" id=\"TOP\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cara Bayar</label>
                                    <select id=\"Cara_Bayar\" name=\"Cara_Bayar\" class=\"selectpicker form-control\">
                                        <option value=\"Cash\">Cash</option>
                                        <option value=\"Kredit\">Kredit</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Saldo Piutang</label>
                                    <input class=\"form-control\" name=\"Saldo_piutang\" id=\"Saldo_piutang\" placeholder=\"ex: 0\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Class</label>
                                    <input class=\"form-control\" name=\"Class\" id=\"Class\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Class</label>
                                    <select id=\"Class_2\" name=\"Class_2\" class=\"selectpicker form-control\">
                                        <option value=\"A\">A</option>
                                        <option value=\"B\">B</option>
                                        <option value=\"C\">C</option>
                                        <option value=\"D\">D</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tipe 2</label>
                                    <input class=\"form-control\" name=\"tipePelangganMask\" id=\"tipePelangganMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"Tipe_2\" id=\"Tipe_2\">                                    
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tipe </label>
                                    <select id=\"Tipe\" name=\"Tipe\" class=\"selectpicker form-control\" data-live-search=\"true\">
                                        ";
        // line 210
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tipe_pelanggan"]) ? $context["Tipe_pelanggan"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Tipe_pelanggan"]) {
            // line 211
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Tipe_pelanggan"]) ? $context["Tipe_pelanggan"] : null), "Tipe"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Tipe_pelanggan"]) ? $context["Tipe_pelanggan"] : null), "Tipe"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tipe_pelanggan'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 213
        echo "                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Channel </label>
                                    <select id=\"Channel_2\" name=\"Channel_2\" class=\"selectpicker form-control\" data-live-search=\"true\">
                                        ";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Channel"]) ? $context["Channel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Channel"]) {
            // line 220
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Channel"]) ? $context["Channel"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Channel"]) ? $context["Channel"] : null), "Tipe"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Channel'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 222
        echo "                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Channel </label>
                                    <select id=\"Channel\" name=\"Channel\" class=\"selectpicker form-control\" data-live-search=\"true\">
                                        ";
        // line 228
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Channel"]) ? $context["Channel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Channel"]) {
            // line 229
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Channel"]) ? $context["Channel"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Channel"]) ? $context["Channel"] : null), "Tipe"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Channel'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 231
        echo "                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Rayon 1</label>
                                    <input class=\"form-control\" name=\"rayonMask\" id=\"rayonMask\">
                                    <input class=\"form-control\" type=\"hidden\" name=\"Rayon_1\" id=\"Rayon_1\">                                    
                                    <!-- <p class=\"help-block\">notifikasi disini...</p> -->
                                </div>
                                <!--<div class=\"form-group\">
                                    <label class=\"control-label\">Status Usulan Limit</label>
                                    <select id=\"Status_Usulan_Limit\" name=\"Status_Usulan_Limit\" class=\"selectpicker form-control\">
                                        <option value=\"Usulan\">Usulan</option>
                                        <option value=\"Disetujui\">Disetujui</option>
                                        <option value=\"Ditolak\">Ditolak</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Usulan Limit Kredit</label>
                                    <input class=\"form-control\" name=\"Usulan_Limit_Kredit\" id=\"Usulan_Limit_Kredit\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">History Update</label>
                                    <textarea  class=\"form-control\" name=\"History_Update\" id=\"History_Update\" placeholder=\"ex: Jakarta\"></textarea>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tgl Usulan Limit</label>
                                    <input class=\"form-control datepicker\" name=\"Tgl_Usulan_Limit\" id=\"Tgl_Usulan_Limit\" placeholder=\"ex: Date\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Approval Limit BM</label>
                                    <select id=\"Approval_Limit_Bm\" name=\"Approval_Limit_Bm\" class=\"selectpicker form-control\">
                                        <option value=\"Y\">Y</option>
                                        <option value=\"N\">N</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Approval Limit Pusat</label>
                                    <select id=\"Approval_Limit_Pusat\" name=\"Approval_Limit_Pusat\" class=\"selectpicker form-control\">
                                        <option value=\"Y\">Y</option>
                                        <option value=\"N\">N</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Status Usulan TOP</label>
                                    <select id=\"Status_Usulan_TOP\" name=\"Status_Usulan_TOP\" class=\"selectpicker form-control\">
                                        <option value=\"Usulan\">Usulan</option>
                                        <option value=\"Disetujui\">Disetujui</option>
                                        <option value=\"Ditolak\">Ditolak</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Buka TOP</label>
                                    <input class=\"form-control\" name=\"Buka_TOP\" id=\"Buka_TOP\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Tgl Usulan TOP</label>
                                    <input class=\"form-control datepicker\" name=\"Tgl_Usulan_TOP\" id=\"Tgl_Usulan_TOP\" placeholder=\"ex: Date\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Approval TOP Bm</label>
                                    <select id=\"Approval_TOP_Bm\" name=\"Approval_TOP_Bm\" class=\"selectpicker form-control\">
                                        <option value=\"Y\">Y</option>
                                        <option value=\"N\">N</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Approval TOP Pusat</label>
                                    <select id=\"Approval_TOP_Pusat\" name=\"Approval_TOP_Pusat\" class=\"selectpicker form-control\">
                                        <option value=\"Y\">Y</option>
                                        <option value=\"N\">N</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Riwayat Bayar</label>
                                    <textarea  class=\"form-control\" name=\"Riwayat_Bayar\" id=\"Riwayat_Bayar\" placeholder=\"ex: Jakarta\"></textarea>
                                    <span class=\"help-block\"></span>
                                </div>
                            
                                <div class=\"form-group\" id=\"photo-preview\">
                                    <label class=\"control-label col-md-3\">Photo</label>
                                    <div class=\"col-md-9\">
                                    (No photo)
                                    <span class=\"help-block\"></span>
                                </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\" id=\"label-photo\">Dokumen Limit TOP </label>
                                    <input class=\"form-control\" name=\"Dokumen_Limit_TOP\" id=\"Dokumen_Limit_TOP\" type=\"file\">
                                    <span class=\"help-block\"></span>
                                </div>                              
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Kategori 2</label>
                                    <select id=\"Kategori_2\" name=\"Kategori_2\" class=\"selectpicker form-control\">
                                        <option value=\"Reguler\">Reguler</option>
                                        <option value=\"RSUD\">RSUD</option>
                                        <option value=\"RS Swasta\">RS Swasta</option>
                                        <option value=\"Pemerintahan\">Pemerintahan</option>
                                        <option value=\"DINKES\">DINKES</option>
                                    </select>
                                    <span class=\"help-block\"></span>
                                </div>                                
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Status</label>
                                    <input class=\"form-control\" name=\"Status\" id=\"Status\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>                                
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Stat No</label>
                                    <input class=\"form-control\" name=\"Stat_No\" id=\"Stat_No\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>    -->                               
                                <div class=\"form-group\">
                                    <label class=\"control-label\">smsP</label>
                                    <input class=\"form-control\" name=\"smsP\" id=\"smsP\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>                                   
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nama Reg</label>
                                    <input class=\"form-control\" name=\"Nama_Reg\" id=\"Nama_Reg\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>                                    
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Alamat Reg</label>
                                    <input class=\"form-control\" name=\"Alamat_Reg\" id=\"Alamat_Reg\" placeholder=\"ex: \">
                                    <span class=\"help-block\"></span>
                                </div>                                   
                                <div class=\"form-group\">
                                    <label class=\"control-label\">userid</label>
                                    <input type=\"text\" class=\"form-control\" name=\"userid\" id=\"userid\" placeholder=\"ex: \">
                                    <span class=\"help-block\"></span>
                                </div>                                   
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Password</label>
                                    <input type=\"text\" class=\"form-control\" name=\"Password\" id=\"Password\" placeholder=\"ex: Jakarta\">
                                    <span class=\"help-block\"></span>
                                </div>                                                                    
                                <div class=\"form-group\">
                                    <label class=\"control-label\">cek</label>
                                    <input class=\"form-control\" name=\"cek\" id=\"cek\" placeholder=\"ex: Jakarta\">
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

    // line 397
    public function block_js($context, array $blocks = array())
    {
        // line 398
        echo "<script>
    var saveMethod;
    var tabel;
    var base_url = '";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "';
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            
        \"processing\": true, //Feature control the processing indicator.
        \"serverSide\": true, //Feature control DataTables' server-side processing mode.
        \"order\": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            \"ajax\": {
                \"url\": \"";
        // line 411
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/listData\",
                \"type\": \"POST\"
            },

            //Set column definition initialisation properties.
            \"columnDefs\": [
                { 
                    \"targets\": [ -1 ], //last column
                    \"orderable\": false, //set not orderable
                },
                { 
                    \"targets\": [ -2 ], //2 last column (photo)
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
        //datepicker
    \$('.datepicker').datepicker({
        autoclose: true,
        format: \"yyyy-mm-dd\",
        todayHighlight: true,
        orientation: \"top auto\",
        todayBtn: true,
        todayHighlight: true,  
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
    //    \$(this).parent().parent().removeClass('has-error');
    //    \$(this).next().empty();
    //});
\t
\t//\$('#removeRow').hide();
        \$('#myForm')[0].reset(); // reset form on modals
        //\$('.selectpicker').selectpicker('val', ''); 
\t
\t\t    // START AUTOCOMPLETE CABANG
        var cabangSource = [];

        \$.ajax({
            url : \"";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/listCabang\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    cabangSource[i] = data[i].Kode+\"-\"+data[i].Cabang;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data Cabang from ajax');
            }
        });   

        \$('#cabangMask').typeahead({
                    source: cabangSource,
                });
    // FINISH AUTOCOMPLETE CABANG
\t
\t// START AUTOCOMPLETE AREA
        var areaSource = [];

        \$.ajax({
            url : \"";
        // line 513
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/listArea\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    areaSource[i] = data[i].Kode+\"-\"+data[i].Area;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data Area from ajax');
            }
        });   

        \$('#areaMask').typeahead({
                    source: areaSource,
                });
    // FINISH AUTOCOMPLETE AREA

    // START AUTOCOMPLETE PELANGGAN
        var pelangganSource = [];

        \$.ajax({
            url : \"";
        // line 538
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/listPelanggan\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    pelangganSource[i] = data[i].Kode+\"-\"+data[i].Pelanggan;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data Pelanggan from ajax');
            }
        });   

        \$('#pelangganMask').typeahead({
                    source: pelangganSource,
                });
    // FINISH AUTOCOMPLETE PELANGGAN

    // START AUTOCOMPLETE TIPE PELANGGAN
        var tipe2Source = [];

        \$.ajax({
            url : \"";
        // line 563
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/listTipePelanggan\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    tipe2Source[i] = data[i].Tipe;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data Tipe 2 from ajax');
            }
        });   

        \$('#tipePelangganMask').typeahead({
                    source: tipe2Source,
                });
    // FINISH AUTOCOMPLETE PELANGGAN

    // START AUTOCOMPLETE RAYON 1
        var rayonSource = [];

        \$.ajax({
            url : \"";
        // line 588
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/listRayon\",
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {
                for (var i in data) {
                    rayonSource[i] = data[i].Kode+\"-\"+data[i].Rayon;
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data Rayon from ajax');
            }
        });   

        \$('#rayonMask').typeahead({
                    source: rayonSource,
                });
    // FINISH AUTOCOMPLETE RAYON 1
    });

    function reloadTable()
    {
        tabel.ajax.reload(null,false);
    }

    function addData()
    {
        saveMethod = 'add';   
        document.getElementById('Kode').value = '';      
        \$('#modal_form').modal('show'); // show bootstrap modal
        \$('.modal-title').text('Retail Form Input'); // Set Title to Bootstrap modal title
        \$('#myForm')[0].reset(); // reset form on modals
        \$('.selectpicker').selectpicker('val', '');
        \$('.help-block').empty(); // clear error string
        \$('.form-group').removeClass('has-error'); // clear error class
        \$('#photo-preview').hide(); // hide photo preview modal
        \$('#label-photo').text('Upload Photo'); // label photo upload
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
        // line 638
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/getData/\" + id,
            type: \"GET\",
            dataType: \"JSON\",
            success: function(data)
            {

                \$('[name=\"Cabang\"]').val(data.Cabang);
                \$('#Area').val(data.Area);
                \$('[name=\"Pelanggan\"]').val(data.Pelanggan);
                \$('[name=\"Nama_Pelanggan\"]').val(data.Nama_Pelanggan);
                \$('[name=\"Kode_Reps\"]').val(data.Kode_Reps);
                \$('[name=\"Kode\"]').val(data.Kode);
                \$('[name=\"Nama_Faktur\"]').val(data.Nama_Faktur);
                \$('[name=\"Alamat\"]').val(data.Alamat);
                \$('[name=\"Telp\"]').val(data.Telp);
                \$('[name=\"Kota\"]').val(data.Kota);
                \$('[name=\"Contact_Person\"]').val(data.Contact_Person);
                \$('[name=\"Limit_kredit\"]').val(data.Limit_kredit); 
                \$('[name=\"TOP\"]').val(data.TOP);
                \$('[name=\"Cara_Bayar\"]').selectpicker('val', data.Cara_Bayar);
                \$('[name=\"Saldo_Piutang\"]').val(data.Saldo_Piutang);
                \$('[name=\"Class_2\"]').selectpicker('val', data.Class_2);
                \$('[name=\"Class\"]').val(data.Class);
                \$('[name=\"Tipe_2\"]').selectpicker('val', data.Tipe_2);
                \$('[name=\"Tipe\"]').selectpicker('val', data.Tipe);
                \$('[name=\"Channel_2\"]').selectpicker('val', data.Channel_2);
                \$('[name=\"Channel\"]').selectpicker('val', data.Channel);
                \$('[name=\"Rayon_1\"]').selectpicker('val', data.Rayon_1);
                //\$('[name=\"Status_Usulan_Limit\"]').selectpicker('val', data.Status_Usulan_Limit);
                //\$('[name=\"Usulan_Limit_Kredit\"]').val(data.Usulan_Limit_Kredit);
                //\$('[name=\"History_Update\"]').val(data.History_Update);
                //\$('[name=\"Tgl_Usulan_Limit\"]').datepicker('update',data.Tgl_Usulan_Limit);
                //\$('[name=\"Approval_Limit_Bm\"]').selectpicker('val', data.Approval_Limit_Bm);
                //\$('[name=\"Approval_Limit_Pusat\"]').selectpicker('val', data.Approval_Limit_Pusat); 
                //\$('[name=\"Status_Usulan_TOP\"]').selectpicker('val', data.Status_Usulan_TOP);
                //\$('[name=\"Buka_TOP\"]').val(data.Buka_TOP);
                //\$('[name=\"Tgl_Usulan_TOP\"]').datepicker('update',data.Tgl_Usulan_TOP);
                //\$('[name=\"Approval_TOP_Pusat\"]').selectpicker('val', data.Approval_TOP_Pusat);
                //\$('[name=\"Approval_TOP_Bm\"]').selectpicker('val', data.Approval_TOP_Bm);
                //\$('[name=\"Riwayat_Bayar\"]').val(data.Riwayat_Bayar);
                //\$('[name=\"Kategori_2\"]').selectpicker('val', data.Kategori_2); 
                //\$('[name=\"Status\"]').val(data.Status);
                //\$('[name=\"Stat_No\"]').val(data.Stat_No);
                //\$('[name=\"Cabang_String\"]').val(data.Cabang_String);
                //\$('[name=\"Area_String\"]').val(data.Area_String);
                //\$('[name=\"Pelanggan_String\"]').val(data.Pelanggan_String);
                \$('[name=\"smsP\"]').val(data.smsP);
                \$('[name=\"Nama_Reg\"]').val(data.Nama_Reg);
                \$('[name=\"Alamat_Reg\"]').val(data.Alamat_Reg);
                \$('[name=\"userid\"]').val(data.userid);
                \$('[name=\"Password\"]').val(data.Password);
                \$('[name=\"cek\"]').val(data.cek);
                \$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                //\$('.modal-title').text('Retail Form Update'); // Set title to Bootstrap modal title


                //if(data.Dokumen_Limit_Top)
                //{
                //    \$('#label-photo').text('Change Photo'); // label photo upload
                //   \$('#photo-preview div').html('<img src=\"'+base_url+'assets/img/pelanggan/'+data.Dokumen_Limit_Top+'\" class=\"img-responsive\" name=\"Dokumen_Limit_Top\">'); // show photo
                //    \$('#photo-preview div').append('<input type=\"checkbox\" name=\"remove_photo\" value=\"'+data.Dokumen_Limit_Top+'\"/> Remove photo when saving'); // remove photo
                //}
                //else
                //{
                  //  \$('#label-photo').text('Upload Photo'); // label photo upload
                   // \$('#photo-preview div').text('(No photo)');
                //} 
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
        // line 719
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/deleteData/\" + id,
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
        // line 742
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/addData\";
        } else {
            url = \"";
        // line 744
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/retail/updateData\";
        }

        // ajax adding data to database
 
    var formData = new FormData(\$('#myForm')[0]);
    \$.ajax({
        url : url,
        type: \"POST\",
        data: formData,
        contentType: false,
        processData: false,
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
                alert(errorThrown);
                \$('#btnSave').text('save'); //change button text
                \$('#btnSave').attr('disabled',false); //set button enable 

            }
        });
         console.log();
    }

</script>
    ";
    }

    public function getTemplateName()
    {
        return "retail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  852 => 744,  847 => 742,  821 => 719,  737 => 638,  684 => 588,  656 => 563,  628 => 538,  600 => 513,  572 => 488,  492 => 411,  479 => 401,  474 => 398,  471 => 397,  303 => 231,  292 => 229,  288 => 228,  280 => 222,  269 => 220,  265 => 219,  257 => 213,  246 => 211,  242 => 210,  32 => 2,  27 => 1,);
    }
}
