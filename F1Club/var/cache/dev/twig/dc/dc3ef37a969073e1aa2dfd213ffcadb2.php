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

/* security/login.html.twig */
class __TwigTemplate_3b8847f2e6b9a6fc417db9ca58d894c0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/loginStyle.css"), "html", null, true);
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

        echo "Iniciar sesión";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->loadTemplate("/compartido/nav.html.twig", "security/login.html.twig", 10)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 10, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 10, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 10, $this->source); })())]));
        // line 11
        echo "    <section class=\"login bg-white py-3 py-md-5 py-xl-8\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center justify-content-center\">
                <div class=\"col-12 col-md-6 col-xl-5\">
                    <div class=\"card border-1 rounded-4\">
                        <div class=\"card-body p-3 p-md-4 p-xl-5\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <h2 class=\"h3\">Iniciar sesión</h2>
                                        <h3 class=\"fs-6 fw-normal text-secondary m-0\"> Introduce
                                            tus datos para logearte
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <form method=\"post\">
                                ";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messageKey", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messageData", [], "any", false, false, false, 29), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 31
        echo "                                <div class=\"row gy-3 overflow-hidden\">
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"email\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                            <label for=\"inputEmail\" class=\"form-label\">Email</label>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                            <label for=\"inputPassword\" class=\"form-label\">Contraseña</label>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                    <div class=\"botonSubmit col-12\">
                                        <div class=\"d-grid\">
                                            <button class=\"btn btn-lg\" type=\"submit\">Iniciar sesión</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div
                                        class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4\">
                                        <p class=\"m-0 text-secondary text-center\">No tienes cuenta? <a
                                                href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"
                                                class=\"link-primary text-decoration-none\">Registarse</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p class=\"mt-4 mb-4\">O iniciar sesión con</p>
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
        // line 89
        $this->loadTemplate("/compartido/footer.html.twig", "security/login.html.twig", 89)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  190 => 89,  155 => 57,  139 => 44,  126 => 34,  121 => 31,  115 => 29,  113 => 28,  94 => 11,  91 => 10,  84 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/loginStyle.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block title %}Iniciar sesión{% endblock %}

{% block body %}
    {% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
    <section class=\"login bg-white py-3 py-md-5 py-xl-8\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center justify-content-center\">
                <div class=\"col-12 col-md-6 col-xl-5\">
                    <div class=\"card border-1 rounded-4\">
                        <div class=\"card-body p-3 p-md-4 p-xl-5\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <h2 class=\"h3\">Iniciar sesión</h2>
                                        <h3 class=\"fs-6 fw-normal text-secondary m-0\"> Introduce
                                            tus datos para logearte
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <form method=\"post\">
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                <div class=\"row gy-3 overflow-hidden\">
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                            <label for=\"inputEmail\" class=\"form-label\">Email</label>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                            <label for=\"inputPassword\" class=\"form-label\">Contraseña</label>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                    <div class=\"botonSubmit col-12\">
                                        <div class=\"d-grid\">
                                            <button class=\"btn btn-lg\" type=\"submit\">Iniciar sesión</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div
                                        class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4\">
                                        <p class=\"m-0 text-secondary text-center\">No tienes cuenta? <a
                                                href=\"{{ path('app_register') }}\"
                                                class=\"link-primary text-decoration-none\">Registarse</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p class=\"mt-4 mb-4\">O iniciar sesión con</p>
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
", "security/login.html.twig", "/home/daw/Escritorio/Proyecto_tienda/proyectoServidor/templates/security/login.html.twig");
    }
}
