<?php

/* komisioner.html */
class __TwigTemplate_d25027b8f372c2f2fc86ca27ac56b161 extends Twig_Template
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
        // line 2
        echo "            
            <!-- page-intro start-->
            <!-- ================ -->
            <div class=\"page-intro\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <ol class=\"breadcrumb\">
                                <li><i class=\"fa fa-home pr-10\"></i><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Beranda</a></li>
                                <li class=\"active\">Komisioner</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-intro end -->

            <!-- section start -->
            <!-- ================ -->
            <div class=\"section clearfix\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <h1 class=\"text-center\">Struktur Kelembagaan</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium<br> laudantium molestias similique. Quisquam incidunt ut laboriosam.</p>
                            
                            <!-- Tabs start -->
                            <!-- ================ -->
                            <div class=\"vertical hc-tabs\">

                                <!-- Tabs Top -->
                                
                                    <img data-tab=\"#tab1\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-1.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <div class=\"space\"></div>
                               
                                
                                <!-- Tabs Arrow -->
                                <div class=\"arrow hidden-sm hidden-xs\"><i class=\"fa fa-caret-up\"></i></div>
                                
                               
                            </div>
                            <!-- tabs end -->
                
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->

            <!-- section start -->
            <!-- ================ -->
            <div class=\"section clearfix\">
                <div class=\"container\">

                    <h1 class=\"text-center\">Komisioner</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium<br> laudantium molestias similique. Quisquam incidunt ut laboriosam.</p>
                    <div class=\"separator-2\"></div>

                    <div class=\"row grid-space-20\">
                        <div class=\"col-sm-4\">
                            <div class=\"image-box team-member\">
                                <div class=\"overlay-container\">
                                    <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/team-member-1.jpg\" alt=\"\">
                                    <div class=\"overlay\">
                                        <ul class=\"social-links colored clearfix\">
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"image-box-body\">
                                    <h3 class=\"title\">DR. Dedeh Fardiah, M.Si </h3>
                                    <small>CEO</small>
                                    <div class=\"separator-2\"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, optio voluptate sapiente hic.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"image-box team-member\">
                                <div class=\"overlay-container\">
                                    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/team-member-2.jpg\" alt=\"\">
                                    <div class=\"overlay\">
                                        <ul class=\"social-links colored clearfix\">
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"image-box-body\">
                                    <h3 class=\"title\"> Dadan Saputra, S.Pd., M.Si.</h3>
                                    <small>CTO</small>
                                    <div class=\"separator-2\"></div>
                                    <p>Deserunt inventore dolorum iste expedita vel odio doloremque corporis officia tenetur quam quae atque.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"image-box team-member\">
                                <div class=\"overlay-container\">
                                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/team-member-3.jpg\" alt=\"\">
                                    <div class=\"overlay\">
                                        <ul class=\"social-links colored clearfix\">
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"image-box-body\">
                                    <h3 class=\"title\">Neneng Athiatul Faiziyah, S.Ag, M.I.kom.</h3>
                                    <small>Project Manager</small>
                                    <div class=\"separator-2\"></div>
                                    <p>Dolorum deserunt inventore iste expedita vel odio doloremque corporis officia atque enetur quam quae.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"image-box team-member\">
                                <div class=\"overlay-container\">
                                    <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/team-member-3.jpg\" alt=\"\">
                                    <div class=\"overlay\">
                                        <ul class=\"social-links colored clearfix\">
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"image-box-body\">
                                    <h3 class=\"title\">Ir. Irianto Edi Pramono</h3>
                                    <small>Project Manager</small>
                                    <div class=\"separator-2\"></div>
                                    <p>Dolorum deserunt inventore iste expedita vel odio doloremque corporis officia atque enetur quam quae.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"image-box team-member\">
                                <div class=\"overlay-container\">
                                    <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/team-member-3.jpg\" alt=\"\">
                                    <div class=\"overlay\">
                                        <ul class=\"social-links colored clearfix\">
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"image-box-body\">
                                    <h3 class=\"title\">DR. Mahi M. Hikmat, M.Si </h3>
                                    <small>Project Manager</small>
                                    <div class=\"separator-2\"></div>
                                    <p>Dolorum deserunt inventore iste expedita vel odio doloremque corporis officia atque enetur quam quae.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"image-box team-member\">
                                <div class=\"overlay-container\">
                                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/team-member-3.jpg\" alt=\"\">
                                    <div class=\"overlay\">
                                        <ul class=\"social-links colored clearfix\">
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"image-box-body\">
                                    <h3 class=\"title\">DR. Aep Wahyudin, M.Ag </h3>
                                    <small>Project Manager</small>
                                    <div class=\"separator-2\"></div>
                                    <p>Dolorum deserunt inventore iste expedita vel odio doloremque corporis officia atque enetur quam quae.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"image-box team-member\">
                                <div class=\"overlay-container\">
                                    <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/team-member-3.jpg\" alt=\"\">
                                    <div class=\"overlay\">
                                        <ul class=\"social-links colored clearfix\">
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-instagram\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"image-box-body\">
                                    <h3 class=\"title\">Mokhamad Syaifurrohman, S.S</h3>
                                    <small>Project Manager</small>
                                    <div class=\"separator-2\"></div>
                                    <p>Dolorum deserunt inventore iste expedita vel odio doloremque corporis officia atque enetur quam quae.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"space\"></div>
                </div>
            </div>
            <!-- section end -->


            ";
        // line 211
        $this->env->loadTemplate("footer.html")->display($context);
        // line 212
        echo "
";
    }

    public function getTemplateName()
    {
        return "komisioner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 212,  268 => 211,  241 => 187,  218 => 167,  195 => 147,  172 => 127,  149 => 107,  126 => 87,  103 => 67,  69 => 36,  40 => 10,  30 => 2,  26 => 1,);
    }
}
