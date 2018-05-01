<?php

/* login.html */
class __TwigTemplate_d0423fb650d7fa825f9326c22c2b4e9f extends Twig_Template
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Master</title>

    

    <!-- Front CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/front.css\" rel=\"stylesheet\">

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/sb-admin-2.css\" rel=\"stylesheet\">
    
    <!-- Custom Fonts -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Select JS -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/select.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <div class=\"login-panel\">
                        <p class=\"loginTitle\">Master</p>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Please Sign In</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form role=\"form\" method=\"post\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/auth/\">
                                <fieldset>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"text\" autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
                                    </div><!-- 
                                    <div class=\"checkbox\">
                                        <label>
                                            <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
                                        </label>
                                    </div> -->
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type=\"submit\" class=\"btn btn-primary\"> Login </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <p class=\"loginCopyright\">&copy; Master 2017</p>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/metisMenu.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/sb-admin-2.js\"></script>

    <!-- Select JS -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/select.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 97,  142 => 94,  136 => 91,  130 => 88,  124 => 85,  93 => 57,  65 => 32,  59 => 29,  53 => 26,  47 => 23,  41 => 20,  35 => 17,  17 => 1,);
    }
}
