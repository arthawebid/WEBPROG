function hpsmhs(){
    let konf = confirm("Yakin akan menghapus Data?");
    if(konf){
        document.getElementById("deletemhs").style.display="none"
        
        let nim = document.getElementById("txnim").value;
        let dta = "txNIM="+nim
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost/pemrogk/server/dtmhs-delete.php");
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
    }else{

    }
}