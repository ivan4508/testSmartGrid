<template>
  <div class="container pt-2">
    <div class="form-group">
      <label for="name">Car name</label>
      <input type="text" id="name" class="form-control" v-model.trim="carName">
    </div>

    <div class="form-group">
      <label for="year">Car year</label>
      <input type="text" id="year" class="form-control" v-model.number="carYear">
    </div>

    <button class="btn btn-success" @click="createCar">Create car</button>
    <button class="btn btn-primary" @click="loadCars">Load cars</button>

    <hr>

    <ul class="list-group">
      <li
        class="list-group-item"
        v-for="car of cars"
        :key="car.id"
      >
        <strong>{{ car.name }}</strong> - {{ car.year }}
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        carName: '',
        carYear: 2018,
        cars: [],
        resource: null
      }
    },
    methods: {
      createCar () {
        const car = {
          name: this.carName,
          year: this.carYear
        }

        this.resource.save({}, car).then(response=>console.log('222'+response))
      },
      loadCars () {
        this.resource.get().then(response => response.json())
          .then(cars => this.cars = cars)
      }
    },
    created () {
      this.resource = this.$resource('http://localhost:3000/cars')
    }
  }
</script>
