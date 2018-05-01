<?php

/* layout.html */
class __TwigTemplate_5799c0fd108b848ffd70c0b63d46073c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-focus\">
    <head>
        <meta charset=\"utf-8\">
        <title>Dashboard</title>
        <meta name=\"description\" content=\"OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest\">
        <meta name=\"author\" content=\"pixelcave\">
        <meta name=\"robots\" content=\"noindex, nofollow\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1.0\">
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/img/favicons/favicon.png\">

        <!-- Web fonts -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/plugins/datatables/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" id=\"css-main\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/oneui.css\">
        <!-- DataTables CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/dataTables.responsive.css\" rel=\"stylesheet\">

    <!-- DataTables Button Export CSS -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/buttons.dataTables.min.css\" rel=\"stylesheet\">

    </head>
    <body>
            <div id=\"page-container\" class=\"side-scroll header-navbar-fixed\">
         
           ";
        // line 30
        $this->env->loadTemplate("top_bar.html")->display($context);
        // line 31
        echo "
            <!-- Main Container -->
            <main id=\"main-container\" style=\"background: #ffffff;\">
                ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "  
            </main>
            <!-- END Main Container -->
     <div class=\"modal fade\" id=\"header-modal\" aria-hidden=\"true\"></div>
            <!-- Footer -->
            ";
        // line 40
        $this->env->loadTemplate("footer.html")->display($context);
        // line 41
        echo "            <!-- END Footer -->
        

        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/jquery.min.js\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/bootstrap.min.js\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/jquery.slimscroll.min.js\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/jquery.scrollLock.min.js\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/jquery.appear.min.js\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/jquery.countTo.min.js\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/jquery.placeholder.min.js\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/core/js.cookie.min.js\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/app.js\"></script>

        <!-- Page JS Plugins -->
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/plugins/datatables/jquery.dataTables.min.js\"></script>

        <!-- Page JS Code -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/pages/base_tables_datatables.js\"></script>
        
        
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/plugins/bootstrap-datetimepicker/moment.min.js\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js\"></script>

        <!-- DataTables JavaScript -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/dataTables.responsive.js\"></script>

    <!-- DataTables Button Export JavaScript -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.buttons.min.js\"></script>

        ";
        // line 73
        $this->displayBlock('js', $context, $blocks);
        // line 74
        echo "</div>
        <!-- END Page Container -->
    </body>
</html>";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
    }

    // line 73
    public function block_js($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 73,  186 => 34,  179 => 74,  177 => 73,  172 => 71,  166 => 68,  162 => 67,  158 => 66,  152 => 63,  148 => 62,  144 => 61,  138 => 58,  132 => 55,  126 => 52,  122 => 51,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  102 => 46,  98 => 45,  94 => 44,  89 => 41,  87 => 40,  80 => 35,  78 => 34,  71 => 30,  62 => 24,  56 => 21,  50 => 18,  45 => 16,  41 => 15,  37 => 14,  19 => 1,  95 => 58,  73 => 31,  61 => 29,  58 => 28,  30 => 10,  27 => 1,);
    }
}
