<template>
    <Calendar id="date" v-model="startDate" dateFormat="dd.mm.yy" :showIcon="true" @date-select="getData(startDate)"/>
    <div>
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

const isLoading = ref(true);

const startDate = ref();

const timeTrackerApi = ref([]);

const getDate = (el) => {
  let time = new Date(+el);

  return time.toLocaleDateString("de-DE");
};

const getTime = (el) => {
  let time = new Date(+el);

  return ((time.getHours() < 10) ? '0' + time.getHours(): time.getHours()) + ':' + ((time.getMinutes() < 10) ? '0' + time.getMinutes(): time.getMinutes());
};

const getData = (dateStart = new Date(), dateEnd = null) => {
  
  isLoading.value = true;

  axios({
    method: 'GET',
    url: "http://timetracking.a126.de/controller.php",
    params: {
      startDate: dateStart.getTime()
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
</style>
  