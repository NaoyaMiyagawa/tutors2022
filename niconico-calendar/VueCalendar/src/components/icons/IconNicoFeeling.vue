<script setup lang="ts">
import IconNicoGood from './IconNicoGood.vue';
import IconNicoOk from './IconNicoOk.vue';
import IconNicoBad from './IconNicoBad.vue';

const props = defineProps<{
  nicoId: number | null;
}>();
const iconFeeling = {
  1: IconNicoGood,
  2: IconNicoOk,
  3: IconNicoBad,
};
</script>

<template>
  <component v-if="nicoId" :is="iconFeeling[nicoId]" />
</template>
