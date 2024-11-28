# Övning 8 – WordPress-teman

- Skapa ett WP-tema utifrån koden i uppgift 7.
    - Det är mycket välkommet att utgå ifrån en klasskamrats Övning7 istället/också,
    självfallet under förutsättning av dennes medgivande. Andras kod ger särskild utmaning.
- Fokus: Få sidan att bli så lik originalet som möjligt.
    - Så lik som möjligt grafiskt.
    - Så lik som möjligt HTML-iskt - högerklicka->"visa sidkälla" ofta!
- Använd inte blocks, installera "classic editor" plugin, för att få ett enklare content-fält.

1. Innan du börjar med git - se till att du har en .gitignore för WordPress! (förslag: [gitignore.io](http://gitignore.io/))
2. Skapa en helt ny WordPress-installation
3. Ta bort befintliga teman, plugins, sidor och posts
4. Installera "classic editor" plugin och aktivera - så slipper vi blanda in block.
5. Skapa en tom temamapp: wp-contents/themes/e8_fornamn
    - Lägg till de nödvändiga tema- filerna i mappen
    - I din functions.php - se till att lägga till theme support för thumbnails och menyer:

        function my_theme_setup(){
        add_theme_support('post-thumbnails'); //För att kunna välja utvald bild till post/page
        add_theme_support('menus'); //För att kunna skapa menyer under Appearance->Menus
        }
        add_action('after_setup_theme', 'my_theme_setup'); //För att invänta rätt plats i produktionen

6. Aktivera ditt tema och sätt igång att skapa Sidor(pages), Nyheter(posts) och Menyer ifrån wp-admin.
    - Vi gör detta först för att förtydliga skillnaden mellan Sida(content i db) och Mall(php-fil)
    - Skapa även kategorier och taggar för olika nyheter
7. Fortsätt med att skapa mallar för de olika innehållstyperna. Det kan vara bekvämt att börja med
header, footer och andra eventuellt återkommande element. Glöm ej att inkludera funktionerna
wp_head(), wp_footer(), wp_body_class() och wp_body_open()
- Fortsätt att committa varje timme. Endast din temamapp e8_fornamn skall pushas ifrån denna övning.

- Förbered och spela in en presentation av din färdiga/ofärdiga webbplats/tema, där du kort (max 2 minuter) berättar vad du har gjort
och/eller utmaningar som du har stött på. Denna spelas förslagsvis in med skärminspelning eller mobiltelefon.

Övning 8 Pågår till och med fredag eftermiddag.
