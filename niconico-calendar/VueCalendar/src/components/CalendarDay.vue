<script setup lang="ts">
import { computed, inject } from 'vue';
import dayjs, { Dayjs } from 'dayjs';
import { feelingsKey } from '../symbols';
import IconNicoFeeling from './icons/IconNicoFeeling.vue';

const props = defineProps<{
  day: Dayjs;
  displayMonth: Dayjs;
}>();

const DAY_SUNDAY = 0;
const DAY_SATURDAY = 6;

const isToday = computed(() => props.day.isSame(dayjs().startOf('day')));
const isSunday = computed(() => props.day.day() === DAY_SUNDAY);
const isSaturday = computed(() => props.day.day() === DAY_SATURDAY);
const isWeekend = computed(() => isSunday.value || isSaturday.value);
const isDisplayMonth = computed(() => props.day.month() === props.displayMonth.month());

const feelings = inject(feelingsKey);
const nicoFeeling = computed(() => feelings.feelings.value[props.day.format('YYYY-MM-DD')] || null);
</script>

<template>
  <td
    :class="{
      bl_nicoCale_colWeekend: isWeekend,
      bl_nicoCale_colWeekend__sun: isSunday,
      bl_nicoCale_colWeekend__sat: isSaturday,
      bl_nicoCale_cell__otherMonth: !isDisplayMonth,
    }"
    @click="feelings.setFeeling(props.day)"
  >
    <div class="bl_nicoCale_cellHeader">
      <span class="bl_nicoCale_date" :class="{ bl_nicoCale_date__today: isToday }">{{ day.date() }}</span>
    </div>
    <div class="bl_nicoCale_cellBody">
      <IconNicoFeeling :nicoId="nicoFeeling" />
    </div>
  </td>
</template>

<style scoped>
td {
}
td:hover {
  background-color: #e7f4ff;
  cursor: pointer;
}
.bl_nicoCale .bl_nicoCale_cell__otherMonth {
  color: #ababab;
}
.bl_nicoCale .bl_nicoCale_cellHeader {
  height: 30px;
  display: flex;
  justify-content: end;
}
.bl_nicoCale .bl_nicoCale_cellBody {
  height: calc(100% - 30px);
}
.bl_nicoCale .bl_nicoCale_cellBody svg {
  font-size: 40px;
}
.bl_nicoCale .bl_nicoCale_date {
  padding: 2px;
  width: 20px;
  height: 20px;
}
.bl_nicoCale .bl_nicoCale_date.bl_nicoCale_date__today {
  border-radius: 100%;
  background-color: rgb(236, 121, 92);
  color: white;
}
</style>
