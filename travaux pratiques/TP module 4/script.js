const form = document.querySelector('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const adresse = document.getElementById("adresse");
const cp = document.getElementById("cp");
const ville = document.getElementById("ville");
const email = document.getElementById("email");

form.addEventListener('submit', formValidator);

function formValidator(event) {
    if (nom.value === "" || prenom.value === "" || adresse.value === "" || cp.value === "" || ville.value === "" || email.value === "" ){
        event.preventDefault(); // Empêche le rechargement de la page
        alert("Vous devez remplir tous les champs du formulaire !")
    }
}
