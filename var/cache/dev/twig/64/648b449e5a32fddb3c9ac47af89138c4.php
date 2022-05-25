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

/* kmom04.markdown.twig */
class __TwigTemplate_7f3954dc4455b4f7e7db979da48489fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom04.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom04.markdown.twig"));

        // line 1
        echo "#### Kmom04

##### Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.

Nu har jag jobbat med kmom04 och därmed fått skriva mina första test med hjälp av PHPUnit. Jag tycker att det är jätteroligt att jobba på det här sättet och med det här sättet menar jag att få snabb feedback på hur det blir och vad för tester jag behöver lägga till. Det är väldigt snyggt med phpunit att det går att få en rapport och se tydligt vad jag behöver komplettera med. Jag tycker också att det har blivit tydligare den här gången när jag skriver test HUR jag ska tänka här jag skriver test. Det var bra genomgångar av både Mikael och Marie.

##### Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?

Jag har skrivit tester för alla modellklasser jag använder när jag skriver mitt kortspel 21. Det blev sammanlagt fem testklasser. I dessa fem har jag uppnått 100% kodtäckning men jag har däremot inte testat varje rad flera gånger och det kan ju så klart ha missats saker ändå med andra ord.

##### Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet?

Jag upplevde stora delar av min kod som testbar. Det som krånglade och som var mer utmanande var när jag använde mig av klasser i klasser samt när jag anropade metoder från andra klasser. Det gjorde det svårt att skriva test som bara testade den tänkta funktionen. Så vissa av mina tester testar flera funktioner i samma test. Game-klassen och Player-Klassen var helt klart de svåraste att testa. Jag tycker att jag har lyckats ganska bra men tror att vissa saker hade varit enklare. Till exempel om jag hade haft get och set-metoder på alla Properties i varje klass så hade det varit enklare att testa tror jag.

##### Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.

Jag provade att skriva om några delar av min kod men återgick sedan till min ursprungliga för att det blev liksom inte bättre rent kodmässigt. Men en del saker ändrade jag, till exempel att man kunde skicka med argument till konstruktion i game och player för att kunna sätta en summa och på så vis styra vem som skulle vinna och för att i sin tur kunna prova funktioner om vinnaren i game-klassen. Jag funderade mycket på huruvida jag kan ändra på min kod för att kunna köra vissa tester, det kändes lite oklart, vad tänker ni om det?

##### Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.

Jag upplever att jag förstod min kod bättre av att skriva tester till den och framförallt eftersom jag skrev dokumentation om den i filerna för att generera phpdoc. Det var oerhört lärorikt att få sätta ord på vad jag valt att skapa för kod och det tänker jag ger en snyggare kod. Jag tror absolut att testbar kod kan upplevas som snygg och ren. Jag märkte ju själv att de funktioner som gjorde mer än en sak var mycket svårare att testa och det var ju S i SOLID att varje funktion/metod endast ska fokusera på en sak var.

##### Vilken är din TIL för detta kmom?

Mitt TIL för det här kursmomentet är dokumentationen av kod. Jag känner att jag kommer ta med mig hur jag skriver dokumentationen och hur den processen kan hjälpa mig i kodskrivandet. ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "kmom04.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Kmom04

##### Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.

Nu har jag jobbat med kmom04 och därmed fått skriva mina första test med hjälp av PHPUnit. Jag tycker att det är jätteroligt att jobba på det här sättet och med det här sättet menar jag att få snabb feedback på hur det blir och vad för tester jag behöver lägga till. Det är väldigt snyggt med phpunit att det går att få en rapport och se tydligt vad jag behöver komplettera med. Jag tycker också att det har blivit tydligare den här gången när jag skriver test HUR jag ska tänka här jag skriver test. Det var bra genomgångar av både Mikael och Marie.

##### Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?

Jag har skrivit tester för alla modellklasser jag använder när jag skriver mitt kortspel 21. Det blev sammanlagt fem testklasser. I dessa fem har jag uppnått 100% kodtäckning men jag har däremot inte testat varje rad flera gånger och det kan ju så klart ha missats saker ändå med andra ord.

##### Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet?

Jag upplevde stora delar av min kod som testbar. Det som krånglade och som var mer utmanande var när jag använde mig av klasser i klasser samt när jag anropade metoder från andra klasser. Det gjorde det svårt att skriva test som bara testade den tänkta funktionen. Så vissa av mina tester testar flera funktioner i samma test. Game-klassen och Player-Klassen var helt klart de svåraste att testa. Jag tycker att jag har lyckats ganska bra men tror att vissa saker hade varit enklare. Till exempel om jag hade haft get och set-metoder på alla Properties i varje klass så hade det varit enklare att testa tror jag.

##### Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.

Jag provade att skriva om några delar av min kod men återgick sedan till min ursprungliga för att det blev liksom inte bättre rent kodmässigt. Men en del saker ändrade jag, till exempel att man kunde skicka med argument till konstruktion i game och player för att kunna sätta en summa och på så vis styra vem som skulle vinna och för att i sin tur kunna prova funktioner om vinnaren i game-klassen. Jag funderade mycket på huruvida jag kan ändra på min kod för att kunna köra vissa tester, det kändes lite oklart, vad tänker ni om det?

##### Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.

Jag upplever att jag förstod min kod bättre av att skriva tester till den och framförallt eftersom jag skrev dokumentation om den i filerna för att generera phpdoc. Det var oerhört lärorikt att få sätta ord på vad jag valt att skapa för kod och det tänker jag ger en snyggare kod. Jag tror absolut att testbar kod kan upplevas som snygg och ren. Jag märkte ju själv att de funktioner som gjorde mer än en sak var mycket svårare att testa och det var ju S i SOLID att varje funktion/metod endast ska fokusera på en sak var.

##### Vilken är din TIL för detta kmom?

Mitt TIL för det här kursmomentet är dokumentationen av kod. Jag känner att jag kommer ta med mig hur jag skriver dokumentationen och hur den processen kan hjälpa mig i kodskrivandet. ", "kmom04.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/kmom04.markdown.twig");
    }
}
