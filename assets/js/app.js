const app = Vue.createApp({
  data() {
    return {
      contacts: []
    }
  },
  methods: {
    getContacts() {
      fetch(window.location + 'controller/prueba.php', {
        method: 'GET'
      })
        .then(response => response.text())
        .then(data => app.contacts = JSON.parse(data).result)
    }
  }
}).mount('#app')