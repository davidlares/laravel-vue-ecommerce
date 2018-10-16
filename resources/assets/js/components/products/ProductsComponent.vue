<template>
  <section>
    <div class="row">
      <product-card :product="product" v-for="product in products" :key="product.id"></product-card>
    </div>
  </section>
</template>
<script>
export default {
  name: "products",
  data() {
    return {
      name: 'this is a component attr',
      products: [
        { title: 'Curso Ruby', price: 200, description: 'This is a description'},
        { title: 'Curso Laravel', price: 250, description: 'This is a description'},
        { title: 'Curso Python', price: 220, description: 'This is a description'},
      ]
    }
  }
}
</script>
<style lang="scss" scoped>
</style>
