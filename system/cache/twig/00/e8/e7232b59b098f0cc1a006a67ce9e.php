<?php

/* visiMisi.html */
class __TwigTemplate_00e8e7232b59b098f0cc1a006a67ce9e extends Twig_Template
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
                                <li class=\"active\">Visi &amp; Misi</li>
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
                            <h1 class=\"text-center\">Visi &amp; Misi</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
                            <br>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h2 class=\"title\">iDea - Responsive Website Theme</h2>
                                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-1.png\" alt=\"\">
                                    <div class=\"space hidden-md hidden-lg\"></div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"panel-group panel-dark\" id=\"accordion\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <h4 class=\"panel-title\">
                                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
                                                        <i class=\"fa fa-bold\"></i>Visi
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                                                <div class=\"panel-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <h4 class=\"panel-title\">
                                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" class=\"collapsed\">
                                                        <i class=\"fa fa-leaf\"></i>Misi
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                                                <div class=\"panel-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->
            <!-- ================ -->
            <div class=\"section parallax light-translucent-bg parallax-bg-3\">
                <div class=\"container\">
                    <div class=\"call-to-action\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <h1 class=\"title text-center\">Clean &amp; Powerful Bootstrap Theme</h1>
                                <p class=\"text-center\">Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"text-center\">
                                    <a href=\"#\" class=\"btn btn-default btn-lg\">Purchase</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->

            <div class=\"section clearfix\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <h1 class=\"text-center\">Strategi KPID Provinsi Jawa Barat</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium<br> laudantium molestias similique. Quisquam incidunt ut laboriosam.</p>
                            
                            <!-- Tabs start -->
                            <!-- ================ -->
                            <div class=\"vertical hc-tabs\">

                                <!-- Tabs Top -->
                                <div class=\"hc-tabs-top\">
                                    <img data-tab=\"#tab1\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-1.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <img data-tab=\"#tab2\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-2.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <img data-tab=\"#tab3\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-3.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <img data-tab=\"#tab4\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-4.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <div class=\"space\"></div>
                                </div>
                                
                                <!-- Tabs Arrow -->
                                <div class=\"arrow hidden-sm hidden-xs\"><i class=\"fa fa-caret-up\"></i></div>
                                
                                <!-- Nav tabs -->
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li class=\"active\"><a href=\"#tab1\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-magic pr-10\"></i> Partisipatory (keikutsertaan) </a></li>
                                    <li><a href=\"#tab2\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-life-saver pr-10\"></i> Kooperatif (kerjasama) </a></li>
                                    <li><a href=\"#tab3\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-expand pr-10\"></i> Komunikatif </a></li>
                                    <li><a href=\"#tab4\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-file-o pr-10\"></i> Problem Solving (penyelesaianmasalah)</a></li>
                                    <li><a href=\"#tab5\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-expand pr-10\"></i> Program Oriented (berorientasipada program) </a></li>
                                    <li><a href=\"#tab6\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-file-o pr-10\"></i> Holding Hand Together (kebersamaan)</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade in active\" id=\"tab1\">
                                        <h1 class=\"text-center title\">Partisipatory (keikutsertaan)</h1>
                                        <div class=\"space\"></div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-icons\">
                                                    <li><i class=\"icon-check pr-10\"></i> Lorem ipsum dolor sit amet maiores</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Consectetur adipisicing elit</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Aut earum numquam hic placeat</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Vitae magnam commodi repellendus</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Expedita placeat omnis pariatur</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab2\">
                                        <h1 class=\"text-center title\">Kooperatif (kerjasama)</h1>
                                        <div class=\"space\"></div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-icons\">
                                                    <li><i class=\"icon-check pr-10\"></i> Consectetur adipisicing elit</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Aut earum numquam hic placeat</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Vitae magnam commodi repellendus</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Expedita placeat omnis pariatur</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Lorem ipsum dolor sit amet maiores</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab3\">
                                        <h1 class=\"text-center title\">Komunikatif (Communicative)</h1>
                                        <div class=\"space\"></div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-icons\">
                                                    <li><i class=\"icon-check pr-10\"></i> Aut earum numquam hic placeat</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Vitae magnam commodi repellendus</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Expedita placeat omnis pariatur</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Lorem ipsum dolor sit amet maiores</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Consectetur adipisicing elit</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab4\">
                                        <h1 class=\"text-center title\">Problem Solving (penyelesaianmasalah)</h1>
                                        <div class=\"space\"></div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-icons\">
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Vitae magnam commodi repellendus</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Expedita placeat omnis pariatur</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Lorem ipsum dolor sit amet maiores</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Consectetur adipisicing elit</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Aut earum numquam hic placeat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab5\">
                                        <h1 class=\"text-center title\">Program Oriented (berorientasipada program)</h1>
                                        <div class=\"space\"></div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-icons\">
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Vitae magnam commodi repellendus</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Expedita placeat omnis pariatur</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Lorem ipsum dolor sit amet maiores</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Consectetur adipisicing elit</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Aut earum numquam hic placeat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab6\">
                                        <h1 class=\"text-center title\">Holding Hand Together (kebersamaan)</h1>
                                        <div class=\"space\"></div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-icons\">
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Vitae magnam commodi repellendus</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Expedita placeat omnis pariatur</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Fugiat rem consequatur neque</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Lorem ipsum dolor sit amet maiores</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Consectetur adipisicing elit</li>
                                                    <li><i class=\"icon-check pr-10\"></i> Aut earum numquam hic placeat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tabs end -->
                
                        </div>
                    </div>
                </div>
            </div>

";
        // line 242
        $this->env->loadTemplate("footer.html")->display($context);
        // line 243
        echo "
";
    }

    public function getTemplateName()
    {
        return "visiMisi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 243,  290 => 242,  157 => 112,  153 => 111,  149 => 110,  145 => 109,  65 => 32,  40 => 10,  30 => 2,  26 => 1,);
    }
}
