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

/* manager/managerHome.html.twig */
class __TwigTemplate_c42b7b926bbce795026337bff0c56f6c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/managerHome.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manager/managerHome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"d-flex align-items-center justify-content-center\">
\t<div class=\"card\">
  \t\t<div class=\"card-body\">
\t\t\t<h2>Total de productos vendidos</h2>
    \t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["productosVendidos"]) || array_key_exists("productosVendidos", $context) ? $context["productosVendidos"] : (function () { throw new RuntimeError('Variable "productosVendidos" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
  \t\t</div>
\t</div>
\t\t<div class=\"card\">
  \t\t<div class=\"card-body\">
\t\t\t<h2>Ingresos totales</h2>
    \t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["ingresosTotales"]) || array_key_exists("ingresosTotales", $context) ? $context["ingresosTotales"] : (function () { throw new RuntimeError('Variable "ingresosTotales" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " €</p>
  \t\t</div>
\t</div>
</div>
<div class=\"d-flex align-items-center justify-content-center\">
\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mostrar_mas_vendidos_este_mes");
        echo "\"><button class=\"btn btn-danger\">Ver los 10 productos más vendidos este mes</button><a>
\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mostrar_pedidos_diarios_del_mes_actual");
        echo "\"><button class=\"btn btn-danger\">Ver cuantos pedidos se han hecho cada día del mes</button><a>
\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mostrar_ventas_fabricantes_mes_actual");
        echo "\"><button class=\"btn btn-danger\">Ventas de cada fabricante este mes</button><a>
\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><button class=\"btn btn-danger\">Cerrar sesión</button><a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "manager/managerHome.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  112 => 26,  108 => 25,  104 => 24,  100 => 23,  92 => 18,  83 => 12,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"d-flex align-items-center justify-content-center\">
\t<div class=\"card\">
  \t\t<div class=\"card-body\">
\t\t\t<h2>Total de productos vendidos</h2>
    \t\t<p>{{productosVendidos}}</p>
  \t\t</div>
\t</div>
\t\t<div class=\"card\">
  \t\t<div class=\"card-body\">
\t\t\t<h2>Ingresos totales</h2>
    \t\t<p>{{ingresosTotales}} €</p>
  \t\t</div>
\t</div>
</div>
<div class=\"d-flex align-items-center justify-content-center\">
\t<a href=\"{{ path('mostrar_mas_vendidos_este_mes')}}\"><button class=\"btn btn-danger\">Ver los 10 productos más vendidos este mes</button><a>
\t<a href=\"{{ path('mostrar_pedidos_diarios_del_mes_actual')}}\"><button class=\"btn btn-danger\">Ver cuantos pedidos se han hecho cada día del mes</button><a>
\t<a href=\"{{ path('mostrar_ventas_fabricantes_mes_actual')}}\"><button class=\"btn btn-danger\">Ventas de cada fabricante este mes</button><a>
\t<a href=\"{{ path('app_logout')}}\"><button class=\"btn btn-danger\">Cerrar sesión</button><a>
</div>
{% endblock %}
", "manager/managerHome.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/manager/managerHome.html.twig");
    }
}
