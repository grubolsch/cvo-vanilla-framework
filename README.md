# cvo-vanille-framework
Dit is een voorbeeld van hoe je een eenvoudige MVC kunt maken in gewone PHP, met behulp van autoloading van composer.

Gebruik deze alleen voor educatieve doeleinden!

## Installatie gids
- Kopieer config.php.dist naar config.php, vervang databasereferenties
- composer install
- composer dump-autoload

## Vuistregel - MVC
### Controller (20 % code)
- Superpower: mag als enige superglobals gebruiken: zoals $_GET, $_POST, $_FILES, $_SESSION
- Haalt models op, eindigt altijd met een view (bv. in Symfony ->render() of require in vanilla PHP)
- Geen code die je wilt hergebruiken!
### Model (80 % code)
- Alle classes die mappen met je database tabellen (en meer) = entities
- Alle queries (zodat deze te hergebruiken zijn)
### View
- Alle echo's
- Simpele ifs (gewoon isset, empty, of vergelijking met een bool)
- Simpele loops