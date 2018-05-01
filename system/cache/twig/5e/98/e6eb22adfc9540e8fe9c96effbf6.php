<?php

/* layout.html */
class __TwigTemplate_5e98e6eb22adfc9540e8fe9c96effbf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if gt IE 9]> <html lang=\"en\" class=\"ie\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>KPID Provinsi Jawa Barat | Home</title>
        <meta name=\"description\" content=\"iDea a Bootstrap-based, Responsive HTML5 Template\">
        <meta name=\"author\" content=\"htmlcoder.me\">

        <!-- Mobile Meta -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <!-- Favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/favicon.ico\">

        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

        <!-- Font Awesome CSS -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/fonts/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">

        <!-- Fontello CSS -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/fonts/fontello/css/fontello.css\" rel=\"stylesheet\">

        <!-- Plugins -->
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/rs-plugin-5/css/settings.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/rs-plugin-5/css/layers.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/rs-plugin-5/css/navigation.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/animations.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/owl-carousel/assets/owl.carousel.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/owl-carousel/assets/owl.theme.default.min.css\" rel=\"stylesheet\">

        <!-- iDea core CSS file -->
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/style.css\" rel=\"stylesheet\">

        <!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
        <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/skins/red.css\" rel=\"stylesheet\">

        <!-- Custom css -->
        <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/custom.css\" rel=\"stylesheet\">


    </head>

    <!-- body classes: 
            \"boxed\": boxed layout mode e.g. <body class=\"boxed\">
            \"pattern-1 ... pattern-9\": background patterns for boxed layout mode e.g. <body class=\"boxed pattern-1\"> 
    -->
    <body class=\"front\">
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class=\"scrollToTop\"><i class=\"icon-up-open-big\"></i></div>

        <!-- page wrapper start -->
        <!-- ================ -->
        <div class=\"page-wrapper\">

           ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "
        </div>
        <!-- page-wrapper end -->

        <!-- JavaScript files placed at the end of the document so the pages load faster
        ================================================== -->
        <!-- Jquery and Bootstap core js files -->
        <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/bootstrap/js/bootstrap.min.js\"></script>

        <!-- Google Maps javascript -->
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyBn7maUCRNabHTj3l2WqBsv8IZ8dgGOLp8\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/google.map.config.js\"></script>

        <!-- Modernizr javascript -->
        <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/modernizr.js\"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0\"></script>

        <!-- Isotope javascript -->
        <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/isotope/imagesloaded.pkgd.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/isotope/isotope.pkgd.min.js\"></script>

        <!-- Owl carousel javascript -->
        <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/owl-carousel/owl.carousel.js\"></script>

        <!-- Magnific Popup javascript -->
        <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/magnific-popup/jquery.magnific-popup.min.js\"></script>

        <!-- Appear javascript -->
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/jquery.appear.js\"></script>

        <!-- Count To javascript -->
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/jquery.countTo.js\"></script>

        <!-- Parallax javascript -->
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/jquery.parallax-1.1.3.js\"></script>

        <!-- Contact form -->
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/jquery.validate.js\"></script>

        <!-- SmoothScroll javascript -->
        <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/jquery.browser.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/plugins/SmoothScroll.js\"></script>

        <!-- Initialization of Plugins -->
        <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/template.js\"></script>

        <!-- Custom Scripts -->
        <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/custom.js\"></script>

    </body>
</html>
";
    }

    // line 66
    public function block_content($context, array $blocks = array())
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
        return array (  242 => 66,  233 => 118,  227 => 115,  221 => 112,  217 => 111,  211 => 108,  205 => 105,  199 => 102,  193 => 99,  187 => 96,  181 => 93,  175 => 90,  171 => 89,  165 => 86,  161 => 85,  155 => 82,  149 => 79,  142 => 75,  138 => 74,  129 => 67,  127 => 66,  106 => 48,  100 => 45,  94 => 42,  88 => 39,  84 => 38,  80 => 37,  76 => 36,  72 => 35,  68 => 34,  64 => 33,  58 => 30,  52 => 27,  46 => 24,  36 => 17,  18 => 1,  111 => 77,  109 => 76,  40 => 10,  30 => 2,  26 => 1,);
    }
}
