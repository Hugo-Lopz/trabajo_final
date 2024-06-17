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

/* /compartido/footer.html.twig */
class __TwigTemplate_754d2f7bc8edbc1ff7aa84029c44246c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/compartido/footer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/compartido/footer.html.twig", 1);
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
        echo " <!--footer-->
    <section class=\"footer\">
        <div class=\"container-fluid\">
            <footer class=\"py-2\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <h6>Tienda</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item dropdown mb-2\"><a class=\"nav-link dropdown-toggle p-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Productos por escala</a>
                                <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["escala"]) {
            // line 21
            echo "\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_escala", ["id" => twig_get_attribute($this->env, $this->source, $context["escala"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escala"], "nombreescala", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t\t        </ul>
                            </li>
                            <li class=\"nav-item mb-2\"><a class=\"nav-link dropdown-toggle p-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Productos por equipo</a>
                                <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_equipo", ["id" => twig_get_attribute($this->env, $this->source, $context["equipo"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipo"], "nombreequipo", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                </ul>
                            </li>
                            <li class=\"nav-item mb-2\"><a class=\"nav-link dropdown-toggle p-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Productos por fabricante</a>
                            \t<ul class=\"dropdown-menu\">
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fabricante"]) {
            // line 39
            echo "\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccion_fabricante", ["id" => twig_get_attribute($this->env, $this->source, $context["fabricante"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fabricante"], "nombre", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fabricante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-3\">
                        <h6>Sobre la web</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">¿Quienes somos?</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Contacto</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_webmap");
        echo "\" class=\"nav-link p-0 \">Mapa web</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accessibility");
        echo "\" class=\"nav-link p-0 \">Documento de accesibilidad</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-6 suscripcion\">
                        <form>
                            <h6>Subscribete a nuestro newsletter</h6>
                            <p>Recibirás noticias mensuales</p>
                            <div class=\"d-flex w-100 gap-2\">
                                <label for=\"newsletter1\" class=\"visually-hidden\">Dirección email</label>
                                <input id=\"newsletter1\" type=\"text\" class=\"form-control\"
                                    placeholder=\"Dirección de correo\">
                                <button class=\"btn\" type=\"button\">Subscribirse</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"d-flex justify-content-between py-4 my-4 border-top\">
                    <p>&copy; 2024 Hugo López All rights reserved.</p>
                    <ul class=\"list-unstyled d-flex\">
                        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><i class=\"bi bi-twitter-x\"></i></a></li>
                        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><i class=\"bi bi-instagram\"></i></a></li>
                        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><i class=\"bi bi-tiktok\"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/compartido/footer.html.twig";
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
        return array (  184 => 54,  180 => 53,  168 => 43,  157 => 40,  154 => 39,  150 => 38,  144 => 34,  133 => 31,  130 => 30,  126 => 29,  120 => 25,  109 => 22,  106 => 21,  102 => 20,  90 => 10,  83 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block javascript %}{% endblock %}

{% block body %}
 <!--footer-->
    <section class=\"footer\">
        <div class=\"container-fluid\">
            <footer class=\"py-2\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <h6>Tienda</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item dropdown mb-2\"><a class=\"nav-link dropdown-toggle p-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Productos por escala</a>
                                <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t    {% for escala in escalas %}
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"{{ path('seleccion_escala', { id: escala.id }) }}\">{{ escala.nombreescala }}</a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t        </ul>
                            </li>
                            <li class=\"nav-item mb-2\"><a class=\"nav-link dropdown-toggle p-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Productos por equipo</a>
                                <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t    {% for equipo in equipos %}
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"{{ path('seleccion_equipo', { id: equipo.id }) }}\">{{ equipo.nombreequipo }}</a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t    {% endfor %}
                                </ul>
                            </li>
                            <li class=\"nav-item mb-2\"><a class=\"nav-link dropdown-toggle p-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Productos por fabricante</a>
                            \t<ul class=\"dropdown-menu\">
                                {% for fabricante in fabricantes %}
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"{{ path('seleccion_fabricante', { id: fabricante.id }) }}\">{{ fabricante.nombre }}</a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t    {% endfor %}
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-3\">
                        <h6>Sobre la web</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">¿Quienes somos?</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Contacto</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"{{ path('app_webmap')}}\" class=\"nav-link p-0 \">Mapa web</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"{{ path('app_accessibility')}}\" class=\"nav-link p-0 \">Documento de accesibilidad</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-6 suscripcion\">
                        <form>
                            <h6>Subscribete a nuestro newsletter</h6>
                            <p>Recibirás noticias mensuales</p>
                            <div class=\"d-flex w-100 gap-2\">
                                <label for=\"newsletter1\" class=\"visually-hidden\">Dirección email</label>
                                <input id=\"newsletter1\" type=\"text\" class=\"form-control\"
                                    placeholder=\"Dirección de correo\">
                                <button class=\"btn\" type=\"button\">Subscribirse</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"d-flex justify-content-between py-4 my-4 border-top\">
                    <p>&copy; 2024 Hugo López All rights reserved.</p>
                    <ul class=\"list-unstyled d-flex\">
                        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><i class=\"bi bi-twitter-x\"></i></a></li>
                        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><i class=\"bi bi-instagram\"></i></a></li>
                        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><i class=\"bi bi-tiktok\"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>
{% endblock %}", "/compartido/footer.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/compartido/footer.html.twig");
    }
}
