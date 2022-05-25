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

/* kmom06.markdown.twig */
class __TwigTemplate_864baacab8cd8a7b8d5768f03e57d8d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom06.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kmom06.markdown.twig"));

        // line 1
        echo "#### Kmom06

##### Hur uppfattade du verktyget phpmetrics och fann du några särskilda bitar mer värdefulla än andra? Var det några särskilda metrics eller bilder du uppskattade?
Nu har jag genomfört kursmoment 6 som skiljde sig mycket från tidigare kursmoment tycker jag. Det här handlade mer om att analysera och formulera sig kring det arbetet än att skriva kod och skapa program. Jag tyckte att det var relativt enkelt att få allting att installeras och fungera ihop. Phpmetrics gick bra att installera och använda lokalt. Det var en del svårlästa värden men jag gillade att man fick en pil(röd eller grön) när man hade ändrat något i koden och kört composer phpmetrics igen för det hjälpe till att förstå vilka värden som hade ändrats efter att jag försökt göra förbättringar. Själva sidan var inte så snygg tycker jag, alltså phpmetrics, det responsiva fungerade dåligt och min skärm var för liten för att kunna se alla siffror och pilar. Men det är ju bara en detalj. I övrigt var digrammen och genomsnittsvärdena roliga att kolla på! Jag hade önskat fler förklaraingar för en del värden dock.

##### Berätta hur det gick att integrera med Scrutinizer och vilken är din första känsla av verktyget och dess badges? Vilken kodtäckning och kodkvalitet fick du efter första bygget?
Det gick bra att integrera Scrutinizer med min GitHub så att jag kunde få ut en rapport där. Jag hade först 6 poäng men då var allt med och sen ändrade jag så att tools inte laddades upp och då blev poängen en 9.95, coverage var 25% och build var grönt. Efter att jag gjort förändringar blev dem: 10, 22% och grön. Jag tyckte att det var tydligare i Scrutinizer på många sätt än i phpmetrics för att jag kunde se kodexempel och väldigt exakta exempel på vad som hade undersökts. Det var tråkigt att coupling och cohesion inte syntes för min kod, och det förstod jag inte varför? Men i övrigt var det visuellt tydligt. 

##### Hur är din egen syn på kodkvalitet, berätta lite om den? Tror du man kan man påvisa kodkvalitet i någon viss mån med badges eller vad tror du?
Jag tycker att min egen syn på kodkvalitet har blivit tydligare i den här kursen. Jag har fått många knep och tips på hur jag kan jobba med att skriva snygg kod och även nu hur jag kan förbättra den. Jag har tidigare tänkt att jag inte behöver ändra på kod som fungerar men nu när jag har sett att det kan räcka med lite kod så vill jag fortsätta jobba så. Jag förstår och tycker själv att det är lättare att förstå en mindre mängd kod, och det blir det ju dels om jag struntar i onödiga funktioner men även om jag skriver med single responsibilty. Jag är osäker på hur mycket jag kan uttala mig från att se badges, men det kan absolut ge en hint om vad som är gjort i koden och vad som kan förbättras. Koden kan ju fungera med 0% test coverage men kanske är ännu bättre om test coverage är högre. 

##### Vilken är din TIL för detta kmom?
Mitt TIL för det här kursmomentet är absolut de fyra C:na. Jag har läst och letat och försökt förändra och det är det bästa sättet att lära sig på enligt mig. Cohesion, Coupling, Complexity och Coverage är nu inte helt främmande ord för mig. Det känns skönt.

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "kmom06.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Kmom06

##### Hur uppfattade du verktyget phpmetrics och fann du några särskilda bitar mer värdefulla än andra? Var det några särskilda metrics eller bilder du uppskattade?
Nu har jag genomfört kursmoment 6 som skiljde sig mycket från tidigare kursmoment tycker jag. Det här handlade mer om att analysera och formulera sig kring det arbetet än att skriva kod och skapa program. Jag tyckte att det var relativt enkelt att få allting att installeras och fungera ihop. Phpmetrics gick bra att installera och använda lokalt. Det var en del svårlästa värden men jag gillade att man fick en pil(röd eller grön) när man hade ändrat något i koden och kört composer phpmetrics igen för det hjälpe till att förstå vilka värden som hade ändrats efter att jag försökt göra förbättringar. Själva sidan var inte så snygg tycker jag, alltså phpmetrics, det responsiva fungerade dåligt och min skärm var för liten för att kunna se alla siffror och pilar. Men det är ju bara en detalj. I övrigt var digrammen och genomsnittsvärdena roliga att kolla på! Jag hade önskat fler förklaraingar för en del värden dock.

##### Berätta hur det gick att integrera med Scrutinizer och vilken är din första känsla av verktyget och dess badges? Vilken kodtäckning och kodkvalitet fick du efter första bygget?
Det gick bra att integrera Scrutinizer med min GitHub så att jag kunde få ut en rapport där. Jag hade först 6 poäng men då var allt med och sen ändrade jag så att tools inte laddades upp och då blev poängen en 9.95, coverage var 25% och build var grönt. Efter att jag gjort förändringar blev dem: 10, 22% och grön. Jag tyckte att det var tydligare i Scrutinizer på många sätt än i phpmetrics för att jag kunde se kodexempel och väldigt exakta exempel på vad som hade undersökts. Det var tråkigt att coupling och cohesion inte syntes för min kod, och det förstod jag inte varför? Men i övrigt var det visuellt tydligt. 

##### Hur är din egen syn på kodkvalitet, berätta lite om den? Tror du man kan man påvisa kodkvalitet i någon viss mån med badges eller vad tror du?
Jag tycker att min egen syn på kodkvalitet har blivit tydligare i den här kursen. Jag har fått många knep och tips på hur jag kan jobba med att skriva snygg kod och även nu hur jag kan förbättra den. Jag har tidigare tänkt att jag inte behöver ändra på kod som fungerar men nu när jag har sett att det kan räcka med lite kod så vill jag fortsätta jobba så. Jag förstår och tycker själv att det är lättare att förstå en mindre mängd kod, och det blir det ju dels om jag struntar i onödiga funktioner men även om jag skriver med single responsibilty. Jag är osäker på hur mycket jag kan uttala mig från att se badges, men det kan absolut ge en hint om vad som är gjort i koden och vad som kan förbättras. Koden kan ju fungera med 0% test coverage men kanske är ännu bättre om test coverage är högre. 

##### Vilken är din TIL för detta kmom?
Mitt TIL för det här kursmomentet är absolut de fyra C:na. Jag har läst och letat och försökt förändra och det är det bästa sättet att lära sig på enligt mig. Cohesion, Coupling, Complexity och Coverage är nu inte helt främmande ord för mig. Det känns skönt.

", "kmom06.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/kmom06.markdown.twig");
    }
}
