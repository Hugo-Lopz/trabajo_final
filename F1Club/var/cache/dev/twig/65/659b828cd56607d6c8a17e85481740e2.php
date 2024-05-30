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
<div class=\"d-flex align-items-center justify-content-center\">
\t<h1 class=\"titulo mt-4\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 11, $this->source); })()), "nombreproducto", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
</div>
<section id=\"producto\" class=\"producto d-flex align-items-center\">
\t<div class=\"contenedor container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-6 col-xl-7\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-12 col-xl-9\">
\t\t\t\t\t\t<div id=\"carousel1\" class=\"carousel slide\">
\t\t\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t";
        // line 26
        if ((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["imagen"], "urlimagen", [], "any", false, false, false, 30))), "html", null, true);
                echo "\" class=\"sliderImagenCatalogo\" alt=\"Foto principal\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide=\"prev\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-left-square-fill\"></i>
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide=\"next\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-right-square-fill\"></i>
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 col-xl-5\">
\t\t\t\t<div class=\"descripcion d-flex justify-content-center\">
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<label>Escala</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escala"]) || array_key_exists("escala", $context) ? $context["escala"] : (function () { throw new RuntimeError('Variable "escala" does not exist.', 53, $this->source); })()), "nombreescala", [], "any", false, false, false, 53), "html", null, true);
        echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<label>Fabricante</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fabricante"]) || array_key_exists("fabricante", $context) ? $context["fabricante"] : (function () { throw new RuntimeError('Variable "fabricante" does not exist.', 58, $this->source); })()), "nombre", [], "any", false, false, false, 58), "html", null, true);
        echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<label>Equipo</label>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipo"]) || array_key_exists("equipo", $context) ? $context["equipo"] : (function () { throw new RuntimeError('Variable "equipo" does not exist.', 63, $this->source); })()), "nombreequipo", [], "any", false, false, false, 63), "html", null, true);
        echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h3>Precio:<span> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 67, $this->source); })()), "precio", [], "any", false, false, false, 67), "html", null, true);
        echo "€</span></h3>
\t\t\t\t\t\t\t<h6>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 68, $this->source); })()), "stock", [], "any", false, false, false, 68), "html", null, true);
        echo " unidades en stock</h6>
\t\t\t\t\t\t\t<div id=\"stock\" data-stock=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 69, $this->source); })()), "stock", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div id=\"stock-message\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregar_producto_al_carrito", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)]), "html", null, true);
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
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregar_producto_a_lista_deseos", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>Añadir a deseos</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t";
        // line 109
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109)) {
            // line 110
            echo "\t\t\t\t<div class=\"mt-5\">
                    <h4>Valorar producto</h4>
                    <form class=\"valoracionForm\" action=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valoracion_producto", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" method = \"post\">
                        <h6>Seleccione que valoración numérica le da al producto:</h6>
                        <select name=\"valoracionNumerica\">
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
\t\t\t\t\t\t</br>
                        <label for=\"comentario\" class=\"form-label mt-2\">Comentario:</label>
                        <input type=\"text\" name=\"comentario\" id=\"comentario\" class=\"form-control mt-2\"></input>
                    \t<button class=\"btn mt-2\" type=\"submit\">Valorar producto</button>
                    </form>
\t\t\t\t</div>
                ";
        }
        // line 128
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
</section>
<section class=\"valoraciones d-flex align-items-start\">
    <h3 class=\"titulo\">Valoraciones</h3>
    </br>
    ";
        // line 137
        if (twig_test_empty((isset($context["valoraciones"]) || array_key_exists("valoraciones", $context) ? $context["valoraciones"] : (function () { throw new RuntimeError('Variable "valoraciones" does not exist.', 137, $this->source); })()))) {
            // line 138
            echo "    <p>Todavía no existen valoraciones</p>
    ";
        } else {
            // line 140
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["valoraciones"]) || array_key_exists("valoraciones", $context) ? $context["valoraciones"] : (function () { throw new RuntimeError('Variable "valoraciones" does not exist.', 140, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["valoracion"]) {
                // line 141
                echo "    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "nombreUsuario", [], "any", false, false, false, 141), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "valoracionNumerica", [], "any", false, false, false, 141), "html", null, true);
                echo "/5</p>
\t<div id=\"estrellas\">
        <estrellas-valoracion :rating=\"";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "valoracionNumerica", [], "any", false, false, false, 143), "html", null, true);
                echo "\"></estrellas-valoracion>
    </div>
\t<p>";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "comentario", [], "any", false, false, false, 145), "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valoracion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "    ";
        }
        echo " 
</section> 
";
        // line 149
        $this->loadTemplate("/compartido/footer.html.twig", "producto/vistaProducto.html.twig", 149)->display($context);
        
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
        return array (  299 => 149,  293 => 147,  285 => 145,  280 => 143,  272 => 141,  267 => 140,  263 => 138,  261 => 137,  250 => 128,  231 => 112,  227 => 110,  225 => 109,  215 => 102,  182 => 72,  176 => 69,  172 => 68,  168 => 67,  161 => 63,  153 => 58,  145 => 53,  125 => 35,  122 => 34,  112 => 30,  108 => 28,  103 => 27,  101 => 26,  83 => 11,  79 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/productStyle.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}

<div class=\"d-flex align-items-center justify-content-center\">
\t<h1 class=\"titulo mt-4\">{{ producto.nombreproducto }}</h1>
</div>
<section id=\"producto\" class=\"producto d-flex align-items-center\">
\t<div class=\"contenedor container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-6 col-xl-7\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-12 col-xl-9\">
\t\t\t\t\t\t<div id=\"carousel1\" class=\"carousel slide\">
\t\t\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t{% if imagenes %}
\t\t\t\t\t\t\t\t\t{% for imagen in imagenes %}
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ imagen.urlimagen) }}\" class=\"sliderImagenCatalogo\" alt=\"Foto principal\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide=\"prev\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-left-square-fill\"></i>
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide=\"next\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-right-square-fill\"></i>
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('agregar_producto_a_lista_deseos', { idProducto: producto.id }) }}\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>Añadir a deseos</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mt-5\">
                    <h4>Valorar producto</h4>
                    <form class=\"valoracionForm\" action=\"{{ path('valoracion_producto', { idProducto: producto.id }) }}\" method = \"post\">
                        <h6>Seleccione que valoración numérica le da al producto:</h6>
                        <select name=\"valoracionNumerica\">
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
\t\t\t\t\t\t</br>
                        <label for=\"comentario\" class=\"form-label mt-2\">Comentario:</label>
                        <input type=\"text\" name=\"comentario\" id=\"comentario\" class=\"form-control mt-2\"></input>
                    \t<button class=\"btn mt-2\" type=\"submit\">Valorar producto</button>
                    </form>
\t\t\t\t</div>
                {% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
</section>
<section class=\"valoraciones d-flex align-items-start\">
    <h3 class=\"titulo\">Valoraciones</h3>
    </br>
    {% if valoraciones is empty %}
    <p>Todavía no existen valoraciones</p>
    {% else %}
    {% for valoracion in valoraciones %}
    <p>{{valoracion.nombreUsuario}}-{{valoracion.valoracionNumerica}}/5</p>
\t<div id=\"estrellas\">
        <estrellas-valoracion :rating=\"{{ valoracion.valoracionNumerica }}\"></estrellas-valoracion>
    </div>
\t<p>{{valoracion.comentario}}</p>
    {% endfor %}
    {% endif %} 
</section> 
{% include '/compartido/footer.html.twig' %}{% endblock %}
", "producto/vistaProducto.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/producto/vistaProducto.html.twig");
    }
}
