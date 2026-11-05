/*
 * Animations de la page d'accueil (chargées uniquement sur l'accueil, en différé).
 *
 * - Héros : titre révélé ligne par ligne, compteurs qui montent, puis boutons.
 * - « Ton parcours » : la ligne se remplit au défilement jusqu'à l'étape en cours.
 * - Métiers : filtre par lycée, changement instantané (sans animation).
 * - Défilement doux (Lenis) sur ordinateur uniquement.
 *
 * Sans JavaScript, tout est visible. Avec « réduire les animations », aucun déplacement.
 */
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { SplitText } from 'gsap/SplitText';
import Lenis from 'lenis';
import 'lenis/dist/lenis.css';
import './styles/home.css';

gsap.registerPlugin(ScrollTrigger, SplitText);

const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
// La classe .motion (posée dans le <head>) est retirée par le filet de sécurité si le script arrive trop tard :
// dans ce cas le contenu est déjà affiché et on ne le masque plus.
const motionAllowed = () => !reduceMotion && document.documentElement.classList.contains('motion');
// Ne jamais attendre les polices plus de 600 ms : sur une connexion lente, le titre doit apparaître.
const fontsReady = () => Promise.race([document.fonts.ready, new Promise((resolve) => setTimeout(resolve, 600))]);
const EASE = 'expo.out';
const HEADER_OFFSET = -96;

let lenis = null;

function initSmoothScroll() {
    if (reduceMotion || !window.matchMedia('(pointer: fine)').matches) {
        return;
    }

    lenis = new Lenis({ lerp: 0.1, anchors: { offset: HEADER_OFFSET } });
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);
}

function initHero() {
    const hero = document.querySelector('[data-hero]');
    if (!hero) return;

    const title = hero.querySelector('[data-hero-title]');
    const fades = hero.querySelectorAll('[data-hero-fade]');
    const counters = hero.querySelectorAll('[data-count]');

    fontsReady().then(() => {
        if (!motionAllowed()) return;
        window.__homeMotion = true;

        const split = SplitText.create(title, { type: 'lines', mask: 'lines', linesClass: 'hero-line' });
        gsap.set(title, { autoAlpha: 1 });

        gsap.timeline({ defaults: { ease: EASE } })
            .from(split.lines, { yPercent: 110, duration: 0.95, stagger: 0.12 })
            .to(fades, { autoAlpha: 1, y: 0, duration: 0.7, stagger: 0.08 }, '-=0.55')
            .add(() => countUp(counters), '-=0.5');
    });
}

function countUp(counters) {
    counters.forEach((el) => {
        const target = Number(el.dataset.count) || 0;
        const state = { value: 0 };
        gsap.to(state, {
            value: target,
            duration: 1.4,
            ease: 'power3.out',
            onUpdate: () => {
                el.textContent = Math.round(state.value).toLocaleString('fr-FR');
            },
        });
    });
}

function initParcours() {
    const parcours = document.querySelector('[data-parcours]');
    if (!parcours) return;

    const fill = parcours.querySelector('[data-parcours-fill]');
    const dots = [...parcours.querySelectorAll('[data-parcours-dot]')];
    const target = Number(parcours.dataset.progress) || 0;

    if (!motionAllowed()) return;

    const mm = gsap.matchMedia();
    mm.add({ wide: '(min-width: 768px)', narrow: '(max-width: 767px)' }, (ctx) => {
        const axis = ctx.conditions.wide ? 'scaleX' : 'scaleY';
        const reached = dots.map((_, i) => i / Math.max(1, dots.length - 1));

        gsap.fromTo(fill, { [axis]: 0 }, {
            [axis]: target,
            ease: 'none',
            scrollTrigger: {
                trigger: parcours,
                start: 'top 75%',
                end: 'bottom 60%',
                scrub: 0.6,
                onUpdate: (self) => {
                    const progress = self.progress * target;
                    dots.forEach((dot, i) => dot.classList.toggle('is-lit', progress >= reached[i] - 0.001));
                },
            },
        });
    });
}

