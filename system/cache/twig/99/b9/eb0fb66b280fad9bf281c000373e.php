<?php

/* index.html */
class __TwigTemplate_99b9eb0fb66b280fad9bf281c000373e extends Twig_Template
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
        // line 2
        echo "
    <!-- Page Header -->
                <div class=\"content bg-image overflow-hidden\" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/img/photos/photo3@2x.jpg');\">
                    <div class=\"push-50-t push-15\">
                        <h1 class=\"h2 text-white animated zoomIn\">Dashboard</h1>
                        <h2 class=\"h5 text-white-op animated zoomIn\">Welcome Administrator</h2>
                    </div>
                </div>

                <!-- Stats -->
                <div class=\"content bg-white border-b\">
                    <div class=\"row items-push text-uppercase\">
                        <div class=\"col-xs-6 col-sm-3\">
                            <div class=\"font-w700 text-gray-darker animated fadeIn\">Product Sales</div>
                            <div class=\"text-muted animated fadeIn\"><small><i class=\"si si-calendar\"></i> Today</small></div>
                            <a class=\"h2 font-w300 text-primary animated flipInX\" ></a>
                        </div>
                        <div class=\"col-xs-6 col-sm-3\">
                            <div class=\"font-w700 text-gray-darker animated fadeIn\">Total Sales</div>
                            <div class=\"text-muted animated fadeIn\"><small><i class=\"si si-calendar\"></i> All Time</small></div>
                            <a class=\"h2 font-w300 text-primary animated flipInX\" ></a>
                        </div>
                        <div class=\"col-xs-6 col-sm-3\">
                            <div class=\"font-w700 text-gray-darker animated fadeIn\">Total Earnings</div>
                            <div class=\"text-muted animated fadeIn\"><small><i class=\"si si-calendar\"></i> All Time</small></div>
                            <a class=\"h2 font-w300 text-primary animated flipInX\" >
                            </a>
                        </div>
                        <div class=\"col-xs-6 col-sm-3\">
                            <div class=\"font-w700 text-gray-darker animated fadeIn\">Average Sale</div>
                            <div class=\"text-muted animated fadeIn\"><small><i class=\"si si-calendar\"></i> All Time</small></div>
                            <a class=\"h2 font-w300 text-primary animated flipInX\" >
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->
            <!-- Page Content -->
                    <!-- Page Header -->
                <div class=\"content\">
             
                    <div class=\"block\">
                        
                         <div class=\"block-header\">
                            <h3 class=\"block-title col-lg-6\" style=\"text-align: left;\">
                            Today  Sales Report 
                            </h3>
                            <span class=\"col-lg-6\" style=\"text-align: right;\">
                                  <a class=\"btn btn-default btn-rounded btn-condensed btn-sm\" data-toggle=\"tooltip\" title=\"Add New Product\" href=\"<?=base_url();?>account/product-add\"><span title=\"Add New Product\"class=\"fa fa-plus\"></span></a>
                            </span>
                        </div>
                    <div class=\"col-md-12\" style=\"padding-top: 20px;\"></div>
                    <div class=\"block-content\">
                            <table class=\"table table-bordered table-striped js-dataTable-full\">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Order Date</th>
                                        <th>Due Date</th>
                                        <th>Created By</th>
                                        <th>Buyer Name</th>
                                        <th>Cash Discount</th>
                                        <th>Grand Amount</th>
                                        <th>No of item</th>
                                        <th>Net</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(!empty(\$todaysalelist))
                                    {
                                    foreach (\$todaysalelist as \$value)
                                    {
                                    
                                    ?>
                                   <tr>
                                        <td><?=\$value->id?></td>
                                        <td><?=\$value->issue_date;?></td>
                                        <td><?=\$value->due_date?></td>
                                        <td><?php 
                                            if((\$value->created_by) == 0)
                                            { 
                                                echo 'Website';
                                            } 
                                            else
                                            { 
                                                echo  \"Admin\";
                                            }?>
                                        </td>
                                        <td><?=\$value->buyer_name?></td>
                                        <td><?=\$value->cash_discount?></td>
                                        <td><?=\$value->grand_amount?></td>
                                        <td><?=\$value->total_quantity?></td>
                                        <td><?=\$value->grand_amount?></td>
                                        <td>
                                            <?php
                                            if(\$value->shipped_status==0)
                                            {?>
                                                <span class=\"label label-warning\">Order Placed</span>
                                           <?php }
                                           else
                                           {?>
                                               <span class=\"label label-success\">Shipped</span></td>
                                          <?php }
                                            ?>
                                            
                                            
                                    <td>
                                        <a class=\"btn-sm editField\" href=\"<?=base_url();?>account/sale-detail/<?=\$value->id?>\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-product_id=\"71\" data-href=\"\" data-type=\"sale_detail\" data-original-title=\"View Sale detail\">
                                        <span class=\"fa fa-eye\"></span>
                                        </a>
                                    </td>
                                </tr>
                                    <?php }
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 

                 
                    <div class=\"block\">
                        
                         <div class=\"block-header\">
                            <h3 class=\"block-title col-lg-6\" style=\"text-align: left;\">
                            Today New User Register
                            </h3>
                            <span class=\"col-lg-6\" style=\"text-align: right;\">
                                  <a class=\"btn btn-default btn-rounded btn-condensed btn-sm\" data-toggle=\"tooltip\" title=\"Add New Product\" href=\"<?=base_url();?>account/product-add\"><span title=\"Add New Product\"class=\"fa fa-plus\"></span></a>
                            </span>
                        </div>
                    <div class=\"col-md-12\" style=\"padding-top: 20px;\"></div>
                    <div class=\"block-content\">
                            <table class=\"table table-bordered table-striped js-dataTable-full\">
                                <thead>
                                    <tr>
                                        <th>Customer Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Phone</th>
                                        <th>Created By</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(!empty(\$customer_list))
                                    {
                                    foreach (\$customer_list as \$value)
                                    {
                                    
                                    ?>
                                   <tr>
                                        <td><?=\$value->customer_id?></td>
                                        <td style=\"text-transform: capitalize;\"><?=\$value->first_name?></td>
                                        <td style=\"text-transform: capitalize;\"><?=\$value->last_name?></td>
                                        <td><?=\$value->email?></td>
                                        <td><?=\$value->password?></td>
                                        <td><?=\$value->phone?></td>
                                        <td><?php 
                                            if((\$value->created_by) == 0)
                                            { 
                                                echo 'Website';
                                            } 
                                            else
                                            { 
                                                echo  \"Admin\";
                                            }?>
                                        </td>
                                        <td><?=\$value->created_date?></td>
                                </tr>
                                    <?php }
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
        return array (  33 => 4,  29 => 2,  26 => 1,);
    }
}
