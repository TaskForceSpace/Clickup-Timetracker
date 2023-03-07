<template>
  <div>
    <input class="update__button" type="button" value="UPDATE" @click="getData()">
    <div class="table">
      <DataTable :loading="isLoading" :value="timeTrackerApi" responsiveLayout="scroll">
        <Column field="start" header="Zeiterfassung Start (Datum)">
          <template #body="slotProps">
            {{ getDate(slotProps.data.start) }}
          </template>
        </Column>
        <Column field="timeTrackerStartTime" header="Zeiterfassung Start (Uhrzeit)">
          <template #body="slotProps">
            {{ getTime(slotProps.data.start) }}
          </template>
        </Column>
        <Column field="timeTrackerEndTime" header="Zeiterfassung Ende (Uhrzeit)">
          <template #body="slotProps">
            {{ getTime(slotProps.data.end) }}
          </template>
        </Column>
        <Column field="summaryWorkingHours" header="Summe Stunden"></Column>
        <Column field="task.name" header="Task Name"></Column>
      </DataTable>
    </div>
  </div>
</template>
<script setup>
import axios from 'axios';
import { ref } from 'vue';

const props = defineProps(['person', 'startDate', 'endDate'])

const isLoading = ref(true);

const timeTrackerApi = ref([]);

const getDate = (el) => {
  let time = new Date(+el);

  return time.toLocaleDateString("de-DE");
};

const getTime = (el) => {
  let time = new Date(+el);

  return ((time.getHours() < 10) ? '0' + time.getHours() : time.getHours()) + ':' + ((time.getMinutes() < 10) ? '0' + time.getMinutes() : time.getMinutes());
};

const getData = () => {
  console.log("GET DATA START DATE");
  console.log(props.startDate);
  console.log(props.startDate.getTime());

  console.log("GET DATA END DATE");
  console.log(props.endDate);
  console.log(props.endDate.getTime());

  isLoading.value = true;

  axios({
    method: 'GET',
    url: "https://dummy.jakubwachowiak.de/controller.php?start_date=42",
    params: {
      start_date: props.startDate.getTime(),
      end_date: props.endDate.getTime(),
    }
  })
    .then((response) => {
      timeTrackerApi.value = response.data.data;
      isLoading.value = false;
      console.log(response);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .finally(function () {
      // always executed
    });
}

getData();
</script>
  
<style scoped>
.update__button{
  margin: 12px 0 0 0;
  min-width: 300px;
  min-height: 60px;
  background: linear-gradient(115deg, rgb(56, 178, 172) 0%, rgb(129, 230, 217) 100%);
  border: none;
  border-radius: 20px;
  font-size: 28px;
  transition: all 400ms ease;
  color: #FFFFFF;
}

.update__button:hover{
  background: linear-gradient(115deg, rgb(67, 209, 202) 0%, rgb(142, 251, 237) 100%);
  cursor: pointer; 
}

.table {
  margin: 12px 0;
  border: 2px solid #F8F9FA;
  border-radius: 20px;
  overflow: hidden;
}

h1 {
  color: black;
}
</style>
  