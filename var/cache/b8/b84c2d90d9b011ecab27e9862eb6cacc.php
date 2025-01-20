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
\t<h1>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
\t<div class=\"d-xl-flex\">
\t\t<div class=\"p-xl-2\">
\t\t\t<p>
\t\t\t\t";
        // line 14
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 14)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 14))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 14) != ""))) {
            // line 15
            yield "
\t\t\t\t\t<img src=\"/uploads/images/";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 16), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"max-height:250px;\"/>
\t\t\t\t";
        }
        // line 18
        yield "\t\t\t</p>
\t\t\t<p class=\"text-break\">
\t\t\t\t<strong>Description :</strong>
\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
\t\t\t<p>
\t\t\t\t<strong>Auteur :</strong>
\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
\t\t\t<p>
\t\t\t\t<strong>Date :</strong>
\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "date", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
        yield "</p>
\t\t</div>
        <div class=\"p-xl-2\">
\t\t<div id=\"map\"></div>
\t</div>
    </div>
";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "\t<script>
\tvar map = L.map('map', {
        center: [
            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 39), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 39), "html", null, true);
        yield "
        ],
        zoom: 19
    });
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(map);
    var marker = L.marker([";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 47), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 47), "html", null, true);
        yield "]).addTo(map);

    // Reverse geocoding to get the street name and number
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 50), "html", null, true);
        yield "&lon=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 50), "html", null, true);
        yield "&zoom=18&addressdetails=1`)
        .then(response => response.json())
        .then(data => {
            var streetName = data.address.road || 'Unknown street';
            var houseNumber = data.address.house_number || '';
            var fullAddress = houseNumber ? `\${houseNumber} \${streetName}` : streetName;
            marker.bindPopup(fullAddress).openPopup();
        })
        .catch(error => {
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
        return array (  166 => 50,  158 => 47,  145 => 39,  140 => 36,  133 => 35,  121 => 27,  115 => 24,  109 => 21,  104 => 18,  97 => 16,  94 => 15,  92 => 14,  85 => 10,  82 => 9,  75 => 8,  68 => 6,  63 => 4,  60 => 3,  53 => 2,  42 => 1,);
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

\t<h1>{{ hobby.titre }}</h1>
\t<div class=\"d-xl-flex\">
\t\t<div class=\"p-xl-2\">
\t\t\t<p>
\t\t\t\t{% if file_exist( './uploads/images/'~hobby.ImageRepository~'/'~hobby.ImageFileName ) and hobby.ImageFileName !=\"\" %}

\t\t\t\t\t<img src=\"/uploads/images/{{ hobby.ImageRepository }}/{{ hobby.ImageFileName }}\" class=\"img-thumbnail\" style=\"max-height:250px;\"/>
\t\t\t\t{% endif %}
\t\t\t</p>
\t\t\t<p class=\"text-break\">
\t\t\t\t<strong>Description :</strong>
\t\t\t\t{{ hobby.description }}</p>
\t\t\t<p>
\t\t\t\t<strong>Auteur :</strong>
\t\t\t\t{{ hobby.Auteur }}</p>
\t\t\t<p>
\t\t\t\t<strong>Date :</strong>
\t\t\t\t{{ hobby.date|date(\"d/m/Y\") }}</p>
\t\t</div>
        <div class=\"p-xl-2\">
\t\t<div id=\"map\"></div>
\t</div>
    </div>
{% endblock %}

{% block javascript %}
\t<script>
\tvar map = L.map('map', {
        center: [
            {{ hobby.Latitude }}, {{ hobby.Longitude }}
        ],
        zoom: 19
    });
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    }).addTo(map);
    var marker = L.marker([{{ hobby.Latitude }}, {{ hobby.Longitude }}]).addTo(map);

    // Reverse geocoding to get the street name and number
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat={{ hobby.Latitude }}&lon={{ hobby.Longitude }}&zoom=18&addressdetails=1`)
        .then(response => response.json())
        .then(data => {
            var streetName = data.address.road || 'Unknown street';
            var houseNumber = data.address.house_number || '';
            var fullAddress = houseNumber ? `\${houseNumber} \${streetName}` : streetName;
            marker.bindPopup(fullAddress).openPopup();
        })
        .catch(error => {
            console.error('Error fetching street name:', error);
        });
\t</script>
{% endblock %}
", "Hobby/show.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Hobby\\show.html.twig");
    }
}
