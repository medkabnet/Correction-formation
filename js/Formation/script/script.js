// les class "is-valid et is-invali" sons des class bootstrap
// Selection input "Id:email"
var email = document.getElementById("email");
// Executer l'action a chaque KeyUp
email.addEventListener("keyup",()=>{
    // is-valid : le champs en vert
    // is-invalid : le champs en rouge avec une message d'erreur
    
    // Recupere le texte de l'input Email
    var text_email = email.value;

    // Verifier si le format d'email est correct
    // si le format est correcte is_valide = true
    // sinon is_valide = false
    var is_valide = validEmail(text_email);
    if(is_valide == true){
        // AJouter le class "is-valid" et supprimer la class "is-invalid" 
        email.classList.add("is-valid");
        email.classList.remove("is-invalid");
    }
    else{
        // Ajouter le class "is-invalid" et supprimer la class "is-valid" 
        email.classList.add("is-invalid");
        email.classList.remove("is-valid");
    }
});

var dateN = document.getElementById("dateN");
var age = document.getElementById("age");

dateN.addEventListener("change",()=>{
    // Recupere le texte de la date de naissance 
    var text_dateN = dateN.value;

    // Calculer l'age de l'utilisateur avec la fonction calculeage()
    var ageCalculer = calculeAge(text_dateN);

    // Afficher l'age dans l'input age
    age.value = ageCalculer;

    if(ageCalculer >= 12){
        // AJouter le class "is-valid" et supprimer la class "is-invalid" 
        age.classList.add("is-valid");
        age.classList.remove("is-invalid");
    }
    else{
        // Ajouter le class "is-invalid" et supprimer la class "is-valid" 
        age.classList.add("is-invalid");
        age.classList.remove("is-valid");
    }
});

var formation = document.getElementById("formation");
var formateur = document.getElementById("formateur");
var prix = document.getElementById("prix");
var listNom  = [];
// Cette methode permet de recharger le liste des formateurs dans select "Formateur" et d'afficher le prix de seance du premier formateur dans l'input prix  de seance
formation.addEventListener("change",()=>{
    // Recupere le text formation
    var texte_formation = formation.value;

    for(let i = 0 ; i < listFormateur.length ; i++){
        // Recupere chaque objet dans listFormateur
        var objFormateur = listFormateur[i];
        // Verifier si l'objet à le meme nom de formation que le select formation
        if(objFormateur.nomFormation == texte_formation){
            // Une liste avec les formateur de objFormateur
            listNom = objFormateur.listNom;
            // Vider le select Formateur avant de le remplir
            formateur.innerHTML = "";

            for(let j = 0 ; j < listNom.length ; j++){
                // Creation d'une balise Option
                var optionNom = document.createElement("option");

                // Recupere le nom du formateur de chaque objet et l'ajoute à la blise option
                optionNom.innerHTML = listNom[j].nom;

                // Ajouter le balise obtion au select formateur
                formateur.appendChild(optionNom);
            }

            // Afficher le prix de sceance du premier formateur
            prix.value = listNom[0].prixSeance;
        }
        console.log(listNom);
    }

});

// Changer le prix de seance a chaque fois que on change le formateur
formateur.addEventListener("change",()=>{
    var text_frormateur = formateur.value;
    for ( let i = 0 ; i < listNom.length ; i++){
        var objNom = listNom[i]
        if(text_frormateur == objNom.nom ){
            prix.value = objNom.prixSeance;
        }
    }
});

var nbr_seance = document.getElementById("nbr_seance");
var total = document.getElementById("total");

// Calculer le rpix total a chaque keyup sur le nombre de seance
nbr_seance.addEventListener("keyup",()=>{
    // Recupere le nombre de seance
    var text_nbr_seance = nbr_seance.value;

    // Recupere le prix de seance
    var text_prix  = prix.value;

    // Calculer le total 
    total.value = text_nbr_seance * text_prix;
});

var vider = document.getElementById("vider");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");

vider.addEventListener("click",()=>{
    // Vider les inputs suivant
    //  "" : chaine vide
    nom.value = "";
    prenom.value = "";
    email.value = "";
    dateN.value = "";
    age.value = "";
    nbr_seance.value = "";
    total.value = "";
    email.classList.add("is-invalid");
    email.classList.remove("is-valid");
    age.classList.add("is-invalid");
    age.classList.remove("is-valid");
});

var valider = document.getElementById("valider");
valider.addEventListener("click",()=>{
    var tnom = nom.value ;
    var tprenom = prenom.value ;
    var temail = email.value;
    var tdateN = dateN.value;
    var tage = age.value ;
    var tformation = formation.value;
    var tformateur = formateur.value;
    var tprix = prix.value;
    var tnbr_seance = nbr_seance.value;
    var ttotal = total.value ;

    var utilisateur = {
        "nom" : tnom,
        "prenom" : tprenom,
        "email" : temail,
        "dateN" : tdateN,
        "age" : tage,
        "formation" : tformation,
        "formateur" : tformateur,
        "prix" : tprix,
        "nbr_seance"  : tnbr_seance,
        "total" : ttotal
    }

    console.log(utilisateur);
})