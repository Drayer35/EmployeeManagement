const defaultphoto = "img/photo.png";
const file = document.getElementById('add-photo');
const img = document.getElementById('img');
const btnPhoto = document.getElementById('btn-photo');
const input_name = document.getElementById('name_input');

function verifyStateButton() {
    console.log(btnPhoto.innerHTML);
    if (btnPhoto.innerHTML === 'Agregar Foto') {
        return true;
    } else {
        return false;
    }
}

btnPhoto.addEventListener('click', (e) => {
    if (verifyStateButton()) {
        file.click();
    } else {
        img.src = defaultphoto;
        file.value =null
        btnPhoto.innerHTML = 'Agregar Foto';
    }
});

file.addEventListener('change', e => {
    console.log(e.target.files);
    if (e.target.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            img.src = e.target.result;
        };
        reader.readAsDataURL(e.target.files[0]);
        btnPhoto.innerHTML = 'Quitar Foto';
    } else {
        img.src = defaultphoto;
        btnPhoto.innerHTML = 'Agregar Foto';
    }
});


function validateWord(input) {
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
  }
function validateNumber(input) {
    input.value = input.value.replace(/\D/g, '');
}