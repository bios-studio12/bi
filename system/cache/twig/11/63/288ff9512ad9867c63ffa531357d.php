<?php

/* layout.html */
class __TwigTemplate_1163288ff9512ad9867c63ffa531357d extends Twig_Template
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
    <!-- <meta http-equiv=\"refresh\" content=\"30\"> -->

    <title>APOTIK MITRA</title>

    <!-- FOR SPEED UP -->
    <link rel=\"prerender\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main\"/>

    <!-- Front CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/front.css\" rel=\"stylesheet\">
    
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Bootstrap Toggle Core CSS -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/sidebar-toggle.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- DataTables CSS -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/dataTables.responsive.css\" rel=\"stylesheet\">

    <!-- DataTables Button Export CSS -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/buttons.dataTables.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/sb-admin-2.css\" rel=\"stylesheet\">
    
    <!-- Custom Fonts -->
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Select JS -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/select.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Datepacker -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">


    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style type=\"text/css\">
        #loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to \"page content\" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
    </style>

</head>

<body>

    <div id=\"loader\" style=\"display:none;\"></div>

    <div id=\"wrapper\">

            ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "
    </div>
    <a href=\"javascript:\" id=\"return-to-top\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/up-arrow.png\" width=\"50px\"></a>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/metisMenu.min.js\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.responsive.js\"></script>

    <!-- DataTables Button Export JavaScript -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/dataTables.buttons.min.js\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.flash.min.js\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jszip.min.js\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/pdfmake.min.js\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/vfs_fonts.js\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.html5.min.js\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.print.min.js\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/buttons.colVis.min.js\"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/sb-admin-2.js\"></script>

    <!-- Select JS -->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/select.js\"></script>

    <!-- Redirect JS -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/redirect.js\"></script>
    
    <!-- AUTOCOMPLETE -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.mockjax.js\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-typeahead.js\"></script>

    <!-- Highcharts -->
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>
    <script src=\"https://code.highcharts.com/modules/exporting.js\"></script>

    <!-- Datepicker -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>


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
    <script type=\"text/javascript\">

    var produkSource = [];

    // function loadProduk() {

    //     \$.ajax({
    //         url : \"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/order/listProduk\",
    //         type: \"GET\",
    //         dataType: \"JSON\",
    //         success: function(data)
    //         {
    //             for (var i in data) {
    //                 produkSource[i] = data[i].KodeProduk+\"-\"+data[i].Produk;
    //             }

    //         },
    //         error: function (jqXHR, textStatus, errorThrown)
    //         {
    //             alert('Error get list Produk from ajax');
    //         }
    //     });   
    // }

    var myVar;

    function myFunction() {
      document.getElementById(\"loader\").style.display = \"block\";
      document.getElementById(\"wrapper\").style.display = \"none\";
        myVar = setTimeout(showPage, 5000);
    }

    function showPage() {
      document.getElementById(\"loader\").style.display = \"none\";
      document.getElementById(\"wrapper\").style.display = \"block\";
    }
    </script>
    ";
        // line 218
        $this->displayBlock('js', $context, $blocks);
        // line 219
        echo "</body>

</html>";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 218
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
        return array (  357 => 218,  351 => 116,  345 => 219,  343 => 218,  310 => 188,  283 => 164,  273 => 157,  269 => 156,  263 => 153,  257 => 150,  251 => 147,  245 => 144,  241 => 143,  237 => 142,  233 => 141,  229 => 140,  225 => 139,  221 => 138,  217 => 137,  211 => 134,  207 => 133,  203 => 132,  197 => 129,  191 => 126,  185 => 123,  178 => 119,  174 => 117,  172 => 116,  102 => 49,  96 => 46,  90 => 43,  84 => 40,  78 => 37,  72 => 34,  66 => 31,  60 => 28,  54 => 25,  48 => 22,  42 => 19,  36 => 16,  19 => 1,);
    }
}
