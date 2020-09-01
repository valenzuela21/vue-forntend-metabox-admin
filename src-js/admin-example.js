import Vue from 'vue'
import ComponentAdmin from './ComponentAdmin.vue'

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll('.vue-components-admin')
Array.from(appElements).forEach(element => {
  /* eslint-disable no-new */
  new Vue({
    el: element,
    render: h => h(ComponentAdmin)
  })
})
