let url = window.location.href;
let qparts = url.split("?");

// Überprüfe, ob Query-Parameter vorhanden sind
if (qparts.length > 1) {
    let queryParams = {};
    let inputparts = qparts[1].split("&");

    inputparts.forEach(part => {
        let [key, value] = part.split("=");
        queryParams[key] = value || 'Kein Wert eingegeben';
    });

    let select = [queryParams.name, queryParams.email, queryParams.text];

    // Der Rest deines Codes, falls vorhanden...

    console.log(select);

    // Hier setzt du die Query-Parameter für die spätere Verwendung
    window.select = select;
} else {
    // Behandlung für den Fall, dass keine Query-Parameter vorhanden sind.
    console.error('Keine Query-Parameter in der URL gefunden.');
    window.select = ['', '', ''];
}