
<!-- Custom script code -->
<script>
	
let historial = "";
let number = "";

let historialHtml = $("#historialActual");
let numberHtml = $("#numeroActual");





function addDigit(n) {
	if (number == "0") { number = ""; }
	number = number + n;
	numberHtml.text(number);
}
function addComa() {
	if (!coma) {
		coma = true;
		addDigit(".");
	} 
} 
function clearAll() {
	historial = "";
	number = "";
	coma = false;
	addDigit("0");
	historialHtml.text("");
} 
function removeLastDigit() {
	number = number.slice(0, -1);
	if (number.length == 0){ number = "0"; } 
	numberHtml.text(number);
} 
function addToHistorial() {
	historial = historial + number;
	historialHtml.text(historial);
	number = "";
	addDigit("0");
} 
function showResult() {
	addToHistorial();
	number = "";
	historial = "(" + eval(historial) + ")" ;
	numberHtml.text(historial);
} 


$("#bResult").click(function (e){
	showResult();
});
$(".btn-number").click(function (e){
	addDigit($(this).text());
});
$(".btn-operation").click(function (e){
	addDigit($(this).text());
	addToHistorial();
});
$("#bDot").click(function (e){
	addComa();
});
$("#bDelAll").click(function (e){
	clearAll();
});
$("#bDel").click(function (e){
	removeLastDigit();
});


</script>

