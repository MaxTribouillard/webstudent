# 🎨 GUIDE RAPIDE - DESIGN SYSTEM POUDLARD

## 🚀 Quick Start

### Palette Principale
```css
/* À utiliser en priorité */
--gold-500: #a8884a          /* Accents, liens, bordures */
--stone-800: #2d2723         /* Backgrounds sombres */
--parchment-200: #f2ede4     /* Cards, conteneurs clairs */
--stone-900: #1a1512         /* Textes sur fond clair */
--parchment-300: #ede3d3     /* Textes sur fond sombre */
```

### Espacements (Système 8px)
```css
--space-4: 1rem     /* Padding standard */
--space-6: 1.5rem   /* Gaps grids */
--space-8: 2rem     /* Padding cards */
--space-12: 3rem    /* Sections */
```

### Typographie Rapide
```css
/* Titres */
font-family: var(--font-display);  /* Cinzel */
font-weight: 600;
letter-spacing: 0.01em;

/* Corps de texte */
font-family: var(--font-body);     /* EB Garamond */
font-size: 1.0625rem;
line-height: 1.7;
```

---

## 📦 Composants Prêts à l'Emploi

### Card Standard
```html
<div class="card">
    <div class="card-header">
        <h2 class="card-title">
            <i data-lucide="icon-name"></i>
            Titre de la Card
        </h2>
    </div>
    <!-- Contenu -->
</div>
```

### Bouton Principal
```html
<a href="#" class="btn btn-primary">
    <i data-lucide="plus"></i>
    <span>Action Principale</span>
</a>
```

### Grille de Maisons (4 colonnes responsive)
```html
<div class="houses-grid">
    <a href="#" class="house-card house-gryffindor">
        <div class="house-crest">
            <i data-lucide="flame"></i>
        </div>
        <h3 class="house-name">Gryffondor</h3>
        <p class="house-trait">Courage & Bravoure</p>
        <div class="house-count">42</div>
    </a>
    <!-- Répéter pour autres maisons -->
</div>
```

### Stats Card Horizontale
```html
<a href="#" class="stat-card magical-wands">
    <div class="stat-icon">
        <i data-lucide="wand-2"></i>
    </div>
    <div class="stat-info">
        <div class="stat-title">Baguettes Magiques</div>
        <div class="stat-value">127</div>
        <div class="stat-desc">Instruments de pouvoir</div>
    </div>
</a>
```

---

## 🎨 Classes Maisons

### Cartes Maisons
```css
.house-gryffindor   → Rouge bordeaux
.house-slytherin    → Vert émeraude
.house-ravenclaw    → Bleu nuit
.house-hufflepuff   → Ambre doré
```

### Icônes Stats
```css
.magical-wands      → Dégradé or
.magical-grades     → Dégradé bleu (Ravenclaw)
.magical-skills     → Dégradé rouge (Gryffindor)
.magical-years      → Dégradé vert (Slytherin)
.magical-exams      → Dégradé jaune (Hufflepuff)
```

---

## 🔘 Boutons Variants

```html
<!-- Primaire (rouge) -->
<button class="btn btn-primary">Action</button>

<!-- Succès (vert) -->
<button class="btn btn-success">Valider</button>

<!-- Attention (jaune) -->
<button class="btn btn-warning">Attention</button>

<!-- Danger (rouge foncé) -->
<button class="btn btn-danger">Supprimer</button>

<!-- Secondaire (gris) -->
<button class="btn btn-secondary">Annuler</button>

<!-- Petit -->
<button class="btn btn-sm btn-primary">Petit</button>
```

---

## 📊 Tableaux

```html
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Colonne 1</th>
                <th>Colonne 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Donnée 1</td>
                <td>Donnée 2</td>
            </tr>
        </tbody>
    </table>
</div>
```

---

## 📝 Formulaires

```html
<div class="form-group">
    <label class="form-label" for="input-id">Label</label>
    <input 
        type="text" 
        id="input-id" 
        class="form-control" 
        placeholder="Entrez..."
    >
</div>
```

---

## 🏷️ Badges

```html
<span class="badge badge-primary">Primaire</span>
<span class="badge badge-success">Succès</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-warning">Attention</span>
```

---

## 🔗 Liens Entités

```html
<a href="#" class="entity-link">Lien vers entité</a>
```

---

## ⚠️ Alertes

```html
<div class="alert alert-success">
    Message de succès
</div>

<div class="alert alert-danger">
    Message d'erreur
</div>

<div class="alert alert-warning">
    Message d'attention
</div>
```

---

## 🎯 Quick Actions

