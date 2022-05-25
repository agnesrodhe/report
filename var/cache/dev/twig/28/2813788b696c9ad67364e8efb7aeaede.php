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

/* kmom01.markdown.twig */
class __TwigTemplate_2906b3b8d9d1e0657d317849011755ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom01.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom01.markdown.twig"));

        // line 1
        echo "#### Kmom01


##### Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.

I den här kursen kommer vi ju, som nämnt, att jobba med objektorientering och det är något som jag har kommit i kontakt med och arbetat med tidigare i flera olika sammanhang. I utbildningen jag gick på Kvinnofolkhögskolan under förra året jobbade vi med objektorienterande programmering i C# och i år har vi arbetat med det i Python men också snuddat vid det i JavaScript (skulle jag säga även om ingen kurs har sagt det så). Det känns mer och mer bekant ju fler gånger jag får en genomgång inom det och det lovar gott. Det känns roligt att kunna känna igen strukturen i hur man jobbar med objekt och klasser i de olika språken - det gör att det känns lättare att kunna ta sig an nya språk så småningom, till exempel PHP i den här kursen.

##### Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?

Det jag har lärt mig kring grunderna i PHPs modell för klasser och objekt är framförallt att ett objekt ju är en instans av en klass. Och i klassen så finns det properties som antingen är privata, publika eller protected och när vi skriver så vill vi ofta skriva properties som privata och använda getters och setters för att nå dessa istället för att göra dem publika. Publika properties gör koden mindre säker och istället kan vi använda publika metoder för att nå värden för objektet. En annan sak som är bra att vara medveten om är konstruktorn som också kan sätta värden på medlemsvariablar/properties i samband med att ett objekt instansieras. Jag skulle säga att detta är det viktigaste att veta om inför att jobba med klasser och objekt. Sedan är det PHP-syntax som används men det går att se i kodexempel snarare än i text här.

##### Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?

Jag upplever att strukturen på koden som vi ska använda i den här kursen liknar strukturen både i oopython, javascript och designkursen och även databaskursen. Koden är uppdelad i olika delar/mappar/filer som gör att det blir tydligare vilken del som gör vad. Det som har varit nytt är dock att vi själva fått välja hur vi ska styla och vilka verktyg som vi ska använda till det. Jag tänkte försöka använda mig av Bootstrap så jag försökte börja med det men fick blanda in lite egen css också och det vet inte jag om man brukar göra när man använda Bootstrap eller om det är \"fel\"? Det kändes klurigt att förstå hur jag skulle göra med style men om ingen invänder så provar jag att fortsätta jobba med bootstrap även framöver (blandat med egen css).

##### Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.

Jag har kollat på artikeln PHP The Right Way och tror absolut att den kan komma väl till hands men eftersom att det bara har gått en vecka och jag inte helt har hunnit fördjupa mig särskilt mycket i PHP än så har jag lite svårt att svara på frågan om vilka delar som är mer värdefulla. Men de delar som jag kan relatera till och ta åt mig just nu är de om templates och error/exception. Det känns som att texten är rätt lättskriven och är en bra guide. En del saker förstår jag inte alls än men det tänker jag inte är konstigt.

##### Vilken är din TIL för detta kmom?

Mitt TIL för det här kursmomentet är nog uppfräschningen om hur PHP skrivs. Alltså syntaxen, till exempel \$randomstring = \"någonting\"; Det kändes krångligt i höstas när vi höll på men det har börjat komma tillbaka nu efter en veckas arbete och kommer antagligen bli tydligare för varje vecka.";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "kmom01.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Kmom01


##### Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.

I den här kursen kommer vi ju, som nämnt, att jobba med objektorientering och det är något som jag har kommit i kontakt med och arbetat med tidigare i flera olika sammanhang. I utbildningen jag gick på Kvinnofolkhögskolan under förra året jobbade vi med objektorienterande programmering i C# och i år har vi arbetat med det i Python men också snuddat vid det i JavaScript (skulle jag säga även om ingen kurs har sagt det så). Det känns mer och mer bekant ju fler gånger jag får en genomgång inom det och det lovar gott. Det känns roligt att kunna känna igen strukturen i hur man jobbar med objekt och klasser i de olika språken - det gör att det känns lättare att kunna ta sig an nya språk så småningom, till exempel PHP i den här kursen.

##### Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?

Det jag har lärt mig kring grunderna i PHPs modell för klasser och objekt är framförallt att ett objekt ju är en instans av en klass. Och i klassen så finns det properties som antingen är privata, publika eller protected och när vi skriver så vill vi ofta skriva properties som privata och använda getters och setters för att nå dessa istället för att göra dem publika. Publika properties gör koden mindre säker och istället kan vi använda publika metoder för att nå värden för objektet. En annan sak som är bra att vara medveten om är konstruktorn som också kan sätta värden på medlemsvariablar/properties i samband med att ett objekt instansieras. Jag skulle säga att detta är det viktigaste att veta om inför att jobba med klasser och objekt. Sedan är det PHP-syntax som används men det går att se i kodexempel snarare än i text här.

##### Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?

Jag upplever att strukturen på koden som vi ska använda i den här kursen liknar strukturen både i oopython, javascript och designkursen och även databaskursen. Koden är uppdelad i olika delar/mappar/filer som gör att det blir tydligare vilken del som gör vad. Det som har varit nytt är dock att vi själva fått välja hur vi ska styla och vilka verktyg som vi ska använda till det. Jag tänkte försöka använda mig av Bootstrap så jag försökte börja med det men fick blanda in lite egen css också och det vet inte jag om man brukar göra när man använda Bootstrap eller om det är \"fel\"? Det kändes klurigt att förstå hur jag skulle göra med style men om ingen invänder så provar jag att fortsätta jobba med bootstrap även framöver (blandat med egen css).

##### Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.

Jag har kollat på artikeln PHP The Right Way och tror absolut att den kan komma väl till hands men eftersom att det bara har gått en vecka och jag inte helt har hunnit fördjupa mig särskilt mycket i PHP än så har jag lite svårt att svara på frågan om vilka delar som är mer värdefulla. Men de delar som jag kan relatera till och ta åt mig just nu är de om templates och error/exception. Det känns som att texten är rätt lättskriven och är en bra guide. En del saker förstår jag inte alls än men det tänker jag inte är konstigt.

##### Vilken är din TIL för detta kmom?

Mitt TIL för det här kursmomentet är nog uppfräschningen om hur PHP skrivs. Alltså syntaxen, till exempel \$randomstring = \"någonting\"; Det kändes krångligt i höstas när vi höll på men det har börjat komma tillbaka nu efter en veckas arbete och kommer antagligen bli tydligare för varje vecka.", "kmom01.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/kmom01.markdown.twig");
    }
}
