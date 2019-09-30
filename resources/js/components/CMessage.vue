<template>
  <div class="my-2">
    <b-alert show variant="success" dismissible v-if="success">Success Alert</b-alert>
    <b-alert show variant="danger" dismissible v-else>Error Alert</b-alert>
  </div>
</template>

<script>
export default {
  data() {
    return {
        success: false
    }
  },
  props: {
    message: {
      required: false,
      type: Object
    }
  },
  mounted() {
    if(typeof message === "undefined" || message.err){
        this.success = false
    }else{
        this.success = true
    }
  },
}
</script>

<style>

</style>