const getHashParamValue = (name) => {
    const re = new RegExp('[#&]' + name + '=([^&]*|&|$)');
    const result = re.exec(window.location.hash);
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
            for (let el of pagination.children) {
                pagination.removeChild(el);
            }
            let newPaginationHTML = '';
            if (pageNum > 1)
                newPaginationHTML += '<a href="#page=' + (pageNum - 1) + '">&laquo</a>';
            for (let i = 0; i < 5; i++) {
                const p = pageNum > 2 ? i + pageNum - 2 : i + 1;
                if (p === pageNum) 
                    newPaginationHTML += '<a href="#page=' + p + '" class="active">' + p + '</a>';
                else
                    newPaginationHTML += '<a href="#page=' + p + '">' + p + '</a>';
            }
            newPaginationHTML += '<a href="#page=' + (pageNum + 1) + '">&raquo</a>';
            pagination.innerHTML = newPaginationHTML;
        }
    }
}

window.onload = () => {
    updatePagination();
}

window.onhashchange = () => {
    updatePagination();
}
