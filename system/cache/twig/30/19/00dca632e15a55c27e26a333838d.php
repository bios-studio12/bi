<?php

/* beritaPost.html */
class __TwigTemplate_301900dca632e15a55c27e26a333838d extends Twig_Template
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
\t<!-- page-intro start-->
\t\t\t<!-- ================ -->
\t\t\t<div class=\"page-intro\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-home pr-10\"></i><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Berita-Post</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- page-intro end -->


\t\t\t<!-- main-container start -->
\t\t\t<!-- ================ -->
\t\t\t<section class=\"main-container\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- main start -->
\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t<div class=\"main col-md-8\">

\t\t\t\t\t\t\t<!-- page-title start -->
\t\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t\t<h1 class=\"page-title\">Judul Berita</h1>
\t\t\t\t\t\t\t<!-- page-title end -->

\t\t\t\t\t\t\t<!-- blogpost start -->
\t\t\t\t\t\t\t<article class=\"clearfix blogpost full\">
\t\t\t\t\t\t\t\t<div class=\"blogpost-body\">
\t\t\t\t\t\t\t\t\t<div class=\"side\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">12</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Sept 2016</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"affix\"><span class=\"share\">Share This</span><div id=\"share\"></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blogpost-content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submitted\"><i class=\"fa fa-user pr-5\"></i> by <a href=\"#\">John Doe</a></div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-carousel content-slider-with-controls\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-1.jpg\" class=\"popup-img overlay\" title=\"image title\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-2.jpg\" class=\"popup-img overlay\" title=\"image title\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-3.jpg\" class=\"popup-img overlay\" title=\"image title\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>Amet culpa, accusamus. Temporibus animi, consequatur cumque natus, esse consequuntur voluptatibus deleniti necessitatibus autem architecto quaerat tenetur nobis, ea maxime saepe rem doloribus placeat aliquid quod, id fuga ratione error harum ex! Facere vero veniam ducimus nulla sed possimus nobis nisi maiores quibusdam, nam odit quos dolores laborum pariatur distinctio in ex culpa impedit. Corrupti sequi perferendis atque nam debitis ea sunt, vel mollitia voluptas tempora eaque 
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t\t\t\t<p>Inventore, distinctio esse impedit deleniti, magnam minus culpa quia repellendus eligendi nam, omnis qui odio dolorem autem molestias eveniet tempora rem odit possimus! At ea quidem, ipsa ducimus harum quod neque expedita perferendis, quis odio officiis dicta facere qui architecto! Neque, odio quidem a cum perferendis doloribus iure aut ducimus, eveniet commodi unde consequatur iusto error excepturi perspiciatis cupiditate voluptates ad, minus, magnam voluptatem tempora quae at temporibus incidunt. est reprehenderit, voluptates culpa, numquam minima.</p>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, eligendi cum officiis sint eveniet omnis eius quo. Et iusto eos dolor ratione nesciunt praesentium eveniet distinctio repellat. Quas, soluta, ipsam.</p>
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
\t\t\t\t\t\t\t\t\t\t</blockquote>                                        
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-icons\">
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-check\"></i> Eveniet distinctio repellat</li>
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-check\"></i> Sdipisicing elit</li>
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-check\"></i> Sint eveniet omnis eius quo</li>
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-check\"></i> Dolor ratione nesciunt</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"clearfix\">
\t\t\t\t\t\t\t\t\t<ul class=\"links pull-left\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment-o pr-5\"></i> <a href=\"#\">22 comments</a> |</li> 
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-tags pr-5\"></i> <a href=\"#\">tag 1</a>, <a href=\"#\">tag 2</a>, <a href=\"#\">long tag 3</a> </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- blogpost end -->

\t\t\t\t\t\t\t<!-- comments start -->
\t\t\t\t\t\t\t<div class=\"comments\">
\t\t\t\t\t\t\t\t<h2 class=\"title\">There are 3 comments</h2>

