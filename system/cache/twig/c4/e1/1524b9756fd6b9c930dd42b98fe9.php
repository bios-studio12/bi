<?php

/* login.html */
class __TwigTemplate_c4e11524b9756fd6b9c930dd42b98fe9 extends Twig_Template
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
    <title>Admin - KPID Provinsi Jawa Barat</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/flag-icon.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/css/cs-skin-elastic.css\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/scss/style.css\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body class=\"bg-dark\">

    <div class=\"sufee-login d-flex align-content-center flex-wrap\">
        <div class=\"container\">
            <div class=\"login-content\">
                <div class=\"login-logo\">
                    <a href=\"index.html\">
                        <img class=\"align-content\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/logo.jpg\" alt=\"\">
                    </a>
                </div>
                <div class=\"login-form\">
                    <form role=\"form\" method=\"post\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "sys/auth/\">
                        <div class=\"form-group\">
                            <label>Username</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-success btn-flat m-b-30 m-t-30\">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/vendor/jquery-2.1.4.min.js\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/popper.min.js\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/plugins.js\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/admin/js/main.js\"></script>

</body>

</html>  ";
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
        return array (  113 => 59,  109 => 58,  105 => 57,  101 => 56,  81 => 39,  74 => 35,  57 => 21,  52 => 19,  48 => 18,  44 => 17,  40 => 16,  36 => 15,  32 => 14,  17 => 1,);
    }
}
