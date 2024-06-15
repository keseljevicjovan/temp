# Projektni-zadatak-laravel-srednjoskolci

Ova aplikacija je napravljena u Laravelu i služi za dijeljenje blogova.
Omogućuje korisnicima kreiranje, uređivanje,brisanje i pregled blogova (postova).
Korisnici mogu da kreiraju, uređuju i brisu svoje postove, dok admini (superadministratori) imaju dodatne permisije za upravljanje postovima i korisnicima u admin panel.

## Instalacija

```bash
git clone https://github.com/lucic15/projektni-zadatak-laravel-srednjoskolci.github
cd projektni-zadatak-laravel-srednjoskolci
composer install
php artisan migrate:fresh
```

Takodje mozete da koristite ugradjene seed-ere umjesto da rucno kucate podatke.
Napomena: Koriscenje seed-era je neophodno kako bi se kreirale i kategorije za postove:

```bash
php artisan db:seed
```

Kako bi pokrenuli aplikaciju:
```bash
php artisan serve
```

## Autorizacija

Aplikacija koristi custom sistem za autorizaciju zajedno uz laravelov auth sistem.
Postoje 3 vrste korisnika:
- Guest (ili gost) - Moze samo da gleda postove na stranici.
- User - Ovo je default nalog koji se pravi na signup stranici. Moze da mijenja, brise, pravi i gleda tudje i svoje postove.
- Admin (Superadmin) - Administrator koji ima sve permisije nad stranicom. Ima pristup admin panelu koji mu dava permisije da mijenja sve postove, kao i druge naloge. Moze da dava i oduzima permisije drugim nalozima.
