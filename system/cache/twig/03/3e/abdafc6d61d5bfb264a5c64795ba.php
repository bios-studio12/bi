<?php

/* perizinan.html */
class __TwigTemplate_033eabdafc6d61d5bfb264a5c64795ba extends Twig_Template
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
\t<!-- page-intro start-->
\t\t\t<!-- ================ -->
\t\t\t<div class=\"page-intro\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-home pr-10\"></i><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Beranda</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Perizinan</li>
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
\t\t\t\t\t\t<div class=\"main col-md-8\">

\t\t\t\t\t\t\t<!-- page-title start -->
\t\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t\t<h1 class=\"page-title\">Direktori Lembaga Penyiaran Daerah Jawa Barat Radio dan Televisi</h1>
\t\t\t\t\t\t\t<div class=\"separator-2\"></div>
\t\t\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla suscipit <br class=\"hidden-sm hidden-xs\"> unde rerum mollitia dolorum.</p>
\t\t\t\t\t\t\t<!-- page-title end -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-10\"><i class=\"icon-calendar\"></i> Feb, 2015 <i class=\"pl-10 fa fa-tags\"></i> Web Design</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\">Read More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-10\"><i class=\"icon-calendar\"></i> Feb, 2015 <i class=\"pl-10 fa fa-tags\"></i> Web Design</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\">Read More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-10\"><i class=\"icon-calendar\"></i> Feb, 2015 <i class=\"pl-10 fa fa-tags\"></i> Web Design</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\">Read More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-10\"><i class=\"icon-calendar\"></i> Feb, 2015 <i class=\"pl-10 fa fa-tags\"></i> Web Design</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\">Read More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-10\"><i class=\"icon-calendar\"></i> Feb, 2015 <i class=\"pl-10 fa fa-tags\"></i> Web Design</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\">Read More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- pagination start -->
\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">«</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1 <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">»</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- pagination end -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- main-container end -->


";
        // line 120
        $this->env->loadTemplate("footer.html")->display($context);
        // line 121
        echo "
";
    }

    public function getTemplateName()
    {
        return "perizinan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 121,  153 => 120,  40 => 10,  30 => 2,  26 => 1,);
    }
}
