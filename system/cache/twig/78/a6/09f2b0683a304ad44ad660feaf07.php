<?php

/* tugasKewajiban.html */
class __TwigTemplate_78a609f2b0683a304ad44ad660feaf07 extends Twig_Template
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
        echo "

<!-- page-intro start-->
\t\t\t<!-- ================ -->
\t\t\t<div class=\"page-intro\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-home pr-10\"></i><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Tugas &amp; Kewajiban </li>
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

\t\t\t\t\t\t\t<h1 class=\"text-center\">Fungsi KPID</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
                            <br>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- accordion start -->
\t\t\t\t\t\t\t<div class=\"panel-group panel-dark\" id=\"accordion-2\">
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-2\" href=\"#collapseOne-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bold\"></i>KPI/KPID mempunyai wewenang
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-2\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-2\" href=\"#collapseTwo-2\" class=\"collapsed\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-leaf\"></i>KPI/KPID mempunyai tugas &amp; kewajiban
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseTwo-2\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- accordion end -->

\t\t\t\t\t\t\t<div class=\"space-bottom\"></div>

\t\t\t\t\t\t\t<h1 class=\"text-center\">Tugas &amp; Kewajiban KPID</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
                            <br>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- accordion start -->
\t\t\t\t\t\t\t<div class=\"panel-group panel-dark\" id=\"accordion-3\">
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-3\" href=\"#collapseOne-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bold\"></i>Tugas &amp; Kewajiban KPID
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-3\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- accordion end -->

\t\t\t\t\t\t\t<div class=\"space-bottom\"></div>

\t\t\t\t\t\t\t<h1 class=\"text-center\">Wewenang KPID</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
                            <br>

\t\t\t\t\t\t\t<!-- accordion start -->
\t\t\t\t\t\t\t<div class=\"panel-group panel-dark\" id=\"accordion-4\">
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-4\" href=\"#collapseOne-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bold\"></i>Wewenang KPID
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-4\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- accordion end -->

\t\t\t\t\t\t\t<div class=\"space-bottom\"></div>

\t\t\t\t\t\t\t<h1 class=\"text-center\">Bidang Tugas KPID</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
                            <br>

\t\t\t\t\t\t\t<!-- accordion start -->
\t\t\t\t\t\t\t<div class=\"panel-group panel-dark\" id=\"accordion-5\">
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-5\" href=\"#collapseOne-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bold\"></i>Bidang Kelembagaan
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-5\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-5\" href=\"#collapseOne-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bold\"></i>Bidang Kelembagaan
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-5\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-5\" href=\"#collapseOne-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bold\"></i>Bidang Infrastruktur
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-5\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion-5\" href=\"#collapseOne-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bold\"></i>Bidang Isi Siaran
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-5\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- accordion end -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- main-container end -->


";
        // line 196
        $this->env->loadTemplate("footer.html")->display($context);
        // line 197
        echo "
";
    }

    public function getTemplateName()
    {
        return "tugasKewajiban.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 197,  229 => 196,  41 => 11,  30 => 2,  26 => 1,);
    }
}
