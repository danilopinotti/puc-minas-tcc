<template>
  <div>
    <SharedHeader></SharedHeader>
    <div class="relative flex items-top justify-center bg-gray-100 sm:items-center pt-2 pb-4 md:py-12">
      <Nuxt></Nuxt>
    </div>
    <SharedFooter></SharedFooter>
  </div>
</template>

<script>
export default {
  name: "app"
}
</script>

<style scoped>

</style>
