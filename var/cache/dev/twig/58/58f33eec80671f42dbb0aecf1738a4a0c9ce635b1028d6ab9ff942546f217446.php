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

/* base.html.twig */
class __TwigTemplate_d2568987def5da2cd8d8efd46321ee2498d51b8a80579a82ba81c96523453c91 extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"es\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


\t<title>
\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t</title>
\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\">
</head>

<body>
\t";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "\t<div class=\"container\">
\t\t<main>
\t\t\t";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "\t\t</main>
\t</div>

\t<!-- Footer -->

\t<footer class=\"page-footer font-small stylish-color-dark pt-4 mt-5 redes-sociales\">

\t\t<!-- Footer Links -->
\t\t<div class=\"container text-center text-md-left\">

\t\t\t<!-- Grid row -->
\t\t\t<div class=\"row\">

\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-4 mx-auto\">

\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Enlaces útiles</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El Mundo</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El País</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">New York Times</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t<!-- Grid column -->


\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-4 mx-auto\">

\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Sobre nosotros</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Quiénes somos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Google sites del proyecto</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\">News & Fun en los medios</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t<!-- Grid column -->

\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-4 mx-auto\">

\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">LEGAL</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Términos y condiciones de venta</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Términos de uso</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Política de privacidad</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Política de cookies</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t<!-- Grid column -->

\t\t\t</div>
\t\t\t<!-- Grid row -->

\t\t</div>
\t\t<!-- Footer Links -->

\t\t<hr>

\t\t<!-- Redes sociales -->
\t\t<ul class=\"list-unstyled list-inline text-center\">
\t\t\t<li class=\"list-inline-item\">
\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/youtube-3-96.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\talt=\"\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-inline-item\">
\t\t\t\t<a class=\"btn-floating btn-gplus mx-1\" href=\"#\" target=\"_blank\"><img
\t\t\t\t\t\tsrc=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/google-plus-3-96.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-inline-item\">
\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/youtube-3-96.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\talt=\"\">
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<!-- Redes sociales -->

\t\t<!-- Copyright -->
\t\t<div class=\"footer-copyright text-center py-3\">© 2020 Copyright: Grupo 3J-F - UOC
\t\t</div>
\t\t<!-- Copyright -->

\t\t<!-- Back to top button -->
\t\t<a href=\"#\" class=\"back-to-top\">
\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t</a>

\t</footer>

\t";
        // line 214
        $this->displayBlock('javascripts', $context, $blocks);
        // line 227
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
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

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
\t\tintegrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\"
\t\t\t\talt=\"logo news and fun\" title=\"Inicio\"></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav mr-auto\"></ul>
\t\t\t<ul class=\"navbar-nav ml-auto\">

\t\t\t\t";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35) != null)) {
            // line 36
            echo "\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Buscar</button>
\t\t\t\t</form>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" name=\"disabled\">Bienvenido/a
\t\t\t\t\t\t<span>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "nick", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
            echo "\">Inicio
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_services");
            echo "\">Suscripciones</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tMenú
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_categories");
            echo "\">Categorías</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_creation");
            echo "\">Añadir suscripción</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_creation");
            echo "\">Añadir categoría</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_view");
            echo "\">Mi perfil</a>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Cerrar sesión</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Registro</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 77
        echo "

\t\t\t</ul>

\t\t</div>
\t</nav>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
        echo "\t<!-- Optional JavaScript -->
\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
\t\tintegrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
\t\tcrossorigin=\"anonymous\"> </script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
\t\tintegrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
\t\tcrossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
\t\tcrossorigin=\"anonymous\"></script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 215,  420 => 214,  402 => 86,  386 => 77,  380 => 74,  374 => 71,  371 => 70,  364 => 66,  359 => 64,  355 => 63,  351 => 62,  347 => 61,  336 => 53,  328 => 48,  319 => 42,  311 => 36,  309 => 35,  293 => 24,  290 => 23,  280 => 22,  268 => 16,  264 => 14,  254 => 13,  236 => 11,  223 => 227,  221 => 214,  199 => 195,  192 => 191,  183 => 185,  83 => 87,  81 => 86,  77 => 84,  75 => 22,  67 => 18,  65 => 13,  62 => 12,  60 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"es\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


