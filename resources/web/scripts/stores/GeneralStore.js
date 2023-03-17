import {defineStore} from "pinia"

export const useGeneralStore = defineStore('general', {
  state: () => ({
    count: 33,
    data: {},
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
