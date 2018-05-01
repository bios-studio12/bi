<?php

/* layout.html */
class __TwigTemplate_b8b2bb9618bdc6763f815c01ff65e0d2 extends Twig_Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    
    <marquee><title>Sistem Informasi Irigasi Cipancuh Kabupaten Indramayu</title></marquee>
   
   

    <!-- Front CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/front.css\" rel=\"stylesheet\">
    
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Bootstrap Toggle Core CSS -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/sidebar-toggle.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- DataTables CSS -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/dataTables.responsive.css\" rel=\"stylesheet\">

    <!-- DataTables Button Export CSS -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/buttons.dataTables.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/sb-admin-2.css\" rel=\"stylesheet\">
    
    <!-- Custom Fonts -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Select JS -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/select.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Datepacker -->
    <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">

     <!-- GIS -->

    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/test/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/dist/planit.min.css\">
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/test/js/modernizr-2.8.3.min.js\"></script>

    <style>
      #planit {
        width: 90%;
      }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

            ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
    </div>
    <a href=\"javascript:\" id=\"return-to-top\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/up-arrow.png\" width=\"50px\"></a>
    <!-- /#wrapper -->
    <!-- <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_c9iO8xtr4ypVNBkjRQQwqlNTPLuzfQ\"></script> -->
    <!-- jQuery -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/metisMenu.min.js\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.responsive.js\"></script>

    <!-- DataTables Button Export JavaScript -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.buttons.min.js\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.flash.min.js\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jszip.min.js\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/pdfmake.min.js\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/vfs_fonts.js\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.html5.min.js\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.print.min.js\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.colVis.min.js\"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/sb-admin-2.js\"></script>

    <!-- Datepicker -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>

    <!-- Select JS -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/select.js\"></script>

    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/redirect.js\"></script>

    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/map/gmaps.min.js\"></script>
    
    <!-- AUTOCOMPLETE -->
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.mockjax.js\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-typeahead.js\"></script>

    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/test/dist/planit.min.js\"></script>

    <script type=\"text/javascript\">
        \$(window).scroll(function() {
            if (\$(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                \$('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                \$('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        \$('#return-to-top').click(function() {      // When arrow is clicked
            \$('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
    </script>
    ";
        // line 138
        $this->displayBlock('js', $context, $blocks);
        // line 139
        echo "</body>

</html>";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 138
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
        return array (  286 => 138,  280 => 75,  274 => 139,  272 => 138,  253 => 122,  248 => 120,  244 => 119,  238 => 116,  233 => 114,  228 => 112,  222 => 109,  216 => 106,  210 => 103,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  190 => 98,  186 => 97,  182 => 96,  176 => 93,  172 => 92,  168 => 91,  162 => 88,  156 => 85,  150 => 82,  143 => 78,  139 => 76,  137 => 75,  113 => 54,  109 => 53,  105 => 52,  98 => 48,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  30 => 2,  26 => 1,);
    }
}
