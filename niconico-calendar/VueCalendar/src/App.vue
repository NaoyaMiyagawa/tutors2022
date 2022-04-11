<script setup lang="ts">
import { onMounted, provide, readonly, Ref, ref, watch } from 'vue';
import NicoSelection from './components/NicoSelection.vue';
import dayjs, { Dayjs } from 'dayjs';
import CalendarWeek from './components/CalendarWeek.vue';
import { feelingsKey } from './symbols';

const selectedNicoId = ref(1);
const today = dayjs();
const feelings = ref({});

const displayMonth = ref(today.set('month', today.month()).set('year', today.year()).startOf('month').startOf('day'));
const startDays = ref<Dayjs[]>([]);

onMounted(() => {
  startDays.value = getStartDays(displayMonth);
});
watch(displayMonth, () => {
  startDays.value = getStartDays(displayMonth);
});

const getStartDays = (displayMonth: Ref<Dayjs>) => {
  const firstDayOnCalendar = displayMonth.value.subtract(displayMonth.value.day(), 'day');

  return [...Array(6)].map((_, i) => {
    return firstDayOnCalendar.add(i, 'week');
  });
};

const changeToPrevMonth = () => {
  displayMonth.value = displayMonth.value.subtract(1, 'month');
};
const changeToThisMonth = () => {
  displayMonth.value = displayMonth.value.set('year', today.year()).set('month', today.month());
};
const changeToNextMonth = () => {
  displayMonth.value = displayMonth.value.add(1, 'month');
};

const formatDateKey = (day: Dayjs) => day.format('YYYY-MM-DD');
const setFeeling = (day: Dayjs) => {
  feelings.value[formatDateKey(day)] = selectedNicoId.value;
};
provide(feelingsKey, {
  feelings: readonly(feelings),
  setFeeling,
});
</script>

<template>
  <div class="ly_header">
    <div class="ly_container">
      <h1>NicoCalendar</h1>

      <NicoSelection v-model:selectedNicoId="selectedNicoId" />
    </div>
  </div>

  <div class="ly_content">
    <div class="ly_container">
      <div class="bl_nicoCale">
        <div class="bl_nicoCale_header">
          <div class="bl_nicoCale_targetMonth">{{ `${displayMonth.year()}年${displayMonth.month() + 1}月` }}</div>
          <div class="bl_nicoCale_control">
            <button class="bl_nicoCale_btn bl_nicoCale_btn__prev" @click="changeToPrevMonth">◁</button>
            <button class="bl_nicoCale_btn bl_nicoCale_btn__this" @click="changeToThisMonth">今日</button>
            <button class="bl_nicoCale_btn bl_nicoCale_btn__next" @click="changeToNextMonth">▷</button>
          </div>
        </div>
        <table>
          <thead>
            <tr>
              <th class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">日</th>
              <th class="">月</th>
              <th class="">火</th>
              <th class="">水</th>
              <th class="">木</th>
              <th class="">金</th>
              <th class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">土</th>
            </tr>
          </thead>

          <tbody>
            <template v-for="startDay in startDays" :key="startDay">
              <CalendarWeek :startDay="startDay" :displayMonth="displayMonth" />
            </template>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<style>
:root {
  --bg-color-nico-hover: #f1f6f1;
}

/***************************************************
 * Base
 ***************************************************/

body {
  box-sizing: border-box;
}
table {
  border-collapse: collapse;
}

/***************************************************
 * Layout
 ***************************************************/

.ly_header {
}
.ly_container {
  width: 90%;
  max-width: 600px;
  margin: auto;
}
.ly_header .ly_container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/***************************************************
 * Block
 ***************************************************/

.bl_nicoCale {
}

.bl_nicoCale_header {
  display: flex;
  justify-content: space-between;
  padding: 10px 0;
}
.bl_nicoCale_targetMonth {
  font-size: 1.2em;
}

.bl_nicoCale table {
  width: 100%;
}

.bl_nicoCale th,
.bl_nicoCale td {
  /* padding: 10px; */
  min-width: 80px;
  height: 80px;
  border: 1px solid black;
  text-align: center;
}

.bl_nicoCale th {
  background-color: beige;
  height: 40px;
}

.bl_nicoCale_colWeekend {
  background-color: #efefef;
}
.bl_nicoCale_colWeekend.bl_nicoCale_colWeekend__sun {
  color: red;
}
.bl_nicoCale_colWeekend.bl_nicoCale_colWeekend__sat {
  color: blue;
}

.bl_nicoCale_btn {
  padding: 4px 20px;
  border-radius: 15px;
  background-color: white;
  border: 1px solid #dedede;
  box-shadow: 1px 1px 0 0 #e2e2e2;
  cursor: pointer;
  color: black;
  text-decoration: none;
}
.bl_nicoCale_btn:hover {
  background-color: rgb(245, 255, 231);
}
.bl_nicoCale_btn.bl_nicoCale_btn__prev {
}
.bl_nicoCale_btn.bl_nicoCale_btn__this {
}
.bl_nicoCale_btn.bl_nicoCale_btn__next {
}
</style>
