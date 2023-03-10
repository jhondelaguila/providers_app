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

/* provider/index.html.twig */
class __TwigTemplate_51bba9a11ae5609eba3a90625d90887a12e98117adf7c847e427480d1dcff021 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "provider/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "provider/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "provider/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <table id=\"providers\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nombre del Proveedor</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 15
                echo "                <tr>
                    <td>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, $context["provider"], "active", [], "any", false, false, false, 18) == 0)) {
                    // line 19
                    echo "                            <p>No</p>
                        ";
                } else {
                    // line 21
                    echo "                            <p>Si</p>
                        ";
                }
                // line 23
                echo "                    </td>
                    <td>
                        <a href=\"/provider/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"btn btn-dark\">Mostrar</a>
                        <a href=\"/provider/edit/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"btn btn-light\">Editar</a>
                        <a href=\"/provider/delete/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"btn btn-danger delete-article\">Borrar</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 34
            echo "        <p>No hay proveedores para mostrar</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "provider/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  126 => 31,  116 => 27,  112 => 26,  108 => 25,  104 => 23,  100 => 21,  96 => 19,  94 => 18,  89 => 16,  86 => 15,  82 => 14,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if providers %}
        <table id=\"providers\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nombre del Proveedor</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            {% for provider in providers %}
                <tr>
                    <td>{{ provider.name }}</td>
                    <td>
                        {% if provider.active == 0 %}
                            <p>No</p>
                        {% else %}
                            <p>Si</p>
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"/provider/{{ provider.id }}\" class=\"btn btn-dark\">Mostrar</a>
                        <a href=\"/provider/edit/{{ provider.id }}\" class=\"btn btn-light\">Editar</a>
                        <a href=\"/provider/delete/{{ provider.id }}\" class=\"btn btn-danger delete-article\">Borrar</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No hay proveedores para mostrar</p>
    {% endif %}
{% endblock %}", "provider/index.html.twig", "C:\\Users\\JHON PC\\Documents\\GitRepTests\\providers_app\\templates\\provider\\index.html.twig");
    }
}
