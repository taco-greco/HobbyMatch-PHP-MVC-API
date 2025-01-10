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

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "ADMIN - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " - Ajout d'un Hobby ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<h1>Ajout Hobby</h1>

<form method=\"post\" enctype=\"multipart/form-data\">
<div class=\"mb-3\">
<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\"
name=\"Titre\">
</div>
<div class=\"mb-3\">
<textarea class=\"form-control\" name=\"Description\" rows=\"3\"></textarea>
</div>
<div class=\"mb-3\">
<input type=\"date\" class=\"form-control\" name=\"Date\">
</div>
<div class=\"mb-3\">
<select class=\"form-select\" name=\"Auteur\">
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
<input type=\"file\" class=\"custom-file-input\" name=\"Image\">
</div>

<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
</form>



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
        return array (  72 => 6,  65 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}ADMIN - {{parent()}} - Ajout d'un Hobby {% endblock %}

{% block body %}
<h1>Ajout Hobby</h1>

<form method=\"post\" enctype=\"multipart/form-data\">
<div class=\"mb-3\">
<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\"
name=\"Titre\">
</div>
<div class=\"mb-3\">
<textarea class=\"form-control\" name=\"Description\" rows=\"3\"></textarea>
</div>
<div class=\"mb-3\">
<input type=\"date\" class=\"form-control\" name=\"Date\">
</div>
<div class=\"mb-3\">
<select class=\"form-select\" name=\"Auteur\">
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
<input type=\"file\" class=\"custom-file-input\" name=\"Image\">
</div>

<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
</form>



{% endblock %}", "Admin/Hobby/add.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Admin\\Hobby\\add.html.twig");
    }
}
