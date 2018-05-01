<?php

/* checkout.html */
class __TwigTemplate_caa8ce991d810cede041b341e65aa268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        // line 2
        echo "
<div class=\"content\">
        <div class=\"breadcrumb-container\">
            <div class=\"container\">
                <ul class=\"breadcrumb pull-left\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Books</a></li>
                    <li class=\"active\">Shopping cart</li>
                </ul><!-- /.breadcrumb -->

                <!-- ========================================= BREADCRUMB SEARCH BOX ========================================= -->
                <ul class=\"list-unstyled search-box pull-right\">
                    <li data-target=\"#search\" data-toggle=\"sub-header\"><button type=\"button\" class=\"btn btn-primary-dark search-button\"><i class=\"fa fa-search icon\"></i></button>
                        <div class=\"row search-action sub-header\" id=\"search\">
                            <div class=\"col-sm-8 col-xs-12 no-padding-right\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-btn\"><button class=\"btn btn-search\" type=\"button\"><i class=\"fa fa-search icon\"></i></button></span>
                                    <input type=\"text\" class=\"form-control search-book\" placeholder=\"Search books...\">
                                </div><!-- /.input-group -->
                            </div><!-- /.col -->

                            <div class=\"col-sm-4 col-xs-12 select-wrapper\" style=\"padding:0px;\">
                                <select id=\"id_select\" class=\"selectpicker\">
                                    <option selected>All Category</option>
                                    <option>Books</option>
                                    <option>Textbooks</option>
                                    <option>Audiobooks</option>
                                    <option>Magazines</option>
                                    <option>Kids</option>
                                </select>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </li>
                </ul><!-- /.search-box -->
                <!-- ========================================= BREADCRUMB SEARCH BOX : END ========================================= -->        

            </div><!-- /.container -->
        </div><!-- /.breadcrumb-container -->

        <div class=\"checkout page\">
            <div class=\"container\">
                <div class=\"page-header\">
                    <h2 class=\"page-title\">Checkout Information</h2>
                    <p class=\"page-subtitle\">DO eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div><!-- /.page-header -->

                <div class=\"page-body\">
                    <div class=\"panel-group\" id=\"accordion\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
                                        <span class=\"step\">1</span>checkout informations
                                    </a>
                                </h4>
                            </div><!-- /.panel-heading -->

                            <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                                <div class=\"panel-body\">
                                    <div class=\"row\">

                                   

                                        <div class=\"col-sm-4\">
                                            <form method=\"post\" role=\"form\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Member/\">
                                            <h3 class=\"panel-subtitle\">Login</h3>
                                            <div class=\"input-group margin-bottom-sm\">
                                                <span class=\"input-group-addon input-group-addon-book\">
                                                    <i class=\"fa fa-user fa-fw\"></i>
                                                </span>
                                                <input class=\"form-control form-control-book\" id=\"email\" name=\"email\" type=\"text\" placeholder=\"Youremail@email.com\">
                                            </div><!-- /.input-group -->

                                            <div class=\"row\">
                                                <div class=\"col-md-6 col-sm-12 no-padding-right\">
                                                    <div class=\"input-group input-group-book\">
                                                        <span class=\"input-group-addon input-group-addon-book\">
                                                            <i class=\"fa fa-key fa-fw\"></i>
                                                        </span>
                                                        <input class=\"form-control form-control-book\" id=\"password\" name=\"password\" type=\"password\" placeholder=\"*******\" />
                                                    </div><!-- /.input-group -->
                                                </div><!-- /.col -->

                                                <div class=\"col-sm-6 hidden-sm forgot-password-field\">
                                                    <div class=\"forgot-password\"><a href=\"#\">Forgot Password</a></div>
                                                </div><!-- /.col -->                                            
                                            </div><!-- /.row -->


                                            <div class=\"checkout-checkbox-option\">                                      
                                                <input type=\"checkbox\" class=\"book-radio\" name=\"optionsRadios\"  id=\"optionsRadios\" value=\"option2\" checked>                                        
                                                <label class=\"book-radio-label\" for=\"optionsRadios\">
                                                    <span class=\"radio-background\"><i class=\"icon fa fa-circle\"></i></span>Remember me
                                                </label>
                                            </div><!-- /.checkout-checkbox-option -->

                                            <br>
                                            <br>
                                             <button type=\"submit\"  class=\"btn btn-primary \" >Login</button>
                                            </form>
                                        </div><!-- /.col -->

                                        <div class=\"col-sm-4\">
                                            <form method=\"post\" id=\"register\">
                                            <h3 class=\"panel-subtitle\">Register</h3>
                                            <div class=\"input-group margin-bottom-sm\">
                                                <span class=\"input-group-addon input-group-addon-book\">
                                                    <i class=\"fa fa-user fa-fw\"></i>
                                                </span>
                                                <input class=\"form-control form-control-book\" id=\"nama\" name=\"nama\" type=\"text\" placeholder=\"Nama Lengkap\">
                                            </div><!-- /.input-group -->
                                            <div class=\"input-group margin-bottom-sm\">
                                                <span class=\"input-group-addon input-group-addon-book\">
                                                    <i class=\"fa fa-user fa-fw\"></i>
                                                </span>
                                                <input class=\"form-control form-control-book\" type=\"text\" id=\"email\" name=\"email\" placeholder=\"Youremail@email.com\">
                                            </div><!-- /.input-group -->

                                            <div class=\"row\">
                                                <div class=\"col-md-6 col-sm-12 no-padding-right\">
                                                    <div class=\"input-group input-group-book\">
                                                        <span class=\"input-group-addon input-group-addon-book\">
                                                            <i class=\"fa fa-key fa-fw\"></i>
                                                        </span>
                                                        <input class=\"form-control form-control-book\" id=\"password\" name=\"password\" type=\"password\" placeholder=\"*******\" />
                                                    </div><!-- /.input-group -->
                                                </div><!-- /.col -->
                                 
                                            </div><!-- /.row -->
                                            <br>
                                            <br>
                                             <button type=\"button\" id=\"btnAdd\" onclick=\"addData()\" class=\"btn btn-primary \" >Register</button>
                                            </form>
                                        </div><!-- /.col -->
                                        <div class=\"col-md-12\">
                                            <a href=\"cart.html\" class=\"pull-right btn btn-primary btn-checkout\">
                                                Continued Checkout  
                                                <i class=\"fa fa-chevron-right\"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel-collapse -->
                        </div><!-- /.panel -->

                        ";
        // line 147
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "kategori") == "user")) {
            // line 148
            echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" class=\"collapsed\" data-parent=\"#accordion\" href=\"#collapseThree\">
                                        <span class=\"step\">2</span>Shipping Information
                                    </a>
                                </h4>
                            </div><!-- /.panel-heading -->
                            <div id=\"collapseThree\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div class=\"form-container\">
                                        <form class=\"cnt-form\" role=\"form\">
                                            <div class=\"row field-row form-group\">
                                                <div class=\"col-xs-12 col-sm-6\">
                                                    <label>
                                                        Full Name
                                                        <span class=\"astk\">*</span>
                                                    </label>
                                                    <input class=\"form-control form-control-book\" type=\"text\">
                                                </div><!-- /.col -->
                                                <div class=\"col-xs-12 col-sm-6\">
                                                    <label>
                                                        Full Name
                                                        <span class=\"astk\">*</span>
                                                    </label>
                                                    <input class=\"form-control form-control-book\" type=\"text\">
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->

                                            <div class=\"row field-row form-group\">
                                                <div class=\"col-xs-12\">
                                                    <label>Company Name</label>
                                                    <input class=\"form-control form-control-book\" type=\"text\">
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->

                                            <div class=\"row field-row form-group\">
                                                <div class=\"col-xs-12 col-sm-6\">
                                                    <label>
                                                        Address
                                                        <span class=\"astk\">*</span>
                                                    </label>
                                                    <input class=\"form-control form-control-book\" data-placeholder=\"street address\" type=\"text\">
                                                </div><!-- /.col -->
                                                <div class=\"col-xs-12 col-sm-6\">
                                                    <label> </label>
                                                    <input class=\"form-control form-control-book\" data-placeholder=\"town\" type=\"text\">
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->

                                            <div class=\"row field-row form-group\">
                                                <div class=\"col-xs-12 col-sm-4\">
                                                    <label>
                                                        Postcode / Zip
                                                        <span class=\"astk\">*</span>
                                                    </label>
                                                    <input class=\"form-control form-control-book\" type=\"text\">
                                                </div><!-- /.col -->
                                                <div class=\"col-xs-12 col-sm-4\">
                                                    <label>
                                                        Email Address
                                                        <span class=\"astk\">*</span>
                                                    </label>
                                                    <input class=\"form-control form-control-book\" type=\"email\">
                                                </div><!-- /.col -->
                                                <div class=\"col-xs-12 col-sm-4\">
                                                    <label>
                                                        Phone Number
                                                        <span class=\"astk\">*</span>
                                                    </label>
                                                    <input class=\"form-control form-control-book\" type=\"text\">
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->

                                            <div class=\"row field-row form-group\">
                                                <div id=\"shipping-account\" class=\"col-xs-12\">
                                                    <label>
                                                        <input type=\"checkbox\"> Create Account?
                                                    </label>
                                                    - you will receive email with temporary generated password after login you need to change it. 
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </form><!-- /.cnt-form -->
                                    </div><!-- /.form-container -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel-collapse -->
                        </div><!-- /.panel -->

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a  data-toggle=\"collapse\" class=\"collapsed\" data-parent=\"#accordion\" href=\"#collapseShippingDetails\">
                                        <span class=\"step\">3</span>Shipping Method
                                    </a>
                                </h4>
                            </div><!-- /.panel-heading -->

                            <div id=\"collapseShippingDetails\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div class=\"form-container\">
                                        <form class=\"form cnt-form\">
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" checked=\"\" name=\"shipping-method\">
                                                    Normal Delivery
                                                    <br>
                                                    <small>2-5 Days.</small>
                                                </label>
                                            </div><!-- /.radio -->
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"shipping-method\">
                                                    Express Delivery
                                                    <br>
                                                    <small>2-5 Days.</small>
                                                </label>
                                            </div><!-- /.radio -->
                                        </form><!-- /.cnt-form -->
                                    </div><!-- /.form-container-->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel-collapse -->
                        </div><!-- /.panel -->

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a  data-toggle=\"collapse\" class=\"collapsed\" data-parent=\"#accordion\" href=\"#collapsePaymentInformation\">
                                        <span class=\"step\">4</span>Payment Information
                                    </a>
                                </h4>
                            </div><!-- /.panel-heading -->
                            <div id=\"collapsePaymentInformation\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div class=\"form-container\">
                                        <form class=\"cnt-form\" role=\"form\">
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" checked=\"\" name=\"payment\">
                                                    Direct Bank Transfer
                                                    <br>
                                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempus elit, vestibulum vestibulum erat ornare id.</small>
                                                </label>
                                            </div><!-- /.radio -->
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"payment\">
                                                    Cheque Payment
                                                </label>
                                            </div><!-- /.radio -->
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"payment\">
                                                    Cash on Delivery
                                                </label>
                                            </div><!-- /.radio -->
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"payment\">
                                                    Pay via Paypal
                                                </label>
                                            </div><!-- /.radio -->
                                            <div class=\"place-order-button\">
                                                <button class=\"btn btn-primary btn-checkout\" type=\"submit\">place order</button>
                                            </div>
                                        </form><!-- /.cnt-form -->
                                    </div><!-- /.form-container -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel-collapse -->
                        </div><!-- /.panel -->
                        ";
        }
        // line 318
        echo "                    </div><!-- /.panel-group -->
                </div><!-- /.page-body -->
            </div><!-- /.container -->
        </div><!-- /.checkout page -->














        <a class=\"scrollup hidden-xs hidden-sm\" href=\"#\" style=\"display: none;\"><img src=\"";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/top-scroll.png\" alt=\"\" ></a>
    </div>

    <div class=\"container\">
        <!-- ============================================================= BRANDS ============================================================= -->
        <div class=\"row brands-block wow fadeInUp\">
            <div class=\"col-md-12\">
                <div class=\"page-header\">
                    <h2 class=\"page-title\">Brands</h2>
                    <p class=\"page-subtitle\">DO eiusmod tempor incid... et dolore magna aliqua</p>
                </div><!-- /.page-header -->

                <div class=\"page-body\">
                    <div id=\"owl-demo\" class=\"owl-carousel brand-carousel\">
                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                        <div class=\"item desat\">
                            <div class=\"brand-logo\">
                                <h5>brand</h5>
                                <h4>logo</h4>
                            </div>
                        </div><!-- /.item -->

                    </div><!-- /#owl-demo -->           
                </div><!-- /.page-body -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- ============================================================= BRANDS : END ============================================================= -->       
    </div><!-- /.container -->

