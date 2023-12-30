let url = window.location.href;
let qparts = url.split("?");

// Überprüfe, ob Query-Parameter vorhanden sind
if (qparts.length > 1) {
    let inputparts = qparts[1].split("&");

    let nameparts = inputparts[0].split("=");
    let emailparts = inputparts[1].split("=");
    let textparts = inputparts[2].split("=");

    if (nameparts[1] == '') {
        nameparts[1] = 'Kein Name eingegeben';
    }

    let select = [nameparts[1], emailparts[1], textparts[1]];

    // Der Rest deines Codes, falls vorhanden...

    console.log(select); // Beispiel-Ausgabe der extrahierten Werte
} else {
    // Behandlung für den Fall, dass keine Query-Parameter vorhanden sind.
    console.error('Keine Query-Parameter in der URL gefunden.');
}