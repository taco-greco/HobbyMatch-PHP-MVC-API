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
class __TwigTemplate_724d8c02c6c03ee3bbfa33a309d4bb23 extends Template
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
\t<div class=\"container mt-5\">
\t\t<div class=\"row justify-content-center\">

\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h1>Update Hobby</h1>
\t\t\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Titre", [], "any", false, false, false, 17), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"Description\" rows=\"3\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["hobby"] ?? null), "Description", [], "any", false, false, false, 21), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"DatePublication\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"Auteur\">
\t\t\t\t\t\t\t\t\t<option value=\"Brice\" ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 28) == "Brice")) {
            yield " selected ";
        }
        yield ">Brice</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bruno\" ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 29) == "Bruno")) {
            yield " selected ";
        }
        yield ">Bruno</option>
\t\t\t\t\t\t\t\t\t<option value=\"Fabien\" ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 30) == "Fabien")) {
            yield " selected ";
        }
        yield ">Fabien</option>
\t\t\t\t\t\t\t\t\t<option value=\"Marion\" ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 31) == "Marion")) {
            yield " selected ";
        }
        yield ">Marion</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jean-Pierre\" ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 32) == "Jean-Pierre")) {
            yield " selected ";
        }
        yield ">Jean-Pierre</option>
\t\t\t\t\t\t\t\t\t<option value=\"Benoit\" ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 33) == "Benoit")) {
            yield " selected ";
        }
        yield ">Benoit</option>
\t\t\t\t\t\t\t\t\t<option value=\"Emmanuel\" ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 34) == "Emmanuel")) {
            yield " selected ";
        }
        yield ">Emmanuel</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sylvie\" ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 35) == "Sylvie")) {
            yield " selected ";
        }
        yield ">Sylvie</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"custom-file-input\" name=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 41
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 42)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 42))) && (CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 43) != ""))) {
            // line 44
            yield "\t\t\t\t\t\t\t\t<p>Image Actuelle :</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<img style=\"max-width:250px;\" class=\"img-thumbnail\" src=\"/uploads/images/";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 46), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 47
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 47), "html", null, true);
            yield "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageRepository\" value=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 49), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageFileName\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 50), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t";
        }
        // line 52
        yield "
\t\t\t\t\t\t\t <div class=\"mb-3\">
                            <label for=\"Latitude\" class=\"form-label\">Latitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Latitude\" name=\"Latitude\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 55), "html", null, true);
        yield "\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Longitude\" class=\"form-label\">Longitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Longitude\" name=\"Longitude\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 59), "html", null, true);
        yield "\" required>
                        </div>
                        <div id=\"map\" style=\"height: 400px;\" class=\"mb-3\"></div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                        </div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
";
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "<script>
    var map = L.map('map', {
        center: [";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 77), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 77), "html", null, true);
        yield "], // Center on current hobby location
        zoom: 12
    });
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 85), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 85), "html", null, true);
        yield "]).addTo(map);

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
        return array (  242 => 85,  229 => 77,  225 => 75,  218 => 74,  199 => 59,  192 => 55,  187 => 52,  182 => 50,  178 => 49,  173 => 47,  170 => 46,  166 => 44,  164 => 43,  163 => 42,  162 => 41,  151 => 35,  145 => 34,  139 => 33,  133 => 32,  127 => 31,  121 => 30,  115 => 29,  109 => 28,  102 => 24,  96 => 21,  95 => 20,  89 => 17,  77 => 7,  70 => 6,  62 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}ADMIN -
\t{{ parent() }}
\t- Update d'un Hobby
{% endblock %}
{% block body %}

\t<div class=\"container mt-5\">
\t\t<div class=\"row justify-content-center\">

\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h1>Update Hobby</h1>
\t\t\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\" value=\"{{ hobby.Titre }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"Description\" rows=\"3\">{{
hobby.Description }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"DatePublication\" value=\"{{ hobby.DatePublication|date(\"Y-m-d\") }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
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
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"custom-file-input\" name=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if file_exist(
'./uploads/images/'~hobby.ImageRepository~'/'~hobby.ImageFileName ) and
hobby.ImageFileName !=\"\" %}
\t\t\t\t\t\t\t\t<p>Image Actuelle :</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<img style=\"max-width:250px;\" class=\"img-thumbnail\" src=\"/uploads/images/{{ hobby.ImageRepository }}/{{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thobby.ImageFileName }}\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageRepository\" value=\"{{ hobby.ImageRepository }}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ImageFileName\" value=\"{{ hobby.ImageFileName }}\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t <div class=\"mb-3\">
                            <label for=\"Latitude\" class=\"form-label\">Latitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Latitude\" name=\"Latitude\" value=\"{{ hobby.Latitude }}\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"Longitude\" class=\"form-label\">Longitude</label>
                            <input type=\"text\" class=\"form-control\" id=\"Longitude\" name=\"Longitude\" value=\"{{ hobby.Longitude }}\" required>
                        </div>
                        <div id=\"map\" style=\"height: 400px;\" class=\"mb-3\"></div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                        </div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
{% endblock %}

{% block javascript %}
<script>
    var map = L.map('map', {
        center: [{{ hobby.Latitude }}, {{ hobby.Longitude }}], // Center on current hobby location
        zoom: 12
    });
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([{{ hobby.Latitude }}, {{ hobby.Longitude }}]).addTo(map);

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
{% endblock %}
", "Admin/Hobby/update.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Admin\\Hobby\\update.html.twig");
    }
}
