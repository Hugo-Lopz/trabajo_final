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
                            <h2 class=\"h1 mb-4\">La tienda de más calidad sobre F1</h2>
                            <p class=\"lead mb-5\">Vendemos las maquetas siempre has pensado que nunca ibas a encontrar.</p>
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
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), 'errors');
        echo "

                                ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row gy-3 overflow-hidden\">
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "nombre", [], "any", false, false, false, 44), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "apellidos", [], "any", false, false, false, 49), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), 'row', ["label" => "Password"]);
        // line 61
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "calle", [], "any", false, false, false, 66), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "ciudad", [], "any", false, false, false, 71), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "codigoPostal", [], "any", false, false, false, 76), 'row');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "agreeTerms", [], "any", false, false, false, 80), 'row');
        echo "    
                                    </div>
                                    <div class=\"botonSubmit col-12\">
                                        <div class=\"d-grid\">
                                            <button class=\"btn btn-lg\" type=\"submit\">Registrarse</button>
                                        </div>
                                    </div>
                                </div>
                            ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), 'form_end');
        echo "
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4\">
                                        <p class=\"m-0 text-secondary text-center\">Ya tienes cuenta? <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"
                                                class=\"link-primary text-decoration-none\">Iniciar sesión</a></p>
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
        // line 103
        $this->loadTemplate("/compartido/footer.html.twig", "registration/register.html.twig", 103)->display($context);
        
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
        return array (  223 => 103,  209 => 92,  202 => 88,  191 => 80,  184 => 76,  176 => 71,  168 => 66,  161 => 61,  159 => 59,  151 => 54,  143 => 49,  135 => 44,  128 => 40,  123 => 38,  94 => 11,  91 => 10,  84 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
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
                            <h2 class=\"h1 mb-4\">La tienda de más calidad sobre F1</h2>
                            <p class=\"lead mb-5\">Vendemos las maquetas siempre has pensado que nunca ibas a encontrar.</p>
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
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.nombre) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.apellidos) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.email) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.plainPassword, {
                                                label: 'Password'
                                            }) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.calle) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.ciudad) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12 inputForm \">
                                        <div class=\"form-floating mb-3\">
                                            {{ form_row(registrationForm.codigoPostal) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        {{ form_row(registrationForm.agreeTerms) }}    
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
                                    <div class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4\">
                                        <p class=\"m-0 text-secondary text-center\">Ya tienes cuenta? <a href=\"{{ path('app_login') }}\"
                                                class=\"link-primary text-decoration-none\">Iniciar sesión</a></p>
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
