<template>
    <div class="wrapper">

        <div data-active-color="white" data-background-color="black" data-image="/app-assets/img/sidebar-bg/01.jpg"
            class="app-sidebar">
            <div class="sidebar-header">
                <div class="logo clearfix"><a href="index-2.html" class="logo-text float-left">
                        <span
                            class="text align-middle">Ochacho</span>
                    </a><a id="sidebarToggle" href="javascript:;"
                        class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded"
                            class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;"
                        class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-circle"></i></a></div>
            </div>

            <Sidebar></Sidebar>

            <div class="sidebar-background"></div>

        </div>

        <Nav></Nav>

        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">

                        <slot></slot>

                    </div>
                </div>
            </div>

            <footer class="footer footer-static footer-light">
                <p class="clearfix text-muted text-center px-2"><span>Copyright &copy; 2021
                    <a href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">Ochacho Homes </a>, All rights reserved. </span></p>
            </footer>

        </div>

    </div>

</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Nav from '@/Components/Nav.vue'
    import Sidebar from '@/Components/Sidebar.vue'

    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
            Nav,
            Sidebar,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
