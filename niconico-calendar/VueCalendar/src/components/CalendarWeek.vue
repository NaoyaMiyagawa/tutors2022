<script setup lang="ts">
import { Dayjs } from 'dayjs';
import CalendarDay from './CalendarDay.vue';

const props = defineProps({
  startDay: { type: Dayjs, required: true },
  displayMonth: { type: Dayjs, required: true },
});
const days = [...Array(7)].map((_, i) => {
  return props.startDay.add(i, 'day');
});
</script>

<template>
  <tr>
    <template v-for="day in days" :key="day">
      <CalendarDay :day="day" :displayMonth="displayMonth" />
    </template>
  </tr>
</template>
