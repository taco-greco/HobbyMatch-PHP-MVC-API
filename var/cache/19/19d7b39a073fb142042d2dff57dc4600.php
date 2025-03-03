<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* hobby/map.html.twig */
class __TwigTemplate_a09f376f1164031c5ec27800bd30cf4f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"/>
    <style>
        #mapid {
            height: 480px;
        }
        #cover {
            display: none;
            text-align: center;
            padding-top: 200px;
            background: #CCC;
            opacity: 0.5;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10000;
        }
        #cover.active {
            display: block;
        }
    </style>
</head>
<body>
    <div id=\"cover\">Generating PDF...</div>
    <div id=\"mapid\"></div>
    <script>L_PREFER_CANVAS = true</script>
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
    <script src=\"https://unpkg.com/leaflet-image@0.0.4/leaflet-image.js\"></script>
    <script>
        var map = L.map('mapid').setView([";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 34), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 34), "html", null, true);
        yield "], 16);
        var cover = document.getElementById('cover');

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);

        var marker = L.marker([";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 42), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 42), "html", null, true);
        yield "]).addTo(map);

        function captureMap() {
            cover.className = 'active';
            leafletImage(map, function(err, canvas) {
                var imgData = canvas.toDataURL(\"image/png\");
                window.parent.postMessage(imgData, '*');
                cover.className = '';
            });
        }

        window.onload = captureMap;
    </script>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "hobby/map.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  90 => 42,  77 => 34,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"/>
    <style>
        #mapid {
            height: 480px;
        }
        #cover {
            display: none;
            text-align: center;
            padding-top: 200px;
            background: #CCC;
            opacity: 0.5;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10000;
        }
        #cover.active {
            display: block;
        }
    </style>
</head>
<body>
    <div id=\"cover\">Generating PDF...</div>
    <div id=\"mapid\"></div>
    <script>L_PREFER_CANVAS = true</script>
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
    <script src=\"https://unpkg.com/leaflet-image@0.0.4/leaflet-image.js\"></script>
    <script>
        var map = L.map('mapid').setView([{{ hobby.Latitude }}, {{ hobby.Longitude }}], 16);
        var cover = document.getElementById('cover');

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);

        var marker = L.marker([{{ hobby.Latitude }}, {{ hobby.Longitude }}]).addTo(map);

        function captureMap() {
            cover.className = 'active';
            leafletImage(map, function(err, canvas) {
                var imgData = canvas.toDataURL(\"image/png\");
                window.parent.postMessage(imgData, '*');
                cover.className = '';
            });
        }

        window.onload = captureMap;
    </script>
</body>
</html>", "hobby/map.html.twig", "C:\\wamp64\\www\\hobbymatch\\src\\View\\Hobby\\map.html.twig");
    }
}
