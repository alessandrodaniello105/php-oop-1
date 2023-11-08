const {createApp} = Vue;

createApp({
  data() {
    return {
      title: 'alfonso',
      activeTab: 'TvSerie'
    }
  },
  methods: {
    getAlert(name) {
      alert(name);
    }
  }
}).mount('#app')
