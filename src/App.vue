
<template>
  <div>
    <h1>BLUBOOOO</h1>
    <Header></Header>
    <Table></Table>

    <br>
    <Button label="Filter bestätigen" icon="pi pi-check" />
    <br>
  </div>
  <HelloWorld msg="Vite + Vue" />
</template>

<script setup>
import HelloWorld from './components/HelloWorld.vue';
import Table from './components/Table.vue';
import Header from './components/Header.vue'

</script>

<style scoped>

.p-button {
  color: blue;
}

h1 {
  color: red !important;
}
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
