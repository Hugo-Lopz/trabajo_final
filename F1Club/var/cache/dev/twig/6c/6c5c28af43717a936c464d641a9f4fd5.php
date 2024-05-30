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

/* home/home.html.twig */
class __TwigTemplate_a16bc3c0ec8ab8862486c7d6bcdc8fd5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
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
        echo "

\t";
        // line 10
        $this->loadTemplate("/compartido/nav.html.twig", "home/home.html.twig", 10)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 10, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 10, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 10, $this->source); })())]));
        // line 11
        echo "    <section class=\"seccionPresentacion d-flex flex-column\">
        <div>
            <h2 class=\"titulo\">Te damos la bienvenida a F1 Club
                Shop</h2>
            <h3 class=\"titulo\">El lugar en el que podrás...</h3>
        </div>

        <div class=\"container-fluid text-center categoria-contenedor\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12\">
                    <div>
                        <div class=\"card mb-3\">
                            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/card1.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Imagen descripción compra\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Comprar</h5>
                                <p class=\"card-text\">
                                    Adquirir maquetas de F1
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div>
                        <div class=\"card mb-3\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/card2.webp"), "html", null, true);
        echo "\" class=\"card-img-top\"
                                alt=\"Imagen de pilotos para la descripción de foro\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Valorar</h5>
                                <p class=\"card-text\">
                                    Valorar los productos comprados
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div>
                        <div class=\"card mb-3\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/card3.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\"
                                alt=\"Imagen de una colección para la descripción de coleccionismo\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Explorar</h5>
                                <p class=\"card-text\">
                                    Explorar nuestro amplio catalogo de maquetas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"catalogo\" class=\"catalogo d-flex flex-column\">
     <h2 class=\"titulo\">Top ventas</h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productosMasVendidos"]) || array_key_exists("productosMasVendidos", $context) ? $context["productosMasVendidos"] : (function () { throw new RuntimeError('Variable "productosMasVendidos" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 70
            echo "                <div class=\"col-md-12 col-lg-4 d-flex align-items-center justify-content-center\">
                    <div class=\"producto\">
\t\t\t\t\t\t";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["producto"], "url_imagen", [], "any", false, false, false, 72)) {
                // line 73
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["producto"], "url_imagen", [], "any", false, false, false, 73))), "html", null, true);
                echo "\" alt=\"Imagen del producto\">
\t\t\t\t\t\t";
            }
            // line 75
            echo "                        <div class=\"datos\">
                            <h5> ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre_producto", [], "any", false, false, false, 76), "html", null, true);
            echo "</h5>
                            <h6> Precio: ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 77), "html", null, true);
            echo " </h6>
                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_producto", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"><button class=\"btn\" type=\"button\" aria-expanded=\"false\">
                                Ver producto
                            </button></a>
                        </div>
                    </div>
                </div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            </div>
        </div>
    </section>

    <!--Catálogo equipos-->
    <section id=\"catalogo2\" class=\"catalogo2 d-flex flex-column\">
        <h2 class=\"titulo\">Encontrar productos por equipo</h2>
        <div class=\"container-fluid d-flex align-items-center justify-content-center\">
            <div class=\"row\">
                <!-- Categoría 1 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/rblogo.jpeg"), "html", null, true);
        echo "\"alt=\"Foto logo equipo Red Bull\">
                        <div class=\"overlay\">
                            <h3>Red Bull Racing F1</h3>
                            <h6>Pilotos: M. verstappen y S. Pérez</h6>
                            <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => 1]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 2 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/mblogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Mercedes-Benz\">
                        <div class=\"overlay\">
                            <h3>Mercedes AMG F1</h3>
                            <h6>Pilotos: L. Hamilton y G. Russell</h6>
                            <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => 3]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 3 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/ferrarilogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Ferrari\">
                        <div class=\"overlay\">
                            <h3>Scuderia Ferrari F1</h3>
                            <h6>Pilotos: C. Sainz y C. Leclerc</h6>
                            <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => 5]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 4 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/amlogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Aston Martin\">
                        <div class=\"overlay\">
                            <h3>Aston Martin F1</h3>
                            <h6>Pilotos: L. Stroll y F. Alonso</h6>
                            <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => 2]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 5 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/mclarenlogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Mclaren\">
                        <div class=\"overlay\">
                            <h3>Mclaren F1</h3>
                            <h6>Pilotos: L. Norris y O. Piastri</h6>
                            <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => 4]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 6 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/alpine-logo.webp"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Alpine\">
                        <div class=\"overlay\">
                            <h3>Alpine F1</h3>
                            <h6>Pilotos: E. Ocon y P. Gasly</h6>
                            <a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => 6]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 175
        $this->loadTemplate("/compartido/footer.html.twig", "home/home.html.twig", 175)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/home.html.twig";
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
        return array (  320 => 175,  308 => 166,  301 => 162,  289 => 153,  282 => 149,  270 => 140,  263 => 136,  251 => 127,  244 => 123,  232 => 114,  225 => 110,  213 => 101,  206 => 97,  192 => 85,  179 => 78,  175 => 77,  171 => 76,  168 => 75,  162 => 73,  160 => 72,  156 => 70,  152 => 69,  130 => 50,  113 => 36,  97 => 23,  83 => 11,  81 => 10,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}


