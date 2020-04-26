<template>
  <div>
    <h1>Parent: {{ carName }}</h1>
    <app-car
      :carName="carName"
      :changeFunc="changeNameToAudi"
    ></app-car>
  </div>
</template>

<script>
import Car from './Car.vue'

export default {
  data () {
    return {
      carName: 'Ford'
    }
  },
  methods: {
    changeNameToAudi() {
      this.carName = 'Audi'
    }
  },
  components: {
    appCar: Car
  }
}
</script>

