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

/* Hobby/show.html.twig */
class __TwigTemplate_65f0159e8de1b81f739d6a527841fa43 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Hobby/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "\tHobby
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield "
\t-
\t";
        // line 6
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "
\t<h1 class=\"my-4\">
\t\t<span class=\"badge bg-dark\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "titre", [], "any", false, false, false, 11), "html", null, true);
        yield "</span>
\t</h1>
\t<div class=\"card border-dark border-3\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-xl-flex justify-content-evenly\">

\t\t\t\t<div class=\"p-xl-2\">
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 19
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 19)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 19))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 19) != ""))) {
            // line 20
            yield "
\t\t\t\t\t\t\t<img src=\"/uploads/images/";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 21), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 21), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"max-height:250px;\"/>
\t\t\t\t\t\t";
        }
        // line 23
        yield "\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-info\">
\t\t\t\t\t\t<strong>Auteur :</strong>
\t\t\t\t\t\t";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-light\">
\t\t\t\t\t\t<strong>Date :</strong>
\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "date", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        yield "</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-success\">
\t\t\t\t\t\t<strong>Prix :</strong>
\t\t\t\t\t\t";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Prix", [], "any", false, false, false, 32), "html", null, true);
        yield "€</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-secondary\">
\t\t\t\t\t\t<strong>Contact :</strong>
\t\t\t\t\t\t<a href=\"mailto:";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "EmailContact", [], "any", false, false, false, 35), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "EmailContact", [], "any", false, false, false, 35), "html", null, true);
        yield "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"p-xl-2\">
\t\t\t\t\t<h5>
\t\t\t\t\t\t<span class=\"badge rounded-pill bg-dark\">
\t\t\t\t\t\t\t<strong>Description :</strong>
\t\t\t\t\t\t</span>
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"text-break\">
\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "description", [], "any", false, false, false, 46), "html", null, true);
        yield "</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"p-xl-2\">
\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "\t<script>
\t\tvar map = L.map('map', {
center: [
";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 61), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 61), "html", null, true);
        yield "
],
zoom: 16
});
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
}).addTo(map);
var marker = L.marker([";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 69), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 69), "html", null, true);
        yield "]).addTo(map);

// Reverse geocoding to get the street name and number
fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 72), "html", null, true);
        yield "&lon=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 72), "html", null, true);
        yield "&zoom=18&addressdetails=1`).then(response => response.json()).then(data => {
var streetName = data.address.road || 'Unknown street';
var houseNumber = data.address.house_number || '';
var fullAddress = houseNumber ? `\${houseNumber} \${streetName}` : streetName;
marker.bindPopup(fullAddress).openPopup();
}).catch(error => {
console.error('Error fetching street name:', error);
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
        return "Hobby/show.html.twig";
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
        return array (  196 => 72,  188 => 69,  175 => 61,  170 => 58,  163 => 57,  148 => 46,  132 => 35,  126 => 32,  120 => 29,  114 => 26,  109 => 23,  102 => 21,  99 => 20,  97 => 19,  86 => 11,  82 => 9,  75 => 8,  68 => 6,  63 => 4,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
\tHobby
\t{{ hobby.titre}}
\t-
\t{{ parent() }}
{% endblock %}
{% block body %}

\t<h1 class=\"my-4\">
\t\t<span class=\"badge bg-dark\">{{ hobby.titre }}</span>
\t</h1>
\t<div class=\"card border-dark border-3\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-xl-flex justify-content-evenly\">

\t\t\t\t<div class=\"p-xl-2\">
\t\t\t\t\t<p>
\t\t\t\t\t\t{% if file_exist( './uploads/images/'~hobby.ImageRepository~'/'~hobby.ImageFileName ) and hobby.ImageFileName !=\"\" %}

\t\t\t\t\t\t\t<img src=\"/uploads/images/{{ hobby.ImageRepository }}/{{ hobby.ImageFileName }}\" class=\"img-thumbnail\" style=\"max-height:250px;\"/>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-info\">
\t\t\t\t\t\t<strong>Auteur :</strong>
\t\t\t\t\t\t{{ hobby.Auteur }}</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-light\">
\t\t\t\t\t\t<strong>Date :</strong>
\t\t\t\t\t\t{{ hobby.date|date(\"d/m/Y\") }}</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-success\">
\t\t\t\t\t\t<strong>Prix :</strong>
\t\t\t\t\t\t{{ hobby.Prix }}€</p>
\t\t\t\t\t<p class=\"badge rounded-pill bg-secondary\">
\t\t\t\t\t\t<strong>Contact :</strong>
\t\t\t\t\t\t<a href=\"mailto:{{hobby.EmailContact}}\">{{ hobby.EmailContact }}</a>
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"p-xl-2\">
\t\t\t\t\t<h5>
\t\t\t\t\t\t<span class=\"badge rounded-pill bg-dark\">
\t\t\t\t\t\t\t<strong>Description :</strong>
\t\t\t\t\t\t</span>
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"text-break\">
\t\t\t\t\t\t{{ hobby.description }}</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"p-xl-2\">
\t\t\t\t\t<div id=\"map\"></div>
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
],
zoom: 16
});
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
}).addTo(map);
var marker = L.marker([{{ hobby.Latitude }}, {{ hobby.Longitude }}]).addTo(map);

// Reverse geocoding to get the street name and number
fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat={{ hobby.Latitude }}&lon={{ hobby.Longitude }}&zoom=18&addressdetails=1`).then(response => response.json()).then(data => {
var streetName = data.address.road || 'Unknown street';
var houseNumber = data.address.house_number || '';
var fullAddress = houseNumber ? `\${houseNumber} \${streetName}` : streetName;
marker.bindPopup(fullAddress).openPopup();
}).catch(error => {
console.error('Error fetching street name:', error);
});
\t</script>
{% endblock %}
", "Hobby/show.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Hobby\\show.html.twig");
    }
}
