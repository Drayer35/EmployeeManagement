const defaultphoto= "img/photo.png";
const file= document.getElementById('add-photo');
const img=document.getElementById('img');

    file.addEventListener('change',e => {
    console.log(e.target.files);
    if(e.target.files[0]){
        const reader = new FileReader();
        reader.onload=function (e){
            img.src= e.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    }else{
        img.src=defaultphoto;
    }
}); 


function listProvinces(departmentSelect){
    let depId=departmentSelect.value;

    fetch('')
    alert(departmentSelect.value);
}