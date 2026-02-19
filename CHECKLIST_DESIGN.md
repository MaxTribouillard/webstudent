# ✅ CHECKLIST DESIGN - COHÉRENCE VISUELLE

## 🎨 Avant d'Ajouter un Nouveau Composant

### 1. Palette Couleur
- [ ] J'utilise uniquement les variables CSS du système
- [ ] Je n'ajoute pas de nouvelles couleurs sans raison
- [ ] Mes couleurs sont désaturées (pas de RGB saturé à 100%)
- [ ] Les contrastes respectent WCAG AAA (7:1 minimum)

### 2. Typographie
- [ ] J'utilise `var(--font-display)` pour les titres
- [ ] J'utilise `var(--font-body)` pour le texte
- [ ] Mon `letter-spacing` ne dépasse pas 0.05em
- [ ] Je n'utilise pas `text-transform: uppercase` sur + 4 lettres
- [ ] Mes tailles de police suivent l'échelle du système

### 3. Espacements
- [ ] Tous mes espacements sont des multiples de 4px
- [ ] J'utilise les variables `--space-*`
- [ ] Les gaps entre éléments sont cohérents (6, 8, 12, etc.)
- [ ] Les padding de cards sont de 32-48px (space-8 à space-12)

### 4. Bordures & Ombres
- [ ] Mes bordures font 1-2px maximum (jamais 3px+)
- [ ] J'utilise les variables `--shadow-*`
- [ ] Les border-radius utilisent `--radius-*`
- [ ] Pas de bordures double ou triple

### 5. Animations & Transitions
- [ ] Mes animations se déclenchent au hover/focus uniquement
- [ ] La durée est entre 150ms et 400ms
- [ ] J'utilise `var(--transition-*)` 
- [ ] Pas d'animations auto-play sur la page
- [ ] Max 1 animation par élément

---

## 🔍 Checklist Composant Card

- [ ] Background: dégradé subtil parchement
- [ ] Border: 1px solid `--parchment-400`
- [ ] Border-radius: `--radius-xl` (16px)
- [ ] Padding: `--space-10` (40px)
- [ ] Shadow: `--shadow-lg`
- [ ] Bordure décorative 4px en haut (maisons)
- [ ] Pas de texture bruyante en fond

---

## 🔘 Checklist Bouton

- [ ] Padding: `--space-4` `--space-6` (16px 24px)
- [ ] Border: 1.5px solid
- [ ] Font-weight: 600
- [ ] Display: inline-flex avec gap
- [ ] Transition: `var(--transition-base)`
- [ ] Hover: `translateY(-2px)` + shadow
- [ ] Icône: 18px × 18px

---

## 📊 Checklist Table

- [ ] Header: background stone avec dégradé
- [ ] Border: 1px solid `--parchment-400`
- [ ] Hover row: background `rgba(168, 136, 74, 0.06)`
- [ ] Padding cells: `--space-4` `--space-5`
- [ ] Text-transform sur headers uniquement
- [ ] Pas de zebra striping (alterner couleurs)

---

## 📝 Checklist Formulaire

- [ ] Label: font-display, 600, sans caps
- [ ] Input padding: `--space-4` `--space-5`
- [ ] Border: 1.5px solid `--parchment-400`
- [ ] Focus: border `--gold-500` + shadow subtile
- [ ] Border-radius: `--radius-md`
- [ ] Background: rgba(255, 255, 255, 0.8)

---

## 🏡 Checklist House Card

- [ ] Border: 2px solid (couleur maison)
- [ ] Padding: `--space-8` (32px)
- [ ] Crest: 80px circulaire avec dégradé
- [ ] Name: 1.5rem sans caps
- [ ] Trait: italic, couleur désaturée
- [ ] Count: 2.5rem, bold, or
- [ ] Hover: `translateY(-8px)` + shadow colorée

---

## 🎯 Checklist Responsive

### Desktop (> 1024px)
- [ ] Layout complet avec toutes les colonnes
- [ ] Navigation horizontale
- [ ] Grids avec minmax(280px, 1fr)

### Tablet (768-1023px)
- [ ] Navigation wrapped
- [ ] Grids adaptées (2-3 colonnes)
- [ ] Espacements légèrement réduits

### Mobile (< 767px)
- [ ] Navigation verticale
- [ ] Grids en 1 colonne
- [ ] Buttons pleine largeur
- [ ] Typographie réduite (H1 1.875rem)

### Tiny (< 480px)
- [ ] Padding minimal
- [ ] Logo plus petit
- [ ] Cards condensées

---

## ⚡ Checklist Performance

