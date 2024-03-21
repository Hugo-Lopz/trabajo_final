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
class __TwigTemplate_29ca32bdca6bf058915aea555e27b2bf extends Template
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
        echo "\t";
        $this->loadTemplate("/compartido/nav.html.twig", "producto/vistaProducto.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "
\t<div class=\"d-flex align-items-center justify-content-center\">
        <h1 class=\"titulo\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 11, $this->source); })()), "nombreproducto", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
    </div>
    <section id=\"producto\" class=\"producto d-flex align-items-center\">
        <div class=\"contenedor container-fluid\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-xl-7\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-12 col-xl-9\">
                            <div id=\"carousel1\" class=\"carousel slide\">
                                <div class=\"carousel-indicators\">
                                    <button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"0\"
                                        class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                    <button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"1\"
                                        aria-label=\"Slide 2\"></button>
                                    <button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"2\"
                                        aria-label=\"Slide 3\"></button>
                                </div>
                                <div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t";
        // line 29
        if ((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "        \t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 31
                echo "\t\t    \t\t\t\t\t\t<div class=\"carousel-item active\">
                                        <div class=\"container\">
                                            <img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["imagen"], "urlimagen", [], "any", false, false, false, 33))), "html", null, true);
                echo "\" class=\"sliderImagenCatalogo\" alt=\"Foto principal\">
                                        </div>
                                    </div>
        \t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 38
        echo "                            \t</div>
                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel1\"
                                    data-bs-slide=\"prev\">
                                    <i class=\"bi bi-arrow-left-square-fill\"></i>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel1\"
                                    data-bs-slide=\"next\">
                                    <i class=\"bi bi-arrow-right-square-fill\"></i>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-xl-5\">
                    <div class=\"descripcion d-flex justify-content-center\">
                        <div class=\"info\">
                            <label>Escala</label>
                            <p> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escala"]) || array_key_exists("escala", $context) ? $context["escala"] : (function () { throw new RuntimeError('Variable "escala" does not exist.', 57, $this->source); })()), "nombreescala", [], "any", false, false, false, 57), "html", null, true);
        echo " </p>

                            <label>Fabricante</label>
                            <p> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fabricante"]) || array_key_exists("fabricante", $context) ? $context["fabricante"] : (function () { throw new RuntimeError('Variable "fabricante" does not exist.', 60, $this->source); })()), "nombre", [], "any", false, false, false, 60), "html", null, true);
        echo " </p>

                            <label>Equipo</label>
                            <p> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipo"]) || array_key_exists("equipo", $context) ? $context["equipo"] : (function () { throw new RuntimeError('Variable "equipo" does not exist.', 63, $this->source); })()), "nombreequipo", [], "any", false, false, false, 63), "html", null, true);
        echo " </p>

                            <div>
                                <h3>Precio:<span> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 66, $this->source); })()), "precio", [], "any", false, false, false, 66), "html", null, true);
        echo "€</span></h3>
                                <h6>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 67, $this->source); })()), "stock", [], "any", false, false, false, 67), "html", null, true);
        echo " unidades en stock</h6>
                                <form class=\"carritoForm\" action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregar_producto_al_carrito", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" method = \"post\">
                                    <select name=\"cantidad\">
                                        <option value=1 selected>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                    </select>
                                    </br>
                                    <button class=\"btn\" type=\"submit\"><i class=\"bi bi-bag\"></i>Añadir al carrito</button>
                                </form>
                                <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregar_producto_a_lista_deseos", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\"><button class=\"btn btn2\"><i class=\"bi bi-heart-fill\"></i>Añadir a deseos</button></a>
                            </br>
                            </br>
                            ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "                                <h4>Valorar producto</h4>
                                <form class=\"valoracionForm\" action=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valoracion_producto", ["idProducto" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" method = \"post\">
                                    <h6>Seleccione que valoración numérica le da al producto:</h6>
                                    <select name=\"valoracionNumerica\">
                                        <option value=1 selected>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                        <option value=4>4</option>
                                        <option value=5>5</option>
                                    </select>
                                        </br>
                                        </br>
                                    <label for=\"comentario\" class=\"form-label\">Comentario:</label>
                                       </br>
                                    <input type=\"text\" name=\"comentario\" id=\"comentario\" class=\"form-control\"></input>
                                    </br>
                                    <button class=\"btn\" type=\"submit\">Valorar producto</button>
                                </form>
                            ";
        }
        // line 100
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class=\"valoraciones d-flex align-items-start\">
        <h3 class=\"titulo\">Valoraciones</h3>
            </br>
            ";
        // line 109
        if (twig_test_empty((isset($context["valoraciones"]) || array_key_exists("valoraciones", $context) ? $context["valoraciones"] : (function () { throw new RuntimeError('Variable "valoraciones" does not exist.', 109, $this->source); })()))) {
            // line 110
            echo "            <p> Todavía no existen valoraciones </p>
            ";
        } else {
            // line 112
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["valoraciones"]) || array_key_exists("valoraciones", $context) ? $context["valoraciones"] : (function () { throw new RuntimeError('Variable "valoraciones" does not exist.', 112, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["valoracion"]) {
                // line 113
                echo "            <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "nombreUsuario", [], "any", false, false, false, 113), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "valoracionNumerica", [], "any", false, false, false, 113), "html", null, true);
                echo "/5
             </br>
             ";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valoracion"], "comentario", [], "any", false, false, false, 115), "html", null, true);
                echo "
            </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valoracion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "            ";
        }
        // line 119
        echo "    </section>
