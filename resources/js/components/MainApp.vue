<template>
    <div class="container">
        <v-app>
            <v-btn color="success">Success</v-btn>
            <router-link to='/ishihara'><v-btn color="success">Ishihara</v-btn></router-link>
            <router-link to='/crud'><v-btn color="info">Crud</v-btn></router-link>
            <router-link to='/'><v-btn color="warning">Home</v-btn></router-link>
            <router-view></router-view>
        </v-app>
    </div>
</template>

<script>
export default {
  /* components: {
    AppRouter
  }, */
 /*  methods: {
    goTo(routes) {
      window.location = routes;
    }
  } */
};
</script>
