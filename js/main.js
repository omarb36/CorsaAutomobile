
// BOUTON DECOUVRIRE NAVBAR
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("button-decouvrir").addEventListener("click", function() {
      document.getElementById("section-cartes").scrollIntoView({
          behavior: "smooth"
      });
  });
});

// AFFICHAGE DES VOITURES QUAND ON CLIQUE SUR UN CONSTRUCTEUR

document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.voir-voitures');
  const popup = document.getElementById('popup');
  const closePopup = document.querySelector('.close');

  buttons.forEach(button => {
      button.addEventListener('click', () => {
          popup.style.display = 'flex';
          const constructeurId = button.getAttribute('data-constructeur');

          fetch(`https://filrouge.uha4point0.fr/V2/car/voitures`)
              .then(response => response.json())
              .then(data => {
                  const voitures = data.filter(voiture => voiture.constructeur == constructeurId);
                  afficherVoitures(voitures);
              });
      });
  });

  closePopup.addEventListener('click', () => {
      popup.style.display = 'none';
  });

  popup.addEventListener('click', (e) => {
      if (e.target === popup) {
          popup.style.display = 'none';
      }
  });

  function afficherVoitures(voitures) {
      const voitureDetails = document.getElementById('voiture-details');
      voitureDetails.innerHTML = '';

      if (voitures.length === 0) {
        voitureDetails.innerHTML = '<p>Aucune voiture disponible pour le moment.</p>';
        return;
    }

      voitures.forEach(voiture => {
          const voitureElement = document.createElement('div');

          const usineInfo = voiture.usine && voiture.usine.length > [] 
            ? `<ul>Usines : ${voiture.usine.map(usine => `<li>${usine}</li>`).join('')}</ul>`
            : '<p>Aucune usine disponible pour ce modèle.</p>';

          voitureElement.innerHTML = `
              <h2 style="margin-top: 10px;">${voiture.nom}</h2>
              <p>Période de production : ${voiture.description}</p>
              <p>Production totale : ${voiture.production}</p>
              <img src="${voiture.image}" alt="Image de ${voiture.nom}" style="width: 300px; margin: 30px 0px;">
              ${usineInfo}
          `;
          voitureDetails.appendChild(voitureElement);

      }); 
  }
});



// BURGER MENU