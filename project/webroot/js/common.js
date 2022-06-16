function getData(id) {
    let url = '/get_data?id=' + id;
    console.log(document.body)
    fetch(url).then(function (response) {
        response.text().then(function (text){
            document.body.innerHTML = text
        })
    })
}