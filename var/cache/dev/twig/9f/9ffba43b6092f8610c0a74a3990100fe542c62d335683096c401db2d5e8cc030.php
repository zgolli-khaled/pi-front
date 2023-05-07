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

/* baseFront.html.twig */
class __TwigTemplate_a77e83caad62d880129c894b3466e794e83b83089a64a4a750f402f5f202a985 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"zxx\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/bootstrap.min.css\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/animate.min.css\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/meanmenu.css\">
    <!-- Boxicons CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/boxicons.min.css\">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/flaticon.css\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/nice-select.min.css\">
    <!-- Owl Carousel CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.carousel.min.css\">
    <!-- Owl Carousel Default CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.theme.default.min.css\">
    <!-- Odometer CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/odometer.min.css\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/magnific-popup.min.css\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/style.css\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/responsive.css\">



        <title>
            Foodine | ";
        // line 35
        $this->displayBlock('title', $context, $blocks);
        // line 36
        echo "        </title>

    <link rel=\"icon\" type=\"image/png\" href=\"/Front/assets/img/icon.png\">
    
</head>


<body>

<!-- Start Preloader Area -->
<div class=\"preloader\">
    <div class=\"preloader\">
        <span></span>
        <span></span>
    </div>
</div>
<!-- End Preloader Area -->




<!-- Start Main Banner Area -->
";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "<!-- End Main Banner Area -->

<!-- Start Footer Area -->


<!-- Start Copy Right Area -->
<div class=\"copyright-area\">
    <div class=\"container\">
        <div class=\"copyright-area-content\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6\">
                    <p>
                        <i class=\"far fa-copyright\"></i>
                        Copyright @2022 Foodine
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class=\"go-top\">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- Start QuickView Modal Area -->
<div class=\"modal fade productsQuickView\" id=\"productsQuickView\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\"><i class=\"flaticon-cancel\"></i></span>
            </button>

            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"products-image\"></div>
                </div>

                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-content\">
                        <h3>Seasoned Tomatoes</h3>
                        <div class=\"price\">
                            <span class=\"new-price\">\$541.00</span>
                            <span class=\"old-price\">\$652.00</span>
                        </div>
                        <div class=\"product-review\">
                            <div class=\"rating\">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href=\"#\" class=\"rating-count\">5 reviews</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et.</p>
                        <div class=\"product-add-to-cart\">
                            <div class=\"input-counter\">
                                        <span class=\"minus-btn\">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                <input type=\"text\" value=\"1\">
                                <span class=\"plus-btn\">
                                            <i class='bx bx-plus'></i>
                                        </span>
                            </div>
                            <button type=\"submit\" class=\"default-btn\">
                                Add to cart
                            </button>
                        </div>

                        <div class=\"buy-checkbox-btn\">
                            <div class=\"item\">
                                <input class=\"inp-cbx\" id=\"cbx\" type=\"checkbox\">
                                <label class=\"cbx\" for=\"cbx\">
                                            <span>
                                                <svg width=\"12px\" height=\"10px\" viewbox=\"0 0 12 10\">
                                                    <polyline points=\"1.5 6 4.5 9 10.5 1\"></polyline>
                                                </svg>
                                            </span>
                                    <span>I agree with the terms and conditions</span>
                                </label>
                            </div>
                            <div class=\"item\">
                                <a href=\"#\" class=\"btn btn-light\">Buy it now!</a>
                            </div>
                        </div>

                        <div class=\"products-share\">
                            <ul class=\"social\">
                                <li><span>Share:</span></li>
                                <li>
                                    <a href=\"#\" class=\"facebook\" target=\"_blank\"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"twitter\" target=\"_blank\"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"linkedin\" target=\"_blank\"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"instagram\" target=\"_blank\"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End QuickView Modal Area -->
<!-- Jquery Slim JS -->
<script src=\"/Front/assets/js/jquery.min.js\"></script>
<!-- Popper JS -->
<script src=\"/Front/assets/js/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"/Front/assets/js/bootstrap.min.js\"></script>
<!-- Meanmenu JS -->
<script src=\"/Front/assets/js/jquery.meanmenu.js\"></script>
<!-- Nice Select JS -->
<script src=\"/Front/assets/js/jquery.nice-select.min.js\"></script>
<!-- Owl Carousel JS -->
<script src=\"/Front/assets/js/owl.carousel.min.js\"></script>
<!-- Magnific Popup JS -->
<script src=\"/Front/assets/js/jquery.magnific-popup.min.js\"></script>
<!-- Odometer JS -->
<script src=\"/Front/assets/js/odometer.min.js\"></script>
<!-- Jquery Appear JS -->
<script src=\"/Front/assets/js/jquery.appear.min.js\"></script>
<!-- Ajaxchimp JS -->
<script src=\"/Front/assets/js/jquery.ajaxchimp.min.js\"></script>
<!-- Form Validator JS -->
<script src=\"/Front/assets/js/form-validator.min.js\"></script>
<!-- Contact JS -->
<script src=\"/Front/assets/js/contact-form-script.js\"></script>
<!-- Wow JS -->
<script src=\"/Front/assets/js/wow.min.js\"></script>
<!-- Custom JS -->
<script src=\"/Front/assets/js/main.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 59
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  292 => 59,  282 => 58,  264 => 35,  109 => 61,  107 => 58,  83 => 36,  81 => 35,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"zxx\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/bootstrap.min.css\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/animate.min.css\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/meanmenu.css\">
    <!-- Boxicons CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/boxicons.min.css\">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/flaticon.css\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/nice-select.min.css\">
    <!-- Owl Carousel CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.carousel.min.css\">
    <!-- Owl Carousel Default CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.theme.default.min.css\">
    <!-- Odometer CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/odometer.min.css\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/magnific-popup.min.css\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/style.css\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/responsive.css\">



        <title>
            Foodine | {% block title %}{% endblock %}
        </title>

    <link rel=\"icon\" type=\"image/png\" href=\"/Front/assets/img/icon.png\">
    
