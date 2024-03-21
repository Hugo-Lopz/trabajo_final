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

/* /compartido/nav.html.twig */
class __TwigTemplate_47de9f1ae6fc40a5cb23b92d56ae7c34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/compartido/nav.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/compartido/nav.html.twig", 1);
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
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<!--Barra de navegación 1-->
\t<nav class=\"menu1 navbar navbar-expand-md bg-body-tertiary\" aria-label=\"\">
\t\t<div class=\"container-fluid\">
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t<div class=\"vr\"></div>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<button class=\"botonCuenta btn btn-dark dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "userIdentifier", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t\t\tCuenta
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar sesión</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_vista_pedidos");
            echo "\">Ver pedidos realizados</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrarse</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<div class=\"vr\"></div>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceder_lista_deseos");
        echo "\" class=\"deseos\">
\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mostrar_carrito");
        echo "\" class=\"carrito\">
\t\t\t\t\t\t\t<i class=\"bi bi-bag\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<!--Barra de navegación 2-->
\t<nav class=\"menu2 navbar navbar-expand-md\" aria-label=\"\">
\t\t<div class=\"container-fluid\">
\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/nav/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo de la web\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav d-flex justify-content-center align-items-center\">
\t\t\t\t\t<li class=\"oculto nav-item\">
\t\t\t\t\t\t<button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tIniciar sesión
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoría fabricante
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fabricante"]) {
            // line 91
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_fabricante", ["id" => twig_get_attribute($this->env, $this->source, $context["fabricante"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fabricante"], "nombre", [], "any", false, false, false, 92), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fabricante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoría escala
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["escala"]) {
            // line 103
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_escala", ["id" => twig_get_attribute($this->env, $this->source, $context["escala"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escala"], "nombreescala", [], "any", false, false, false, 104), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoría equipo
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 115
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => twig_get_attribute($this->env, $this->source, $context["equipo"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipo"], "nombreequipo", [], "any", false, false, false, 116), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<form class=\"d-flex\" action=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busqueda_producto");
        echo "\" method=\"post\">
\t\t\t\t\t<input class=\"form-control me-2\" name=\"busqueda\" type=\"search\" placeholder=\"Buscar producto\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn\" type=\"submit\"><i class=\"lupa bi bi-search\"></i></button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/compartido/nav.html.twig";
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
        return array (  288 => 122,  283 => 119,  272 => 116,  269 => 115,  265 => 114,  256 => 107,  245 => 104,  242 => 103,  238 => 102,  229 => 95,  218 => 92,  215 => 91,  211 => 90,  186 => 70,  171 => 58,  163 => 53,  156 => 48,  150 => 45,  144 => 42,  141 => 41,  135 => 38,  129 => 35,  126 => 34,  124 => 33,  118 => 29,  114 => 27,  108 => 25,  106 => 24,  90 => 10,  83 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block javascript %}{% endblock %}

{% block body %}
\t<!--Barra de navegación 1-->
\t<nav class=\"menu1 navbar navbar-expand-md bg-body-tertiary\" aria-label=\"\">
\t\t<div class=\"container-fluid\">
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t<div class=\"vr\"></div>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<button class=\"botonCuenta btn btn-dark dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.userIdentifier }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\tCuenta
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Cerrar sesión</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('usuario_vista_pedidos')}}\">Ver pedidos realizados</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_login')}}\">Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_register')}}\">Registrarse</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<div class=\"vr\"></div>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('acceder_lista_deseos')}}\" class=\"deseos\">
\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('mostrar_carrito')}}\" class=\"carrito\">
\t\t\t\t\t\t\t<i class=\"bi bi-bag\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<!--Barra de navegación 2-->
\t<nav class=\"menu2 navbar navbar-expand-md\" aria-label=\"\">
\t\t<div class=\"container-fluid\">
\t\t\t<a href=\"{{ path('app_home')}}\"><img class=\"logo\" src=\"{{ asset('images/nav/Logo.png') }}\" alt=\"Logo de la web\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav d-flex justify-content-center align-items-center\">
\t\t\t\t\t<li class=\"oculto nav-item\">
\t\t\t\t\t\t<button class=\"btn btn-dark\" type=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tIniciar sesión
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoría fabricante
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t{% for fabricante in fabricantes %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('seleccion_fabricante', { id: fabricante.id }) }}\">{{ fabricante.nombre }}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoría escala
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t{% for escala in escalas %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('seleccion_escala', { id: escala.id }) }}\">{{ escala.nombreescala }}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoría equipo
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t{% for equipo in equipos %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('seleccion_equipo', { id: equipo.id }) }}\">{{ equipo.nombreequipo }}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<form class=\"d-flex\" action=\"{{ path('busqueda_producto')}}\" method=\"post\">
\t\t\t\t\t<input class=\"form-control me-2\" name=\"busqueda\" type=\"search\" placeholder=\"Buscar producto\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn\" type=\"submit\"><i class=\"lupa bi bi-search\"></i></button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</nav>
{% endblock %}
", "/compartido/nav.html.twig", "/home/daw/Escritorio/Proyecto_tienda/proyectoServidor/templates/compartido/nav.html.twig");
    }
}
