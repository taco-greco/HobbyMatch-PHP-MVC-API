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
        yield "\t<h1>Update Hobby</h1>
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"mb-3\">
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Titre", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<textarea class=\"form-control\" name=\"Description\" rows=\"3\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["hobby"] ?? null), "Description", [], "any", false, false, false, 14), "html", null, true);
        yield "</textarea>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<input type=\"date\" class=\"form-control\" name=\"DatePublication\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true);
        yield "\">
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<select class=\"form-select\" name=\"Auteur\">
\t\t\t\t<option value=\"Brice\" ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 21) == "Brice")) {
            yield " selected ";
        }
        yield ">Brice</option>
\t\t\t\t<option value=\"Bruno\" ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 22) == "Bruno")) {
            yield " selected ";
        }
        yield ">Bruno</option>
\t\t\t\t<option value=\"Fabien\" ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 23) == "Fabien")) {
            yield " selected ";
        }
        yield ">Fabien</option>
\t\t\t\t<option value=\"Marion\" ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 24) == "Marion")) {
            yield " selected ";
        }
        yield ">Marion</option>
\t\t\t\t<option value=\"Jean-Pierre\" ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 25) == "Jean-Pierre")) {
            yield " selected ";
        }
        yield ">Jean-Pierre</option>
\t\t\t\t<option value=\"Benoit\" ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 26) == "Benoit")) {
            yield " selected ";
        }
        yield ">Benoit</option>
\t\t\t\t<option value=\"Emmanuel\" ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 27) == "Emmanuel")) {
            yield " selected ";
        }
        yield ">Emmanuel</option>
\t\t\t\t<option value=\"Sylvie\" ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 28) == "Sylvie")) {
            yield " selected ";
        }
        yield ">Sylvie</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<input type=\"file\" class=\"custom-file-input\" name=\"Image\">
\t\t</div>
\t\t";
        // line 34
        if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 35)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 35))) && (CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 36) != ""))) {
            // line 37
            yield "\t\t\t<p>Image Actuelle :</p>
\t\t\t<p>
\t\t\t\t<img src=\"/uploads/images/";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 39), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 40), "html", null, true);
            yield "\" class=\"img-thumbnail\"/>
\t\t\t</p>
\t\t\t<input type=\"hidden\" name=\"ImageRepository\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageRepository", [], "any", false, false, false, 42), "html", null, true);
            yield "\">
\t\t\t<input type=\"hidden\" name=\"ImageFileName\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "ImageFileName", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
\t\t";
        }
        // line 45
        yield "\t\t<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
\t</form>
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
        return array (  179 => 45,  174 => 43,  170 => 42,  165 => 40,  162 => 39,  158 => 37,  156 => 36,  155 => 35,  154 => 34,  143 => 28,  137 => 27,  131 => 26,  125 => 25,  119 => 24,  113 => 23,  107 => 22,  101 => 21,  94 => 17,  88 => 14,  87 => 13,  81 => 10,  76 => 7,  69 => 6,  61 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}ADMIN -
\t{{ parent() }}
\t- Update d'un Hobby
{% endblock %}
{% block body %}
\t<h1>Update Hobby</h1>
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"mb-3\">
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\" value=\"{{ hobby.Titre }}\">
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<textarea class=\"form-control\" name=\"Description\" rows=\"3\">{{
hobby.Description }}</textarea>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<input type=\"date\" class=\"form-control\" name=\"DatePublication\" value=\"{{ hobby.DatePublication|date(\"Y-m-d\") }}\">
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<select class=\"form-select\" name=\"Auteur\">
\t\t\t\t<option value=\"Brice\" {% if (hobby.Auteur == \"Brice\") %} selected {% endif %}>Brice</option>
\t\t\t\t<option value=\"Bruno\" {% if (hobby.Auteur == \"Bruno\") %} selected {% endif %}>Bruno</option>
\t\t\t\t<option value=\"Fabien\" {% if (hobby.Auteur == \"Fabien\") %} selected {% endif %}>Fabien</option>
\t\t\t\t<option value=\"Marion\" {% if (hobby.Auteur == \"Marion\") %} selected {% endif %}>Marion</option>
\t\t\t\t<option value=\"Jean-Pierre\" {% if (hobby.Auteur == \"Jean-Pierre\") %} selected {% endif %}>Jean-Pierre</option>
\t\t\t\t<option value=\"Benoit\" {% if (hobby.Auteur == \"Benoit\") %} selected {% endif %}>Benoit</option>
\t\t\t\t<option value=\"Emmanuel\" {% if (hobby.Auteur == \"Emmanuel\") %} selected {% endif %}>Emmanuel</option>
\t\t\t\t<option value=\"Sylvie\" {% if (hobby.Auteur == \"Sylvie\") %} selected {% endif %}>Sylvie</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<input type=\"file\" class=\"custom-file-input\" name=\"Image\">
\t\t</div>
\t\t{% if file_exist(
'./uploads/images/'~hobby.ImageRepository~'/'~hobby.ImageFileName ) and
hobby.ImageFileName !=\"\" %}
\t\t\t<p>Image Actuelle :</p>
\t\t\t<p>
\t\t\t\t<img src=\"/uploads/images/{{ hobby.ImageRepository }}/{{
\t\t\t\t\thobby.ImageFileName }}\" class=\"img-thumbnail\"/>
\t\t\t</p>
\t\t\t<input type=\"hidden\" name=\"ImageRepository\" value=\"{{ hobby.ImageRepository }}\">
\t\t\t<input type=\"hidden\" name=\"ImageFileName\" value=\"{{ hobby.ImageFileName }}\">
\t\t{% endif %}
\t\t<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
\t</form>
{% endblock %}
", "Admin/Hobby/update.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Admin\\Hobby\\update.html.twig");
    }
}
