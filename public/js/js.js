let searchParams = new URLSearchParams(window.location.search);
$('#text').val(searchParams.get('text'));
var div = document.getElementById("text_search");
div.innerText = "Resultado para a busca: '"+ searchParams.get('text') +"'";