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

/* producto/vistaProducto.html.twig */
class __TwigTemplate_7dfa413ded862191be65b08a40496644 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/vistaProducto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/vistaProducto.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/productStyle.css"), "html", null, true);
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
        $this->loadTemplate("/compartido/nav.html.twig", "producto/vistaProducto.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "
<h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 10, $this->source); })()), "nombreproducto", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
<section id=\"producto\" class=\"producto d-flex align-items-center\">
\t<div class=\"contenedor container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-6 col-xl-7\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-12 col-xl-9\">
\t\t\t\t\t\t";
        // line 17
        if ((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 19
                echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["imagen"], "urlimagen", [], "any", false, false, false, 21))), "html", null, true);
                echo "\" class=\"sliderImagenCatalogo\" alt=\"Foto principal\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 col-xl-5\">
\t\t\t\t<div class=\"descripcion d-flex justify-content-center\">
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<label>Escala</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escala"]) || array_key_exists("escala", $context) ? $context["escala"] : (function () { throw new RuntimeError('Variable "escala" does not exist.', 34, $this->source); })()), "nombreescala", [], "any", false, false, false, 34), "html", null, true);
        echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<label>Fabricante</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fabricante"]) || array_key_exists("fabricante", $context) ? $context["fabricante"] : (function () { throw new RuntimeError('Variable "fabricante" does not exist.', 39, $this->source); })()), "nombre", [], "any", false, false, false, 39), "html", null, true);
        echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<label>Equipo</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipo"]) || array_key_exists("equipo", $context) ? $context["equipo"] : (function () { throw new RuntimeError('Variable "equipo" does not exist.', 44, $this->source); })()), "nombreequipo", [], "any", false, false, false, 44), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h3>Precio:<span> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 48, $this->source); })()), "precio", [], "any", false, false, false, 48), "html", null, true);
        echo "€</span></h3>
\t\t\t\t\t\t\t<h6>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 49, $this->source); })()), "stock", [], "any", false, false, false, 49), "html", null, true);
        echo " unidades en stock</h6>
