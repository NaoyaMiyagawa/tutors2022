<script setup lang="ts">
import IconNicoGood from './icons/IconNicoGood.vue';
import IconNicoOk from './icons/IconNicoOk.vue';
import IconNicoBad from './icons/IconNicoBad.vue';

const props = defineProps<{
  selectedNicoId: number;
}>();
const emit = defineEmits<{ 'update:selectedNicoId': void }>();

const nicoOptions = [
  { id: 'nicoSelect__good', value: 1, icon: IconNicoGood },
  { id: 'nicoSelect__ok', value: 2, icon: IconNicoOk },
  { id: 'nicoSelect__bad', value: 3, icon: IconNicoBad },
];
</script>

<template>
  <form class="bl_nicoCelection">
    <template v-for="nicoOption in nicoOptions" :key="nicoOption.id">
      <div class="bl_nicoCelection_option">
        <!-- :value="nicoOption.value" -->
        <input
          type="radio"
          :id="nicoOption.id"
          :value="nicoOption.value"
          :checked="selectedNicoId === nicoOption.value"
        />

        <label :for="nicoOption.id">
          <component :is="nicoOption.icon" />
        </label>
      </div>
    </template>
  </form>
</template>

<style scoped>
.bl_nicoCelection {
  display: flex;
  font-size: 1.2em;
}
.bl_nicoCelection_option {
  display: flex;
  padding: 2px 10px;
  border-radius: 15px;
  align-items: center;
  transition: all 0.2s;
  font-size: 2.5em;
}
.bl_nicoCelection_option:hover {
  background-color: var(--bg-color-nico-hover);
}
.bl_nicoCelection_option label {
  display: inline-flex;
  gap: 2px;
}
</style>
