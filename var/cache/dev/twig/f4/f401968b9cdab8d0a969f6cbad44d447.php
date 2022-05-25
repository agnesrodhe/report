<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* proj/aboutProj.html.twig */
class __TwigTemplate_4d7ad772908a3e3e80ce18671acf98a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "proj/baseProj.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/aboutProj.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/aboutProj.html.twig"));

        $this->parent = $this->loadTemplate("proj/baseProj.html.twig", "proj/aboutProj.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>OM projekt</h1>
<p>som berättar någorlunda utförligt om ditt projekt och vad det handlar om.</p>

<h2>Dokumentation</h2>
<p>
    Länk till dokumentationen som är genererad via phpdoc.</p>
    <p>Länk till rapporten från phpmetrics.</p>
    <p>Länk till ditt GitHub repo.</p>
    <p>Länk till Scrutinizer för ditt repo.
</p>

<h2>Kodkvalitet</h2>

<p>Din about-sida skall innehålla en summering där du berättar om projektets kodkvalitet. Berätta vilka eventuella åtgärder du gjort för att kvalitetssäkra projektet och hur du jobbat med kodkvaliteten och vilka verktyg du använt. Har du fokuserat på några speciella saker, verktyg eller metrics, så kan du berätta om dem.</p>



<p>Jag ska kolla på 4.a stress och mobbning</p>
<p>4.4 utbildningsnivå</p>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/aboutProj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"proj/baseProj.html.twig\" %}

{% block content %}
<h1>OM projekt</h1>
<p>som berättar någorlunda utförligt om ditt projekt och vad det handlar om.</p>

<h2>Dokumentation</h2>
<p>
    Länk till dokumentationen som är genererad via phpdoc.</p>
    <p>Länk till rapporten från phpmetrics.</p>
    <p>Länk till ditt GitHub repo.</p>
    <p>Länk till Scrutinizer för ditt repo.
</p>

<h2>Kodkvalitet</h2>

<p>Din about-sida skall innehålla en summering där du berättar om projektets kodkvalitet. Berätta vilka eventuella åtgärder du gjort för att kvalitetssäkra projektet och hur du jobbat med kodkvaliteten och vilka verktyg du använt. Har du fokuserat på några speciella saker, verktyg eller metrics, så kan du berätta om dem.</p>



<p>Jag ska kolla på 4.a stress och mobbning</p>
<p>4.4 utbildningsnivå</p>

{% endblock %}", "proj/aboutProj.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/proj/aboutProj.html.twig");
    }
}