\t";
        // line 120
        $this->loadTemplate("/compartido/footer.html.twig", "producto/vistaProducto.html.twig", 120)->display($context);
        
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
        return array (  265 => 120,  262 => 119,  259 => 118,  250 => 115,  242 => 113,  237 => 112,  233 => 110,  231 => 109,  220 => 100,  199 => 82,  196 => 81,  194 => 80,  188 => 77,  176 => 68,  172 => 67,  168 => 66,  162 => 63,  156 => 60,  150 => 57,  129 => 38,  126 => 37,  116 => 33,  112 => 31,  107 => 30,  105 => 29,  84 => 11,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/productStyle.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}

\t<div class=\"d-flex align-items-center justify-content-center\">
        <h1 class=\"titulo\">{{ producto.nombreproducto }}</h1>
    </div>
    <section id=\"producto\" class=\"producto d-flex align-items-center\">
        <div class=\"contenedor container-fluid\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-xl-7\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-12 col-xl-9\">
                            <div id=\"carousel1\" class=\"carousel slide\">
                                <div class=\"carousel-indicators\">
                                    <button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"0\"
                                        class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                    <button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"1\"
                                        aria-label=\"Slide 2\"></button>
                                    <button type=\"button\" data-bs-target=\"#carousel1\" data-bs-slide-to=\"2\"
                                        aria-label=\"Slide 3\"></button>
                                </div>
                                <div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t{% if imagenes %}
        \t\t\t\t\t\t\t{% for imagen in imagenes %}
\t\t    \t\t\t\t\t\t<div class=\"carousel-item active\">
                                        <div class=\"container\">
                                            <img src=\"{{ asset('images/' ~ imagen.urlimagen) }}\" class=\"sliderImagenCatalogo\" alt=\"Foto principal\">
                                        </div>
                                    </div>
        \t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
                            \t</div>
                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel1\"
                                    data-bs-slide=\"prev\">
                                    <i class=\"bi bi-arrow-left-square-fill\"></i>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel1\"
                                    data-bs-slide=\"next\">
                                    <i class=\"bi bi-arrow-right-square-fill\"></i>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-xl-5\">
                    <div class=\"descripcion d-flex justify-content-center\">
                        <div class=\"info\">
                            <label>Escala</label>
                            <p> {{ escala.nombreescala }} </p>

                            <label>Fabricante</label>
                            <p> {{ fabricante.nombre }} </p>

                            <label>Equipo</label>
                            <p> {{ equipo.nombreequipo }} </p>

                            <div>
                                <h3>Precio:<span> {{ producto.precio }}€</span></h3>
                                <h6>{{ producto.stock }} unidades en stock</h6>
                                <form class=\"carritoForm\" action=\"{{ path('agregar_producto_al_carrito', { idProducto: producto.id }) }}\" method = \"post\">
                                    <select name=\"cantidad\">
                                        <option value=1 selected>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                    </select>
                                    </br>
                                    <button class=\"btn\" type=\"submit\"><i class=\"bi bi-bag\"></i>Añadir al carrito</button>
                                </form>
                                <a href=\"{{ path('agregar_producto_a_lista_deseos', { idProducto: producto.id }) }}\"><button class=\"btn btn2\"><i class=\"bi bi-heart-fill\"></i>Añadir a deseos</button></a>
                            </br>
                            </br>
                            {% if app.user %}
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
                                        </br>
                                        </br>
                                    <label for=\"comentario\" class=\"form-label\">Comentario:</label>
                                       </br>
                                    <input type=\"text\" name=\"comentario\" id=\"comentario\" class=\"form-control\"></input>
                                    </br>
                                    <button class=\"btn\" type=\"submit\">Valorar producto</button>
                                </form>
                            {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class=\"valoraciones d-flex align-items-start\">
        <h3 class=\"titulo\">Valoraciones</h3>
            </br>
            {% if valoraciones is empty %}
            <p> Todavía no existen valoraciones </p>
            {% else %}
            {% for valoracion in valoraciones %}
            <p>{{valoracion.nombreUsuario}} - {{valoracion.valoracionNumerica}}/5
             </br>
             {{valoracion.comentario}}
            </p>
            {% endfor %}
            {% endif %}
    </section>
\t{% include '/compartido/footer.html.twig' %}
{% endblock %}
", "producto/vistaProducto.html.twig", "/home/daw/Escritorio/Proyecto_tienda/proyectoServidor/templates/producto/vistaProducto.html.twig");
    }
}
