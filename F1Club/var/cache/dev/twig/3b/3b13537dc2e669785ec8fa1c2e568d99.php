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

/* catalogo/catalogo.html.twig */
class __TwigTemplate_0d4e9ed8265ddbfc3bf8e4529f58e409 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogo/catalogo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogo/catalogo.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/catalogueStyle.css"), "html", null, true);
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
        $this->loadTemplate("/compartido/nav.html.twig", "catalogo/catalogo.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "\t\t<h1 class=\"titulo\">Catálogo productos</h1>
\t    <section id=\"catalogo\" class=\"catalogo d-flex flex-column\">
        <div class=\"container-fluid\">
            <div class=\"row\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productosConImagen"]) || array_key_exists("productosConImagen", $context) ? $context["productosConImagen"] : (function () { throw new RuntimeError('Variable "productosConImagen" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["productoConImagen"]) {
            // line 14
            echo "                <div class=\"col-md-12 col-lg-4 d-flex align-items-center justify-content-center\">
                    <div class=\"producto\">
\t\t\t\t\t\t";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "imagen", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "imagen", [], "any", false, false, false, 17), "urlimagen", [], "any", false, false, false, 17))), "html", null, true);
                echo "\" alt=\"Imagen del producto\">
\t\t\t\t\t\t";
            }
            // line 19
            echo "                        <div class=\"datos\">
                            <h5> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "producto", [], "any", false, false, false, 20), "nombreproducto", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
                            <h6> Precio: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "producto", [], "any", false, false, false, 21), "precio", [], "any", false, false, false, 21), "html", null, true);
            echo " </h6>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_producto", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productoConImagen"], "producto", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\"><button class=\"btn\" type=\"button\" aria-expanded=\"false\">
                                Ver producto
                            </button></a>
                        </div>
                    </div>
                </div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productoConImagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>
    \t</section>

\t";
        // line 33
        $this->loadTemplate("/compartido/footer.html.twig", "catalogo/catalogo.html.twig", 33)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalogo/catalogo.html.twig";
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
        return array (  132 => 33,  126 => 29,  113 => 22,  109 => 21,  105 => 20,  102 => 19,  96 => 17,  94 => 16,  90 => 14,  86 => 13,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/catalogueStyle.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
\t\t<h1 class=\"titulo\">Catálogo productos</h1>
\t    <section id=\"catalogo\" class=\"catalogo d-flex flex-column\">
        <div class=\"container-fluid\">
            <div class=\"row\">
\t\t\t\t{% for productoConImagen in productosConImagen %}
                <div class=\"col-md-12 col-lg-4 d-flex align-items-center justify-content-center\">
                    <div class=\"producto\">
\t\t\t\t\t\t{% if productoConImagen.imagen %}
\t\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ productoConImagen.imagen.urlimagen) }}\" alt=\"Imagen del producto\">
\t\t\t\t\t\t{% endif %}
                        <div class=\"datos\">
                            <h5> {{ productoConImagen.producto.nombreproducto }}</h5>
                            <h6> Precio: {{ productoConImagen.producto.precio }} </h6>
                            <a href=\"{{ path('ver_producto', { id: productoConImagen.producto.id }) }}\"><button class=\"btn\" type=\"button\" aria-expanded=\"false\">
                                Ver producto
                            </button></a>
                        </div>
                    </div>
                </div>
\t\t\t\t{% endfor %}
            </div>
        </div>
    \t</section>

\t{% include '/compartido/footer.html.twig' %}
{% endblock %}
", "catalogo/catalogo.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/catalogo/catalogo.html.twig");
    }
}
