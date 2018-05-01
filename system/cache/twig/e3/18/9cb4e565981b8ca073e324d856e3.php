<?php

/* modalOrder.html */
class __TwigTemplate_e3189cb4e565981b8ca073e324d856e3 extends Twig_Template
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
            <h1 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "NoOrder"), "html", null, true);
        echo "</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <!-- /.panel -->
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Datatable List Order
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                             <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Qty</th>
                            <th>Bonus</th>
                            <th>Banyak</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Gross</th>
                            <th>Potongan</th>
                            <th>Value</th>
                            <th>Ppn</th>
                            <th>Status</th>
                            <th>Tipe</th>
                            <th>Tanggal SP</th>
                        </tr>
                    </thead>

                         ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 41
            echo "                    <tbody>
                        <tr>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
                            <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Qty"), "html", null, true);
            echo "</th>
                            <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Bonus"), "html", null, true);
            echo "</th>
                            <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Banyak"), "html", null, true);
            echo "</th>
                            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Harga"), "html", null, true);
            echo "</th>
                            <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Diskon"), "html", null, true);
            echo "</th>
                            <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Gross"), "html", null, true);
            echo "</th>
                            <th>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Potongan"), "html", null, true);
            echo "</th>
                            <th>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Value"), "html", null, true);
            echo "</th>
                            <th>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Ppn"), "html", null, true);
            echo "</th>
                            <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Status"), "html", null, true);
            echo "</th>
                            <th>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "Tipe"), "html", null, true);
            echo "</th>
                            <th>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "TglSP"), "html", null, true);
            echo "</th>
                        </tr>
                    </tbody>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "                    </table>
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

    // line 73
    public function block_js($context, array $blocks = array())
    {
        // line 74
        echo "<script>
    var tabel;
    \$(document).ready(function() {
        tabel = \$('#dataTables-example').DataTable({

            
            });
    });

   
</script>
    ";
    }

    public function getTemplateName()
    {
        return "modalOrder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 74,  178 => 73,  162 => 59,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  120 => 49,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  92 => 41,  75 => 40,  37 => 5,  32 => 2,  27 => 1,);
    }
}
