# 💻 EXEMPLES DE CODE - DESIGN SYSTEM POUDLARD

## 🎯 Copier-Coller Ready

Tous les exemples ci-dessous sont **prêts à l'emploi** et respectent le Design System 2.0.

---

## 🏠 1. PAGE COMPLÈTE EXEMPLE

### Structure de Base
```twig
{% extends 'base.html.twig' %}

{% block title %}Ma Page - Poudlard{% endblock %}

{% block body %}
    {# Hero Banner #}
    <div class="great-hall-banner">
        <div class="banner-content">
            <h1 class="great-hall-title">
                <i data-lucide="sparkles"></i>
                Titre de Ma Page
            </h1>
            <p class="great-hall-subtitle">
                Description accrocheuse qui explique le contenu de la page
            </p>
        </div>
    </div>

    {# Section Principale #}
    <section class="houses-section">
        <h2 class="section-title">
            <i data-lucide="book-open"></i>
            Contenu Principal
        </h2>
        
        {# Votre contenu ici #}
    </section>
{% endblock %}
```

---

## 📦 2. CARDS

### Card Standard
```html
<div class="card">
    <div class="card-header">
        <h2 class="card-title">
            <i data-lucide="users"></i>
            Liste des Élèves
        </h2>
    </div>
    
    <p>Contenu de la card...</p>
    
    <div class="btn-group">
        <a href="#" class="btn btn-primary">
            <i data-lucide="plus"></i>
            <span>Ajouter</span>
        </a>
        <a href="#" class="btn btn-secondary">
            <i data-lucide="filter"></i>
            <span>Filtrer</span>
        </a>
    </div>
</div>
```

### Card avec Grille de Détails
```html
<div class="card">
    <div class="card-header">
        <h2 class="card-title">
            <i data-lucide="user"></i>
            Détails de l'Élève
        </h2>
    </div>
    
    <div class="detail-grid">
        <div class="detail-item">
            <div class="detail-label">Nom complet</div>
            <div class="detail-value">Harry Potter</div>
        </div>
        
        <div class="detail-item">
            <div class="detail-label">Maison</div>
            <div class="detail-value">Gryffondor</div>
        </div>
        
        <div class="detail-item">
            <div class="detail-label">Année</div>
            <div class="detail-value">7ème année</div>
        </div>
        
        <div class="detail-item">
            <div class="detail-label">Baguette</div>
            <div class="detail-value">Houx et plume de phénix</div>
        </div>
    </div>
</div>
```

---

## 🏡 3. GRILLE DES MAISONS

### 4 Maisons Complètes
```html
<div class="houses-section">
    <h2 class="section-title">
        <i data-lucide="castle"></i>
        Les Quatre Maisons
    </h2>
    
    <div class="houses-grid">
        {# Gryffondor #}
        <a href="{{ path('app_maison_show', {id: 1}) }}" class="house-card house-gryffindor">
            <div class="house-crest">
                <i data-lucide="flame"></i>
            </div>
            <h3 class="house-name">Gryffondor</h3>
            <p class="house-trait">Courage & Bravoure</p>
            <div class="house-count">42</div>
        </a>
        
        {# Serpentard #}
        <a href="{{ path('app_maison_show', {id: 2}) }}" class="house-card house-slytherin">
            <div class="house-crest">
                <i data-lucide="sparkle"></i>
            </div>
            <h3 class="house-name">Serpentard</h3>
            <p class="house-trait">Ambition & Ruse</p>
            <div class="house-count">38</div>
        </a>
        
        {# Serdaigle #}
        <a href="{{ path('app_maison_show', {id: 3}) }}" class="house-card house-ravenclaw">
            <div class="house-crest">
                <i data-lucide="book-open"></i>
            </div>
            <h3 class="house-name">Serdaigle</h3>
            <p class="house-trait">Intelligence & Sagesse</p>
            <div class="house-count">35</div>
        </a>
        
        {# Poufsouffle #}
        <a href="{{ path('app_maison_show', {id: 4}) }}" class="house-card house-hufflepuff">
            <div class="house-crest">
                <i data-lucide="heart"></i>
            </div>
            <h3 class="house-name">Poufsouffle</h3>
            <p class="house-trait">Loyauté & Travail</p>
            <div class="house-count">40</div>
        </a>
    </div>
</div>
```

---

## 📊 4. STATS CARDS

