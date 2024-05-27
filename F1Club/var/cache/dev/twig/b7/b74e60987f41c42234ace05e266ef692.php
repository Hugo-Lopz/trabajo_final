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

/* compartido/footer.html.twig */
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compartido/footer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compartido/footer.html.twig", 1);
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
                    <div class=\"col-2\">
                        <h6>Tienda</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Productos por escala</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Productos por década</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Productos por equipo</a></li>
                        </ul>
                    </div>

                    <div class=\"col-2\">
                        <h6>Foro</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Noticias</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Rumores</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Carreras</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Coleccionismo</a></li>
                        </ul>
                    </div>

                    <div class=\"col-2\">
                        <h6>Sobre la web</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">¿Quienes somos?</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Contacto</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"/WebMap_page/webMap.html\" class=\"nav-link p-0 \">Mapa web</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"/accessibilty/accessibility.html\" class=\"nav-link p-0 \">Documento de accesibilidad</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-4 offset-1\">
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
        return "compartido/footer.html.twig";
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
        return array (  90 => 10,  83 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
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
                    <div class=\"col-2\">
                        <h6>Tienda</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Productos por escala</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Productos por década</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Productos por equipo</a></li>
                        </ul>
                    </div>

                    <div class=\"col-2\">
                        <h6>Foro</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Noticias</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Rumores</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Carreras</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Coleccionismo</a></li>
                        </ul>
                    </div>

                    <div class=\"col-2\">
                        <h6>Sobre la web</h6>
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">¿Quienes somos?</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 \">Contacto</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"/WebMap_page/webMap.html\" class=\"nav-link p-0 \">Mapa web</a></li>
                            <li class=\"nav-item mb-2\"><a href=\"/accessibilty/accessibility.html\" class=\"nav-link p-0 \">Documento de accesibilidad</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-4 offset-1\">
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
{% endblock %}", "compartido/footer.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/compartido/footer.html.twig");
    }
}
