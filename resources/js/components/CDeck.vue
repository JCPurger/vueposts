<template>
<div class="mt-3">
    <b-pagination-nav 
      limit="6" 
      :link-gen="linkGen" 
      :number-of-pages="pages" 
      use-router 
      align="fill">
    </b-pagination-nav>

    <div class="my-3">
      <b-card v-on:click="redirect(firstPost.slug)">
        <c-card-body :post="firstPost"></c-card-body>
      </b-card>
    </div>
    
    <div class="my-3" v-for="chunk in postsChunked" :key="chunk.id">
      <b-card-group deck>
        <b-card v-on:click="redirect(post.slug)" v-for="post in chunk" :key="post.id">
          <c-card-body :post="post"></c-card-body>
        </b-card>
      </b-card-group>
    </div>

    <b-pagination-nav 
      limit="6" 
      :link-gen="linkGen" 
      :number-of-pages="pages" 
      use-router 
      align="fill">
    </b-pagination-nav>
</div>
</template>

<script>
export default {
  data() {
    return {
      firstPost: Object,
      pages: this.posts.last_page,
      currentPage: this.posts.current_page,
      imgProps: {
        center: true,
        fluidGrow: true,
        blank: true,
        blankColor: '#bbb',
        class: 'my-5'
      },
    }
  },
  props: {
    posts: Object,
  },
  computed: {
    postsChunked() {
      this.firstPost = this.posts.data.shift();
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

<style>
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
  text-align: center;
}
.card-text {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 400px;
}
</style>