### Grille Stats Horizontales
```html
<div class="magical-stats-section">
    <h2 class="section-title">
        <i data-lucide="wand-2"></i>
        Statistiques Magiques
    </h2>
    
    <div class="stats-grid">
        <a href="{{ path('app_baguette_index') }}" class="stat-card magical-wands">
            <div class="stat-icon">
                <i data-lucide="wand-2"></i>
            </div>
            <div class="stat-info">
                <div class="stat-title">Baguettes</div>
                <div class="stat-value">127</div>
                <div class="stat-desc">Instruments magiques</div>
            </div>
        </a>
        
        <a href="{{ path('app_note_index') }}" class="stat-card magical-grades">
            <div class="stat-icon">
                <i data-lucide="scroll-text"></i>
            </div>
            <div class="stat-info">
                <div class="stat-title">Notes</div>
                <div class="stat-value">856</div>
                <div class="stat-desc">Évaluations</div>
            </div>
        </a>
        
        <a href="{{ path('app_competence_index') }}" class="stat-card magical-skills">
            <div class="stat-icon">
                <i data-lucide="sparkles"></i>
            </div>
            <div class="stat-info">
                <div class="stat-title">Compétences</div>
                <div class="stat-value">43</div>
                <div class="stat-desc">Sorts & Enchantements</div>
            </div>
        </a>
        
        <a href="{{ path('app_promotion_index') }}" class="stat-card magical-years">
            <div class="stat-icon">
                <i data-lucide="calendar"></i>
            </div>
            <div class="stat-info">
                <div class="stat-title">Promotions</div>
                <div class="stat-value">15</div>
                <div class="stat-desc">Années scolaires</div>
            </div>
        </a>
    </div>
</div>
```

---

## 🎯 5. ACTIONS RAPIDES

### Grid Boutons Actions
```html
<div class="quick-actions-section">
    <h2 class="section-title">
        <i data-lucide="zap"></i>
        Actions Rapides
    </h2>
    
    <div class="quick-actions-grid">
        <a href="{{ path('app_eleve_new') }}" class="quick-action-card action-primary">
            <i data-lucide="user-plus"></i>
            <span>Inscrire un Élève</span>
        </a>
        
        <a href="{{ path('app_professeur_new') }}" class="quick-action-card action-success">
            <i data-lucide="user-check"></i>
            <span>Recruter un Professeur</span>
        </a>
        
        <a href="{{ path('app_matiere_new') }}" class="quick-action-card action-warning">
            <i data-lucide="book-plus"></i>
            <span>Créer une Matière</span>
        </a>
        
        <a href="{{ path('app_note_new') }}" class="quick-action-card action-info">
            <i data-lucide="pen-line"></i>
            <span>Enregistrer une Note</span>
        </a>
        
        <a href="{{ path('app_baguette_new') }}" class="quick-action-card action-magical">
            <i data-lucide="wand-2"></i>
            <span>Enregistrer une Baguette</span>
        </a>
        
        <a href="{{ path('app_competence_new') }}" class="quick-action-card action-skill">
            <i data-lucide="sparkles"></i>
            <span>Ajouter une Compétence</span>
        </a>
    </div>
</div>
```

---

## 📊 6. TABLEAUX

### Table Responsive Standard
```html
<div class="card">
    <div class="card-header">
        <h2 class="card-title">
            <i data-lucide="users"></i>
            Liste des Élèves
        </h2>
    </div>
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Maison</th>
                    <th>Année</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for eleve in eleves %}
                <tr>
                    <td>
                        <strong>{{ eleve.nom }} {{ eleve.prenom }}</strong>
                    </td>
                    <td>
                        <span class="badge badge-primary">
                            {{ eleve.maison.nom }}
                        </span>
                    </td>
                    <td>{{ eleve.annee }}ème année</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ path('app_eleve_show', {id: eleve.id}) }}" class="btn btn-sm btn-secondary">
                                <i data-lucide="eye"></i>
                            </a>
                            <a href="{{ path('app_eleve_edit', {id: eleve.id}) }}" class="btn btn-sm btn-warning">
                                <i data-lucide="edit"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
```

---

## 📝 7. FORMULAIRES

