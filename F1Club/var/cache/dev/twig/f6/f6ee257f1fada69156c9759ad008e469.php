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

/* home/webmap.html.twig */
class __TwigTemplate_8175307d3dc07292c120eab9a104a25d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/webmap.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/webmap.html.twig", 1);
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
        $this->loadTemplate("/compartido/nav.html.twig", "home/webmap.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "<section class=\"mapa d-flex justify-content-center align-items-center\">
         <h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Mapa web</h1>
        <div>
            <ul>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Acceso a la tienda</h3>
                <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Tienda</a></li>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Lista de deseos</h3>
                <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceder_lista_deseos");
        echo "\">Lista</a></li>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Carrito de compra</h3>
                <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mostrar_carrito");
        echo "\">Carrito</a></li>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Categoría fabricante</h3>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fabricante"]) {
            // line 21
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_fabricante", ["id" => twig_get_attribute($this->env, $this->source, $context["fabricante"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fabricante"], "nombre", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fabricante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Categoría escala</h3>
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["escala"]) {
            // line 25
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_escala", ["id" => twig_get_attribute($this->env, $this->source, $context["escala"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escala"], "nombreescala", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Categoría equipo</h3>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 29
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => twig_get_attribute($this->env, $this->source, $context["equipo"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipo"], "nombreequipo", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Sobre nosotros</h3>
                <li><a href=\"#\">¿Quienes somos?</a></li>
                <li><a href=\"#\">Contacto</a></li>
                <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_webmap");
        echo "\">Mapa web</a></li>
                <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accessibility");
        echo "\">Documento accesibilidad</a></li>
            </ul>
        </div>
    </section>
    
    ";
        // line 40
        $this->loadTemplate("/compartido/footer.html.twig", "home/webmap.html.twig", 40)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/webmap.html.twig";
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
        return array (  170 => 40,  162 => 35,  158 => 34,  153 => 31,  142 => 29,  138 => 28,  135 => 27,  124 => 25,  120 => 24,  117 => 23,  106 => 21,  102 => 20,  97 => 18,  92 => 16,  87 => 14,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
<section class=\"mapa d-flex justify-content-center align-items-center\">
         <h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Mapa web</h1>
        <div>
            <ul>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Acceso a la tienda</h3>
                <li><a href=\"{{ path('app_home')}}\">Tienda</a></li>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Lista de deseos</h3>
                <li><a href=\"{{ path('acceder_lista_deseos')}}\">Lista</a></li>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Carrito de compra</h3>
                <li><a href=\"{{ path('mostrar_carrito')}}\">Carrito</a></li>
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Categoría fabricante</h3>
                {% for fabricante in fabricantes %}
\t\t\t\t\t<li><a href=\"{{ path('seleccion_fabricante', { id: fabricante.id }) }}\">{{ fabricante.nombre }}</a></li>
\t\t\t\t{% endfor %}
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Categoría escala</h3>
\t\t\t\t{% for escala in escalas %}
\t\t\t\t\t<li><a href=\"{{ path('seleccion_escala', { id: escala.id }) }}\">{{ escala.nombreescala }}</a></li>
\t\t\t\t{% endfor %}
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Categoría equipo</h3>
                {% for equipo in equipos %}
\t\t\t\t\t<li><a href=\"{{ path('seleccion_equipo', { id: equipo.id }) }}\">{{ equipo.nombreequipo }}</a></li>
\t\t\t\t{% endfor %}
                <h3 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Sobre nosotros</h3>
                <li><a href=\"#\">¿Quienes somos?</a></li>
                <li><a href=\"#\">Contacto</a></li>
                <li><a href=\"{{ path('app_webmap')}}\">Mapa web</a></li>
                <li><a href=\"{{ path('app_accessibility')}}\">Documento accesibilidad</a></li>
            </ul>
        </div>
    </section>
    
    {% include '/compartido/footer.html.twig' %}
{% endblock %}", "home/webmap.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/home/webmap.html.twig");
    }
}
