# Základní kostra balíčku

projekt není na githubu

## Použítí

zkopírovat celý projekt `basic-package` do nového adresáře

### Přejmenovat položky balíčku

> 1. adresář balíčku `tudy/novy-nazev`
> 2. přejmenování souboru `tudy/novy-nazev/src/BasicPackagesServiceProvider`
> 3. přejmenování třídy a jmeného prostoru u souboru `tudy/novy-nazev/src/NovyNazevServiceProvider`

---

### Úpravy souboru `tudy/novy-nazev/composer.json'`

> 1. opravit název projektu a popis
> 2. opravit autoload
>
> ```
> "autoload": {        "psr-4": {
>             "Tudy\\NovyNazev\\": "src/"
>         }
>     },
>
> ```
>
> 3. opravit automatické naštění balíčku pro laravel
>
> ```
> "extra": {
>         "laravel": {
>             "providers": [
>                 "Tudy\\NovyNazev\\NovyNazevProvider"
>             ]
>         }
>     },
>
> ```
>
> 4. znovu našíst konfiguraci `tudy/novy-nazev/composer.json` příkazem v tomto adresář `composer dump-autoload
>
> ---

### Úprava souboru `tudy/novy-nazev/src/routes/web.php`

> - přepis url, name url a return text (php storm by měl přejmenovat automaticky při změně adresáře)

### Úpravy v aplikaci laravel

> 1. v souboru `/composer.json` opravit pole `autoload-dev`
>
> ```
>     "autoload-dev": {
>           "psr-4": {
>               "Tests\\": "tests/",
>               "Tudy\\NovyNazev\\": "tudy/novy-nazev/src"
>           }
>       },
> ```
>
> 2. uprava v souboru `config/app.php` pole `provider`
>
> 1.položky načítání
>
> ```
>
>  Tudy\NovyNazev\NovyNazevServiceProvider::class
>
> ````
>
> 3. opravit v souboru `resource/views/welcome.blade.php` nadpis a tex odkatu novým názvem
> 4. načíst nové nastavení souboru `composer.json` příkazem `composer dump-autoload`.





## Jak vytvořit balíček samostatně do nového projektu

1. zalořit adresář  `tudy/nazev-balicku`
2. vytovřit novy soubor `tudy/nazev-balicku/composer.json` buď skopirováním, nebo příkazem `composer init` . Spuštěném
   v adresáři `tudy/nazev-balicku` Při instalaci composerem se musí doplnit základní udaje.

---

### Soubory a registrace

1. třída `tudy/nazev-balicku/src/NazevBalickuServiceProvider` hlavní soubor pro zavedení bališku jako služby
2. routy `tudy/nazev-balicku/src/routes/web.php` doponit základní routy s url např. `/nazev-blaicku`
3. zaregistrovat routy v metodě `boot` třídy `NazevBalickuServiceProvider.php`
4. registrace jmeného prostoru `tudy/nazev-balicku/composer.jsom`

   ```
    "autoload": {
           "psr-4": {
               "Tudy\\NazevBalicku\\": "src/"
           }
       },
   ```
5. zajištění automatické regisrace služby  `tudy/basic-packages/composer.jsom`

   ```
   "extra": {
           "laravel": {
               "providers": [
                   "Tudy\\NazevBalicku\\NazevBalickuServiceProvider"
               ]
           }
       },
   ```
6. Registrace služby v souboru `/composer.json` Hlavního soubor projektu.

   ```
   "autoload-dev": {
           "psr-4": {
               "Tests\\": "tests/",
               "Tudy\\BasicPackages\\": "tudy/basic-packages/src"
           }
       },
   ```
7. Zaregistrovat routy v souboru `tudy/nazev-balicku/NazevBalickuServisProvider`

   ```
    public function boot()
       {

           //register routs
           $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

       }
   ```
   8. Načíst nové nastavení composerem `composer dump-autoload` (příkaz spustit v adresáři
      projektu) Tento příkaz nezupomenout spustit při přejmenování
