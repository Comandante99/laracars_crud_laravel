# laracars_crud

Tipologia progetto: Individuale
Nome repo: laracars_crud

Partendo dal progetto Laravel relativo al DB costruito (correttamente) nel laracars_shop che, ricordiamo, aveva le seguenti peculiarità:

1. Il DB deve soddisfare le richieste di un mega concessionario che vende online qualsiasi modello di automobile in commercio;
2. Il DB deve disporre delle tabelle: Produttore, Automobile, Utente, Ordine;
3. Ogni automobile ha, fra le altre caratteristiche, un suo produttore associato (Es. Classe A -> Mercedes);
4. Una singola automobile può essere acquistata da utente registrato tramite un singolo ordine.
5. I campi delle tabelle dovranno essere opportunamente decisi da voi, unitamente al tipo di dato idoneo per ogni campo.

Realizzare CRUD completa relativa alle tabelle:

- Cars;
- Manufacturers.

Requisiti fondamentali:

* La CRUD deve consentire correttamente le 4 operazioni fondamentali, controlli di validazione, rilevazione errori sul front-end, avvisi di tipo alert che notifichino le operazioni di inserimento/modifica/cancellazione.

* Solo un utente registrato e loggato può eseguire inserimenti, modifiche e cancellazione records, mentre un utente ospite può solo visionare la index (lista completa) relativa ai records delle 2 tabelle.

Requisito opzionale:

* Consentire la creazione di un ordine di acquisto tramite un tasto compra-ora, solo se l'utente è registrato e loggato. L'ordine dovrà generare un nuovo record nella relativa tabella, con tutte le informazioni necessarie al proprietario per evadere l'ordine.

Extra:

* Simulare un'interfaccia di pagamento simulato prima della creazione di un ordine (utilizzate una sandbox di un gateway di pagamento).

N.B. Allegate anche il .env originale al progetto, facendo attenzione che questo venga GITTATO, rimuovendolo dal .gitignore del vostro progetto!

Scadenza di consegna:

Domenica 15 Maggio 2022, h22.00.