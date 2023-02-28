<template>
  <div>
      <div>
        <Button class="filter__button" label="Filter (Person)" icon="pi pi-filter" />
        <Button class="filter__button" label="Filter (Datum)" icon="pi pi-filter" />
        <Button class="filter__button" label="Filter (Space)" icon="pi pi-filter" />
      </div>
      <div class="filters">
        <span class="p-input-icon-left calender__item">
          <i class="pi pi-search" />
          <InputText type="text" v-model="selectedName" placeholder="Gebe Name ein" @input="pushHeaderDataPerson(selectedName)"/>
        </span>

        <div class="calendar__label">
          <div class="p-float-label calender__item">
            <Calendar id="date" v-model="selectedStartDate" :showIcon="true" dateFormat="dd.mm.yy" @date-select="pushHeaderDataStartDate(selectedStartDate)"/>
            <label for="date">Gebe Datum ein (Start)</label>
          </div>
        </div>

        <div class="calendar__label calender__item">
          <div class="p-float-label">
            <Calendar id="date" v-model="date" :showIcon="true" />
            <label for="date">Gebe Datum ein (Ende)</label>
          </div>
        </div>
        <span class="p-input-icon-left calender__item">
          <i class="pi pi-search" />
          <InputText type="text" v-model="value1" placeholder="Gebe Space ein" />
        </span>
      </div>
  </div>
</template>
<script setup>
import {ref} from 'vue';

// Angular Input()
const props = defineProps({
  headerPerson: String, 
  headerStartDate: Date
  })

// Angular Output()
const emit = defineEmits(['update:headerPerson', 'update:headerStartDate'])

const selectedName = ref(props.headerPerson);

const selectedStartDate = ref();
const selectedEndDate = ref();

// Funktioniert nur mit Variablen die v-model sind 
const pushHeaderDataPerson = (personname) => {
  emit('update:headerPerson', personname);
}
const pushHeaderDataStartDate = (date) => {
  console.log(date);
  emit('update:headerStartDate', date);
}

selectedStartDate.value = new Date();

</script>
  
  <style scoped>
  .filters {
    display: flex;
    justify-content: space-around;
    margin-bottom: 12px;
  }

  .filter__button{
    margin: 12px;
  }
.calendar__label {
  display: flex;
  justify-content: center;
  align-items: center;
}
  </style>
   