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

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


\t\t<title>
\t\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</title>
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "\t\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\">
\t</head>

\t<body>
\t\t";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "\t\t<div class=\"container\">
\t\t\t<main>
\t\t\t\t";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "\t\t\t</main>
\t\t</div>

\t\t<!-- Footer -->

\t\t<footer
\t\t\tclass=\"page-footer font-small stylish-color-dark pt-4 mt-5 redes-sociales\">

\t\t\t<!-- Footer Links -->
\t\t\t<div
\t\t\t\tclass=\"container text-center text-md-left\">

\t\t\t\t<!-- Grid row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<hr
\t\t\t\t\tclass=\"clearfix w-100 d-md-none\">

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4 mx-auto\">

\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Enlaces útiles</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El Mundo</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El País</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">New York Times</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->


\t\t\t\t\t<hr
\t\t\t\t\tclass=\"clearfix w-100 d-md-none\">

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4 mx-auto\">

\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Sobre nosotros</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Quiénes somos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Google sites del proyecto</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\">News & Fun en los medios</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>

\t\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4 mx-auto\"> <!-- Links -->
\t\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">LEGAL</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Términos y condiciones de venta</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Términos de uso</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Política de privacidad</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Política de cookies</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->

\t\t\t\t</div>
\t\t\t\t<!-- Grid row -->

\t\t\t</div>
\t\t\t<!-- Footer Links -->

\t\t\t<hr>

\t\t\t<!-- Redes sociales -->
\t\t\t<ul class=\"list-unstyled list-inline text-center\">
\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/youtube-3-96.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t<a class=\"btn-floating btn-gplus mx-1\" href=\"#\" target=\"_blank\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/google-plus-3-96.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/youtube-3-96.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- Redes sociales -->

\t\t\t<!-- Copyright -->
\t\t\t<div class=\"footer-copyright text-center py-3\">© 2020 Copyright: Grupo 3J-F - UOC
\t\t\t</div>
\t\t\t<!-- Copyright -->

\t\t\t<!-- Back to top button -->
\t\t\t<a href=\"#\" class=\"back-to-top\">
\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t</a>

\t\t</footer>

\t\t";
        // line 213
        $this->displayBlock('javascripts', $context, $blocks);
        // line 219
        echo "
\t</body>

</html>
";
        
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
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo news and fun\" title=\"Inicio\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\"></ul>
\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">

\t\t\t\t\t\t";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) != null)) {
            // line 33
            echo "\t\t\t\t\t\t\t";
            // line 37
            echo "\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" name=\"disabled\">Bienvenido/a
\t\t\t\t\t\t\t\t\t<span>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "nick", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">Inicio
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
            echo "\">Mis noticias</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tMenú
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_services");
            echo "\">Suscripciones</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_categories");
            echo "\">Categorías</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_creation");
            echo "\">Añadir suscripción</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_creation");
            echo "\">Añadir categoría</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_view");
            echo "\">Mi perfil</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Cerrar sesión</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Registro</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 74
        echo "

\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</nav>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
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

    // line 213
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 214
        echo "\t\t\t<!-- Optional JavaScript -->
\t\t\t<!-- jQuery first, then Popper.js, then Bootstrap JS --><script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"> </script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
\t\t";
        
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
        return array (  431 => 214,  421 => 213,  403 => 83,  387 => 74,  381 => 71,  375 => 68,  372 => 67,  365 => 63,  360 => 61,  356 => 60,  352 => 59,  348 => 58,  344 => 57,  334 => 50,  326 => 45,  317 => 39,  313 => 37,  311 => 33,  309 => 32,  295 => 23,  292 => 22,  282 => 21,  270 => 15,  267 => 14,  257 => 13,  239 => 11,  225 => 219,  223 => 213,  202 => 195,  195 => 191,  188 => 187,  83 => 84,  81 => 83,  77 => 81,  75 => 21,  67 => 17,  65 => 13,  62 => 12,  60 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"es\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" type=\"text/css\">
\t\t{% endblock %}
\t\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon.png') }}\">
\t</head>

\t<body>
\t\t{% block header %}
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('index') }}\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"logo news and fun\" title=\"Inicio\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\"></ul>
\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">

\t\t\t\t\t\t{% if app.user != null %}
\t\t\t\t\t\t\t{# <form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Buscar</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form> #}
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" name=\"disabled\">Bienvenido/a
\t\t\t\t\t\t\t\t\t<span>{{ app.user.nick }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('index') }}\">Inicio
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('services') }}\">Mis noticias</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tMenú
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('my_services') }}\">Suscripciones</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('my_categories') }}\">Categorías</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('service_creation') }}\">Añadir suscripción</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('category_creation') }}\">Añadir categoría</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('profile_view') }}\">Mi perfil</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Cerrar sesión</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('login') }}\">Login</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('register') }}\">Registro</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</nav>
\t\t{% endblock %}
\t\t<div class=\"container\">
\t\t\t<main>
\t\t\t\t{% block body %}{% endblock %}
\t\t\t</main>
\t\t</div>

\t\t<!-- Footer -->

\t\t<footer
\t\t\tclass=\"page-footer font-small stylish-color-dark pt-4 mt-5 redes-sociales\">

\t\t\t<!-- Footer Links -->
\t\t\t<div
\t\t\t\tclass=\"container text-center text-md-left\">

\t\t\t\t<!-- Grid row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<hr
\t\t\t\t\tclass=\"clearfix w-100 d-md-none\">

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4 mx-auto\">

\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Enlaces útiles</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El Mundo</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">El País</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">New York Times</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->


\t\t\t\t\t<hr
\t\t\t\t\tclass=\"clearfix w-100 d-md-none\">

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4 mx-auto\">

\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Sobre nosotros</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Quiénes somos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">Google sites del proyecto</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\">News & Fun en los medios</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>

\t\t\t\t\t<hr class=\"clearfix w-100 d-md-none\">

\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4 mx-auto\"> <!-- Links -->
\t\t\t\t\t\t<h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">LEGAL</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Términos y condiciones de venta</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Términos de uso</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Política de privacidad</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Política de cookies</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->

\t\t\t\t</div>
\t\t\t\t<!-- Grid row -->

\t\t\t</div>
\t\t\t<!-- Footer Links -->

\t\t\t<hr>

\t\t\t<!-- Redes sociales -->
\t\t\t<ul class=\"list-unstyled list-inline text-center\">
\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"{{asset('assets/img/youtube-3-96.png')}}\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t<a class=\"btn-floating btn-gplus mx-1\" href=\"#\" target=\"_blank\"><img src=\"{{asset('assets/img/google-plus-3-96.png')}}\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t<a class=\"btn-floating btn-tw mx-1\" href=\"#\" target=\"_blank\"><img src=\"{{asset('assets/img/youtube-3-96.png')}}\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- Redes sociales -->

\t\t\t<!-- Copyright -->
\t\t\t<div class=\"footer-copyright text-center py-3\">© 2020 Copyright: Grupo 3J-F - UOC
\t\t\t</div>
\t\t\t<!-- Copyright -->

\t\t\t<!-- Back to top button -->
\t\t\t<a href=\"#\" class=\"back-to-top\">
\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t</a>

\t\t</footer>

\t\t{% block javascripts %}
\t\t\t<!-- Optional JavaScript -->
\t\t\t<!-- jQuery first, then Popper.js, then Bootstrap JS --><script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"> </script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}

\t</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\news-and-fun\\templates\\base.html.twig");
    }
}
