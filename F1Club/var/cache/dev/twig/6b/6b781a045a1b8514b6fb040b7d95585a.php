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

/* carrito/carrito.html.twig */
class __TwigTemplate_0dc68b3a98beee3053b2b51bf9d80687 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito/carrito.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carrito/carrito.html.twig", 1);
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
        echo "\t";
        $this->loadTemplate("/compartido/nav.html.twig", "carrito/carrito.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "    <h1>Carrito de Compras</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio unitario</th>
            <th>Total</th>
            <th>Gestionar unidades</th>
        </tr>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productosCarrito"]) || array_key_exists("productosCarrito", $context) ? $context["productosCarrito"] : (function () { throw new RuntimeError('Variable "productosCarrito" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["productId"] => $context["productInfo"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productInfo"], "nombre", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productInfo"], "cantidad", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productInfo"], "precio", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["productInfo"], "cantidad", [], "any", false, false, false, 23) * twig_get_attribute($this->env, $this->source, $context["productInfo"], "precio", [], "any", false, false, false, 23)), "html", null, true);
            echo "</td>
                <td> <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quitar_producto_del_carrito", ["idProducto" => (isset($context["idProducto"]) || array_key_exists("idProducto", $context) ? $context["idProducto"] : (function () { throw new RuntimeError('Variable "idProducto" does not exist.', 24, $this->source); })())]), "html", null, true);
            echo "\"><button class=\"btn btn-danger\"> Quitar una unidad </button><a> </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['productId'], $context['productInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </table>
    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pagina_de_pago");
        echo "\"><button class=\"btn btn-danger\">Comprar</button><a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "carrito/carrito.html.twig";
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
        return array (  126 => 28,  123 => 27,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  95 => 19,  91 => 18,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
    <h1>Carrito de Compras</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio unitario</th>
            <th>Total</th>
            <th>Gestionar unidades</th>
        </tr>
        {% for productId, productInfo in productosCarrito %}
            <tr>
                <td>{{ productInfo.nombre }}</td>
                <td>{{ productInfo.cantidad }}</td>
                <td>{{ productInfo.precio }}</td>
                <td>{{ productInfo.cantidad * productInfo.precio }}</td>
                <td> <a href=\"{{ path('quitar_producto_del_carrito', { idProducto: idProducto })}}\"><button class=\"btn btn-danger\"> Quitar una unidad </button><a> </td>
            </tr>
        {% endfor %}
    </table>
    <a href=\"{{ path('pagina_de_pago')}}\"><button class=\"btn btn-danger\">Comprar</button><a>
{% endblock %}
", "carrito/carrito.html.twig", "/home/daw/Escritorio/Proyecto_tienda/proyectoServidor/templates/carrito/carrito.html.twig");
    }
}
