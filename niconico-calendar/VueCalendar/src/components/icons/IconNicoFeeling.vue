<script setup lang="ts">
import IconNicoGood from './IconNicoGood.vue';
import IconNicoOk from './IconNicoOk.vue';
import IconNicoBad from './IconNicoBad.vue';

const props = defineProps<{
  nicoId: number | null;
}>();
</script>

<template>
  <template v-if="nicoId === 1">
    <IconNicoGood />
  </template>
  <template v-else-if="nicoId === 2">
    <IconNicoOk />
  </template>
  <template v-else-if="nicoId === 3">
    <IconNicoBad />
  </template>
</template>

<style scoped>
/*  */
</style>
