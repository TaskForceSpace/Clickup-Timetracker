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
          <InputText type="text" v-model="value1" placeholder="Gebe Name ein" />
        </span>
        <div class="calendar__label">
          <div class="p-float-label calender__item">
            <Calendar id="date" v-model="date" :showIcon="true" />
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
   