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

/* base.html.twig */
class __TwigTemplate_f874f5eae46d430de0fee2bb496ccdde extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 10
        yield "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/lumen/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/assets/css/style.css\">
\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/> ";
        // line 14
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 15
        yield "\t\t</head>
\t\t<body>

\t\t\t<nav class=\"navbar navbar-expand-lg bg-primary px-2 px-md-4\" data-bs-theme=\"dark\">
\t\t\t\t<div class=\"container-fluid px-2 px-md-4\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">HobbyMatch</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 29)) {
            // line 30
            yield "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/AdminHobby/list\">Admin List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/AdminHobby/add\">Admin Add</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/Hobby/fixtures\">Fixtures</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 40
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<form class=\"d-flex\" role=\"search\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<button class=\"btn btn-outline-light ms-1\" type=\"submit\">Search</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 46)) {
            // line 47
            yield "\t\t\t\t\t\t\t\t<a class=\"btn btn-danger ms-2 mt-1 mt-xl-0\" href=\"/User/logout\" role=\"button\">Log OUT</a>
\t\t\t\t\t\t\t";
        } else {
            // line 49
            yield "\t\t\t\t\t\t\t\t<a class=\"btn btn-success ms-2 mt-1 mt-xl-0\" href=\"/User/login\" role=\"button\">Log IN</a>
\t\t\t\t\t\t\t";
        }
        // line 51
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<div class=\"container mt-4\">
\t\t\t\t<main>
\t\t\t\t\t";
        // line 58
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 59
        yield "\t\t\t\t</main>
\t\t\t</div>

\t\t\t<div class=\"container-fluid py-4 mt-4 bg-dark\">
\t\t\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center border-top\">
\t\t\t\t\t<p class=\"col-md-4 mb-0 text-light\">© 2024 Company, Inc</p>

\t\t\t\t\t<a href=\"/\" class=\"col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"40\" height=\"32\">
\t\t\t\t\t\t\t<use xlink:href=\"#bootstrap\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"nav col-md-4 justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">Features</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">Pricing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">FAQs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<!-- Make sure you put this AFTER Leaflet's CSS -->
\t\t\t<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
\t\t\t";
        // line 94
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 95
        yield "
\t\t</body>
\t</html>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t\t\t\tHobbies
\t\t\t";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  203 => 94,  193 => 58,  183 => 14,  177 => 8,  170 => 7,  162 => 95,  160 => 94,  123 => 59,  121 => 58,  112 => 51,  108 => 49,  104 => 47,  102 => 46,  94 => 40,  82 => 30,  80 => 29,  64 => 15,  62 => 14,  56 => 10,  54 => 7,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tHobbies
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/lumen/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/assets/css/style.css\">
\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/> {% block css %}{% endblock %}
\t\t</head>
\t\t<body>

\t\t\t<nav class=\"navbar navbar-expand-lg bg-primary px-2 px-md-4\" data-bs-theme=\"dark\">
\t\t\t\t<div class=\"container-fluid px-2 px-md-4\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">HobbyMatch</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if session.login is defined %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/AdminHobby/list\">Admin List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/AdminHobby/add\">Admin Add</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/Hobby/fixtures\">Fixtures</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<form class=\"d-flex\" role=\"search\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<button class=\"btn btn-outline-light ms-1\" type=\"submit\">Search</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{% if session.login is defined %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger ms-2 mt-1 mt-xl-0\" href=\"/User/logout\" role=\"button\">Log OUT</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-success ms-2 mt-1 mt-xl-0\" href=\"/User/login\" role=\"button\">Log IN</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<div class=\"container mt-4\">
\t\t\t\t<main>
\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t</main>
\t\t\t</div>

\t\t\t<div class=\"container-fluid py-4 mt-4 bg-dark\">
\t\t\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center border-top\">
\t\t\t\t\t<p class=\"col-md-4 mb-0 text-light\">© 2024 Company, Inc</p>

\t\t\t\t\t<a href=\"/\" class=\"col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"40\" height=\"32\">
\t\t\t\t\t\t\t<use xlink:href=\"#bootstrap\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"nav col-md-4 justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">Features</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">Pricing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">FAQs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-light\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<!-- Make sure you put this AFTER Leaflet's CSS -->
\t\t\t<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
\t\t\t{% block javascript %}{% endblock %}

\t\t</body>
\t</html>
", "base.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\base.html.twig");
    }
}
