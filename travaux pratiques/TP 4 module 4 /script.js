const prixHt = document.getElementById('prixHt');
const txTva = document.getElementById('txTva');
const btnValidate = document.querySelector('form')

btnValidate.addEventListener('submit', formValidate);

function formValidate(event){
    if (prixHt.value === '' || txTva.value === ''){
        event.preventDefault();
        alert("Merci de renseigner tous les champs")
    }
}

