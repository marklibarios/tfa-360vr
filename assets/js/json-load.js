async function getJson() {
    const response = await fetch('./database.json');
    const data = await response.json();
    return data;
}

getJson().then(data=>{ document.getElementById("myUL").innerHTML = ` ${data.map(template).join('')} `; });