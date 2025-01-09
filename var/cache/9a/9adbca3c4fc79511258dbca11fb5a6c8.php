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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
         ";
        // line 13
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 14
        yield "\t\t</head>
\t\t<body>
\t\t\t<div class=\"container\"> ";
        // line 16
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 17
        yield "
\t\t\t\t</div>

\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
\t\t\t\t";
        // line 21
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 22
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

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 21
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
        return array (  118 => 21,  108 => 16,  98 => 13,  92 => 8,  85 => 7,  77 => 22,  75 => 21,  69 => 17,  67 => 16,  63 => 14,  61 => 13,  56 => 10,  54 => 7,  46 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
         {% block css %}{% endblock %}
\t\t</head>
\t\t<body>
\t\t\t<div class=\"container\"> {% block body %}{% endblock %}

\t\t\t\t</div>

\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
\t\t\t\t{% block javascript %}{% endblock %}

\t\t\t</body>
\t\t</html>
", "base.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\base.html.twig");
    }
}
