{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<div id="app" class="container mt-5">
    <button class="btn btn-info mb-2" @click="showModal">Add Item</button>

    <div v-for="item in items" :key="item.id" class="item">
        <input type="checkbox" class="form-check-input me-2" @change="toggleCompletion(item)" v-model="item.completed">
        {{ item.name }}
        <button v-if="item.completed" class="btn btn-danger btn-sm" @click="deleteItem(item.id)">Delete</button>
    </div>

    <nav aria-label="Page navigation example" class="mt-4">
        <ul class="pagination">
            <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                <button class="page-link" @click="changePage(currentPage - 1)">Previous</button>
            </li>
            <li class="page-item" :class="{ 'disabled': currentPage === lastPage }">
                <button class="page-link" @click="changePage(currentPage + 1)">Next</button>
            </li>
        </ul>
    </nav>
</div>

<script>
new Vue({
    el: '#app',
    data: {
        items: [],
        item: { name: '', completed: false },
        currentPage: 1,
        lastPage: 1
    },
    methods: {
        loadItems() {
            axios.get(`/api/items?page=${this.currentPage}`).then(response => {
                this.items = response.data.data;
                this.lastPage = response.data.last_page;
            }).catch(error => {
                console.error('Error loading items:', error);
            });
        },
        addItem() {
            if (this.item.name.trim() === '') {
                alert('Item name is required!');
                return;
            }
            axios.post('/api/item/store', this.item).then(response => {
                if (response.status === 201) {
                    this.items.push(response.data);
                    this.item.name = '';
                    $('#addItemModal').modal('hide'); // Assuming jQuery is used for Bootstrap modals
                }
            }).catch(error => {
                console.error('Error adding item:', error);
            });
        },
        deleteItem(id) {
            axios.delete(`/api/item/${id}`).then(response => {
                if (response.status === 200) {
                    this.items = this.items.filter(item => item.id !== id);
                }
            }).catch(error => {
                console.error('Error deleting item:', error);
            });
        },
        toggleCompletion(item) {
            item.completed = !item.completed;
        },
        showModal() {
            $('#addItemModal').modal('show');
        },
        changePage(page) {
            if (page < 1 || page > this.lastPage || page === this.currentPage) return;
            this.currentPage = page;
            this.loadItems();
        }
    },
    created() {
        this.loadItems();
    }
});
</script>
</body>
</html> --}}
