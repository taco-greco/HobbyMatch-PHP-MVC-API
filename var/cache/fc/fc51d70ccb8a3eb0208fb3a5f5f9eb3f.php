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
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Titre\" class=\"form-label\">Titre</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Titre", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Description\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"Description\" rows=\"3\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["hobby"] ?? null), "Description", [], "any", false, false, false, 25), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"DatePublication\" class=\"form-label\">Date</label>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"DatePublication\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Prix\" class=\"form-label\">Prix</label>
\t\t\t\t\t\t\t\t<input type=\"number\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Prix", [], "any", false, false, false, 33), "html", null, true);
        yield "\" step=\"0.01\" class=\"form-control\" id=\"Prix\" name=\"Prix\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"EmailContact\" class=\"form-label\">Contact</label>
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "EmailContact", [], "any", false, false, false, 37), "html", null, true);
        yield "\" class=\"form-control\" id=\"EmailContact\" name=\"EmailContact\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Auteur\" class=\"form-label\">Auteur</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"Auteur\">
\t\t\t\t\t\t\t\t\t<option value=\"Brice\" ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 42) == "Brice")) {
            yield " selected ";
        }
        yield ">Brice</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bruno\" ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 43) == "Bruno")) {
            yield " selected ";
        }
        yield ">Bruno</option>
\t\t\t\t\t\t\t\t\t<option value=\"Fabien\" ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 44) == "Fabien")) {
            yield " selected ";
        }
        yield ">Fabien</option>
\t\t\t\t\t\t\t\t\t<option value=\"Marion\" ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 45) == "Marion")) {
            yield " selected ";
        }
        yield ">Marion</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jean-Pierre\" ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 46) == "Jean-Pierre")) {
            yield " selected ";
        }
        yield ">Jean-Pierre</option>
\t\t\t\t\t\t\t\t\t<option value=\"Benoit\" ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 47) == "Benoit")) {
            yield " selected ";
        }
        yield ">Benoit</option>
\t\t\t\t\t\t\t\t\t<option value=\"Emmanuel\" ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 48) == "Emmanuel")) {
            yield " selected ";
        }
        yield ">Emmanuel</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sylvie\" ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 49) == "Sylvie")) {
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
        // line 56
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 57)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 57))) && (CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 58) != ""))) {
            // line 59
            yield "\t\t\t\t\t\t\t\t<p>Image Actuelle :</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<img style=\"max-width:250px;\" class=\"img-thumbnail\" src=\"/uploads/images/";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 61), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 62
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 62), "html", null, true);
            yield "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageRepository\" value=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 64), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageFileName\" value=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 65), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t";
        }
        // line 67
        yield "
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Latitude\" class=\"form-label\">Latitude</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Latitude\" name=\"Latitude\" value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 70), "html", null, true);
        yield "\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"Longitude\" class=\"form-label\">Longitude</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Longitude\" name=\"Longitude\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 74), "html", null, true);
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

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "\t<script>
\t\tvar map = L.map('map', {
center: [
";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 93), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 93), "html", null, true);
        yield "
], // Center on current hobby location
zoom: 12
});
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 102), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 102), "html", null, true);
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
        return array (  265 => 102,  251 => 93,  246 => 90,  239 => 89,  220 => 74,  213 => 70,  208 => 67,  203 => 65,  199 => 64,  194 => 62,  191 => 61,  187 => 59,  185 => 58,  184 => 57,  183 => 56,  171 => 49,  165 => 48,  159 => 47,  153 => 46,  147 => 45,  141 => 44,  135 => 43,  129 => 42,  121 => 37,  114 => 33,  107 => 29,  100 => 25,  99 => 24,  92 => 20,  77 => 7,  70 => 6,  62 => 3,  53 => 2,  42 => 1,);
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
