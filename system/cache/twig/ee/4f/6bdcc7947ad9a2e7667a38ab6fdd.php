<?php

/* Upload.html */
class __TwigTemplate_ee4f6bdcc7947ad9a2e7667a38ab6fdd extends Twig_Template
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
        echo " ";
        $this->env->loadTemplate("navigation.html")->display($context);
        // line 2
        echo "<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Upload</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                           
                        </div>
                        <div class=\"panel-body\">
                            <p>Halaman Ini Berkaitan Dengan Upload</p>
                        </div>
                        <div class=\"panel-footer\">
                           
                        </div>
                    </div>
                </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


";
    }

    public function getTemplateName()
    {
        return "Upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  26 => 1,);
    }
}
