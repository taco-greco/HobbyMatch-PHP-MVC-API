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
        // line 4
        yield "\t";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
\t- Les derniers Hobbies
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
        yield "\t<h1 class=\"pb-3\">Voici les derniers 20 hobbies :</h1>

\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hobbies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 13
            yield "\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 border-dark\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\t";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "Titre", [], "any", false, false, false, 18), "html", null, true);
            yield "
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<a href=\"/AdminHobby/show/";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\" class=\"btn btn-dark\">
                                Lire le Hobby
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-up-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 29
            if (($this->env->getFunction('file_exist')->getCallable()(((("./uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "ImageRepository", [], "any", false, false, false, 29)) . "/") . CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "ImageFileName", [], "any", false, false, false, 29))) && (CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "ImageFileName", [], "any", false, false, false, 29) != ""))) {
                // line 30
                yield "\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t<img src=\"/uploads/images/";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "ImageRepository", [], "any", false, false, false, 31), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hobby"], "ImageFileName", [], "any", false, false, false, 31), "html", null, true);
                yield "\" class=\"card-img-bottom rounded fixed-size-img\" alt=\"...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 34
            yield "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hobby'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "\t</div>
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
        return array (  129 => 37,  121 => 34,  113 => 31,  110 => 30,  108 => 29,  97 => 21,  91 => 18,  84 => 13,  80 => 12,  75 => 9,  68 => 8,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\t{{ parent() }}
\t- Les derniers Hobbies
{% endblock %}

{% block body %}
\t<h1 class=\"pb-3\">Voici les derniers 20 hobbies :</h1>

\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4\">
\t\t{% for hobby in hobbies %}
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 border-dark\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\t{{ hobby.Titre }}
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<a href=\"/AdminHobby/show/{{hobby.id}}\" class=\"btn btn-dark\">
                                Lire le Hobby
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-up-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if file_exist('./uploads/images/' ~ hobby.ImageRepository ~ '/' ~ hobby.ImageFileName) and hobby.ImageFileName != \"\" %}
\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t<img src=\"/uploads/images/{{ hobby.ImageRepository }}/{{ hobby.ImageFileName }}\" class=\"card-img-bottom rounded fixed-size-img\" alt=\"...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "Hobby/index.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\Hobby\\index.html.twig");
    }
}
