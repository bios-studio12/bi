<?php

/* himbauan.html */
class __TwigTemplate_d0391b9005cafdaecc6871292351935d extends Twig_Template
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
        echo "\t\t\t
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
\t\t\t\t\t\t\t\t<li class=\"active\">Himbauan</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- page-intro end -->

\t\t\t<!-- section start -->
\t\t\t<!-- ================ -->
\t\t\t<div class=\"section clearfix\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>Himbauan</h1>
\t\t\t\t\t<!-- pills start -->
\t\t\t\t\t<div class=\"process\">
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content clear-style\">
\t\t\t\t\t\t\t\t<h3>Dolor lorem ipsum sit amet</h3>
\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
\t\t\t\t\t\t\t\t<p>Ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- pills end -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- section end -->


           ";
        // line 39
        $this->env->loadTemplate("footer.html")->display($context);
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "himbauan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 40,  72 => 39,  40 => 10,  30 => 2,  26 => 1,);
    }
}
