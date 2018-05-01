<?php

/* agenda.html */
class __TwigTemplate_f50952a6a048c6fe0177318d23c7d381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        $this->env->loadTemplate("header.html")->display($context);
        // line 2
        echo "\t\t
\t\t\t<!-- page-intro start-->
\t\t\t<!-- ================ -->
\t\t\t<div class=\"page-intro\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-home pr-10\"></i><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Agenda</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- page-intro end -->

\t\t\t<!-- main-container start -->
\t\t\t<!-- ================ -->
\t\t\t<section class=\"main-container\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- main start -->
\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t<div class=\"main col-md-9\">

\t\t\t\t\t\t\t<!-- page-title start -->
\t\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t\t<h1 class=\"text-center\">Agenda</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium<br> laudantium molestias similique. Quisquam incidunt ut laboriosam.</p>
\t\t\t\t\t\t\t<!-- page-title end -->

\t\t\t\t\t\t\t<!-- Tables start -->
\t\t\t\t\t\t\t<!-- ============================================================================== -->

\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t<th>Kegiatan</th>
\t\t\t\t\t\t\t\t\t\t<th>Tempat</th>
\t\t\t\t\t\t\t\t\t\t<th>Waktu</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td rowspan=\"2\">1</td>
\t\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t\t<td>@TwBootstrap</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Larry the Bird</td>
\t\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- main-container end -->

<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<!-- google maps start -->
\t\t\t\t\t\t\t\t\t<div id=\"map-canvas\"></div>
\t\t\t\t\t\t\t\t\t<!-- google maps end -->
\t\t\t\t\t\t\t\t</div>


           ";
        // line 90
        $this->env->loadTemplate("footer.html")->display($context);
        // line 91
        echo "
";
    }

    public function getTemplateName()
    {
        return "agenda.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 91,  123 => 90,  40 => 10,  30 => 2,  26 => 1,);
    }
}
