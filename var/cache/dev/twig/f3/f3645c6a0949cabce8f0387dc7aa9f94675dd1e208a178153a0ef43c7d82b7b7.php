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
        echo "<div class=\"container\">
  <div class=\"row text-center\">
    <div class=\"col-8 offset-2\">
      <div id=\"carouselExampleIndicators\" class=\"carousel slide mt-3\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider1.png"), "html", null, true);
        echo "\" alt=\"First slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider2.png"), "html", null, true);
        echo "\" alt=\"Second slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider3.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div> <!-- carousel-->
      <h2 class=\"mt-3\">Bienvenido@</h2>
      <p>
        En News & Fun puedes tener a la mano todas tus suscripciones RSS
      </p>
      <p>Es muy fácil de crear tu lista de favoritos</p>
      <p>Solamente consigue la dirección del servicio RSS al que quieres suscribirte</p>
      <figure>
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/web_rss.png"), "html", null, true);
        echo "\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Luego ve al menú y entra en Añadir suscripción</p>
      <figure>
        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/menu.png"), "html", null, true);
        echo "\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Allí podrás guardar tu suscripción indicando una categoría de las disponibles o creando una nueva en la pestaña
        de Añadir categoría
      </p>
      <figure>
        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/add_suscripcion.png"), "html", null, true);
        echo "\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Ahora ya puedes ir a tu lista de suscripciones,<br>seleccionar de la lista completa<br>o buscar por
        categoría</p>
      <figure>
        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/seleccionar_rss.png"), "html", null, true);
        echo "\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Y voilà, ya puedes hacer click en la noticia que quieres ver <br>
        y accederás directamente a la página solicitada.
      </p>
      <figure>
        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/detalle.png"), "html", null, true);
        echo "\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Desde la pestaña de menú tienes acceso a todas las<br>opciones de configuración de tu aplicación.<br>Incluso a
        modificar tu perfil.
      </p>
      <figure>
        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/editar_perfil.png"), "html", null, true);
        echo "\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <h3>Esperamos que te diviertas y te mantengas informado gracias a</h3>
      <figure class=\"mt-5\">
        <img style=\"max-width: 50%\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
      </figure>
    </div>
  </div>
</div>
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
        return array (  191 => 80,  183 => 75,  173 => 68,  163 => 61,  154 => 55,  144 => 48,  136 => 43,  114 => 24,  108 => 21,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inicio
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row text-center\">
    <div class=\"col-8 offset-2\">
      <div id=\"carouselExampleIndicators\" class=\"carousel slide mt-3\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"{{asset('assets/img/slider1.png')}}\" alt=\"First slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"{{asset('assets/img/slider2.png')}}\" alt=\"Second slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"{{asset('assets/img/slider3.png')}}\" alt=\"Third slide\">
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div> <!-- carousel-->
      <h2 class=\"mt-3\">Bienvenido@</h2>
      <p>
        En News & Fun puedes tener a la mano todas tus suscripciones RSS
      </p>
      <p>Es muy fácil de crear tu lista de favoritos</p>
      <p>Solamente consigue la dirección del servicio RSS al que quieres suscribirte</p>
      <figure>
        <img src=\"{{asset('assets/img/web_rss.png')}}\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Luego ve al menú y entra en Añadir suscripción</p>
      <figure>
        <img src=\"{{asset('assets/img/menu.png')}}\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Allí podrás guardar tu suscripción indicando una categoría de las disponibles o creando una nueva en la pestaña
        de Añadir categoría
      </p>
      <figure>
        <img src=\"{{asset('assets/img/add_suscripcion.png')}}\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Ahora ya puedes ir a tu lista de suscripciones,<br>seleccionar de la lista completa<br>o buscar por
        categoría</p>
      <figure>
        <img src=\"{{asset('assets/img/seleccionar_rss.png')}}\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Y voilà, ya puedes hacer click en la noticia que quieres ver <br>
        y accederás directamente a la página solicitada.
      </p>
      <figure>
        <img src=\"{{asset('assets/img/detalle.png')}}\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <p>Desde la pestaña de menú tienes acceso a todas las<br>opciones de configuración de tu aplicación.<br>Incluso a
        modificar tu perfil.
      </p>
      <figure>
        <img src=\"{{asset('assets/img/editar_perfil.png')}}\" alt=\"\">
      </figure>
      <hr class=\"divider\">
      <h3>Esperamos que te diviertas y te mantengas informado gracias a</h3>
      <figure class=\"mt-5\">
        <img style=\"max-width: 50%\" src=\"{{asset('assets/img/logo.png')}}\" alt=\"\">
      </figure>
    </div>
  </div>
</div>
{% endblock %}", "service/index.html.twig", "C:\\wamp64\\www\\news-and-fun\\templates\\service\\index.html.twig");
    }
}
