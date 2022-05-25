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
class __TwigTemplate_06e9b0b4aebd52a9693839ce74bbc86c extends Template
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
        echo "<div class=\"container\">
    <h1>Om projekt</h1>
    <p>Mitt projekt handlar om det globala målet nummer 4 - God utbildning för alla. Jag har valt det eftersom jag tycker att det är en otroligt viktig och demokratisk rättighet, att alla ska ha rätt och god tillgång till en trygg och säker utbildning. Jag har valt att framställa det här genom att hämta data från <a href=\"https://www.scb.se/hitta-statistik/statistik-efter-amne/miljo/miljoekonomi-och-hallbar-utveckling/indikatorer-for-hallbar-utveckling/\">SCBs hemsida</a>. Den data jag har valt ut handlar om mobbning samt om digitala färdigheter hos Sveriges befolkning. Datan har jag lagt i en databas och sedan har jag med hjälp av Chart.js framställt datan i diagram så att den ska kunna tas in på ett visuellt vis. Utöver detta har jag kompletterat med text och citat från olika källor.</p>
    
    <h2>Dokumentation</h2>
    <p>
        <a href=\"http://www.student.bth.se/~agro21/dbwebb-kurser/mvc/me/report/docs/api/\">Länk till dokumentationen som är genererad via phpdoc</a>.</p>
        <p><a href=\"http://www.student.bth.se/~agro21/dbwebb-kurser/mvc/me/report/docs/metrics/\">Länk till rapporten från phpmetrics.</a></p>
        <p><a href=\"https://github.com/agnesrodhe/report\">Länk till ditt GitHub repo.</a></p>
        <p><a href=\"https://scrutinizer-ci.com/g/agnesrodhe/report/\">Länk till Scrutinizers sida.</a></p>
        <p><a href=\"https://github.com/agnesrodhe/report/blob/main/README.md\">Länk till Scrutinizer-badges på Github.</a></p>
<div class=\"text\">
    <h2>Kodkvalitet</h2>
    <p>Jag har i projektet valt att försöka fokusera på att funktionern/metoderna ska ha en egen uppgift. Jag har även utifrån min förmåga försökt skriva test för att få en god code coverage. Jag skulle säga att kodkvaliteten på projektet kan bli bättre men utifrån förutsättningarna att genomföra ett sådant här projekt under tidsramen är relativt bra.</p>

    <p><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reset-proj");
        echo "\">Länk till reset av databasen.</a></p>
</div>

</div>


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
        return array (  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"proj/baseProj.html.twig\" %}

{% block content %}
<div class=\"container\">
    <h1>Om projekt</h1>
    <p>Mitt projekt handlar om det globala målet nummer 4 - God utbildning för alla. Jag har valt det eftersom jag tycker att det är en otroligt viktig och demokratisk rättighet, att alla ska ha rätt och god tillgång till en trygg och säker utbildning. Jag har valt att framställa det här genom att hämta data från <a href=\"https://www.scb.se/hitta-statistik/statistik-efter-amne/miljo/miljoekonomi-och-hallbar-utveckling/indikatorer-for-hallbar-utveckling/\">SCBs hemsida</a>. Den data jag har valt ut handlar om mobbning samt om digitala färdigheter hos Sveriges befolkning. Datan har jag lagt i en databas och sedan har jag med hjälp av Chart.js framställt datan i diagram så att den ska kunna tas in på ett visuellt vis. Utöver detta har jag kompletterat med text och citat från olika källor.</p>
    
    <h2>Dokumentation</h2>
    <p>
        <a href=\"http://www.student.bth.se/~agro21/dbwebb-kurser/mvc/me/report/docs/api/\">Länk till dokumentationen som är genererad via phpdoc</a>.</p>
        <p><a href=\"http://www.student.bth.se/~agro21/dbwebb-kurser/mvc/me/report/docs/metrics/\">Länk till rapporten från phpmetrics.</a></p>
        <p><a href=\"https://github.com/agnesrodhe/report\">Länk till ditt GitHub repo.</a></p>
        <p><a href=\"https://scrutinizer-ci.com/g/agnesrodhe/report/\">Länk till Scrutinizers sida.</a></p>
        <p><a href=\"https://github.com/agnesrodhe/report/blob/main/README.md\">Länk till Scrutinizer-badges på Github.</a></p>
<div class=\"text\">
    <h2>Kodkvalitet</h2>
    <p>Jag har i projektet valt att försöka fokusera på att funktionern/metoderna ska ha en egen uppgift. Jag har även utifrån min förmåga försökt skriva test för att få en god code coverage. Jag skulle säga att kodkvaliteten på projektet kan bli bättre men utifrån förutsättningarna att genomföra ett sådant här projekt under tidsramen är relativt bra.</p>

    <p><a href=\"{{ url(\"reset-proj\") }}\">Länk till reset av databasen.</a></p>
</div>

</div>


{% endblock %}", "proj/aboutProj.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/proj/aboutProj.html.twig");
    }
}
