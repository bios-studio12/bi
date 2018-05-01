<?php

/* index.html */
class __TwigTemplate_507b46fdde6489d73efdb0bab357c725 extends Twig_Template
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
        $this->env->loadTemplate("navigation.html")->display($context);
        // line 3
        echo "<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    ";
        // line 12
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Apotik")) {
            // line 13
            echo "    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o fa-fw\"></i>
                    Diagram Data Order
                </div>
                <div class=\"panel-body\">
                    <div id=\"Order\" style=\"min-width: 310px; height: 400px; max-width: 450px; width: 100%; margin: 0 auto\"></div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o fa-fw\"></i>
                    Diagram Data AR
                </div>
                <div class=\"panel-body\">
                    <div id=\"AR\" style=\"min-width: 310px; height: 400px; max-width: 450px; width: 100%; margin: 0 auto\"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o fa-fw\"></i>
                    Diagram Data Sales
                </div>
                <div class=\"panel-body\">
                    <div id=\"Sales\" style=\"min-width: 310px; height: 400px; max-width: 450px; width: 100%; margin: 0 auto\"></div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 53
        echo "
</div>
<!-- /#page-wrapper -->
";
    }

    // line 58
    public function block_js($context, array $blocks = array())
    {
        // line 59
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        ";
        // line 61
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "Kategori") == "User Apotik")) {
            // line 62
            echo "        myFunction();
        // loadProduk();

        // START DIAGRAM ORDER
        Highcharts.chart('Order', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Laporan Order'
            },
            tooltip: {
                pointFormat: '{point.name}: <b>{point.y} Order</b>',
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        color: 'white',
                        format: '{point.percentage:.2f}%<br><b>{point.y:,.0f} {point.name}</b>'
                    },
                    center:[\"50%\", \"50%\"],
                    showInLegend: true
                }
            },
            series: [{
                name: 'Order',
                colorByPoint: true,
                data: [
                    ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order"]) ? $context["order"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 98
                echo "                    {
                        name: '";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "Keterangan"), "html", null, true);
                echo "',
                        y: ";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "Value"), "html", null, true);
                echo ",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 103
            echo "                ]
            }]
        });
        // FINISH DIAGRAM ORDER

        // START DIAGRAM AR
        Highcharts.chart('AR', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Laporan AR'
            },
            tooltip: {
                pointFormat: '{point.name}: <b>{point.y}</b>',
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        color: 'white',
                        format: '{point.percentage:.2f}%<br><b>{point.y:,.0f} {point.name}</b>'
                    },
                    center:[\"50%\", \"50%\"],
                    showInLegend: true
                }
            },
            series: [{
                name: 'AR',
                colorByPoint: true,
                data: [
                    ";
            // line 140
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ar"]) ? $context["ar"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
                // line 141
                echo "                    {
                        name: '";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ar"]) ? $context["ar"] : null), "Keterangan"), "html", null, true);
                echo "',
                        y: ";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ar"]) ? $context["ar"] : null), "Value"), "html", null, true);
                echo ",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 146
            echo "                ]
            }]
        });
        // FINISH DIAGRAM AR

        // START DIAGRAM SALES
        Highcharts.chart('Sales', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Laporan Sales'
            },
            tooltip: {
                pointFormat: '{point.name}: <b>{point.y}</b>',
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        color: 'white',
                        format: '{point.percentage:.2f}%<br><b>{point.y:,.0f} {point.name}</b>'
                    },
                    center:[\"50%\", \"50%\"],
                    showInLegend: true
                }
            },
            series: [{
                name: 'Sales',
                colorByPoint: true,
                data: [
                    ";
            // line 183
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sales"]) ? $context["sales"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sales"]) {
                // line 184
                echo "                    {
                        name: '";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sales"]) ? $context["sales"] : null), "Keterangan"), "html", null, true);
                echo "',
                        y: ";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sales"]) ? $context["sales"] : null), "Value"), "html", null, true);
                echo ",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sales'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 189
            echo "                ]
            }]
        });
        // FINISH DIAGRAM SALES
        
        ";
        }
        // line 195
        echo "    });
</script>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 195,  278 => 189,  269 => 186,  265 => 185,  262 => 184,  258 => 183,  219 => 146,  210 => 143,  206 => 142,  203 => 141,  199 => 140,  160 => 103,  151 => 100,  147 => 99,  144 => 98,  140 => 97,  103 => 62,  101 => 61,  97 => 59,  94 => 58,  87 => 53,  45 => 13,  43 => 12,  32 => 3,  30 => 2,  27 => 1,);
    }
}
