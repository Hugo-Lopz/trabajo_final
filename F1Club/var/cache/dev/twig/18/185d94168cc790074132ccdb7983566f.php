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
class __TwigTemplate_5201964a6cbdda77984b075ef14dc61d extends Template
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
        echo "\t<h1 class=\"titulo d-flex justify-content-center mt-5\">Tus pedidos</h1>
\t<div class=\"accordion px-4 pt-3\" id=\"accordionPedidos\">
\t\t";
        // line 11
        if (twig_test_empty((isset($context["pedidosUsuario"]) || array_key_exists("pedidosUsuario", $context) ? $context["pedidosUsuario"] : (function () { throw new RuntimeError('Variable "pedidosUsuario" does not exist.', 11, $this->source); })()))) {
            // line 12
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
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"bi bi-bag-check\"></i>
\t\t\t\t\t\t\tPedido realizado el día:
\t\t\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaPedido", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t- Coste:
\t\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "costeTotal", [], "any", false, false, false, 23), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"collapse";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionPedidos\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pedido"], "lineasPedido", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["lineaPedido"]) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineaPedido"], "nombreProducto", [], "any", false, false, false, 31), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t- x";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineaPedido"], "cantidad", [], "any", false, false, false, 32), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineaPedido"], "precio", [], "any", false, false, false, 34), "html", null, true);
                    echo "€</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineaPedido'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t";
        }
        // line 42
        echo "\t</div>

\t";
        // line 44
        $this->loadTemplate("/compartido/footer.html.twig", "usuario/vistaPedidos.html.twig", 44)->display($context);
        
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
        return array (  165 => 44,  161 => 42,  158 => 41,  148 => 36,  140 => 34,  135 => 32,  130 => 31,  126 => 30,  120 => 27,  113 => 23,  108 => 21,  99 => 17,  95 => 15,  90 => 14,  86 => 12,  84 => 11,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
\t<h1 class=\"titulo d-flex justify-content-center mt-5\">Tus pedidos</h1>
\t<div class=\"accordion px-4 pt-3\" id=\"accordionPedidos\">
\t\t{% if pedidosUsuario is empty %}
\t\t\t<p>Todavía no se han realizado pedidos</p>
\t\t{% else %}
\t\t{% for pedido in pedidosUsuario %}
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h2 class=\"accordion-header\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse{{pedido.id}}\" aria-expanded=\"false\" aria-controls=\"collapse{{pedido.id}}\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"bi bi-bag-check\"></i>
\t\t\t\t\t\t\tPedido realizado el día:
\t\t\t\t\t\t\t{{pedido.fechaPedido|date('Y-m-d')}}
\t\t\t\t\t\t\t- Coste:
\t\t\t\t\t\t\t{{pedido.costeTotal}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"collapse{{pedido.id}}\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionPedidos\">
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

\t{% include '/compartido/footer.html.twig' %}
{% endblock %}
", "usuario/vistaPedidos.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/usuario/vistaPedidos.html.twig");
    }
}
