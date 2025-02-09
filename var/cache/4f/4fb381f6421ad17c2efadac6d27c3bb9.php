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
class __TwigTemplate_4fc0a1c3a271ec158fcc2d7b8c0bd45e extends Template
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
        yield "<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t\t<title>Simple Transactional Email</title>
\t\t<style>
\t\t\tmedia=\"all\"
\t\t\ttype=\"text/css\"
\t\t\t/* -------------------------------------
    GLOBAL RESETS
------------------------------------- */

\t\t\tbody {
\t\t\t\tfont-family: Helvetica, sans-serif;
\t\t\t\t-webkit-font-smoothing: antialiased;
\t\t\t\tfont-size: 16px;
\t\t\t\tline-height: 1.3;
\t\t\t\t-ms-text-size-adjust: 100%;
\t\t\t\t-webkit-text-size-adjust: 100%;
\t\t\t}

\t\t\ttable {
\t\t\t\tborder-collapse: separate;
\t\t\t\tmso-table-lspace: 0;
\t\t\t\tmso-table-rspace: 0;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\ttable td {
\t\t\t\tfont-family: Helvetica, sans-serif;
\t\t\t\tfont-size: 16px;
\t\t\t\tvertical-align: top;
\t\t\t}
\t\t\t/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */

\t\t\tbody {
\t\t\t\tbackground-color: #f4f5f6;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\t.body {
\t\t\t\tbackground-color: #f4f5f6;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.container {
\t\t\t\tmargin: 0 auto !important;
\t\t\t\tmax-width: 600px;
\t\t\t\tpadding: 24px 0 0 !important;
\t\t\t\twidth: 600px;
\t\t\t}

\t\t\t.content {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tdisplay: block;
\t\t\t\tmargin: 0 auto;
\t\t\t\tmax-width: 600px;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */

\t\t\t.main {
\t\t\t\tbackground: #ffffff;
\t\t\t\tborder: 1px solid #eaebed;
\t\t\t\tborder-radius: 16px;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.wrapper {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tpadding: 24px;
\t\t\t}

\t\t\t.footer {
\t\t\t\tclear: both;
\t\t\t\tpadding-top: 24px;
\t\t\t\ttext-align: center;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.footer td,
\t\t\t.footer p,
\t\t\t.footer span,
\t\t\t.footer a {
\t\t\t\tcolor: #9a9ea6;
\t\t\t\tfont-size: 16px;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */

\t\t\tp {
\t\t\t\tfont-family: Helvetica, sans-serif;
\t\t\t\tfont-size: 16px;
\t\t\t\tfont-weight: normal;
\t\t\t\tmargin: 0 0 16px;
\t\t\t}

\t\t\ta {
\t\t\t\tcolor: #0867ec;
\t\t\t\ttext-decoration: underline;
\t\t\t}
\t\t\t/* -------------------------------------
    BUTTONS
------------------------------------- */

\t\t\t.btn {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tmin-width: 100% !important;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn > tbody > tr > td {
\t\t\t\tpadding-bottom: 16px;
\t\t\t}

\t\t\t.btn table {
\t\t\t\twidth: auto;
\t\t\t}

\t\t\t.btn table td {
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tborder-radius: 4px;
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.btn a {
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tborder: solid 2px #0867ec;
\t\t\t\tborder-radius: 4px;
\t\t\t\tbox-sizing: border-box;
\t\t\t\tcolor: #0867ec;
\t\t\t\tcursor: pointer;
\t\t\t\tdisplay: inline-block;
\t\t\t\tfont-size: 16px;
\t\t\t\tfont-weight: bold;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 12px 24px;
\t\t\t\ttext-decoration: none;
\t\t\t\ttext-transform: capitalize;
\t\t\t}

\t\t\t.btn-primary table td {
\t\t\t\tbackground-color: #0867ec;
\t\t\t}

\t\t\t.btn-primary a {
\t\t\t\tbackground-color: #0867ec;
\t\t\t\tborder-color: #0867ec;
\t\t\t\tcolor: #ffffff;
\t\t\t}

\t\t\t@media all {
\t\t\t\t.btn-primary table td:hover {
\t\t\t\t\tbackground-color: #ec0867 !important;
\t\t\t\t}
\t\t\t\t.btn-primary a:hover {
\t\t\t\t\tbackground-color: #ec0867 !important;
\t\t\t\t\tborder-color: #ec0867 !important;
\t\t\t\t}
\t\t\t}

\t\t\t/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */

\t\t\t.last {
\t\t\t\tmargin-bottom: 0;
\t\t\t}

\t\t\t.first {
\t\t\t\tmargin-top: 0;
\t\t\t}

\t\t\t.align-center {
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.align-right {
\t\t\t\ttext-align: right;
\t\t\t}

\t\t\t.align-left {
\t\t\t\ttext-align: left;
\t\t\t}

\t\t\t.text-link {
\t\t\t\tcolor: #0867ec !important;
\t\t\t\ttext-decoration: underline !important;
\t\t\t}

\t\t\t.clear {
\t\t\t\tclear: both;
\t\t\t}

\t\t\t.mt0 {
\t\t\t\tmargin-top: 0;
\t\t\t}

\t\t\t.mb0 {
\t\t\t\tmargin-bottom: 0;
\t\t\t}

\t\t\t.preheader {
\t\t\t\tcolor: transparent;
\t\t\t\tdisplay: none;
\t\t\t\theight: 0;
\t\t\t\tmax-height: 0;
\t\t\t\tmax-width: 0;
\t\t\t\topacity: 0;
\t\t\t\toverflow: hidden;
\t\t\t\tmso-hide: all;
\t\t\t\tvisibility: hidden;
\t\t\t\twidth: 0;
\t\t\t}

\t\t\t.powered-by a {
\t\t\t\ttext-decoration: none;
\t\t\t}

\t\t\t/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */

\t\t\t@media only screen and(max-width: 640px) {
\t\t\t\t.main p,
\t\t\t\t.main td,
\t\t\t\t.main span {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.wrapper {
\t\t\t\t\tpadding: 8px !important;
\t\t\t\t}
\t\t\t\t.content {
\t\t\t\t\tpadding: 0 !important;
\t\t\t\t}
\t\t\t\t.container {
\t\t\t\t\tpadding: 8px 0 0 !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.main {
\t\t\t\t\tborder-left-width: 0 !important;
\t\t\t\t\tborder-radius: 0 !important;
\t\t\t\t\tborder-right-width: 0 !important;
\t\t\t\t}
\t\t\t\t.btn table {
\t\t\t\t\tmax-width: 100% !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.btn a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\tmax-width: 100% !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t}
\t\t\t/* -------------------------------------
    PRESERVE THESE STYLES IN THE HEAD
------------------------------------- */

\t\t\t@media all {
\t\t\t\t.ExternalClass {
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t\t.ExternalClass,
\t\t\t\t.ExternalClass p,
\t\t\t\t.ExternalClass span,
\t\t\t\t.ExternalClass font,
\t\t\t\t.ExternalClass td,
\t\t\t\t.ExternalClass div {
\t\t\t\t\tline-height: 100%;
\t\t\t\t}
\t\t\t\t.apple-link a {
\t\t\t\t\tcolor: inherit !important;
\t\t\t\t\tfont-family: inherit !important;
\t\t\t\t\tfont-size: inherit !important;
\t\t\t\t\tfont-weight: inherit !important;
\t\t\t\t\tline-height: inherit !important;
\t\t\t\t\ttext-decoration: none !important;
\t\t\t\t}
\t\t\t\t#MessageViewBody a {
\t\t\t\t\tcolor: inherit;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\tfont-size: inherit;
\t\t\t\t\tfont-family: inherit;
\t\t\t\t\tfont-weight: inherit;
\t\t\t\t\tline-height: inherit;
\t\t\t\t}
\t\t\t}

\t\t</style>
\t</head>
\t<body>

\t\t<p>Bonjour Admin,</p>
\t\t<p>Un nouvel Hobby vient d'être ajouté, voici les informations .</p>
\t\t<p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Titre :</span>
\t\t\t\t\t";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Titre", [], "any", false, false, false, 307), "html", null, true);
        yield "</li>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Auteur :</span>
\t\t\t\t\t";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Auteur", [], "any", false, false, false, 310), "html", null, true);
        yield "</li>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Date Publication :</span>
\t\t\t\t\t";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,         // line 314
($context["hobby"] ?? null), "DatePublication", [], "any", false, false, false, 314), "Y-m-d"), "html", null, true);
        yield "</li>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Description :</span>
\t\t\t\t\t";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Description", [], "any", false, false, false, 317), "html", null, true);
        // line 318
        yield "</li>
\t\t\t</ul>
\t\t</p>
\t\t<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-
\t\t\t\tprimary\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">
\t\t\t\t\t\t<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://hobbymatch.localhost/AdminHobby/show/";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Id", [], "any", false, false, false, 330), "html", null, true);
        yield "\" target=\"_blank\">Voir #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hobby"] ?? null), "Id", [], "any", false, false, false, 330), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
