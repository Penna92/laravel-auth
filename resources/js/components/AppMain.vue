<template>
  <div class="text-center my-5">
    <h1 class="text-danger">{{ titolo }}</h1>
    <h2 class="text-danger">{{ sottotitolo }}</h2>
  </div>
</template>

<script>
export default {
  name: "AppMain",
  data() {
    return {
      titolo: "Work In Progress",
      sottotitolo: "Sito in Costruzione",
    };
  },
};
</script>

<style lang="scss">
</style>