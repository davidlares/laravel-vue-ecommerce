<template>
  <div :key="product.id" class="col-xs-12 col-sm-10 col-md-4">
    <div class="card">
        <header class="bg-primary padding"></header>
        <div class="card-body">
          <h2 class="card-title">{{product.title}}</h2>
          <h4 class="card-subtitle">{{product.price}}</h4>
          <p class="card-text">{{product.description}}</p>
        </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "product-card",
  props: {
    product: {
      type: Object
    }
  },
  data() {
    return {

    }
  }
}
</script>
<style lang="scss" scoped>
</style>
