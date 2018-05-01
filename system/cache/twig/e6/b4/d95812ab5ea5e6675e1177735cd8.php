<?php

/* layout.html */
class __TwigTemplate_e6b4d95812ab5ea5e6675e1177735cd8 extends Twig_Template
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

    <title>MASTER</title>

    <!-- Favicon -->
   

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
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "
    </div>
    <a href=\"javascript:\" id=\"return-to-top\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/up-arrow.png\" width=\"50px\"></a>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/metisMenu.min.js\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.responsive.js\"></script>

    <!-- DataTables Button Export JavaScript -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.buttons.min.js\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.flash.min.js\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jszip.min.js\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/pdfmake.min.js\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/vfs_fonts.js\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.html5.min.js\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.print.min.js\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.colVis.min.js\"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/sb-admin-2.js\"></script>

    <!-- Select JS -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/select.js\"></script>
    
    <!-- AUTOCOMPLETE -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.mockjax.js\"></script>
    <script src=\"";
        // line 99
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
        // line 115
        $this->displayBlock('js', $context, $blocks);
        // line 116
        echo "</body>

</html>";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 115
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
        return array (  239 => 115,  233 => 61,  227 => 116,  225 => 115,  206 => 99,  202 => 98,  196 => 95,  190 => 92,  184 => 89,  180 => 88,  176 => 87,  172 => 86,  168 => 85,  164 => 84,  160 => 83,  156 => 82,  150 => 79,  146 => 78,  142 => 77,  136 => 74,  130 => 71,  124 => 68,  117 => 64,  113 => 62,  111 => 61,  92 => 45,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  50 => 24,  44 => 21,  38 => 18,  19 => 1,  263 => 215,  258 => 213,  232 => 190,  204 => 165,  122 => 86,  109 => 75,  106 => 74,  32 => 2,  27 => 1,);
    }
}
