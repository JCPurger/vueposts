<template>
  <div class="card mt-3">
    <div class="p-4">
        <form id="login" action="/login" method="POST" aria-label="login">
            <input type="hidden" name="_token" :value="csrf_token">

            <b-form-group id="input-group-email" label="Email:" label-for="input-email">
                <b-form-input
                    id="input-email"
                    v-model="form.email"
                    name="email"
                    type="email"
                    required
                    placeholder="Insira seu email"
                    >
                </b-form-input>
            </b-form-group>

            <b-form-group id="input-group-password" label="Senha:" label-for="input-password">
                <b-form-input
                    id="input-password"
                    v-model="form.password"
                    name="password"
                    type="password"
                    required
                    placeholder="Insira sua senha"
                    >
                </b-form-input>
            </b-form-group>

            <b-button type="submit" variant="primary">Enviar</b-button>
        </form>
    </div>
  </div>
</template>

<script>
  export default {
     data() {
      return {
        form: {
          email: '',
          password: '',
        }
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