- [ ] Pas d'images background lourdes
- [ ] SVG inline uniquement si < 1KB
- [ ] Animations CSS uniquement (pas JS)
- [ ] Pas de `box-shadow` sur + 50 éléments
- [ ] Dégradés CSS natifs (pas d'images)

---

## ♿ Checklist Accessibilité

- [ ] Contraste texte/fond ≥ 7:1
- [ ] Tous les liens ont du texte ou aria-label
- [ ] Icons décoratives ont `aria-hidden="true"`
- [ ] Focus visible sur tous les interactifs
- [ ] Navigation clavier fonctionnelle
- [ ] Headings hiérarchisés (H1 → H2 → H3)
- [ ] Alt text sur toutes les images

---

## 🧪 Tests Avant Commit

### Visuel
- [ ] Testé sur Chrome, Firefox, Safari
- [ ] Testé desktop (1920px)
- [ ] Testé tablet (768px)
- [ ] Testé mobile (375px)
- [ ] Zoom à 200% fonctionnel

### Code
- [ ] Pas de CSS inline dans le HTML
- [ ] Variables CSS utilisées partout
- [ ] Pas de !important (sauf exception justifiée)
- [ ] Classes nommées de façon cohérente
- [ ] Commentaires sur sections complexes

### Qualité
- [ ] Pas de console.error
- [ ] Icons Lucide initialisés
- [ ] Pas de FOUC (flash of unstyled content)
- [ ] Fonts chargées (pas de fallback visible)

---

## 🚫 Red Flags - À Éviter Absolument

### Couleurs
❌ RGB avec saturation 100% (ex: rgb(255, 0, 0))  
❌ Neon colors (#00ff00, #ff00ff)  
❌ Plus de 3 couleurs différentes sur un composant  

### Typographie
❌ Comic Sans ou équivalents  
❌ Plus de 3 font-families différentes  
❌ Font-size < 14px pour du texte  
❌ Line-height < 1.4 pour des paragraphes  

### Layout
❌ Position: absolute sans justification  
❌ Z-index > 1000  
❌ Margin négatifs excessifs  
❌ Width en pixels fixes sur conteneurs  

### Animations
❌ Animation duration > 600ms  
❌ Animations qui bougent en boucle  
❌ Transitions sur all  
❌ Keyframes complexes non optimisées  

---

## ✨ Green Flags - Bonnes Pratiques

### Code
✅ Variables CSS pour tout  
✅ Classes réutilisables  
✅ Mobile-first approche  
✅ Semantic HTML  

### Design
✅ Espacements cohérents  
✅ Hiérarchie claire  
✅ Contrastes optimaux  
✅ Animations subtiles  

### UX
✅ États hover/focus clairs  
✅ Feedbacks visuels immédiats  
✅ Navigation intuitive  
✅ Chargement rapide  

---

## 📋 Checklist Before Production

### Documentation
- [ ] Composant documenté dans GUIDE_RAPIDE_DESIGN.md
- [ ] Screenshot ajouté (si composant majeur)
- [ ] Variants listés
- [ ] Code example fourni

### Code Review
- [ ] Peer review effectuée
- [ ] Aucun warning dans la console
- [ ] CSS validé (W3C)
- [ ] HTML validé (W3C)

### Tests
- [ ] Tests navigateurs multiples
- [ ] Tests responsive
- [ ] Tests accessibilité (Lighthouse)
- [ ] Tests performance (PageSpeed)

---

## 🎓 Rappels Importants

### Philosophie Design

> "L'élégance, c'est éliminer l'inutile."

1. **Moins, c'est plus** : Supprimer plutôt qu'ajouter
2. **Cohérence** : Réutiliser les patterns existants
3. **Subtilité** : Les meilleurs effets sont invisibles
4. **Performance** : Chaque octet compte
5. **Accessibilité** : Pour tous, toujours

### En Cas de Doute

1. Consulter `GUIDE_RAPIDE_DESIGN.md`
2. Chercher un composant similaire existant
3. Tester sur mobile d'abord
4. Demander un peer review
5. Simplifier si complexe

---

## 📊 Scoring Qualité

### Comment Scorer Votre Composant

| Critère | Points | Votre Score |
|---------|--------|-------------|
| Utilise variables CSS | +10 | ___ |
| Espacements cohérents | +10 | ___ |
| Responsive parfait | +10 | ___ |
| Contraste WCAG AAA | +10 | ___ |
| Animations subtiles | +10 | ___ |
| Code propre/lisible | +10 | ___ |
| Documenté | +10 | ___ |
| Testé multi-browsers | +10 | ___ |
| Accessible | +10 | ___ |
| Performance optimale | +10 | ___ |

**Total** : ___ / 100

- **90-100** : Excellence ✨
- **70-89** : Très bien ✅
- **50-69** : Acceptable, à améliorer 🔶
- **< 50** : À refaire ❌

---

## 🎯 Objectifs Mensuels

### Ce Mois
- [ ] 0 violation de contraste
- [ ] 0 animation non-justifiée
- [ ] 100% composants documentés
- [ ] Lighthouse score > 90

### Amélioration Continue
- [ ] Réduire CSS de 5% ce mois
- [ ] Ajouter 2 nouveaux composants réutilisables
- [ ] Refactoriser 1 section ancienne
- [ ] Former 1 développeur aux standards

---

**Dernière mise à jour** : 30 janvier 2026  
**Design System** : v2.0  
**Mainteneur** : Équipe Poudlard

🏰 *La qualité est notre magie*
