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

/* lista_deseos/lista_deseos.html.twig */
class __TwigTemplate_8cf60a2992a074edbfca98671ee0f0d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lista_deseos/lista_deseos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lista_deseos/lista_deseos.html.twig", 1);
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
        $this->loadTemplate("/compartido/nav.html.twig", "lista_deseos/lista_deseos.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "\t\t<h1 class=\"titulo d-flex justify-content-center mt-5\">Lista de deseos</h1>
\t";
        // line 10
        if (twig_test_empty((isset($context["productosConImagen"]) || array_key_exists("productosConImagen", $context) ? $context["productosConImagen"] : (function () { throw new RuntimeError('Variable "productosConImagen" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "\t\t<i class=\"listaVacia bi bi-emoji-dizzy d-flex justify-content-center my-5\"></i>
\t\t<p class=\"d-flex justify-content-center mb-5\"> Todavía no se ha añadido ningún producto a la lista de deseos. </p>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productosConImagen"]) || array_key_exists("productosConImagen", $context) ? $context["productosConImagen"] : (function () { throw new RuntimeError('Variable "productosConImagen" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["productoConImagen"]) {
            // line 16
            echo "\t\t<div class=\"listaDeseos d-flex justify-content-center\">
\t\t\t<li>
\t\t\t\t";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "imagen", [], "any", false, false, false, 18)) {
                // line 19
                echo "\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "imagen", [], "any", false, false, false, 20), "urlimagen", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" alt=\"Imagen del producto\">
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<p>
\t\t\t\t\t\tNombre: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "producto", [], "any", false, false, false, 25), "nombreproducto", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_producto", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "producto", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"btn btn-danger me-1\">Ver producto</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar_producto_de_lista_deseos", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "producto", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"btn btn-danger\">Quitar de la lista</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productoConImagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

\t";
        // line 41
        $this->loadTemplate("/compartido/footer.html.twig", "lista_deseos/lista_deseos.html.twig", 41)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "lista_deseos/lista_deseos.html.twig";
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
        return array (  146 => 41,  142 => 39,  129 => 32,  123 => 29,  116 => 25,  112 => 23,  106 => 20,  103 => 19,  101 => 18,  97 => 16,  93 => 15,  90 => 14,  85 => 11,  83 => 10,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
\t\t<h1 class=\"titulo d-flex justify-content-center mt-5\">Lista de deseos</h1>
\t{% if productosConImagen is empty %}
\t\t<i class=\"listaVacia bi bi-emoji-dizzy d-flex justify-content-center my-5\"></i>
\t\t<p class=\"d-flex justify-content-center mb-5\"> Todavía no se ha añadido ningún producto a la lista de deseos. </p>
\t{% endif %}

\t{% for productoConImagen in productosConImagen %}
\t\t<div class=\"listaDeseos d-flex justify-content-center\">
\t\t\t<li>
\t\t\t\t{% if productoConImagen.imagen %}
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<img src=\"{{ asset('images/' ~ productoConImagen.imagen.urlimagen) }}\" alt=\"Imagen del producto\">
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<p>
\t\t\t\t\t\tNombre: {{ productoConImagen.producto.nombreproducto }}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"{{ path('ver_producto', { id: productoConImagen.producto.id }) }}\">
\t\t\t\t\t\t<button class=\"btn btn-danger me-1\">Ver producto</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('eliminar_producto_de_lista_deseos', { idProducto: productoConImagen.producto.id }) }}\">
\t\t\t\t\t\t<button class=\"btn btn-danger\">Quitar de la lista</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</div>
\t{% endfor %}


\t{% include '/compartido/footer.html.twig' %}
{% endblock %}
", "lista_deseos/lista_deseos.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/lista_deseos/lista_deseos.html.twig");
    }
}
