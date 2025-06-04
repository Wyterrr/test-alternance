// TODO: Au clic sur le bouton "Ajouter au panier" :
// 1. Changer le texte du bouton en "Ajouté ✓"
// 2. Désactiver le bouton (disabled = true)
// 3. Changer la couleur de fond du bouton en vert
// 4. Afficher une alerte "Produit ajouté au panier !"

// Votre code ici :

bouton = document.querySelector('button');
bouton.addEventListener('click', function() {
    bouton.textContent = 'Ajouté ✓';    
    bouton.disabled = true;    
    bouton.style.backgroundColor = 'green';
    
    alert('Produit ajouté au panier !');
});