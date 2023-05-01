// Fonction pour copier le contenu d'un champ de texte dans le presse-papier
function copyToClipboard(button) {
	var input = button.parentNode.previousElementSibling.firstElementChild;
	input.select();
	input.setSelectionRange(0, 99999);
	document.execCommand("copy");
}
// Script pour gérer les onglets
function openTab(evt, tabName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(tabName).style.display = "block";
	evt.currentTarget.className += " active";
}
// Code JavaScript pour afficher par défaut l'onglet "tab1"
document.getElementById("tab1").style.display = "block";
document.getElementById("defaultOpen").classList.add("active");

// code pour ouvrir un nouvel onglet
function openTab(evt, tabName) {
    // Déclaration des variables
    var i, tabcontent, tablinks;

    // Masquer tous les éléments ayant la classe "tabcontent"
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Supprimer la classe "active" de tous les boutons d'onglets
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Afficher l'onglet actuel et ajouter la classe "active" au bouton qui a ouvert l'onglet
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}