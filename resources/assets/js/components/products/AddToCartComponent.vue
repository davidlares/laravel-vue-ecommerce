<template>
  <button @click="addToCart" class="btn btn-primary">{{message}}</button>
</template>
<script>
export default {
  name: "",
  data() {
    return {
      message: 'Add to Cart',
      endpoint: '/in_shopping_carts'
    }
  },
  props:{ product: {type: Object} },
  methods: {
    addToCart(){
      axios({
        method: 'POST',
        url: this.endpoint,
        data: {
          product_id: this.product.id
        },
        headers: {
          'Accept': 'application/json',
          'Content-type': 'application/json'
        }
      }).then( () => {
        console.log(`Product added`);
        window.store.commit("increment");
      })
    }
  }
}
</script>
