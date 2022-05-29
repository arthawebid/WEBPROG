document.getElementById("sukses").style.display="none"
document.getElementById("gagal").style.display="none"

let queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

let urltarget = new URL("http://localhost/pemrogk/server/mhs-q.php")
const nim = urlParams.get('nim')
urltarget.searchParams.set('nim', nim);

const xmlhttp = new XMLHttpRequest()
xmlhttp.open("GET",urltarget)
xmlhttp.send()

xmlhttp.onload=function(){
    const mydta = JSON.parse(this.responseText)
    console.log(mydta["isi"])
    for(i=0;i<mydta["isi"].length;i++){
        document.getElementById("txnim").value=mydta["isi"][i][0]
        document.getElementById("txnama").value=mydta["isi"][i][1]
        document.getElementById("txtgl").value=mydta["isi"][i][4]
        document.getElementById("txjkel").value=mydta["isi"][i][3]
        document.getElementById("txjur").value=mydta["isi"][i][2]
    }
}