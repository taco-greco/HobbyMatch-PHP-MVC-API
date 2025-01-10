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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/journal/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\"> ";
        // line 12
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 13
        yield "\t\t</head>
\t\t<body>

\t<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">HobbyMatch</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/AdminHobby/list\">Admin List</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/AdminHobby/add\">Admin Add</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/Hobby/fixtures\">Fixtures</a>
        </li>
      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-light\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

\t\t\t<div class=\"container mt-4\"> ";
        // line 45
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 46
        yield "
\t\t\t\t</div>

\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
\t\t\t\t";
        // line 50
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 51
        yield "
\t\t\t</body>
\t\t</html>
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

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 50
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
    public function getDebugInfo(): array
    {
        return array (  147 => 50,  137 => 45,  127 => 12,  121 => 8,  114 => 7,  106 => 51,  104 => 50,  98 => 46,  96 => 45,  62 => 13,  60 => 12,  56 => 10,  54 => 7,  46 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/journal/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\"> {% block css %}{% endblock %}
\t\t</head>
\t\t<body>

\t<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">HobbyMatch</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/AdminHobby/list\">Admin List</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/AdminHobby/add\">Admin Add</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/Hobby/fixtures\">Fixtures</a>
        </li>
      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-light\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

\t\t\t<div class=\"container mt-4\"> {% block body %}{% endblock %}

\t\t\t\t</div>

\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
\t\t\t\t{% block javascript %}{% endblock %}

\t\t\t</body>
\t\t</html>
", "base.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\base.html.twig");
    }
}
