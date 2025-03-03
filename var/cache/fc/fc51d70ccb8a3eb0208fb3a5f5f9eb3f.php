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

/* Admin/Hobby/update.html.twig */
class __TwigTemplate_56b7f716e3c7f5522ed9ec1b74a2698c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Hobby/update.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "ADMIN -
\t";
        // line 3
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
\t- Update d'un Hobby
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
\t<div class=\"mt-5\">
\t\t<div class=\"row justify-content-center\">

\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"card border-dark border-3\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span class=\"badge bg-dark mb-3\">Update Hobby</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t <input type=\"hidden\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\" name=\"token\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Titre\" class=\"form-label\">Titre</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Titre", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Description\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"Description\" rows=\"3\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["hobby"] ?? null), "Description", [], "any", false, false, false, 26), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"DatePublication\" class=\"form-label\">Date</label>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"DatePublication\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Prix\" class=\"form-label\">Prix</label>
\t\t\t\t\t\t\t\t<input type=\"number\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Prix", [], "any", false, false, false, 34), "html", null, true);
        yield "\" step=\"0.01\" class=\"form-control\" id=\"Prix\" name=\"Prix\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"EmailContact\" class=\"form-label\">Contact</label>
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "EmailContact", [], "any", false, false, false, 38), "html", null, true);
        yield "\" class=\"form-control\" id=\"EmailContact\" name=\"EmailContact\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Auteur\" class=\"form-label\">Auteur</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"Auteur\">
\t\t\t\t\t\t\t\t\t<option value=\"Brice\" ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 43) == "Brice")) {
            yield " selected ";
        }
        yield ">Brice</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bruno\" ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 44) == "Bruno")) {
            yield " selected ";
        }
        yield ">Bruno</option>
\t\t\t\t\t\t\t\t\t<option value=\"Fabien\" ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 45) == "Fabien")) {
            yield " selected ";
        }
        yield ">Fabien</option>
\t\t\t\t\t\t\t\t\t<option value=\"Marion\" ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 46) == "Marion")) {
            yield " selected ";
        }
        yield ">Marion</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jean-Pierre\" ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 47) == "Jean-Pierre")) {
            yield " selected ";
        }
        yield ">Jean-Pierre</option>
\t\t\t\t\t\t\t\t\t<option value=\"Benoit\" ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 48) == "Benoit")) {
            yield " selected ";
        }
        yield ">Benoit</option>
\t\t\t\t\t\t\t\t\t<option value=\"Emmanuel\" ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 49) == "Emmanuel")) {
            yield " selected ";
        }
        yield ">Emmanuel</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sylvie\" ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 50) == "Sylvie")) {
            yield " selected ";
        }
        yield ">Sylvie</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Image\" class=\"form-label\">Image</label>
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 57
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 58)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 58))) && (CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 59) != ""))) {
            // line 60
            yield "\t\t\t\t\t\t\t\t<p>Image Actuelle :</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<img style=\"max-width:250px;\" class=\"img-thumbnail\" src=\"/uploads/images/";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 62), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 63
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 63), "html", null, true);
            yield "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageRepository\" value=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 65), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageFileName\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 66), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t";
        }
        // line 68
        yield "
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Latitude\" class=\"form-label\">Latitude</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Latitude\" name=\"Latitude\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 71), "html", null, true);
        yield "\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Longitude\" class=\"form-label\">Longitude</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Longitude\" name=\"Longitude\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 75), "html", null, true);
        yield "\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"map\" style=\"height: 400px;\" class=\"mb-3\"></div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        yield "\t<script>
\t\tvar map = L.map('map', {
center: [
";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 94), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 94), "html", null, true);
        yield "
], // Center on current hobby location
zoom: 12
});
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 103), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 103), "html", null, true);
        yield "]).addTo(map);

