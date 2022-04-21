function searchVR() {
    var input, filter, ul, li, a, i, txtValue;
    var paginate = document.getElementById("my-pagination");

    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByClassName("title")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }

    if (input != '') {
        paginate.style.display = 'none';
    } 
    
    if (input === '') {
            jQuery('#paginating_div').simplePagination({
                items_per_page: 4,
                pagination_container: '.gallery_inne',
            });
    }
}