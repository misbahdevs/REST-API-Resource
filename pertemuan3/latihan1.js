// cara memanipulasi json dengan menggunakan javascript itu ada 2, yaitu
// JSON.stringify() => untuk mengubah array menjadi JSON dan JSON.parse() => untuk mengubah JSON menjadi array


// mengubah dari object menjadi json
// let mahasiswa = {
//     nama : 'misbah',
//     umur : 19
// }

// console.log(JSON.stringify(mahasiswa));



// mendapatkan data dari file json dengan ajax vanilla javascript
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let data = this.responseText;
//         console.log(data);
//     }
// }
// xhr.open('GET', 'data.json', true);
// xhr.send();


// mendapatkan data dari file json dengan ajax jquery






// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let data = this.responseText;
//         console.log(data);
//     } 
// }
// xhr.open('GET', 'menu.json', true);
// xhr.send();



// menampilkan json dengan ajax jquery

// $.getJSON('menu.json', function(data) {
//     console.log(data);
// })