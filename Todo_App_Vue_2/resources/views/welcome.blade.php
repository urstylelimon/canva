<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="bg-light">
    <div id="vue-app" class="container p-5 bg-white shadow-sm rounded-3 mt-5">
        <h2 class="mb-4 text-center bg-info">TODO LIST</h2>
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <input type="text" v-model="searchQuery" @input="debouncedSearch" class="form-control me-2"
                placeholder="Search items...">
            <div class="dropdown">
                <select v-model="perPage" @change="getList(1)" class="form-select w-auto">
                    <option value="5">5 per page</option>
                    <option value="10">10 per page</option>
                    <option value="15">15 per page</option>
                    <option value="20">20 per page</option>
                    <option value="30">30 per page</option>
                </select>
            </div>
        </div>

        <!-- Button to Open Modal -->
        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addItemModal">Add +</button>

        <!-- Modal -->
        <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addItemModalLabel">Add New Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control mb-2" v-model="item.name"
                            placeholder="Enter item name">
                        <select class="form-control mb-2" v-model="item.day_of_week">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                        <input type="time" class="form-control" v-model="item.time_of_day" placeholder="Select time">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="addItem">Add Item</button>
                    </div>
                </div>
            </div>
        </div>

        <div v-for="item in items" :key="item.id"
            class="d-flex justify-content-between align-items-center mb-2">
            <input type="checkbox" class="form-check-input me-2" @change="updateCheck(item.id)"
                v-model="item.completed" />
            <span
                :class="[item.completed ? 'text-decoration-line-through text-secondary' : '', 'flex-grow-1']">@{{ item.name }}
                - @{{ item.day_of_week }} at @{{ item.time_of_day }}</span>
            <button v-if="item.completed" @click="confirmDelete(item.id)" class="btn btn-danger btn-sm">Delete</button>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
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
            el: '#vue-app',
            data: {
                items: [],
                item: {
                    name: '',
                    completed: false
                },
                perPage: 5,
                currentPage: 1,
                lastPage: 1,
                searchQuery: ''
            },
            methods: {
                debounce(func, wait, immediate) {
                    let timeout;
                    return function() {
                        const context = this;
                        const args = arguments;
                        const later = function() {
                            timeout = null;
                            if (!immediate) func.apply(context, args);
                        };
                        const callNow = immediate && !timeout;
                        clearTimeout(timeout);
                        timeout = setTimeout(later, wait);
                        if (callNow) func.apply(context, args);
                    };
                },
                debouncedSearch: function() {
                    this.debounce(() => {
                        // this.searchQuery = ''; // Clear the search query
                        this.getList(1); // Move to the first page
                    }, 1500)();
                },
                getList(page = 1) {
                    this.currentPage = page;
                    axios.get(`api/items?page=${page}&query=${this.searchQuery}&perPage=${this.perPage}`)
                        .then(response => {
                            this.items = response.data.data;
                            this.currentPage = response.data.current_page;
                            this.lastPage = response.data.last_page;
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                },
                loadItems() {
                    this.getList(this.currentPage);
                },
                addItem() {
                    if (this.item.name.trim() === '') {
                        alert('Item name is required!');
                        return;
                    }
                    if (this.items.some(existingItem => existingItem.name.toLowerCase() === this.item.name
                            .toLowerCase())) {
                        alert('This item already exists!');
                        return;
                    }
                    axios.post('/api/item/store', {
                            item: {
                                name: this.item.name,
                                day_of_week: this.item.day_of_week,
                                time_of_day: this.item.time_of_day
                            }
                        })
                        .then(response => {
                            if (response.status === 201) {
                                this.items.push(response.data);
                                this.item.name = ''; // Clear input after adding
                                var modalElement = document.getElementById('addItemModal');
                                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                                modalInstance.hide(); // Close modal on success
                                this.getList(1);
                            }
                        })
                        .catch(error => {
                            console.error('Error posting item:', error);
                        });
                },
                updateCheck(itemId) {
                    axios.put(`api/item/${itemId}`, {
                            completed: this.items.find(item => item.id === itemId).completed
                        })
                        .then(response => {
                            console.log('Item updated successfully:', this.item);
                        })
                        .catch(error => {
                            console.error("Error updating item:", error.response ? error.response.data : error);
                        });
                },
                confirmDelete(id) {
                    if (confirm("Are you sure you want to delete this item?")) {
                        this.deleteItem(id);
                    }
                },
                deleteItem(id) {
                    axios.delete(`/api/item/${id}`).then(response => {
                        if (response.status === 200) {
                            this.searchQuery = ''; // Clear the search query
                            this.getList(1); // Reload from the first page after deleting an item
                        }
                    }).catch(error => {
                        console.error('Error deleting item:', error);
                    });
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f7f7f7;
        }

        .container {
            max-width: 800px;
        }

        .input-group,
        select.form-select {
            flex-grow: 1;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</body>

</html>
