// JavaScript Document
function cekJavaScript() {
	if (document.getElementById || document.layers || document.all) {
		document.getElementById('nojavascript').innerHTML = '';
	}
}