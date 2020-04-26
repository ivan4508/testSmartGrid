<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <router-link to="/" tag="li" class="nav-item" active-class="active">
            <a class="nav-link">Home</a>
          </router-link>
          <router-link :to="{name: 'Cars'}" tag="li" class="nav-item" active-class="active">
            <a class="nav-link">Cars1</a>
          </router-link>
          <router-link :to="{name: 'Car'}" tag="li" class="nav-item" active-class="active">
            <a class="nav-link">Car</a>
          </router-link>
        </ul>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>