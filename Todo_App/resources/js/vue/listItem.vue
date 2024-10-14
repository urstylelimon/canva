<template>
    <div class="d-flex justify-content-center align-items-center item">
        <button v-if="item.completed" @click="confirmDeletion" class="btn btn-light text-danger p-0 trashcan me-2" style="white-space: nowrap;">
            <font-awesome-icon icon="trash"/>
        </button>
        <input
            type="checkbox"
            class="form-check-input me-2"
            @change="updateCheck"
            v-model="item.completed"/>
        <span :class="[item.completed ? 'text-decoration-line-through text-secondary' : '', 'flex-grow-1']">{{ item.name }}</span>
       
        <span v-if="item.completed" class="badge bg-success ms-20 "> +</span>
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
                if (response.status === 200) {
                    this.$emit('item-updated', this.item);
                    console.log('Item updated successfully:', this.item);
                }
            })
            .catch(error => {
                console.error("Error updating item:", error.response ? error.response.data : error);
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
                if(response.status === 200) {
                    this.$emit('item-removed', this.item.id);
                    console.log('Item removed successfully:', this.item.id);
                  
                }
            })
            .catch(error => {
                console.error("Error deleting item:", error.response ? error.response.data : error);
            });
        },
        
    }
}
</script>

<style scoped>
.item {
    width: 100%;
}
.trashcan {
    min-width: 32px;
    height: 32px;
}
.badge {
    font-size: 0.75em;
}
</style>
