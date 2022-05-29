function storemhs(){
    document.getElementById("addmhs").style.display="none"

    let nim = document.getElementById("txnim").value;
    let nama = document.getElementById("txnama").value;
    let tgl = document.getElementById("txtgl").value;
    let jkel = document.getElementById("txjkel").value;
    let jur = document.getElementById("txjur").value;
    
    let dta = "txNIM="+nim+"&txNAMA="+nama+"&txTALAG="+tgl+"&txJKEL="+jkel+"&txJUR="+jur
    console.log(dta)

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "http://localhost/pemrogk/server/dtamhs-insertdata.php");
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(dta);

    xmlhttp.onload = function() {
        const mydta = JSON.parse(this.responseText)
        console.log(mydta)
        if(mydta["error"]==0){
            document.getElementById("sukses").style.display="block"
        }else{
            document.getElementById("gagal").style.display="block"
        }
        setTimeout(() => {
            window.location.href="index.php?pg=mhs"
        }, 5000);
    }
}

document.getElementById("sukses").style.display="none"
document.getElementById("gagal").style.display="none"
