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

/* kmom02.markdown.twig */
class __TwigTemplate_5b4e0b0a8533ad7db0d60c7f3e99c316 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom02.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom02.markdown.twig"));

        // line 1
        echo "#### Kmom02

Kursmoment 2 har handlat om att bygga en kortlek med kort och ta hjälp av olika objektorienterade konstruktioner för att göra detta. 

Arv är ”is a” konstruktion som innebär att man kan skapa en subklass till en basklass där det finns ett väldigt starkt band, subklassen kan inte existera utan basklassen. Till exempel har jag använt mig av arv i klassen DeckWith2Jokers och där ärvt från klassen Dock.

Komposition är en ”has a” konstruktion som betyder att relationen inte är lika beroende av varandra men att man använder sig av antingen varandra eller en klass använder sig av den andra klassen. Jag har använt mig av komposition när jag till exempel har skapat klassen CardHand och då haft en stark koppling till klassen Card.

Interface och trait har jag inte hunnit läsa på så mycket om och inte heller använt mig av den här veckan. Men som jag har förstått Trait så innebär det att en klass kan använda en trait och få tillgång till dens metoder och medlemsvariabler precis som i arv men skillnaden är att det går för en klass att ärva från mer än en trait och det är inte möjligt för en klass att ha arv från flera basklasser. Så som jag har förstått Interface är det lite som en mall för vad man kan förvänta sig. Ett interface innehåller ingen färdig kod för olika metoder men den innehåller ett skal för vad som ska finnas. Det gör det enklare att förstå och veta vilken funktion en klass skulle kunna ha.

##### Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?

Jag är väldigt nöjd att jag har lyckats komma fram till något som är i stil med kraven för uppgiften. Jag har gjort de filer som fanns som krav för uppgiften och i de fall där det har funnits tolkningsutrymme så har jag gjort egna beslut - till exempel exakt hur olika sidor skulle se ut och vilken navigation som finns på dem. För att lösa uppgiften har jag följt guiden, kollat på videogenomgångar använt var_dump() oerhört mycket, testat, googlat och frågat om hjälp. Jag tror absolut att koden skulle kunna se snyggare ut och jag skulle till exempel kunna använda mig av trait och interface, det har bara inte riktigt funnits tid och kunskap om det än men det ser jag som en förbättringspotential. 

##### Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?

Jag har inte gjort någon problemlösning och heller inte något flödesdiagram och psuedokod utan det tar jag i kmom03 för det var så man kunde göra om jag förstod uppgiften rätt. 

##### Vilken är din TIL för detta kmom?
Mitt TIL för det här kursmomentet är att när jag är i en klass och vill komma åt medlemsvariablerna i metoderna så behöver jag skriva \$this-medlemsvariabel för att kunna använda den. Det var ett misstag som jag gjort flera gånger under veckan men som jag nu till slut har tagit med mig och lärt mig (förhoppningsvis).
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "kmom02.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Kmom02

Kursmoment 2 har handlat om att bygga en kortlek med kort och ta hjälp av olika objektorienterade konstruktioner för att göra detta. 

Arv är ”is a” konstruktion som innebär att man kan skapa en subklass till en basklass där det finns ett väldigt starkt band, subklassen kan inte existera utan basklassen. Till exempel har jag använt mig av arv i klassen DeckWith2Jokers och där ärvt från klassen Dock.

Komposition är en ”has a” konstruktion som betyder att relationen inte är lika beroende av varandra men att man använder sig av antingen varandra eller en klass använder sig av den andra klassen. Jag har använt mig av komposition när jag till exempel har skapat klassen CardHand och då haft en stark koppling till klassen Card.

Interface och trait har jag inte hunnit läsa på så mycket om och inte heller använt mig av den här veckan. Men som jag har förstått Trait så innebär det att en klass kan använda en trait och få tillgång till dens metoder och medlemsvariabler precis som i arv men skillnaden är att det går för en klass att ärva från mer än en trait och det är inte möjligt för en klass att ha arv från flera basklasser. Så som jag har förstått Interface är det lite som en mall för vad man kan förvänta sig. Ett interface innehåller ingen färdig kod för olika metoder men den innehåller ett skal för vad som ska finnas. Det gör det enklare att förstå och veta vilken funktion en klass skulle kunna ha.

##### Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?

Jag är väldigt nöjd att jag har lyckats komma fram till något som är i stil med kraven för uppgiften. Jag har gjort de filer som fanns som krav för uppgiften och i de fall där det har funnits tolkningsutrymme så har jag gjort egna beslut - till exempel exakt hur olika sidor skulle se ut och vilken navigation som finns på dem. För att lösa uppgiften har jag följt guiden, kollat på videogenomgångar använt var_dump() oerhört mycket, testat, googlat och frågat om hjälp. Jag tror absolut att koden skulle kunna se snyggare ut och jag skulle till exempel kunna använda mig av trait och interface, det har bara inte riktigt funnits tid och kunskap om det än men det ser jag som en förbättringspotential. 

##### Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?

Jag har inte gjort någon problemlösning och heller inte något flödesdiagram och psuedokod utan det tar jag i kmom03 för det var så man kunde göra om jag förstod uppgiften rätt. 

##### Vilken är din TIL för detta kmom?
Mitt TIL för det här kursmomentet är att när jag är i en klass och vill komma åt medlemsvariablerna i metoderna så behöver jag skriva \$this-medlemsvariabel för att kunna använda den. Det var ett misstag som jag gjort flera gånger under veckan men som jag nu till slut har tagit med mig och lärt mig (förhoppningsvis).
", "kmom02.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/kmom02.markdown.twig");
    }
}
