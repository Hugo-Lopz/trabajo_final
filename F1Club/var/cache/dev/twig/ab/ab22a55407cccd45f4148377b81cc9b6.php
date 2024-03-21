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

/* manager/graficaVentasFabricantes.html.twig */
class __TwigTemplate_6ec1381f14279097e8bec87c648a5c9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/graficaVentasFabricantes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manager/graficaVentasFabricantes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>Cantidad de ventas este mes</h1>

\t<style>
\t\t#chartdiv {
\t\t\twidth: 100%;
\t\t\theight: 500px;
\t\t}
\t</style>

\t<script src=\"https://cdn.amcharts.com/lib/5/index.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/xy.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/themes/Animated.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/locales/de_DE.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/geodata/germanyLow.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/fonts/notosans-sc.js\"></script>

  <script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new(\"chartdiv\");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: \"panX\",
  wheelY: \"zoomX\",
  pinchZoomX: true,
  paddingLeft:0,
  paddingRight:1
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set(\"cursor\", am5xy.XYCursor.new(root, {}));
cursor.lineY.set(\"visible\", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { 
  minGridDistance: 30, 
  minorGridEnabled: true
});

xRenderer.labels.template.setAll({
  rotation: -90,
  centerY: am5.p50,
  centerX: am5.p100,
  paddingRight: 15
});

xRenderer.grid.template.setAll({
  location: 1
})

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  maxDeviation: 0.3,
  categoryField: \"fabricante\",
  renderer: xRenderer,
  tooltip: am5.Tooltip.new(root, {})
}));

var yRenderer = am5xy.AxisRendererY.new(root, {
  strokeOpacity: 0.1
})

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.3,
  renderer: yRenderer
}));

// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  name: \"Series 1\",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: \"total_vendido\",
  sequencedInterpolation: true,
  categoryXField: \"fabricante\",
  tooltip: am5.Tooltip.new(root, {
    labelText: \"{valueY}\"
  })
}));

series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
series.columns.template.adapters.add(\"fill\", function (fill, target) {
  return chart.get(\"colors\").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add(\"stroke\", function (stroke, target) {
  return chart.get(\"colors\").getIndex(series.columns.indexOf(target));
});


// Set data
var data = ";
        // line 110
        echo (isset($context["ventasFabricantesMes"]) || array_key_exists("ventasFabricantesMes", $context) ? $context["ventasFabricantesMes"] : (function () { throw new RuntimeError('Variable "ventasFabricantesMes" does not exist.', 110, $this->source); })());
        echo ";

xAxis.data.setAll(data);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id=\"chartdiv\"></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "manager/graficaVentasFabricantes.html.twig";
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
        return array (  167 => 110,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h1>Cantidad de ventas este mes</h1>

\t<style>
\t\t#chartdiv {
\t\t\twidth: 100%;
\t\t\theight: 500px;
\t\t}
\t</style>

\t<script src=\"https://cdn.amcharts.com/lib/5/index.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/xy.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/themes/Animated.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/locales/de_DE.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/geodata/germanyLow.js\"></script>
\t<script src=\"https://cdn.amcharts.com/lib/5/fonts/notosans-sc.js\"></script>

  <script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new(\"chartdiv\");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: \"panX\",
  wheelY: \"zoomX\",
  pinchZoomX: true,
  paddingLeft:0,
  paddingRight:1
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set(\"cursor\", am5xy.XYCursor.new(root, {}));
cursor.lineY.set(\"visible\", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { 
  minGridDistance: 30, 
  minorGridEnabled: true
});

xRenderer.labels.template.setAll({
  rotation: -90,
  centerY: am5.p50,
  centerX: am5.p100,
  paddingRight: 15
});

xRenderer.grid.template.setAll({
  location: 1
})

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  maxDeviation: 0.3,
  categoryField: \"fabricante\",
  renderer: xRenderer,
  tooltip: am5.Tooltip.new(root, {})
}));

var yRenderer = am5xy.AxisRendererY.new(root, {
  strokeOpacity: 0.1
})

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.3,
  renderer: yRenderer
}));

// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  name: \"Series 1\",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: \"total_vendido\",
  sequencedInterpolation: true,
  categoryXField: \"fabricante\",
  tooltip: am5.Tooltip.new(root, {
    labelText: \"{valueY}\"
  })
}));

series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
series.columns.template.adapters.add(\"fill\", function (fill, target) {
  return chart.get(\"colors\").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add(\"stroke\", function (stroke, target) {
  return chart.get(\"colors\").getIndex(series.columns.indexOf(target));
});


// Set data
var data = {{ ventasFabricantesMes|raw }};

xAxis.data.setAll(data);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id=\"chartdiv\"></div>

{% endblock %}
", "manager/graficaVentasFabricantes.html.twig", "/home/daw/Escritorio/Proyecto_tienda/proyectoServidor/templates/manager/graficaVentasFabricantes.html.twig");
    }
}
