<template>
  <div class="card mt-3">
    <div class="p-4">
        <form id="post-form" action="/posts" method="POST" aria-label="posts" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" :value="csrf_token">

            <b-form-group id="input-group-title" label="Título:" label-for="input-title">
                <b-form-input
                    id="input-title"
                    v-model="form.title"
                    name="title"
                    type="text"
                    required
                    placeholder="Escreva um título"
                    >
                </b-form-input>
            </b-form-group>

            <b-form-group id="input-group-status" label="Status:" label-for="input-status">
                <b-form-checkbox v-model="form.status" name="status" switch size="lg">
                </b-form-checkbox>
            </b-form-group>

            <b-form-group id="input-group-image" label="Imagem:" label-for="input-image">
                <b-form-file accept="image/*" name="image"></b-form-file>
            </b-form-group>

            <b-form-group id="input-group-text" label="Texto:" label-for="input-text">
                <b-form-textarea
                    id="textarea"
                    v-model="form.text"
                    placeholder="Escreva algo bonito ;D"
                    rows="5"
                    max-rows="20"
                    name="text"
                    required
                    >
                </b-form-textarea>
            </b-form-group>

            <b-button type="submit" variant="primary">Enviar</b-button>

            <!-- <c-message :message="message" v-if="message"></c-message> -->
        </form>
    </div>
  </div>
</template>

<script>
  export default {
     data() {
      return {
        form: {
          title: '',
          status: true,
          text: '',
        }
      }
    },
    props: {
        message: Object,
    },
    mounted() {
      if(typeof message === "undefined" || message.err){
        this.success = false
      }else{
        this.success = true
      }
    },
    computed: {
      csrf_token() {
        let token = document.head.querySelector('meta[name="csrf-token"]')
        return token.content
      }
    },
  }
</script>