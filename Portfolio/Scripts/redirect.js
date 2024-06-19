function RedirectToIndex() {
    if (window.location.pathname.includes('/Projects/')) {
        window.location.href = '../index.html';
    }
    else {
        window.location.href = 'index.html';
    }
}
function RedirectToProjects() {
    if (window.location.pathname.includes('/Projects/')) {
        window.location.href = '../projects.html';
    }
    else {
        window.location.href = 'projects.html';
    }
}