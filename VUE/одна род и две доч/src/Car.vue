<template>
  <div>
    <h2>Строчка от дочернего элемента {{carName}} Car.vue 1111</h2>
    <p>Строчка от дочернего элемента {{carYearChild}} Car.vue</p>
    <button @click="clickParent()">Компонета clickParent</button>
    <button @click="clickCar">Компонета clickCar</button>
  </div>
</template>
<script type="text/javascript">
  export default{
    data(){
      return {
        carYearChild:this.carYear
      }
    },
    props:{
      carName:String,
      carYear:[Number,String],
      clickParent:Function
    },
    methods:{
      clickCar(){
        this.carYearChild++;
        this.$emit('clickChild',this.carYearChild);
        console.log(typeof this.carName)
      }

    }
  }
</script>