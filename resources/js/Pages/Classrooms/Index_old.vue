<template>

  <Head title="Classrooms"/>
  <h1 class="mb-8 text-3xl font-bold">Classroom</h1>
  <div class="flex items-center justify-end mb-6">
    <Link class="btn-indigo " href="/classrooms/create">
      <span>Create</span>
      <span class="hidden md:inline">&nbsp;Classroom</span>
    </Link>
  </div>
  <div class="bg-white rounded-md shadow overflow-x-auto">
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 pt-6 px-6">Name</th>
      </tr>
      <tr v-for="classroom in classrooms.data" :key="classroom.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
        <td class="border-t">
          <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/classrooms/${classroom.id}/edit`">
            {{ classroom.name }}
            <icon v-if="classroom.deleted_at" name="trash" class="flex-shrink-0 ml-2 w-3 h-3 fill-gray-400" />
          </Link>
        </td>
      </tr>
      <tr v-if="classrooms.data.length === 0">
        <td class="px-6 py-4 border-t" colspan="4">No contacts found.</td>
      </tr>
    </table>
  </div>
</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3'
import Icon from '@/Shared/Icon'
import Layout from '@/Shared/Layout'
import throttle from "lodash/throttle";
import pickBy from "lodash/pickBy";

export default {
  components: {
    Head,
    Link,
    Icon,
  },
  props: {
    classrooms: Object,
  },
  layout:
    Layout,
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/classrooms', pickBy(this.form), { preserveState: true })
      }, 150),
    },
  },
}
</script>

<style scoped>

</style>

