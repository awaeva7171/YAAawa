<script setup>
import { computed } from 'vue'
import { stockState } from '@/utils/domain.js'

const props = defineProps({
  stock: {
    type: Number,
    required: true,
    validator: s => Number.isInteger(s) && s >= 0,
  },
})

const state = computed(() => stockState(props.stock))

const labels = {
  empty: 'Rupture',
  low: 'Stock faible',
  available: 'Disponible',
}
</script>

<template>
  <span class="stock" :class="state">
    {{ labels[state] }}
  </span>
</template>