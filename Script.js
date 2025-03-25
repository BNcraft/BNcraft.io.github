js
document.getElementById('uploadForm').onsubmit = async function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    let response = await fetch('upload_mod.php', { method: 'POST', body: formData });
    let result = await response.text();
    
    alert(result);
    loadMods();
};

async function loadMods() {
    let response = await fetch('get_mods.php');
    let mods = await response.json();
    let modList = document.getElementById('modList');

    modList.innerHTML = "";
    mods.forEach(mod => {
        let modCard = document.createElement("div");
        modCard.classList.add("modCard");
        modCard.innerHTML = `
            <h3>mod.title</h3>
            <p><strong>Kategori:</strong>{mod.category}</p>
            <p>mod.description</p>
            <a href="{mod.file_url}" download>Modu İndir</a>
        `;
        modList.appendChild(modCard);
    });
}

loadMods();
