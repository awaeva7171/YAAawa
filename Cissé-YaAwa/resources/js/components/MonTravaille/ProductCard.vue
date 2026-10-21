

<script setup>

    const props = defineProps({
        produits:Array
    });

    function verifyDisponible(){

    }

</script>

<template>

    <div>
          <section id="catalogue">
     <div class="section-heading">
      <div>
       <p class="overline">
        LA SÉLECTION D’AWA_EVA
       </p>
       <h2>
        Nos produits du moment
       </h2>
      </div>
      <a class="text-button" href="">
       Tout le marché
       <svg aria-hidden="true" class="icon" fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24" width="16">
        <path d="M5 12h14m-5-5 5 5-5 5">
        </path>
       </svg>
      </a>
     </div>
     <div class="product-grid">
        <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
        <article v-for="produit in produits" :key="produit.id" class="product-card" data-component="ProductCard" data-product-id="1">
        <div class="product-media">
            <a aria-label="Voir Riz brisé parfumé" href="">
            <img :alt="produit.name" height="240" loading="lazy" :src="'assets' + produit.image" width="360"/>
            </a>
        </div>
        <div class="product-body">
            <p class="overline">
            {{ produit.origin }}
            </p>
            <h3>
            <a href="">
            {{ produit.name }}
            </a>
            </h3>
            <p class="muted small">
            {{ produit.unit }} · {{produit.stock}} disponible(s)
            </p>
            <!-- <span class="stock vert" v-if="produit.stock>0">
            Disponible 
            </span> 
             <span class="stock red" v-else>
            Indisponible
            </span> -->
            <span class="stock" :class="produit.stock > 0 ? 'vert' : 'red'">
            {{ produit.stock > 0 ? 'Disponible' : 'Indisponible' }}
            </span>
            <div class="product-bottom" >
            <div>
            <strong>
            {{ produit.price }} FCFA
            </strong>
            </div>
            <button :disabled="produit.stock===0"
             aria-label="Ajouter Riz brisé parfumé au panier" class="add-button" dataproduit.stock-action="ajouter-panier" type="button">
            <svg aria-hidden="true" class="icon" fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24" width="20">
            <path d="M12 5v14M5 12h14">
            </path>
            </svg>
            </button>
            </div>
        </div>
        </article>
      
     </div>
    </section>
    </div>
  
</template>

<style scoped>
.red{
    color: red;
}
.vert{
    color: green;
}
.product-bottom{
    color: rgba(85, 19, 19, 0.877);
}
</style>