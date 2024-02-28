<template>
  <div>
    <Head title="Cursors"/>
    <h1 class="mb-8 text-3xl font-bold">Cursors</h1>
    <div class="flex items-center justify-end mb-6">
      <Link class="btn-indigo" href="/cursors/create">
        <span>Create</span>
        <span class="hidden md:inline">&nbsp;Cursors</span>
      </Link>
    </div>
    <div class="bg-white rounded-md shadow overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <tr class="text-center font-bold">
          <th class="pb-4 pt-6 px-6 w-1/3">Name</th>
          <th class="pb-4 pt-6 px-6">Description</th>
        </tr>
        <tr v-for="cursor in cursors.data" :key="cursor.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
          <td class="border-t">
            <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/cursors/${cursor.id}/edit`">
              {{ cursor.name }}
            </Link>
          </td>
          <td class="text-center border-t">
            <Link class="flex py-4" :href="`/cursors/${cursor.id}/edit`" tabindex="-1">
              {{ cursor.description }}
            </Link>
          </td>
        </tr>
      </table>
    </div>
    <pagination class="mt-6" :links="cursors.links" />
  </div>
</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import Pagination from '@/Shared/Pagination.vue';
import Layout from '@/Shared/Layout';

export default {
  components: {
    Link,
    Head,
    Pagination,
  },
  layout: Layout,
  props: {
    cursors: Object,
  },

};
</script>


<style scoped>

</style>
