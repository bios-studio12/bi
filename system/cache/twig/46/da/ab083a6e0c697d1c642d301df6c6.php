<?php

/* login.html */
class __TwigTemplate_46daab083a6e0c697d1c642d301df6c6 extends Twig_Template
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

    <title>APOTIK MITRA</title>

    <!-- Front CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/front.css\" rel=\"stylesheet\">

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/sb-admin-2.css\" rel=\"stylesheet\">
    
    <!-- Custom Fonts -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Select JS -->
    <link href=\"";
        // line 30
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
                        <p class=\"loginTitle\">APOTIK</p>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Please Sign In</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form role=\"form\" id=\"loginForm\">
                                <fieldset>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Username\" id=\"email\" name=\"email\" type=\"text\" autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Password\" id=\"password\" name=\"password\" type=\"password\" value=\"\">
                                    </div><!-- 
                                    <div class=\"checkbox\">
                                        <label>
                                            <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
                                        </label>
                                    </div> -->
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"login()\"> Login </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <p class=\"loginCopyright\">Copyright &copy; 2017</p>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/metisMenu.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/sb-admin-2.js\"></script>

    <!-- Select JS -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/select.js\"></script>

    <script type=\"text/javascript\">
        function login() {
            var user = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var url = \"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/auth/login\"; 

            var status = true;
            if (user == \"\" || password == \"\") {
                alert(\"PERHATIAN! Mohon Form Login Dilengkapi .\");
                status = false;
            }
            if (status== true) {
                \$.ajax({
                    url : url,
                    type: \"POST\",
                    data: \$('#loginForm').serialize(),
                    dataType: \"JSON\",
                    success: function(data)
                    {
                        if (data.status == false) {
                            alert(\"Username & Password Tidak Cocok.\");
                        }
                        else{
                            window.location = \"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/\"; 
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert(\"GALAT! Login Gagal.\");
                    }
                });
            }
        }
    </script>
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
        return array (  174 => 120,  152 => 101,  143 => 95,  137 => 92,  131 => 89,  125 => 86,  119 => 83,  63 => 30,  57 => 27,  51 => 24,  45 => 21,  39 => 18,  33 => 15,  17 => 1,);
    }
}