### Form Complet
```twig
<div class="card">
    <div class="card-header">
        <h2 class="card-title">
            <i data-lucide="user-plus"></i>
            Nouvel Élève
        </h2>
    </div>
    
    {{ form_start(form) }}
    
    <div class="form-group">
        {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Potter'}}) }}
        {{ form_errors(form.nom) }}
    </div>
    
    <div class="form-group">
        {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Harry'}}) }}
        {{ form_errors(form.prenom) }}
    </div>
    
    <div class="form-group">
        {{ form_label(form.maison, 'Maison', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.maison, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form.maison) }}
    </div>
    
    <div class="btn-group">
        <button type="submit" class="btn btn-primary">
            <i data-lucide="save"></i>
            <span>Enregistrer</span>
        </button>
        <a href="{{ path('app_eleve_index') }}" class="btn btn-secondary">
            <i data-lucide="x"></i>
            <span>Annuler</span>
        </a>
    </div>
    
    {{ form_end(form) }}
</div>
```

---

## 🏷️ 8. BADGES & TAGS

### Badges Inline
```html
<p>
    Maison : <span class="badge badge-primary">Gryffondor</span>
</p>

<p>
    Status : <span class="badge badge-success">Actif</span>
</p>

<p>
    Niveau : <span class="badge badge-warning">Intermédiaire</span>
</p>

<p>
    Résultat : <span class="badge badge-info">En attente</span>
</p>
```

### Tags Liste
```html
<div class="related-items">
    <a href="#" class="badge badge-primary">Sortilèges</a>
    <a href="#" class="badge badge-success">Potions</a>
    <a href="#" class="badge badge-info">Défense contre les Forces du Mal</a>
    <a href="#" class="badge badge-warning">Métamorphose</a>
</div>
```

---

## ⚠️ 9. ALERTES & MESSAGES

### Messages Flash
```html
{# Succès #}
<div class="alert alert-success">
    <i data-lucide="check-circle"></i>
    L'élève a été enregistré avec succès !
</div>

{# Erreur #}
<div class="alert alert-danger">
    <i data-lucide="alert-circle"></i>
    Une erreur est survenue lors de l'enregistrement.
</div>

{# Attention #}
<div class="alert alert-warning">
    <i data-lucide="alert-triangle"></i>
    Cette action est irréversible. Êtes-vous sûr ?
</div>
```

---

## 💬 10. CITATION MAGIQUE

### Quote Décorative
```html
<div class="magical-quote">
    <i data-lucide="quote"></i>
    <p class="quote-text">
        "Le bonheur peut être trouvé même dans les moments les plus sombres, 
        si l'on se souvient d'allumer la lumière."
    </p>
    <p class="quote-author">— Albus Dumbledore</p>
</div>
```

---

## 🔗 11. LIENS ENTITÉS

### Links avec Hover
```html
<p>
    Cet élève est dans la maison 
    <a href="{{ path('app_maison_show', {id: maison.id}) }}" class="entity-link">
        {{ maison.nom }}
    </a>
</p>

<p>
    Professeur : 
    <a href="{{ path('app_professeur_show', {id: prof.id}) }}" class="entity-link">
        {{ prof.nom }} {{ prof.prenom }}
    </a>
</p>
```

---

## 🎨 12. GRILLES PERSONNALISÉES

### 2 Colonnes
```html
<div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-6);">
    <div class="card">Colonne 1</div>
    <div class="card">Colonne 2</div>
</div>
```

### 3 Colonnes
```html
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-6);">
    <div class="card">Col 1</div>
    <div class="card">Col 2</div>
    <div class="card">Col 3</div>
</div>
```

### Auto-fit Responsive
```html
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-6);">
    <div class="card">Adaptatif 1</div>
    <div class="card">Adaptatif 2</div>
    <div class="card">Adaptatif 3</div>
</div>
```

---

## 🎯 13. EMPTY STATES

### État Vide
```html
<div class="card">
    <div class="empty-state">
        <div class="empty-state-icon">
            <i data-lucide="users" style="width: 80px; height: 80px;"></i>
        </div>
        <p class="empty-state-text">Aucun élève enregistré</p>
        <a href="{{ path('app_eleve_new') }}" class="btn btn-primary">
            <i data-lucide="plus"></i>
            <span>Ajouter le premier élève</span>
        </a>
    </div>
</div>
```

---

## 🎭 14. SECTIONS AVEC RELATED

### Section avec Items Liés
```html
<div class="related-section">
    <h3 class="related-title">
        <i data-lucide="users"></i>
        Élèves de cette Maison
    </h3>
    
    <div class="related-items">
        {% for eleve in maison.eleves %}
            <a href="{{ path('app_eleve_show', {id: eleve.id}) }}" class="badge badge-primary">
                {{ eleve.prenom }} {{ eleve.nom }}
            </a>
        {% endfor %}
    </div>
</div>
```

