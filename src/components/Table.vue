
<template>
    <div>
      <DataTable :value="timeTrackerApi" responsiveLayout="scroll">
              <Column field="timeTrackerDate" header="Zeiterfassung Start (Datum)"></Column>
              <Column field="timeTrackerStartTime" header="Zeiterfassung Start (Uhrzeit)"></Column>
              <Column field="timeTrackerEndTime" header="Zeiterfassung Ende (Uhrzeit)"></Column>
              <Column field="summaryWorkingHours" header="Summe Stunden"></Column>
              <Column field="taskName" header="Task Name"></Column>
      </DataTable>
    </div>
  </template>
  
  <script setup>  
  const timeTrackerApi= [
         {"id": "1000","timeTrackerDate": "21.03.2022","timeTrackerStartTime": "12:00","description": "Product Description","image": "bamboo-watch.jpg","price": 65,"timeTrackerEndTime": "13:00","quantity": 24,"summaryWorkingHours": "01:00","rating": 5, "taskName": "Projekt1"},
         {"id": "1001","timeTrackerDate": "22.03.2022","timeTrackerStartTime": "09:00","description": "Product Description","image": "black-watch.jpg","price": 72,"timeTrackerEndTime": "10:00","quantity": 61,"summaryWorkingHours": "01:00","rating": 4, "taskName": "Projekt2"},
         {"id": "1002","timeTrackerDate": "25.03.2022","timeTrackerStartTime": "10:30","description": "Product Description","image": "blue-band.jpg","price": 79,"timeTrackerEndTime": "11:00","quantity": 2,"summaryWorkingHours": "00:30","rating": 3, "taskName": "Projekt2"},
         {"id": "1003","timeTrackerDate": "30.04.2022","timeTrackerStartTime": "12:45","description": "Product Description","image": "blue-t-shirt.jpg","price": 29,"timeTrackerEndTime": "13:00","quantity": 25,"summaryWorkingHours": "00:15","rating": 5, "taskName": "Projekt3"},
         {"id": "1004","timeTrackerDate": "29.03.2022","timeTrackerStartTime": "18:13","description": "Product Description","image": "bracelet.jpg","price": 15,"timeTrackerEndTime": "20:00","quantity": 73,"summaryWorkingHours": "01:47","rating": 4, "taskName": "Projekt1"},
         {"id": "1005","timeTrackerDate": "21.12.2023","timeTrackerStartTime": "19:50","description": "Product Description","image": "brown-purse.jpg","price": 120,"timeTrackerEndTime": "23:59","quantity": 0,"summaryWorkingHours": "04:09","rating": 4, "taskName": "Projekt4"},
         {"id": "1006","timeTrackerDate": "21.09.2022","timeTrackerStartTime": "15:00","description": "Product Description","image": "chakra-bracelet.jpg","price": 32,"timeTrackerEndTime": "18:00","quantity": 5,"summaryWorkingHours": "03:00","rating": 3, "taskName": "Projekt1"},
         {"id": "1007","timeTrackerDate": "01.11.2022","timeTrackerStartTime": "16:00","description": "Product Description","image": "galaxy-earrings.jpg","price": 34,"timeTrackerEndTime": "20:00","quantity": 23,"summaryWorkingHours": "04:00","rating": 5, "taskName": "Projekt6"},
         {"id": "1008","timeTrackerDate": "10.12.2022","timeTrackerStartTime": "18:00","description": "Product Description","image": "game-controller.jpg","price": 99,"timeTrackerEndTime": "20:00","quantity": 2,"summaryWorkingHours": "02:00","rating": 4, "taskName": "Projekt7"},
         {"id": "1009","timeTrackerDate": "21.03.2022","timeTrackerStartTime": "10:00","description": "Product Description","image": "gaming-set.jpg","price": 299,"timeTrackerEndTime": "20:00","quantity": 63,"summaryWorkingHours": "10:00","rating": 3, "taskName": "Projekt3"}
     ]
  
  </script>
  
  <style scoped>
  </style>
  