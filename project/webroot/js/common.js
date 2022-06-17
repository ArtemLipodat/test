function getData(id) {
    let url = '/get_data?id=' + id;
    let ul = document.getElementById(id)
    fetch(url).then(function (response) {
        response.json().then(function (obj){
            console.log(obj)
            obj.map(el => {
                let childDiv = document.createElement('ul')
                childDiv.setAttribute('id', el.id)
                if (el.count > 0) {
                    childDiv.innerHTML = '<li><div class="list_item"><p onclick="getDesc('+ '0,' + el.id +')" class="list">' + el.name + '</p><span onclick="getData('+el.id+')">+</span></div></li>'
                } else {
                    childDiv.innerHTML = '<li><div class="list_item"><p onclick="getDesc('+ '0,' + el.id +')" class="list">' + el.name + '</p></div></li>'
                }
                ul.appendChild(childDiv)
                console.log(el)
            })
        })
    })
}

function getDesc(id, child) {
    const dom = document.getElementById('dom_js');
    let url = '/get_desc?id=0';
    if (id > 0 && child === 0) {
        url = '/get_desc?id=' + id;
    }
    if (child > 0 && id === 0) {
        url = '/get_desc?child=' + child;
    }
    fetch(url).then(function (response) {
        response.json().then(function (obj){
            if (dom.querySelector('.desc')) {
                dom.querySelector('.desc').remove()
            }
            let div = document.createElement('div')
            div.setAttribute('class', 'desc')
            div.innerHTML = obj.desc
            dom.appendChild(div)
        })
    })

}