"while(true){aksi}"
"While = Selama kondisi bernilai true maka lakukan aksi dalam kurawal"
// while (true){
//     console.log('Hellow');
// }

"ada 2 cara menghentikan infinite loop "

//berdasarkan aksi dari user
/* 
var ulang = true;
while (ulang){
    console.log('Hello world!');
    ulang = confirm('Lagi?');
}
*/

//dihentikan program ( 3 komponen penting )
/*
nilai awal
while (kondisi terminasi atau kapan loop nya akan berhenti) {
    aksi
    lalu harus ada increment atau decrement
}
*/
/*
var nilaiAwal = 1;
while(nilaiAwal <= 10){
    console.log('Hello World!');
    nilaiAwal++;
}
*/

//contoh kasus
var nilaiAwal = 1;
while(nilaiAwal <= 10){
    console.log(' Hello ' + nilaiAwal + '');
    nilaiAwal++;
}