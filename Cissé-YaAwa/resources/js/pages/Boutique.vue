<script setup >
import CategoriesComposant from '@/components/MonTravaille/CategoriesComposant.vue';
import Footer from '@/components/MonTravaille/Footer.vue';
import Header from '@/components/MonTravaille/Header.vue';
import ProductCard from '@/components/MonTravaille/ProductCard.vue';
import { Link } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const props = defineProps({
    produits:Array,
    categories:Array
    
})
const categorieChoisie = ref(null);
const produitFiltres=computed(()=>{
    if(categorieChoisie.value===null)return props.produits;
    return props.produits.filter(p => p.category_id === categorieChoisie.value);
});


</script>

<template>
  
  <div>
    <Header/>
    <main id="main-content" tabindex="-1">
   <div class="container page-space">
    <nav aria-label="Fil d’Ariane" class="breadcrumbs">
     <Link href="/">
      Accueil
     </Link>
     <svg aria-hidden="true" class="icon" fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24" width="12">
      <path d="m9 5 7 7-7 7">
      </path>
     </svg>
     <span aria-current="page">
      Tout le marché
     </span>
    </nav>
    <header class="page-title">
     <div>
      <p class="overline">
       FAITES VOTRE MARCHÉ
      </p>
      <h1>
       Tout le marché
      </h1>
      <p class="muted">
       Les essentiels du quotidien, sélectionnés avec attention.
      </p>
     </div>
     <div class="page-actions">
     </div>
    </header>
    <!-- DEMANDE 01 / 03 — À PROGRAMMER : Utiliser les catégories de l’API pour les images, la couleur CSS et le filtre. -->
    <CategoriesComposant :categoriesx="props.categories" @choisir="categorieChoisie = $event" />
    <div class="mt">
    </div>
    <!-- DEMANDE 03 / 22 — À PROGRAMMER : Lier recherche, catégorie, disponibilité et tri ; calculer la liste filtrée et différer la recherche. -->
    <div class="filters" data-component="CatalogFilters">
     <label class="search-field">
      <svg aria-hidden="true" class="icon" fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24" width="20">
       <path d="m21 21-5-5M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0">
       </path>
      </svg>
      <input aria-label="Rechercher un produit" name="search" placeholder="Du riz, des oignons, du bissap…" type="search" value=""/>
     </label>
     <select aria-label="Catégorie" name="categoryId">
      <option value="">
       Toutes les catégories
      </option>
      <option value="1">
       Céréales
      </option>
      <option value="2">
       Légumes
      </option>
      <option value="3">
       Épicerie
      </option>
      <option value="4">
       Poisson
      </option>
      <option value="5">
       Saveurs locales
      </option>
     </select>
     <select aria-label="Disponibilité" name="availability">
      <option value="all">
       Tous les produits
      </option>
      <option value="available">
       Disponibles
      </option>
      <option value="promo">
       En promotion
      </option>
     </select>
     <select aria-label="Trier les produits" name="sort">
      <option value="name">
       Nom A → Z
      </option>
      <option value="price-asc">
       Prix croissant
      </option>
      <option value="price-desc">
       Prix décroissant
      </option>
     </select>
     <Link class="text-button" data-action="reinitialiser-filtres"   href="/Welcome">
      Réinitialiser
     </Link>
    </div>
    <div class="catalog-toolbar">
     <span class="muted small">
      <!-- 19 produits -->
       {{ produitFiltres.length }} produit(s)
     </span>
     <div class="view-switch">
      <a class="is-active" href="boutique.html">
       <svg aria-hidden="true" class="icon" fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24" width="16">
        <path d="M3 3h7v7H3V3Zm11 0h7v7h-7V3ZM3 14h7v7H3v-7Zm11 0h7v7h-7v-7Z">
        </path>
       </svg>
       Grille
      </a>
      <a href="">
       <svg aria-hidden="true" class="icon" fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24" width="16">
        <path d="M8 5h13M8 12h13M8 19h13M3 5h.1M3 12h.1M3 19h.1">
        </path>
       </svg>
       Liste
      </a>
     </div>
    </div>

   <p v-if="produitFiltres.length === 0" class="state">
  Aucun produit dans cette catégorie pour le moment.
</p>
    
   <ProductCard v-else :produitFiltres="produitFiltres" />
    <p class="template-note">
     <svg aria-hidden="true" class="icon" fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24" width="16">
      <path d="m8 6-6 6 6 6m8-12 6 6-6 6M14 3l-4 18">
      </path>
     </svg>
     <span>
      Recherche, filtres et tri sont à programmer. Les liens Grille / Liste montrent deux variantes du même écran.
     </span>
    </p>
   </div>
</main>
<Footer/>
  </div>
</template>


<style>

</style>