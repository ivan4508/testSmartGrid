<template>
  <div>
    <h1>Parent: {{ carName }}</h1>

    <app-car
      :carName="carName"
      :carYear="carYear"
    ></app-car>
  </div>
</template>

<script>
import Car from './Car.vue'

export default {
  data () {
    return {
      carName: 'Ford from parent',
      carYear: 2018
    }
  },
  components: {
    appCar: Car
  }
}
</script>

<style>

</style>
