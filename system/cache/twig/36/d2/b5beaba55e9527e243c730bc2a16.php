<?php

/* galeriPost.html */
class __TwigTemplate_36d2b5beaba55e9527e243c730bc2a16 extends Twig_Template
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
\t\t\t\t\t\t\t\t<li class=\"active\">Galeri</li>
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
\t\t\t\t\t\t<div class=\"main col-md-12\">

\t\t\t\t\t\t\t<!-- page-title start -->
\t\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t\t<h1 class=\"page-title\">Galeri</h1>
\t\t\t\t\t\t\t<div class=\"separator-2\"></div>
\t\t\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla suscipit <br class=\"hidden-sm hidden-xs\"> unde rerum mollitia dolorum.</p>
\t\t\t\t\t\t\t<!-- page-title end -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- isotope filters start -->
\t\t\t\t\t\t\t<!-- <div class=\"filters\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\" data-filter=\"*\">All</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".web-design\">Web design</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".app-development\">App development</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".site-building\">Site building</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t<!-- isotope filters end -->

\t\t\t\t\t\t\t<!-- portfolio items start -->
\t\t\t\t\t\t\t<div class=\"isotope-container row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item web-design\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-1.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item app-development\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-2.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>App Development</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item web-design\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-3.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item site-building\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-4.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Site Building</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item app-development\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-5.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>App Development</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item web-design\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-6.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item site-building\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-7.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Site Building</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 isotope-item web-design\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-8.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- portfolio items end -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- main-container end -->




";
        // line 194
        $this->env->loadTemplate("footer.html")->display($context);
        // line 195
        echo "
";
    }

    public function getTemplateName()
    {
        return "galeriPost.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 195,  275 => 194,  248 => 170,  242 => 167,  226 => 154,  220 => 151,  204 => 138,  198 => 135,  182 => 122,  175 => 118,  159 => 105,  152 => 101,  136 => 88,  130 => 85,  114 => 72,  108 => 69,  92 => 56,  86 => 53,  40 => 10,  30 => 2,  26 => 1,);
    }
}
