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

/* Admin/Hobby/add.html.twig */
class __TwigTemplate_273c093a928f38ea959aa500817ce034 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Hobby/add.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Add Hobby - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<div class=\"mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-dark border-3\">
                <div class=\"card-body\">
                    <h1 class=\"card-title\"><span class=\"badge bg-dark mb-3\">Add Hobby</span></h1>
                    <form method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"mb-3\">
                            <label for=\"Titre\" class=\"form-label\">Titre</label>
                            <input type=\"text\" class=\"form-control\" id=\"Titre\" name=\"Titre\" placeholder=\"Saisir un titre\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Description\" class=\"form-label\">Description</label>
                            <textarea class=\"form-control\" id=\"Description\" name=\"Description\" rows=\"3\" placeholder=\"Saisir une description\" required></textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Date\" class=\"form-label\">Date</label>
                            <input type=\"date\" class=\"form-control\" id=\"Date\" name=\"Date\" required>
                        </div>
                        <div class=\"mb-3\">
                        <label for=\"Prix\" class=\"form-label\">Prix</label>
                        <input type=\"number\" placeholder=\"0.0\" step=\"0.01\" class=\"form-control\" id=\"Prix\" name=\"Prix\">
                        </div>
                        <div class=\"mb-3\">
                        <label for=\"EmailContact\" class=\"form-label\">Contact</label>
                        <input type=\"email\" placeholder=\"test@gmail.com\" class=\"form-control\" id=\"EmailContact\" name=\"EmailContact\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Auteur\" class=\"form-label\">Auteur</label>
                            <select class=\"form-select\" id=\"Auteur\" name=\"Auteur\" required>
                                <option value=\"\" disabled selected>Choisir un auteur</option>
                                <option value=\"Brice\">Brice</option>
                                <option value=\"Bruno\">Bruno</option>
                                <option value=\"Fabien\">Fabien</option>
                                <option value=\"Marion\">Marion</option>
                                <option value=\"Jean-Pierre\">Jean-Pierre</option>
                                <option value=\"Benoit\">Benoit</option>
                                <option value=\"Emmanuel\">Emmanuel</option>
                                <option value=\"Sylvie\">Sylvie</option>
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Image\" class=\"form-label\">Image</label>
                            <input type=\"file\" class=\"form-control\" id=\"Image\" name=\"Image\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Latitude\" class=\"form-label\">Latitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Latitude\" name=\"Latitude\" placeholder=\"Saisir la latitude\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Longitude\" class=\"form-label\">Longitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Longitude\" name=\"Longitude\" placeholder=\"Saisir la longitude\" required>
                        </div>
                        <div id=\"map\" style=\"height: 400px;\" class=\"mb-3\"></div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "<script>
    var map = L.map('map', {
        center: [49.4431, 1.0993], // Default center (Paris)
        zoom: 12
    });
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(map);

    var marker;

    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        if (marker) {
            marker.setLatLng(e.latlng);
        } else {
            marker = L.marker(e.latlng).addTo(map);
        }

        document.getElementById('Latitude').value = lat;
        document.getElementById('Longitude').value = lng;
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Hobby/add.html.twig";
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
        return array (  147 => 70,  140 => 69,  72 => 4,  65 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Add Hobby - {{ parent() }}{% endblock %}
{% block body %}
<div class=\"mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-dark border-3\">
                <div class=\"card-body\">
                    <h1 class=\"card-title\"><span class=\"badge bg-dark mb-3\">Add Hobby</span></h1>
                    <form method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"mb-3\">
                            <label for=\"Titre\" class=\"form-label\">Titre</label>
                            <input type=\"text\" class=\"form-control\" id=\"Titre\" name=\"Titre\" placeholder=\"Saisir un titre\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Description\" class=\"form-label\">Description</label>
                            <textarea class=\"form-control\" id=\"Description\" name=\"Description\" rows=\"3\" placeholder=\"Saisir une description\" required></textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Date\" class=\"form-label\">Date</label>
                            <input type=\"date\" class=\"form-control\" id=\"Date\" name=\"Date\" required>
                        </div>
                        <div class=\"mb-3\">
                        <label for=\"Prix\" class=\"form-label\">Prix</label>
                        <input type=\"number\" placeholder=\"0.0\" step=\"0.01\" class=\"form-control\" id=\"Prix\" name=\"Prix\">
                        </div>
                        <div class=\"mb-3\">
                        <label for=\"EmailContact\" class=\"form-label\">Contact</label>
                        <input type=\"email\" placeholder=\"test@gmail.com\" class=\"form-control\" id=\"EmailContact\" name=\"EmailContact\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Auteur\" class=\"form-label\">Auteur</label>
                            <select class=\"form-select\" id=\"Auteur\" name=\"Auteur\" required>
                                <option value=\"\" disabled selected>Choisir un auteur</option>
                                <option value=\"Brice\">Brice</option>
                                <option value=\"Bruno\">Bruno</option>
                                <option value=\"Fabien\">Fabien</option>
                                <option value=\"Marion\">Marion</option>
                                <option value=\"Jean-Pierre\">Jean-Pierre</option>
                                <option value=\"Benoit\">Benoit</option>
                                <option value=\"Emmanuel\">Emmanuel</option>
                                <option value=\"Sylvie\">Sylvie</option>
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Image\" class=\"form-label\">Image</label>
                            <input type=\"file\" class=\"form-control\" id=\"Image\" name=\"Image\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Latitude\" class=\"form-label\">Latitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Latitude\" name=\"Latitude\" placeholder=\"Saisir la latitude\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Longitude\" class=\"form-label\">Longitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Longitude\" name=\"Longitude\" placeholder=\"Saisir la longitude\" required>
                        </div>
                        <div id=\"map\" style=\"height: 400px;\" class=\"mb-3\"></div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascript %}
<script>
    var map = L.map('map', {
        center: [49.4431, 1.0993], // Default center (Paris)
        zoom: 12
    });
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(map);

    var marker;

    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        if (marker) {
            marker.setLatLng(e.latlng);
        } else {
            marker = L.marker(e.latlng).addTo(map);
        }

        document.getElementById('Latitude').value = lat;
        document.getElementById('Longitude').value = lng;
    });
</script>
{% endblock %}", "Admin/Hobby/add.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Admin\\Hobby\\add.html.twig");
    }
}
