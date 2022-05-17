

var expClients = ["Cameron", "Jack", "Lachlan", "Kyle", "Zach", "Greg", "David", "Theo", "Jill", "June", "Jose"];

expClients.sort();

expClients.forEach(client => {
    document.getElementById('client-list').innerHTML += `<div class="item" onclick="displayDetailed('${client}')">${client}</div>`
});

function sortClients() {

    let keyword = document.getElementById("client-search").value.toLowerCase()

    let tempClients = [];

    expClients.forEach(client => {
        tempClients.push(client.toLowerCase())
    });


    let sortedClients = [];
    tempClients.forEach(client => {
        if (client.startsWith(keyword))
        {
            sortedClients.push(client);
        }

    });
    
    document.getElementById('client-list').innerHTML = "";
    

    if (sortedClients.length == 0)
    {
        document.getElementById('client-list').innerHTML = "no results";
    }
    else
    {
        sortedClients.forEach(client => {
            document.getElementById('client-list').innerHTML += `<div class="item" onclick="displayDetailed('${client}')">${client}</div>`
        });
    
    } 
}

function displayDetailed(clientName)
{
    // just exmple of how details will be displayed
    // actual applicaiton would be haivng a client object that
    // gets data from a database to display in this secton 
    document.getElementById('example-client').innerHTML = clientName;
  
}