const numeroInput = document.getElementById("numeroInput");

numeroInput.addEventListener("input", function () {
    let valor = numeroInput.value;
    valor = valor.replace(/[^0-9]/g, "");
    numeroInput.value = valor;
});


function validarFormulario() {
    var usuarioInput = document.getElementById("numeroInput");
    var contraseñaInput = document.getElementById("contraseña");

    if (usuarioInput.value.trim() === "" || contraseñaInput.value.trim() === "") {
        alert("Por favor, complete todos los campos.");
        return false; // Evita que el formulario se envíe
    }

    return true; // Envía el formulario si los campos no están vacíos
}
