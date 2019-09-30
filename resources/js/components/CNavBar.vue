<template>
<div>
  <b-navbar toggleable="lg" type="dark">
    <b-navbar-brand href="/">
        <img src="/images/logo-white.png" alt="benfeitoria" title="benfeitoria">
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-navbar-nav right>
          <b-nav-item href="/">Home</b-nav-item>
          <b-nav-item href="/posts/create">Add Post</b-nav-item>
          <b-nav-item href="#">Contato</b-nav-item>
          <b-nav-item href="#">Sobre</b-nav-item>
          <b-nav-item href="#">Link</b-nav-item>
          <b-nav-item href="#">Link</b-nav-item>
        </b-navbar-nav>
        <!-- <b-nav-form>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
        </b-nav-form> -->
        <b-nav-item href="/login" v-if="!logged">
            Login
        </b-nav-item>
        <b-nav-item-dropdown right v-else>
          <template v-slot:button-content>
            <em>User</em>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="/logout">Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
</template>

<script>
export default {
  data() {
    return{
        logged: true,
    }
  }
}
</script>

<style scoped>
nav {
  background-color: var(--main, #e31847);
}
.navbar-brand img{
  width: 100px;
}
</style>