</head>


<body>

<!-- Start Preloader Area -->
<div class=\"preloader\">
    <div class=\"preloader\">
        <span></span>
        <span></span>
    </div>
</div>
<!-- End Preloader Area -->




<!-- Start Main Banner Area -->
{% block content %}

{% endblock  %}
<!-- End Main Banner Area -->

<!-- Start Footer Area -->


<!-- Start Copy Right Area -->
<div class=\"copyright-area\">
    <div class=\"container\">
        <div class=\"copyright-area-content\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6\">
                    <p>
                        <i class=\"far fa-copyright\"></i>
                        Copyright @2022 Foodine
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class=\"go-top\">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- Start QuickView Modal Area -->
<div class=\"modal fade productsQuickView\" id=\"productsQuickView\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\"><i class=\"flaticon-cancel\"></i></span>
            </button>

            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"products-image\"></div>
                </div>

                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-content\">
                        <h3>Seasoned Tomatoes</h3>
                        <div class=\"price\">
                            <span class=\"new-price\">\$541.00</span>
                            <span class=\"old-price\">\$652.00</span>
                        </div>
                        <div class=\"product-review\">
                            <div class=\"rating\">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href=\"#\" class=\"rating-count\">5 reviews</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et.</p>
                        <div class=\"product-add-to-cart\">
                            <div class=\"input-counter\">
                                        <span class=\"minus-btn\">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                <input type=\"text\" value=\"1\">
                                <span class=\"plus-btn\">
                                            <i class='bx bx-plus'></i>
                                        </span>
                            </div>
                            <button type=\"submit\" class=\"default-btn\">
                                Add to cart
                            </button>
                        </div>

                        <div class=\"buy-checkbox-btn\">
                            <div class=\"item\">
                                <input class=\"inp-cbx\" id=\"cbx\" type=\"checkbox\">
                                <label class=\"cbx\" for=\"cbx\">
                                            <span>
                                                <svg width=\"12px\" height=\"10px\" viewbox=\"0 0 12 10\">
                                                    <polyline points=\"1.5 6 4.5 9 10.5 1\"></polyline>
                                                </svg>
                                            </span>
                                    <span>I agree with the terms and conditions</span>
                                </label>
                            </div>
                            <div class=\"item\">
                                <a href=\"#\" class=\"btn btn-light\">Buy it now!</a>
                            </div>
                        </div>

                        <div class=\"products-share\">
                            <ul class=\"social\">
                                <li><span>Share:</span></li>
                                <li>
                                    <a href=\"#\" class=\"facebook\" target=\"_blank\"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"twitter\" target=\"_blank\"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"linkedin\" target=\"_blank\"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"instagram\" target=\"_blank\"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End QuickView Modal Area -->
<!-- Jquery Slim JS -->
<script src=\"/Front/assets/js/jquery.min.js\"></script>
<!-- Popper JS -->
<script src=\"/Front/assets/js/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"/Front/assets/js/bootstrap.min.js\"></script>
<!-- Meanmenu JS -->
<script src=\"/Front/assets/js/jquery.meanmenu.js\"></script>
<!-- Nice Select JS -->
<script src=\"/Front/assets/js/jquery.nice-select.min.js\"></script>
<!-- Owl Carousel JS -->
<script src=\"/Front/assets/js/owl.carousel.min.js\"></script>
<!-- Magnific Popup JS -->
<script src=\"/Front/assets/js/jquery.magnific-popup.min.js\"></script>
<!-- Odometer JS -->
<script src=\"/Front/assets/js/odometer.min.js\"></script>
<!-- Jquery Appear JS -->
<script src=\"/Front/assets/js/jquery.appear.min.js\"></script>
<!-- Ajaxchimp JS -->
<script src=\"/Front/assets/js/jquery.ajaxchimp.min.js\"></script>
<!-- Form Validator JS -->
<script src=\"/Front/assets/js/form-validator.min.js\"></script>
<!-- Contact JS -->
<script src=\"/Front/assets/js/contact-form-script.js\"></script>
<!-- Wow JS -->
<script src=\"/Front/assets/js/wow.min.js\"></script>
<!-- Custom JS -->
<script src=\"/Front/assets/js/main.js\"></script>
</body>
</html>", "baseFront.html.twig", "C:\\Users\\lahma\\Downloads\\Foodine_PIDEV-Gestion_Utilisateur_Ines\\templates\\baseFront.html.twig");
    }
}
