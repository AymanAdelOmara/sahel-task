<template>
    <div class="main-sidebar main-sidebar-sticky side-menu">
        <div class="sidemenu-logo">
            <a class="main-logo" href="javascript:void(0)">
                <img :src="this.$imagePath + '/brand/logo.png'" class="header-brand-img desktop-logo" alt="logo">
                <img :src="this.$imagePath + '/brand/logo-w.png'" class="header-brand-img desktop-logo theme-logo" alt="logo">
            </a>
        </div>
        <div class="main-sidebar-body">
            <ul class="nav">
                <li class="nav-item">
                    <router-link class="nav-link" active-class="activeRouter" to="/admin/" exact>
                        <i class="fe fe-airplay"></i><span class="sidemenu-label">الرئيسية</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "AppSideMenu",
    mounted() {
        const body = $('body');
        $('.main-sidebar .with-sub').on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass('show');
            $(this).parent().siblings().removeClass('show');
        });
        $(document).on('click touchstart', function (e) {
            e.stopPropagation();
            if (!$(e.target).closest('.main-header-menu-icon').length) {
                const sidebarTarg = $(e.target).closest('.main-sidebar').length;
                if (!sidebarTarg) {
                    body.removeClass('main-sidebar-show');
                }
            }
        });
        $(document).on('click', '#mainSidebarToggle', function (event) {
            event.preventDefault();
            if (window.matchMedia('(min-width: 768px)').matches) {
                body.toggleClass('main-sidebar-hide');
            } else {
                body.toggleClass('main-sidebar-show');
            }
        });
        $(".side-menu").hover(() => {
            if (body.hasClass('main-sidebar-hide')) {
                body.addClass('main-sidebar-open');
            }
        }, () => {
            if (body.hasClass('main-sidebar-hide')) {
                body.removeClass('main-sidebar-open');
            }
        });
        new PerfectScrollbar('.side-menu', {suppressScrollX: true});
    }
}
</script>

