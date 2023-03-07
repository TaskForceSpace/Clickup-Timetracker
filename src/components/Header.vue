<template>
  <div class="wrapper">
      <div class="container">
        <Button class="filter__button filter__element" label="Filter (Person)" icon="pi pi-filter" />
        <span class="p-input-icon-left calender__item filter__element">
          <i class="pi pi-search" />
          <InputText type="text" v-model="selectedName" placeholder="Gebe Name ein" @input="pushHeaderDataPerson(selectedName)"/>
        </span>
      </div>
      <div class="container">
        <Button class="filter__button filter__element" label="Filter (Datum)" icon="pi pi-filter" />
        <div class="calendar__label">
          <div class="p-float-label calender__item filter__element">
            <Calendar id="date" v-model="selectedStartDate" :showIcon="true" dateFormat="dd.mm.yy" @date-select="pushHeaderDataStartDate(selectedStartDate)"/>
            <label for="date">Gebe Datum ein (Start)</label>
          </div>
        </div>
        <!-- <div class="calendar__label calender__item filter__element">
          <div class="p-float-label">
            <Calendar id="date" v-model="selectedEndDate" :showIcon="true" dateFormat="dd.mm.yy" @date-select="pushHeaderDataEndDate(selectedEndDate)" />
            <label for="date">Gebe Datum ein (Ende)</label>
          </div>
        </div> -->
      </div>
      <div class="container"> 
        <Button class="filter__button filter__element" label="Filter (Space)" icon="pi pi-filter" />
          <span class="p-input-icon-left calender__item filter__element">
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
  headerStartDate: Date,
  headerEndDate: Date,
  })

// Angular Output()
const emit = defineEmits(['update:headerPerson', 'update:headerStartDate','update:headerEndDate' ])

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

const pushHeaderDataEndDate = (date) => {
  console.log(date);
  emit('update:headerEndDate', date);
}

selectedStartDate.value = new Date();
selectedEndDate.value = new Date();

</script>
  
  <style scoped>
.wrapper {
  display: flex;
  border: 2px solid #F8F9FA;
  border-radius: 16px;
  background-color: #FFFFFF;
}
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  overflow: hidden;
  }

.filter__element{
  margin: 12px 0;
}
.calendar__label {
  display: flex;
  justify-content: center;
  align-items: center;
}
  </style>
   