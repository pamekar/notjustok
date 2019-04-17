<template>
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default block-header-rtl">
            <h3 class="block-title">Records
                <small>Advanced Search</small>
            </h3>
            <div class="block-options">
                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-file-pdf"></i> PDF</button>
                <button type="button" class="btn btn-sm btn-success"><i class="fa fa-file-excel"></i> CSV</button>
            </div>
        </div>

        <div class="block-content block-content-full">
            <div class="form-inline mb-4">
                <div class="input-group mb-2 mr-2 mb-sm-0">
                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        ISRC(s) =
                                    </span>
                    </div>
                    <v-select class="form-control" multiple v-model="isrc" :options="options" v-on:search:focus="getOptions('isrc')" @input="getAllRecords"></v-select>
                </div>
                <div class="input-group mb-2 mr-2 mb-sm-0">
                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Label(s) =
                                    </span>
                    </div>
                    <v-select class="form-control" multiple v-model="label" :options="options" v-on:search:focus="getOptions('label')" @input="getAllRecords"></v-select>
                </div>
                <div class="input-group mb-2 mr-2 mb-sm-0">
                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Artist(s) =
                                    </span>
                    </div>
                    <v-select class="form-control" multiple v-model="artist" :options="options" v-on:search:focus="getOptions('artist')" @input="getAllRecords"></v-select>
                </div>
                <div class="input-group mb-2 mr-2 mb-sm-0">
                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Product Title(s) =
                                    </span>
                    </div>
                    <v-select class="form-control" multiple v-model="product_title" :options="options" v-on:search:focus="getOptions('product_title')" @input="getAllRecords"></v-select>
                </div>
                <div class="input-group mb-2 mr-2 mb-sm-0">
                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Country(ies) =
                                    </span>
                    </div>
                    <v-select class="form-control" multiple v-model="country" :options="options" v-on:search:focus="getOptions('country')" @input="getAllRecords"></v-select>
                </div>
                <div class="input-group mb-2 mr-2 mb-sm-0">
                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Order By
                                    </span>
                    </div>
                    <v-select class="form-control" v-model="order" :options="['isrc','label','artist','product_title','country','start_at','end_at']" @input="getAllRecords"></v-select>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Batch Code</th>
                        <th>ISRC</th>
                        <th>Artist</th>
                        <th>Product Title</th>
                        <th>Container Title</th>
                        <th>Label</th>
                        <th>Country</th>
                        <th>Total Plays</th>
                        <th>Revenue</th>
                        <th>Start At</th>
                        <th>End At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="record in records">
                        <td class="text-center" style="width: 80px;">#</td>
                        <td>{{record.batch_code}}</td>
                        <td>{{record.isrc}}</td>
                        <td>{{record.artist}}</td>
                        <td>{{record.product_title}}</td>
                        <td>{{record.container_title}}</td>
                        <td>{{record.label}}</td>
                        <td>{{record.country}}</td>
                        <td>{{record.total_plays}}</td>
                        <td>{{record.revenue}}</td>
                        <td>{{record.start_at}}</td>
                        <td>{{record.end_at}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <paginate
                    :page-count="pageCount"
                    :click-handler="getAllRecords"
                    :prev-text="'Prev'"
                    :next-text="'Next'"
                    container-class="pagination justify-content-center pagination-sm"
                    active-class="page-item active"
                    disabled-class="page-item disabled"
                    page-class="page-item"
                    next-class="page-item"
                    prev-class="page-item"
                    page-link-class="page-link"
                    next-link-class="page-link"
                    prev-link-class="page-link"
            >
            </paginate>
        </div>
    </div>
    <!-- /.content-wrap -->
</template>
<script>
    import Paginate from 'vuejs-paginate'
    import vSelect from 'vue-select';
    import 'vue-select/dist/vue-select.css';
    
    import axios from 'axios';
    
    export default {
        data() {
            return {
                pageCount:     1,
                records:       [],
                isrc:          [],
                label:         [],
                artist:        [],
                product_title: [],
                country:       [],
                order:         [],
                options:       []
                
            }
        },
        components: {
            'paginate': Paginate,
            'v-select': vSelect
        },
        computed:   {},
        created() {
            this.getAllRecords();
        },
        methods:    {
            color(colors) {
                return this.colors[Math.floor(Math.random() * colors.length)];
            },
            getAllRecords(page = 1) {
                axios.get(`/api/records/search?isrc=${this.isrc}&label=${this.label}&artist=${this.artist}&q=${this.product_title}&country=${this.country}&order=${this.order}&page=${page}`)
                    .then(({data}) => {
                        this.records = data.data;
                        this.pageCount = data.last_page;
                    });
            },
            searchRecords() {
                axios.get(`/api/records/search?isrc=${this.isrc}&label=${this.label}&artist=${this.artist}&q=${this.product_title}&country=${this.country}&order=${this.order}&page=${page}`)
                    .then(({data}) => {
                        this.records = data.records.data;
                        this.pageCount = data.records.last_page;
                    });
            },
            getOptions(column) {
                this.options = [];
                axios.get(`/api/records/options/${column}`)
                    .then(({data}) => {
                        this.options = data;
                    });
            }
        },
        props:      {
            colors:   Array,
            category: String
        }
    }
</script>