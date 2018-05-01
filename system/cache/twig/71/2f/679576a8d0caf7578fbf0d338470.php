<?php

/* layout.html */
class __TwigTemplate_712f679576a8d0caf7578fbf0d338470 extends Twig_Template
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

    <title>GIS</title>
    
   
   

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

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

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
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "
    </div>
    <a href=\"javascript:\" id=\"return-to-top\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/up-arrow.png\" width=\"50px\"></a>
    <!-- /#wrapper -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_c9iO8xtr4ypVNBkjRQQwqlNTPLuzfQ\"></script>
    <!-- jQuery -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/metisMenu.min.js\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.responsive.js\"></script>

    <!-- DataTables Button Export JavaScript -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.buttons.min.js\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.flash.min.js\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jszip.min.js\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/pdfmake.min.js\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/vfs_fonts.js\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.html5.min.js\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.print.min.js\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.colVis.min.js\"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/sb-admin-2.js\"></script>

    <!-- Datepicker -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>

    <!-- Select JS -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/select.js\"></script>

    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/redirect.js\"></script>

    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/map/gmaps.min.js\"></script>
    
    <!-- AUTOCOMPLETE -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.mockjax.js\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-typeahead.js\"></script>

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
        // line 128
        $this->displayBlock('js', $context, $blocks);
        // line 129
        echo "</body>

</html>";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 128
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
        return array (  264 => 128,  258 => 67,  250 => 128,  231 => 112,  227 => 111,  221 => 108,  216 => 106,  211 => 104,  205 => 101,  199 => 98,  193 => 95,  189 => 94,  185 => 93,  181 => 92,  177 => 91,  173 => 90,  169 => 89,  165 => 88,  159 => 85,  155 => 84,  151 => 83,  145 => 80,  139 => 77,  133 => 74,  126 => 70,  122 => 68,  98 => 48,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  276 => 195,  273 => 194,  252 => 129,  244 => 171,  232 => 162,  224 => 157,  196 => 132,  188 => 127,  176 => 118,  168 => 113,  140 => 88,  132 => 83,  120 => 67,  112 => 69,  84 => 44,  76 => 39,  64 => 30,  56 => 27,  31 => 2,  27 => 1,);
    }
}
