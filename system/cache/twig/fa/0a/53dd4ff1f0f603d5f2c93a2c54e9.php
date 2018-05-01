<?php

/* index.html */
class __TwigTemplate_fa0a53dd4ff1f0f603d5f2c93a2c54e9 extends Twig_Template
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
        $this->env->loadTemplate("header.html")->display($context);
        $this->env->loadTemplate("slider.html")->display($context);
        // line 2
        echo "
            <!-- page-top start-->
            <!-- ================ -->
            <div class=\"page-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            <div class=\"call-to-action\">
                                <h1 class=\"title\">Selamat Datang Di Website KPID Provinsi Jawa Barat</h1>
                                <p>Sed ut Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit  voluptatem accusan tium </p>
                                
                                <!-- <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Kontak\" class=\"btn btn-default contact\">Contact us <i class=\"pl-10 fa fa-phone\"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-top end -->



            <section class=\"main-container parallax light-translucent-bg  parallax-bg-3 gray-bg\">

                <!-- main start -->
                <!-- ================ -->
                <div class=\"main\">
                    <div class=\"container\">
                        <div class=\"call-to-action\">
                            <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1 class=\"text-center title\">Menu</h1>
                                <div class=\"separator\"></div>
                                <p class=\"text-center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"box-style-1 white-bg object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"0\">
                                            <i class=\"fa fa-user-circle-o\"></i>
                                            <h2>Pengaduan</h2>
                                            <p>Voluptatem ad provident non <a href=\"#\">repudiandae</a> veritatis beatae cupiditate amet reiciendis.</p>
                                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Pengaduan\" class=\"btn-default btn\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"box-style-1 white-bg object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\">
                                            <i class=\"fa fa-pencil-square-o\"></i>
                                            <h2>Perizinan</h2>
                                            <p>Iure sequi unde hic. Sapiente quaerat labore sequi inventore veritatis cumque.</p>
                                            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Perizinan\" class=\"btn-default btn\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"box-style-1 white-bg object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"400\">
                                            <i class=\"fa fa-laptop\"></i>
                                            <h2>Media</h2>
                                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
                                            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Media\" class=\"btn-default btn\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->

            </section>
            <!-- main-container end -->

            <!-- section start -->
            <!-- ================ -->
            <div class=\"section clearfix\">

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <h2>Galeri</h2>
                            <div class=\"separator-2\"></div>
                            <p>Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
                            <div class=\"owl-carousel carousel\">
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"300\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-1.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-1.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"200\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-2.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-2.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"100\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-3.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-3.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"0\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-4.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-4.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-5.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-5.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-6.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-6.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-7.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-7.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-8.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-8.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Galeri\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- section end -->

            <!-- section start -->
            <!-- ================ -->
            <div class=\"section parallax light-translucent-bg parallax-bg-3\">
                <div class=\"container\">
                    <div class=\"call-to-action\">
                        <!-- <div class=\"row\">
                            <div class=\"col-md-8\">
                                <h1 class=\"title text-center\">Clean &amp; Powerful Bootstrap Theme</h1>
                                <p class=\"text-center\">Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"text-center\">
                                    <a href=\"#\" class=\"btn btn-default btn-lg\">Purchase</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- section end -->

            <!-- section start -->
            <!-- ================ -->
            <div class=\"section gray-bg clearfix\">
                <div class=\"owl-carousel content-slider\">
                    <div class=\"testimonial\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">
                                    <h2 class=\"title\">Just Perfect!</h2>
                                    <div class=\"testimonial-image\">
                                        <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/testimonial-1.jpg\" alt=\"Jane Doe\" title=\"Jane Doe\" class=\"img-circle\">
                                    </div>
                                    <div class=\"testimonial-body\">
                                        <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium,  totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                                        <div class=\"testimonial-info-1\">- Jane Doe</div>
                                        <div class=\"testimonial-info-2\">By Company</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">
                                    <h2 class=\"title\">Wow amazing!</h2>
                                    <div class=\"testimonial-image\">
                                        <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/testimonial-2.jpg\" alt=\"Jane Doe\" title=\"Jane Doe\" class=\"img-circle\">
                                    </div>
                                    <div class=\"testimonial-body\">
                                        <p>Turpis arcu rutrum nunc, ac laoreet turpis augue a justo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, esse, animi maxime voluptate tempore at sunt labore incidunt nulla dignissimos iusto ad similique inventore distinctio quam repellendus itaque minus minima.</p>
                                        <div class=\"testimonial-info-1\">- John Doe</div>
                                        <div class=\"testimonial-info-2\">By Company</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">
                                    <h2 class=\"title\">Thanks!</h2>
                                    <div class=\"testimonial-image\">
                                        <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/testimonial-3.jpg\" alt=\"Jane Doe\" title=\"Jane Doe\" class=\"img-circle\">
                                    </div>
                                    <div class=\"testimonial-body\">
                                        <p>Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform fully tested expertise with competitive technologies ac laoreet turpis augue a justo.</p>
                                        <div class=\"testimonial-info-1\">- John Doe</div>
                                        <div class=\"testimonial-info-2\">By Company</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->

            <!-- section start -->
            <!-- ================ -->
            <div class=\"section clearfix\">

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <h2>Berita</h2>
                            <div class=\"separator-2\"></div>
                            <p>Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
                            <div class=\"owl-carousel carousel\">
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"300\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-1.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-1.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"200\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-2.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-2.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"100\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-3.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-3.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box object-non-visible\" data-animation-effect=\"fadeInLeft\" data-effect-delay=\"0\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-4.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-4.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-5.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 369
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-5.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 376
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-6.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 384
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-6.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 391
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-7.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-7.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                                <div class=\"image-box\">
                                    <div class=\"overlay-container\">
                                        <img src=\"";
        // line 411
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-8.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"overlay-links\">
                                                <a href=\"";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/portfolio-8.jpg\" class=\"popup-img\"><i class=\"fa fa-search-plus\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"image-box-body\">
                                        <h3 class=\"title\"><a href=\"portfolio-item.html\">Project Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                                        <a href=\"";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/BeritaPost\" class=\"link\"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- section end -->



            ";
        // line 435
        $this->env->loadTemplate("footer.html")->display($context);
        // line 436
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 436,  631 => 435,  614 => 421,  604 => 414,  598 => 411,  590 => 406,  580 => 399,  574 => 396,  566 => 391,  556 => 384,  550 => 381,  542 => 376,  532 => 369,  526 => 366,  518 => 361,  508 => 354,  502 => 351,  494 => 346,  484 => 339,  478 => 336,  470 => 331,  460 => 324,  454 => 321,  446 => 316,  436 => 309,  430 => 306,  398 => 277,  378 => 260,  358 => 243,  312 => 200,  302 => 193,  296 => 190,  288 => 185,  278 => 178,  272 => 175,  264 => 170,  254 => 163,  248 => 160,  240 => 155,  230 => 148,  224 => 145,  216 => 140,  206 => 133,  200 => 130,  192 => 125,  182 => 118,  176 => 115,  168 => 110,  158 => 103,  152 => 100,  144 => 95,  134 => 88,  128 => 85,  97 => 57,  86 => 49,  75 => 41,  44 => 13,  31 => 2,  26 => 1,);
    }
}
