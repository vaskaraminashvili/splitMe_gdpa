import {defineStore} from "pinia"

export const useGeneralStore = defineStore('general', {
  state: () => ({
    count: 33,
  }),
  getters: {
    doubleCount() {
      return 'test ' + this.count;
    },

  },
  actions: {
    increment() {
      this.count++
    },

  },
})
