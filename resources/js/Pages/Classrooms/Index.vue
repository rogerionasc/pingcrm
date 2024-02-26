<template>
  <Head title="Classrooms" />
  <h1 class="mb-8 text-3xl font-bold">Classrooms</h1>
  <div class="flex items-center justify-end mb-6">
    <Link class="btn-indigo" href="/classrooms/create">
      <span>Create</span>
      <span class="hidden md:inline">&nbsp;Contact</span>
    </Link>
  </div>
  <div class="bg-white rounded-md shadow overflow-x-auto">
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 pt-6 px-6">Name</th>
      </tr>
      <tr v-for="classroom in classrooms.data" :key="classroom.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
      </tr>
<!--      <tr v-for="classroom in classrooms.data" :key="classroom.id" class="hover:bg-gray-100 focus-within:bg-gray-100">-->
<!--        <td class="border-t">-->
<!--          <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/contacts/${classroom.id}/edit`">-->
<!--            {{ contact.name }}-->
<!--            <icon v-if="classroom.deleted_at" name="trash" class="flex-shrink-0 ml-2 w-3 h-3 fill-gray-400" />-->
<!--          </Link>-->
<!--        </td>-->
<!--      </tr>-->
<!--      <tr v-if="contacts.data.length === 0">-->
<!--        <td class="px-6 py-4 border-t" colspan="4">No contacts found.</td>-->
<!--      </tr>-->
    </table>
  </div>
</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import SearchFilter from "@/Shared/SearchFilter.vue";
import Icon from "@/Shared/Icon.vue";

export default {
  components: {
    Icon,
    Link, SearchFilter,
    Head,
  },
  layout: Layout,
  props: {
    classrooms: Object,
  },
}
</script>

<style scoped>

</style>
