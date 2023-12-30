var select = [];
select = getValue();

function getValue() {

var url = window.location.href;
var qparts = url.split("?");
var inputparts = qparts[1].split("&");
var nameparts = inputparts[0].split("=");
var emailparts = inputparts[1].split("=");
var textparts = inputparts[2].split("=");

if (nameparts[1] == '') {
  nameparts[1] = 'Kein Name eingegeben';
}
return [nameparts[1], emailparts[1], textparts[1]];


}
