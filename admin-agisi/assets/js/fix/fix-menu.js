function responsiveMenu() {
    if (window.innerWidth <= 500) {
        body=document.body
        body.setAttribute("data-layout-config",`{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":true,"darkMode":false, "showRightSidebarOnStart": false}`)
        if (body.getAttribute('data-leftbar-compact-mode')=='condensed') {
            body.setAttribute('data-leftbar-compact-mode','scrollable')
        }
    }else{
        body.setAttribute('data-leftbar-compact-mode','condensed')
    }
}

window.addEventListener('resize',responsiveMenu)
window.addEventListener('DOMContentLoaded',responsiveMenu)