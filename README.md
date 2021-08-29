### Balíček START

## Použití

- nainstalovat balíček `composer require tudy/start`
- nainstalovat veřejné zdroje `php artisan vendor:publish`
- pokud je nutné soubory přepsat `php artisan vendor:publish --force`

### veřejné zdroje
- `start-layout` nainstaluje  do adresáře `resource/views/components/star/layout/` soubory `follow.blade.php`, `nofollow.blade.php` a `welcome.blade.php`
- `star-index` nainstaluje do adresáře `resource/views` soubor `index.blade.php`
- `start-css` naistaluje do adresáře `resource/css/` soubory `start.css`

---
### Soubory `follow.blade.php` a `nofollow.blade.php`

- hlavní komponenty pro vložení html volat `<x-start.layout.follow`
- puužito v `index.blade.php` 

- `resource/views/components/star/layout/` lze do souborů folow a nofolow vložit bloky které použijí všichni potomci

### Soubor `start.css` 
- vlořit do souboru `resources/css/app.css` pomocí `@import "start.css";`
- nastaví základní styly
---

## Fukce balíčku
- základní styly pro typografii
- vstupní kompnenty follow a nofollow
- komponenty htnl
