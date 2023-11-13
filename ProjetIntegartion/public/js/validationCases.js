function checkCheckbox(checkbox) {
    var checkbox1 = document.getElementById('checkbox1');
    var checkbox2 = document.getElementById('checkbox2');

    if (checkbox === checkbox2 && !checkbox1.checked) {
        checkbox2.checked = false; // Empêche la coche de checkbox2 si checkbox1 n'est pas coché
    }
}