<template>
<div class="mt-3">
    <h1>{{post.title}}</h1>
    <h6>Autor: João Carlos</h6>
    <div class="my-3 mb-4">
        <b-img :src="post.image" fluid-grow alt="Image banner"></b-img>
    </div>
    <p>{{post.text}}</p>
</div>
</template>

<script>
export default {
    props: {
        post: Object,
    },
    mounted(){
        console.log(this.post)
    }
}
</script>

<style scoped>

</style>