\t\t\t\t\t\t\t\t<!-- comment start -->
\t\t\t\t\t\t\t\t<div class=\"comment clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"comment-avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avatar.jpg\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"comment-content\">
\t\t\t\t\t\t\t\t\t\t<h3>Comment title</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-meta\">By <a href=\"#\">admin</a> | Today, 12:31</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\" class=\"btn btn-gray more pull-right\"><i class=\"fa fa-reply\"></i> Reply</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- comment start -->
\t\t\t\t\t\t\t\t\t<div class=\"comment clearfix\">
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-avatar\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avatar.jpg\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Comment title</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-meta\">By <a href=\"#\">admin</a> | Today, 12:31</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\" class=\"btn btn-gray more pull-right\"><i class=\"fa fa-reply\"></i> Reply</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- comment end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- comment end -->

\t\t\t\t\t\t\t\t<!-- comment start -->
\t\t\t\t\t\t\t\t<div class=\"comment clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"comment-avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avatar.jpg\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"comment-content clearfix\">
\t\t\t\t\t\t\t\t\t\t<h3>Comment title</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-meta\">By <a href=\"#\">admin</a> | Today, 12:31</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\" class=\"btn btn-gray more pull-right\"><i class=\"fa fa-reply\"></i> Reply</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- comment end -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- comments end -->

\t\t\t\t\t\t\t<!-- comments form start -->
\t\t\t\t\t\t\t<div class=\"comments-form\">
\t\t\t\t\t\t\t\t<h2 class=\"title\">Add your comment</h2>
\t\t\t\t\t\t\t\t<form role=\"form\" id=\"comment-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name4\">Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name4\" placeholder=\"\" name=\"name4\" required>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label for=\"subject4\">Subject</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"subject4\" placeholder=\"\" name=\"subject4\" required>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message4\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"8\" id=\"message4\" placeholder=\"\" name=\"message4\" required></textarea>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- comments form end -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main end -->

\t\t\t\t\t\t<!-- sidebar start -->
\t\t\t\t\t\t<aside class=\"col-md-3 col-md-offset-1\">
\t\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Sidebar menu</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"blog-right-sidebar.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-3col.html\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"page-about.html\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"page-contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Latest tweets</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<ul class=\"tweets\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href=\"#\">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href=\"#\">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Featured Post</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-sidebar.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/blog-sidebar.jpg\" class=\"popup-img-single\" title=\"image title\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-box-body\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"blog-post.html\">Post Title</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\" class=\"link\"><span>Read More</span></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Text Sample</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nemo, necessitatibus, expedita voluptate esse ipsam aliquid blanditiis maxime sequi veniam suscipit atque sapiente cum voluptatum quos mollitia laborum? Esse, officia!</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Testimonial</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<blockquote class=\"margin-clear\">
\t\t\t\t\t\t\t\t\t\t<p>Design is not just what it looks like and feels like. Design is how it works.</p>\t
\t\t\t\t\t\t\t\t\t\t<footer><cite title=\"Source Title\">Steve Jobs </cite></footer>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<blockquote class=\"margin-clear\">
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>\t
\t\t\t\t\t\t\t\t\t\t<footer><cite title=\"Source Title\">Steve Doe </cite></footer>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Portfolio</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"gallery row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/gallery-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\" class=\"overlay small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/gallery-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\" class=\"overlay small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/gallery-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\" class=\"overlay small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/gallery-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\" class=\"overlay small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/gallery-5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\" class=\"overlay small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/gallery-6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio-item.html\" class=\"overlay small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Tags</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"tags-cloud\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">energy</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">business</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">food</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">fashion</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">finance</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">culture</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">health</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">sports</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">life style</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">books</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<form role=\"search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</aside>
\t\t\t\t\t\t<!-- sidebar end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- main-container end -->


";
        // line 348
        $this->env->loadTemplate("footer.html")->display($context);
        // line 349
        echo "
";
    }

    public function getTemplateName()
    {
        return "beritaPost.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 349,  432 => 348,  367 => 286,  356 => 278,  345 => 270,  334 => 262,  323 => 254,  312 => 246,  275 => 212,  268 => 208,  187 => 130,  165 => 111,  148 => 97,  109 => 61,  105 => 60,  99 => 57,  95 => 56,  89 => 53,  85 => 52,  40 => 10,  30 => 2,  26 => 1,);
    }
}
