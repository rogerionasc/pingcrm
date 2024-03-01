<template>
  <div>
    <Head title="Edit Contact"/>
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/cursors">Cursors</Link>
      <span class="text-indigo-400 font-medium">/</span>
            {{cursor.name}}
    </h1>

  </div>

</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import Layout from "@/Shared/Layout.vue";

export default {
  components: {
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
  },
}
</script>


<style scoped>

</style>