";
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
        return array (  385 => 330,  371 => 318,  369 => 317,  363 => 314,  362 => 313,  356 => 310,  350 => 307,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t\t<title>Simple Transactional Email</title>
\t\t<style>
\t\t\tmedia=\"all\"
\t\t\ttype=\"text/css\"
\t\t\t/* -------------------------------------
    GLOBAL RESETS
------------------------------------- */

\t\t\tbody {
\t\t\t\tfont-family: Helvetica, sans-serif;
\t\t\t\t-webkit-font-smoothing: antialiased;
\t\t\t\tfont-size: 16px;
\t\t\t\tline-height: 1.3;
\t\t\t\t-ms-text-size-adjust: 100%;
\t\t\t\t-webkit-text-size-adjust: 100%;
\t\t\t}

\t\t\ttable {
\t\t\t\tborder-collapse: separate;
\t\t\t\tmso-table-lspace: 0;
\t\t\t\tmso-table-rspace: 0;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\ttable td {
\t\t\t\tfont-family: Helvetica, sans-serif;
\t\t\t\tfont-size: 16px;
\t\t\t\tvertical-align: top;
\t\t\t}
\t\t\t/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */

\t\t\tbody {
\t\t\t\tbackground-color: #f4f5f6;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\t.body {
\t\t\t\tbackground-color: #f4f5f6;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.container {
\t\t\t\tmargin: 0 auto !important;
\t\t\t\tmax-width: 600px;
\t\t\t\tpadding: 24px 0 0 !important;
\t\t\t\twidth: 600px;
\t\t\t}

\t\t\t.content {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tdisplay: block;
\t\t\t\tmargin: 0 auto;
\t\t\t\tmax-width: 600px;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */

\t\t\t.main {
\t\t\t\tbackground: #ffffff;
\t\t\t\tborder: 1px solid #eaebed;
\t\t\t\tborder-radius: 16px;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.wrapper {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tpadding: 24px;
\t\t\t}

\t\t\t.footer {
\t\t\t\tclear: both;
\t\t\t\tpadding-top: 24px;
\t\t\t\ttext-align: center;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.footer td,
\t\t\t.footer p,
\t\t\t.footer span,
\t\t\t.footer a {
\t\t\t\tcolor: #9a9ea6;
\t\t\t\tfont-size: 16px;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */

\t\t\tp {
\t\t\t\tfont-family: Helvetica, sans-serif;
\t\t\t\tfont-size: 16px;
\t\t\t\tfont-weight: normal;
\t\t\t\tmargin: 0 0 16px;
\t\t\t}

\t\t\ta {
\t\t\t\tcolor: #0867ec;
\t\t\t\ttext-decoration: underline;
\t\t\t}
\t\t\t/* -------------------------------------
    BUTTONS
------------------------------------- */

\t\t\t.btn {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tmin-width: 100% !important;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn > tbody > tr > td {
\t\t\t\tpadding-bottom: 16px;
\t\t\t}

\t\t\t.btn table {
\t\t\t\twidth: auto;
\t\t\t}

\t\t\t.btn table td {
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tborder-radius: 4px;
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.btn a {
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tborder: solid 2px #0867ec;
\t\t\t\tborder-radius: 4px;
\t\t\t\tbox-sizing: border-box;
\t\t\t\tcolor: #0867ec;
\t\t\t\tcursor: pointer;
\t\t\t\tdisplay: inline-block;
\t\t\t\tfont-size: 16px;
\t\t\t\tfont-weight: bold;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 12px 24px;
\t\t\t\ttext-decoration: none;
\t\t\t\ttext-transform: capitalize;
\t\t\t}

\t\t\t.btn-primary table td {
\t\t\t\tbackground-color: #0867ec;
\t\t\t}

\t\t\t.btn-primary a {
\t\t\t\tbackground-color: #0867ec;
\t\t\t\tborder-color: #0867ec;
\t\t\t\tcolor: #ffffff;
\t\t\t}

\t\t\t@media all {
\t\t\t\t.btn-primary table td:hover {
\t\t\t\t\tbackground-color: #ec0867 !important;
\t\t\t\t}
\t\t\t\t.btn-primary a:hover {
\t\t\t\t\tbackground-color: #ec0867 !important;
\t\t\t\t\tborder-color: #ec0867 !important;
\t\t\t\t}
\t\t\t}

\t\t\t/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */

\t\t\t.last {
\t\t\t\tmargin-bottom: 0;
\t\t\t}

\t\t\t.first {
\t\t\t\tmargin-top: 0;
\t\t\t}

\t\t\t.align-center {
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.align-right {
\t\t\t\ttext-align: right;
\t\t\t}

\t\t\t.align-left {
\t\t\t\ttext-align: left;
\t\t\t}

\t\t\t.text-link {
\t\t\t\tcolor: #0867ec !important;
\t\t\t\ttext-decoration: underline !important;
\t\t\t}

\t\t\t.clear {
\t\t\t\tclear: both;
\t\t\t}

\t\t\t.mt0 {
\t\t\t\tmargin-top: 0;
\t\t\t}

\t\t\t.mb0 {
\t\t\t\tmargin-bottom: 0;
\t\t\t}

\t\t\t.preheader {
\t\t\t\tcolor: transparent;
\t\t\t\tdisplay: none;
\t\t\t\theight: 0;
\t\t\t\tmax-height: 0;
\t\t\t\tmax-width: 0;
\t\t\t\topacity: 0;
\t\t\t\toverflow: hidden;
\t\t\t\tmso-hide: all;
\t\t\t\tvisibility: hidden;
\t\t\t\twidth: 0;
\t\t\t}

\t\t\t.powered-by a {
\t\t\t\ttext-decoration: none;
\t\t\t}

\t\t\t/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */

\t\t\t@media only screen and(max-width: 640px) {
\t\t\t\t.main p,
\t\t\t\t.main td,
\t\t\t\t.main span {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.wrapper {
\t\t\t\t\tpadding: 8px !important;
\t\t\t\t}
\t\t\t\t.content {
\t\t\t\t\tpadding: 0 !important;
\t\t\t\t}
\t\t\t\t.container {
\t\t\t\t\tpadding: 8px 0 0 !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.main {
\t\t\t\t\tborder-left-width: 0 !important;
\t\t\t\t\tborder-radius: 0 !important;
\t\t\t\t\tborder-right-width: 0 !important;
\t\t\t\t}
\t\t\t\t.btn table {
\t\t\t\t\tmax-width: 100% !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.btn a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\tmax-width: 100% !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t}
\t\t\t/* -------------------------------------
    PRESERVE THESE STYLES IN THE HEAD
------------------------------------- */

\t\t\t@media all {
\t\t\t\t.ExternalClass {
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t\t.ExternalClass,
\t\t\t\t.ExternalClass p,
\t\t\t\t.ExternalClass span,
\t\t\t\t.ExternalClass font,
\t\t\t\t.ExternalClass td,
\t\t\t\t.ExternalClass div {
\t\t\t\t\tline-height: 100%;
\t\t\t\t}
\t\t\t\t.apple-link a {
\t\t\t\t\tcolor: inherit !important;
\t\t\t\t\tfont-family: inherit !important;
\t\t\t\t\tfont-size: inherit !important;
\t\t\t\t\tfont-weight: inherit !important;
\t\t\t\t\tline-height: inherit !important;
\t\t\t\t\ttext-decoration: none !important;
\t\t\t\t}
\t\t\t\t#MessageViewBody a {
\t\t\t\t\tcolor: inherit;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\tfont-size: inherit;
\t\t\t\t\tfont-family: inherit;
\t\t\t\t\tfont-weight: inherit;
\t\t\t\t\tline-height: inherit;
\t\t\t\t}
\t\t\t}

\t\t</style>
\t</head>
\t<body>

\t\t<p>Bonjour Admin,</p>
\t\t<p>Un nouvel Hobby vient d'être ajouté, voici les informations .</p>
\t\t<p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Titre :</span>
\t\t\t\t\t{{ hobby.Titre }}</li>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Auteur :</span>
\t\t\t\t\t{{ hobby.Auteur }}</li>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Date Publication :</span>
\t\t\t\t\t{{
hobby.DatePublication|date(\"Y-m-d\") }}</li>
\t\t\t\t<li>
\t\t\t\t\t<span style=\"font-weight: bold\">Description :</span>
\t\t\t\t\t{{ hobby.Description
}}</li>
\t\t\t</ul>
\t\t</p>
\t\t<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-
\t\t\t\tprimary\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">
\t\t\t\t\t\t<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://hobbymatch.localhost/AdminHobby/show/{{ hobby.Id }}\" target=\"_blank\">Voir #{{ hobby.Id }}</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
", "Mailing/hobby.add.html.twig", "C:\\wamp64\\www\\hobbymatch\\src\\View\\Mailing\\hobby.add.html.twig");
    }
}
