<?php

/* header.html */
class __TwigTemplate_97d76d4428428670f330361ae170d101 extends Twig_Template
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
        echo "<div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-2 col-sm-6\">

                            <!-- header-top-first start -->
                            <!-- ================ -->
                            <div class=\"header-top-first clearfix\">
                                <ul class=\"social-links clearfix hidden-xs\">
                                    <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/kpidjabar1\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li class=\"skype\"><a target=\"_blank\" href=\"https://www.instagram.com/kpidjabar/\"><i class=\"fa fa-instagram\"></i></a></li>
                                    <li class=\"youtube\"><a target=\"_blank\" href=\"https://www.youtube.com/results?search_query=kpid+jabar\"><i class=\"fa fa-youtube-play\"></i></a></li>
                                    <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/pg/KPIDJabar/photos/?ref=page_internal\"><i class=\"fa fa-facebook\"></i></a></li>
                                </ul>
                                <div class=\"social-links hidden-lg hidden-md hidden-sm\">
                                    <div class=\"btn-group dropdown\">
                                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-share-alt\"></i></button>
                                        <ul class=\"dropdown-menu dropdown-animation\">
                                            <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/kpidjabar1\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"https://www.instagram.com/kpidjabar/\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"youtube\"><a target=\"_blank\" href=\"https://www.youtube.com/results?search_query=kpid+jabar\"><i class=\"fa fa-youtube-play\"></i></a></li>
                                            <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/pg/KPIDJabar/photos/?ref=page_internal\"><i class=\"fa fa-facebook\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- header-top-first end -->

                        </div>
                        <div class=\"col-xs-10 col-sm-6\">

                            <!-- header-top-second start -->
                            <!-- ================ -->
                            <div id=\"header-top-second\"  class=\"clearfix\">

                                <!-- header top dropdowns start -->
                                <!-- ================ -->
                                <div class=\"header-top-dropdown\">
                                    <div class=\"btn-group dropdown\">
                                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-search\"></i> Search</button>
                                        <ul class=\"dropdown-menu dropdown-menu-right dropdown-animation\">
                                            <li>
                                                <form role=\"search\" class=\"search-box\">
                                                    <div class=\"form-group has-feedback\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                                        <i class=\"fa fa-search form-control-feedback\"></i>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-group dropdown\">
                                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Login</button>
                                        <ul class=\"dropdown-menu dropdown-menu-right dropdown-animation\">
                                            <li>
                                                <form class=\"login-form\">
                                                    <div class=\"form-group has-feedback\">
                                                        <label class=\"control-label\">Username</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"\">
                                                        <i class=\"fa fa-user form-control-feedback\"></i>
                                                    </div>
                                                    <div class=\"form-group has-feedback\">
                                                        <label class=\"control-label\">Password</label>
                                                        <input type=\"password\" class=\"form-control\" placeholder=\"\">
                                                        <i class=\"fa fa-lock form-control-feedback\"></i>
                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-group btn-dark btn-sm\">Log In</button>
                                                    <span>or</span>
                                                    <button type=\"submit\" class=\"btn btn-group btn-default btn-sm\">Sign Up</button>

                                                    <ul>
                                                        <li><a href=\"#\">Forgot your password?</a></li>
                                                    </ul>
                                                    <div class=\"divider\"></div>
                                                    <span class=\"text-center\">Login with</span>
                                                    <ul class=\"social-links clearfix\">
                                                        <li class=\"facebook\"><a target=\"_blank\" href=\"http://www.facebook.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li class=\"twitter\"><a target=\"_blank\" href=\"http://www.twitter.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                    </ul>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!--  header top dropdowns end -->

                            </div>
                            <!-- header-top-second end -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top end -->

            <!-- header start classes:
                fixed: fixed navigation mode (sticky menu) e.g. <header class=\"header fixed clearfix\">
                 dark: dark header version e.g. <header class=\"header dark clearfix\">
            ================ -->
            <header class=\"header fixed clearfix\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">

                            <!-- header-left start -->
                            <!-- ================ -->
                            <div class=\"header-left clearfix\">

                                <!-- logo -->
                                <div class=\"logo\">
                                    <a href=\"index.html\"><img id=\"logo\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/logo.jpg\" alt=\"KPID Jabar\"></a>
                                </div>

                                <!-- name-and-slogan -->
                                <div class=\"site-slogan\">
                                    Bersih , Jujur &amp; Transparan 
                                </div>

                            </div>
                            <!-- header-left end -->

                        </div>
                        <div class=\"col-md-9\">

                            <!-- header-right start -->
                            <!-- ================ -->
                            <div class=\"header-right clearfix\">

                                <!-- main-navigation start -->
                                <!-- ================ -->
                                <div class=\"main-navigation animated\">

                                    <!-- navbar start -->
                                    <!-- ================ -->
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">

                                            <!-- Toggle get grouped for better mobile display -->
                                            <div class=\"navbar-header\">
                                                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                                                    <span class=\"sr-only\">Toggle navigation</span>
                                                    <span class=\"icon-bar\"></span>
                                                    <span class=\"icon-bar\"></span>
                                                    <span class=\"icon-bar\"></span>
                                                </button>
                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                                                <ul class=\"nav navbar-nav navbar-right\">
                                                    <li>
                                                        <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\" >Beranda</a>
                                                    </li>
                                                    <li class=\"dropdown\">
                                                        <a href=\"blog-right-sidebar.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Profil</a>
                                                        <ul class=\"dropdown-menu\">
                                                            <li><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Sejarah\">Sejarah</a></li>
                                                            <li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/VisiMisi\">Visi  &amp; Misi</a></li>
                                                            <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/TugasKewajiban\">Tugas  &amp; Kewajiban</a></li>
                                                            <li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Komisioner\">Komisioner</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class=\"dropdown\">
                                                        <a href=\"blog-right-sidebar.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kolom</a>
                                                        <ul class=\"dropdown-menu\">
                                                            <li><a href=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Agenda\">Agenda</a></li>
                                                            <li><a href=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Berita\">Berita</a></li>
                                                            <li><a href=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Opini\">Opini</a></li>
                                                            <li><a href=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Sanksi\">Sanksi</a></li>
                                                            <li><a href=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Himbauan\">Himbauan</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Regulasi\" >Regulasi</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </nav>
                                    <!-- navbar end -->

                                </div>
                                <!-- main-navigation end -->

                            </div>
                            <!-- header-right end -->

                        </div>
                    </div>
                </div>
            </header>
            <!-- header end -->";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 176,  220 => 172,  216 => 171,  212 => 170,  208 => 169,  204 => 168,  195 => 162,  191 => 161,  187 => 160,  183 => 159,  175 => 154,  131 => 113,  17 => 1,);
    }
}
