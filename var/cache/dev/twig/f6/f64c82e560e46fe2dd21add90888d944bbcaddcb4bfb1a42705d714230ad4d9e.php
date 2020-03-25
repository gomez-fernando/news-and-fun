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

/* includes/category-list.html.twig */
class __TwigTemplate_99667c1123c539f9aa343d2b5a7f97c2d642ce62164630c737c5d69ccb720eff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/category-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/category-list.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 1, $this->source); })())) >= 1)) {
            // line 2
            echo "\t<table class=\"table table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t<a title=\"Abrir\" href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</a>
\t\t\t\t\t</th>

\t\t\t\t\t";
                // line 17
                if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)))) {
                    // line 18
                    echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                    echo "\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                    echo "\">Borrar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t</tbody>
\t</table>
";
        } else {
            // line 30
            echo "\t<p>
\t\t<strong>No tienes suscripciones registradas</strong>
\t</p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/category-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  96 => 27,  89 => 25,  83 => 22,  77 => 19,  74 => 18,  72 => 17,  64 => 14,  60 => 12,  56 => 11,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories|length >= 1 %}
\t<table class=\"table table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for category in categories %}
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t<a title=\"Abrir\" href=\"{{ path('category_detail', {'id':category.id}) }}\">{{ category.name }}</a>
\t\t\t\t\t</th>

\t\t\t\t\t{% if app.user != null and category.user.id == app.user.id %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('category_edit', {'id':category.id}) }}\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('category_delete', {'id':category.id}) }}\">Borrar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% else %}
\t<p>
\t\t<strong>No tienes suscripciones registradas</strong>
\t</p>
{% endif %}
", "includes/category-list.html.twig", "C:\\wamp64\\www\\news-and-fun\\templates\\includes\\category-list.html.twig");
    }
}
