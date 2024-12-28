document.getElementById('form-tambah-berita').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const judul = document.getElementById('judul').value;
    const konten = document.getElementById('konten').value;

    
    const beritaBaru = { id: Date.now(), judul, konten };
    tambahBerita(beritaBaru);

    
    this.reset();
});

function tambahBerita(berita) {
    const daftarBerita = document.getElementById('daftar-berita');
    
    const beritaDiv = document.createElement('div');
    beritaDiv.classList.add('berita');
    beritaDiv.innerHTML = `
        <h3>${berita.judul}</h3>
        <p>${berita.konten}</p>
        <button class="hapus-button" onclick="hapusBerita(${berita.id})">Hapus</button>
    `;
    
    daftarBerita.appendChild(beritaDiv);
}

function hapusBerita(id) {
    const daftarBerita = document.getElementById('daftar-berita');
    const beritaDivs = daftarBerita.getElementsByClassName('berita');

    for (let i = 0; i < beritaDivs.length; i++) {
        if (beritaDivs[i].querySelector('button').onclick.toString().includes(id)) {
            daftarBerita.removeChild(beritaDivs[i]);
            break;
        }
    }
}