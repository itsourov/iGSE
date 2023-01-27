function data() {
    function getThemeFromLocalStorage() {
        // if user already changed the theme, use it
        if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
        }

        // else return their preferences
        return (
            !!window.matchMedia &&
            window.matchMedia('(prefers-color-scheme: dark)').matches
        )
    }

    function setThemeToLocalStorage(value) {
        window.localStorage.setItem('dark', value)
    }

    return {
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark
            setThemeToLocalStorage(this.dark)
        },
        mobileMenuExpanded: false,
        toggleMobileMenu() {
            this.mobileMenuExpanded = !this.mobileMenuExpanded
        },
        profileDropdownShow: false,
        toggleProfileDropdown() {
            this.profileDropdownShow = !this.profileDropdownShow
        },
        cartPreviewOpen: false,
        toggleCartPreview() {
            this.cartPreviewOpen = !this.cartPreviewOpen
        },




    }
}

window.addEventListener('scrollToId', function (id) {
    document.getElementById(id.detail).scrollIntoView({
        behavior: 'smooth'
    });
});