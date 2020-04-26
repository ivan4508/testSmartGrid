<template>
  <div>
    <h1>От родителя {{carName}}</h1>
    <app-counter 
    :counter="counter"></app-counter>
    <app-car
    :carName='carName'
    :carYear="carYear"
    :clickParent='functParent'
    @clickChild='counterChild=$event'
    @clickUp='counterChild=$event'
    ></app-car>
  </div>
</template>
<script type="text/javascript">
  import Car from './Car.vue';
  import Counter from './Counter.vue';
  export default{
    data(){
      return {
        counter:0,
        carName:'Моя машина',
        carYear:2019
      }
    },
    methods:{
      functParent(){
        this.carName+=' Событие от родителя'
        console.log(typeof  this.carName)
      }
    },
    components:{
      appCounter:Counter,
      appCar:Car
    }
  }
</script>