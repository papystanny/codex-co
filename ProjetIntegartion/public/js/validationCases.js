function checkCheckbox(checkbox) {
    var checkbox1 = document.getElementById('checkbox1');
    var checkbox2 = document.getElementById('checkbox2');
    var checkbox3 = document.getElementById('checkbox3');
    var checkbox4 = document.getElementById('checkbox4');
    var checkbox5 = document.getElementById('checkbox5');
    var checkbox6 = document.getElementById('checkbox6');
    var checkbox7 = document.getElementById('checkbox7');
    var checkbox8 = document.getElementById('checkbox8');
    var checkbox9 = document.getElementById('checkbox9');
    var checkbox10 = document.getElementById('checkbox10');
    var checkbox11 = document.getElementById('checkbox11');
    var checkbox12 = document.getElementById('checkbox12');
    var checkbox13 = document.getElementById('checkbox13');
    var checkbox14 = document.getElementById('checkbox14');
    var checkbox15 = document.getElementById('checkbox15');
    var checkbox16 = document.getElementById('checkbox16');
    var checkbox17 = document.getElementById('checkbox17');
    var checkbox18 = document.getElementById('checkbox18');
    var checkbox19 = document.getElementById('checkbox19');
    var checkbox20 = document.getElementById('checkbox20');
    var checkbox21 = document.getElementById('checkbox21');


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



    if (checkbox === checkbox5 && !checkbox4.checked) {
        checkbox5.checked = false; // Empêche la coche de checkbox4 si checkbox1 n'est pas coché
    }
    if (checkbox === checkbox6 && !checkbox4.checked) {
        checkbox6.checked = false; // Empêche la coche de checkbox4 si checkbox1 n'est pas coché
    }
    if(!checkbox4.checked)
    {
        checkbox5.checked = false;
        checkbox6.checked = false;
    }

    if (checkbox === checkbox8 && !checkbox7.checked) {
        checkbox8.checked = false; // Empêche la coche de checkbox7 si checkbox1 n'est pas coché
    }
    if (checkbox === checkbox9 && !checkbox7.checked) {
        checkbox9.checked = false; // Empêche la coche de checkbox7 si checkbox1 n'est pas coché
    }
    if(!checkbox7.checked)
    {
        checkbox8.checked = false;
        checkbox9.checked = false;
    }

    if (checkbox === checkbox11 && !checkbox10.checked) {
        checkbox11.checked = false; // Empêche la coche de checkbox10 si checkbox1 n'est pas coché
    }
    if (checkbox === checkbox12 && !checkbox10.checked) {
        checkbox12.checked = false; // Empêche la coche de checkbox10 si checkbox1 n'est pas coché
    }
    if(!checkbox10.checked)
    {
        checkbox11.checked = false;
        checkbox12.checked = false;
    }

    if (checkbox === checkbox14 && !checkbox13.checked) {
        checkbox14.checked = false; // Empêche la coche de checkbox13 si checkbox1 n'est pas coché
    }
    if (checkbox === checkbox15 && !checkbox13.checked) {
        checkbox15.checked = false; // Empêche la coche de checkbox13 si checkbox1 n'est pas coché
    }
    if(!checkbox13.checked)
    {
        checkbox14.checked = false;
        checkbox15.checked = false;
    }

    if (checkbox === checkbox17 && !checkbox16.checked) {
        checkbox17.checked = false; // Empêche la coche de checkbox16 si checkbox1 n'est pas coché
    }
    if (checkbox === checkbox18 && !checkbox16.checked) {
        checkbox18.checked = false; // Empêche la coche de checkbox16 si checkbox1 n'est pas coché
    }
    if(!checkbox16.checked)
    {
        checkbox17.checked = false;
        checkbox18.checked = false;
    }

    if (checkbox === checkbox20 && !checkbox19.checked) {
        checkbox20.checked = false; // Empêche la coche de checkbox19 si checkbox1 n'est pas coché
    }
    if (checkbox === checkbox21 && !checkbox19.checked) {
        checkbox21.checked = false; // Empêche la coche de checkbox19 si checkbox1 n'est pas coché
    }
    if(!checkbox19.checked)
    {
        checkbox20.checked = false;
        checkbox21.checked = false;
    }

}