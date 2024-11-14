# Övning 5
___ PHP-webbplats fortsättning ___

###### Hämta data med hjälp av formulär I den här övningen ska du vidareutveckla din tidigare skapade webbplats (från övning 2).

Fokus är att använda formulär på webbplatsen och därigenom inhämta och bearbeta data som användaren matar in. Arbeta vidare med din egen webbplats men fortsätt gärna att samarbeta med varandra. ##Instruktioner Öppna ditt tidigare projekt från övning

2. Skapa en ny undersida (undersida 3). Vidareutveckla sedan de olika undersidorna enligt följande:

### Startsida Skapa ett enkelt formulär där användaren kan mata in sitt namn, och skriv sedan ut det inmatade namnet tillsammans med välkomsthälsningen. Till exempel “God kväll Oskar.”

### Undersida 1 Komplettera undersida 1 med en datumväljare.
När användaren väljer ett valfritt datum ska texten anpassas efter det inmatade datumet istället för att visa dagens datum. (Till exempel om användaren väljer den 21 december ska texten bli “den 21 december är ett udda datum”).

### Undersida 2 Lägg in ett formulär där användaren kan välja vilken multiplikationstabell som ska skrivas ut.
Till exempel om användaren anger “5” i inmatningsfältet ska 5:ans multiplikationstabell skrivas ut vid klick på submit-knappen, osv.

Implementera också någon form av datakontroll som gör att endast siffror mellan 1-9 kan anges i inmatningsfältet.

### Undersida 3 (ny undersida för denna uppgift) På denna undersida ska en kalkylator för elpris skapas.
Börja med att skapa ett formulär med inmatningsfälten: “Aktuellt elpris (kr/KwH)” samt “Aktuell förbrukning (KwH)”. När användaren bekräftar formuläret ska elpriset beräknas och värdet rundas av så att det visas med lämplig formatering och valuta.

Exempelvis: “Det beräknade elpriset blir 920 kronor”. Designa sidan så att formulär och utskrift blir användarvänlig.

Symbolisera gärna motsvarande hur många hästar som behöver jobba hur många timmar för samma wH.

### Sidhuvud och sidfot Lämnas som de var i föregående övningsuppgift eller utvecklas efter behov.

### Krav på webbplatsen
- Alla sidor ska hämta sidhuvud och sidfot från header.php och footer.php
- Dynamiskt innehåll skapas endast med PHP, ej med JavaScript eller liknande. (JavaScript kan dock användas för ytterligare interaktivitet såsom utfällbara menyer och liknande).
- Den genomgående grafiska profilen gäller fortsatt för hela webbplatsen.
- Skydda webbplatsen från intrång och skadlig kod! Säkra alla inmatningsfält i dina formulär från så kallade “injections” med skadlig kod. (Tips! HTML-taggar vill vi vanligtvis inte tillåta i våra inmatningsfält).

### Att tänka på:
- Tänk på användarupplevelsen (UX) när ni arbetar vidare med er webbplats. Eventuella instruktioner och meddelanden till användaren bör vara enkla och lättförståeliga, gränssnitt och design bör sträva efter att vara självförklarande. Fundera över hur du själv hade upplevt din webbplats om du kom som ny användare.
- En god vana är att som regel bygga responsiva webbplatser så de fungerar bra på olika enheter. Testa också webbplatsen i olika webbläsare.

# Extra funktionalitet för mer utmaning (stegvis ökning av utmaning)!

1. Prova att skapa någon form av lösning där användaren allra först möts av en förfrågan om att ange sitt namn, och först när det gjorts skickas användaren vidare till startsidan där namnet och hälsningen läses ut.

2. Prova att lagra användarens inmatade namn som en sessionsvariabel, så att det finns tillgängligt från hela webbplatsen. Då kan du till exempel skapa en liten användarikon någonstans på webbplatsen som hela tiden visar den “inloggade” användarens namn.

3. Gör hela webbplatsen skyddad och kräv att användaren har angett sitt namn/loggat in för att komma åt webbplatsens alla sidor. Om du vill kan du även komplettera med ett lösenord som skydd. Lägg gärna till en knapp för att logga ut från webbplatsen.

4. Skapa validering/felhantering för inmatningen i dina olika formulär. Välj egna lämpliga regler, t.ex. att användarens namn enbart får bestå av bokstäver och minst tre tecken eller liknande. Lägg gärna till olika felmeddelanden som visas beroende på vilket fel användaren gör. Det kan också vara trevligt att skriva ut ett meddelande om en inmatning har gjorts korrekt.

(OBS! Gör all felhantering i din PHP-kod. Den inbyggda valideringen i HTML (såsom att ange required eller type=”xxxx” som attribut i ett input-element) kan användas som komplement, men vi vill av säkerhetsskäl ha full kontroll över felhanteringen på serversidan, och vi bör därför inte enbart förlita oss på felhantering på klientsidan.

Tips på läsvärda länkar finns på kurswebbplatsen (ITHS-distans).

Lycka till!
