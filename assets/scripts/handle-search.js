const searchQuery = (key, pageNum, maxItemPerPage) => {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let response = JSON.parse(this.responseText);
            let searchCount = document.getElementById('search-count');
            if (searchCount) searchCount.innerHTML = '' + response.searchCount + ' hasil pencarian.';
            if (response.searchCount > 0) {
                let searchResultList = document.getElementById('search-results');
                if (searchResultList) {
                    searchResultListHTML = '';
                    for (item of response.items) {
                        searchResultListHTML +=
                            '<a href="/detail.php?itemID=' + item.chocoID + '" class="search-card-container">' +
                                '<div class="search-card">' +
                                    '<div class="search-card-image"></div>' +
                                    '<div class="search-card-text">' +
                                        '<h2>' + item.name + '</h2>' +
                                        '<p>Sold: ' + item.amountSold + '</p>' +
                                        '<p>Rp' + item.price + '</p>' +
                                        '<p>Stock: ' + item.amount + '</p>' +
                                        '<p>' + item.description + '</p>' +
                                    '</div>' +
                                '</div>' +
                            '</a>';
                    }
                    searchResultList.innerHTML = searchResultListHTML;
                }
                let paginations = document.getElementsByClassName("pagination");
                if (paginations) {
                    for (let pagination of paginations) {
                        let newPaginationHTML = '';
                        if (pageNum > 1)
                            newPaginationHTML += '<a href="#page=' + (pageNum - 1) + '">&laquo</a>';
                        for (let i = 0; i < 5; i++) {
                            const p = pageNum > 2 ? i + pageNum - 2 : i + 1;
                            if (p > Math.ceil(response.searchCount / maxItemPerPage)) break;
                            if (p === pageNum) 
                                newPaginationHTML += '<a href="#page=' + p + '" class="active">' + p + '</a>';
                            else
                                newPaginationHTML += '<a href="#page=' + p + '">' + p + '</a>';
                        }
                        if (pageNum < Math.ceil(response.searchCount / maxItemPerPage))
                            newPaginationHTML += '<a href="#page=' + (pageNum + 1) + '">&raquo</a>';
                        pagination.innerHTML = newPaginationHTML;
                    }
                }
            } else {
                let searchResultList = document.getElementById('search-results');
                if (searchResultList) {
                    searchResultList.innerHTML =
                            '<a href="#c" class="search-card-container">' +
                                '<div class="search-card">' +
                                    '<div class="search-card-image"></div>' +
                                    '<div class="search-card-text">' +
                                        '<h2>Item tidak ditemukan</h2>' +
                                        '<p>Silakan cari dengan keyword lain.</p>' +
                                    '</div>' +
                                '</div>' +
                            '</a>';
                }
            }
        }
    };
    const url = '/handle-search.php?' +
        'key=' + key +
        '&pageNum=' + pageNum +
        '&maxItemPerPage=' + maxItemPerPage;
    console.log(url);
    xhttp.open('GET', url, true);
    xhttp.send();
};

const getHashParamValue = (name) => {
    const re = new RegExp('[#&]' + name + '=([^&]*|&|$)');
    const result = re.exec(window.location.hash);
    if (!result) return null;
    if (!result[1]) return '';
    return result[1];
}

const getSearchParamValue = (name) => {
    const re = new RegExp('[?&]' + name + '=([^&]*|&|$)');
    const result = re.exec(window.location.search);
    if (!result) return null;
    if (!result[1]) return '';
    return result[1];
}

const getPageNum = () => {
    const pageNum = parseInt(getHashParamValue('page'));
    return pageNum ? pageNum : 1;
}


const updatePagination = () => {
    const pageNum = getPageNum();
    let paginations = document.getElementsByClassName("pagination");
    if (paginations) {
        for (let pagination of paginations) {
            pagination.innerHTML = '';
        }
    }
    let searchResultList = document.getElementById('search-results');
    if (searchResultList) {
        searchResultList.innerHTML =
                            '<a href="#c" class="search-card-container">' +
                                '<div class="search-card">' +
                                    '<div class="search-card-image"></div>' +
                                    '<div class="search-card-text">' +
                                        '<h2>Loading</h2>' +
                                        '<p>...</p>' +
                                    '</div>' +
                                '</div>' +
                            '</a>';
    }
    searchQuery(getSearchParamValue('key'), pageNum, 5);
}

window.onload = () => {
    updatePagination();
}

window.onhashchange = () => {
    updatePagination();
}
