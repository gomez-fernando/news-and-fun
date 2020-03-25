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

/* user/profile_view.html.twig */
class __TwigTemplate_9c498da612730b346231466e497594bdb0fc2eccf610f22776ac909ebd29db47 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile_view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile_view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile_view.html.twig", 1);
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

        echo "Mi perfil
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
        echo "<style></style>

<div class=\"example-wrapper\">
\t<h1>Editar perfil</h1>
\t<form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
        echo "\" method=\"POST\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"name\">Nombre</label>
\t\t\t<input type=\"text\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"form-control\" id=\"name\" aria-describedby=\"name\" name=\"_name\"
\t\t\t\trequired>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"surname\">Apellidos</label>
\t\t\t<input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "surname", [], "any", false, false, false, 19), "html", null, true);
        echo "\" class=\"form-control\" id=\"surname\" aria-describedby=\"surname\"
\t\t\t\tname=\"_surname\" required>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nick\">Nick</label>
\t\t\t<input type=\"text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "nick", [], "any", false, false, false, 24), "html", null, true);
        echo "\" class=\"form-control\" id=\"nick\" aria-describedby=\"nick\" name=\"_nick\"
\t\t\t\trequired>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t<input type=\"email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"
\t\t\t\tname=\"_email\" required>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" value=\"\" class=\"form-control\" id=\"password\" aria-describedby=\"password\" name=\"_password\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Guardar cambios</button>
\t\t<a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete");
        echo "\">Darse de baja</a>
\t</form>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/profile_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  125 => 29,  117 => 24,  109 => 19,  101 => 14,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mi perfil
{% endblock %}

{% block body %}
<style></style>

<div class=\"example-wrapper\">
\t<h1>Editar perfil</h1>
\t<form action=\"{{ path('profile_edit') }}\" method=\"POST\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"name\">Nombre</label>
\t\t\t<input type=\"text\" value=\"{{ app.user.name }}\" class=\"form-control\" id=\"name\" aria-describedby=\"name\" name=\"_name\"
\t\t\t\trequired>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"surname\">Apellidos</label>
\t\t\t<input type=\"text\" value=\"{{ app.user.surname }}\" class=\"form-control\" id=\"surname\" aria-describedby=\"surname\"
\t\t\t\tname=\"_surname\" required>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nick\">Nick</label>
\t\t\t<input type=\"text\" value=\"{{ app.user.nick }}\" class=\"form-control\" id=\"nick\" aria-describedby=\"nick\" name=\"_nick\"
\t\t\t\trequired>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t<input type=\"email\" value=\"{{ app.user.email }}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"
\t\t\t\tname=\"_email\" required>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" value=\"\" class=\"form-control\" id=\"password\" aria-describedby=\"password\" name=\"_password\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Guardar cambios</button>
\t\t<a class=\"btn btn-danger\" href=\"{{ path('user_delete') }}\">Darse de baja</a>
\t</form>


</div>
{% endblock %}", "user/profile_view.html.twig", "C:\\wamp64\\www\\news-and-fun\\templates\\user\\profile_view.html.twig");
    }
}
