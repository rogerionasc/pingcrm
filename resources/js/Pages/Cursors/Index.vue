<template>
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
      <tr v-for="cursor in cursors" :key="cursor.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
        <td class="border-t">
          <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/contacts/${cursor.id}/edit`">
            {{ cursor.name }}
            <!--                  <icon v-if="classroom.deleted_at" name="trash" class="flex-shrink-0 ml-2 w-3 h-3 fill-gray-400" />-->
          </Link>
        </td>
        <td class="text-center border-t">
          <Link class="flex py-4" :href="`/contacts/${cursor.id}/edit`" tabindex="-1">
            {{ cursor.description }}
          </Link>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import SearchFilter from "@/Shared/SearchFilter.vue";
import Pagination from "@/Shared/Pagination.vue";

export default {
  components: {
    Link, SearchFilter,
    Head,
    Pagination,
  },
  layout: Layout,
  props: {
    cursors: {
      type: Object,
      required: true,
    }
  },
}
</script>

<style scoped>

</style>
