<?php

/* kontak.html */
class __TwigTemplate_b37affd3ee854238445bb416c21a3628 extends Twig_Template
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
        echo "main/Id/\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Kontak</li>
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
\t\t\t\t\t\t\t<h1 class=\"page-title\">Contact Us</h1>
\t\t\t\t\t\t\t<!-- page-title end -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<!-- google maps start -->
\t\t\t\t\t\t\t\t\t<div id=\"map-canvas\"></div>
\t\t\t\t\t\t\t\t\t<!-- google maps end -->
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- sidebar start -->
\t\t\t\t\t\t<aside class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t\t<div class=\"side vertical-divider-left\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">KPID Provinsi Jawa Barat</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"list-icons\">
                                                <li><i class=\"fa fa-map-marker pr-10\"></i> Jl. Malabar No.62 Bandung 40262</li>
                                                <li><i class=\"fa fa-phone pr-10\"></i> +62 22 7308812</li>
                                                <li><i class=\"fa fa-fax pr-10\"></i> 7308813 </li>
                                                <li><i class=\"fa fa-envelope-o pr-10\"></i> kpid.jabar@yahoo.com</li>
                                            </ul>
\t\t\t\t\t\t\t\t\t<ul class=\"social-links colored circle large\">
\t\t\t\t\t\t\t\t\t\t<li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/kpidjabar1\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li class=\"skype\"><a target=\"_blank\" href=\"https://www.instagram.com/kpidjabar/\"><i class=\"fa fa-instagram\"></i></a></li>
                                        <li class=\"youtube\"><a target=\"_blank\" href=\"https://www.youtube.com/results?search_query=kpid+jabar\"><i class=\"fa fa-youtube-play\"></i></a></li>
                                        <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/pg/KPIDJabar/photos/?ref=page_internal\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</aside>
\t\t\t\t\t\t<!-- sidebar end -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main end -->
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- main-container end -->


";
        // line 72
        $this->env->loadTemplate("footer.html")->display($context);
        // line 73
        echo "
";
    }

    public function getTemplateName()
    {
        return "kontak.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 73,  105 => 72,  40 => 10,  30 => 2,  26 => 1,);
    }
}
