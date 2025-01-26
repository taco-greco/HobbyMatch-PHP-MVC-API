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

/* Contact/form.html.twig */
class __TwigTemplate_cb18dbc148994af24e45413bbb6ebfd2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Contact/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
\t- Contactez nous
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t<h1>Formullaire de contact</h1>

\t<form name=\"contact\" method=\"post\" enctype=\"multipart/form-data\" action=\"/Contact/send\">
\t\t<input type=\"text\" name=\"nom\" required placeholder=\"Votre nom\" class=\"form-control\">
\t\t<input type=\"email\" name=\"mail\" required placeholder=\"Votre mail\" class=\"form-
\t\t\tcontrol\">
\t\t<textarea name=\"message\" class=\"form-control\">Votre message</textarea>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
\t</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Contact/form.html.twig";
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
        return array (  75 => 9,  68 => 8,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\t{{parent() }}
\t- Contactez nous
{% endblock %}

{% block body %}
\t<h1>Formullaire de contact</h1>

\t<form name=\"contact\" method=\"post\" enctype=\"multipart/form-data\" action=\"/Contact/send\">
\t\t<input type=\"text\" name=\"nom\" required placeholder=\"Votre nom\" class=\"form-control\">
\t\t<input type=\"email\" name=\"mail\" required placeholder=\"Votre mail\" class=\"form-
\t\t\tcontrol\">
\t\t<textarea name=\"message\" class=\"form-control\">Votre message</textarea>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
\t</form>
{% endblock %}
", "Contact/form.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Contact\\form.html.twig");
    }
}
