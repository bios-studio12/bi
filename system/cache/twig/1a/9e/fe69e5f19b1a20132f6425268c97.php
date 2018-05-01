<?php

/* layout.html */
class __TwigTemplate_1a9efe69e5f19b1a20132f6425268c97 extends Twig_Template
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
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <!-- Custom fonts for this template-->
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <!-- Page level plugin CSS-->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/datatables/dataTables.bootstrap4.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
  <!-- Custom styles for this template-->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/sb-admin.css\" rel=\"stylesheet\">
</head>

<body class=\"fixed-nav sticky-footer bg-dark\" id=\"page-top\">

   ";
        // line 24
        $this->env->loadTemplate("top_bar.html")->display($context);
        // line 25
        echo "

    <div class=\"content-wrapper\">

        <div class=\"container-fluid\">
   
        ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
    </div>

        
    

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
      <i class=\"fa fa-angle-up\"></i>
    </a>
        <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
          <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
            <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
          </div>
        </div>
      </div>
    </div>


<!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/jquery/jquery.min.js\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/jquery-easing/jquery.easing.min.js\"></script>
    <!-- Page level plugin JavaScript-->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/chart.js/Chart.min.js\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/datatables/jquery.dataTables.js\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/vendor/datatables/dataTables.bootstrap4.js\"></script>
    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/sb-admin.min.js\"></script>
    <!-- Custom scripts for this page-->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/sb-admin-datatables.min.js\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/sb-admin-charts.min.js\"></script>
    
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/datepicker/js/bootstrap-datepicker.min.js\"></script>
    <script type=\"text/javascript\">
        
         
    </script>
    ";
        // line 82
        $this->displayBlock('js', $context, $blocks);
        // line 83
        echo "    </div><!-- /#right-panel -->
</body>

</html>";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 82
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
        return array (  168 => 82,  162 => 31,  155 => 83,  153 => 82,  145 => 77,  140 => 75,  136 => 74,  131 => 72,  126 => 70,  122 => 69,  118 => 68,  113 => 66,  108 => 64,  104 => 63,  71 => 32,  69 => 31,  61 => 25,  59 => 24,  51 => 19,  46 => 17,  42 => 16,  37 => 14,  32 => 12,  19 => 1,);
    }
}
