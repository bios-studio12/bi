<?php

/* user/index.html */
class __TwigTemplate_419f63f4fdb28e985d6820c40aaae8a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<!-- Stylesheets
\t============================================= -->
\t<link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/bootstrap.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/style.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/swiper.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/dark.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/font-icons.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/animate.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/magnific-popup.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/responsive.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/css/vmap.css\" type=\"text/css\" />
\t<style type=\"text/css\">
\t\t.section{
\t\t\tmargin: 0 !important;
\t\t}
\t\t.content-wrap{
\t\t\tpadding: 0 !important;
\t\t}
\t\t.white{
\t\t\tbackground-color: #fff !important;
\t\t}
\t</style>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t
\t<title>gis</title>
</head>
<body class=\"stretched\">
\t<div id=\"wrapper\" class=\"clearfix\">

\t\t<!-- Header
\t\t============================================= -->
\t\t<header id=\"header\" class=\"transparent-header full-header\" data-sticky-class=\"not-dark\">

\t\t\t<div id=\"header-wrap\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t<div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

\t\t\t\t\t<!-- Logo
\t\t\t\t\t============================================= -->
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"standard-logo\" data-dark-logo=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/images/logo-dark.png\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/images/logo.png\" alt=\"Canvas Logo\"></a>
\t\t\t\t\t\t<a href=\"index.html\" class=\"retina-logo\" data-dark-logo=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/images/logo-dark@2x.png\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/images/logo@2x.png\" alt=\"Canvas Logo\"></a>
\t\t\t\t\t</div><!-- #logo end -->

\t\t\t\t\t<!-- Primary Navigation
\t\t\t\t\t============================================= -->
\t\t\t\t\t<nav id=\"primary-menu\" class=\"dark\">

\t\t\t\t\t\t<ul class=\"one-page-menu\" data-easing=\"easeInOutExpo\" data-speed=\"2000\">
\t\t\t\t\t\t\t<li><a href=\"#\" data-href=\"#home\"><div>Home</div></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-href=\"#profil\"><div>Profil</div></a></li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\" data-href=\"#map\"><div>MAP</div></a></li>\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav><!-- #primary-menu end -->

\t\t\t\t</div>

\t\t\t</div>

\t\t</header><!-- #header end -->

\t\t<section id=\"slider\" class=\"slider-parallax swiper_wrapper full-screen clearfix\">
\t\t\t<div class=\"slider-parallax-inner\">

\t\t\t\t<div class=\"swiper-container swiper-parent\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t<div class=\"swiper-slide dark\" style=\"background-image: url('";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/images/1.jpg');\">
\t\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t\t<div class=\"slider-caption slider-caption-center\">
\t\t\t\t\t\t\t\t\t<h2 data-caption-animate=\"fadeInUp\">Welcome to Canvas</h2>
\t\t\t\t\t\t\t\t\t<p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"slider-arrow-left\"><i class=\"icon-angle-left\"></i></div>
\t\t\t\t\t<div id=\"slider-arrow-right\"><i class=\"icon-angle-right\"></i></div>
\t\t\t\t</div>

\t\t\t\t<a href=\"#\" data-scrollto=\"#content\" data-offset=\"100\" class=\"dark one-page-arrow\"><i class=\"icon-angle-down infinite animated fadeInDown\"></i></a>

\t\t\t</div>
\t\t</section>

\t\t<!-- Content
\t\t============================================= -->
\t\t<section id=\"content\">

\t\t\t<div class=\"content-wrap\">

\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"heading-block center nomargin\" id=\"home\">
\t\t\t\t\t\t\t\t<h3>HOME</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder white\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"heading-block center nomargin\" id=\"profil\">
\t\t\t\t\t\t\t\t<h3>Profil</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"section nobottommargin nobottomborder\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"heading-block center nomargin\" id=\"map\">
\t\t\t\t\t\t\t\t<h3>MAP</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"google-map4\" style=\"height: 400px; margin-bottom: 20px;\" class=\"gmap\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</section>

\t</div>

\t<!-- Go To Top
\t============================================= -->
\t<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

\t<!-- External JavaScripts
\t============================================= -->
\t<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/plugins.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/jquery.vmap.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/vmap/jquery.vmap.world.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/vmap/jquery.vmap.usa.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/vmap/jquery.vmap.europe.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/vmap/jquery.vmap.germany.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/vmap/jquery.vmap.sampledata.js\"></script>
\t<script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?key=AIzaSyCOu15786tOXXtZD75rRVAZgo__RKrLo-Q\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/jquery.gmap.js\"></script>

\t<!-- Footer Scripts
\t============================================= -->
\t<script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/3rdparty/gis/js/functions.js\"></script>

\t<script type=\"text/javascript\">
\t\t\$('#google-map4').gMap({
\t\t\t // latitude:'-6.9775323',
\t\t\t // longitude:'107.6920444',
\t\t\t address:'tegalluar, Bandung',
\t\t\t // maptype: 'ROADMAP',
\t\t\t zoom: 14,
\t\t\t markers: [
\t\t\t\t{
\t\t\t\t\t// address: \"Melbourne, Australia\",-6.970781, 107.685950
\t\t\t\t\tlatitude: '-6.982665',
\t\t\t\t\tlongitude: '107.689244',
\t\t\t\t\thtml: \"Jalan Raya Sapan\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tlatitude: '-6.970781',
\t\t\t\t\tlongitude: '107.685950',
\t\t\t\t\thtml: \"Jalan Derwati\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tlatitude: '-6.972784',
\t\t\t\t\tlongitude: '107.705988',
\t\t\t\t\thtml: \"Ranca Numpang\"
\t\t\t\t}
\t\t\t ],
\t\t\t doubleclickzoom: false,
\t\t\t controls: {
\t\t\t\t panControl: true,
\t\t\t\t zoomControl: true,
\t\t\t\t mapTypeControl: false,
\t\t\t\t scaleControl: false,
\t\t\t\t streetViewControl: false,
\t\t\t\t overviewMapControl: false
\t\t\t}
\t\t});
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "user/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 163,  241 => 159,  236 => 157,  232 => 156,  228 => 155,  224 => 154,  220 => 153,  216 => 152,  212 => 151,  208 => 150,  129 => 74,  98 => 48,  92 => 47,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  25 => 7,  17 => 1,);
    }
}
