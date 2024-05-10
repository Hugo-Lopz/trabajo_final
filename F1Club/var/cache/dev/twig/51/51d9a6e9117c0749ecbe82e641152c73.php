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
class __TwigTemplate_4137dd549ab3d818852449efac49dc34 extends Template
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
        <div class=\"titulo\">
            <h2 class=\"seccion-titulo\">Te damos la bienvenida a F1 Club
                Shop</h2>
            <h3 class=\"seccion-titulo\">El lugar en el que podrás...</h3>
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

    <!--Catálogo equipos-->
    <section id=\"catalogo2\" class=\"catalogo2 d-flex flex-column\">
        <h2 class=\"titulo\">Encontrar productos por equipo</h2>
        <div class=\"container-fluid d-flex align-items-center justify-content-center\">
            <div class=\"row\">
                <!-- Categoría 1 -->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <div class=\"categoria\">
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/rblogo.jpeg"), "html", null, true);
        echo "\"alt=\"Foto logo equipo Red Bull\">
                        <div class=\"overlay\">
                            <h3>Red Bull Racing F1</h3>
                            <h6>Pilotos: M. verstappen y S. Pérez</h6>
                            <a href=\"";
        // line 77
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
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/mblogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Mercedes-Benz\">
                        <div class=\"overlay\">
                            <h3>Mercedes AMG F1</h3>
                            <h6>Pilotos: L. Hamilton y G. Russell</h6>
                            <a href=\"";
        // line 90
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
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/ferrarilogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Ferrari\">
                        <div class=\"overlay\">
                            <h3>Scuderia Ferrari F1</h3>
                            <h6>Pilotos: C. Sainz y C. Leclerc</h6>
                            <a href=\"";
        // line 103
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
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/amlogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Aston Martin\">
                        <div class=\"overlay\">
                            <h3>Aston Martin F1</h3>
                            <h6>Pilotos: L. Stroll y F. Alonso</h6>
                            <a href=\"";
        // line 116
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
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/mclarenlogo.jpg"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Mclaren\">
                        <div class=\"overlay\">
                            <h3>Mclaren F1</h3>
                            <h6>Pilotos: L. Norris y O. Piastri</h6>
                            <a href=\"";
        // line 129
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
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/alpine-logo.webp"), "html", null, true);
        echo "\" alt=\"Foto logo equipo Alpine\">
                        <div class=\"overlay\">
                            <h3>Alpine F1</h3>
                            <h6>Pilotos: E. Ocon y P. Gasly</h6>
                            <a href=\"";
        // line 142
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

    <!--Catálogo escalas-->
    <section class=\"catalogo3\">
        <h2 class=\"titulo\">¿Como funcionan las escalas?</h2>
        <div class=\"container-fluid d-flex align-items-center justify-content-center\">
            <div class=\"row\">
                <div class=\"col-lg-12 mx-auto\">
                    <ul class=\"timeline\">
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/18 (Más grande)</h5>
                            <ul>
                                <li> 18 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 30 cm </li>
                                <li> Mayor calidad en los detalles </li>
                            </ul>
                            <a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_escala", ["id" => 1]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/24</h5>
                            <ul>
                                <li> 24 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 20 cm </li>
                                <li> Incluye vitrina de exposición </li>
                            </ul>
                            <a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_escala", ["id" => 2]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/43</h5>
                            <ul>
                                <li> 43 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 12 cm </li>
                                <li> Incluye vitrina de exposición </li>
                            </ul>
                            <a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_escala", ["id" => 3]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/64 (Más pequeño)</h5>
                            <ul>
                                <li> 64 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 7 cm </li>
                                <li> Menor tamaño pero con gran variedad de
                                    detalles de calidad </li>
                            </ul>
                            <a href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_escala", ["id" => 4]);
        echo "\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 217
        $this->loadTemplate("/compartido/footer.html.twig", "home/home.html.twig", 217)->display($context);
        
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
        return array (  348 => 217,  336 => 208,  319 => 194,  303 => 181,  287 => 168,  258 => 142,  251 => 138,  239 => 129,  232 => 125,  220 => 116,  213 => 112,  201 => 103,  194 => 99,  182 => 90,  175 => 86,  163 => 77,  156 => 73,  130 => 50,  113 => 36,  97 => 23,  83 => 11,  81 => 10,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
        <div class=\"titulo\">
            <h2 class=\"seccion-titulo\">Te damos la bienvenida a F1 Club
                Shop</h2>
            <h3 class=\"seccion-titulo\">El lugar en el que podrás...</h3>
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

    <!--Catálogo escalas-->
    <section class=\"catalogo3\">
        <h2 class=\"titulo\">¿Como funcionan las escalas?</h2>
        <div class=\"container-fluid d-flex align-items-center justify-content-center\">
            <div class=\"row\">
                <div class=\"col-lg-12 mx-auto\">
                    <ul class=\"timeline\">
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/18 (Más grande)</h5>
                            <ul>
                                <li> 18 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 30 cm </li>
                                <li> Mayor calidad en los detalles </li>
                            </ul>
                            <a href=\"{{ path('seleccion_escala', { id: 1 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/24</h5>
                            <ul>
                                <li> 24 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 20 cm </li>
                                <li> Incluye vitrina de exposición </li>
                            </ul>
                            <a href=\"{{ path('seleccion_escala', { id: 2 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/43</h5>
                            <ul>
                                <li> 43 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 12 cm </li>
                                <li> Incluye vitrina de exposición </li>
                            </ul>
                            <a href=\"{{ path('seleccion_escala', { id: 3 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                        <li class=\"timeline-item bg-white rounded ml-3 p-4 shadow\">
                            <div class=\"timeline-arrow\"></div>
                            <h5>1/64 (Más pequeño)</h5>
                            <ul>
                                <li> 64 cm del vehículo real es 1 cm de la
                                    miniatura </li>
                                <li> Longitud aproximada de 7 cm </li>
                                <li> Menor tamaño pero con gran variedad de
                                    detalles de calidad </li>
                            </ul>
                            <a href=\"{{ path('seleccion_escala', { id: 4 }) }}\"><button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
                                Comprar
                            </button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {% include '/compartido/footer.html.twig' %}
{% endblock %}
", "home/home.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/home/home.html.twig");
    }
}
