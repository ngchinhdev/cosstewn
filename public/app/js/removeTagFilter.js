function removeFilterOption() {
    var url = new URL(window.location.href);
    url.searchParams.delete('filterOption');
    window.location.href = url.toString();
}
function removeFilterPrice() {
    var url = new URL(window.location.href);
    url.searchParams.delete('priceRange');
    window.location.href = url.toString();
}
function removeFilterRate() {
    var url = new URL(window.location.href);
    url.searchParams.delete('rateRange');
    window.location.href = url.toString();
}