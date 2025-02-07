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
        yield "<h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "titre", [], "any", false, false, false, 1), "html", null, true);
        yield "</h1>
<p>
\t<strong>Description :</strong>
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
        yield "</p>
<p>
\t<strong>Auteur :</strong>
\t";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 7), "html", null, true);
        yield "</p>
<p>
\t<strong>Date :</strong>
\t";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 10), "d/m/Y"), "html", null, true);
        yield "</p>
<p>
\t";
        // line 12
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 13)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 13))) && (CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 14) != ""))) {
            // line 15
            yield "\t\t<img src=\"/uploads/images/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 15), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 15), "html", null, true);
            // line 16
            yield "\" class=\"img-thumbnail\"/>
\t";
        }
        // line 18
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
        return array (  79 => 18,  75 => 16,  70 => 15,  68 => 14,  67 => 13,  66 => 12,  61 => 10,  55 => 7,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>{{ hobby.titre }}</h1>
<p>
\t<strong>Description :</strong>
\t{{ hobby.description }}</p>
<p>
\t<strong>Auteur :</strong>
\t{{ hobby.Auteur }}</p>
<p>
\t<strong>Date :</strong>
\t{{ hobby.DatePublication|date(\"d/m/Y\") }}</p>
<p>
\t{% if file_exist(
'./uploads/images/'~hobby.ImageRepository~'/'~hobby.ImageFileName ) and
hobby.ImageFileName !=\"\" %}
\t\t<img src=\"/uploads/images/{{ hobby.ImageRepository }}/{{ hobby.ImageFileName
\t\t\t}}\" class=\"img-thumbnail\"/>
\t{% endif %}
</p>
", "Hobby/pdf.html.twig", "C:\\wamp64\\www\\hobbymatch\\src\\View\\Hobby\\pdf.html.twig");
    }
}
