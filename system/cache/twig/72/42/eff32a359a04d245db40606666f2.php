<?php

/* index.html */
class __TwigTemplate_7242eff32a359a04d245db40606666f2 extends Twig_Template
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
        // line 2
        $this->env->loadTemplate("navigation.html")->display($context);
        // line 3
        echo "<div id=\"page-wrapper\">
    <!-- /.row -->
    <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Home
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/logo/car1.jpg\">
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

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
        return array (  43 => 13,  31 => 3,  29 => 2,  26 => 1,);
    }
}
