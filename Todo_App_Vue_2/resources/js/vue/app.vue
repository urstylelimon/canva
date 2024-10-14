<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header bg-secondary text-white text-center">
            <h2>Todo List</h2>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
              <add-item-form @reloadlist="getList(1, true)" />
              <input type="text" v-model="searchQuery" @input="getList(1)" class="form-control mb-3" placeholder="Search items...">
              <select v-model="perPage" @change="getList(1)" class="w-full">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="30">30</option>
                
              </select>
            </div>
            <list-view :items="items" @deleteItem="deleteItem" @reloadlist="getList(1, true)" />
            <pagination :current-page="pagination.current_page" :last-page="pagination.last_page" @page-changed="getList"></pagination>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

  
<script>
import axios from 'axios';
import addItemForm from './addItemForm.vue';
import ListView from './listView.vue';
import Pagination from './Pagination.vue';

export default {
  components: { addItemForm, ListView, Pagination },
  data() {
    return {
      items: [],
      pagination: {},
      searchQuery: '',
      perPage: 3
    };
  },
  methods: {
    getList(page = 1, clearSearch = false) {
      if (clearSearch) {
        this.searchQuery = '';
      }
      console.log(`Requesting page ${page} with query ${this.searchQuery} and perPage ${this.perPage}`);
      axios.get(`api/items?page=${page}&query=${this.searchQuery}&perPage=${this.perPage}`)
        .then(response => {
          console.log('Data received:', response.data);
          this.items = response.data.data;
          this.pagination = response.data;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    },
    deleteItem(itemId) {
      axios.delete(`api/items/${itemId}`)
        .then(() => {
          this.getList(1, true); // reload the search query 
        })
        .catch(error => {
          console.error('Error during deletion:', error);
        });
    }
  },
  created() {
    this.getList();
  }
};
</script>

<style scoped>
.container {
  width: 450px; 
  margin: auto; 
}
input[type="text"], select {
  margin-bottom: 1rem; 
}
.d-flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
select.form-control {
  width: 30%;  
}
</style>
