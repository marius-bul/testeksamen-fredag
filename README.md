# Brand Rating

## Prosjektbeskrivelse
Prosjektet mitt går ut på at brukere skal "rate" kjente merker som for eksempel Gucci sine reklamer. Ratingen til brukere blir lagret i en database.

### Hovedfunksjoner:
- Brukere kan rate reklamer for kjente merker.
- Ratingene blir lagret i en database.

### Programmeringsspråk brukt:
- PHP
- MySQL
- HTML/CSS/JavaScript

## Hvordan kjøre programmet
For å kjøre programmet ditt, trenger du bare IP-adressen til serveren, som i dette tilfellet er:  
`http://172.20.128.66`

## Kildeliste
- [DigitalOcean: How to Install LAMP Stack on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-lamp-stack-on-ubuntu)
- [DataCamp: MySQL Tutorial](https://www.datacamp.com/tutorial/my-sql-tutorial?dc_referrer=https%3A%2F%2Fakademiet.instructure.com%2F)
- [ChatGPT](https://chat.openai.com)
- Koder fra Canvas

## Brukertesting
Ingen brukertesting har blitt utført på dette prosjektet.

## Sikkerhetsprinsipper
For å beskytte brukernes passord har jeg implementert hashing av passordene før de blir sendt til databasen ved registrering via `registrer.php`.
