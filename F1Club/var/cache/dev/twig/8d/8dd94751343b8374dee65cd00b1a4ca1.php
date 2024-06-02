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

/* login/login.html.twig */
class __TwigTemplate_ae5c9740671d6c80dfe61b386300481c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
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
        $this->loadTemplate("/compartido/nav.html.twig", "login/login.html.twig", 10)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 10, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 10, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 10, $this->source); })())]));
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 68
        $this->loadTemplate("/compartido/footer.html.twig", "login/login.html.twig", 68)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/login.html.twig";
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
        return array (  169 => 68,  155 => 57,  139 => 44,  126 => 34,  121 => 31,  115 => 29,  113 => 28,  94 => 11,  91 => 10,  84 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% include '/compartido/footer.html.twig' %}
{% endblock %}
", "login/login.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/login/login.html.twig");
    }
}
