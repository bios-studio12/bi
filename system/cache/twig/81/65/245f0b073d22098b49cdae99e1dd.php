<?php

/* berita.html */
class __TwigTemplate_8165245f0b073d22098b49cdae99e1dd extends Twig_Template
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
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-home pr-10\"></i><a href=\"index.html\">Beranda</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\">Berita</li>
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

\t\t\t\t\t\t<!-- sidebar start -->
\t\t\t\t\t\t<aside class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Twitter Sebelumnya</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<ul class=\"tweets\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"https://twitter.com/kpidjabar1/status/974180915046858752\">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href=\"#\">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href=\"#\">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t<h3 class=\"title\">Berita Sebelumnya</h3>
\t\t\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog-sidebar.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"images/blog-sidebar.jpg\" class=\"popup-img-single\" title=\"image title\"><i class=\"fa fa-search-plus\"></i></a>
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

\t\t\t\t\t\t<!-- main start -->
\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t<div class=\"main col-md-8 col-md-offset-1\">

\t\t\t\t\t\t\t<!-- page-title start -->
\t\t\t\t\t\t\t<!-- ================ -->
\t\t\t\t\t\t\t<h1 class=\"page-title\">Blog</h1>
\t\t\t\t\t\t\t<div class=\"separator-2\"></div>
\t\t\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla suscipit <br class=\"hidden-sm hidden-xs\"> unde rerum mollitia dolorum.</p>
\t\t\t\t\t\t\t<!-- page-title end -->

\t\t\t\t\t\t\t<!-- blogpost start -->
\t\t\t\t\t\t\t<article class=\"clearfix blogpost object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\">
\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t<img src=\"images/blog-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"images/blog-1.jpg\" class=\"popup-img-single\" title=\"image title\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blogpost-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">12</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Sept 2016</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blogpost-content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title\"><a href=\"blog-post.html\">Blogpost with image</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submitted\"><i class=\"fa fa-user pr-5\"></i> by <a href=\"#\">John Doe</a></div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"clearfix\">
\t\t\t\t\t\t\t\t\t<ul class=\"links pull-left\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment-o pr-5\"></i> <a href=\"#\">22 comments</a> |</li> 
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-tags pr-5\"></i> <a href=\"#\">tag 1</a>, <a href=\"#\">tag 2</a>, <a href=\"#\">long tag 3</a> </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a class=\"pull-right link\" href=\"blog-post.html\"><span>Read more</span></a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- blogpost end -->

\t\t\t\t\t\t\t<!-- blogpost start -->
\t\t\t\t\t\t\t<article class=\"clearfix blogpost object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\">
\t\t\t\t\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t\t\t\t\t\t<iframe class=\"embed-responsive-item\" src=\"//www.youtube.com/embed/91J8pLHdDB0\"></iframe>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blogpost-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">11</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Sept 2016</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blogpost-content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title\"><a href=\"blog-post.html\">Blogpost with embedded youtube video</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submitted\"><i class=\"fa fa-user pr-5\"></i> by <a href=\"#\">John Doe</a></div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"clearfix\">
\t\t\t\t\t\t\t\t\t<ul class=\"links pull-left\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment-o pr-5\"></i> <a href=\"#\">22 comments</a> |</li> 
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-tags pr-5\"></i> <a href=\"#\">tag 1</a>, <a href=\"#\">tag 2</a>, <a href=\"#\">long tag 3</a> </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a class=\"pull-right link\" href=\"blog-post.html\"><span>Read more</span></a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- blogpost end -->

\t\t\t\t\t\t\t<!-- blogpost start -->
\t\t\t\t\t\t\t<article class=\"clearfix blogpost object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\">
\t\t\t\t\t\t\t\t<div class=\"audio-wrapper\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/231321623&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blogpost-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">10</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Sept 2016</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blogpost-content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title\"><a href=\"blog-post.html\">Audio post</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submitted\"><i class=\"fa fa-user pr-5\"></i> by <a href=\"#\">John Doe</a></div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"clearfix\">
\t\t\t\t\t\t\t\t\t<ul class=\"links pull-left\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment-o pr-5\"></i> <a href=\"#\">22 comments</a> |</li> 
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-tags pr-5\"></i> <a href=\"#\">tag 1</a>, <a href=\"#\">tag 2</a>, <a href=\"#\">long tag 3</a> </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a class=\"pull-right link\" href=\"blog-post.html\"><span>Read more</span></a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- blogpost end -->

\t\t\t\t\t\t\t<!-- blogpost start -->
\t\t\t\t\t\t\t<article class=\"clearfix blogpost object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\">
\t\t\t\t\t\t\t\t<div class=\"blogpost-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">09</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Sept 2016</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blogpost-content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title\"><a href=\"blog-post.html\">Text post</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submitted\"><i class=\"fa fa-user pr-5\"></i> by <a href=\"#\">John Doe</a></div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"clearfix\">
\t\t\t\t\t\t\t\t\t<ul class=\"links pull-left\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment-o pr-5\"></i> <a href=\"#\">22 comments</a> |</li> 
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-tags pr-5\"></i> <a href=\"#\">tag 1</a>, <a href=\"#\">tag 2</a>, <a href=\"#\">long tag 3</a> </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a class=\"pull-right link\" href=\"blog-post.html\"><span>Read more</span></a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- blogpost end -->

\t\t\t\t\t\t\t<!-- blogpost start -->
\t\t\t\t\t\t\t<article class=\"clearfix blogpost object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\">
\t\t\t\t\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t\t\t\t\t<img src=\"images/blog-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-links\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"images/blog-2.jpg\" class=\"popup-img-single\" title=\"image title\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blogpost-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">01</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Sept 2016</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blogpost-content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title\"><a href=\"blog-post.html\">Lorem ipsum dolor sit amet aecenas ullamcorper</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submitted\"><i class=\"fa fa-user pr-5\"></i> by <a href=\"#\">John Doe</a></div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"clearfix\">
\t\t\t\t\t\t\t\t\t<ul class=\"links pull-left\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment-o pr-5\"></i> <a href=\"#\">22 comments</a> |</li> 
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-tags pr-5\"></i> <a href=\"#\">tag 1</a>, <a href=\"#\">tag 2</a>, <a href=\"#\">long tag 3</a> </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a class=\"pull-right link\" href=\"blog-post.html\"><span>Read more</span></a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- blogpost end -->

\t\t\t\t\t\t\t<!-- pagination start -->
\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">«</a></li>
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1 <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">»</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- pagination end -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- main-container end -->


";
        // line 257
        $this->env->loadTemplate("footer.html")->display($context);
        // line 258
        echo "
";
    }

    public function getTemplateName()
    {
        return "berita.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 258,  287 => 257,  30 => 2,  26 => 1,);
    }
}
