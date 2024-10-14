<template>
  <div>
    <div v-for="item in items" :key="item.id">
      <list-item
        :item="item"
        @item-removed="removeItem(item.id)"
        @item-updated="getItemList"
      />
    </div>
  </div>
</template>

<script>
import ListItem from './listItem.vue';

export default {
  props: ['items'],
  components: { ListItem },
  methods: {
    removeItem(itemId) {
      const index = this.items.findIndex(item => item.id === itemId);
      if (index !== -1) {
        this.items.splice(index, 1);
      }
      if (this.currentPage > this.lastPage) {
    
      this.$emit('reloadlist', this.lastPage);
    } else {
  
      this.$emit('reloadlist', this.currentPage);
    }
    },
    getItemList() {
      this.$emit('');
    }
  }
}
</script>

<style scoped>
.item {
  background: #e6e6e6;
  padding: 5px;
  margin-top: 5px;
}
</style>