function initMetiersFilter() {
    const root = document.querySelector('[data-metiers]');
    if (!root) return;

    const buttons = [...root.querySelectorAll('[data-filtre]')];
    const cards = [...root.querySelectorAll('[data-metier]')];
    const label = root.querySelector('[data-filtre-label]');
    const textes = JSON.parse(label?.dataset.textes || '{}');
    root.querySelector('[data-filtre-group]')?.removeAttribute('hidden');

    // Changement de lycée instantané, sans animation : chaque carte affichée est remise dans son état normal
    // (une carte pas encore « révélée » au défilement resterait sinon invisible).
    const apply = (filtre) => {
        gsap.killTweensOf(cards);
        gsap.set(cards, { clearProps: 'opacity,visibility,transform' });

        buttons.forEach((btn) => btn.setAttribute('aria-pressed', String(btn.dataset.filtre === filtre)));
        if (label && textes[filtre]) label.textContent = textes[filtre];

        cards.forEach((card) => {
            const places = JSON.parse(card.dataset.places || '{}');
            const visible = filtre === 'tous' || (places[filtre] ?? 0) > 0;
            card.style.display = visible ? '' : 'none';
            card.querySelector('[data-metier-total]').textContent = filtre === 'tous'
                ? card.dataset.total
                : String(places[filtre] ?? 0);
            card.querySelectorAll('[data-lieu]').forEach((li) => {
                li.hidden = filtre !== 'tous' && li.dataset.lieu !== filtre;
            });
        });

        ScrollTrigger.refresh();
    };

    buttons.forEach((btn) => btn.addEventListener('click', () => apply(btn.dataset.filtre)));
}

function initListReveals() {
    if (!motionAllowed()) return;

    // Seules les listes apparaissent en cascade (cartes lycées, métiers, pièces), une fois.
    document.querySelectorAll('[data-reveal-list]').forEach((list) => {
        const items = list.querySelectorAll(':scope > [data-reveal-item]');
        gsap.set(items, { autoAlpha: 0, y: 28 });
        ScrollTrigger.batch(items, {
            start: 'top 88%',
            once: true,
            onEnter: (batch) => gsap.to(batch, { autoAlpha: 1, y: 0, duration: 0.7, ease: EASE, stagger: 0.07, overwrite: true }),
        });
    });
}

// Présentation : texte depuis la gauche, visuel depuis la droite, badges qui « éclosent », conditions en cascade.
const REVEALS = {
    left: { x: -48 },
    right: { x: 56, rotation: 2, scale: 0.96 },
    up: { y: 28 },
    pop: { scale: 0.6, y: 20 },
};

function initSectionReveals() {
    if (!motionAllowed()) return;

    document.querySelectorAll('[data-reveal]').forEach((el) => {
        const from = REVEALS[el.dataset.reveal] ?? REVEALS.up;
        gsap.from(el, {
            ...from,
            autoAlpha: 0,
            duration: el.dataset.reveal === 'pop' ? 0.7 : 0.9,
            delay: el.dataset.reveal === 'pop' ? 0.35 : 0,
            ease: el.dataset.reveal === 'pop' ? 'back.out(1.6)' : EASE,
            scrollTrigger: { trigger: el, start: 'top 85%', once: true },
        });
    });

    document.querySelectorAll('[data-reveal-stagger]').forEach((list) => {
        gsap.from(list.children, {
            y: 28,
            autoAlpha: 0,
            duration: 0.7,
            stagger: 0.1,
            ease: EASE,
            scrollTrigger: { trigger: list, start: 'top 88%', once: true },
        });
    });
}

// Les boucles décoratives ne tournent que lorsque leur section est à l'écran.
function initDecorLoops() {
    const sections = document.querySelectorAll('[data-loops]');
    if (!sections.length || !('IntersectionObserver' in window)) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => entry.target.classList.toggle('loops-off', !entry.isIntersecting));
    });
    sections.forEach((section) => observer.observe(section));
}

// Les fiches s'ouvrent sans ce script (attribut onclick) ; ici : pause du défilement doux et fermeture au clic sur le fond.
function initMetierDialogs() {
    document.querySelectorAll('[data-open-dialog]').forEach((btn) => {
        const dialog = document.getElementById(btn.dataset.openDialog);
        if (!dialog) return;
        btn.addEventListener('click', () => lenis?.stop());
        dialog.addEventListener('close', () => lenis?.start());
        dialog.addEventListener('click', (e) => {
            if (e.target === dialog) dialog.close();
        });
    });
}

function start() {
    initSmoothScroll();
    initHero();
    initParcours();
    initMetiersFilter();
    initListReveals();
    initSectionReveals();
    initDecorLoops();
    initMetierDialogs();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', start);
} else {
    start();
}
