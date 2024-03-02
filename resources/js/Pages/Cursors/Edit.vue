<template>
  <div>
    <Head title="Edit Contact"/>
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/cursors">Cursors</Link>
      <span class="text-indigo-400 font-medium">/</span>
            {{cursor.name}}
    </h1>
    <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="update">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.name" :error="form.errors.name" class="pb-8 pr-6 w-full lg:w-1/2" label="Cursor name" />
          <text-input v-model="form.description" :error="form.errors.description" class="pb-8 pr-6 w-full lg:w-1/2" label="Cursor description" />
        </div>
        <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100">
          <button v-if="!cursor.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Delete Cursor</button>
          <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">Update Cursor</loading-button>
        </div>
      </form>
    </div>
  </div>

</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import Layout from "@/Shared/Layout.vue";
import SelectInput from "@/Shared/SelectInput.vue";
import TextInput from "@/Shared/TextInput.vue";
import LoadingButton from "@/Shared/LoadingButton.vue";

export default {
  components: {
    LoadingButton, TextInput, SelectInput,
    Head,
    Link
  },
  layout: Layout,
  props: {
    cursor: Object,
  },
  data() {
    return {
      form: this.$inertia.form({
        name: this.cursor.name,
        description: this.cursor.description,
      }),
    }
  },
  methods: {
    update() {
      this.form.put(`/cursors/${this.cursor.id}`)
    },
    destroy() {
      if (confirm('Are you sure you want to delete this cursos?')) {
        this.$inertia.delete(`/cursors/${this.cursor.id}`)
      }
    }
  }
}
</script>


<style scoped>

</style>