";
    }

    // line 415
    public function block_js($context, array $blocks = array())
    {
        // line 416
        echo "
<script type=\"text/javascript\">

function addData()
    {
        \$('#btnAdd').text('Register...'); //change button text
        \$('#btnAdd').attr('disabled',true); //set button disable 
        var status = true;
        var url = \"";
        // line 424
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Member/addRegister\";
        var email = document.getElementById('email').value;

    if (status==true) {
            // ajax adding data to database
            \$.ajax({
                url : url,
                type: \"POST\",
                data: \$('#register').serialize(),
                dataType: \"JSON\",
                success: function(data)
                {
                    if (data.status == true) {
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 438
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/checkout\";
                    }else{
                        alert(\"Duplikat Email!!, Email Anda sudah ada\"); 
                        window.location = \"";
        // line 441
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/checkout\";
                    }
                    \$('#btnAdd').text('Register'); //change button text
                    \$('#btnAdd').attr('disabled',false); //set button enable 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(\"Gagal Menyimpan\");
                    \$('#btnAdd').text('Register'); //change button text
                    \$('#btnAdd').attr('disabled',false); //set button enable 

                }
            });
        }
        else
        {
            \$('#btnAdd').text('Register'); //change button text
            \$('#btnAdd').attr('disabled',false); //set button enable 
        }
    }

</script>



 ";
    }

    public function getTemplateName()
    {
        return "checkout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 441,  486 => 438,  469 => 424,  459 => 416,  456 => 415,  374 => 336,  354 => 318,  182 => 148,  180 => 147,  96 => 66,  30 => 2,  27 => 1,);
    }
}
