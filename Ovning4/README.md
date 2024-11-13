# Övning 4

_Skapa webbplats med PHP._

---

## Läsa ut dynamiskt innehåll Den här uppgiften går ut på att skapa en hel webbplats med startsida och två undersidor som skriver ut data dynamiskt med hjälp av PHP.

- Gör en egen webbplats men det går bra att samarbeta med varandra.

- Det är rekommenderat att göra denna uppgift, ni kommer sedan i senare övningsuppgifter kunna återanvända och bygga vidare på webbplatsen ni skapat här.

### Instruktioner:
- Du ska skapa en startsida och två undersidor. Varje undersida ska ha en sidtitel utskriven på sidan med valfritt namn.

- Startsida På startsidan ska en välkomsthälsning visas som ändras dynamiskt beroende på tid på dygnet. “God morgon”, “God förmiddag”, “God eftermiddag” eller “God kväll”. Välj själv lämpliga klockslag som brytpunkter. Varje hälsningsfras ska vara lagrad på varsitt index i en array varifrån respektive hälsning sedan hämtas och skrivs ut till skärmen.

- Undersida 1 På denna undersida ska dagens veckodag och datum skrivas ut. Till exempel “Idag är det måndag den 14 november”. Under ovanstående ska också en text beskriva om dagens datum är jämnt eller udda, ex: “Den 14 november är ett jämnt datum”.

- Undersida 2 På denna undersida ska en loop köras som skriver ut en valfri tabell (t.ex. sjuans tabell) i multiplikationstabellen i följd (med radbrytning mellan varje tal). Det numeriska värdet för vilken tabell som ska skrivas ut lagras i en variabel så att den enkelt kan ändras och visa valfri tabell.
Till exempel om 7:ans multiplikationstabell ska skrivas ut ska siffran 7 vara lagrad i variabeln, som sedan används i dina formler. På varje rad ska både talen och resultatet skrivas ut (Ex. “7 * 8 = 56”)

- Sidhuvud I sidhuvudet ska minst finnas en huvudmeny med länkar till varje undersida samt startsidan. Sidfot I sidfoten anges ditt namn och aktuellt årtal läses ut dynamiskt med hjälp av PHP.

Krav på webbplatsen:

- Alla sidor ska hämta sidhuvud och sidfot från separata php-filer (header.php och footer.php)

- Dynamiskt innehåll skapas endast med PHP, ej med JavaScript eller liknande.

- En genomgående grafisk profil implementeras på hela webbplatsen, välj själv hur mycket tid du lägger på detta. Fokus är såklart på PHP. Tips på läsvärda länkar finns på kurswebbplatsen (ITHS-distans).

Lycka till!
