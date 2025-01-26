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

/* Mailing/hobby.add.html.twig */
class __TwigTemplate_34dd78f0976ca9f5c27fefbc2bc9b937 extends Template
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
        yield "<p>Bonjour Admin,</p>
<p>Un nouvel Hobby vient d'être ajouté, voici les informations .</p>
<p>
<ul>
<li><span style=\"font-weight: bold\">Titre :</span> ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</li>
<li><span style=\"font-weight: bold\">Auteur :</span> ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 6), "html", null, true);
        yield "</li>
<li><span style=\"font-weight: bold\">Date Publication :</span> ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 8), "Y-m-d"), "html", null, true);
        yield "</li>
<li><span style=\"font-weight: bold\">Description :</span> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Description", [], "any", false, false, false, 9), "html", null, true);
        // line 10
        yield "</li>
</ul>
</p>
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-
primary\">
<tbody>
<tr>
<td align=\"left\">
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tbody>
<tr>
<td> <a href=\"http://hobbymatch.localhost/AdminHobby/update/";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Id", [], "any", false, false, false, 21), "html", null, true);
        yield "\"
target=\"_blank\">Editer #";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Id", [], "any", false, false, false, 22), "html", null, true);
        yield "</a> </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Mailing/hobby.add.html.twig";
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
        return array (  80 => 22,  76 => 21,  63 => 10,  61 => 9,  57 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<p>Bonjour Admin,</p>
<p>Un nouvel Hobby vient d'être ajouté, voici les informations .</p>
<p>
<ul>
<li><span style=\"font-weight: bold\">Titre :</span> {{ hobby.Titre }}</li>
<li><span style=\"font-weight: bold\">Auteur :</span> {{ hobby.Auteur }}</li>
<li><span style=\"font-weight: bold\">Date Publication :</span> {{
hobby.DatePublication|date(\"Y-m-d\") }}</li>
<li><span style=\"font-weight: bold\">Description :</span> {{ hobby.Description
}}</li>
</ul>
</p>
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-
primary\">
<tbody>
<tr>
<td align=\"left\">
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tbody>
<tr>
<td> <a href=\"http://hobbymatch.localhost/AdminHobby/update/{{ hobby.Id }}\"
target=\"_blank\">Editer #{{ hobby.Id }}</a> </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>", "Mailing/hobby.add.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Mailing\\hobby.add.html.twig");
    }
}
