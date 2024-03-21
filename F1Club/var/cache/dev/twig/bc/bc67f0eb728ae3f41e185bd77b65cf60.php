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

/* usuario/vistaPedidos.html.twig */
class __TwigTemplate_ee014f3f009f1bdff9bd4ee70557f7ff extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/vistaPedidos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario/vistaPedidos.html.twig", 1);
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
        $this->loadTemplate("/compartido/nav.html.twig", "usuario/vistaPedidos.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "\t<div class=\"accordion\" id=\"accordionExample\">
\t\t";
        // line 10
        if (twig_test_empty((isset($context["pedidosUsuario"]) || array_key_exists("pedidosUsuario", $context) ? $context["pedidosUsuario"] : (function () { throw new RuntimeError('Variable "pedidosUsuario" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "\t\t\t<p>Todavía no se han realizado pedidos</p>

\t\t";
        } else {
            // line 14
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pedidosUsuario"]) || array_key_exists("pedidosUsuario", $context) ? $context["pedidosUsuario"] : (function () { throw new RuntimeError('Variable "pedidosUsuario" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
                // line 15
                echo "\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h2 class=\"accordion-header\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
\t\t\t\t\t\t<p>Pedido realizado el día:
\t\t\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaPedido", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t- Coste:
\t\t\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "costeTotal", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"collapse";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample\">

\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pedido"], "lineasPedido", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["lineaPedido"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineaPedido"], "nombreProducto", [], "any", false, false, false, 29), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t- x";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineaPedido"], "cantidad", [], "any", false, false, false, 30), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineaPedido"], "precio", [], "any", false, false, false, 32), "html", null, true);
                    echo "€</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineaPedido'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t";
        }
        // line 41
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "usuario/vistaPedidos.html.twig";
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
        return array (  160 => 41,  157 => 40,  146 => 34,  138 => 32,  133 => 30,  128 => 29,  124 => 28,  117 => 24,  111 => 21,  106 => 19,  99 => 17,  95 => 15,  90 => 14,  85 => 11,  83 => 10,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
\t<div class=\"accordion\" id=\"accordionExample\">
\t\t{% if pedidosUsuario is empty %}
\t\t\t<p>Todavía no se han realizado pedidos</p>

\t\t{% else %}
\t\t{% for pedido in pedidosUsuario %}
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h2 class=\"accordion-header\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse{{pedido.id}}\" aria-expanded=\"false\" aria-controls=\"collapse{{pedido.id}}\">
\t\t\t\t\t\t<p>Pedido realizado el día:
\t\t\t\t\t\t\t{{pedido.fechaPedido|date('Y-m-d')}}
\t\t\t\t\t\t\t- Coste:
\t\t\t\t\t\t\t{{pedido.costeTotal}}</p>
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"collapse{{pedido.id}}\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample\">

\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for lineaPedido in pedido.lineasPedido %}
\t\t\t\t\t\t\t\t<li>{{lineaPedido.nombreProducto}}
\t\t\t\t\t\t\t\t\t- x{{lineaPedido.cantidad}}
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t{{lineaPedido.precio}}€</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t\t{% endif %}
\t</div>
{% endblock %}
", "usuario/vistaPedidos.html.twig", "/home/daw/Escritorio/Proyecto_tienda/proyectoServidor/templates/usuario/vistaPedidos.html.twig");
    }
}