```html
<div class="quick-actions-grid">
    <a href="#" class="quick-action-card action-primary">
        <i data-lucide="user-plus"></i>
        <span>Nouvelle Action</span>
    </a>
    <!-- Variants: action-success, action-warning, action-info -->
</div>
```

---

## 📐 Grilles Responsive

### Auto-fit (s'adapte automatiquement)
```html
<div class="houses-grid">
    <!-- Min 280px, max 1fr, gap 24px -->
</div>

<div class="stats-grid">
    <!-- Min 260px, max 1fr, gap 20px -->
</div>

<div class="detail-grid">
    <!-- Min 280px, max 1fr, gap 24px -->
</div>
```

---

## 🎨 Classes Utilitaires

### Couleurs de Texte
```html
<span class="text-gryffindor">Texte rouge</span>
<span class="text-slytherin">Texte vert</span>
<span class="text-ravenclaw">Texte bleu</span>
<span class="text-hufflepuff">Texte jaune</span>
<span class="text-gold">Texte or</span>
<span class="text-muted">Texte grisé</span>
```

---

## 📱 Responsive Breakpoints

```css
/* Desktop (défaut) */
> 1024px : Tous les styles de base

/* Tablet */
768px - 1023px : Navigation wrapped, espacements réduits

/* Mobile */
< 767px : Navigation verticale, grids en 1 colonne

/* Tiny */
< 480px : Padding minimal, typographie réduite
```

---

## 🎭 Animations

### Au Chargement
```css
.card → fadeInUp automatique (0.6s)
```

### Au Hover
```css
.btn → translateY(-2px) + shadow
.house-card → translateY(-8px) + shadow
.stat-card → translateY(-4px) + shadow
.nav-link → Background + color change
```

**Durées** :
- Fast : 150ms
- Base : 250ms  
- Slow : 400ms

---

## ✨ Icônes Lucide

Le site utilise Lucide Icons. Exemples fréquents :

```html
<!-- Maisons -->
<i data-lucide="flame"></i>           <!-- Gryffindor -->
<i data-lucide="sparkle"></i>         <!-- Slytherin -->
<i data-lucide="book-open"></i>       <!-- Ravenclaw -->
<i data-lucide="scroll"></i>          <!-- Hufflepuff -->

<!-- Navigation -->
<i data-lucide="home"></i>
<i data-lucide="users"></i>
<i data-lucide="castle"></i>
<i data-lucide="graduation-cap"></i>
<i data-lucide="wand-2"></i>
<i data-lucide="sparkles"></i>

<!-- Actions -->
<i data-lucide="plus"></i>
<i data-lucide="edit"></i>
<i data-lucide="trash"></i>
<i data-lucide="eye"></i>
```

N'oubliez pas d'initialiser :
```javascript
lucide.createIcons();
```

---

## 🚫 À ÉVITER

❌ `text-transform: uppercase` sur paragraphes  
❌ Dégradés criards (stick to subtle)  
❌ Animations auto-play (hover only)  
❌ Border > 2px (max 2px, préférer 1-1.5px)  
❌ Couleurs saturées (désaturer toujours)  
❌ `letter-spacing` > 0.05em  
❌ Multiples `::before`/`::after` par element  

---

## ✅ BONNES PRATIQUES

✓ Utiliser les variables CSS (`var(--*)`)  
✓ Respecter l'échelle d'espacements (multiples de 4px)  
✓ Tester les contrastes (min 4.5:1, viser 7:1)  
✓ Mobile-first (styles de base, puis @media)  
✓ Animations subtiles (150-400ms max)  
✓ Semantic HTML (header, nav, main, section, article)  
✓ Accessibilité (alt, labels, aria-*)  

---

## 🔧 Maintenance

### Ajouter une Nouvelle Couleur
1. Définir dans `:root` (haut du fichier)
2. Utiliser la nomenclature `--element-variant`
3. Créer une classe utilitaire si nécessaire

### Ajouter un Composant
1. Section commentée `/* ===== COMPOSANT ===== */`
2. Styles de base
3. Variants (si nécessaire)
4. Responsive
5. Documenter dans ce guide

### Modifier une Couleur Globale
⚠️ Attention : Impact sur tout le site  
→ Vérifier les contrastes après modification  
→ Tester sur mobile/tablet  

---

## 📚 Documentation Complète

Pour l'analyse détaillée, voir : `DESIGN_REFONTE_2026.md`

---

**Design System v2.0** | **Hogwarts Academy Premium**  
*Dernière mise à jour : 30 janvier 2026*

🏰 *Élégance, Noblesse, Lisibilité*
