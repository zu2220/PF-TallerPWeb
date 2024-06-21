function convertir() {
    var numeroInput = document.getElementById('numeroInput').value;
    var resultado = document.getElementById('resultado');

    // Array con las palabras correspondientes a cada número
    var unidades = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
    var decenas = ['', 'diez', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];
    var especiales = ['diez', 'once', 'doce', 'trece', 'catorce', 'quince'];

    // Convertir el número a palabras
    var numeroEnPalabras = '';

    if (numeroInput < 10) {
        numeroEnPalabras = unidades[numeroInput];
    } else if (numeroInput < 16) {
        numeroEnPalabras = especiales[numeroInput - 10];
    } else if (numeroInput < 100) {
        var unidad = numeroInput % 10;
        var decena = Math.floor(numeroInput / 10);
        numeroEnPalabras = decenas[decena];
        if (unidad !== 0) {
            numeroEnPalabras += ' y ' + unidades[unidad];
        }
    } else {
        numeroEnPalabras = 'Número fuera de rango';
    }

    resultado.innerHTML = 'En letras: ' + numeroEnPalabras;
}