\t\t\t\t\t\t\t<div id=\"stock\" data-stock=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 50, $this->source); })()), "stock", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div id=\"stock-message\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregar_producto_al_carrito", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"modalCantidad\" tabindex=\"-1\" aria-labelledby=\"labelModalCantidad\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"labelModalCantidad\">Elige cuantas unidades quieres</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"cantidad\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn\" data-bs-dismiss=\"modal\">Cerrar</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">Aceptar</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCantidad\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-bag\"></i>Añadir al carro
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregar_producto_a_lista_deseos", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>Añadir a deseos</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 92
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)) {
            // line 93
            echo "\t\t\t\t\t<div class=\"mt-5\">
                    \t<h4>Valorar producto</h4>
                    \t<form class=\"valoracionForm\" action=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valoracion_producto", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" method = \"post\">
                        \t<h6>Seleccione que valoración numérica le da al producto:</h6>
                        \t<select name=\"valoracionNumerica\">
                            \t<option value=1 selected>1</option>
                            \t<option value=2>2</option>
                            \t<option value=3>3</option>
                            \t<option value=4>4</option>
                            \t<option value=5>5</option>
                        \t</select>
\t\t\t\t\t\t\t</br>
                        \t<label for=\"comentario\" class=\"form-label mt-2\">Comentario:</label>
                        \t<input type=\"text\" name=\"comentario\" id=\"comentario\" class=\"form-control mt-2\"></input>
                    \t\t<button class=\"btn mt-2\" type=\"submit\">Valorar producto</button>
                    \t</form>
\t\t\t\t\t</div>
                \t";
        }
        // line 111
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</section>
<section class=\"valoraciones d-flex align-items-start\" id=\"estrellas\">
    <h3 class=\"titulo\">Valoraciones</h3>
    </br>
    ";
        // line 120
        if (twig_test_empty((isset($context["valoraciones"]) || array_key_exists("valoraciones", $context) ? $context["valoraciones"] : (function () { throw new RuntimeError('Variable "valoraciones" does not exist.', 120, $this->source); })()))) {
            // line 121
            echo "    <p>Todavía no existen valoraciones</p>
    ";
        } else {
            // line 123
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["valoraciones"]) || array_key_exists("valoraciones", $context) ? $context["valoraciones"] : (function () { throw new RuntimeError('Variable "valoraciones" does not exist.', 123, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["valoracion"]) {
                // line 124
                echo "    <p><i class=\"bi bi-person-circle pe-2\"></i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "nombreUsuario", [], "any", false, false, false, 124), "html", null, true);
                echo "<estrellas-valoracion :rating=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "valoracionNumerica", [], "any", false, false, false, 124), "html", null, true);
                echo "\"></estrellas-valoracion></p>

\t<p>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "comentario", [], "any", false, false, false, 126), "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valoracion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "    ";
        }
        echo " 
</section> 
";
        // line 130
        $this->loadTemplate("/compartido/footer.html.twig", "producto/vistaProducto.html.twig", 130)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "producto/vistaProducto.html.twig";
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
        return array (  277 => 130,  271 => 128,  263 => 126,  255 => 124,  250 => 123,  246 => 121,  244 => 120,  233 => 111,  214 => 95,  210 => 93,  208 => 92,  199 => 86,  163 => 53,  157 => 50,  153 => 49,  149 => 48,  142 => 44,  134 => 39,  126 => 34,  116 => 26,  113 => 25,  103 => 21,  99 => 19,  94 => 18,  92 => 17,  82 => 10,  79 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/productStyle.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}

<h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">{{ producto.nombreproducto }}</h1>
<section id=\"producto\" class=\"producto d-flex align-items-center\">
\t<div class=\"contenedor container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-6 col-xl-7\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-12 col-xl-9\">
\t\t\t\t\t\t{% if imagenes %}
\t\t\t\t\t\t\t{% for imagen in imagenes %}
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ imagen.urlimagen) }}\" class=\"sliderImagenCatalogo\" alt=\"Foto principal\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 col-xl-5\">
\t\t\t\t<div class=\"descripcion d-flex justify-content-center\">
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<label>Escala</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ escala.nombreescala }}
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<label>Fabricante</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ fabricante.nombre }}
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<label>Equipo</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ equipo.nombreequipo }}
\t\t\t\t\t\t</p>
\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h3>Precio:<span> {{ producto.precio }}€</span></h3>
\t\t\t\t\t\t\t<h6>{{ producto.stock }} unidades en stock</h6>
\t\t\t\t\t\t\t<div id=\"stock\" data-stock=\"{{ producto.stock }}\">
\t\t\t\t\t\t\t\t<div id=\"stock-message\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form action=\"{{ path('agregar_producto_al_carrito', { idProducto: producto.id }) }}\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"modalCantidad\" tabindex=\"-1\" aria-labelledby=\"labelModalCantidad\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"labelModalCantidad\">Elige cuantas unidades quieres</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"cantidad\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn\" data-bs-dismiss=\"modal\">Cerrar</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">Aceptar</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCantidad\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-bag\"></i>Añadir al carro
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('agregar_producto_a_lista_deseos', { idProducto: producto.id }) }}\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>Añadir a deseos</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"mt-5\">
                    \t<h4>Valorar producto</h4>
                    \t<form class=\"valoracionForm\" action=\"{{ path('valoracion_producto', { idProducto: producto.id }) }}\" method = \"post\">
                        \t<h6>Seleccione que valoración numérica le da al producto:</h6>
                        \t<select name=\"valoracionNumerica\">
                            \t<option value=1 selected>1</option>
                            \t<option value=2>2</option>
                            \t<option value=3>3</option>
                            \t<option value=4>4</option>
                            \t<option value=5>5</option>
                        \t</select>
\t\t\t\t\t\t\t</br>
                        \t<label for=\"comentario\" class=\"form-label mt-2\">Comentario:</label>
                        \t<input type=\"text\" name=\"comentario\" id=\"comentario\" class=\"form-control mt-2\"></input>
                    \t\t<button class=\"btn mt-2\" type=\"submit\">Valorar producto</button>
                    \t</form>
\t\t\t\t\t</div>
                \t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</section>
<section class=\"valoraciones d-flex align-items-start\" id=\"estrellas\">
    <h3 class=\"titulo\">Valoraciones</h3>
    </br>
    {% if valoraciones is empty %}
    <p>Todavía no existen valoraciones</p>
    {% else %}
    {% for valoracion in valoraciones %}
    <p><i class=\"bi bi-person-circle pe-2\"></i>{{valoracion.nombreUsuario}}<estrellas-valoracion :rating=\"{{ valoracion.valoracionNumerica }}\"></estrellas-valoracion></p>

\t<p>{{valoracion.comentario}}</p>
    {% endfor %}
    {% endif %} 
</section> 
{% include '/compartido/footer.html.twig' %}{% endblock %}
", "producto/vistaProducto.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/producto/vistaProducto.html.twig");
    }
}