\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
    <section class=\"seccionPresentacion d-flex flex-column\">
        <div>
            <h2 class=\"titulo\">Te damos la bienvenida a F1 Club
                Shop</h2>
            <h3 class=\"titulo\">El lugar en el que podrás...</h3>
        </div>

        <div class=\"container-fluid text-center categoria-contenedor\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12\">
                    <div>
                        <div class=\"card mb-3\">
                            <img src=\"{{ asset('images/home/card1.jpg') }}\" class=\"card-img-top\" alt=\"Imagen descripción compra\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Comprar</h5>
                                <p class=\"card-text\">
                                    Adquirir maquetas de F1
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div>
                        <div class=\"card mb-3\">
                            <img src=\"{{ asset('images/home/card2.webp') }}\" class=\"card-img-top\"
                                alt=\"Imagen de pilotos para la descripción de foro\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Valorar</h5>
                                <p class=\"card-text\">
                                    Valorar los productos comprados
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div>
                        <div class=\"card mb-3\">
                            <img src=\"{{ asset('images/home/card3.jpg') }}\" class=\"card-img-top\"
                                alt=\"Imagen de una colección para la descripción de coleccionismo\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Explorar</h5>
                                <p class=\"card-text\">
                                    Explorar nuestro amplio catalogo de maquetas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"catalogo\" class=\"catalogo d-flex flex-column\">
     <h2 class=\"titulo\">Top ventas</h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
\t\t\t\t{% for producto in productosMasVendidos %}
                <div class=\"col-md-12 col-lg-4 d-flex align-items-center justify-content-center\">
                    <div class=\"producto\">
\t\t\t\t\t\t{% if producto.url_imagen %}
\t\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ producto.url_imagen) }}\" alt=\"Imagen del producto\">
\t\t\t\t\t\t{% endif %}
                        <div class=\"datos\">
                            <h5> {{ producto.nombre_producto }}</h5>
                            <h6> Precio: {{ producto.precio }} </h6>
                            <a href=\"{{ path('ver_producto', { id: producto.id }) }}\"><button class=\"btn\" type=\"button\" aria-expanded=\"false\">
                                Ver producto
                            </button></a>
                        </div>
                    </div>
                </div>
\t\t\t\t{% endfor %}
            </div>
        </div>
    </section>

    <!--Catálogo equipos-->
    <section id=\"catalogo2\" class=\"catalogo2 d-flex flex-column\">
        <h2 class=\"titulo\">Encontrar productos por equipo</h2>
        <div class=\"container-fluid d-flex align-items-center justify-content-center\">
            <div class=\"row\">
                <!-- Categoría 1 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"{{ asset('images/home/rblogo.jpeg') }}\"alt=\"Foto logo equipo Red Bull\">
                        <div class=\"overlay\">
                            <h3>Red Bull Racing F1</h3>
                            <h6>Pilotos: M. verstappen y S. Pérez</h6>
                            <a href=\"{{ path('seleccion_equipo', { id: 1 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 2 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"{{ asset('images/home/mblogo.jpg') }}\" alt=\"Foto logo equipo Mercedes-Benz\">
                        <div class=\"overlay\">
                            <h3>Mercedes AMG F1</h3>
                            <h6>Pilotos: L. Hamilton y G. Russell</h6>
                            <a href=\"{{ path('seleccion_equipo', { id: 3 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 3 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"{{ asset('images/home/ferrarilogo.jpg') }}\" alt=\"Foto logo equipo Ferrari\">
                        <div class=\"overlay\">
                            <h3>Scuderia Ferrari F1</h3>
                            <h6>Pilotos: C. Sainz y C. Leclerc</h6>
                            <a href=\"{{ path('seleccion_equipo', { id: 5 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 4 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"{{ asset('images/home/amlogo.jpg') }}\" alt=\"Foto logo equipo Aston Martin\">
                        <div class=\"overlay\">
                            <h3>Aston Martin F1</h3>
                            <h6>Pilotos: L. Stroll y F. Alonso</h6>
                            <a href=\"{{ path('seleccion_equipo', { id: 2 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 5 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"{{ asset('images/home/mclarenlogo.jpg') }}\" alt=\"Foto logo equipo Mclaren\">
                        <div class=\"overlay\">
                            <h3>Mclaren F1</h3>
                            <h6>Pilotos: L. Norris y O. Piastri</h6>
                            <a href=\"{{ path('seleccion_equipo', { id: 4 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Categoría 6 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"{{ asset('images/home/alpine-logo.webp') }}\" alt=\"Foto logo equipo Alpine\">
                        <div class=\"overlay\">
                            <h3>Alpine F1</h3>
                            <h6>Pilotos: E. Ocon y P. Gasly</h6>
                            <a href=\"{{ path('seleccion_equipo', { id: 6 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% include '/compartido/footer.html.twig' %}
{% endblock %}
", "home/home.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/home/home.html.twig");
    }
}
