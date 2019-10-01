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