# Programmazione Orientata agli Oggetti (Movie)

Il programma contiene un file 'Movie.php' in cui:
- è definita una classe 'Movie',
- all'interno della classe sono dichiarate delle variabili d'istanza,
- all'interno della classe è definito un costruttore, 
- all'interno della classe sono definiti tre metodi:
    1. uno per impostare il rating di un film,
    2. un altro per ottenere il rating, che attualmente non viene usato ma  potrebbe servire per le future implementazioni,
    3. un ultimo per visualizzare tutte le informazioni del film tramite un echo.
- la classe Movie accetta più di un genere tramite un array di stringhe.


In un altro file 'index.php':
- viene definito un array Movies nel quale vengono istanziati tre oggetti ‘Movie’,
- viene richiamata la funzione per impostare il rating per ciascun film (in questo momento i rating vengono impostati direttamente nel codice ma in futuro potrebbero essere scelti dall'utente tramite l'invio di un form),
- vengono stampati a schermo tutti i Movies con i valori delle relative proprietà tramite un foreach.