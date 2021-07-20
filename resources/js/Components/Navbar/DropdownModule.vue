<template>
  <div>
      <h1>
          aksals
      </h1>
  </div>
</template>

<script>
export default {
props: ['item'],
  mounted: function () {
    console.log(this.item)
  },
}
</script>

<style>

</style>