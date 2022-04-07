<script setup lang="ts">
import IconNicoGood from './IconNicoGood.vue';
import IconNicoOk from './IconNicoOk.vue';
import IconNicoBad from './IconNicoBad.vue';

const props = defineProps<{
  nicoId: number;
}>();
</script>

<template>
  <template v-if="nicoId === 1">
    <IconNicoGood />
  </template>
  <template v-if="nicoId === 2">
    <IconNicoOk />
  </template>
  <template v-if="nicoId === 3">
    <IconNicoBad />
  </template>
</template>

<style lang="scss" scoped>
//
</style>
