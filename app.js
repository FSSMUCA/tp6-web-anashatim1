
let historique = [];

const form = document.querySelector("form");
const erreurDiv = document.getElementById("erreur");
const historiqueSection = document.getElementById("historique");

form.addEventListener("submit", function(event) {
    event.preventDefault(); 

    let A = document.querySelector("input[name='a']").value;
    let B = document.querySelector("input[name='b']").value;
    let op = document.querySelector("select[name='operation']").value;

    erreurDiv.textContent = "";

    if (A === "" || B === "") {
        erreurDiv.textContent = "Veuillez remplir les deux nombres.";
        return;
    }

    A = Number(A);
    B = Number(B);

    if (op === "/" && B === 0) {
        erreurDiv.textContent = "Erreur : division par zéro interdite.";
        return;
    }

    let resultat;
    switch (op) {
        case "+": resultat = A + B; break;
        case "-": resultat = A - B; break;
        case "*": resultat = A * B; break;
        case "/": resultat = A / B; break;
    }

    let operation = `${A} ${op} ${B} = ${resultat}`;
    historique.push(operation);

    afficherHistorique();
});


function afficherHistorique() {
    const liste = document.createElement("ul");

    historique.forEach(item => {
        const li = document.createElement("li");
        li.textContent = item;
        liste.appendChild(li);
    });

    historiqueSection.innerHTML = "";
    historiqueSection.appendChild(liste);
}
