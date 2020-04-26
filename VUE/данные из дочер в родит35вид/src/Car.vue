<template>
  <div class="car">
    <h3>Name: {{ carName }} </h3>
    <button @click="changeFunc()">Change from parent</button>
  </div>
</template>

<script>
export default {
  props: {
    carName: {
      type: String,
      default: 'Default name'
    },
    changeFunc: Function
  }
}
</script>

