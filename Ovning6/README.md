# Övning 6 - Klasser

1. Skriv en egen funktion som tar emot en sträng och skriver ut ett paragraf-element <p> omkring denna sträng.Funktionen ska även ta emot vilken textfärg som ska användas. Anropa sedan denna funktion med strängen "Hello bird!" och valfri färg.

2. Skapa en klass "Bird", ge den en property "color". Skapa sedan ett objekt "pipen" av klassen Bird, med hjälp av "new". Skriv därefter ut "pipen"s färg med hjälp utav funktionen ifrån uppgift 1.

3. Lägg till en constructor-metod som körs när ett objekt av klass Bird skapas. Denna ska ta emot en fågelart och sätta objektets property "species" till denna.

4. Skapa en privat property "opinion_on_windows", som endast kan ändras via metoden "set_opinion_on_windows" samt hämtas med metoden "get_opinion_on_windows".

5. Prova att skapa två olika Objekt av Klassen bird, samt att skriva ut deras respektive åsikter om fönster.

6. Fåglar har en del gemensamt med andra djur, till exempel så kan de ha ett personligt namn. Skapa en klass "Animal" som har en property som är "first_name" och en metod "get_first_name" och en metod "set_first_name". Ge även klassen metoden "greeting", vilken ska returnera strängen "Djurets hälsningsfras!"

7. Skapa en klass "Fox" ärver/extends klassen "Animal". Instansiera/skapa sedan ett objekt "$foxbert" av klassen "Fox", samt kalla på dess metod greeting; Vilket väl torde ge svar till de där norrmännen?

8. Inte nöjd med svaret? ge klassen Fox en egen metod "greeting" som override till metoden den ärvt ifrån Animal.

9. Vi vill inte att någon drummel som så småningom tar över vår kodbas börjar skapa objekt av klassen "Animal". Gör om Animal till en abstrakt klass med hjälp av "abstract". Se även till så att klasserna Bird och Fox fortfarande fungerar som tidigare.

10. Skapa ett trait av hjälpmetoden du skapade i uppgift 1 och använd den i Bird-klassen till att skriva "Ny fågel skapad" varje gång ett nytt objekt av fågel instansieras.
