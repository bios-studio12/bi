<?php

/* sejarah.html */
class __TwigTemplate_3c6503395ec844f33815a9144b0292b5 extends Twig_Template
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
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Beranda</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Sejarah</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- page-intro end -->
<!-- section start -->

            <!-- page-top start-->
            <!-- ================ -->
            <div class=\"page-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            <div class=\"call-to-action\">
                                <h1 class=\"title\">Sejarah KPID Provinsi Jawa Barat</h1>
                                <p>Sed ut Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit  voluptatem accusan tium </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-top end -->
\t\t\t<!-- ================ -->
\t\t\t<div class=\"clearfix light-gray-bg object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\">
\t\t\t\t<div class=\"full-width-section\">
\t\t\t\t\t<div class=\"full-image-container\">
\t\t\t\t\t\t<img class=\"center-block\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-8.jpg\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"full-text-container\">
\t\t\t\t\t\t<h1>Wellcome to the Future</h1>
\t\t\t\t\t\t<div class=\"separator-2\"></div>
\t\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium laudantium.</p>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- section start -->




";
        // line 53
        $this->env->loadTemplate("footer.html")->display($context);
        // line 54
        echo "
";
    }

    public function getTemplateName()
    {
        return "sejarah.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 54,  89 => 53,  72 => 39,  40 => 10,  30 => 2,  26 => 1,);
    }
}
