

var tempClients = ["cameron", "jack", "lachlan", "kyle", "zach"];

tempClients.forEach(client => {
    document.getElementById('client-list').innerHTML += `<a href=""><div class="item">${client}</div></a>`
});
