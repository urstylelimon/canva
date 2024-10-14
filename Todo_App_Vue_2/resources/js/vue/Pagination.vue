<!-- <template>
    <nav aria-label="Page navigation example" class="mt-4">
      <ul class="pagination">
        <!-- First Page Navigation -->
        <li class="page-item">
          <a class="page-link" href="#" aria-label="First" @click="changePage(1)">
            ⏮
          </a>
        </li>
  
        <!-- Previous Page Navigation -->
        <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
          <a class="page-link" href="#" aria-label="Previous" @click="changePage(currentPage - 1)">
            ⏪
          </a>
        </li>
  
        <!-- Page Number Links -->
        <li v-for="page in pages" :key="page" :class="{ 'active': page === currentPage }" class="page-item">
          <a class="page-link" href="#" @click.prevent="changePage(page)">
            {{ page }}
          </a>
        </li>
  
        <!-- Next Page Navigation -->
        <li class="page-item" :class="{ 'disabled': currentPage === lastPage }">
          <a class="page-link" href="#" aria-label="Next" @click="changePage(currentPage + 1)">
            ⏩
          </a>
        </li>
  
        <!-- Last Page Navigation -->
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Last" @click="changePage(lastPage)">
            ⏭
          </a>
        </li>
      </ul>
    </nav>
  </template>
  
  <script>
  export default {
    props: {
      currentPage: {
        type: Number,
        required: true
      },
      lastPage: {
        type: Number,
        required: true
      }
    },
    computed: {
      pages() {
        let pages = [];
        for (let i = 1; i <= this.lastPage; i++) {
          pages.push(i);
        }
        return pages;
      }
    },
    methods: {
      changePage(page) {
        if (page < 1 || page > this.lastPage || page === this.currentPage) return;
        this.$emit('page-changed', page);
      }
    }
  }
  </script>
  
  <style scoped>
  .pagination {
    display: flex;
    list-style: none;
    padding: 0;
  }
  .page-item {
    margin: 0 2px;
  }
  .page-item .page-link {
    border: 1px solid #ccc;
    padding: 5px 8px;
    color: #333;
    cursor: pointer;
  }
  .page-item .active .page-link {
    background-color: #4f8bcc;
    color: white;
  }
  .page-item.disabled .page-link {
    color: grey;
    cursor: not-allowed;
  }
  </style>
   -->