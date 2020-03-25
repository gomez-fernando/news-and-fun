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

/* includes/service-list.html.twig */
class __TwigTemplate_f88fd53f7b64d797fc6fa1b37e3d55c7f511eb808d54fadda02213e4bfb70ec3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/service-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/service-list.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 1, $this->source); })())) >= 1)) {
            // line 2
            echo "<table class=\"table table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t<th scope=\"col\">Categoría</th>
\t\t\t<th scope=\"col\">Descripción</th>
\t\t\t<th scope=\"col\"></th>
\t\t\t<th scope=\"col\"></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 14
                echo "\t\t<tr>
\t\t\t<th scope=\"row\">
\t\t\t\t<a title=\"Abrir\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</a>
\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "category", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 22), "html", null, true);
                echo "</a>
\t\t\t</td>
\t\t\t";
                // line 25
                echo "
\t\t\t";
                // line 26
                if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)))) {
                    // line 27
                    echo "\t\t\t<td>
\t\t\t\t<a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                    echo "\">Editar</a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                    echo "\">Borrar</a>
\t\t\t</td>
\t\t\t";
                }
                // line 34
                echo "\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t</tbody>
</table>
";
        } else {
            // line 39
            echo "<p>
\t<strong>No tienes suscripciones registradas</strong>
</p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/service-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  114 => 36,  107 => 34,  101 => 31,  95 => 28,  92 => 27,  90 => 26,  87 => 25,  80 => 22,  74 => 19,  66 => 16,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if services|length >= 1 %}
<table class=\"table table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t<th scope=\"col\">Categoría</th>
\t\t\t<th scope=\"col\">Descripción</th>
\t\t\t<th scope=\"col\"></th>
\t\t\t<th scope=\"col\"></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for service in services %}
\t\t<tr>
\t\t\t<th scope=\"row\">
\t\t\t\t<a title=\"Abrir\" href=\"{{ path('service_detail', {'id':service.id}) }}\">{{ service.name }}</a>
\t\t\t</th>
\t\t\t<td>
\t\t\t\t{{ service.category.name }}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"{{ path('service_detail', {'id':service.id}) }}\">{{ service.description }}</a>
\t\t\t</td>
\t\t\t{# <td><a href=\"{{ service.urlService }}\">Abrir</a></td> #}

\t\t\t{% if app.user != null and service.user.id == app.user.id %}
\t\t\t<td>
\t\t\t\t<a href=\"{{ path('service_edit', {'id':service.id}) }}\">Editar</a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"{{ path('service_delete', {'id':service.id}) }}\">Borrar</a>
\t\t\t</td>
\t\t\t{% endif %}
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>
{% else %}
<p>
\t<strong>No tienes suscripciones registradas</strong>
</p>
{% endif %}", "includes/service-list.html.twig", "C:\\wamp64\\www\\news-and-fun\\templates\\includes\\service-list.html.twig");
    }
}
