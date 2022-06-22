<template>
  <div class="container">
    <AppMain />
    <div class="my-5">
      <h1>BOOLPRESS</h1>
    </div>
    <div class="text-center">
      <h2>Il costruttore di siti</h2>
      <h2>più famoso al mondo.</h2>
      <p class="my-5">
        Il 43% dei siti web usa la tecnologia BoolPress. Blogger, piccole
        attività e grandi aziende nella lista Fortune 500 usano BoolPress più di
        tutte le alternative messe insieme. Unisciti ai milioni di utenti che
        hanno scelto BoolPress.com.
      </p>
    </div>
  </div>
</template>

<script>
import AppMain from "../components/AppMain.vue";
export default {
  name: "App",
  components: {
    AppMain,
  },
};
</script>
