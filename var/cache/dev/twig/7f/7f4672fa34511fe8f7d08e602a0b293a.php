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

/* kmom05.markdown.twig */
class __TwigTemplate_a3ef59dcc079d2720ac09df0bd2a33f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom05.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom05.markdown.twig"));

        // line 1
        echo "#### Kmom05

##### Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen?
Nu har jag jobbat igenom övningen och uppgiften som handlar om ORM och att kopplat ihop sidan med en databas. Övningen var en bra introduktion till hur jag skulle ta mig an problemet. Jag behövde lite handledning när det kom till att förstå i vilken ordning jag skulle göra vad. Jag lyckades skapa en tabell utan parametrar och då visste jag inte hur jag skulle ta mig vidare, det jag gjorde då var att ta bort filerna som hade skapats när jag kört kommandot make:entity och sedan gjorde jag om proceduren. Att jag gjorde fel blev ett tydligt läromoment för mig. Jag hade lite svårt att veta vilka kommandon jag skulle använda i sqlite3 i terminalen för att kolla hur tabellen var uppbyggd och vad som fanns i den, hittade ingen riktigt bra sida för att se vilka kommandon som skulle kunna vara till hjälp.

##### Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet? Gick det bra att jobba med ORM i CRUD eller vad anser du om det?
Efter övningen gjorde jag alltså uppgiften som var att skapa ett bibliotek med en boktabell. Det skulle gå att lägga till, uppdatera, radera och visa de olika böckerna i biblioteket. Till en början hade jag svårt att förstå hur jag skulle bygga upp den för när jag googlade på symfony, doctrine och form så kom det upp att Symfony hade något eget form-paket som man kunde använda sig av. Jag valde dock att inte använda mig av det utan skapa egna forms i html.twig-filer och använda POST och GET för att skicka information att lägga till i databasen. Jag försökte göra applikationen tydlig och använde mig ännu mer av Bootstrap den här gången för att få till snygga formulär.

##### Berätta om du gjorde (delar av) extrauppgiften med användare och login.
Jag gjorde inga extra uppgifter den här gången.

##### Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser?
Nu när vi har jobbat med ORM så kan jag säga att min känsla inte riktigt är att vi har jobbat mot en databas. Det känns som att vi har skrivit vanlig objektorienterad kod och att databasen bara var med i bakgrunden för att spara information. Det är likt att jobba med session och att spara undan information men jag gillar det här sättet ännu mer, det känns logiskt på ett annat vis än att spara i session. Jag vet inte om de går att likställa de två metoderna men på användningssättet är min upplevelse så. Jag tycker att det har fungerat jättesmidigt att göra den här applikationen, mer tydligt än i databaskursen men jag vet inte om det är för att jag har lärt mig saker eller för att det här var enklare.


##### Vilken är din TIL för detta kmom?
Mitt TIL för det här kursmomentet är hur jag ska strukturera POST och GET mellan formulär och controllern, jag fick helt enkelt prova mig fram och det gjorde att jag fick en förståelse och även ett självförtroende på att jag kan klara ganska mycket nu.";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "kmom05.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Kmom05

##### Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen?
Nu har jag jobbat igenom övningen och uppgiften som handlar om ORM och att kopplat ihop sidan med en databas. Övningen var en bra introduktion till hur jag skulle ta mig an problemet. Jag behövde lite handledning när det kom till att förstå i vilken ordning jag skulle göra vad. Jag lyckades skapa en tabell utan parametrar och då visste jag inte hur jag skulle ta mig vidare, det jag gjorde då var att ta bort filerna som hade skapats när jag kört kommandot make:entity och sedan gjorde jag om proceduren. Att jag gjorde fel blev ett tydligt läromoment för mig. Jag hade lite svårt att veta vilka kommandon jag skulle använda i sqlite3 i terminalen för att kolla hur tabellen var uppbyggd och vad som fanns i den, hittade ingen riktigt bra sida för att se vilka kommandon som skulle kunna vara till hjälp.

##### Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet? Gick det bra att jobba med ORM i CRUD eller vad anser du om det?
Efter övningen gjorde jag alltså uppgiften som var att skapa ett bibliotek med en boktabell. Det skulle gå att lägga till, uppdatera, radera och visa de olika böckerna i biblioteket. Till en början hade jag svårt att förstå hur jag skulle bygga upp den för när jag googlade på symfony, doctrine och form så kom det upp att Symfony hade något eget form-paket som man kunde använda sig av. Jag valde dock att inte använda mig av det utan skapa egna forms i html.twig-filer och använda POST och GET för att skicka information att lägga till i databasen. Jag försökte göra applikationen tydlig och använde mig ännu mer av Bootstrap den här gången för att få till snygga formulär.

##### Berätta om du gjorde (delar av) extrauppgiften med användare och login.
Jag gjorde inga extra uppgifter den här gången.

##### Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser?
Nu när vi har jobbat med ORM så kan jag säga att min känsla inte riktigt är att vi har jobbat mot en databas. Det känns som att vi har skrivit vanlig objektorienterad kod och att databasen bara var med i bakgrunden för att spara information. Det är likt att jobba med session och att spara undan information men jag gillar det här sättet ännu mer, det känns logiskt på ett annat vis än att spara i session. Jag vet inte om de går att likställa de två metoderna men på användningssättet är min upplevelse så. Jag tycker att det har fungerat jättesmidigt att göra den här applikationen, mer tydligt än i databaskursen men jag vet inte om det är för att jag har lärt mig saker eller för att det här var enklare.


##### Vilken är din TIL för detta kmom?
Mitt TIL för det här kursmomentet är hur jag ska strukturera POST och GET mellan formulär och controllern, jag fick helt enkelt prova mig fram och det gjorde att jag fick en förståelse och även ett självförtroende på att jag kan klara ganska mycket nu.", "kmom05.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/kmom05.markdown.twig");
    }
}
