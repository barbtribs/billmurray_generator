$(document).ready( function() {

  // Ao clicar no botao enviar.
  $('form button[type=submit]').on('click', function (e) {
    // Define as variaveis.
    var $largura = $("input[name=largura]");
    var $altura = $("input[name=altura]");
    // Verificar se as variaveis estao preenchidas.
    if (!$largura.val() || !$altura.val()) {
      // Previne o envio do formulario.
      e.preventDefault();
      alert("Por favor, insira todos os valores");
    }
  });
} );
