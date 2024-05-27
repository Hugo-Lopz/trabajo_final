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

/* registration/register.html.twig */
class __TwigTemplate_1888d51dca48583d0673f0ea1a173b42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/registerStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Registrarse";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        ";
        $this->loadTemplate("/compartido/nav.html.twig", "registration/register.html.twig", 10)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 10, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 10, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 10, $this->source); })())]));
        // line 11
        echo "        <section class=\"registro bg-white py-3 py-md-5 py-xl-8\">
        <div class=\"container\">
            <div class=\"row gy-4 align-items-center\">
                <div class=\"apartadoDescripcion col-12 col-md-6 col-xl-7\">
                    <div class=\"descripcion d-flex justify-content-center text-bg-white\">
                        <div class=\"col-12 col-xl-9\">
                            <h1>F1Club</h1>
                            <hr class=\"border-dark-subtle mb-4\">
                            <h2 class=\"h1 mb-4\">El foro y tienda de más calidad sobre F1</h2>
                            <p class=\"lead mb-5\">Vendemos maquetas de alta calidad y tenemos el foro con mejores
                                noticias y conversaciones sobre el deporte.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-xl-5\">
                    <div class=\"card border-1 rounded-4\">
                        <div class=\"card-body p-3 p-md-4 p-xl-5\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <h2 class=\"h3\">Registro</h2>
                                        <h3 class=\"fs-6 fw-normal text-secondary m-0\">Introduce tus datos para
                                            registrarte
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), 'errors');
        echo "

                                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row gy-3 overflow-hidden\">
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "nombre", [], "any", false, false, false, 45), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "apellidos", [], "any", false, false, false, 50), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "plainPassword", [], "any", false, false, false, 60), 'row', ["label" => "Password"]);
        // line 62
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "calle", [], "any", false, false, false, 67), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "ciudad", [], "any", false, false, false, 72), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "codigoPostal", [], "any", false, false, false, 77), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-check\">
                                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "agreeTerms", [], "any", false, false, false, 82), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"botonSubmit col-12\">
                                        <div class=\"d-grid\">
                                            <button class=\"btn btn-lg\" type=\"submit\">Registrarse</button>
                                        </div>
                                    </div>
                                </div>
                            ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div
                                        class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4\">
                                        <p class=\"m-0 text-secondary text-center\">Ya tienes cuenta? <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"
                                                class=\"link-primary text-decoration-none\">Iniciar sesión</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p class=\"mt-4 mb-4\">O registrarse con</p>
                                    <div class=\"d-flex gap-2 gap-sm-3 justify-content-centerX\">
                                        <a href=\"#!\" class=\"btn btn-outline-danger bsb-btn-circle bsb-btn-circle-2xl\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
                                                fill=\"currentColor\" class=\"bi bi-google\" viewBox=\"0 0 16 16\">
                                                <path
                                                    d=\"M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z\" />
                                            </svg>
                                        </a>
                                        <a href=\"#!\" class=\"btn btn-outline-primary bsb-btn-circle bsb-btn-circle-2xl\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
                                                fill=\"currentColor\" class=\"bi bi-facebook\" viewBox=\"0 0 16 16\">
                                                <path
                                                    d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 128
        $this->loadTemplate("/compartido/footer.html.twig", "registration/register.html.twig", 128)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  248 => 128,  213 => 96,  205 => 91,  193 => 82,  185 => 77,  177 => 72,  169 => 67,  162 => 62,  160 => 60,  152 => 55,  144 => 50,  136 => 45,  129 => 41,  124 => 39,  94 => 11,  91 => 10,  84 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/registerStyle.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block title %}Registrarse{% endblock %}

{% block body %}
        {% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
        <section class=\"registro bg-white py-3 py-md-5 py-xl-8\">
        <div class=\"container\">
            <div class=\"row gy-4 align-items-center\">
                <div class=\"apartadoDescripcion col-12 col-md-6 col-xl-7\">
                    <div class=\"descripcion d-flex justify-content-center text-bg-white\">
                        <div class=\"col-12 col-xl-9\">
                            <h1>F1Club</h1>
                            <hr class=\"border-dark-subtle mb-4\">
                            <h2 class=\"h1 mb-4\">El foro y tienda de más calidad sobre F1</h2>
                            <p class=\"lead mb-5\">Vendemos maquetas de alta calidad y tenemos el foro con mejores
                                noticias y conversaciones sobre el deporte.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-xl-5\">
                    <div class=\"card border-1 rounded-4\">
                        <div class=\"card-body p-3 p-md-4 p-xl-5\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <h2 class=\"h3\">Registro</h2>
                                        <h3 class=\"fs-6 fw-normal text-secondary m-0\">Introduce tus datos para
                                            registrarte
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            
                                {{ form_errors(registrationForm) }}

                                {{ form_start(registrationForm) }}
                                <div class=\"row gy-3 overflow-hidden\">
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.nombre) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.apellidos) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.email) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.plainPassword, {
                                                label: 'Password'
                                            }) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.calle) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.ciudad) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.codigoPostal) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-check\">
                                            {{ form_row(registrationForm.agreeTerms) }}
                                        </div>
                                    </div>
                                    <div class=\"botonSubmit col-12\">
                                        <div class=\"d-grid\">
                                            <button class=\"btn btn-lg\" type=\"submit\">Registrarse</button>
                                        </div>
                                    </div>
                                </div>
                            {{ form_end(registrationForm) }}
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div
                                        class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4\">
                                        <p class=\"m-0 text-secondary text-center\">Ya tienes cuenta? <a href=\"{{ path('app_login') }}\"
                                                class=\"link-primary text-decoration-none\">Iniciar sesión</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p class=\"mt-4 mb-4\">O registrarse con</p>
                                    <div class=\"d-flex gap-2 gap-sm-3 justify-content-centerX\">
                                        <a href=\"#!\" class=\"btn btn-outline-danger bsb-btn-circle bsb-btn-circle-2xl\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
                                                fill=\"currentColor\" class=\"bi bi-google\" viewBox=\"0 0 16 16\">
                                                <path
                                                    d=\"M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z\" />
                                            </svg>
                                        </a>
                                        <a href=\"#!\" class=\"btn btn-outline-primary bsb-btn-circle bsb-btn-circle-2xl\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
                                                fill=\"currentColor\" class=\"bi bi-facebook\" viewBox=\"0 0 16 16\">
                                                <path
                                                    d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% include '/compartido/footer.html.twig' %}
{% endblock %}
", "registration/register.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/registration/register.html.twig");
    }
}
