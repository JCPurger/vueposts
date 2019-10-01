<template>
<div>
  <b-card-title>{{post.title}}</b-card-title>
  <b-card-img-lazy class="my-3" v-bind="imgProps" :src="post.image" alt="Image" ></b-card-img-lazy>
  <b-card-text>{{post.text}}</b-card-text>  
</div>
</template>

<script>
export default {
  props: {
    post: Object
  }
}
</script>

<style scoped>
.card-title {
  margin: 0 auto;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 400px;
  text-align: center;
}
.card-text {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 400px;
}
</style>