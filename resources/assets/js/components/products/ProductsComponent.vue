<template>
  <section>
    <material-transition-group tag="div" class="row">
      <product-card :product="product" :data-index="index" v-for="(product,index) in products" :key="product.id"></product-card>
    </material-transition-group>
  </section>
</template>
<script>
export default {
  name: "products",
  data() {
    return {
      name: 'this is a component attr',
      products: [],
      endpoint: '/products'
    }
  },
  created(){
    this.fetchProducts();
  },
  methods: {
    fetchProducts(){
      axios.get(this.endpoint).then((response) => {
        this.products = response.data.data
      });
    }
  }
}
</script>
<style lang="scss" scoped>
</style>