---

## 📦 15. LAYOUT COMPLEXE

### Sidebar + Main Content
```html
<div style="display: grid; grid-template-columns: 300px 1fr; gap: var(--space-8);">
    {# Sidebar #}
    <aside>
        <div class="card">
            <h3 class="card-title">
                <i data-lucide="filter"></i>
                Filtres
            </h3>
            <div class="form-group">
                <label class="form-label">Maison</label>
                <select class="form-control">
                    <option>Toutes</option>
                    <option>Gryffondor</option>
                    <option>Serpentard</option>
                </select>
            </div>
        </div>
    </aside>
    
    {# Main Content #}
    <main>
        <div class="card">
            <h2 class="card-title">
                <i data-lucide="users"></i>
                Liste des Élèves
            </h2>
            {# Contenu #}
        </div>
    </main>
</div>
```

---

## 🎨 16. CLASSES UTILITAIRES

### Couleurs de Texte
```html
<p class="text-gryffindor">Texte rouge Gryffondor</p>
<p class="text-slytherin">Texte vert Serpentard</p>
<p class="text-ravenclaw">Texte bleu Serdaigle</p>
<p class="text-hufflepuff">Texte jaune Poufsouffle</p>
<p class="text-gold">Texte or</p>
<p class="text-muted">Texte grisé</p>
```

---

## 🔧 17. SNIPPETS PRATIQUES

### Formulaire de Recherche
```html
<form method="get" style="margin-bottom: var(--space-8);">
    <div style="display: flex; gap: var(--space-3);">
        <input 
            type="search" 
            name="q" 
            class="form-control" 
            placeholder="Rechercher un élève..."
            style="flex: 1;"
        >
        <button type="submit" class="btn btn-primary">
            <i data-lucide="search"></i>
            <span>Rechercher</span>
        </button>
    </div>
</form>
```

### Pagination Simple
```html
<div style="display: flex; justify-content: center; gap: var(--space-3); margin-top: var(--space-8);">
    <a href="?page={{ page - 1 }}" class="btn btn-secondary">
        <i data-lucide="chevron-left"></i>
        <span>Précédent</span>
    </a>
    <span style="padding: var(--space-4); color: var(--stone-500);">
        Page {{ page }} / {{ totalPages }}
    </span>
    <a href="?page={{ page + 1 }}" class="btn btn-secondary">
        <span>Suivant</span>
        <i data-lucide="chevron-right"></i>
    </a>
</div>
```

---

## ✨ 18. LOADING STATE

### Loader Inline
```html
<div class="loading">
    {# Contenu qui charge #}
</div>
```

---

## 🎓 BONNES PRATIQUES

### ✅ À FAIRE

```html
<!-- Utiliser les variables CSS -->
<div style="padding: var(--space-8); margin-bottom: var(--space-6);">
    
<!-- Icônes cohérentes -->
<i data-lucide="check"></i>

<!-- Classes sémantiques -->
<div class="house-card house-gryffindor">

<!-- Aria labels -->
<button aria-label="Fermer">
    <i data-lucide="x"></i>
</button>
```

### ❌ À ÉVITER

```html
<!-- Valeurs en dur -->
<div style="padding: 35px; margin-bottom: 22px;">

<!-- Styles inline excessifs -->
<div style="color: red; font-size: 18px; background: blue;">

<!-- Classes incohérentes -->
<div class="my-custom-card-style-1234">

<!-- Pas de fallback -->
<i class="icon-check"></i>
```

---

## 🚀 INITIALISATION

### Script de Base (déjà dans base.html.twig)
```javascript
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialiser Lucide Icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
```

---

## 📚 RESSOURCES

### Documentation
- `GUIDE_RAPIDE_DESIGN.md` → Guide complet
- `DESIGN_REFONTE_2026.md` → Analyse détaillée
- `CHECKLIST_DESIGN.md` → Standards qualité

### Icônes
- [Lucide Icons](https://lucide.dev/) → Catalogue complet

### Typographies
- [Google Fonts - Cinzel](https://fonts.google.com/specimen/Cinzel)
- [Google Fonts - EB Garamond](https://fonts.google.com/specimen/EB+Garamond)

---

**Tous ces exemples sont testés et production-ready** ✅

*Design System v2.0 | Poudlard Premium Edition*  
*30 janvier 2026*

🏰 **Draco dormiens nunquam titillandus**
