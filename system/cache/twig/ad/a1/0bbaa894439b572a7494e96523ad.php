<?php

/* regulasi.html */
class __TwigTemplate_ada10bbaa894439b572a7494e96523ad extends Twig_Template
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
\t\t\t<!-- ================ -->
\t\t\t<div class=\"page-intro\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-home pr-10\"></i><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Beranda</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Regulasi</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- page-intro end -->
<div class=\"section clearfix\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <h1 class=\"text-center\">Regulasi</h1>
                            <div class=\"separator\"></div>
                            <p class=\"lead text-center\">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium<br> laudantium molestias similique. Quisquam incidunt ut laboriosam.</p>
                            
                            <!-- Tabs start -->
                            <!-- ================ -->
                            <div class=\"vertical hc-tabs\">

                                <!-- Tabs Top -->
                                <div class=\"hc-tabs-top\">
                                    <img data-tab=\"#tab1\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-1.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <img data-tab=\"#tab2\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-2.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <img data-tab=\"#tab3\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-3.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <img data-tab=\"#tab4\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/section-image-4.png\" alt=\"iDea\" data-tab-animation-effect=\"fadeInRightSmall\">
                                    <div class=\"space\"></div>
                                </div>
                                
                                <!-- Tabs Arrow -->
                                <div class=\"arrow hidden-sm hidden-xs\"><i class=\"fa fa-caret-up\"></i></div>
                                
                                <!-- Nav tabs -->
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li class=\"active\"><a href=\"#tab1\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-magic pr-10\"></i> Undang - Undang No. 32 Tahun 2002 </a></li>
                                    <li><a href=\"#tab2\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-life-saver pr-10\"></i> Undang - Undang No. 32 Tahun 2004 </a></li>
                                    <li><a href=\"#tab3\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-expand pr-10\"></i> Undang - Undang No. 33 Tahun 2004 </a></li>
                                    <li><a href=\"#tab4\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-file-o pr-10\"></i> Undang- Undang No.12 Tahun 2011</a></li>
                                    <li><a href=\"#tab5\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-expand pr-10\"></i> PerMenkominfo No. 9 Tahu 2013 </a></li>
                                    <li><a href=\"#tab6\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-file-o pr-10\"></i> PerMendagri No. 19 Tahun 2008</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade in active\" id=\"tab1\">
                                        <h1 class=\"text-center title\">Undang - Undang No. 32 Tahun 2002 Tentang Penyiaran</h1>
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
                                        <h1 class=\"text-center title\">Undang - Undang No. 32 Tahun 2004 Tentang Pemerintahan Daerah</h1>
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
                                        <h1 class=\"text-center title\">Undang - Undang No. 33 Tahun 2004 Tentang Perimbangan Keuangan antara Pemerintah Pusat & Pemerintah Daerah</h1>
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
                                        <h1 class=\"text-center title\">Undang- Undang No.12 Tahun 2011 Tentang Pembentukan Peraturan Perundang-Undangan</h1>
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
                                        <h1 class=\"text-center title\">PerMenkominfo No. 9 Tahu 2013 Tentang Organisasi & Tata Kerja Sekretariat KPI</h1>
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
                                        <h1 class=\"text-center title\">PerMendagri No. 19 Tahun 2008 Tentang Struktur SekretariatKomisi Penyiaran Indonesia Daerah</h1>
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
        // line 166
        $this->env->loadTemplate("footer.html")->display($context);
        // line 167
        echo "
";
    }

    public function getTemplateName()
    {
        return "regulasi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 167,  211 => 166,  78 => 36,  74 => 35,  70 => 34,  66 => 33,  40 => 10,  30 => 2,  26 => 1,);
    }
}
