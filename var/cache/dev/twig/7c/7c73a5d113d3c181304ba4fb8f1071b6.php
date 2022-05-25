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

/* kmom03.markdown.twig */
class __TwigTemplate_6f203ba7ae12726f2aee0f8faa1051cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom03.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom03.markdown.twig"));

        // line 1
        echo "#### Kmom03

##### Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?

Jag hade stor hjälp av att göra ett flödesschema inför att jag skulle genomföra uppgiften med kortspelet. Det handlade mycket om att få en struktur på problemet och få en överblick på vad som behöver hända och när. Programmet blev inte helt så som jag gjorde flödesschemat men jag tänker att det inte alltid är meningen heller utan att jag göra en mall som sedan följs men förbättras under tiden. Det känns, av någon anledning, lite motigt att inte direkt börja skriva kod men jag tror att jag ska försöka göra liknande framöver och se om det kan hjälpa mig då också. Det som var lite oklart tyckte jag var skillnaden på psuedokod och flödesdiagram, försökte hitta bra information om det men tyckte att det var svårt. 

##### Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?

Jag valde att lösa uppgiften genom att göra en GameController från vilken jag skapade 5 routes. En startsida med information om spelet, en start-sida, en draw-sida, en stod-sida och en dokumentations-sida. Jag skapade en Game-klass som sparade all information om spelet och det var även den som jag sparade i sessionen. Jag tänkte först att jag inte skulle skapa instanser av Player och Deck inuti Game-klassen eftersom det inte är att följa Dependency inversion principle men valde till slut att göra det ändå eftersom jag ville försöka ha så lite kod som möjligt i kontrollen samt smidigt kunna spara undan all info i session. Designen kan helt klart göras bättre på sidan men eftersom det har tagit mycket tid att genomföra kursmomenten så här långt så har jag inte haft möjlighet att lägga så mycket tid på designen. 

##### Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?

När vi nu har arbetat ett tag i Symfony så märker jag att det i stort liknar till exempel React och Flask, andra ramverk som vi har arbetat med. Uppdelningen av kod och vilka delar som ska finnas med gör mig inte fullt så stressad längre till skillnad från första veckan. 

##### Vilken är din TIL för detta kmom?

Jag skulle säga att mitt TIL för den här veckan är att git kan krångla men att det går att lösa med lite hjälp. Jag fick lov att ta bort mitt mvc-repo och klona ett nytt och därefter lägga in min kod som jag hade sparat undan. Allt det här eftersom jag inte kunde göra dbwebb update - det stör mig lite att jag inte lyckades förstå vad problemet var men jag är väldigt glad att jag hittade en lösning så att jag kunde fortsätta med kodningen och problemlösningen. Nu ska jag strax börja med kmom04!


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "kmom03.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Kmom03

##### Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?

Jag hade stor hjälp av att göra ett flödesschema inför att jag skulle genomföra uppgiften med kortspelet. Det handlade mycket om att få en struktur på problemet och få en överblick på vad som behöver hända och när. Programmet blev inte helt så som jag gjorde flödesschemat men jag tänker att det inte alltid är meningen heller utan att jag göra en mall som sedan följs men förbättras under tiden. Det känns, av någon anledning, lite motigt att inte direkt börja skriva kod men jag tror att jag ska försöka göra liknande framöver och se om det kan hjälpa mig då också. Det som var lite oklart tyckte jag var skillnaden på psuedokod och flödesdiagram, försökte hitta bra information om det men tyckte att det var svårt. 

##### Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?

Jag valde att lösa uppgiften genom att göra en GameController från vilken jag skapade 5 routes. En startsida med information om spelet, en start-sida, en draw-sida, en stod-sida och en dokumentations-sida. Jag skapade en Game-klass som sparade all information om spelet och det var även den som jag sparade i sessionen. Jag tänkte först att jag inte skulle skapa instanser av Player och Deck inuti Game-klassen eftersom det inte är att följa Dependency inversion principle men valde till slut att göra det ändå eftersom jag ville försöka ha så lite kod som möjligt i kontrollen samt smidigt kunna spara undan all info i session. Designen kan helt klart göras bättre på sidan men eftersom det har tagit mycket tid att genomföra kursmomenten så här långt så har jag inte haft möjlighet att lägga så mycket tid på designen. 

##### Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?

När vi nu har arbetat ett tag i Symfony så märker jag att det i stort liknar till exempel React och Flask, andra ramverk som vi har arbetat med. Uppdelningen av kod och vilka delar som ska finnas med gör mig inte fullt så stressad längre till skillnad från första veckan. 

##### Vilken är din TIL för detta kmom?

Jag skulle säga att mitt TIL för den här veckan är att git kan krångla men att det går att lösa med lite hjälp. Jag fick lov att ta bort mitt mvc-repo och klona ett nytt och därefter lägga in min kod som jag hade sparat undan. Allt det här eftersom jag inte kunde göra dbwebb update - det stör mig lite att jag inte lyckades förstå vad problemet var men jag är väldigt glad att jag hittade en lösning så att jag kunde fortsätta med kodningen och problemlösningen. Nu ska jag strax börja med kmom04!


", "kmom03.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/kmom03.markdown.twig");
    }
}
