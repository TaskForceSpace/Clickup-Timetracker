<template>
    <div>
      <input type="button" value="update" @click="getData()">

      <DataTable :loading="isLoading" :value="timeTrackerApi" responsiveLayout="scroll">
              <Column field="start" header="Zeiterfassung Start (Datum)">
                <template #body="slotProps">
                  {{getDate(slotProps.data.start)}}
                </template>
              </Column>
              <Column field="timeTrackerStartTime" header="Zeiterfassung Start (Uhrzeit)">
                <template #body="slotProps">
                  {{getTime(slotProps.data.start)}}
                </template>
              </Column>
              <Column field="timeTrackerEndTime" header="Zeiterfassung Ende (Uhrzeit)"></Column>
              <Column field="summaryWorkingHours" header="Summe Stunden"></Column>
              <Column field="task.name" header="Task Name"></Column>
      </DataTable>
    </div>
</template>
<script setup>
import axios from 'axios';
import {ref} from 'vue';

const props = defineProps(['person', 'startDate'])

const isLoading = ref(true);

const timeTrackerApi = ref([]);

const getDate = (el) => {
  let time = new Date(+el);

  return time.toLocaleDateString("de-DE");
};

const getTime = (el) => {
  let time = new Date(+el);

  return ((time.getHours() < 10) ? '0' + time.getHours(): time.getHours()) + ':' + ((time.getMinutes() < 10) ? '0' + time.getMinutes(): time.getMinutes());
};

const getData = () => {
  console.log("GET DATA");
  console.log(props.startDate);
  console.log(props.startDate.getTime());

  isLoading.value = true;

  axios({
    method: 'GET',
    url: "http://timetracking.a126.de/controller.php",
    params: {
      start_date: props.startDate.getTime(),
    }
  })
    .then((response) => {
      timeTrackerApi.value =  response.data.data;
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
h1 {color: black;}
</style>
  