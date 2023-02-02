const link = "https://spring-front-web-production.up.railway.app/"
function login(event) {
    event.preventDefault();
    let form_login = new FormData(event.target);
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText !== "0") {
                window.location.href="listeEncheres.php?id="+this.responseText
                
            } else
                alert("Utilisateur ou mot de passe erroné !");
        }
    };
    xhr.open("POST", link+"login", true);
    xhr.send(form_login);
}

function depot_offre(event){
    event.preventDefault();
    const form = new FormData(event.target)
    let xhr = new XMLHttpRequest()
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const response = this.responseText
            if(response == 1.0)
                alert("Votre offre a été déposé !")
            else if(response == 0)
                alert("Offre trop basse")
            else
                alert("Vous n'avez pas assez d'argent")
        }
    }
    xhr.open("POST",link+"deposerOffre",true)
    xhr.send(form)
}

function recherche(event){
    event.preventDefault()
    const form_offre = new FormData(event.target)
    let xhr = new XMLHttpRequest()
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            window.location.href = "listeEncheres.php?listeEnchere="+this.responseText
        }
    }
    if(form_offre.get("id"))
        xhr.open("GET",link+"recherche/"+form_offre.get("id")+"?nom_produit="+form_offre.get("nom_produit"),true)
    else
        xhr.open("GET",link+"recherchetous?nom_produit="+form_offre.get("nom_produit"),true)
    xhr.send(form_offre)
    
}

if (document.getElementById("login"))
    document.getElementById("login").addEventListener('submit', login)

if(document.getElementById("form-depot"))
    document.getElementById("form-depot").addEventListener('submit',depot_offre)

if(document.getElementById("form-recherche"))
    document.getElementById("form-recherche").addEventListener('submit' , recherche)


