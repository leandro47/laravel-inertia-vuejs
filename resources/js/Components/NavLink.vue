<template>
  <inertia-link v-if="this.item.route" :href="route(this.item.route)" :class="classes">
    <slot />
  </inertia-link>

  <div v-else>
      <dropdown-module :item="this.item"></dropdown-module>
  </div>

</template>

<script>
import DropdownModule from '@/Components/Navbar/DropdownModule.vue'

export default {
  props: ["item"],
  components: {
      DropdownModule
  },
  computed: {
    classes() {
      return route().current(this.item.route)
        ? "inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
        : "inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out";
    },
  }
};
</script>
