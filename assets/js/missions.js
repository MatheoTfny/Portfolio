const COMPETENCES_B1 = {
  'B1.1': 'Gérer le patrimoine informatique',
  'B1.2': "Répondre aux incidents et aux demandes d'assistance et d'évolution",
  'B1.3': "Développer la présence en ligne de l'organisation",
  'B1.4': 'Travailler en mode projet',
  'B1.5': 'Mettre à disposition des utilisateurs un service informatique',
  'B1.6': 'Organiser son développement professionnel',
};

const missions = document.querySelectorAll('.mission');

const boutonsFiltre = document.querySelectorAll('.filtre');

boutonsFiltre.forEach((bouton) => {
  bouton.addEventListener('click', () => {
    const filtre = bouton.dataset.filtre;

    boutonsFiltre.forEach((b) => b.classList.toggle('actif', b === bouton));
    missions.forEach((mission) => {
      mission.hidden = filtre !== 'tout' && mission.dataset.categorie !== filtre;
    });
  });
});

const codes = Object.keys(COMPETENCES_B1);

let html = '<thead><tr><th scope="col">Réalisation</th>';
codes.forEach((code) => {
  html += `<th scope="col" title="${COMPETENCES_B1[code]}">${code}</th>`;
});
html += '</tr></thead><tbody>';

missions.forEach((mission) => {
  const comps = (mission.dataset.comp || '').split(' ').filter(Boolean);
  const titre = mission.querySelector('h3').textContent;
  const contexte = mission.querySelector('.mission-contexte').textContent;

  mission.querySelector('.mission-comp').innerHTML = comps
    .map((code) => `<span title="${COMPETENCES_B1[code] || ''}">${code}</span>`)
    .join('');

  html += `<tr><td>${titre}<span class="categorie">${contexte}</span></td>`;
  codes.forEach((code) => {
    html += comps.includes(code)
      ? '<td class="coche" aria-label="oui">✓</td>'
      : '<td aria-label="non"></td>';
  });
  html += '</tr>';
});

html += '</tbody>';
document.getElementById('synthese').innerHTML = html;