<template>
    <div class="item">
      <input
        type="text"
        @change="updateCheck"
        v-model="item.completed"/>
      <span :class="[item.completed ? 'completed' : '', 'itemText']">{{ item.name }}</span>
      <button @click="confirmDeletion" class="trashcan">
        <font-awesome-icon icon="trash"/>
      </button>
    </div>
  </template>
  
  <script>
  import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
  import axios from 'axios';
  
  export default {
    components: {
      'font-awesome-icon': FontAwesomeIcon
    },
    props: ['item'],
    methods: {
      updateCheck() {
        axios.put(`api/item/${this.item.id}`, {
          completed: this.item.completed
        })
        .then(response => {
          if(response.status == 200) {
            this.$emit('item-updated');
          }
        })
        .catch(error => {
          console.error("Error updating item:", error);
        });
      },
      confirmDeletion() {
        if (confirm("Are you sure you want to delete this item?")) {
          this.removeItem();
        }
      },
      removeItem() {
        axios.delete(`api/item/${this.item.id}`)
        .then(response => {
          if(response.status == 200) {
            this.$emit('item-removed', this.item.id);
          }
        })
        .catch(error => {
          console.error("Error deleting item:", error);
        });
      }
    }
  }
  </script>
  
  <style scoped>
  .completed {
    text-decoration: line-through;
    color: #999;
  }
  .itemText {
    display: flex;
    margin-left: 20px;
  }
  .item {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .trashcan {
    background: #e6e6e6;
    border: none;
    color: #ff0000;
    outline: none;
    cursor: pointer; 
  }
  </style>
  