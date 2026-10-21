

<script setup>
import { ref } from 'vue';


const props=defineProps({
    categoriesx:Array
})
const Produit=ref('')
</script>

<template>
  <div>
        <section class="categories-section">
     <div class="section-heading">
      <div>
       <p class="overline">
        À CHAQUE ENVIE, SON RAYON
       </p>
       <h2>
        De quoi se régaler
       </h2>
      </div>
     </div>
     <!-- DEMANDE 01 / 03 — À PROGRAMMER : Utiliser les catégories de l’API pour les images, la couleur CSS et le filtre. -->


     <div class="categories" >
      <button  v-for="category in (props.categoriesx)" :key="category.id" class="category"  :style="{'--category-color':category.color}"
      @click="Produit=category.name">
       <img :alt="category.name" height="48" 
       :src="'/assets' +category.image" width="56" />
       
       <span>
        {{category.name}}
       </span>
    </button>   
           {{ Produit }}
   
     </div>
    </section>
  </div>
</template>

<style scoped>
.noir{
  background: #000;
}
</style>