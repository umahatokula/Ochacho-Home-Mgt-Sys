<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <section id="basic-form-layouts">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="content-header">Add Estate</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form>

                <div class="card">
                    <div class="card-body">
                        <div class="px-3">
                                <div class="form-body">
                                    <h4 class="form-section"> <i class="icon-user"></i> Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <jet-label for="name" value="Name" />
                                                <jet-input id="name" type="text" v-model="form.name" class="form-control" autofocus />
                                                <small class="text-danger" v-if="errors.name">{{ errors.name }}</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <jet-label for="address" value="Address" />
                                                <jet-input id="address" type="text" v-model="form.address" class="form-control" autofocus />
                                                <small class="text-danger" v-if="errors.address">{{ errors.address }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="px-3">
                                <div class="form-body">
                                    <h4 class="form-section"> <i class="icon-user"></i> Properties</h4>
                                    <a href="#" @click.prevent="addProperty" class="btn btn-primary btn-sm"><i class="fa fa-plus font-medium-3 mr-2"></i>  Add Property</a>
                                    <div class="row" v-for="(property, index) in properties"  :key="index">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <jet-label for="property_id" value="Property" />
                                                <select v-model="property.property_id" class="form-control">
                                                    <option disabled value="">Please select one</option>
                                                    <option v-for="propertyGroup in propertyGroups" :key="propertyGroup.id" v-bind:value="propertyGroup.id">{{ propertyGroup.name }}</option>
                                                </select>
                                                <small class="text-danger" v-if="errors.property_id">{{ errors.property_id }}</small>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <jet-label for="price" value="Price" />
                                                <jet-input id="price" type="text" v-model="property.price" v-bind:value="properties.price" class="form-control" autofocus />
                                                <small class="text-danger" v-if="errors.price">{{ errors.price }}</small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <a @click.prevent="removeProperty(index)" class="btn btn-danger btn-sm mt-4"><i class="fa fa-minus font-medium-3 mr-2"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-danger mr-1">
                        <i class="icon-trash"></i> Cancel
                    </button>
                    <button @click.prevent="submit" type="submit" class="btn btn-success" :disabled="form.processing">
                        <i class="icon-note"></i> Save
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>

    </app-layout>
</template>

<script>
    import {
        defineComponent
    } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Pagination from '@/Components/Pagination'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from '@/Jetstream/Checkbox'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'
    import JetInputError from '@/Jetstream/InputError'
    import {
        Link
    } from '@inertiajs/inertia-vue3';
    import Multiselect from 'vue-multiselect'

    export default defineComponent({
        props: {
            estate: Object,
            propertyGroups: Object,
            errors: Object,
        },

        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetInputError,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            AppLayout,
            Pagination,
            Link,
            Multiselect,
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    address: '',
                }),
                properties: [
                    {
                        property_id: null,
                        price: null,
                    }
                ],
            }
        },

        methods: {
            addProperty() {
                this.properties.push({
                        property_id: null,
                        price: null,
                    })
            },
            removeProperty(index) {
                this.properties.length > 1 ? this.properties.splice(index, 1) : null
            },
            submit() {
                this.form
                .transform((data) => ({
                    ...data,
                    properties: this.properties,
                }))
                .put(`/estates/${this.estate.id}`, this.form, {
                    onFinish: () => this.form.reset(),
                })
            }
        },

        created() {
            this.form.name = this.estate.name
            this.form.address = this.estate.address

            this.properties = this.estate.property_groups.map(obj => {
                let p = {}
                p['property_id'] = obj.pivot.property_group_id
                p['price'] = obj.pivot.price

                return p
            })
        }

    })

</script>
