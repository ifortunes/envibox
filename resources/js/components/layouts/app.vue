<template>
  <div>
      <form @submit.prevent="sumbit">
          <div class="mb-3">
              {{ message }}
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Имя</label>
              <input type="text" v-model.trim="form.name" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Телефон</label>
              <input type="tel" v-model.trim="form.phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label class="form-label" for="exampleCheck1">Сообщение</label>
              <textarea v-model="form.message" class="form-control" rows="10" cols="50"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</template>

<script>
export default {
    name: "app",
    data: () => ({
        form: {
            name: '',
            phone: '',
            message: '',
        },
        message: ''
    }),
    methods: {
        sumbit(){
            axios.post('/api/feedback', this.form)
                .then(response => {
                    console.log(response.data)
                    this.message = response.data.message
                }).catch(({response:{data}}) => {
                    this.message = data.message
            });
        }
    }
}
</script>

<style scoped>

</style>
