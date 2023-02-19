<template>
    <div>
      <h2>Lista de itens</h2>
      <ul>
        <li v-for="item in items" :key="item.id">{{ item.nome }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        items: []
      }
    },
  
    mounted() {
      this.carregarItens();
    },
  
    methods: {
      carregarItens() {
        axios.get('/api/project').then(response => {
          this.items = response.data;
        });
      }
    }
  }
  </script>
  