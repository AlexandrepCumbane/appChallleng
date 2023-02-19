<template>
    <div>
      <h1>{{ title }}</h1>
      <p>{{ message }}</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        title: 'Meu primeiro componente Vue.js',
        message: 'Este é um exemplo de componente Vue.js no Laravel'
      }
    }
  }
  </script>
  