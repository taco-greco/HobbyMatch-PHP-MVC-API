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
class __TwigTemplate_53f8fd9dfdc533c392eff69aa43fb86c extends Template
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
<table class=\"table\">
<thead>
<tr>
<th scope=\"col\">Id</th>
<th scope=\"col\">Titre</th>
<th scope=\"col\">DatePublication</th>
<th scope=\"col\">Auteur</th>
<th scope=\"col\">Delete</th>
</tr>
</thead>
<tbody>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hobbies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 17
            yield "<tr>
<th scope=\"row\"><a href=\"#\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Id", [], "any", false, false, false, 18), "html", null, true);
            yield "</a></th>
<td><a href=\"/?controller=AdminHobby&action=show&param=";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Titre", [], "any", false, false, false, 19), "html", null, true);
            yield "</a></td>
<td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "DatePublication", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            yield "
<td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Auteur", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
<td><a href=\"/?controller=AdminHobby&action=delete&param=";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Id", [], "any", false, false, false, 22), "html", null, true);
            yield "\"><i class=\"bi bi-trash\"></i></a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hobby'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "</tbody>
</table>
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
        return array (  119 => 25,  110 => 22,  106 => 21,  102 => 20,  96 => 19,  92 => 18,  89 => 17,  85 => 16,  71 => 4,  64 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\"%}
{% block title %}{{parent()}}- Liste des Hobbies{% endblock%}
{% block body %}

<table class=\"table\">
<thead>
<tr>
<th scope=\"col\">Id</th>
<th scope=\"col\">Titre</th>
<th scope=\"col\">DatePublication</th>
<th scope=\"col\">Auteur</th>
<th scope=\"col\">Delete</th>
</tr>
</thead>
<tbody>
{% for hobby in hobbies %}
<tr>
<th scope=\"row\"><a href=\"#\">{{ hobby.Id }}</a></th>
<td><a href=\"/?controller=AdminHobby&action=show&param={{hobby.id}}\">{{ hobby.Titre }}</a></td>
<td>{{ hobby.DatePublication|date('d/m/Y') }}
<td>{{ hobby.Auteur }}</td>
<td><a href=\"/?controller=AdminHobby&action=delete&param={{hobby.Id}}\"><i class=\"bi bi-trash\"></i></a></td>
</tr>
{% endfor %}
</tbody>
</table>
{% endblock %}
", "Admin/Hobby/list.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Admin\\Hobby\\list.html.twig");
    }
}
