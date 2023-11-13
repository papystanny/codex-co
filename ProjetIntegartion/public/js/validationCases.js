function checkCheckbox(checkbox) {
    var checkbox1 = document.getElementById('checkbox1');
    var checkbox2 = document.getElementById('checkbox2');
    var checkbox3 = document.getElementById('checkbox3');

    if (checkbox === checkbox2 && !checkbox1.checked) {
        checkbox2.checked = false; // Empêche la coche de checkbox2 si checkbox1 n'est pas coché
    }
     if(checkbox === checkbox3 && !checkbox1.checked) {
        checkbox3.checked = false; // Empêche la coche de checkbox2 si checkbox1 est coché
    }
   /* if ((checkbox === checkbox1 && !checkbox1.checked) (checkbox === checkbox1 && checkbox1.checked)) {
        checkbox2.checked = false; // Coche checkbox2 si checkbox1 est coché
        checkbox3.checked = true; // Coche checkbox3 si checkbox1 est coché
    }*/
    if(!checkbox1.checked)
    {
        checkbox2.checked = false;
        checkbox3.checked = false;
    }
}