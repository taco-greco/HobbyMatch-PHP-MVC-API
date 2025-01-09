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

/* Hobby/index.html.twig */
class __TwigTemplate_e8aee39d0f72bde01636212e0c5b6371 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Hobby/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " - Les derniers Hobbies ";
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
        yield "<h1>Voici les derniers 20 hobbies :</h1>
<ul>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hobbies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 9
            yield "    <li> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Titre", [], "any", false, false, false, 9), "html", null, true);
            yield " </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hobby'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Hobby/index.html.twig";
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
        return array (  89 => 11,  80 => 9,  76 => 8,  72 => 6,  65 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{%block title %} {{parent()}} - Les derniers Hobbies {%endblock%}

{% block body %}
<h1>Voici les derniers 20 hobbies :</h1>
<ul>
{% for hobby in hobbies %}
    <li> {{hobby.Titre}} </li>
{% endfor %}
</ul>
{% endblock %}", "Hobby/index.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Hobby\\index.html.twig");
    }
}
