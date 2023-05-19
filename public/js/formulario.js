// const create = str => document.createElement(str);
// const files = document.querySelectorAll('.fancy-file');
// Array.from(files).forEach(
//     f => {
//         const label = create('label');
//         const span_text = create('span');
//         const span_name =create('span');
//         const span_button = create('span');

//         label.htmlFor = f.id;

//         span_text.className = 'fancy-file__fancy-file-name';
//         span_button.className = 'fancy-file__fancy-file-button';

//         span_name.innerHTML = f.dataset.empty || 'Ningun archivo seleccionado';
//         span_button.innerHTML = f.dataset.button || 'Buscar';

//         label.appendChild(span_text);
//         label.appendChild(span_button);
//         span_text.appendChild(span_name);
//         f.parentNode.appendChild(label);

//         span_name.style.width = (span_text.clientWidth - 20)+'px';

//         f.addEventListener('change', e => {
//             if( f.files.length == 0 ){
//                 span_name.innerHTML = f.dataset.empty ||'Ningún archivo seleccionado';
//             }else if( f.files.length > 1 ){
//                 span_name.innerHTML = f.files.length + ' archivos seleccionados';
//             }else{
//                 span_name.innerHTML = f.files[0].name;
//             }
//         } );   
//     }
// );

function showTab(n) {
    var x = document.getElementsByClassName("step");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "ENVIAR";
    } else {
        document.getElementById("nextBtn").innerHTML = "SIGUIENTE";
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("step");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        document.getElementById("signUpForm").submit();
        return false;
    }
    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("step");
    y = x[currentTab].getElementsByTagName("input");
    z = x[currentTab].getElementsByTagName("select");
    t = x[currentTab].getElementsByTagName("textarea");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        }
    }
    for (i = 0; i < z.length; i++) {
        if (z[i].value == "") {
            z[i].className += " invalid";
            valid = false;
        }
    }
    for (i = 0; i < t.length; i++) {
        if (t[i].value == "") {
            t[i].className += " invalid";
            valid = false;
        }
    }
    return valid;
}

function HabeasClic() {
    var checkBox = document.getElementById("habeas");
    if (checkBox.checked == true) {
        checkBox.value = "1";
    } else {
        checkBox.value = "";
    }
}