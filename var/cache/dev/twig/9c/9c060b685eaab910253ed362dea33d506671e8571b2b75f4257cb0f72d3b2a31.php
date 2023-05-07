<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* baseBack.html.twig */
class __TwigTemplate_79b0199ce51dacb43eb43e9db5767f51e653f29a602355381a5626ec07662baa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t  
     
       
\t    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
\t\t    ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "\t\t\t </head>
             <body>
              ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 134
        echo "               
    ";
        // line 135
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "
  ";
        // line 139
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t\t
<!-- google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap\" rel=\"stylesheet\">
<!-- fontawesome -->
\t<!-- google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap\" rel=\"stylesheet\">
\t<!-- fontawesome -->
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/all.min.css "), "html", null, true);
        echo "\">
\t<!-- bootstrap -->
\t<link rel=\"stylesheet\" href=\"  ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/css/bootstrap.min.css "), "html", null, true);
        echo "\">
\t<!-- owl carousel -->
\t<link rel=\"stylesheet\" href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" assets/css/owl.carousel.css "), "html", null, true);
        echo "\">
\t<!-- magnific popup -->
\t<link rel=\"stylesheet\" href=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css "), "html", null, true);
        echo "  \">
\t<!-- animate css -->
\t<link rel=\"stylesheet\" href=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css "), "html", null, true);
        echo " \">
\t<!-- mean menu css -->
\t<link rel=\"stylesheet\" href=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/meanmenu.min.css "), "html", null, true);
        echo "\">
\t<!-- main style -->
\t<link rel=\"stylesheet\" href=\" ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css "), "html", null, true);
        echo "\">
\t<!-- responsive -->
\t<link rel=\"stylesheet\" href=\" ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css "), "html", null, true);
        echo "\">

\t\t  
\t\t ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "\t\t\t
\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-1.11.3.min.js "), "html", null, true);
        echo "\" ></script>
\t<!-- bootstrap -->
\t<script src=\" ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js "), "html", null, true);
        echo " \"></script>
\t<!-- count down -->
\t<script src=\" ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" assets/js/jquery.countdown.js "), "html", null, true);
        echo " \"></script>
\t<!-- isotope -->
\t<script src=\" ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" assets/js/jquery.isotope-3.0.6.min.js "), "html", null, true);
        echo "\"></script>
\t<!-- waypoints -->
\t<script src=\" ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" assets/js/waypoints.js "), "html", null, true);
        echo "\"></script>
\t<!-- owl carousel -->
\t<script src=\" ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" assets/js/owl.carousel.min.js "), "html", null, true);
        echo "\"></script>
\t<!-- magnific popup -->
\t<script src=\" ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" assets/js/jquery.magnific-popup.min.js "), "html", null, true);
        echo "\"></script>
\t<!-- mean menu -->
\t<script src=\" ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.meanmenu.min.js "), "html", null, true);
        echo "\"></script>
\t<!-- sticker js -->
\t<script src=\" ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sticker.js "), "html", null, true);
        echo "\" ></script>
\t<!-- main js -->
\t<script src=\" ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js "), "html", null, true);
        echo "\"></script>

\t

\t\t\t ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 65
        echo "              <!-- header -->
\t<div class=\"top-header-area\" id=\"sticker\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 col-sm-12 text-center\">
\t\t\t\t\t<div class=\"main-menu-wrap\">
\t\t\t\t\t\t<!-- logo -->
\t\t\t\t\t\t<div class=\"site-logo\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/logo.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- logo -->

\t\t\t\t\t\t<!-- menu start -->
\t\t\t\t\t\t<nav class=\"main-menu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"current-list-item\"><a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Static Home</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_2.html\">Slider Home</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Cart</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Check Out</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single-news.html\">Single News</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Check Out</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single-product.html\">Single Product</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Cart</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"header-icons\">
\t\t\t\t\t\t\t\t\t\t<a class=\"shopping-cart\" href=\"cart.html\"><i class=\"fas fa-shopping-cart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"mobile-hide search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<a class=\"mobile-show search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mobile-menu\"></div>
\t\t\t\t\t\t<!-- menu end -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end header -->
\t
               ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 136
        echo "
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 140
        echo "  
\t<!-- footer -->
\t<div class=\"footer-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box about-widget\">
\t\t\t\t\t\t<h2 class=\"widget-title\">About us</h2>
\t\t\t\t\t\t<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box get-in-touch\">
\t\t\t\t\t\t<h2 class=\"widget-title\">Get in Touch</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
\t\t\t\t\t\t\t<li>support@fruitkha.com</li>
\t\t\t\t\t\t\t<li>+00 111 222 3333</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box pages\">
\t\t\t\t\t\t<h2 class=\"widget-title\">Pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t<li><a href=\"services.html\">Shop</a></li>
\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box subscribe\">
\t\t\t\t\t\t<h2 class=\"widget-title\">Subscribe</h2>
\t\t\t\t\t\t<p>Subscribe to our mailing list to get the latest updates.</p>
\t\t\t\t\t\t<form action=\"index.html\">
\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t<button type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end footer -->
     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  373 => 140,  363 => 139,  352 => 136,  342 => 135,  264 => 65,  254 => 64,  239 => 57,  234 => 55,  229 => 53,  224 => 51,  219 => 49,  214 => 47,  209 => 45,  204 => 43,  199 => 41,  194 => 39,  191 => 38,  181 => 37,  167 => 32,  162 => 30,  157 => 28,  152 => 26,  147 => 24,  142 => 22,  137 => 20,  132 => 18,  121 => 9,  111 => 8,  92 => 4,  82 => 139,  79 => 138,  77 => 135,  74 => 134,  72 => 64,  68 => 62,  66 => 37,  63 => 36,  61 => 8,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
