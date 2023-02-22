
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
  
  const listId = '216452050';
  const resp = await fetch(
  `https://api.clickup.com/api/v2/list/${listId}`,
  {
    method: 'GET',
    headers: {
      Authorization: 'pk_48468128_J15MMUVX7Z1IU34VRZANI79W7ZUA5PP8'
    }
  }
);

const data = await resp.text();
console.log(data);

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
   