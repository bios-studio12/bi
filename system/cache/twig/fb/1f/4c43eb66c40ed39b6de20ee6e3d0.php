<?php

/* listKategori.html */
class __TwigTemplate_fb1f4c43eb66c40ed39b6de20ee6e3d0 extends Twig_Template
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
                    List Kategori
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
                            <th>Kategori</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

";
    }

    // line 27
    public function block_js($context, array $blocks = array())
    {
        // line 28
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
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Kategori/listData\",
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
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/Kategori/deleteData/\" + id,
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

</script>
    ";
    }

    public function getTemplateName()
    {
        return "listKategori.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 57,  72 => 38,  60 => 28,  57 => 27,  30 => 2,  27 => 1,);
    }
}
