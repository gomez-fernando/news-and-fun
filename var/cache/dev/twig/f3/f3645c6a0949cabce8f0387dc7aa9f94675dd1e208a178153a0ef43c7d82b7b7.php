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

/* service/index.html.twig */
class __TwigTemplate_d64b5c92a725f5820862b9fc815d66bea0d55e3b866b9fb6612b7b271a509f6e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inicio
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-12 col-md-8 offset-md-2\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide mt-3\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider1.png"), "html", null, true);
        echo "\" alt=\"First slide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider2.png"), "html", null, true);
        echo "\" alt=\"Second slide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider3.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- carousel-->
\t\t\t\t<h2 class=\"mt-3\">Bienvenido@</h2>
\t\t\t\t<p>
\t\t\t\t\tEn News & Fun puedes tener a la mano todas tus suscripciones RSS
\t\t\t\t</p>
\t\t\t\t<p>Es muy fácil de crear tu lista de favoritos</p>
\t\t\t\t<p>Solamente consigue la dirección del servicio RSS al que quieres suscribirte</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/web_rss.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Luego ve al menú y entra en Añadir suscripción</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/menu.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Allí podrás guardar tu suscripción indicando una categoría de las disponibles o creando una nueva en la pestaña
\t\t\t\t\t        de Añadir categoría
\t\t\t\t</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/add_suscripcion.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Ahora ya puedes ir a tu lista de suscripciones,<br>seleccionar de la lista completa<br>o buscar por
\t\t\t\t\t        categoría</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/seleccionar_rss.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Y voilà, ya puedes hacer click en la noticia que quieres ver
\t\t\t\t\t<br>
\t\t\t\t\ty accederás directamente a la página solicitada.
\t\t\t\t</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/detalle.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Desde la pestaña de menú tienes acceso a todas las<br>opciones de configuración de tu aplicación.<br>Incluso a
\t\t\t\t\t        modificar tu perfil.
\t\t\t\t</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/editar_perfil.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<h3>Esperamos que te diviertas y te mantengas informado gracias a</h3>
\t\t\t\t<figure class=\"mt-5\">
\t\t\t\t\t<img style=\"max-width: 50%\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</figure>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 82,  185 => 77,  175 => 70,  164 => 62,  155 => 56,  145 => 49,  137 => 44,  114 => 24,  108 => 21,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inicio
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-12 col-md-8 offset-md-2\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide mt-3\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"{{asset('assets/img/slider1.png')}}\" alt=\"First slide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"{{asset('assets/img/slider2.png')}}\" alt=\"Second slide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"{{asset('assets/img/slider3.png')}}\" alt=\"Third slide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- carousel-->
\t\t\t\t<h2 class=\"mt-3\">Bienvenido@</h2>
\t\t\t\t<p>
\t\t\t\t\tEn News & Fun puedes tener a la mano todas tus suscripciones RSS
\t\t\t\t</p>
\t\t\t\t<p>Es muy fácil de crear tu lista de favoritos</p>
\t\t\t\t<p>Solamente consigue la dirección del servicio RSS al que quieres suscribirte</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"{{asset('assets/img/web_rss.png')}}\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Luego ve al menú y entra en Añadir suscripción</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"{{asset('assets/img/menu.png')}}\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Allí podrás guardar tu suscripción indicando una categoría de las disponibles o creando una nueva en la pestaña
\t\t\t\t\t        de Añadir categoría
\t\t\t\t</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"{{asset('assets/img/add_suscripcion.png')}}\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Ahora ya puedes ir a tu lista de suscripciones,<br>seleccionar de la lista completa<br>o buscar por
\t\t\t\t\t        categoría</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"{{asset('assets/img/seleccionar_rss.png')}}\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Y voilà, ya puedes hacer click en la noticia que quieres ver
\t\t\t\t\t<br>
\t\t\t\t\ty accederás directamente a la página solicitada.
\t\t\t\t</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"{{asset('assets/img/detalle.png')}}\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<p>Desde la pestaña de menú tienes acceso a todas las<br>opciones de configuración de tu aplicación.<br>Incluso a
\t\t\t\t\t        modificar tu perfil.
\t\t\t\t</p>
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"{{asset('assets/img/editar_perfil.png')}}\" alt=\"\">
\t\t\t\t</figure>
\t\t\t\t<hr class=\"divider\">
\t\t\t\t<h3>Esperamos que te diviertas y te mantengas informado gracias a</h3>
\t\t\t\t<figure class=\"mt-5\">
\t\t\t\t\t<img style=\"max-width: 50%\" src=\"{{asset('assets/img/logo.png')}}\" alt=\"\">
\t\t\t\t</figure>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "service/index.html.twig", "C:\\wamp64\\www\\news-and-fun\\templates\\service\\index.html.twig");
    }
}
