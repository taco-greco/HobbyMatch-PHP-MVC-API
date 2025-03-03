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

/* Admin/Hobby/list.html.twig */
class __TwigTemplate_313057cde8f6c918cb31ac82696cc0c5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Hobby/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "- Liste des Hobbies";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-hover text-center\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Id</th>
\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t<th scope=\"col\" class=\"d-none d-lg-table-cell\">DatePublication</th>
\t\t\t\t\t<th scope=\"col\" class=\"d-none d-lg-table-cell\">Auteur</th>
\t\t\t\t\t<th scope=\"col\">Edit</th>
\t\t\t\t\t<th scope=\"col\">Delete</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody class=\"table-group-divider\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hobbies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 19
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Id", [], "any", false, false, false, 20), "html", null, true);
            yield "</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/AdminHobby/show/";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "\" class=\"btn btn-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Titre", [], "any", false, false, false, 22), "html", null, true);
            yield "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"d-none d-lg-table-cell\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "DatePublication", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"d-none d-lg-table-cell\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Auteur", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/AdminHobby/update/";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-square\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<form method=\"post\" action=\"/AdminHobby/delete\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "\" name=\"id\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
            yield "\" name=\"token\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
            // line 40
            yield "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hobby'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Hobby/list.html.twig";
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
        return array (  144 => 43,  136 => 40,  128 => 34,  124 => 33,  115 => 27,  110 => 25,  106 => 24,  99 => 22,  94 => 20,  91 => 19,  87 => 18,  71 => 4,  64 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\"%}
{% block title %}{{parent()}}- Liste des Hobbies{% endblock%}
{% block body %}

\t<div class=\"table-responsive\">
\t\t<table class=\"table table-hover text-center\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Id</th>
\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t<th scope=\"col\" class=\"d-none d-lg-table-cell\">DatePublication</th>
\t\t\t\t\t<th scope=\"col\" class=\"d-none d-lg-table-cell\">Auteur</th>
\t\t\t\t\t<th scope=\"col\">Edit</th>
\t\t\t\t\t<th scope=\"col\">Delete</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody class=\"table-group-divider\">
\t\t\t\t{% for hobby in hobbies %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">{{ hobby.Id }}</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/AdminHobby/show/{{hobby.id}}\" class=\"btn btn-link\">{{ hobby.Titre }}</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"d-none d-lg-table-cell\">{{ hobby.DatePublication|date('d/m/Y') }}</td>
\t\t\t\t\t\t<td class=\"d-none d-lg-table-cell\">{{ hobby.Auteur }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/AdminHobby/update/{{hobby.id}}\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-square\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<form method=\"post\" action=\"/AdminHobby/delete\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"{{ hobby.id }}\" name=\"id\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"{{ token }}\" name=\"token\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{# <a href=\"/AdminHobby/delete/{{hobby.Id}}\" class=\"btn btn-danger btn-sm\"></a></td> #}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "Admin/Hobby/list.html.twig", "C:\\wamp64\\www\\hobbymatch\\src\\View\\Admin\\Hobby\\list.html.twig");
    }
}
