const PAGES = [
  { fichier: 'index.html',          nom: 'Entreprise' },
  { fichier: 'competences.html',    nom: 'Compétences' },
  { fichier: 'missions-e5.html',    nom: 'Missions E5' },
  { fichier: 'e6.html',             nom: 'Épreuve E6' },
  { fichier: 'certifications.html', nom: 'Certifications' },
  { fichier: 'veille.html',         nom: 'Veille' },
  { fichier: 'contact.html',        nom: 'Contact' },
];

const ICONES = `
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
  <symbol id="i-check" viewBox="0 0 24 24"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></symbol>
  <symbol id="i-briefcase" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></symbol>
  <symbol id="i-mail" viewBox="0 0 24 24"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></symbol>
  <symbol id="i-file" viewBox="0 0 24 24"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></symbol>
  <symbol id="i-github" viewBox="0 0 24 24"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></symbol>
  <symbol id="i-linkedin" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></symbol>
  <symbol id="i-menu" viewBox="0 0 24 24"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></symbol>
</svg>`;

const pageActuelle = location.pathname.split('/').pop() || 'index.html';

const liens = PAGES.map((page) => {
  const actif = page.fichier === pageActuelle;
  return `<a href="${page.fichier}"${actif ? ' class="actif" aria-current="page"' : ''}>${page.nom}</a>`;
}).join('');

const header = document.getElementById('header');
header.innerHTML = `
  ${ICONES}
  <div class="entete-barre">
    <a class="identite" href="index.html">
      <img src="assets/img/photo-identite.png" alt="">
      <span>
        <strong>Mathéo THEFANY</strong>
        <small>BTS SIO · option SLAM</small>
      </span>
    </a>
    <button class="burger" type="button" aria-expanded="false" aria-controls="menu" aria-label="Ouvrir le menu">
      <svg class="icone"><use href="#i-menu"/></svg>
    </button>
    <nav id="menu" class="menu" aria-label="Navigation principale">${liens}</nav>
  </div>`;

const burger = header.querySelector('.burger');
burger.addEventListener('click', () => {
  const ouvert = header.classList.toggle('ouvert');
  burger.setAttribute('aria-expanded', ouvert);
  burger.setAttribute('aria-label', ouvert ? 'Fermer le menu' : 'Ouvrir le menu');
});

const annee = document.getElementById('annee');
if (annee) annee.textContent = new Date().getFullYear();