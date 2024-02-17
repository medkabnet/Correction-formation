/**
 * List des formateurs par formationavec le prix de seance
 */
const listFormateur = [
    {
        nomFormation : "programmation web",
        listNom :[
            {
                nom : "Karim",
                prixSeance : 110
            },
            {
                nom : "Sanae",
                prixSeance : 120
            },
            {
                nom : "Oussama",
                prixSeance : 100
            },
        ]
    },
    {
        nomFormation : "programmation mobile",
        listNom :[
            {
                nom : "Ghita",
                prixSeance : 130
            },
            {
                nom : "Hassan",
                prixSeance : 110
            },
            {
                nom : "Achraf",
                prixSeance : 135
            },
        ]
    },
    {
        nomFormation : "infographie",
        listNom :[
            {
                nom : "Issam",
                prixSeance : 125
            },
            {
                nom : "Amine",
                prixSeance : 150
            },
            {
                nom : "Oumaima",
                prixSeance : 110
            },
        ]
    },
]

/**
 * 
 * @param {string} dateNaissance date de naissance 
 * @returns {number} retourne l'age
 */
function calculeAge(dateNaissance){
    /**
     * dateN : l'année de naissance 
     */
    const dateN = new Date(dateNaissance).getFullYear();
    /**
     * dateNow : l'année acctuel
     */
    const dateNow =  new Date().getFullYear();
    return dateNow-dateN
}

/**
 * 
 * @param {string} email l'email
 * @returns retourn une valeur boolene 
 *          "True" : si le forma d'email est valide
 *          "False" : si le forma d'email est non valide
 */
function validEmail(email) {
    var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
    return String(email).search (filter) != -1;
}