\t<title>
\t\t{% block title %}{% endblock %}
\t</title>
\t{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
\t\tintegrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" type=\"text/css\">
\t{% endblock %}
\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon.png') }}\">
</head>

<body>
\t{% block header %}
\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<a class=\"navbar-brand\" href=\"{{ path('services') }}\"><img src=\"{{asset('assets/img/logo.png')}}\"
\t\t\t\talt=\"logo news and fun\" title=\"Inicio\"></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav mr-auto\"></ul>
\t\t\t<ul class=\"navbar-nav ml-auto\">

\t\t\t\t{% if app.user != null %}
\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Buscar</button>
\t\t\t\t</form>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" name=\"disabled\">Bienvenido/a
\t\t\t\t\t\t<span>{{ app.user.nick }}</span>
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('services') }}\">Inicio
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('my_services') }}\">Suscripciones</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tMenú
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('my_categories') }}\">Categorías</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('service_creation') }}\">Añadir suscripción</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('category_creation') }}\">Añadir categoría</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('profile_view') }}\">Mi perfil</a>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Cerrar sesión</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('login') }}\">Login</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('register') }}\">Registro</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}


\t\t\t</ul>

\t\t</div>
\t</nav>
\t{% endblock %}
\t<div class=\"container\">
\t\t<main>
\t\t\t{% block body %}{% endblock %}
\t\t</main>
\t</div>

\t<!-- Footer -->

\t<footer class=\"page-footer font-small stylish-color-dark pt-4 mt-5 redes-sociales\">

\t\t<!-- Footer Links -->
\t\t<div class=\"container text-center text-md-left\">

\t\t\t<!-- Grid row -->
\t\t\t<div class=\"row\">

\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-4 mx-auto\">

\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Enlaces útiles</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El Mundo</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El País</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">New York Times</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t<!-- Grid column -->


\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-4 mx-auto\">

\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Sobre nosotros</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Quiénes somos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Google sites del proyecto</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\">News & Fun en los medios</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t<!-- Grid column -->

\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-4 mx-auto\">

\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">LEGAL</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Términos y condiciones de venta</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Términos de uso</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Política de privacidad</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Política de cookies</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t<!-- Grid column -->

\t\t\t</div>
\t\t\t<!-- Grid row -->

\t\t</div>
\t\t<!-- Footer Links -->

\t\t<hr>

\t\t<!-- Redes sociales -->
\t\t<ul class=\"list-unstyled list-inline text-center\">
\t\t\t<li class=\"list-inline-item\">
\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"{{asset('assets/img/youtube-3-96.png')}}\"
\t\t\t\t\t\talt=\"\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-inline-item\">
\t\t\t\t<a class=\"btn-floating btn-gplus mx-1\" href=\"#\" target=\"_blank\"><img
\t\t\t\t\t\tsrc=\"{{asset('assets/img/google-plus-3-96.png')}}\" alt=\"\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-inline-item\">
\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"{{asset('assets/img/youtube-3-96.png')}}\"
\t\t\t\t\t\talt=\"\">
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<!-- Redes sociales -->

\t\t<!-- Copyright -->
\t\t<div class=\"footer-copyright text-center py-3\">© 2020 Copyright: Grupo 3J-F - UOC
\t\t</div>
\t\t<!-- Copyright -->

\t\t<!-- Back to top button -->
\t\t<a href=\"#\" class=\"back-to-top\">
\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t</a>

\t</footer>

\t{% block javascripts %}
\t<!-- Optional JavaScript -->
\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
\t\tintegrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
\t\tcrossorigin=\"anonymous\"> </script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
\t\tintegrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
\t\tcrossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
\t\tcrossorigin=\"anonymous\"></script>
\t{% endblock %}

</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\news-and-fun\\templates\\base.html.twig");
    }
}
