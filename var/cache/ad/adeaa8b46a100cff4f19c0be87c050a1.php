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

/* User/login.html.twig */
class __TwigTemplate_3d65dbd002be0a8806d02ab17fc2ecba extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "User/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Login - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
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
        yield "<div class=\"d-flex justify-content-center align-items-center vh-100\">
    <div class=\"card\" style=\"width: 24rem;\">
        <div class=\"card-body\">
            <h1 class=\"card-title text-center\">Login</h1>
            <form method=\"post\">
                <div class=\"mb-3\">
                    <input type=\"email\" class=\"form-control\" placeholder=\"Votre mail\" name=\"mail\" required>
                </div>
                <div class=\"mb-3\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" required>
                </div>
                <button type=\"submit\" class=\"btn btn-primary w-100\">Valider</button>
            </form>
            <p class=\"mt-3 text-center\">Pas encore de compte ? <a href=\"/user/create\">Créez en un</a></p>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "User/login.html.twig";
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
        return array (  71 => 4,  64 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Login - {{ parent() }}{% endblock %}
{% block body %}
<div class=\"d-flex justify-content-center align-items-center vh-100\">
    <div class=\"card\" style=\"width: 24rem;\">
        <div class=\"card-body\">
            <h1 class=\"card-title text-center\">Login</h1>
            <form method=\"post\">
                <div class=\"mb-3\">
                    <input type=\"email\" class=\"form-control\" placeholder=\"Votre mail\" name=\"mail\" required>
                </div>
                <div class=\"mb-3\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" required>
                </div>
                <button type=\"submit\" class=\"btn btn-primary w-100\">Valider</button>
            </form>
            <p class=\"mt-3 text-center\">Pas encore de compte ? <a href=\"/user/create\">Créez en un</a></p>
        </div>
    </div>
</div>
{% endblock %}", "User/login.html.twig", "C:\\wamp64\\www\\php-individuel\\src\\View\\User\\login.html.twig");
    }
}
