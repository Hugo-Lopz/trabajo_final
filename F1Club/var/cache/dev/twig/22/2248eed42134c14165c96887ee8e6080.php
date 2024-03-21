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

/* compra/procesoDePago.html.twig */
class __TwigTemplate_dbae83a28b599307e5542cb061b437bf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compra/procesoDePago.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compra/procesoDePago.html.twig", 1);
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
        echo "\t<h1>Página de pago</h1>
    <p>El total del pago es ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["precio_total"]) || array_key_exists("precio_total", $context) ? $context["precio_total"] : (function () { throw new RuntimeError('Variable "precio_total" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " €</p>
    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("procesar_compra");
        echo "\" method=\"post\">
        <select name=\"metodo_pago\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metodos_de_pago"]) || array_key_exists("metodos_de_pago", $context) ? $context["metodos_de_pago"] : (function () { throw new RuntimeError('Variable "metodos_de_pago" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["metodoPago"]) {
            // line 13
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metodoPago"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metodoPago"], "nombre", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metodoPago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <button type=\"submit\">Seleccionar</button>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "compra/procesoDePago.html.twig";
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
        return array (  104 => 15,  93 => 13,  89 => 12,  84 => 10,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t<h1>Página de pago</h1>
    <p>El total del pago es {{precio_total}} €</p>
    <form action=\"{{ path('procesar_compra') }}\" method=\"post\">
        <select name=\"metodo_pago\">
            {% for metodoPago in metodos_de_pago %}
                <option value=\"{{ metodoPago.id }}\">{{ metodoPago.nombre }}</option>
            {% endfor %}
        </select>
        <button type=\"submit\">Seleccionar</button>
    </form>
{% endblock %}
", "compra/procesoDePago.html.twig", "/home/daw/Escritorio/Proyecto_tienda/proyectoServidor/templates/compra/procesoDePago.html.twig");
    }
}
