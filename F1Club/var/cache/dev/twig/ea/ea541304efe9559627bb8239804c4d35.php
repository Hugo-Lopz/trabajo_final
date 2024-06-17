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

/* home/accessibility.html.twig */
class __TwigTemplate_5e36afeb10d1acec577ab4e164ca2e1f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/accessibility.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/accessibility.html.twig", 1);
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
        $this->loadTemplate("/compartido/nav.html.twig", "home/accessibility.html.twig", 8)->display(twig_array_merge($context, ["escalas" => (isset($context["escalas"]) || array_key_exists("escalas", $context) ? $context["escalas"] : (function () { throw new RuntimeError('Variable "escalas" does not exist.', 8, $this->source); })()), "equipos" => (isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new RuntimeError('Variable "equipos" does not exist.', 8, $this->source); })()), "fabricantes" => (isset($context["fabricantes"]) || array_key_exists("fabricantes", $context) ? $context["fabricantes"] : (function () { throw new RuntimeError('Variable "fabricantes" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "   <section class=\"d-flex align-items-center justify-content-left\">
        <h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Declaración accesibilidad</h1>
        <p>
            El Ministerio de Hacienda y Función Pública se ha comprometido a hacer accesibles sus sitios web de conformidad con el Real Decreto 1112/2018, de 7 de septiembreAbre nueva ventana, sobre accesibilidad de los sitios web y aplicaciones para dispositivos móviles del sector público (en adelante, Real Decreto 1112/2018, de 7 de septiembre).

            La presente declaración de accesibilidad se aplica al sitio web <a href=\"/Landing_page/index.html\">https://www.F1Club.com</a> (los subdominios de este sitio web tendrán sus propias declaraciones de accesibilidad). 
            </br>
            Este sitio web es parcialmente conforme con el Real Decreto 1112/2018, de 7 de septiembre, debido a la falta de conformidad de los aspectos que se indican a continuación.
        </p>
        <h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Contenido no accesible</h1>
        <p>Existen algunos enlaces rotos lo cuál puede afectar en la navegación. También, pueden existir colores muy intensos que pueden molestar a lso usuarios.</p>
    </section>
    
    ";
        // line 22
        $this->loadTemplate("/compartido/footer.html.twig", "home/accessibility.html.twig", 22)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/accessibility.html.twig";
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
        return array (  95 => 22,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t<link href=\"{{ asset('styles/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include '/compartido/nav.html.twig' with {'escalas': escalas, 'equipos': equipos, 'fabricantes': fabricantes} %}
   <section class=\"d-flex align-items-center justify-content-left\">
        <h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Declaración accesibilidad</h1>
        <p>
            El Ministerio de Hacienda y Función Pública se ha comprometido a hacer accesibles sus sitios web de conformidad con el Real Decreto 1112/2018, de 7 de septiembreAbre nueva ventana, sobre accesibilidad de los sitios web y aplicaciones para dispositivos móviles del sector público (en adelante, Real Decreto 1112/2018, de 7 de septiembre).

            La presente declaración de accesibilidad se aplica al sitio web <a href=\"/Landing_page/index.html\">https://www.F1Club.com</a> (los subdominios de este sitio web tendrán sus propias declaraciones de accesibilidad). 
            </br>
            Este sitio web es parcialmente conforme con el Real Decreto 1112/2018, de 7 de septiembre, debido a la falta de conformidad de los aspectos que se indican a continuación.
        </p>
        <h1 class=\"titulo d-flex align-items-center justify-content-center mt-5 ms-5\">Contenido no accesible</h1>
        <p>Existen algunos enlaces rotos lo cuál puede afectar en la navegación. También, pueden existir colores muy intensos que pueden molestar a lso usuarios.</p>
    </section>
    
    {% include '/compartido/footer.html.twig' %}
{% endblock %}", "home/accessibility.html.twig", "/home/daw/Escritorio/TFG/F1Club/templates/home/accessibility.html.twig");
    }
}