\t\t  
     
       
\t    {% block stylesheets %}
\t\t
<!-- google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap\" rel=\"stylesheet\">
<!-- fontawesome -->
\t<!-- google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap\" rel=\"stylesheet\">
\t<!-- fontawesome -->
\t<link rel=\"stylesheet\" href=\"{{asset('assets/css/all.min.css ')}}\">
\t<!-- bootstrap -->
\t<link rel=\"stylesheet\" href=\"  {{asset('assets/bootstrap/css/bootstrap.min.css ')}}\">
\t<!-- owl carousel -->
\t<link rel=\"stylesheet\" href=\" {{asset(' assets/css/owl.carousel.css ')}}\">
\t<!-- magnific popup -->
\t<link rel=\"stylesheet\" href=\" {{asset('assets/css/magnific-popup.css ')}}  \">
\t<!-- animate css -->
\t<link rel=\"stylesheet\" href=\" {{asset( 'assets/css/animate.css ')}} \">
\t<!-- mean menu css -->
\t<link rel=\"stylesheet\" href=\" {{asset('assets/css/meanmenu.min.css ')}}\">
\t<!-- main style -->
\t<link rel=\"stylesheet\" href=\" {{asset('assets/css/main.css ')}}\">
\t<!-- responsive -->
\t<link rel=\"stylesheet\" href=\" {{asset('assets/css/responsive.css ')}}\">

\t\t  
\t\t {% endblock  %}

\t\t    {% block javascripts %}
\t\t\t
\t<script src=\"{{asset('assets/js/jquery-1.11.3.min.js ')}}\" ></script>
\t<!-- bootstrap -->
\t<script src=\" {{asset('assets/bootstrap/js/bootstrap.min.js ')}} \"></script>
\t<!-- count down -->
\t<script src=\" {{asset(' assets/js/jquery.countdown.js ')}} \"></script>
\t<!-- isotope -->
\t<script src=\" {{asset(' assets/js/jquery.isotope-3.0.6.min.js ')}}\"></script>
\t<!-- waypoints -->
\t<script src=\" {{asset(' assets/js/waypoints.js ')}}\"></script>
\t<!-- owl carousel -->
\t<script src=\" {{asset(' assets/js/owl.carousel.min.js ')}}\"></script>
\t<!-- magnific popup -->
\t<script src=\" {{asset(' assets/js/jquery.magnific-popup.min.js ')}}\"></script>
\t<!-- mean menu -->
\t<script src=\" {{asset('assets/js/jquery.meanmenu.min.js ')}}\"></script>
\t<!-- sticker js -->
\t<script src=\" {{asset('assets/js/sticker.js ')}}\" ></script>
\t<!-- main js -->
\t<script src=\" {{asset('assets/js/main.js ')}}\"></script>

\t

\t\t\t {% endblock  %}
\t\t\t </head>
             <body>
              {% block header %}
              <!-- header -->
\t<div class=\"top-header-area\" id=\"sticker\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 col-sm-12 text-center\">
\t\t\t\t\t<div class=\"main-menu-wrap\">
\t\t\t\t\t\t<!-- logo -->
\t\t\t\t\t\t<div class=\"site-logo\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/logo.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- logo -->

\t\t\t\t\t\t<!-- menu start -->
\t\t\t\t\t\t<nav class=\"main-menu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"current-list-item\"><a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Static Home</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_2.html\">Slider Home</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Cart</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Check Out</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single-news.html\">Single News</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Check Out</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single-product.html\">Single Product</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Cart</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"header-icons\">
\t\t\t\t\t\t\t\t\t\t<a class=\"shopping-cart\" href=\"cart.html\"><i class=\"fas fa-shopping-cart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"mobile-hide search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<a class=\"mobile-show search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mobile-menu\"></div>
\t\t\t\t\t\t<!-- menu end -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end header -->
\t
               {% endblock  %}
               
    {% block body %}

         {% endblock %}

  {% block footer %}
  
\t<!-- footer -->
\t<div class=\"footer-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box about-widget\">
\t\t\t\t\t\t<h2 class=\"widget-title\">About us</h2>
\t\t\t\t\t\t<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box get-in-touch\">
\t\t\t\t\t\t<h2 class=\"widget-title\">Get in Touch</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
\t\t\t\t\t\t\t<li>support@fruitkha.com</li>
\t\t\t\t\t\t\t<li>+00 111 222 3333</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box pages\">
\t\t\t\t\t\t<h2 class=\"widget-title\">Pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t<li><a href=\"services.html\">Shop</a></li>
\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-box subscribe\">
\t\t\t\t\t\t<h2 class=\"widget-title\">Subscribe</h2>
\t\t\t\t\t\t<p>Subscribe to our mailing list to get the latest updates.</p>
\t\t\t\t\t\t<form action=\"index.html\">
\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t<button type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end footer -->
     {% endblock %}", "baseBack.html.twig", "C:\\Users\\lahma\\Downloads\\Foodine_PIDEV-Gestion_Utilisateur_Ines\\templates\\baseBack.html.twig");
    }
}
