<template>
<div>
  <div>
    <div class="mt-3">
      <b-pagination-nav 
        limit="6" 
        :link-gen="linkGen" 
        :number-of-pages="pages" 
        use-router 
        align="fill">
      </b-pagination-nav>
    </div>
    
    <div class="mt-3" v-for="(chunk,index) in postsChunked" :key="chunk.id">
      <b-card v-on:click="redirect(chunk[0].slug)" v-if="index == 0">
        <b-card-title>{{chunk[0].title}}</b-card-title>
        <b-card-img-lazy v-bind="imgProps" :src="chunk[0].image" alt="Image" ></b-card-img-lazy>
        <b-card-text>{{chunk[0].text}}</b-card-text>
        <!-- <b-card-footer>This is a footer</b-card-footer> -->
      </b-card>
      <b-card-group deck v-else>
          <b-card v-on:click="redirect(post.slug)" v-for="post in chunk" :key="post.id">
            <b-card-title>{{post.title}}</b-card-title>
            <b-card-img-lazy v-bind="imgProps" :src="post.image" alt="Image" ></b-card-img-lazy>
            <b-card-text>{{post.text}}</b-card-text>
          </b-card>
      </b-card-group>
    </div>

    <div class="mt-3">
      <b-pagination-nav 
        limit="6" 
        :link-gen="linkGen" 
        :number-of-pages="pages" 
        use-router 
        align="fill">
      </b-pagination-nav>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      pages: this.posts.last_page,
      currentPage: this.posts.current_page,
      imgProps: {
        center: true,
        fluidGrow: true,
        blank: true,
        blankColor: '#bbb',
        class: 'my-5'
      }
    }
  },
  props: {
    posts: Object,
  },
  computed: {
    postsChunked() {
      return _.chunk(this.posts.data, 2)
    },
  },
  methods: {
      redirect: function(slug) {
          window.location = '/posts/' + slug;
      },
      linkGen(pageNum) {
        return pageNum === 1 ? '?' : `?page=${pageNum}`
      }
  }
}
</script>

<style scoped>
.card:hover {
  background-color: #f4f4f4;
  border-color: #d8d7d7;
  box-shadow: inset 1px -3px 16px 7px #cccccc;
}
.card-title {
  margin: 0 auto;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 400px;
}
.card-text {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 400px;
}
</style>