map.on('click', function (e) {
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
\t</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Hobby/update.html.twig";
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
        return array (  269 => 103,  255 => 94,  250 => 91,  243 => 90,  224 => 75,  217 => 71,  212 => 68,  207 => 66,  203 => 65,  198 => 63,  195 => 62,  191 => 60,  189 => 59,  188 => 58,  187 => 57,  175 => 50,  169 => 49,  163 => 48,  157 => 47,  151 => 46,  145 => 45,  139 => 44,  133 => 43,  125 => 38,  118 => 34,  111 => 30,  104 => 26,  103 => 25,  96 => 21,  90 => 18,  77 => 7,  70 => 6,  62 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}ADMIN -
\t{{ parent() }}
\t- Update d'un Hobby
{% endblock %}
{% block body %}

\t<div class=\"mt-5\">
\t\t<div class=\"row justify-content-center\">

\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"card border-dark border-3\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span class=\"badge bg-dark mb-3\">Update Hobby</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t <input type=\"hidden\" value=\"{{ token }}\" name=\"token\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Titre\" class=\"form-label\">Titre</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\" value=\"{{ hobby.Titre }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Description\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"Description\" rows=\"3\">{{
hobby.Description }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"DatePublication\" class=\"form-label\">Date</label>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"DatePublication\" value=\"{{ hobby.DatePublication|date(\"Y-m-d\") }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Prix\" class=\"form-label\">Prix</label>
\t\t\t\t\t\t\t\t<input type=\"number\" value=\"{{ hobby.Prix }}\" step=\"0.01\" class=\"form-control\" id=\"Prix\" name=\"Prix\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"EmailContact\" class=\"form-label\">Contact</label>
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ hobby.EmailContact }}\" class=\"form-control\" id=\"EmailContact\" name=\"EmailContact\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Auteur\" class=\"form-label\">Auteur</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"Auteur\">
\t\t\t\t\t\t\t\t\t<option value=\"Brice\" {% if (hobby.Auteur == \"Brice\") %} selected {% endif %}>Brice</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bruno\" {% if (hobby.Auteur == \"Bruno\") %} selected {% endif %}>Bruno</option>
\t\t\t\t\t\t\t\t\t<option value=\"Fabien\" {% if (hobby.Auteur == \"Fabien\") %} selected {% endif %}>Fabien</option>
\t\t\t\t\t\t\t\t\t<option value=\"Marion\" {% if (hobby.Auteur == \"Marion\") %} selected {% endif %}>Marion</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jean-Pierre\" {% if (hobby.Auteur == \"Jean-Pierre\") %} selected {% endif %}>Jean-Pierre</option>
\t\t\t\t\t\t\t\t\t<option value=\"Benoit\" {% if (hobby.Auteur == \"Benoit\") %} selected {% endif %}>Benoit</option>
\t\t\t\t\t\t\t\t\t<option value=\"Emmanuel\" {% if (hobby.Auteur == \"Emmanuel\") %} selected {% endif %}>Emmanuel</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sylvie\" {% if (hobby.Auteur == \"Sylvie\") %} selected {% endif %}>Sylvie</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Image\" class=\"form-label\">Image</label>
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if file_exist(
'./uploads/images/'~hobby.ImageRepository~'/'~hobby.ImageFileName ) and
hobby.ImageFileName !=\"\" %}
\t\t\t\t\t\t\t\t<p>Image Actuelle :</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<img style=\"max-width:250px;\" class=\"img-thumbnail\" src=\"/uploads/images/{{ hobby.ImageRepository }}/{{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thobby.ImageFileName }}\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageRepository\" value=\"{{ hobby.ImageRepository }}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageFileName\" value=\"{{ hobby.ImageFileName }}\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Latitude\" class=\"form-label\">Latitude</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Latitude\" name=\"Latitude\" value=\"{{ hobby.Latitude }}\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Longitude\" class=\"form-label\">Longitude</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Longitude\" name=\"Longitude\" value=\"{{ hobby.Longitude }}\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"map\" style=\"height: 400px;\" class=\"mb-3\"></div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
{% endblock %}

{% block javascript %}
\t<script>
\t\tvar map = L.map('map', {
center: [
{{ hobby.Latitude }}, {{ hobby.Longitude }}
], // Center on current hobby location
zoom: 12
});
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([{{ hobby.Latitude }}, {{ hobby.Longitude }}]).addTo(map);

map.on('click', function (e) {
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
\t</script>
{% endblock %}
", "Admin/Hobby/update.html.twig", "C:\\wamp64\\www\\hobbymatch\\src\\View\\Admin\\Hobby\\update.html.twig");
    }
}
