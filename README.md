 **PHP Strong Password Generator**
 ====

 **Descrizione**: <br>
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.


**Milestone 1**: <br>
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php*

**Milestone 2**: <br>
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale

**Milestone 3 (BONUS)**: <br>
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

### **Steps**:
 Creo una input text per la password; <br>

*Milestone 1*: <br>
1. Al form gli do method 'GET' e con echo strleng stampo la lunghezza ;

2. Creo una funzione random, gli passo la lunghezza della password come parametro;

