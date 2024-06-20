function includeHeader() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', './assets/components/header.html', false); // false makes it synchronous
    xhr.send(null);
    
    if (xhr.status === 200) {
        document.getElementById('site-header').innerHTML = xhr.responseText;
    } else {
        console.error('Error loading HTML:', xhr.status, xhr.statusText);
    }
}

window.onload = includeHeader();