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

/* Hobby/pdf.html.twig */
class __TwigTemplate_7e0452cc51cd0b29709288991f61262a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<p>
\t";
        // line 2
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source,         // line 3
($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 3)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 3))) && (CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 4) != ""))) {
            // line 5
            yield "\t\t<img src=\"/uploads/images/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 5), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 5), "html", null, true);
            // line 6
            yield "\" class=\"img-thumbnail\"/>
\t";
        }
        // line 8
        yield "</p>

<h1>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
<p>
\t<strong>Description :</strong>
\t";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "description", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
<p>
\t<strong>Auteur :</strong>
\t";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
<p>
<p>
\t<strong>Contact :</strong>
\t";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "EmailContact", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
<p>
<p>
\t<strong>Prix :</strong>
\t";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Prix", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
<p>
\t<strong>Date :</strong>
\t";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
        yield "</p>
<p>
<p>
\t<strong>Latitude :</strong>
\t";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Latitude", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
<p>
<p>
\t<strong>Longitude :</strong>
\t";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Longitude", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Hobby/pdf.html.twig";
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
        return array (  108 => 35,  101 => 31,  94 => 27,  88 => 24,  81 => 20,  74 => 16,  68 => 13,  62 => 10,  58 => 8,  54 => 6,  49 => 5,  47 => 4,  46 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<p>
\t{% if file_exist(
'./uploads/images/'~hobby.ImageRepository~'/'~hobby.ImageFileName ) and
hobby.ImageFileName !=\"\" %}
\t\t<img src=\"/uploads/images/{{ hobby.ImageRepository }}/{{ hobby.ImageFileName
\t\t\t}}\" class=\"img-thumbnail\"/>
\t{% endif %}
</p>

<h1>{{ hobby.titre }}</h1>
<p>
\t<strong>Description :</strong>
\t{{ hobby.description }}</p>
<p>
\t<strong>Auteur :</strong>
\t{{ hobby.Auteur }}</p>
<p>
<p>
\t<strong>Contact :</strong>
\t{{ hobby.EmailContact }}</p>
<p>
<p>
\t<strong>Prix :</strong>
\t{{ hobby.Prix }}</p>
<p>
\t<strong>Date :</strong>
\t{{ hobby.DatePublication|date(\"d/m/Y\") }}</p>
<p>
<p>
\t<strong>Latitude :</strong>
\t{{ hobby.Latitude }}</p>
<p>
<p>
\t<strong>Longitude :</strong>
\t{{ hobby.Longitude }}</p>
", "Hobby/pdf.html.twig", "C:\\wamp64\\www\\hobbymatch\\src\\View\\Hobby\\pdf.html.twig");
    }
}
