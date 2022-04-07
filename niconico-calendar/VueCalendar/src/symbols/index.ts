import { InjectionKey, Ref } from 'vue';
import { Dayjs } from 'dayjs';

export const feelingsKey = Symbol('feelings') as InjectionKey<{
  feelings: Readonly<Ref<{ [key: string]: number }>>;
  setFeeling: (day: Dayjs) => void;
}>;
