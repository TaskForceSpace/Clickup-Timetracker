
<template>
    <div>
        <!-- <DataTable>
            <template #header>
                        <div class="flex justify-content-between">
                            <Button type="button" icon="pi pi-filter-slash" label="Clear" class="p-button-outlined" @click="clearFilter1()"/>
                            <span class="p-input-icon-left">
                                <i class="pi pi-search" />
                                <InputText placeholder="Keyword Search" />
                            </span>
                        </div>
            </template>
        </DataTable> -->
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
  </style>
   