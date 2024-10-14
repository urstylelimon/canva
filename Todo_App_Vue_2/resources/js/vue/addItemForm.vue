<template>
  <div>
 
    <button class="btn btn-info p-2 mb-2" data-bs-toggle="modal" data-bs-target="#addItemModal">
      Add
    </button>

    <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addItemModalLabel">Add New Item</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="text" class="form-control" v-model="item.name" placeholder="Enter item name" autofocus>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="addItem">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      item: { name: '' },
      items: []  
    };
  },
  mounted() {
    this.loadItems(); 
  },
  methods: {
    loadItems() {
      axios.get('/api/items')
        .then(response => {
          this.items = response.data.data; 
        })
        .catch(error => {
          console.error('Error loading items:', error);
        });
    },
    addItem() {
      if (this.item.name.trim() === '') {
        alert('Item name is required!');
        return;
      }
      
      if (this.items.some(existingItem => existingItem.name.toLowerCase() === this.item.name.toLowerCase())) {
        alert('An item with this name already exists!');
        return;
      }

      axios.post('/api/item/store', { item: this.item })
        .then(response => {
          if (response.status === 201) {
            this.items.push(response.data); 
            this.item.name = ''; 
            this.$emit('reloadlist'); 
            this.closeModal(); 
          }
        })
        .catch(error => {
          console.error('Error posting item:', error);
        });
    },
    closeModal() {
      const modal = bootstrap.Modal.getInstance(document.getElementById('addItemModal'));
      if (modal) {
        modal.hide();
      } else {
        console.error('Modal instance not found');
      }
    }
  }
};
</script>

<style scoped>
</style>
