<template>
  <a href="/cart">My cart {{productsCount}}</a>
</template>
<script>
export default {
  name: "",
  props: ['count'],
  created(){
    window.store.commit('set', this.count);
  },
  computed: {
    productsCount(){
      return window.store.state.productsCount;
    }
  }
}
</script>
<style lang="scss" scoped>
</style>
